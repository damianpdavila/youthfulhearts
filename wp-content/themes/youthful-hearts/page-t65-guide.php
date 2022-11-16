<?php
$phone = get_theme_mod('contact_phone_setting') ? get_theme_mod('contact_phone_setting') : '1-800-123-1234';
$guide_phone = '8335785597';
$guide_phone_lit = '(833) 578-5597';
?>

<?php get_header(); ?>

<style>
    html {
        scroll-behavior: smooth;
    }

    #content.site-content {
        padding-top: 0;
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-bottom: 0.5rem;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-top: 0;
    }

    h1 {
        padding-bottom: 0;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
        section#t65-guide-content .container {
            max-width: 100%;
        }
    }

    @media (min-width: 1200px) {
        section#t65-guide-content .container {
            max-width: 1200px;
        }
    }

    @media (max-width: 768px) {
        section#t65-guide-content {
            font-size: 20px;
        }
    }

    section#t65-guide-content p {
        /* font-family: var(--e-global-typography-text-font-family);
    font-weight: var(--e-global-typography-text-font-weight); */
    }

    section#t65-guide-content a {
        text-decoration: none;
    }

    section#t65-guide-content .bold,
    section#t65-guide-content b,
    section#t65-guide-content strong {
        font-weight: 800;
    }

    section#t65-guide-content .rounded {
        border-radius: 27px !important;
    }

    section#t65-guide-content .rounded-top-right {
        border-top-left-radius: 0 !important;
        border-top-right-radius: inherit;
        border-bottom-left-radius: 0 !important;
        border-bottom-right-radius: 0 !important;
    }

    section#t65-guide-content .rounded-bottom-left {
        border-top-left-radius: 0 !important;
        border-top-right-radius: 0 !important;
        border-bottom-left-radius: inherit;
        border-bottom-right-radius: 0 !important;
    }

    section#t65-guide-content .rounded-top-left {
        border-top-left-radius: inherit;
        border-top-right-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
        border-bottom-right-radius: 0 !important;
    }

    section#t65-guide-content .rounded-bottom-right-top-left {
        border-top-left-radius: inherit;
        border-top-right-radius: 0 !important;
        border-bottom-left-radius: 0 !important;
        border-bottom-right-radius: inherit;
    }

    section#t65-guide-content .bg-primary {
        background-color: var(--color-primary) !important;
    }

    section#t65-guide-content .bg-secondary {
        background-color: var(--color-dark) !important;
        /* not secondary but dark color */
    }

    section#t65-guide-content .bg-tertiary {
        background-color: #59a96a80 !important;
    }

    section#t65-guide-content .text-secondary {
        color: var(--color-primary) !important;
    }

    section#t65-guide-content .text-secondary {
        color: var(--color-dark) !important;
    }

    section#t65-guide-content .text-tertiary {
        color: var(--color-accent) !important;
    }

    @media (min-width: 1200px) {
        .float-xl {
            float: right;
            max-width: 850px !important;
            padding-left: 1em;
        }
    }

    .callout-title img {
        margin-bottom: -88px;
        max-width: 180px;
    }

    .callout-border {
        border: 3px solid rgb(32, 13, 152);
        padding: 0.5rem;
        margin-left: 100px;
    }

    .callout-mobile {
        margin-left: 0;
    }

    .callout.get-started .callout-title img {
        margin-bottom: -185px;
        max-width: 200px;
    }

    .callout.get-started .callout-border {
        margin-left: 126px;
    }

    .icon-callout {
        max-width: 30px;
        margin-right: 5px;
    }

    section#t65-guide-content h1,
    section#t65-guide-content h2,
    section#t65-guide-content h3,
    section#t65-guide-content h4,
    section#t65-guide-content h5,
    section#t65-guide-content h6 {
        font-style: normal;
        font-weight: 700;
        line-height: 1.2;
        text-align: center;
        color: inherit;
    }

    h1 {
        font-size: 25px;
        /* font-family: var(--font-primary); */
        font-weight: 700;
    }

    @media (min-width: 768px) {
        h1 {
            font-size: 45px;
        }
    }

    @media (min-width: 992px) {
        h1 {
            font-size: 55px;
        }
    }

    @media (min-width: 1200px) {
        h1 {
            font-size: 50px;
        }
    }

    @media (min-width: 1680px) {
        h1 {
            font-size: 55px;
        }
    }

    h3 {
        font-size: 20px;
    }

    @media (min-width: 992px) {
        h3 {
            font-size: 30px;
        }
    }

    @media (min-width: 1200px) {
        h3 {
            font-size: 30px;
        }
    }

    @media (min-width: 1680px) {
        h3 {
            font-size: 30px;
        }
    }

    .h1-style {
        font-size: 25px !important;
        font-weight: 700 !important;
        line-height: 1.2;
        font-family: var(--font-primary) !important;
    }

    @media (min-width: 1680px) {
        .h1-style {
            font-size: 55px !important;
        }
    }

    @media (min-width: 1200px) {
        .h1-style {
            font-size: 50px !important;
        }
    }

    @media (min-width: 992px) {
        .h1-style {
            font-size: 55px !important;
        }
    }

    .h2-style {
        font-size: 23px !important;
        font-weight: 700 !important;
        line-height: 1.2;
        font-family: var(--font-primary) !important;
    }

    @media (min-width: 992px) {
        .h2-style {
            font-size: 40px !important;
        }
    }

    @media (min-width: 1200px) {
        .h2-style {
            font-size: 40px !important;
        }
    }

    @media (min-width: 1680px) {
        .h2-style {
            font-size: 42px !important;
        }
    }

    .h4-style {
        font-size: 18px !important;
        font-weight: 700 !important;
        line-height: 1.2;
        font-family: var(--font-primary) !important;
    }

    @media (min-width: 1680px) {
        .h4-style {
            font-size: 27px !important;
        }
    }

    @media (min-width: 1200px) {
        .h4-style {
            font-size: 27px !important;
        }
    }

    @media (min-width: 992px) {
        .h4-style {
            font-size: 27px !important;
        }
    }

    .h5-style {
        font-size: 16px !important;
        font-weight: 700 !important;
        line-height: 1.2;
        font-family: var(--font-primary) !important;
    }

    @media (min-width: 992px) {
        .h5-style {
            font-size: 24px !important;
        }
    }

    @media (min-width: 1200px) {
        .h5-style {
            font-size: 24px !important;
        }
    }

    @media (min-width: 1680px) {
        .h5-style {
            font-size: 24px !important;
        }
    }

    ul.toc {
        list-style-type: none;
        padding-left: 0;
    }

    .toc li {
        font-size: 20px;
        line-height: 1.3;
        margin-bottom: 15px;
    }

    .toc a {
        color: inherit;
    }

    ul.large-dots {
        list-style-type: none;
        margin-bottom: 1.25rem;
    }

    @media (min-width: 992px) {
        .large-dots li {
            font-size: 20px;
            line-height: 20px;
        }
    }

    .large-dots li {
        margin-bottom: 15px;
        position: relative;
    }

    .large-dots.toc li:before {
        background: rgba(255, 255, 255, 1);
    }

    .large-dots li:before {
        content: "";
        background: var(--color-secondary);
        border-radius: 10px;
        height: 15px;
        margin-left: -30px;
        position: absolute;
        width: 15px;
        margin-top: 5px;
    }

    .checkmark {
        padding-left: 45px;
        text-indent: -45px;
    }

    .checkmark.green .checkmark-1 {
        stroke: var(--color-accent);
    }

    .checkmark.red .checkmark-1 {
        stroke: #dc3545;
    }

    .guide-logo img {
        max-width: 350px;
        margin-top: 20px;
    }

    @media (max-width: 768px) {
        .guide-logo img {
            max-width: 50vw;
        }
    }

    .text-15 {
        font-size: 15px;
    }

    .rotate-phone {
        animation: rotate 7s infinite;
        max-width: 20px;
        margin-left: 15px;
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        45% {
            transform: rotate(-90deg);
        }

        to {
            transform: rotate(0deg);
        }
    }
