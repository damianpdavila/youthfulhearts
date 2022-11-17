<?php
$phone = get_theme_mod('contact_phone_setting') ? get_theme_mod('contact_phone_setting') : '1-800-123-1234';
?>

<?php get_header(); ?>
<style>
    #content.site-content {
        padding-top: 0;
    }
</style>

<section id="hero" class="row no-gutters">

    <div class="col bg-color-primary">
        <div class="hero-content d-flex flex-column align-content-center align-items-center">
            <h1 class="heading text-white">
                Congratulations, you've taken the first steps toward understanding Medicare!
            </h1>
            <h2 class="sub-heading text-white">Click the buttons below to download your Guides to Medicare.</h2>
            <div class="button-container text-center row">
                <div class="col-12 col-lg-6">
                    <a class="button button-color-cta font-accent text-uppercase" href="<?php bloginfo('url'); ?>/wp-content/uploads/2022/08/T65-Quick-Guide-08-04-22.pdf" target="_blank">
                        Quick Reference Guide
                    </a>
                </div>
                <div class="col-12 col-lg-6">
                    <a class="button button-color-cta font-accent text-uppercase" href="<?php bloginfo('url'); ?>/wp-content/uploads/2022/08/T65-Guide-08-04-22.pdf" target="_blank">
                        The Complete Guide
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-none d-sm-block col">
        <div class="hero-image">
            <style>
                .hero-image {
                    width: 100%;
                    height: 100%;
                    background-image: url("<?php bloginfo('url'); ?>/wp-content/uploads/2022/08/happy-couple-riding-a-motorcycle-because-they-can-afford-their-medicare-advantage-premiums-rotated-1000x.jpg");
                    background-position: top center;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
            </style>
        </div>
    </div>

</section>

<section id="call-now" class="container">
    <div class="row">
        <div class="col">
            <h3 class="font-secondary text-color-dark text-center">Have Questions? We're here to help</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm">
            <h2>Call now to speak with a <strong>Licensed Insurance Agent</strong></h2>
        </div>
        <div class="col-12 col-sm pt-4">
            <a class="cta" href="tel:<?= $phone ?>">
                <div class="cta-button text-white bg-color-cta">
                    <div class="cta-button-icon"><i class="fas fa-phone-alt" aria-hidden="true"></i></div>
                    <div class="cta-button-text">
                        <?= $phone ?>
                        <br><span>Speak with a Licensed Agent</span>
                    </div>
                </div>
            </a>
            <p class="text-center"><small>Monday-Friday 9am-6pm ET</small></p>
        </div>


    </div>
    <!-- <p class="font-primary text-color-dark" style="font-weight: 500;">Our Licensed experts will help you find the right plan by walking you through your options and comparing the top Medicare Advantage carriers and plans.</p> -->
    <p class="font-primary text-color-dark" style="font-weight: 500;">Our Licensed experts will help you find the right plan by walking you through your options and comparing the top Medicare Supplement carriers and plans.</p>
</section>

<?php get_footer(); ?>