<?php

if (!defined('ABSPATH')) exit;

if(function_exists('get_field')) {
    $steps = get_field('steps');
}

?>

<?php if($steps) : ?>
    <!-- Gutenberg block steps -->
    <div class="steps">
        <div class="swiper overflow-visible overflow-lg-hidden">
            <div class="steps-wrapper swiper-wrapper d-lg-grid">
                <?php foreach ($steps as $step) : ?>
                <div class="steps-step swiper-slide">
                    <div class="animate">
                        <div class="steps-step__num h3 red"></div>
                        <h4>
                            <?php echo esc_html($step['header']); ?>
                        </h4>
                        <p class="text-m">
                            <?php echo esc_html($step['text']); ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- // Gutenberg block steps -->
<?php endif; ?>