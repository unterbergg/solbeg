<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
    $preview = get_field('preview');
    $modal = get_field('modal');
}

$video_id = vsprintf('video_%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4));

?>

<?php if ($preview) : ?>
<!-- Gutenberg block video modal -->
<a href="<?php echo get_permalink($modal); ?>" class="video-btn <?php echo esc_html($block['className']) ?? ''; ?>" rel="modal:open">
    <?php echo wp_get_attachment_image($preview['id'], 'video_modal_preview'); ?>
    <span>
        <i></i>
        <svg>
            <use xlink:href="#play"></use>
        </svg>
    </span>
</a>
<!-- // Gutenberg block video modal -->
<?php endif;