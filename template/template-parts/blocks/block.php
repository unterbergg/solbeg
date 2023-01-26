<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
    $header = get_field('header');
    $link_to_archive = get_field('link_to_archive');
}

?>

<?php if (!empty($block['anchor'])) : ?>
    <a name="<?php echo esc_html($block['anchor']); ?>"></a>
<?php endif; ?>

<section class="block <?php echo esc_html($block['className'] ?? ''); ?>">
    <div class="container">
        <?php if($header) :?>
        <header class="block-header d-flex justify-content-between">
            <h2 class="signature m-0">
                <?php echo esc_html($header);?>
            </h2>
            <?php if(!empty($link_to_archive) && $link_to_archive['page_link']):?>
            <a href="<?php echo esc_url($link_to_archive['page_link']); ?>" class="signature">
                <span>
                    <?php echo esc_html($link_to_archive['text']); ?>
                </span>
                <svg>
                    <use xlink:href="#arrow-short"></use>
                </svg>
            </a>
            <?php endif;?>
        </header>
        <?php endif;?>

        <InnerBlocks/>

    </div>
</section>
