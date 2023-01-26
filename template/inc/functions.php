<?php

if (!defined('ABSPATH')) exit;

/**
 * Get an image in the appropriate form according to the mime type
 *
 * @param array $image_array
 * @return false|string|void
 */
function solbeg_get_image($image_array) {

    if (!is_array($image_array)) return;

    // Skip mime checks for svg images
    if (mb_strpos($image_array['url'], ".svg", -4) !== false)
        return file_get_contents($image_array['url']);

    $mime = wp_get_image_mime($image_array['url']);
    if ($mime === 'image/png') {
        return '<img src="' . $image_array['url'] . '" alt="' . $image_array['alt'] . '">';
    } else {
        return file_get_contents($image_array['url']);
    }
}

/**
 * Custom date format
 *
 * @param int $post_id
 * @return string
 */
function solbeg_get_date($post_id) {
    return str_replace(['May.', 'Jun.', 'Jul.'], ['May', 'June', 'July'], get_the_date('M. j, Y', $post_id));
}