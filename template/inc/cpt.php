<?php

if (!defined('ABSPATH')) exit;

function solbeg_register_post_types(){
    register_post_type('services', [
        'label'  => null,
        'labels' => [
            'name'               => __('Services', 'solbeg'),
            'singular_name'      => __('Service', 'solbeg'),
            'add_new'            => __('Add Service', 'solbeg'),
            'add_new_item'       => __('Add Service Item', 'solbeg'),
            'edit_item'          => __('Edit Service', 'solbeg'),
            'new_item'           => __('New Service', 'solbeg'),
            'view_item'          => __('View Service', 'solbeg'),
            'search_items'       => __('Search Service', 'solbeg'),
            'not_found'          => __('Not Found', 'solbeg'),
            'not_found_in_trash' => __('Not Found in Trash', 'solbeg'),
            'menu_name'          => __('Services', 'solbeg'),
        ],
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_rest'        => true,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => [
            'slug'         => 'services',
            'with_front'   => false,
        ],
        'query_var'           => true,
        'template'            => [], // array of default blocks
        'template_lock'       => null, //all - locked, insert - can move, can't insert and delete
    ]);

    register_post_type('projects', [
        'label'  => null,
        'labels' => [
            'name'               => __('Projects', 'solbeg'),
            'singular_name'      => __('Project', 'solbeg'),
            'add_new'            => __('Add Project', 'solbeg'),
            'add_new_item'       => __('Add Project Item', 'solbeg'),
            'edit_item'          => __('Edit Project', 'solbeg'),
            'new_item'           => __('New Project', 'solbeg'),
            'view_item'          => __('View Project', 'solbeg'),
            'search_items'       => __('Search Project', 'solbeg'),
            'not_found'          => __('Not Found', 'solbeg'),
            'not_found_in_trash' => __('Not Found in Trash', 'solbeg'),
            'menu_name'          => __('Projects', 'solbeg'),
        ],
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_rest'        => true,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'thumbnail' ],
        'taxonomies'          => ['industries'],
        'has_archive'         => false,
        'rewrite'             => [
            'slug'         => 'projects',
            'with_front'   => false,
        ],
        'query_var'           => true,
        'template'            => [], // array of default blocks
        'template_lock'       => null, //all - locked, insert - can move, can't insert and delete
    ]);

    register_post_type('industries', [
        'label'  => null,
        'labels' => [
            'name'               => __('Industries', 'solbeg'),
            'singular_name'      => __('Industry', 'solbeg'),
            'add_new'            => __('Add Industry', 'solbeg'),
            'add_new_item'       => __('Add Industry Item', 'solbeg'),
            'edit_item'          => __('Edit Industry', 'solbeg'),
            'new_item'           => __('New Industry', 'solbeg'),
            'view_item'          => __('View Industry', 'solbeg'),
            'search_items'       => __('Search Industry', 'solbeg'),
            'not_found'          => __('Not Found', 'solbeg'),
            'not_found_in_trash' => __('Not Found in Trash', 'solbeg'),
            'menu_name'          => __('Industries', 'solbeg'),
        ],
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_rest'        => true,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'thumbnail' ],
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => [
            'slug'         => 'industries',
            'with_front'   => false,
        ],
        'query_var'           => true,
        'template'            => [], // array of default blocks
        'template_lock'       => null, //all - locked, insert - can move, can't insert and delete
    ]);

    register_post_type('modals', [
        'label'  => null,
        'labels' => [
            'name'               => __('Modals', 'solbeg'),
            'singular_name'      => __('Modal', 'solbeg'),
            'add_new'            => __('Add Modal', 'solbeg'),
            'add_new_item'       => __('Add Modal Item', 'solbeg'),
            'edit_item'          => __('Edit Modal', 'solbeg'),
            'new_item'           => __('New Modal', 'solbeg'),
            'view_item'          => __('View Modal', 'solbeg'),
            'search_items'       => __('Search Modal', 'solbeg'),
            'not_found'          => __('Not Found', 'solbeg'),
            'not_found_in_trash' => __('Not Found in Trash', 'solbeg'),
            'menu_name'          => __('Modals', 'solbeg'),
        ],
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_rest'        => true,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor' ],
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => [
            'slug'         => 'modal',
            'with_front'   => false,
        ],
        'query_var'           => true,
        'template'            => [], // array of default blocks
        'template_lock'       => null, //all - locked, insert - can move, can't insert and delete
    ]);
}
add_action('init', 'solbeg_register_post_types');
