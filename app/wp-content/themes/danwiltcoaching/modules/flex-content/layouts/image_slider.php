<?php

$args = array(
    'title' => get_sub_field('title'),
    'description' => get_sub_field('description'),
    'images' => array(),
);


if (have_rows('images')):
    while (have_rows('images')): the_row();
        $args['images'][] = Array(
            'image' => get_sub_field('image')
        );
    endwhile;
endif;


jsd_imageSlider($args);

?>