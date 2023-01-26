<?php

if (!defined('ABSPATH')) exit;

if(function_exists('get_field')) {
    $balls = get_field('balls');
}

?>

<?php if($balls) : ?>
<div class="balls animate mx-auto mx-md-0 mt-40 mt-sm-60 mt-md-0">
    <div class="swiper overflow-visible">
        <div class="swiper-wrapper">
        <?php foreach($balls as $ball) : ?>
        <div class="swiper-slide">
            <div class="balls-ball">
                <?php echo solbeg_get_image($ball['image']); ?>
            </div>
        </div>
        <?php endforeach; ?>
</div>
<?php endif; ?>