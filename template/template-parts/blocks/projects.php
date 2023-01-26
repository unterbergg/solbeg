<?php

if (!defined('ABSPATH')) exit;

if(function_exists('get_field')) {
    $type = get_field('type');
    $projects_obj = get_field('projects');
}
$projects = [];
$ids = [];
foreach ($projects_obj as $project) {
    $projects[$project->post_title] = [
        'thumb' => get_the_post_thumbnail($project->ID, 'full'),
        'url' => get_permalink($project->ID)
    ];
    array_push($ids, $project->ID);
}

if(!$projects) return;

get_template_part("template-parts/blocks/projects", $type, ['projects' => $projects, 'ids' => $ids]);