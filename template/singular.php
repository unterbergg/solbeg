<?php

if (!defined('ABSPATH')) exit;

get_header();
?>

    <main class="main">

        <?php get_template_part('template-parts/content', 'blocks'); ?>

    </main>

<?php
get_footer(null, ['text' => 'Contact us']);