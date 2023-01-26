<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
    $years = get_field('years');
}
?>

<?php if ($years) : ?>
<!-- Gutenberg block history -->
<div class="history">
    <div class="history-years">
        <div class="swiper overflow-visible">
            <div class="swiper-wrapper align-items-center">
                <?php foreach ($years as $year) : ?>
                <div class="swiper-slide">
                    <div class="animate">
                        <?php echo esc_html($year['year']); ?>
                    </div>
                </div>
                <?php endforeach;?>
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
    </div>
    <div class="history-description animate">
        <div class="row g-0">
            <div class="col-12 m-auto col-md-60 col-lg-auto col-lg-8">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($years as $year) : ?>
                        <div class="swiper-slide">
                            <p>
                                <?php echo esc_html($year['description']); ?>
                            </p>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // Gutenberg block history -->
<?php endif; ?>