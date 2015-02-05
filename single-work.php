<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ocifu
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
		<?php
			//i call costum post-type work
			$args = array(
				'post_type'  	 => 'work', 		//Costum type Proyectos			
				'order'			 => 'DESC',			// List in ascending order
				'orderby'        => 'id',			// List them in their menu order
				'posts_per_page' =>   1, 			// Show the last one
				'p'   			 => $post->ID,
			);
			$Work = new WP_Query($args);
		?>			

		<?php while ($Work->have_posts()) : $Work->the_post(); ?>

			<article id="post-<?php the_ID(); ?>" class='work-single'>
				
				<h1 class="entry-title"><?php the_title(); ?></h1>	
				
				<div class="entry-content">
					<?php //on appele le template image  ?>
					<?php get_template_part( 'inc/image-attachment' );  ?>
				
					<div class="module-central">
						<?php the_content(); ?>
					</div><!--

					--><div class="module-side">
						<?php if( get_field('work_link_page') ) { ?>
							<a href="<?php the_field('work_link_page'); ?>" target="_blank" class="bt-work-link">Visit the Site</a>
						<?php } ?>
					</div>
					<?php ocifu_content_nav( 'nav-below' ); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>