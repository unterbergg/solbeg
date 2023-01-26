<?php

if (!defined('ABSPATH')) exit;

if(function_exists('get_field')) {
    $type = get_field('type');
    $services_obj = get_field('services');
}
$services = [];
foreach ($services_obj as $service) {
    extract($service);
    /**
     * @var string $label
     * @var array $service
     */
    if (!$label) $label = get_the_title($service->ID);
    $services[$label] = [
        'url' => get_permalink($service->ID),
        'excerpt' => get_the_excerpt($service->ID)
    ];
}

if(!$services) return;

$i = 0; foreach ($services as $service => $item) : $i -=- 1; ?>

    <section class="block short-md">
        <div class="container">
            <div class="row g-0">
                <div class="col-12 col-md-40 col-lg-none col-lg-6 h3 pe-md-60">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="animate">
                            <a href="<?php echo esc_url($item['url']); ?>">
                                <?php echo wp_kses($service, ['br' => []]); ?>
                            </a>
                        </div>
                        <svg class="d-block d-md-none" width="17" height="28">
                            <use xlink:href="#arrow-short"></use>
                        </svg>
                    </div>
                </div>
                <div class="d-none d-md-block col-12 col-md-60 col-lg-none col-lg-6">
                    <p class="animate">
                        <?php echo esc_html($item['excerpt']); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php if ($i < count($services)) : ?>
        <!-- Gutenberg block divider -->
        <div class="container">
            <hr>
        </div>
        <!-- // Gutenberg block divider -->
    <?php endif; ?>

<?php endforeach; ?>