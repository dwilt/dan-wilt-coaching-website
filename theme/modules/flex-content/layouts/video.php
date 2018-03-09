<?php

$videoArgs = array(
    'videoTitle' => get_sub_field('video_title'),
    'video_image_placeholder' => get_sub_field('video_image_placeholder'),
    'video_embed' => get_sub_field('video_embed'),
);

jsd_video($videoArgs);

?>