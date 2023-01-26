<?php

if (!defined('ABSPATH')) exit;

add_filter('script_loader_tag', function ($tag, $handle){
    foreach (['async', 'defer'] as $attr) {
        if (!wp_scripts()->get_data($handle, $attr)) {
            continue;
        }
        if (!preg_match(":\s$attr(=|>|\s):", $tag)) {
            $tag = preg_replace(':(?=></script>):', " $attr", $tag, 1);
        }
        break;
    }
    return $tag;
}, 10, 2);

add_action('wp_enqueue_scripts', 'solbeg_scripts');
function solbeg_scripts() {
    global $wp_query;

    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('solbeg-style', get_template_directory_uri() . '/assets/css/public.css', [], $theme_version);
    wp_enqueue_script('solbeg-scripts', get_template_directory_uri() . '/assets/js/public.js', [], $theme_version, true);
    wp_enqueue_script('solbeg-theme', get_template_directory_uri() . '/assets/js/theme.js', [], $theme_version, false); // In header!

    wp_localize_script('solbeg-scripts', 'solbeg_loadmore_params', [
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
        'paged' => 0,
        'post_per_page' => 8,
        'offset' => 8,
        'bottomOffset' => esc_html(get_field('bottom_offset', 'options'))
    ]);

    // Live reload
//    if ($_SERVER['SERVER_NAME'] === 'localhost')
//        wp_enqueue_script('live-reload-scripts', 'http://localhost:35729/livereload.js', [], $theme_version, true);
}

function solbeg_setup_theme() {
	add_theme_support('editor-styles');
	add_editor_style('assets/css/editor.css');
}
add_action('after_setup_theme', 'solbeg_setup_theme');

function solbeg_custom_admin_style() {
    echo '
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.typekit.net/wvj3hiw.css">
        <style>
            body.post-type-post .editor-styles-wrapper .is-root-container > .wp-block {
                max-width: calc(1334px + var(--container-gutter, 1rem) * 2);
                margin-right: auto;
                margin-left: auto;
                margin-bottom: 40px;
        </style>
    ';
}
add_action('admin_head', 'solbeg_custom_admin_style');

function solbeg_admin_sprite() {
    get_template_part('template-parts/sprite');
}
add_action('in_admin_header', 'solbeg_admin_sprite');