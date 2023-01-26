<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
    $offices = get_field('offices');
}

$allowed_html = array(
    'br' => array(),
);
?>

<?php if ($offices) : ?>
<!-- Gutenberg block offices -->
<div class="offices">
    <div class="swiper overflow-visible overflow-md-hidden">
        <div class="swiper-wrapper justify-content-between">
            <?php foreach ($offices as $office) : ?>
            <div class="swiper-slide">
                <div class="animate offices-item">
                    <figure>
                        <?php echo wp_get_attachment_image($office['image']['id'], 'full'); ?>
                    </figure>
                    <div class="d-flex flex-column align-items-start">
                        <h4><?php echo esc_html($office['title']); ?></h4>
                        <div class="text-m d-flex flex-column">
                            <address><?php echo wp_kses($office['address'], $allowed_html); ?></address>
                            <a href="tel: <?php echo str_replace(' ', '', esc_html($office['phone'])); ?>">
                                <?php echo esc_html($office['phone']); ?>
                            </a>
                            <a href="mailto: <?php echo sanitize_email($office['email']); ?>">
                                <?php echo esc_html($office['email']); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- // Gutenberg block offices -->
<?php endif;