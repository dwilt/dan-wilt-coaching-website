<?php

$args = array(
    'do_you_want_the_images_on_the_left_or_right_side' => get_sub_field('do_you_want_the_images_on_the_left_or_right_side'),
    'description_block_image_1' => get_sub_field('description_block_image_1'),
    'description_block_image_2' => get_sub_field('description_block_image_2'),
    'description_block_image_3' => get_sub_field('description_block_image_3'),
    'description_block_image_4' => get_sub_field('description_block_image_4'),

);

jsd_imageBlock($args);

?>