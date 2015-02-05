<?php
/**
 * @package ocifu
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('module-notes'); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php ocifu_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', $attr ); } ?>
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
