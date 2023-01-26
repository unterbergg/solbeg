<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
    $employees = get_field('employees');
}

?>

<?php if ($employees) : ?>
<!-- Gutenberg block employees -->
<div class="animate employees">
    <div class="employees-wrapper overflow-lg-hidden">
        <div class="swiper overflow-visible overflow-lg-hidden">
            <div class="swiper-wrapper d-lg-grid">
                <?php foreach ($employees as $employee) :
                    extract($employee);
                    /**
                     * @var string $position
                     * @var string $name
                     * @var int $photo ID Atachment
                     */
                    ?>
                <div class="swiper-slide">
                    <div class="employees-item">
                        <figure>
                            <?php echo wp_get_attachment_image($photo, 'full'); ?>
                        </figure>
                        <p>
                            <?php echo wp_kses($name, ['br' => []]); ?>
                        </p>
                        <p class="text-s">
                            <?php echo wp_kses($position, ['br' => []]); ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="d-none d-lg-block employees-expand text-l">
        <a href="#" class="employees-toggle" data-text="Hide">See all</a>
    </div>
</div>
<!-- // Gutenberg block employees -->
<?php endif; ?>