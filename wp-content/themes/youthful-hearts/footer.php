<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>

<?php
$phone = get_theme_mod('contact_phone_setting') ? get_theme_mod('contact_phone_setting') : '1-800-123-1234';
?>

<?php if (!is_page_template('blank-page.php') && !is_page_template('blank-page-with-container.php')) : ?>
	</div><!-- #content -->
	</div><!-- #page -->

	<?php get_template_part('footer-widget'); ?>

	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">

		<div class="bg-color-primary">
			<div class="container-xl pt-5 pb-4">
				<div class="row">
					<div class="col-md-9">
						<div class="footer-about">
							<!-- <p>
								Youthful Hearts helps beneficiaries explore Medicare options by providing information and resources related to Medicare Advantage, Medicare Supplement, and Prescription Drug plans. Youthful Hearts is not an insurance or operating company. Descriptions are for informational purposes only and subject to change. Insurance plans may not be available in all states. Youthful Hearts connects you with nationwide licensed agents committed to finding you the right plan that aligns with your lifestyle and wallet while meeting your health needs. Youthful Hearts is not affiliated with any insurance plan nor does it represent or endorse any plan. Youthful Hearts is not affiliated with or endorsed by the United States government or the federal Medicare program. By using this site, you acknowledge that you have read and agree to the Terms of Service and Privacy Policy.
							</p> -->
							<p>
								Youthful Hearts helps beneficiaries explore Medicare options by providing information and resources related to Medicare Supplement plans. Youthful Hearts is not an insurance or operating company. Descriptions are for informational purposes only and subject to change. Insurance plans may not be available in all states. Youthful Hearts connects you with nationwide licensed agents committed to finding you the right plan that aligns with your lifestyle and wallet while meeting your health needs. Youthful Hearts is not affiliated with any insurance plan nor does it represent or endorse any plan. Youthful Hearts is not affiliated with or endorsed by the United States government or the federal Medicare program. By using this site, you acknowledge that you have read and agree to the Terms of Service and Privacy Policy.
							</p>
						</div>

						<div class="d-flex">
							<div class="footer-logo">
								<img src="<?php echo get_template_directory_uri() . '/img/youthful-hearts-logo-device-lg-transparent-white.png' ?>">
							</div>
							<div class="footer-address">
								<p><span>Youthful Hearts</span><br />2817 E Oakland Park Blvd #300<br />Fort Lauderdale, FL 33306</p>
							</div>

						</div>
					</div>
					<div class="col-md-3">
								<?php
								wp_nav_menu(array(
									'theme_location'    => 'footer-menu',
									'container'       => 'div',
									'container_id'    => 'footer-nav',
									'container_class' => 'justify-content-center',
									'menu_id'         => false,
									'menu_class'      => 'navbar-nav align-items-start text-white font-accent',
									'depth'           => 3,
									'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
									'walker'          => new wp_bootstrap_navwalker()
								));
								?>

							</div>

				</div>
			</div>



			<div style="background-color: #035996">
				<div class="container-xl pt-3 pb-3">
					<div class="row">
						<div class="col-12 col-md-4 order-3 order-md-0">
							<div class="site-info">
								&copy;&nbsp;<?php echo date('Y'); ?>&nbsp;<?php echo '<a href="' . home_url() . '">' . get_bloginfo('name') . '</a>'; ?>
							</div><!-- close .site-info -->
						</div>
						<div class="col">
							<div class="site-info justify-content-center">
								<a href="<?php bloginfo('url');  ?>/privacy-policy/">Your Privacy</a>
								<span class="sep">&nbsp;|&nbsp;</span>
								<a href="<?php bloginfo('url');  ?>/terms-of-use/">Terms</a>
							</div><!-- close .site-info -->
						</div>
						<div class="col">
							<div class="site-info social-icons justify-content-center">
								<a target="_blank">
									<span class="sr-only">Facebook</span>
									<i class="fab fa-facebook-f"></i>
								</a>
								<a target="_blank">
									<span class="sr-only">Twitter</span>
									<i class="fab fa-twitter"></i>
								</a>

							</div><!-- close .site-info -->
						</div>

					</div>
				</div>
			</div>
	</footer><!-- #colophon -->
<?php endif; ?>


<?php wp_footer(); ?>
</body>

</html>