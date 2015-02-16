<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ocifu
 */

get_header(); ?>

	<section id="primary" class="content-area notes">
		<main id="main" class="site-main-blog" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>			
				
				<article id="post-<?php the_ID(); ?>" <?php post_class('module-notes'); ?> >
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php ocifu_posted_on(); ?>
					<?php the_excerpt(); ?>				
				</article><!-- #post-## -->
			<?php endwhile; ?>
					
			<?php ocifu_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>
		
		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
