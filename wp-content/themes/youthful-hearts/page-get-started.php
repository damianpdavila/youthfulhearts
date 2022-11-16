<?php
$phone = get_theme_mod('contact_phone_setting') ? get_theme_mod('contact_phone_setting') : '1-800-123-1234';
?>

<?php get_header(); ?>

<section id="call-now" class="container">
    <div id="step-summary" class="bg-color-primary mb-5 reveal-in-viewport-container">
        <h2 class="text-white">Savings in a few easy steps.</h2>
        <div class="row justify-content-around">
            <div class="image-container col-12 col-sm reveal-in-viewport" data-delay="200">
                <img width="503" height="404" src="/wp-content/uploads/2022/07/step-1-questions.jpg" class="attachment-medium_large size-medium_large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/07/step-1-questions.jpg 503w, /wp-content/uploads/2022/07/step-1-questions-300x241.jpg 300w" sizes="(max-width: 503px) 100vw, 503px">
            </div>
            <div class="image-container col-12 col-sm reveal-in-viewport" data-delay="700">
                <img width="504" height="404" src="/wp-content/uploads/2022/07/step-2-rates.jpg" class="attachment-medium_large size-medium_large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/07/step-2-rates.jpg 504w, /wp-content/uploads/2022/07/step-2-rates-300x240.jpg 300w" sizes="(max-width: 504px) 100vw, 504px">
            </div>
            <div class="image-container col-12 col-sm reveal-in-viewport" data-delay="1200">
                <img width="504" height="404" src="/wp-content/uploads/2022/07/step-3-choose.jpg" class="attachment-medium_large size-medium_large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/07/step-3-choose.jpg 504w, /wp-content/uploads/2022/07/step-3-choose-300x240.jpg 300w" sizes="(max-width: 504px) 100vw, 504px">
            </div>

        </div>
    </div>
</section>

<section class="container mb-5">
    <h3 class="font-primary text-color-dark" style="font-size: 25px; font-weight: 500; line-height: 1.5;">Our Licensed experts will help you find the right plan by walking you through your options and comparing the top Medicare Advantage carriers and plans.</h3>
</section>

