<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
    $image = get_field('image');
    $video = get_field('video');
}

?>

<?php if ($image && $video) : ?>
<!-- Gutenberg block video -->
<div class="video <?php echo esc_html($block['className']) ?? ''; ?>">
    <button class="video-play" type="button">
        <div>
            <figure>
                <img src="<?php echo esc_url($image['url']); ?>" alt="Preview">

            </figure>
        </div>
        <span>
            <i></i>
        </span>
    </button>
    <video class="d-block" muted loop>
        <source src="<?php echo esc_url($video); ?>">
    </video>
</div>
<!-- // Gutenberg block video -->
<?php endif;