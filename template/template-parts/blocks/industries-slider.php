<?php
/**
 * @var array $args
 */
if (!defined('ABSPATH')) exit;
?>

<!-- Gutenberg block slider -->
<div class="slider slider-industries h4 pt-40 pt-md-60 pt-lg-120 pt-xl-160">
    <div class="swiper overflow-visible">
        <div class="swiper-wrapper">
            <?php foreach ($args['industries'] as $name => $item) :?>
                <div class="swiper-slide">
                    <div class="animate industries-item">
                        <a href="<?php echo $item['url'];?>">
                            <figure>
                                <?php echo file_get_contents($item['thumb']);?>
                            </figure>
                            <hr>
                            <span><?php echo $name;?></span>
                        </a>
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
<!-- // Gutenberg block slider -->
