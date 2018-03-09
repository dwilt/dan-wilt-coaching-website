<?php

$args = array(
    'description_block_heading' => get_sub_field('description_block_heading'),
    'description_block_description' => get_sub_field('description_block_description'),
    'description_block_wysiwyg' => get_sub_field('description_block_wysiwyg'),
    'description_block_background_color' => get_sub_field('description_block_background_color'),

    'do_you_want_to_include_images' => get_sub_field('do_you_want_to_include_images'),
    'do_you_want_the_images_on_the_left_or_right_side' => get_sub_field('do_you_want_the_images_on_the_left_or_right_side'),
    'description_block_image_1' => get_sub_field('description_block_image_1'),
    'description_block_image_2' => get_sub_field('description_block_image_2'),
    'add_an_image_beneath_the_copy' => get_sub_field('add_an_image_beneath_the_copy'),

);

jsd_descriptionBlock($args);

?>