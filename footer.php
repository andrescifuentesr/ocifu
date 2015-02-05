<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package ocifu
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="module-social">
				<a href="https://www.facebook.com/andres.cifuentes.146" target="_blank">
					<img src="<?php bloginfo('template_directory'); ?>/img/icon-facebook.svg" alt="linkfacebookedin" class="" >
				</a>
				<a href="https://twitter.com/andescifuentesr" target="_blank">
					<img src="<?php bloginfo('template_directory'); ?>/img/icon-twitter.svg" alt="twitter" class="" >
				</a>
				<a href="http://www.linkedin.com/pub/octavio-andr%C3%A9s-cifuentes/22/806/36" target="_blank">
					<img src="<?php bloginfo('template_directory'); ?>/img/icon-linkedin.svg" alt="linkedin" class="" >
				</a>
				
		</div>
		
		<div class="site-info">©<?php echo date('Y'); ?> ALL RIGHTS RESERVED.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>