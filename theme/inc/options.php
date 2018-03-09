<?php

// Options Pages
if( function_exists('acf_add_options_page') ) {
	acf_add_options_sub_page( 'Social Media' );
	acf_add_options_sub_page( 'Header' );
    acf_add_options_sub_page( 'Footer' );

	acf_add_options_page(
		array(
			//'page_title' => 'CPT Page Options',
			//'parent_slug' => 'edit.php?post_type=cpt'
		)
	);

}
?>