<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field'))
    $bg = get_field('bg');

?>

<div class="<?php echo esc_html($block['className']) ?? ''; ?>">
    <InnerBlocks/>
</div>