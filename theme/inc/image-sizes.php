<?php

add_theme_support( 'post-thumbnails' );

function jsd_image_size_setup(){

	// Add custom image sizes.
	add_image_size( 'hero', 1280, 500, true );

}
add_action( 'after_setup_theme', 'jsd_image_size_setup' );


// Give human-readable names the image sizes.
function jsd_custom_size_names( $sizes ) {
	return array_merge( $sizes, array(
		//'header-background' => 'Header Background',
	) );
}
//add_filter( 'image_size_names_choose', 'jsd_custom_size_names' );

?>