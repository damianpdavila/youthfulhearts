/**
 * Site-specific Javascript
 *
 * Form processing, certain animations, etc.
 *
 */

const formNextClick = (evt) => {
    if (evt.target.form.reportValidity()) {
        evt.preventDefault();
        evt.stopImmediatePropagation();

        let thisFormId = "#" + evt.target.form.id;

        // hide current form page, show next, and reset the required form fields (otherwise get invisible validation errors)
        document
            .querySelectorAll(thisFormId + " .form-step-1 .required input")
            .forEach((element) => {
                element.removeAttribute("required");
            });

        document
            .querySelectorAll(thisFormId + " .form-step-2 .required input")
            .forEach((element) => {
                element.setAttribute("required", "required");
            });
        document
            .querySelector(thisFormId + " .form-step-1")
            .classList.add("hidden");
        document
            .querySelector(thisFormId + " .form-step-2")
            .classList.remove("hidden");

        // Update the progress bar
        document
            .querySelector(thisFormId + " .progress-bar")
            .classList.add("w-100");
        document
            .querySelector(thisFormId + " .progress-bar")
            .classList.remove("w-50");
        document.querySelector(thisFormId + " .progress-bar").innerHTML =
            "100%";
    }
};
const formPrevClick = (evt) => {
    evt.preventDefault();
    evt.stopImmediatePropagation();
    backToPageOne("#" + evt.target.form.id);
};

function backToPageOne(thisFormId) {
    // hide current form page, show prev, and reset the required form fields (otherwise get invisible validation errors)
    return new Promise(function (resolve, reject) {
        document
            .querySelectorAll(thisFormId + " .form-step-2 .required input")
            .forEach((element) => {
                element.removeAttribute("required");
            });

        document
            .querySelectorAll(thisFormId + " .form-step-1 .required input")
            .forEach((element) => {
                element.setAttribute("required", "required");
            });
        document
            .querySelector(thisFormId + " .form-step-2")
            .classList.add("hidden");
        document
            .querySelector(thisFormId + " .form-step-1")
            .classList.remove("hidden");

        // Update the progress bar
        document
            .querySelector(thisFormId + " .progress-bar")
            .classList.add("w-50");
        document
            .querySelector(thisFormId + " .progress-bar")
            .classList.remove("w-100");
        document.querySelector(thisFormId + " .progress-bar").innerHTML = "50%";
        resolve(true);
    });
}

function reformatPhoneNumber(phoneNumber = "") {
    if (undefined == phoneNumber) {
        phoneNumber = "";
    } else {
        phoneNumber = phoneNumber.replace(/\D/g, "");
    }
    return phoneNumber;
}

function validateZip(zip) {
    return new Promise(function (resolve, reject) {
        jQuery.get("https://ziptasticapi.com/" + zip, function (data) {
            var parsed = jQuery.parseJSON(data);
            if (typeof parsed.error === "undefined") {
                /* The lead API will convert zip to city/state, so no need to save values, just handle invalids
                    var city = parsed.city.capitalize();
                    jQuery('#city').val(city);
                    jQuery('.location-text').html('in <span class="location">' + city + ', ' + parsed.state + '</span> ');
                    jQuery('#state').val(parsed.state).attr('selected', true);
                    */
                resolve(zip);
            } else {
                reject(false);
            }
        });
    });
}

function validateDOB(selectorDOB) {
    var field = jQuery(selectorDOB);
    var str = field.val();
    var len = str.length;
    
    // If not in expected format yyyy-mm-dd, just take value as is and skip ahead
    let reDate = new RegExp(/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/)
    if (! reDate.test(str)) {
        return false;
    }

    if (len >= 10) {
        birthYear = str.slice(0,4);
        birthYearInt = parseInt(str);
        currentYear = new Date().getFullYear();
        if (birthYear >= currentYear - 18) {
            // field.setCustomValidity('Must be at least 18 years old.');
            console.log("invalid too young");
            field.after(
                '<span id="dob-error" class="help-block young">Must be at least 18 years old.</span>'
            );
            field.val("");
            return false;
        } else if (birthYear <= 1900) {
            // field.setCustomValidity('Birthday must be after 1900.');
            console.log("invalid too old");
            field.after(
                '<span id="dob-error" class="help-block old">Birthday must be after 1900.</span>'
            );
            field.val("");
            return false;
        } else {
            console.log("valid");
            // field.setCustomValidity('');
        }
    } else {
        // field.setCustomValidity('Use birthdate MM/DD/YYYY.');
        console.log("invalid incomplete");
        field.after(
            '<span id="dob-error" class="help-block incomplete">Use birthdate MM/DD/YYYY.</span>'
        );
        field.val("");
        return false;
    }
    return true;
}

function submitLead(leadDataSerialized) {
    return new Promise(function (resolve, reject) {
        jQuery.ajax({
            url: "https://boomermedia.leadportal.com/new_api/api.php",
            type: "POST",
            async: true,
            data: leadDataSerialized,
            dataType: "json",
            success: function (data) {
                console.log("Lead sent successfully");
                // console.log(data);
                resolve(data);
            },
            error: function (data, status, response) {
                console.log("Lead send error");
                console.log(data);
                console.log(status);
                console.log(response);
                reject(status);
            },
        });
    });
}

