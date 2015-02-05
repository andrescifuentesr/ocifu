<?php
/*
Template Name: Work
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php
				$args = array(
					'post_type' 		=> 'work', 		//Costum type work			
					'order'				=> 'DESC',		// List in Descending order
					'orderby'      		=> 'id',		
					'posts_per_page'	=>   -1, 		// Show everything
				);

				$Work = new WP_Query($args);
			?>			
				<article id="post-<?php the_ID(); ?>" <?php post_class('work'); ?>>
					<!-- 
					<h1 class="entry-title"><?php the_title(); ?></h1>
					-->
					
					<!--<h2>Web</h2>-->
					
					<div class="entry-content grid cs-style-3">
						<?php while ($Work->have_posts()) : $Work->the_post(); ?><!--
					 --><div class="module">
							<figure>
								 <?php the_post_thumbnail( 'full', $attr ); ?> 
								<figcaption>
									<h4><?php the_title(); ?></h4>
									<a href="<?php the_permalink(); ?>">View the project</a>
								</figcaption>
							</figure>
							<div class="description-work">
								<?php if( in_array( 'design', get_field('work_description') ) ) { ?>
									<img src="<?php bloginfo('template_directory'); ?>/img/icon-creation.svg" alt="creation" class="description-creation" >
								<?php } ?>
								<?php if( in_array( 'wp', get_field('work_description') ) ) { ?>
									<img src="<?php bloginfo('template_directory'); ?>/img/icon-wp.svg" alt="Wordpress" class="description-wp" >
								<?php } ?>
								<?php if( in_array( 'responsive', get_field('work_description') ) ) { ?>
									<img src="<?php bloginfo('template_directory'); ?>/img/icon-responsive.svg" alt="responsive" class="description-responsive" >
								<?php } ?>
								<?php if( in_array( 'video', get_field('work_description') ) ) { ?>	
									<img src="<?php bloginfo('template_directory'); ?>/img/icon-video.svg" alt="video" class="description-video" >
								<?php } ?>
								<?php if( in_array( 'app', get_field('work_description') ) ) { ?>
									<img src="<?php bloginfo('template_directory'); ?>/img/icon-app.svg" alt="application iphone" class="description-application" >	
								<?php } ?>									
							</div>
						</div><!--
						--><?php endwhile; // end of the loop. ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>