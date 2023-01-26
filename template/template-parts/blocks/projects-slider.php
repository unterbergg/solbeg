<?php
/**
 * @var array $args
 */

if (!defined('ABSPATH')) exit;

?>

<!-- Gutenberg block slider -->
<div class="slider slider-projects h4">
    <div class="swiper overflow-visible">
        <div class="swiper-wrapper">
            <?php
            $count = 5;
            foreach($args['projects'] as $project => $item) :
                if($item['thumb']) :
            ?>
            <div class="swiper-slide">
                <a href="<?php echo esc_url($item['url']); ?>">
                    <figure>
                        <?php echo $item['thumb']; ?>
                    </figure>
                    <span>
                        <?php echo esc_html($project); ?>
                    </span>
                </a>
            </div>
            <?php
                endif;
                if (!--$count) {
                    break;
                }
            endforeach;
            ?>
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
<!-- // Gutenberg block slider -->
