<?php

if (!defined('ABSPATH')) exit;

get_header();

?>
    <main class="main">

        <?php get_template_part('template-parts/content', 'blocks'); ?>

    </main>

<?php

if (function_exists('get_field')) {
    $footer_for_single_posts = get_field('footer_for_single_posts', 'options');
}

get_footer(null, $footer_for_single_posts ?? ['text' => 'Estimate project']);