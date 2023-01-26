<?php

if(!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
    $digits = get_field('digits');
}
?>

<!-- Gutenberg block digits -->
<div class="digits">
    <div class="digits-grid digits-grid__top"></div>
    <div class="swiper overflow-visible overflow-md-hidden">
        <div class="swiper-wrapper justify-content-between flex-md-wrap">
            <?php foreach($digits as $digit) :
                /**
                 * @var string $head
                 * @var string $signature
                 */
                extract($digit);
            ?>
            <div class="swiper-slide">
                <div class="h2 red">
                    <?php echo wp_kses($head, ['small' => [], 'br' => []]);?>
                </div>
                <p class="signature">
                    <?php echo wp_kses($signature, ['small' => [], 'br' => []]);?>
                </p>
            </div>
            <?php endforeach;?>
        </div>
    </div>
    <div class="digits-grid digits-grid__bottom"></div>
</div>
<!-- // Gutenberg block digits -->