</style>
<section id="t65-guide-content">
    <section id="cover-page" class="bg-featured d-flex pb-5 px-xl-3 position-relative" style="
    background-image: url('/wp-content/themes/youthful-hearts/img/bg-kayak.jpg');
    background-position: center center;
    min-height: 100vh;
    background-repeat: no-repeat;
    background-size: cover;
  ">
        <div class="container pt-5 pb-md-4 d-flex flex-column justify-content-between px-0">
            <div class="row pt-4">
                <div class="col d-flex justify-content-end">
                    <div class="title-box bg-primary rounded rounded-bottom-left text-white py-3 px-5">
                        <h1 class="text-right">2022<br />Guide to Medicare</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="guide-logo px-5 pb-3">
                        <img src="/wp-content/uploads/2022/08/logo-youthful-hearts-white-600x-transparent.png" />
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="sub-head bg-secondary rounded rounded-top-right p-5">
                        <p class="h2-style text-normal text-white">
                            Your time is finally here,<br />Medicare made simple.
                        </p>
                    </div>
                </div>
                <div class="col-12 d-none d-xl-flex justify-content-end" style="margin-top: -2em">
                    <div class="phone-hours bg-white rounded rounded-top-left text-secondary p-5 text-center">
                        <p class="h2-style text-secondary">
                            <a class="text-secondary" href="tel:<?= $guide_phone ?>"><?= $guide_phone_lit ?></a>
                        </p>
                        <p class="h5-style d-inline-block pr-1 pr-md-4 mr-1 mr-md-2 mb-1">
                            Monday-Friday
                        </p>
                        <p class="h5-style d-inline-block mb-1">9am-5:30pm EST</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center text-white d-xl-none text-15">
                    <p>
                        Turn your phone sideways for best experience
                        <svg class="icon-mobile img-fluid rotate-phone" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" cdata-icon="mobile-alt" data-prefix="fas" viewBox="0 0 320 512">
                            <path fill="currentColor" d="M272 0H48A48 48 0 0 0 0 48v416a48 48 0 0 0 48 48h224a48 48 0 0 0 48-48V48a48 48 0 0 0-48-48zM160 480a32 32 0 1 1 0-64 32 32 0 0 1 0 64zm112-108a12 12 0 0 1-12 12H60a12 12 0 0 1-12-12V60a12 12 0 0 1 12-12h200a12 12 0 0 1 12 12v312z" />
                        </svg>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="page-toc" class="px-md-3">
        <div class="container container-standard py-5">
            <div class="row pb-md-5">
                <div class="col-xl-7 pr-4">
                    <h3 class="text-secondary" style="text-align: center">
                        How to Get the Most Out of <br />Your Medicare
                    </h3>
                    <p>
                        Your time is finally here. Congratulations on being eligible for the
                        health care coverage you deserve!
                    </p>
                    <p>
                        If you're anything like most people, understanding Medicare is like
                        potty training your grandkids. Without help, it can take forever!
                    </p>
                    <p class="mb-3">
                        You may know the basic concepts of Medicare, but still might have
                        questions like:
                    </p>
                    <ul class="large-dots">
                        <li>What's included with my plan?</li>
                        <li>Does my doctor accept it?</li>
                        <li>Are my prescriptions covered?</li>
                        <li>How do the different parts of Medicare work?</li>
                    </ul>
                    <p>
                        That's where we come in—we'll help keep things simple and identify the
                        best options so you can get the most out of your coverage.
                    </p>
                    <p>
                        We're here to break down Medicare's parts, choices, costs, and
                        deadlines so you'll feel confident in all your decisions. Whether it's
                        understanding Original Medicare, discovering the benefits of Medicare
                        Advantage and Medigap/Supplement plans, or checking to see if your
                        prescriptions are covered—we want to provide you with the tools you
                        need to feel safe and supported as you enter the next chapter of your
                        life.
                    </p>
                    <p>
                        After you're done reading this guide, a 10-minute call with us will
                        help you make the most informed decision to meet both your medical and
                        financial needs. Getting to know how your Medicare works is an
                        important step in planning for your future. Once you're ready to
                        enroll (and since there isn't a one-size-fits-all policy), we'll make
                        sure your options are customized through the nation's top insurance
                        carriers.
                    </p>
                </div>
                <div class="col-xl-5 table-of-contents">
                    <div class="bg-primary text-white rounded rounded-bottom-right-top-left p-4 px-5">
                        <h2 class="text-white mb-4">
                            Table of Contents<br class="d-xl-none" /><small class="d-xl-none"><span class="small">Tap to jump to section</span></small>
                        </h2>
                        <ul class="toc large-dots">
                            <li class="smooth-scroll-div" target="understanding-coverage">
                                <a href="#page-1">Understanding Your Coverage Options and Costs</a>
                            </li>
                            <li class="smooth-scroll-div" target="enrollment-periods">
                                <a href="#page-2">Eligibility and Enrollment Periods</a>
                            </li>
                            <li class="smooth-scroll-div" target="medicare-choices">
                                <a href="#page-3">Breaking Down Your Two Main Medicare Choices</a>
                            </li>
                            <li class="smooth-scroll-div" target="medigap-plans">
                                <a href="#page-4">Medicare Supplement (Medigap) Plans</a>
                            </li>
                            <li class="smooth-scroll-div" target="part-c">
                                <a href="#page-5">Medicare Advantage Plans (Part C)</a>
                            </li>
                            <li class="smooth-scroll-div" target="part-d">
                                <a href="#part-d">Medicare Prescription Drug (Part D) Plans</a>
                            </li>
                            <li class="smooth-scroll-div" target="paying-coverage">
                                <a href="#page-6">Paying for Your Medicare Coverage</a>
                            </li>
                            <li class="smooth-scroll-div" target="why-brokers">
                                <a href="#page-7">Why Insurance Brokers are the Way To Go</a>
                            </li>
                        </ul>
                    </div>
                    <div class="callout d-none d-xl-block mt-5">
                        <div class="callout-title">
                            <img src="/wp-content/themes/youthful-hearts/img/callout-still-have-questions.png" alt="Still Have Questions" class="img-fluid" />
                        </div>
                        <div class="callout-border rounded">
                            <div class="bg-tertiary text-secondary rounded p-3">
                                <p class="mb-0 pl-5">
                                    If you're confused at any point when reading through our guide,
                                    give us a call and we will help walk you through all of your
                                    questions.
                                    <a class="text-secondary" href="tel:<?= $guide_phone ?>"><?= $guide_phone_lit ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-xl-none my-5">
                        <div class="callout-border callout-mobile rounded">
                            <div class="bg-tertiary text-secondary rounded p-3 pl-4">
                                <p class="h2-style text-secondary">
                                    <svg class="icon-callout" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" viewBox="0 0 115.2 117.8">
                                        <defs>
                                            <path id="a" d="M.8 2.4H116v114.8H.8z" />
                                        </defs>
                                        <clipPath id="b">
                                            <use xlink:href="#a" overflow="visible" />
                                        </clipPath>
                                        <path fill="none" stroke="#0a1f8f" stroke-width="2" d="M32.7 20.3C21 18 14.4 25.3 17.9 36.7l21.4 69.4c3.5 11.4 12.8 13.4 20.8 4.6l50.4-56c8-8.9 5-17.9-6.7-20.3L32.7 20.3z" clip-path="url(#b)" />
                                        <path fill="#0a1f8f" d="M9.8 37.7C-1.1 42.5-2.3 52.3 7.1 59.6l66.2 51.1c9.4 7.3 18.3 3.6 19.7-8.2l10.5-85.7C105 5 97.4-.7 86.4 4.1L9.8 37.7z" clip-path="url(#b)" />
                                    </svg>&ensp;Still Have Questions?
                                </p>
                                <p class="text-secondary pl-5 mb-0 ln1">
                                    If you're confused at any point when reading through our guide,
                                    give us a call and we will help walk you through all of your
                                    questions.
                                    <a class="text-secondary" href="tel:<?= $guide_phone ?>"><?= $guide_phone_lit ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="page-1" class="px-md-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="/wp-content/themes/youthful-hearts/img/page-1-header.jpg" alt="Page One" class="img-fluid" />
                </div>
            </div>
        </div>
        <div class="container container-standard pt-4 p-lg-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-secondary text-left" id="understanding-coverage">
                        Understanding Your Coverage Options and Costs
                    </h2>
                    <p>
                        Since Medicare doesn't pay for all your health care costs, it's
                        important that you consider what you're responsible for such as:
                    </p>
                    <div class="row pb-3">
                        <div class="col-md-4 text-md-center">
                            <p class="checkmark green my-2 py-1">
                                <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                                    <defs>
                                        <style>
                                            .checkmark-1 {
                                                fill: none;
                                                stroke: #fff;
                                                stroke-width: 6px;
                                            }
                                        </style>
                                    </defs>
                                    <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                                </svg>&emsp;Monthly Premium
                            </p>
                        </div>
                        <div class="col-md-4 text-md-center bg-alternating-color">
                            <p class="checkmark green my-2 py-1">
                                <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                                    <defs>
                                        <style>
                                            .checkmark-1 {
                                                fill: none;
                                                stroke: #fff;
                                                stroke-width: 6px;
                                            }
                                        </style>
                                    </defs>
                                    <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                                </svg>&emsp;Out-of-Pocket Expenses
                            </p>
                        </div>
                        <div class="col-md-4 text-md-center">
                            <p class="checkmark green my-2 py-1">
                                <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                                    <defs>
                                        <style>
                                            .checkmark-1 {
                                                fill: none;
                                                stroke: #fff;
                                                stroke-width: 6px;
                                            }
                                        </style>
                                    </defs>
                                    <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                                </svg>&emsp;Prescription Coverage
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <img src="/wp-content/themes/youthful-hearts/img/coverage-options.png" alt="Medicare Coverage Options" class="img-fluid" />
                </div>
            </div>
            <div class="col-12 pt-4">
                <p>
                    We're here to help you find a plan that works for you and your budget.
                    The coverage decisions you make are very important because they
                    <strong>affect how you receive and pay for your health care.</strong>
                    We'll help you compare the costs, benefits, and quality of the plans
                    you're considering.
                </p>
            </div>
            <div class="row pb-md-5">
                <div class="col-12 d-none d-xl-block">
                    <div class="callout get-started mt-4 mb-3">
                        <div class="callout-title">
                            <img src="/wp-content/themes/youthful-hearts/img/callout-get-started.png" alt="Get Started" class="img-fluid" />
                        </div>
                        <div class="callout-border rounded">
                            <div class="bg-tertiary text-secondary text-center rounded p-3">
                                <p class="h1-style text-secondary mb-1">
                                    Call Now
                                    <a class="text-secondary" href="tel:<?= $guide_phone ?>"><?= $guide_phone_lit ?></a>
                                </p>
                                <p class="h4-style d-inline-block pr-1 pr-md-4 mr-1 mr-md-2 mb-1">
                                    Licensed&emsp;•&emsp;Trusted&emsp;•&emsp;Affordable
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-xl-none">
                    <a class="btn btn-huge rounded shadow-black text-white w-100 bold call-button d-xl-none my-5" style="background: #fe5722 !important; padding: 2rem !important" href="tel:<?= $guide_phone ?>">
                        <div class="svg-wrapper d-inline position-relative">
                            <svg class="icon-phone img-fluid" xmlns="http://www.w3.org/2000/svg" width="35.965" height="35.965" viewBox="0 0 35.965 35.965">
                                <path fill="#FFF" data-name="icon-phone" class="phone-1" d="M5.74,12.352A24.021,24.021,0,0,0,16.19,22.8l3.488-3.488a1.577,1.577,0,0,1,1.617-.381,18.088,18.088,0,0,0,5.661.9,1.59,1.59,0,0,1,1.586,1.586v5.534a1.59,1.59,0,0,1-1.586,1.586A26.954,26.954,0,0,1,0,1.586,1.59,1.59,0,0,1,1.586,0h5.55A1.59,1.59,0,0,1,8.721,1.586a18.014,18.014,0,0,0,.9,5.661,1.591,1.591,0,0,1-.4,1.617L5.74,12.352Z" transform="matrix(0.951, 0.309, -0.309, 0.951, 8.82, 0)" />
                            </svg>
                        </div>
                        <p class="h2-style text-white d-inline">Call Now <?= $guide_phone_lit ?></p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="page-2" class="px-md-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="/wp-content/themes/youthful-hearts/img/page-2-header.jpg" alt="Page One" class="img-fluid" />
                </div>
            </div>
        </div>
        <div class="container container-standard pt-4 p-lg-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-secondary text-left" id="enrollment-periods">
                        Eligibility and Enrollment Periods
                    </h2>
                    <p>
                        You're eligible for Medicare if you are a citizen of the United States
                        or have been a lawful permanent resident for at least 5 years and meet
                        one of these requirements:
                    </p>
                    <p class="checkmark green mb-1">
                        <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                            <defs>
                                <style>
                                    .checkmark-1 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-width: 6px;
                                    }
                                </style>
                            </defs>
                            <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                        </svg>&emsp;You or your spouse has worked for at least 10 years (or 40
                        quarters) while paying into Medicare
                    </p>
                    <p class="checkmark green mb-1">
                        <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                            <defs>
                                <style>
                                    .checkmark-1 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-width: 6px;
                                    }
                                </style>
                            </defs>
                            <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                        </svg>&emsp;Permanently disabled and received disability benefits for at
                        least 2 years
                    </p>
                    <p class="checkmark green mb-1">
                        <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                            <defs>
                                <style>
                                    .checkmark-1 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-width: 6px;
                                    }
                                </style>
                            </defs>
                            <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                        </svg>&emsp;Have end-stage renal disease (ESRD) OR Lou Gehrig's disease
                        (ALS)
                    </p>
                    <p class="checkmark green mb-1">
                        <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                            <defs>
                                <style>
                                    .checkmark-1 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-width: 6px;
                                    }
                                </style>
                            </defs>
                            <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                        </svg>&emsp;For Medicare Advantage, Medicare Supplement, and Part D plans,
                        you must also enroll in Part A and Part B
                    </p>
                    <div class="row py-3">
                        <div class="col-lg-6 pb-4">
                            <h3 class="text-primary text-left">Initial Enrollment Period</h3>
                            <p>
                                You have a 7-month window to join during this period — from three
                                months before the month you turn 65, through your birthday month,
                                and three months after the month you turn 65. During this time,
                                you can enroll in:
                            </p>
                            <p class="checkmark green mb-1">
                                <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                                    <defs>
                                        <style>
                                            .checkmark-1 {
                                                fill: none;
                                                stroke: #fff;
                                                stroke-width: 6px;
                                            }
                                        </style>
                                    </defs>
                                    <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                                </svg>&emsp;Original Medicare (Parts A and B)
                            </p>
                            <p class="checkmark green mb-1">
                                <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                                    <defs>
                                        <style>
                                            .checkmark-1 {
                                                fill: none;
                                                stroke: #fff;
                                                stroke-width: 6px;
                                            }
                                        </style>
                                    </defs>
                                    <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                                </svg>&emsp;Medicare Prescription Drug plan (Part D)
                            </p>
                            <p class="checkmark green mb-1">
                                <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                                    <defs>
                                        <style>
                                            .checkmark-1 {
                                                fill: none;
                                                stroke: #fff;
                                                stroke-width: 6px;
                                            }
                                        </style>
                                    </defs>
                                    <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                                </svg>&emsp;Medicare Advantage plan (Part C)
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <img src="/wp-content/themes/youthful-hearts/img/medicare-enrollment-periods.png" alt="Medicare Enrollment Periods" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <h3 class="text-primary text-left">
                        Medicare Supplement Enrollment Period
                    </h3>
                    <p>
                        Also known as Medigap, there are two initial times to enroll in a plan
                        before and after you turn 65:
                    </p>
                    <p class="checkmark green mb-1">
                        <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                            <defs>
                                <style>
                                    .checkmark-1 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-width: 6px;
                                    }
                                </style>
                            </defs>
                            <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                        </svg>&emsp;6 months prior to turning 65 and 6 months after
                    </p>
                    <p class="checkmark green mb-1">
                        <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                            <defs>
                                <style>
                                    .checkmark-1 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-width: 6px;
                                    }
                                </style>
                            </defs>
                            <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                        </svg>&emsp;Once you turn 65, your 6 month period begins the month you
                        enroll in Part B
                    </p>
                    <p class="checkmark green mb-1">
                        <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                            <defs>
                                <style>
                                    .checkmark-1 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-width: 6px;
                                    }
                                </style>
                            </defs>
                            <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                        </svg>&emsp;6 months before and after you first enroll in Part B
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 pt-4">
                    <img src="/wp-content/themes/youthful-hearts/img/prior-to-turning-65.png" alt="Prior to Turning 65" class="img-fluid" />
                </div>
                <div class="col-lg-6 pt-4">
                    <img src="/wp-content/themes/youthful-hearts/img/medicap-supplement-after-you-turn-65.png" alt="Medigap/Supplement After You Turn 65" class="img-fluid" />
                </div>
            </div>
            <div class="row pb-md-5">
                <div class="col-12 d-none d-xl-block">
                    <div class="callout get-started mt-5">
                        <div class="callout-title">
                            <img src="/wp-content/themes/youthful-hearts/img/callout-still-have-questions.png" alt="Get Started" class="img-fluid" />
                        </div>
                        <div class="callout-border rounded">
                            <div class="bg-tertiary text-secondary rounded p-3 pl-4">
                                <p class="text-secondary pl-5 mb-0 ln1">
                                    If you have any questions about your Medicare eligibility or if
                                    you're unsure about your enrollment period, contact us today at
                                    <a class="text-secondary" href="tel:<?= $guide_phone ?>"><?= $guide_phone_lit ?></a>. We'll walk you through each stage while providing the
                                    personalized advice you deserve.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-xl-none my-5">
                    <div class="callout-border callout-mobile rounded">
                        <div class="bg-tertiary text-secondary rounded p-3 pl-4">
                            <p class="h2-style text-secondary">
                                <svg class="icon-callout" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" viewBox="0 0 115.2 117.8">
                                    <defs>
                                        <path id="a" d="M.8 2.4H116v114.8H.8z" />
                                    </defs>
                                    <clipPath id="b">
                                        <use xlink:href="#a" overflow="visible" />
                                    </clipPath>
                                    <path fill="none" stroke="#0a1f8f" stroke-width="2" d="M32.7 20.3C21 18 14.4 25.3 17.9 36.7l21.4 69.4c3.5 11.4 12.8 13.4 20.8 4.6l50.4-56c8-8.9 5-17.9-6.7-20.3L32.7 20.3z" clip-path="url(#b)" />
                                    <path fill="#0a1f8f" d="M9.8 37.7C-1.1 42.5-2.3 52.3 7.1 59.6l66.2 51.1c9.4 7.3 18.3 3.6 19.7-8.2l10.5-85.7C105 5 97.4-.7 86.4 4.1L9.8 37.7z" clip-path="url(#b)" />
                                </svg>&ensp;Still Have Questions?
                            </p>
                            <p class="text-secondary pl-5 mb-0 ln1">
                                If you have any questions about your Medicare eligibility or if
                                you're unsure about your enrollment period, contact us today at
                                <a class="text-secondary" href="tel:<?= $guide_phone ?>"><?= $guide_phone_lit ?></a>. We'll walk you through each stage while providing the
                                personalized advice you deserve.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="page-3" class="px-md-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="/wp-content/themes/youthful-hearts/img/page-3-header.jpg" alt="Page Three" class="img-fluid" />
                </div>
            </div>
        </div>
        <div class="container container-standard pt-4 p-lg-5">
            <div class="row pb-md-5">
                <div class="col-12">
                    <h2 class="text-secondary text-left" id="medicare-choices">
                        Breaking Down Your Two Main Medicare Choices
                    </h2>
                    <p>
                        You may find gaps in your Original Medicare coverage that you want to
                        address. Next, we'll review what those gaps are, as well as your
                        options to fill them with either a Medigap/Supplement or Medicare
                        Advantage plan.
                    </p>
                    <p>
                        <img src="/wp-content/themes/youthful-hearts/img/pie-chart-80-20.png" alt="Medicare Pie Chart" class="img-fluid float-xl" /><br class="d-block d-xl-none" />In
                        <span class="bold text-primary">blue</span>, the chart to the right
                        shows Original Medicare (Part A and Part B), which covers inpatient
                        hospital care, skilled nursing facility, hospice, lab tests, surgery,
                        home health care, doctor and other health care providers' services,
                        and outpatient care. Original Medicare is typically a low monthly
                        premium, but offers less doctor flexibility and higher out-of-pocket
                        expenses. In <span class="bold text-tertiary">green</span>, you'll see
                        Medigap/Supplement and Medicare Advantage, which are both responsible
                        for covering the 20% that isn't covered by Original Medicare. After
                        you reach your Part B deductible, you must pay 20% of the cost of
                        Medicare-approved Part B services. A Medigap/Supplement or Medicare
                        Advantage plan will help pay the remaining 20%, including deductible
                        and coinsurance amounts.
                    </p>
                    <p>
                        Now that you understand the basics of Original Medicare, below is a
                        simple comparison guide for Medigap/Supplement and Medicare Advantage
                        before we dive deeper into each.
                    </p>
                    <img src="/wp-content/themes/youthful-hearts/img/ms-ma-T65.png" alt="Medicare/Medigap Benefits" class="img-fluid pt-4 pb-5" />
                </div>
            </div>
        </div>
    </section>

    <section id="page-4" class="px-md-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="/wp-content/themes/youthful-hearts/img/page-4-header.jpg" alt="Page Four" class="img-fluid" />
                </div>
            </div>
        </div>
        <div class="container container-standard pt-4 p-lg-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-secondary text-left" id="medigap-plans">
                        Medicare Supplement (Medigap) Plans
                    </h2>
                    <p>
                        Medigap/Supplement plans help cover any additional expenses left
                        behind by Original Medicare. For example, some plans will cover all
                        Medicare costs except your Part B premium and deductible. This means
                        no more out-of-pocket expenses, including copays, coinsurance, or your
                        Part A deductible. If you prefer the peace of mind based on a fixed
                        monthly premium without having to worry about surprise medical
                        expenses, then Medigap/ Supplement plans are the best choice for you.
                    </p>
                    <h3 class="text-left text-primary">Medigap/Supplement Key Benefits:</h3>
                    <img src="/wp-content/themes/youthful-hearts/img/medigap-plans-cover-T65-v2.png" alt="Medigap Plan Coverage" class="img-fluid" />
                </div>
            </div>
            <div class="row">
                <div class="col-xl-7 pt-4">
                    <h3 class="text-left text-primary">
                        Important Facts About Medigap/Supplement Plans:
                    </h3>
                    <p class="checkmark green mb-1">
                        <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                            <defs>
                                <style>
                                    .checkmark-1 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-width: 6px;
                                    }
                                </style>
                            </defs>
                            <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                        </svg>&emsp;Provides private insurance coverage that helps fill the gaps in
                        Parts A and B
                    </p>
                    <p class="checkmark green mb-1">
                        <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                            <defs>
                                <style>
                                    .checkmark-1 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-width: 6px;
                                    }
                                </style>
                            </defs>
                            <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                        </svg>&emsp;You will have to pay your monthly Part B premium and
                        deductibles
                    </p>
                    <p class="checkmark green mb-1">
                        <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                            <defs>
                                <style>
                                    .checkmark-1 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-width: 6px;
                                    }
                                </style>
                            </defs>
                            <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                        </svg>&emsp;Helps pay for some of your remaining health care out-of-pocket
                        costs, including copayments, coinsurance, and deductibles
                    </p>
                    <p class="checkmark green mb-1">
                        <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                            <defs>
                                <style>
                                    .checkmark-1 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-width: 6px;
                                    }
                                </style>
                            </defs>
                            <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                        </svg>&emsp;You can enroll in a Medigap/Supplement plan 6 months before and
                        after the month you turn 65
                    </p>
                </div>
                <div class="col-xl-5">
                    <div class="callout mt-5 d-none d-xl-block">
                        <div class="callout-title">
                            <img src="/wp-content/themes/youthful-hearts/img/callout-did-you-know.png" alt="Did You Know" class="img-fluid" />
                        </div>
                        <div class="callout-border rounded">
                            <div class="bg-tertiary text-secondary rounded p-3">
                                <p class="mb-0 pl-5">
                                    Your Initial Enrollment Period is the
                                    <span class="bold">ONLY</span> time you're guaranteed to be
                                    accepted into a Medigap or Supplement plan without your rates
                                    increasing due to pre-existing conditions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-xl-none my-5">
                        <div class="callout-border callout-mobile rounded">
                            <div class="bg-tertiary text-secondary rounded p-3 pl-4">
                                <p class="h2-style text-secondary">
                                    <svg class="icon-callout" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" viewBox="0 0 115.2 117.8">
                                        <defs>
                                            <path id="a" d="M.8 2.4H116v114.8H.8z" />
                                        </defs>
                                        <clipPath id="b">
                                            <use xlink:href="#a" overflow="visible" />
                                        </clipPath>
                                        <path fill="none" stroke="#0a1f8f" stroke-width="2" d="M32.7 20.3C21 18 14.4 25.3 17.9 36.7l21.4 69.4c3.5 11.4 12.8 13.4 20.8 4.6l50.4-56c8-8.9 5-17.9-6.7-20.3L32.7 20.3z" clip-path="url(#b)" />
                                        <path fill="#0a1f8f" d="M9.8 37.7C-1.1 42.5-2.3 52.3 7.1 59.6l66.2 51.1c9.4 7.3 18.3 3.6 19.7-8.2l10.5-85.7C105 5 97.4-.7 86.4 4.1L9.8 37.7z" clip-path="url(#b)" />
                                    </svg>&ensp;Did You Know?
                                </p>
                                <p class="text-secondary pl-5 mb-0 ln1">
                                    Your Initial Enrollment Period is the
                                    <span class="bold">ONLY</span> time you're guaranteed to be
                                    accepted into a Medigap or Supplement plan without your rates
                                    increasing due to pre-existing conditions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-md-5">
                <div class="col-12">
                    <div class="callout get-started mt-5 d-none d-xl-block">
                        <div class="callout-title">
                            <img src="/wp-content/themes/youthful-hearts/img/callout-get-started-phone.png" alt="Get Started" class="img-fluid" />
                        </div>
                        <div class="callout-border rounded">
                            <div class="bg-tertiary text-secondary text-center rounded p-3">
                                <p class="h1-style text-secondary mb-1">
                                    Call Now
                                    <a class="text-secondary" href="tel:<?= $guide_phone ?>"><?= $guide_phone_lit ?></a>
                                </p>
                                <p class="h4-style d-inline-block pr-1 pr-md-4 mr-1 mr-md-2 mb-1">
                                    Licensed&emsp;•&emsp;Trusted&emsp;•&emsp;Affordable
                                </p>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-huge rounded shadow-black text-white w-100 bold call-button d-xl-none" style="background: #fe5722 !important; padding: 2rem !important" href="tel:8663821192">
                        <div class="svg-wrapper d-inline position-relative">
                            <svg class="icon-phone img-fluid" xmlns="http://www.w3.org/2000/svg" width="35.965" height="35.965" viewBox="0 0 35.965 35.965">
                                <path fill="#FFF" data-name="icon-phone" class="phone-1" d="M5.74,12.352A24.021,24.021,0,0,0,16.19,22.8l3.488-3.488a1.577,1.577,0,0,1,1.617-.381,18.088,18.088,0,0,0,5.661.9,1.59,1.59,0,0,1,1.586,1.586v5.534a1.59,1.59,0,0,1-1.586,1.586A26.954,26.954,0,0,1,0,1.586,1.59,1.59,0,0,1,1.586,0h5.55A1.59,1.59,0,0,1,8.721,1.586a18.014,18.014,0,0,0,.9,5.661,1.591,1.591,0,0,1-.4,1.617L5.74,12.352Z" transform="matrix(0.951, 0.309, -0.309, 0.951, 8.82, 0)" />
                            </svg>
                        </div>
                        <p class="h2-style text-white d-inline">Call Now <?= $guide_phone_lit ?></p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="page-5" class="px-md-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="/wp-content/themes/youthful-hearts/img/page-5-header.jpg" alt="Page Five" class="img-fluid" />
                </div>
            </div>
        </div>
        <div class="container container-standard pt-4 p-lg-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-secondary text-left" id="part-c">
                        Medicare Advantage (Part C)
                    </h2>
                    <p>
                        Medicare Advantage includes all the benefits of Original Medicare and
                        provides a single plan that combines help with hospital costs,
                        doctor's visits, and other medical services.
                    </p>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-6 col-lg-8 col-xl-9">
                    <h3 class="text-left text-primary">
                        Important Facts About Medicare Advantage Plans:
                    </h3>
                    <ul class="large-dots dots-spacing pt-3">
                        <li>You still have to pay your Part B premium</li>
                        <li>
                            Some plans include prescription drug coverage, while others do not
                        </li>
                        <li>Usually limited to doctors in your plan's provider network</li>
                        <li>
                            Medigap/Supplement and Part C plans are different programs that
                            can't be combined
                        </li>
                        <li>Medicare doesn't automatically enroll you in a Part C plan</li>
                        <li>You may need referrals for specialists</li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 text-right">
                    <img src="/wp-content/themes/youthful-hearts/img/seniors-medicare-part-c.jpg" alt="Medicare Part C" class="img-fluid rounded rounded-left seniors-img" />
                </div>
            </div>
            <div class="row pt-5 pb-md-4">
                <div class="col-12">
                    <h2 class="text-secondary text-left" id="part-d">
                        Medicare Prescription Drug (Part D) Plans
                    </h2>
                    <p>
                        For most, medication is an unfortunate part of life as we get older.
                        That's where Part D comes in! Simply put, it is insurance for your
                        medication needs.
                    </p>
                    <h3 class="text-primary text-left">
                        There are two ways you can get a Part D plan:
                    </h3>
                    <ul class="large-dots dots-spacing pt-3">
                        <li>
                            Prescription drugs are not covered by Original Medicare, so you'll
                            need to buy a separate “stand-alone” drug plan (which only covers
                            drugs) if you want prescription drug coverage.
                        </li>
                        <li>
                            You also have the option to enroll in a Medicare Advantage plan that
                            includes prescription drug coverage (MA-PD). These plans combine
                            prescription drug coverage with other Medicare benefits (Parts A and
                            B) into one plan with a single monthly premium.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row pb-md-5">
                <div class="col-12">
                    <div class="callout get-started mt-5 d-none d-xl-block">
                        <div class="callout-title">
                            <img src="/wp-content/themes/youthful-hearts/img/callout-medicare-lis-program.png" alt="Medicare Low Income Savings Program" class="img-fluid" />
                        </div>
                        <div class="callout-border rounded">
                            <div class="bg-tertiary text-secondary text-left rounded p-3">
                                <p class="pl-5 lh1">
                                    For many individuals on Medicare, the most expensive part can be
                                    their prescriptions. The Extra Help Program/Low Income Subsidy
                                    can help reduce or, in some instances, even eliminate many of
                                    those costs. If you have fixed or limited income, these programs
                                    could save you thousands annually off of premiums, deductibles,
                                    and copayments associated with your Medicare prescription drug
                                    costs! Call
                                    <a class="text-secondary" href="tel:<?= $guide_phone ?>"><?= $guide_phone_lit ?></a>
                                    today to find out if you're eligible.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d-xl-none my-5">
                        <div class="callout-border callout-mobile rounded">
                            <div class="bg-tertiary text-secondary rounded p-3 pl-4">
                                <p class="h2-style text-secondary">
                                    <svg class="icon-callout" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" viewBox="0 0 115.2 117.8">
                                        <defs>
                                            <path id="a" d="M.8 2.4H116v114.8H.8z" />
                                        </defs>
                                        <clipPath id="b">
                                            <use xlink:href="#a" overflow="visible" />
                                        </clipPath>
                                        <path fill="none" stroke="#0a1f8f" stroke-width="2" d="M32.7 20.3C21 18 14.4 25.3 17.9 36.7l21.4 69.4c3.5 11.4 12.8 13.4 20.8 4.6l50.4-56c8-8.9 5-17.9-6.7-20.3L32.7 20.3z" clip-path="url(#b)" />
                                        <path fill="#0a1f8f" d="M9.8 37.7C-1.1 42.5-2.3 52.3 7.1 59.6l66.2 51.1c9.4 7.3 18.3 3.6 19.7-8.2l10.5-85.7C105 5 97.4-.7 86.4 4.1L9.8 37.7z" clip-path="url(#b)" />
                                    </svg>&ensp;Medicare Low Income Savings Program
                                </p>
                                <p class="text-secondary pl-5 mb-0 ln1">
                                    For many individuals on Medicare, the most expensive part can be
                                    their prescriptions. The Extra Help Program/Low Income Subsidy
                                    can help reduce or, in some instances, even eliminate many of
                                    those costs. If you have fixed or limited income, these programs
                                    could save you thousands annually off of premiums, deductibles,
                                    and copayments associated with your Medicare prescription drug
                                    costs! Call today to find out if you're eligible.
                                </p>
                            </div>
                        </div>
                        <a class="btn btn-huge rounded shadow-black text-white w-100 bold call-button d-xl-none mt-5" style="background: #fe5722 !important; padding: 2rem !important" href="tel:8663821192">
                            <div class="svg-wrapper d-inline position-relative">
                                <svg class="icon-phone img-fluid" xmlns="http://www.w3.org/2000/svg" width="35.965" height="35.965" viewBox="0 0 35.965 35.965">
                                    <path fill="#FFF" data-name="icon-phone" class="phone-1" d="M5.74,12.352A24.021,24.021,0,0,0,16.19,22.8l3.488-3.488a1.577,1.577,0,0,1,1.617-.381,18.088,18.088,0,0,0,5.661.9,1.59,1.59,0,0,1,1.586,1.586v5.534a1.59,1.59,0,0,1-1.586,1.586A26.954,26.954,0,0,1,0,1.586,1.59,1.59,0,0,1,1.586,0h5.55A1.59,1.59,0,0,1,8.721,1.586a18.014,18.014,0,0,0,.9,5.661,1.591,1.591,0,0,1-.4,1.617L5.74,12.352Z" transform="matrix(0.951, 0.309, -0.309, 0.951, 8.82, 0)" />
                                </svg>
                            </div>
                            <p class="h2-style text-white d-inline">Call Now <?= $guide_phone_lit ?></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="page-6" class="px-md-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="/wp-content/themes/youthful-hearts/img/page-6-header.jpg" alt="Page Six" class="img-fluid" />
                </div>
            </div>
        </div>
        <div class="container container-standard pt-4 p-lg-5">
            <div class="row pb-md-5">
                <div class="col-12">
                    <h2 class="text-secondary text-left" id="paying-coverage">
                        Paying for Your Medicare Coverage
                    </h2>
                    <p>
                        We want you to be able to plan a smooth, enjoyable retirement. One of
                        the best ways to do so is to understand what you can expect to pay
                        out-of-pocket for Medicare.
                    </p>
                    <h3 class="text-primary text-left">
                        Generally, how much you pay for Medicare depends on:
                    </h3>
                    <ul class="large-dots dots-spacing pt-3">
                        <li>Which Medicare plan you choose</li>
                        <li>
                            How often you go to the doctor/hospital and your prescription needs
                        </li>
                        <li>
                            Whether you have employer-sponsored or association health insurance
                        </li>
                        <li>Whether you qualify for help with Medicare costs</li>
                    </ul>
                    <img src="/wp-content/themes/youthful-hearts/img/medicare-costs.png" alt="Medicare Costs" class="img-fluid pt-4 d-none d-xl-block" />
                    <img src="/wp-content/themes/youthful-hearts/img/medicare-costs-mobile.png" alt="Medicare Costs" class="img-fluid pt-4 d-xl-none" />
                </div>
            </div>
            <div class="row pb-md-5">
                <div class="col-12">
                    <div class="callout get-started mt-5 d-none d-xl-block">
                        <div class="callout-title">
                            <img src="/wp-content/themes/youthful-hearts/img/callout-call-us-today.png" alt="Call Us Today" class="img-fluid" />
                        </div>
                        <div class="callout-border rounded">
                            <div class="bg-tertiary text-secondary text-left rounded p-3">
                                <p class="pl-5 lh1">
                                    Searching for the right Medicare coverage based on your budget
                                    can end up being confusing and time-consuming. Although there's
                                    plenty of information in this guide, we strongly recommend
                                    contacting us at
                                    <a class="text-secondary" href="tel:<?= $guide_phone ?>"><?= $guide_phone_lit ?></a>
                                    so we can help you find the type of coverage you require and
                                    maximize your savings so you get the best value for your money.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d-xl-none my-5">
                        <div class="callout-border callout-mobile rounded">
                            <div class="bg-tertiary text-secondary rounded p-3 pl-4">
                                <p class="h2-style text-secondary">
                                    <svg class="icon-callout" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" viewBox="0 0 115.2 117.8">
                                        <defs>
                                            <path id="a" d="M.8 2.4H116v114.8H.8z" />
                                        </defs>
                                        <clipPath id="b">
                                            <use xlink:href="#a" overflow="visible" />
                                        </clipPath>
                                        <path fill="none" stroke="#0a1f8f" stroke-width="2" d="M32.7 20.3C21 18 14.4 25.3 17.9 36.7l21.4 69.4c3.5 11.4 12.8 13.4 20.8 4.6l50.4-56c8-8.9 5-17.9-6.7-20.3L32.7 20.3z" clip-path="url(#b)" />
                                        <path fill="#0a1f8f" d="M9.8 37.7C-1.1 42.5-2.3 52.3 7.1 59.6l66.2 51.1c9.4 7.3 18.3 3.6 19.7-8.2l10.5-85.7C105 5 97.4-.7 86.4 4.1L9.8 37.7z" clip-path="url(#b)" />
                                    </svg>&ensp;Call Us Today!
                                </p>
                                <p class="text-secondary pl-5 mb-0 ln1">
                                    Searching for the right Medicare coverage based on your budget
                                    can end up being confusing and time-consuming. Although there's
                                    plenty of information in this guide, we strongly recommend
                                    contacting us at
                                    <a class="text-secondary" href="tel:<?= $guide_phone ?>"><?= $guide_phone_lit ?></a>
                                    so we can help you find the type of coverage you require and
                                    maximize your savings so you get the best value for your money.
                                    Call today to find out if you're eligible.
                                </p>
                            </div>
                        </div>
                        <a class="btn btn-huge rounded shadow-black text-white w-100 bold call-button d-xl-none mt-5" style="background: #fe5722 !important; padding: 2rem !important" href="tel:8663821192">
                            <div class="svg-wrapper d-inline position-relative">
                                <svg class="icon-phone img-fluid" xmlns="http://www.w3.org/2000/svg" width="35.965" height="35.965" viewBox="0 0 35.965 35.965">
                                    <path fill="#FFF" data-name="icon-phone" class="phone-1" d="M5.74,12.352A24.021,24.021,0,0,0,16.19,22.8l3.488-3.488a1.577,1.577,0,0,1,1.617-.381,18.088,18.088,0,0,0,5.661.9,1.59,1.59,0,0,1,1.586,1.586v5.534a1.59,1.59,0,0,1-1.586,1.586A26.954,26.954,0,0,1,0,1.586,1.59,1.59,0,0,1,1.586,0h5.55A1.59,1.59,0,0,1,8.721,1.586a18.014,18.014,0,0,0,.9,5.661,1.591,1.591,0,0,1-.4,1.617L5.74,12.352Z" transform="matrix(0.951, 0.309, -0.309, 0.951, 8.82, 0)" />
                                </svg>
                            </div>
                            <p class="h2-style text-white d-inline">Call Now <?= $guide_phone_lit ?></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="page-7" class="px-md-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="/wp-content/themes/youthful-hearts/img/page-7-header.jpg" alt="Page Seven" class="img-fluid" />
                </div>
            </div>
        </div>
        <div class="container container-standard pt-4 p-lg-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-secondary text-left" id="why-brokers">
                        Why Insurance Brokers are the Way to Go
                    </h2>
                    <p>
                        When it comes to researching, comparing, and choosing your Medicare
                        coverage, a licensed insurance broker can provide invaluable guidance.
                        Ultimately, they serve as a knowledgeable resource that helps you and
                        your loved ones find the quality Medicare coverage that's right for
                        you and at a price you can afford.
                    </p>
                    <h3 class="text-primary text-left">
                        Some of the advantages and benefits of working with a licensed
                        insurance broker include:
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <p class="checkmark green mb-1">
                        <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                            <defs>
                                <style>
                                    .checkmark-1 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-width: 6px;
                                    }
                                </style>
                            </defs>
                            <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                        </svg>&emsp;Medicare expertise
                    </p>
                    <p class="checkmark green mb-1">
                        <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                            <defs>
                                <style>
                                    .checkmark-1 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-width: 6px;
                                    }
                                </style>
                            </defs>
                            <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                        </svg>&emsp;Options from the nation's top insurance carriers
                    </p>
                    <p class="checkmark green mb-1">
                        <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                            <defs>
                                <style>
                                    .checkmark-1 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-width: 6px;
                                    }
                                </style>
                            </defs>
                            <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                        </svg>&emsp;Saves you time
                    </p>
                    <p class="checkmark green mb-1">
                        <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                            <defs>
                                <style>
                                    .checkmark-1 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-width: 6px;
                                    }
                                </style>
                            </defs>
                            <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                        </svg>&emsp;Finds a plan that works for you
                    </p>
                    <p class="checkmark green mb-1">
                        <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                            <defs>
                                <style>
                                    .checkmark-1 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-width: 6px;
                                    }
                                </style>
                            </defs>
                            <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                        </svg>&emsp;A broker doesn't cost you anything
                    </p>
                    <p class="checkmark green mb-1">
                        <svg class="icon-checkmark" xmlns="http://www.w3.org/2000/svg" width="25.372" height="20.049" viewBox="0 0 25.372 20.049">
                            <defs>
                                <style>
                                    .checkmark-1 {
                                        fill: none;
                                        stroke: #fff;
                                        stroke-width: 6px;
                                    }
                                </style>
                            </defs>
                            <path data-name="Path 377" class="checkmark-1" d="M711,3000.427l-13.685,13.685-7.444-7.444" transform="translate(-687.75 -2998.306)" />
                        </svg>&emsp;Tailored guidance
                    </p>
                </div>
                <div class="col-lg-6 pb-4 pb-lg-0">
                    <div class="callout d-none d-xl-block">
                        <div class="callout-title">
                            <img src="/wp-content/themes/youthful-hearts/img/callout-still-have-questions.png" alt="Still Have Questions" class="img-fluid" />
                        </div>
                        <div class="callout-border rounded d-none d-xl-block">
                            <div class="bg-tertiary text-secondary rounded p-3">
                                <p class="mb-0 pl-5">
                                    If you're confused at any point when reading through our guide,
                                    give us a call and we will help walk you through all of your
                                    questions.
                                    <a class="text-secondary" href="tel:<?= $guide_phone ?>"><?= $guide_phone_lit ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="callout-border callout-mobile rounded d-xl-none">
                        <div class="bg-tertiary text-secondary rounded p-3 pl-4">
                            <p class="h2-style text-secondary">
                                <svg class="icon-callout" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" viewBox="0 0 115.2 117.8">
                                    <defs>
                                        <path id="a" d="M.8 2.4H116v114.8H.8z" />
                                    </defs>
                                    <clipPath id="b">
                                        <use xlink:href="#a" overflow="visible" />
                                    </clipPath>
                                    <path fill="none" stroke="#0a1f8f" stroke-width="2" d="M32.7 20.3C21 18 14.4 25.3 17.9 36.7l21.4 69.4c3.5 11.4 12.8 13.4 20.8 4.6l50.4-56c8-8.9 5-17.9-6.7-20.3L32.7 20.3z" clip-path="url(#b)" />
                                    <path fill="#0a1f8f" d="M9.8 37.7C-1.1 42.5-2.3 52.3 7.1 59.6l66.2 51.1c9.4 7.3 18.3 3.6 19.7-8.2l10.5-85.7C105 5 97.4-.7 86.4 4.1L9.8 37.7z" clip-path="url(#b)" />
                                </svg>&ensp;Still Have Questions?
                            </p>
                            <p class="text-secondary pl-5 mb-0 ln1">
                                If you're confused at any point when reading through our guide,
                                give us a call and we will help walk you through all of your
                                questions.
                            </p>
                        </div>
                    </div>
                    <a class="btn btn-huge rounded shadow-black text-white w-100 bold call-button d-xl-none mt-5" style="background: #fe5722 !important; padding: 2rem !important" href="tel:8663821192">
                        <div class="svg-wrapper d-inline position-relative">
                            <svg class="icon-phone img-fluid" xmlns="http://www.w3.org/2000/svg" width="35.965" height="35.965" viewBox="0 0 35.965 35.965">
                                <path fill="#FFF" data-name="icon-phone" class="phone-1" d="M5.74,12.352A24.021,24.021,0,0,0,16.19,22.8l3.488-3.488a1.577,1.577,0,0,1,1.617-.381,18.088,18.088,0,0,0,5.661.9,1.59,1.59,0,0,1,1.586,1.586v5.534a1.59,1.59,0,0,1-1.586,1.586A26.954,26.954,0,0,1,0,1.586,1.59,1.59,0,0,1,1.586,0h5.55A1.59,1.59,0,0,1,8.721,1.586a18.014,18.014,0,0,0,.9,5.661,1.591,1.591,0,0,1-.4,1.617L5.74,12.352Z" transform="matrix(0.951, 0.309, -0.309, 0.951, 8.82, 0)" />
                            </svg>
                        </div>
                        <p class="h2-style text-white d-inline">Call Now <?= $guide_phone_lit ?></p>
                    </a>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-12">
                    <h2 class="text-secondary text-left">
                        Now is Your Time to Save on Health Insurance
                    </h2>
                    <p>
                        Now that you've finished the 2022 Guide to Medicare, it's time to
                        answer any lingering questions and get you enrolled. You've learned a
                        lot of important information about Medicare and your options. We want
                        to help you make informed, educated decisions throughout your Medicare
                        journey—all with zero pressure to enroll in a plan.
                    </p>
                    <p>
                        Contact us today so we can help you find affordable coverage that best
                        suits your needs, budget, and lifestyle. Keep in mind, there is a
                        limited window to enroll in Medicare, and the additional coverage
                        rules vary. Don't wait to enroll and end up with limited or no
                        Medicare coverage. Call today for answers to any lingering questions
                        and to get the quality, affordable Medicare plan that fits your unique
                        coverage needs.
                    </p>
                </div>
            </div>
            <div class="row pb-md-5">
                <div class="col-12">
                    <div class="callout get-started mt-3 d-none d-xl-block">
                        <div class="callout-title">
                            <img src="/wp-content/themes/youthful-hearts/img/callout-get-started-phone.png" alt="Get Started" class="img-fluid" />
                        </div>
                        <div class="callout-border rounded">
                            <div class="bg-tertiary text-secondary text-center rounded p-3">
                                <p class="h1-style text-secondary mb-1">
                                    Call Now
                                    <a class="text-secondary" href="tel:<?= $guide_phone ?>"><?= $guide_phone_lit ?></a>
                                </p>
                                <p class="h4-style d-inline-block pr-1 pr-md-4 mr-1 mr-md-2 mb-1">
                                    Licensed&emsp;•&emsp;Trusted&emsp;•&emsp;Affordable
                                </p>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-huge rounded shadow-black text-white w-100 bold call-button d-xl-none mt-5" style="background: #fe5722 !important; padding: 2rem !important" href="tel:8663821192">
                        <div class="svg-wrapper d-inline position-relative">
                            <svg class="icon-phone img-fluid" xmlns="http://www.w3.org/2000/svg" width="35.965" height="35.965" viewBox="0 0 35.965 35.965">
                                <path fill="#FFF" data-name="icon-phone" class="phone-1" d="M5.74,12.352A24.021,24.021,0,0,0,16.19,22.8l3.488-3.488a1.577,1.577,0,0,1,1.617-.381,18.088,18.088,0,0,0,5.661.9,1.59,1.59,0,0,1,1.586,1.586v5.534a1.59,1.59,0,0,1-1.586,1.586A26.954,26.954,0,0,1,0,1.586,1.59,1.59,0,0,1,1.586,0h5.55A1.59,1.59,0,0,1,8.721,1.586a18.014,18.014,0,0,0,.9,5.661,1.591,1.591,0,0,1-.4,1.617L5.74,12.352Z" transform="matrix(0.951, 0.309, -0.309, 0.951, 8.82, 0)" />
                            </svg>
                        </div>
                        <p class="h2-style text-white d-inline">Call Now <?= $guide_phone_lit ?></p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-4">
                    <p class="disclosure small">
                        Disclosure: Neither Youthful Hearts nor its agents are connected with or
                        endorsed by the United States government or the federal Medicare
                        program. Youthful Heart's 2022 Guide to Medicare is thorough, but does
                        not cover every detail. This guide is designed to give you a
                        high-level understanding of Medicare. More detailed information can be
                        found on Medicare.gov.
                    </p>
                </div>
            </div>
        </div>
    </section>
</section>

<?php get_footer(); ?>