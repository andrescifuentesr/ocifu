<?php

//Remove [...] string using Filters

function new_excerpt_more( $more ) {
	return '... <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Control Excerpt Length using Filters
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//-------------------------------------------------  
//function for resize work and worksingle images
//-------------------------------------------------
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'slider', 1000, 600, true );
    add_image_size( 'work', 1000, 600, true );
}