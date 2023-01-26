<?php

if (!defined('ABSPATH')) exit;

if(function_exists('get_field')) {
    $type = get_field('type');
    $industries_obj = get_field('industries');
}
$industries = [];
foreach ($industries_obj as $industry) {
    $industries[wp_kses($industry->post_title, ['br'=>[]])] = [
        'thumb' => get_attached_file(get_post_thumbnail_id($industry->ID)),
        'url' => get_permalink($industry->ID)
    ];
}

if(!$industries) return;

get_template_part("template-parts/blocks/industries", $type, ['industries' => $industries]);