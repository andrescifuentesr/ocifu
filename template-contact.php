<?php
/*
Template Name: Contact
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

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<div class="description description-4">
					
						<div class="description-txt">
							<h2><?php the_title(); ?></h2>
							<p>Do you want to say to get in touch?  Feel free to use the form below or contact me directly if you prefer, I always have time to share a good coffe</p>
							<a class="txt-info" href="mailto:email@cuyabroweb.com">email@cuyabroweb.com</a>
							<a class="txt-info" href="tel:+33698821081">tel : +33 6 98 82 10 81</a>
							
						</div>
						<?php echo do_shortcode( '[contact-form-7 id="21" title="Contact form Cuyabro"]' ); ?>
						
						<img src="<?php bloginfo('template_directory'); ?>/img/map.svg" alt="Map contact" class="map-contact"/>
					</div>			

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
				
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>
