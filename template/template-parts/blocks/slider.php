<?php

if (!defined('ABSPATH')) exit;

if  (function_exists('get_field')) {
    $images = get_field('slider');
}
?>

<?php if ($images) : ?>
<!-- Gutenberg block slider -->
<div class="wp-block slider" data-effect="fade" data-autoheight="true">
    <div class="swiper overflow-visible">
        <div class="swiper-wrapper">
            <?php foreach ($images as $image) : ?>
            <div class="swiper-slide">
                <figure>
                    <?php echo wp_get_attachment_image($image['id'], 'full'); ?>
                </figure>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    <div class="slider-footer d-flex justify-content-center align-items-center">
        <div class="d-none d-lg-block swiper-nav--prev">
            <svg><use xlink:href="#arrow"></use></svg>
        </div>
        <div class="swiper-pagination"></div>
        <div class="d-none d-lg-block swiper-nav--next">
            <svg><use xlink:href="#arrow"></use></svg>
        </div>
    </div>
</div>
<!-- // Gutenberg block slider -->
<?php endif; ?>