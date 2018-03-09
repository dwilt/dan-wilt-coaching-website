<?php

if( have_rows('page_builder') ):

    while ( have_rows('page_builder') ) : the_row();

		// check current row layout
		//echo "<pre>"; print_r( get_row_layout() ); echo "</pre>";
        $layout_file = jsd_get_stylesheet_path().'/modules/flex-content/layouts/'.get_row_layout().'.php';

        include($layout_file);

    endwhile;

endif;

?>