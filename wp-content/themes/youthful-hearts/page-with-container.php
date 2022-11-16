<?php

/**
 * Template Name: Default with Container
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<main class="container">
	<section id="primary" class="content-area">
		<div id="main" class="site-main" role="main">

			<?php
			while (have_posts()) : the_post();

				get_template_part('template-parts/content', 'page');

			endwhile; // End of the loop.
			?>

		</div><!-- #main -->
	</section><!-- #primary -->
</main>
<?php

get_footer();
