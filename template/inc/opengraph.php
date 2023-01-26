<?php

use Intervention\Image\ImageManagerStatic as Image;

if (!defined('ABSPATH')) exit;

get_template_part("vendor/autoload");

add_filter( 'wpseo_add_opengraph_additional_images', function($image_container) {
    $image_container->add_image(get_template_directory_uri() . '/assets/images/social.png');
} );

add_filter( 'wpseo_opengraph_image', function($image_url, $presentation) {
    if (get_post_type($presentation->model->object_id) === "post")
        return $image_url;
    return esc_url(home_url('/ogimage/' . $presentation->model->object_id . ".png"));
}, 10, 2 );

add_action("init", function () {
    add_rewrite_rule('^ogimage/([0-9]+).png$', '/wp-admin/admin-ajax.php?action=ogimage', 'top');
    if (is_user_logged_in()) {
        add_action("wp_ajax_ogimage", "ogimage_handler");
    } else {
        add_action("wp_ajax_nopriv_ogimage", "ogimage_handler");
    }
});

function mb_wordwrap($str, $width = 75, $break = "\n", $cut = false) {
    $lines = explode($break, $str);
    foreach ($lines as &$line) {
        $line = rtrim($line);
        if (mb_strlen($line) <= $width)
            continue;
        $words = explode(' ', $line);
        $line = '';
        $actual = '';
        foreach ($words as $word) {
            if (mb_strlen($actual.$word) <= $width)
                $actual .= $word.' ';
            else {
                if ($actual != '')
                    $line .= rtrim($actual).$break;
                $actual = $word;
                if ($cut) {
                    while (mb_strlen($actual) > $width) {
                        $line .= mb_substr($actual, 0, $width).$break;
                        $actual = mb_substr($actual, $width);
                    }
                }
                $actual .= ' ';
            }
        }
        $line .= trim($actual);
    }
    return implode($break, $lines);
}

function ogimage_handler() {
    $post_id = (int) preg_replace("/[^0-9]+/", "", $_SERVER['REQUEST_URI']);

    $title = get_bloginfo("name") . " — " . get_bloginfo("description");
    if ($post_id !== (int) get_option('page_on_front')) {
        $title = get_the_title($post_id);
        $post = get_post($post_id);
    }
    if ($post && function_exists("wpseo_replace_vars")) {
        $yoast_title = get_post_meta($post_id, '_yoast_wpseo_title', true);
        $yoast_title = preg_replace("/(%%sep%%|%%page%%).*/", "", $yoast_title);
        $title = wpseo_replace_vars($yoast_title ?: $title, $post);
    }
    if (function_exists('get_field') && get_field("ogimagetitle", $post_id)) {
        $title = get_field("ogimagetitle", $post_id);
    }

    // Replace breake lines
    $title = str_replace(["\r\n", "\r","\n"], PHP_EOL, $title);

    // Bg
    $image = Image::canvas(1200, 630, '#E84419');

    if (get_post_type($post_id) !== 'projects') {
        $image->insert(get_template_directory() . "/assets/og/logo.png", 'top-left', 60, 50);
    } else {
        $thumbID = get_post_thumbnail_id($post_id);
        if ($thumbID) {
            $thumb = Image::make(get_attached_file($thumbID));
            $thumb->fit(1200, 630);
            $image->insert($thumb, 'top-left', 0, 0);
        }
        $image->fill(array(32, 16, 30, 0.6));
        $image->insert(get_template_directory() . "/assets/og/logo_big.png", 'top-left', 415, 250);
    }


    if (get_post_type($post_id) !== 'projects') {

        $lineMaxLength = get_post_type($post_id) === "post" ? 28 : 20;

        if (mb_strpos($title, PHP_EOL) === false)
            $title = mb_wordwrap($title, $lineMaxLength, PHP_EOL);

        $title = explode(PHP_EOL, $title);
        $lines = count($title);

        $maxlines = 3;
        if ($lines > $maxlines) {
            $title = array_slice($title, 0, $maxlines);
            $title[$maxlines - 1] .= "...";
            $lines = $maxlines;
        }

        foreach (array_reverse($title) as $index => $text) {

            if (get_post_type($post_id) === "post") {
                $image->text($text, 60, 550 - (86 * $index * 1.1), function($font) {
                    $font->file(get_template_directory() . "/assets/og/coolvetica_bk.ttf");
                    $font->size(86);
                    $font->color('#ffffff');
                });
            } else {
                $image->text($text, 60, 550 - (116 * $index * 1.1), function($font) {
                    $font->file(get_template_directory() . "/assets/og/coolvetica_bk.ttf");
                    $font->size(116);
                    $font->color('#ffffff');
                });
            }
        }
    }

    header('Content-Type: image/png'); 
    echo $image->response('png');
    die();
}