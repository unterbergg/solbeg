<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
    $testimonials = get_field('testimonials');
}

?>

<?php if($testimonials) : ?>
<!-- Gutenberg block tesmonials slider -->
<div class="slider slider-testmonials" data-effect="fade" data-autoheight="true">
    <div class="swiper overflow-visible">
        <div class="swiper-wrapper">
            <?php foreach ($testimonials as $testimonial) : ?>
            <div class="swiper-slide">
                <div class="animate">
                    <div class="row g-0 justify-content-center">
                        <div class="col-12 col-md-60 col-lg-auto col-lg-8">
                            <figure>
                                <blockquote>
                                    <?php echo esc_html($testimonial['text'])?>
                                </blockquote>
                                <figcaption class="signature">
                                    <?php echo esc_html($testimonial['author'])?>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-nav d-none d-lg-flex">
            <div class="swiper-nav--prev">
                <svg><use xlink:href="#arrow"></use></svg>
            </div>
            <div class="swiper-nav--next">
                <svg><use xlink:href="#arrow"></use></svg>
            </div>
        </div>
    </div>
    <div class="slider-footer d-flex justify-content-center align-items-center">
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- // Gutenberg block tesmonials slider -->
<?php endif;?>