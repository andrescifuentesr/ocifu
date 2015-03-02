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


//-------------------------------------------------  
//managin Contact form 7
// enabling contact form to work only in contact/index
//-------------------------------------------------
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );


//http://wordpress.stackexchange.com/questions/38319/how-to-add-defer-defer-tag-in-plugin-javascripts
//how to defer scripts
add_filter( 'script_loader_tag', function ( $tag, $handle ) {

    // if ( 'contact-form-7' !== $handle )
    //     return $tag;

    return str_replace( ' src', ' async src', $tag );
}, 10, 2 );
