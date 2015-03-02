<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ocifu
 */

if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
	wpcf7_enqueue_scripts();
}

// if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
// 	wpcf7_enqueue_styles();
// }

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php //while ( have_posts() ) : the_post(); ?>
				
				<div class="grid">
					<div class="description description-1">
						<div class="triangle triangle-1">
							<div class="description-txt">
								<h2>I’m a web designer! </h2>
								<p>After trying to become: Engineer, Musician, Architect... I have to admit:</p>
								<h3>I love web</h3>
							</div>
							<img src="<?php bloginfo('template_directory'); ?>/img/description-1.svg" alt="description 1" class="description-image" >
						</div>
					</div><!-- End description-->
				
					<div class="description description-2">
						<div class="triangle triangle-2">
							<div class="description-txt">
								<h2>I think responsively </h2>
								<p>Content is universal. It does not depend on which device one uses or where one is.</p>
							</div>
							<img src="<?php bloginfo('template_directory'); ?>/img/description-2.svg" alt="description 2" class="description-image">
						</div>
					</div><!-- End description-->
				
					<div class="description description-3">
						<div class="triangle triangle-3">
							<div class="description-txt">
								<h2>My favorites tools! </h2>
								<p>There are always new techniques/tools to learn, but for the moment I'm sticking to these</p>
							</div>
							<img src="<?php bloginfo('template_directory'); ?>/img/description-3.svg" alt="description 3" class="description-image">
						</div>
					</div><!-- End description-->
				
					<div class="description description-4">
						<div class="triangle triangle-4">
							<div class="description-txt">
								<h2>Do you want to share a colombian coffee? </h2>
								<p>If you want to start or collaborate in a new project, here I am, I always have time for nice ideas or even just to share a good coffee</p>
							</div>
							<?php echo do_shortcode( '[contact-form-7 id="21" title="Contact form Cuyabro"]' ); ?>
						</div>
					</div><!-- End description-->
				</div>

			<?php // endwhile; ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>