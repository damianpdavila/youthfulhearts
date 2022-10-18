<?php get_header(); ?>

<section id="hero" class="row no-gutters">

    <div class="col bg-color-primary">
        <div class="hero-content d-flex flex-column align-content-center align-items-center">
            <h1 class="heading text-white">Searching For An Alternative to Your <span class="animated-header circle">Expensive</span> Medicare Supplement Plan?</h1>
            <h2 class="sub-heading text-white">Our experts will help you find the right plan by walking you through your options and comparing the top Medicare carriers and plans.</h2>
            <div class="button-container text-left">
                <a class="button button-color-cta font-accent text-uppercase" href="<?php bloginfo('url'); ?>/start-here">
                    Click to get your options
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="hero-image">
            <style>
                .hero-image {
                    width: 100%;
                    height: 100%;
                    background-image: url(/wp-content/uploads/2022/07/couple-searching-for-best-medicare-advantage-plan-on-laptop-at-desk-1200x.jpg);
                    background-position: top center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
            </style>
        </div>
    </div>

</section>
<section id="lead-form-top" class="container">


    <div class="cta-form d-flex flex-column">
        <h2 class="heading text-center">Get Your <strong>FREE Personalized</strong> Medicare Advantage Comparison</h2>
        <p class="sub-heading text-color-dark text-center">Our Licensed Insurance Agents are experts in Medicare Advantage, Part D, and other Medicare plans.</p>
        <div class="row">
            <div class="col-2" style="transform: rotate(75deg) scale(1.3) translate(-200px, 189px);">
                <img width="300" height="300" src="/wp-content/uploads/2022/07/blue-curved-arrow-primary-300x300.png" class="" alt="" loading="lazy" srcset="/wp-content/uploads/2022/07/blue-curved-arrow-primary-300x300.png 300w, /wp-content/uploads/2022/07/blue-curved-arrow-primary-150x150.png 150w, /wp-content/uploads/2022/07/blue-curved-arrow-primary.png 512w" sizes="(max-width: 300px) 100vw, 300px">
            </div>
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

            $url = "https://$_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI]";

            $form_id = "call_back_home_top";
            ?>

            <div id="testing-notification" class="bg-danger text-white" style="display: none; padding: 1em;">
                <h2>WARNING: TEST MODE IS ACTIVE</h2>
                <p>Leads will <strong>NOT</strong> be submitted until test mode is deactivated.</p>
            </div>
            <div class="form-container col-8">
                <form class="lead-capture" method="post" id="<?= $form_id ?>">
                    <p class="label">Just 2 steps!</p>
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

                            <div class="form-field-group required w-50 col-6">
                                <label for="inputFirstName" class="">
                                    First Name </label>
                                <input size="1" type="text" name="First_Name" id="inputFirstName" class="" placeholder="Name" required="required" aria-required="true">
                            </div>
                            <div class="form-field-group required w-50 col-6">
                                <label for="inputLastName" class="">
                                    Last Name </label>
                                <input size="1" type="text" name="Last_Name" id="inputLastName" class="" placeholder="Last Name" required="required" aria-required="true">
                            </div>
                            <div class="form-field-group required w-50 col-6">
                                <label for="inputPhone" class="">
                                    Phone </label>
                                <input size="1" type="text" name="Primary_Phone" id="inputPhone" class="" placeholder="10 digit phone" required="required" aria-required="true" pattern="^([0-9(])?[0-9]{3}[^0-9]*[0-9]{3}[^0-9]*[0-9]{4}$">
                            </div>
                            <div class="form-field-group required w-50 col-6">
                                <label for="inputZip" class="">
                                    Zip Code </label>
                                <input size="1" type="text" name="Zip" id="inputZip" class="" placeholder="Zip Code" required="required" aria-required="true" pattern="(^\d{5}$)|(^\d{9}$)|(^\d{5}-\d{4}$)">
                            </div>

                            <div class="button-container text-left">
                                <button class="button button-color-accent font-accent text-uppercase" onclick="formNextClick(event)">
                                    Next &gt;
                                </button>
                            </div>

                        </div>
                        <div class="form-step-2 row hidden">

                            <div class="form-field-group required w-50 col-6">
                                <label for="inputEmail" class="">
                                    Email </label>
                                <input size="1" type="email" name="Email" id="inputEmail" class="" placeholder="Email Address" aria-required="true">
                            </div>
                            <div class="form-field-group required w-50 col-6">
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
                                    <button type="submit" class="button button-color-accent font-accent text-uppercase " >
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










            </div>
            <!-- FORM END -->
            <div class="col-2"></div>

        </div>
        <div class="row">

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


</section>

<?php get_footer(); ?>