<?php

if (!defined('ABSPATH')) exit;

add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('wpcf7_load_css', '__return_false');
add_filter('wpcf7_form_autocomplete', function() { return "off"; });
add_image_size( 'video_modal_preview', 300, 300, true );

function acf_load_post_types_field_choices( $field ) {
    $field['choices'][''] = "- " . __("Выбрать") . " -";
    $choices = get_post_types(['has_archive' => true], 'objects');

    foreach ( $choices as $post_type ) {
        $field['choices'][$post_type->name] = $post_type->labels->name;
    }
    return $field;
}
add_filter('acf/load_field/name=post_type', 'acf_load_post_types_field_choices');


function svg_upload_allow( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}
add_filter( 'upload_mimes', 'svg_upload_allow' );


function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){


    if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
        $dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
    else
        $dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );



    if( $dosvg ){


        if( current_user_can('manage_options') ){

            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        }
        else {
            $data['ext'] = $type_and_ext['type'] = false;
        }

    }

    return $data;
}
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );


function show_svg_in_media_library( $response ) {

    if ( $response['mime'] === 'image/svg+xml' ) {

        // С выводом названия файла
        $response['image'] = [
            'src' => $response['url'],
        ];
    }

    return $response;
}
add_filter( 'wp_prepare_attachment_for_js', 'show_svg_in_media_library' );


function post_type_nav_class( $classes, $item ) {
    $post_type = get_post_type();
    if ( $post_type && in_array( 'archive-' . $post_type, $classes ) ) {
        $classes[] = 'active';
    }
    if ( $post_type !== 'post' && in_array( 'current_page_parent', $classes ) ) {
        $classes = array_diff( $classes, array( 'current_page_parent' ) );
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'post_type_nav_class' , 10 , 2 );