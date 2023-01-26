<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
    $animation = get_field('animation') ?? 3000;
    $logos = get_field('logos');
}
?>

<!-- Gutenberg block marquee -->
<div class="marquee py-md-30 py-lg-40" data-speed="<?php echo esc_html($animation); ?>">
    <div class="swiper">
        <div class="swiper-wrapper align-items-center">
            <?php
            foreach ($logos as $logo) :
                ?>
                <div class="swiper-slide">
                    <figure>
                        <?php echo file_get_contents(get_attached_file($logo)); ?>
                    </figure>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>
<!-- // Gutenberg block marquee -->
