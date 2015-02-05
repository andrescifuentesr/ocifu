<?php
	$args = array(
		'post_parent'    => $post->ID,			// For the current post
		'post_type'      => 'attachment',		// Get all post attachments
		'post_mime_type' => 'image',			// Only grab images
		'order'			 => 'ASC',				// List in ascending order
		'orderby'        => 'menu_order',		// List them in their menu order
		'numberposts'    => -1, 				// Show all attachments
		'post_status'    => null,				// For any post status
	);

	// Retrieve the items that match our query; in this case, images attached to the current post.
	$attachments = get_posts($args); 
?>

<?php // If any images are attached to the current post, do the following: ?>
<?php if ($attachments) {	?>

	<!-- Slideshow Flexslider.js -->
	<div class="flexslider">
		<ul class="slides">								

			<?php // Now we loop through all of the images that we found ?>
			<?php 	foreach ($attachments as $attachment) { ?>

				<!-- Set the parameters for the image we are about to display. -->
				<?php $default_attr = array(
						'alt' => trim(strip_tags( $attachment->post_title )),
					);
				?>
				<?php $image_attributes = wp_get_attachment_image_src( $attachment->ID, 'full'); // returns an array ?>	
				<li>
					<?php echo wp_get_attachment_image($attachment->ID, 'sliderHome', false, $default_attr); ?>
	        	</li>
			<?php } // End of foreach Loop?>
		</ul>
	</div>									
<?php } //End of if loop ?>