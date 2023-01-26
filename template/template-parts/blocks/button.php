<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
    $link = get_field('link');
    $text = get_field('text');
    $rel = get_field('rel');
}

if (!($link && $text)) return;
?>

<a href="<?php echo esc_url($link); ?>"
   class="btn"
   <?php if ($rel) : ?>
   rel="<?php echo esc_attr($rel); ?>"
   <?php endif; ?>
>
    <?php echo esc_html($text); ?>
</a>
