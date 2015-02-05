<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ocifu
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
						<?php
						$args = array(
							'cat'			 => 4,					// List la cat = Expositions
							'order'			 => 'DESC',				// List in DESC order
							'orderby'        => 'Id',				// List them by order de création
							'showposts'   	 => 1, 					// Show only one
							'post_status'    => null,				// For any post status
						);
				        $articles = new WP_Query();
				        $articles->query($args);
				        ?>
						
						<?php while ($articles->have_posts()) : $articles->the_post(); ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<?php endwhile; ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
				
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>
