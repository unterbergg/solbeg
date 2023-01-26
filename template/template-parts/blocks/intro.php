<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
    $title = get_field('title');
    $text = get_field('text');
    $button = get_field('button');
}

?>
<!-- Gutenberg block intro -->
<div class="block intro">
    <div class="container">
        <InnerBlocks/>
    </div>
</div>
<!-- // Gutenberg block intro -->


