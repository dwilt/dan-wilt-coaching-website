<?php

function jsd_register_menus() {

	// Navigation Menus
	register_nav_menus(
		array(
            'main_nav'    => 'Primary Navigation',
            'secondary_nav' => 'Secondary Navigation',
            'alternate_nav' => 'Alternate Navigation'
		)
	);

}
add_action( 'init', 'jsd_register_menus' );

?>