function submitTheLead(callParams) {
    submitLead(callParams)
        .then((result) => {
            if (
                result.hasOwnProperty("response") &&
                result.response.hasOwnProperty("error")
            ) {
                // Lead capture system rejected the submission
                console.log("submitLead error.");
                //sendErrorEmail(callParams);
            }
        })
        .catch((err) => {
            console.log("submitLead failed.");
            //sendErrorEmail(callParams);
        });

    setTimeout(function () {
        let contentHeight = jQuery("form.lead-capture").height();
        let phone = jQuery("#masthead nav div.cta-button-text").text().trim().split(" ")[0];
        let successMsg =
            '<div class="thank-you" style="height:' +
            contentHeight +
            'px;">' +
            "<h2>Success!</h2>" +
            "<p>A licensed agent will contact you shortly. If you would like to speak with a licensed agent immediately please call</p>" +

            '<a class="cta" href="tel:' + phone + '">' +
            "<div class='cta-button text-white bg-color-accent'>" +
            "<div class='cta-button-icon'><i class='fas fa-phone-alt' aria-hidden='true'></i></div>"+
            "<div class='cta-button-text'>"+ phone +
                "<br><span>Speak with a Licensed Agent</span>"+
            "</div>" +
            "</div>" +
            "</div></a>";
        jQuery("form.lead-capture").replaceWith(jQuery(successMsg));
        jQuery("#loading").modal("hide");
        jQuery("body").removeClass("modal-open");
    }, 2000);
}

function reformatDate(formData) {
    // Boberdoo requires m/d/y but HTML element val is y-m-d
    let dobLit = "DOB=";

    let litIdx = formData.indexOf(dobLit);
    let formDate = formData.slice(litIdx+4, litIdx + 4 + 10);
    let formY = formDate.split("-")[0];
    let formM = formDate.split("-")[1];
    let formD = formDate.split("-")[2];
    let newDate = formM + "/" + formD + "/" + formY

    let origDate = "DOB=" + formDate;
    let replaceDate = "DOB=" + newDate;
    
    return formData.replace(origDate, replaceDate);
    
};

/**
 * Setting this variable stops lead submission into database but performs full validation in API
 *
 */
// If testing
// var in_testing = "Test_Lead=1&";
// Normally
var in_testing = "";

if (in_testing.length > 0) {
    jQuery(".testing-notification").show();
}

/**
 * Process form to submit lead
 *
 * All lead API data stored in form, including API setup params.
 * Basic validations handled by HTML form input validation.
 * Validate zip via API before submission.
 *
 */
jQuery("form.lead-capture").submit(function (e) {
    e.preventDefault();

    if (! validateDOB("#" + e.target.id + " #inputDOB")) {
        return;
    }
    let which_form = "#" + e.target.id;
    jQuery("#loading").modal("show");

    let phone = jQuery(which_form + " #inputPhone");
    phone.val(reformatPhoneNumber(phone.val()));

    let zip = jQuery(which_form + " [name=Zip]").val();
    validateZip(zip)
        .then((zip) => {
            let formData = jQuery(which_form).serialize();
            formData = reformatDate(formData);
            let callParams = in_testing + formData;
            //console.log(callParams);
            submitTheLead(callParams);
        })
        .catch((err) => {
            // back to page 1 and show error
            backToPageOne("#" + e.target.id)
                .then(() => {
                    jQuery(which_form + " [name=Zip]").val("");
                    jQuery(which_form + " [name=Zip]").attr(
                        "placeholder",
                        "Please enter a valid U.S. zip"
                    );
                    e.target.reportValidity();
                    setTimeout(() => {
                        console.log("clearing modal");
                        jQuery("#loading").modal("hide");
                    }, 500);
                });
        });
});


/** 
 *  Basic reveal on scroll animation.
 * 
 *  Apply class "reveal-in-viewport-container" to the container.
 *  Apply class "reveal-in-viewport" to each element you want to reveal in the container.
 *  Delay the reveal (beyond the scroll of course) by specifying a data-delay attribute on each element in milliseconds, e.g. data-delay="200"
 * 
 */

function revealInViewportAnimation() {
    // attach intersection observer to any RIVA containers
    let iobserver = new IntersectionObserver((entries) => {
        if (entries[0].isIntersecting === true) {
            revealInViewportAnimationElements(entries[0].target);
        }
    }, {threshold: 0.5})

    rivaContainers = document.querySelectorAll('.reveal-in-viewport-container');

    rivaContainers.forEach((rivaElem) => {
        iobserver.observe(rivaElem);
    })
}

function revealInViewportAnimationElements(container) {
    try {
        let elems = container.querySelectorAll('.reveal-in-viewport');

        elems.forEach((elem) => {
            let delay = 0;
            try {
                delay = Number(elem.dataset.delay);
            } catch (e) {
                delay = 0;
            }
            
            setTimeout(() => {
                elem.classList.add('reveal');
            }, delay)
        })
    
    } catch (e) {
        ;
    }
}


window.onload = function () {

    revealInViewportAnimation();
    
    if (document.querySelector('.animated-header-wrapper.e-animated')) {
        // Delay a bit before drawing initial highlight
        setTimeout(() => {
            animateHeadlineOn();
        }, 1500);
        // Iterate the highlighting
        setInterval(() => {
            animateHeadline();
        }, 5000);

    }
}

/**
 *  Headline highlight animation to draw a circle around a word.
 *  Will remove the highlight, delay a bit, then re-draw based on the setInterval and setTimeout values.
 * 
 *  Apply classes animated-header-wrapper and e-animated to a container around the word to be highlighted.
 *  Apply class animated-header to the word.
 *  Adjust the selector if using multiple headline highlights on page.
 * 
 */
function animateHeadline() {
    animateHeadlineOff();
    setTimeout(() => {
        animateHeadlineOn();
    }, 1500)
}
function animateHeadlineOn() {
    document.querySelector('#hero .animated-header-wrapper.e-animated.e-hide-highlight').classList.remove('e-hide-highlight');
}
function animateHeadlineOff() {
    document.querySelector('#hero .animated-header-wrapper.e-animated').classList.add('e-hide-highlight');
}

