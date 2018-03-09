<?php
### jQuery, Condiitonizr, and Modernizr are loaded in the <head>.
### Everything else should load at the end of the page, use TRUE for the 5th parameter of wp_register_script().
function jsd_scripts(){
	if (!is_admin()) {
	### Core
		// Deregister WordPress jQuery and register Google's
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false);

        wp_enqueue_script('scripts', JSDIR.'/scripts.js', array('jquery'), time(), true);

        // Update version number; increment as you push changes
        wp_enqueue_style('my_theme_styles', STYLEDIR.'/style.css', false, time());


	### Modules
		// moduleName
		// wp_register_script('template-default-js', MODDIR.'moduleName/js/moduleName.js', array('jquery'), '1.0', true);



	}
}
add_action('wp_enqueue_scripts','jsd_scripts');

?>