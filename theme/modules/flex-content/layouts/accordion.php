<?php

$args = array(
    'accordion' => array(),
);


if (have_rows('accordion_item')):
    while (have_rows('accordion_item')): the_row();
        $accordion_visible_content = get_sub_field('accordion_visible_content');
        $accordion_collapsed_content = get_sub_field('accordion_collapsed_content');

        $args['accordion'][] = Array(
            'accordion_visible_content' => $accordion_visible_content,
            'accordion_collapsed_content' => $accordion_collapsed_content,
        );
    endwhile;
endif;


jsd_accordion($args);

?>