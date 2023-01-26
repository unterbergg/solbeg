<?php

if (!defined('ABSPATH')) exit;

function is_blocks() {
    global $post;
    return false !== strpos((string)$post->post_content, '<!-- wp:acf/');
}

get_template_part("inc/template");
get_template_part("inc/assets");
get_template_part("inc/blocks");
get_template_part("inc/hooks");
get_template_part("inc/cpt");
get_template_part("inc/modals");
get_template_part("inc/ajax");
get_template_part("inc/functions");
get_template_part("inc/opengraph");