<section id="lead-form-top" class="bg-color-primary row no-gutters">
    <div class="container pt-5">

        <div class="cta-form d-flex flex-column">
            <h2 class="heading text-center text-white">Let's Save Some Money!</h2>
            <div class="row mb-4">
                <!-- FORM START -->
                <?php
                // Values for forms
                if (isset($_SERVER['HTTP_CLIENT_IP']))
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                else if (isset($_SERVER['HTTP_X_FORWARDED']))
                    $ip = $_SERVER['HTTP_X_FORWARDED'];
                else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
                    $ip = $_SERVER['HTTP_FORWARDED_FOR'];
                else if (isset($_SERVER['HTTP_FORWARDED']))
                    $ip = $_SERVER['HTTP_FORWARDED'];
                else if (isset($_SERVER['REMOTE_ADDR']))
                    $ip = $_SERVER['REMOTE_ADDR'];

                $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                $form_id = "get_started_top";
                ?>

                <div class="testing-notification bg-danger text-white" style="display: none; padding: 1em;">
                    <h2>WARNING: TEST MODE IS ACTIVE</h2>
                    <p>Leads will <strong>NOT</strong> be submitted until test mode is deactivated.</p>
                </div>
                <div class="col-lg-2"></div>
                <div class="form-container col col-lg-8">
                    <form class="lead-capture text-white" method="post" id="<?= $form_id ?>">
                        <p class="label text-white">Just 2 steps!</p>
                        <div class="progress-bar-container">
                            <div class="progress">
                                <div class="progress-bar w-50 bg-color-accent text-right pr-3" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                        </div>

                        <div class="form-fields-wrapper">

                            <input type="hidden" id="type" name="TYPE" value="33">
                            <input type="hidden" id="src" name="SRC" value="BM-20">
                            <input type="hidden" id="key" name="Key" value="8644370df1f5b625554a7aa97d400788f13074222e32c74dbdc108648604cfb3">

                            <input type="hidden" id="mode" name="Mode" value="full">
                            <input type="hidden" id="api_action" name="API_Action" value="pingPostLead">
                            <input type="hidden" id="format" name="Format" value="JSON">
                            <input type="hidden" id="landing_page" name="Landing_Page" value="<?= $url ?>">
                            <input type="hidden" id="ip_address" name="IP_Address" value="<?= $ip ?>">
                            <input type="hidden" id="age" name="Age" value="65">
                            <input type="hidden" id="gender" name="Gender" value="X">

                            <div class="form-step-1 row">

                                <div class="form-field-group required col-12 col-md-6">
                                    <label for="inputFirstName" class="">
                                        First Name </label>
                                    <input size="1" type="text" name="First_Name" id="inputFirstName" class="" placeholder="Name" required="required" aria-required="true">
                                </div>
                                <div class="form-field-group required col-12 col-md-6">
                                    <label for="inputLastName" class="">
                                        Last Name </label>
                                    <input size="1" type="text" name="Last_Name" id="inputLastName" class="" placeholder="Last Name" required="required" aria-required="true">
                                </div>
                                <div class="form-field-group required col-12 col-md-6">
                                    <label for="inputPhone" class="">
                                        Phone </label>
                                    <input size="1" type="text" name="Primary_Phone" id="inputPhone" class="" placeholder="10 digit phone" required="required" aria-required="true" pattern="^([0-9(])?[0-9]{3}[^0-9]*[0-9]{3}[^0-9]*[0-9]{4}$">
                                </div>
                                <div class="form-field-group required col-12 col-md-6">
                                    <label for="inputZip" class="">
                                        Zip Code </label>
                                    <input size="1" type="text" name="Zip" id="inputZip" class="" placeholder="Zip Code" required="required" aria-required="true" pattern="(^\d{5}$)|(^\d{9}$)|(^\d{5}-\d{4}$)">
                                </div>

                                <div class="button-container text-left">
                                    <button class="button button-col-12 col-md-6or-accent font-accent text-uppercase" onclick="formNextClick(event)">
                                        Next &gt;
                                    </button>
                                </div>

                            </div>
                            <div class="form-step-2 row hidden">

                                <div class="form-field-group required col-12 col-md-6">
                                    <label for="inputEmail" class="">
                                        Email </label>
                                    <input size="1" type="email" name="Email" id="inputEmail" class="" placeholder="Email Address" aria-required="true">
                                </div>
                                <div class="form-field-group required col-12 col-md-6">
                                    <label for="inputDOB" class="">
                                        Date of Birth </label>
                                    <input size="1" type="date" name="DOB" id="inputDOB" class="" aria-required="true" pattern="[0-9]{2}-[0-9]{2}-[0-9]{4}">
                                </div>
                                <div class="d-flex justify-content-between" style="flex: auto;">

                                    <div class="button-container">
                                        <button class="button button-color-light-gray font-accent text-uppercase" onclick="formPrevClick(event)">
                                            &lt; Previous
                                        </button>
                                    </div>
                                    <div class="button-container justify-content-end">
                                        <button type="submit" class="button button-color-accent font-accent text-uppercase ">
                                            Send
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal fade full-screen" id="loading" data-backdrop="false">
                            <div class="modal-dialog modal-full modal-dialog-centered text-center">
                                <div class="modal-content">
                                    <div class="modal-body d-flex align-items-center justify-content-center">
                                        <img src="<?= $loading_image_path ?>" alt="Loading...">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                    <img class="float-right mb-2" style="max-width: 150px;" src="/wp-content/uploads/2022/08/secure-ssl-encryption-badge-transparent-300x103-edited.png" title="secure-ssl-encryption-badge" alt="secure-ssl-encryption-badge">
                </div>
                <!-- FORM END -->
                <p class="font-primary text-white text-center w-100 mb-0 pt-2" style="font-weight: 500;">Complete the form and one of our expert Licensed Insurance Agents will call to walk you through your options.</p>

            </div>
            <div class="row mb-5">
                <p class="disclaimer text-white">By clicking the button and submitting this form, I agree that I am 18+ years old and I provide my signature expressly consenting to receive emails, calls, postal mail, text messages and other forms of communication regarding Medicare Supplement, Medicare Advantage, Part D, or other offers from <a href="#" data-toggle="modal" data-target="#companiesModal">companies</a> and agents to the number(s) I provided, including a mobile phone, even if I am on a state or federal Do Not Call and/or Do Not Email registry. The list of companies participating is subject to change. I will receive calls from a maximum of eight providers. Such calls and text messages may use automated telephone dialing systems, artificial or pre-recorded voices. I understand my wireless carrier may impose charges for calls or texts. I understand that my consent to receive communications is not a condition of purchase and I may revoke my consent at any time.</p>
            </div>


        </div>
        <!-- Consent/companies popup -->

        <div class="modal fade" id="full-disclosure-modal" tabindex="-1" role="dialog" aria-labelledby="full-disclosure-modal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content rounded shadow-black">
                    <div class="modal-body px-5 pb-5 pt-3">
                        <div class="row">
                            <div class="col-12 text-right">
                                <button type="button" class="btn modal-close-button p-0 bg-transparent text-secondary" data-dismiss="modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.544" height="20.672" viewBox="0 0 20.544 20.672">
                                        <defs>
                                            <style>
                                                .xmark-1,
                                                .xmark-2 {
                                                    fill: none;
                                                    stroke: var(--color-dark);
                                                    stroke-width: 3px;
                                                }
                                            </style>
                                        </defs>
                                        <path class="xmark-1" d="M713.594,3000.427l-16.279,16.452" transform="translate(-695.183 -2998.317)"></path>
                                        <path class="xmark-2" d="M697.315,3000.427l16.279,16.452" transform="translate(-695.183 -2998.317)"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-3 text-center">
                                <p>
                                    By clicking the button and submitting this form, I agree that I am
                                    18+ years old and I provide my signature expressly consenting to
                                    receive emails, calls, postal mail, text messages and other forms of
                                    communication regarding Medicare Supplement, Medicare Advantage,
                                    Part D, or other offers from
                                    <a href="#" data-toggle="modal" data-target="#companiesModal">companies</a>
                                    and agents to the number(s) I provided, including a mobile phone,
                                    even if I am on a state or federal Do Not Call and/or Do Not Email
                                    registry. The list of companies participating is subject to change.
                                    I will receive calls from a maximum of eight providers. Such calls
                                    and text messages may use automated telephone dialing systems,
                                    artificial or pre-recorded voices. I understand my wireless carrier
                                    may impose charges for calls or texts. I understand that my consent
                                    to receive communications is not a condition of purchase and I may
                                    revoke my consent at any time.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="companiesModal" tabindex="-1" role="dialog" aria-labelledby="companiesModal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content rounded shadow-black">
                    <div class="modal-body px-5 pb-5 pt-3">
                        <div class="row">
                            <div class="col-12 text-right">
                                <button type="button" class="btn modal-close-button p-0 bg-transparent text-secondary" data-dismiss="modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.544" height="20.672" viewBox="0 0 20.544 20.672">
                                        <defs>
                                            <style>
                                                .xmark-1,
                                                .xmark-2 {
                                                    fill: none;
                                                    stroke: var(--color-dark);
                                                    stroke-width: 3px;
                                                }
                                            </style>
                                        </defs>
                                        <path class="xmark-1" d="M713.594,3000.427l-16.279,16.452" transform="translate(-695.183 -2998.317)"></path>
                                        <path class="xmark-2" d="M697.315,3000.427l16.279,16.452" transform="translate(-695.183 -2998.317)"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-3 text-center">
                                <p class="h4-style mb-2">Companies</p>
                                <p class="">When you express interest in products, services or promotions offered through our website or our services,
                                    we may share your expression of interest with the businesses with which we partner, such as those listed here,</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7 offset-5 pl-4">
                                <ul>
                                    <li>Insurance Pipeline, Inc.</li>
                                    <li>Affordable Insurance Group, Inc.</li>
                                    <li>Med Supp Solutions</li>
                                    <li>Evergreen Health Group</li>
                                    <li>Reasonable Insurance Group</li>
                                    <li>Medicare Subsidy</li>
                                    <li>MediLink Marketing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="carrier-logos" class="py-4">
    <div class="container">
        <div class="row">
            <h3 class="text-color-primary text-center mx-auto">We offer the <strong>best rates</strong> from only the <strong>top quality carriers:</strong></h3>
        </div>
        <div class="row reveal-in-viewport-container">
            <div class="logo col-xs col-md-3 reveal-in-viewport slideFromBottom" data-delay="200">
                <img width="800" height="210" src="/wp-content/uploads/2022/07/Humana-Logo-Transparent-1024x269.png" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/07/Humana-Logo-Transparent-1024x269.png 1024w, /wp-content/uploads/2022/07/Humana-Logo-Transparent-300x79.png 300w, /wp-content/uploads/2022/07/Humana-Logo-Transparent-768x202.png 768w, /wp-content/uploads/2022/07/Humana-Logo-Transparent.png 1140w" sizes="(max-width: 800px) 100vw, 800px">
            </div>
            <div class="logo col-xs col-md-3 reveal-in-viewport slideFromBottom" data-delay="600">
                <img width="300" height="169" src="/wp-content/uploads/2022/07/Cigna-Logo-transparent-300x169.png" class="attachment-medium size-medium" alt="" loading="lazy" srcset="/wp-content/uploads/2022/07/Cigna-Logo-transparent-300x169.png 300w, /wp-content/uploads/2022/07/Cigna-Logo-transparent-1024x576.png 1024w, /wp-content/uploads/2022/07/Cigna-Logo-transparent-768x432.png 768w, /wp-content/uploads/2022/07/Cigna-Logo-transparent-1536x864.png 1536w, /wp-content/uploads/2022/07/Cigna-Logo-transparent-2048x1152.png 2048w" sizes="(max-width: 300px) 100vw, 300px">
            </div>
            <div class="logo col-xs col-md-3 reveal-in-viewport slideFromBottom" data-delay="1200">
                <img width="800" height="142" src="/wp-content/uploads/2022/07/Mutual_of_Omaha-logo-1024x182.png" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/07/Mutual_of_Omaha-logo-1024x182.png 1024w, /wp-content/uploads/2022/07/Mutual_of_Omaha-logo-300x53.png 300w, /wp-content/uploads/2022/07/Mutual_of_Omaha-logo-768x136.png 768w, /wp-content/uploads/2022/07/Mutual_of_Omaha-logo-1536x273.png 1536w, /wp-content/uploads/2022/07/Mutual_of_Omaha-logo.png 1915w" sizes="(max-width: 800px) 100vw, 800px">
            </div>
            <div class="logo col-xs col-md-3 reveal-in-viewport slideFromBottom" data-delay="1600">
                <img width="509" height="99" src="/wp-content/uploads/2022/07/aetna-logo.png" class="attachment-large size-large" alt="" loading="lazy" srcset="/wp-content/uploads/2022/07/aetna-logo.png 509w, /wp-content/uploads/2022/07/aetna-logo-300x58.png 300w" sizes="(max-width: 509px) 100vw, 509px">
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>