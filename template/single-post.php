<?php

if (!defined('ABSPATH')) exit;

$posts_page_id = get_option('page_for_posts');
$posts_page_url = get_permalink($posts_page_id);

get_header();
?>

    <main class="main">

        <div class="container position-relative">

            <div class="d-none d-lg-block share">
                <ul>
                    <li>
                        <a href="#" data-social="twitter">
                            <svg width="24" height="24">
                                <use xlink:href="#twitter"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-social="facebook">
                            <svg width="24" height="24">
                                <use xlink:href="#facebook"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-social="linkedin">
                            <svg width="24" height="24">
                                <use xlink:href="#linkedin"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        
            <div class="row g-0">
                <div class="col-12 col-lg-8 mx-auto">

                    <!-- Gutenberg block intro -->
                    <section class="block intro pb-0 overflow-visible">
                        <div class="container">
                            <header>
                                <h1 class="animate h2"><?php the_title(); ?></h1>
                            </header>
                        </div>
                    </section>
                    <!-- Gutenberg block intro -->

                    <div class="d-flex align-items-center pt-20 pt-xl-40 signature">
                        <time datetime="<?php echo get_the_date('Y-M-d h:m'); ?>">
                            <?php echo solbeg_get_date(get_the_ID()); ?>
                        </time>
                        <?php
                        $categories = get_the_category();
                            if ($categories) :
                            ?>
                            <a class="ms-32" href="<?php echo esc_url($posts_page_url) . "#" . esc_html($categories[0]->slug); ?>">
                                <?php echo esc_html($categories[0]->name); ?>
                            </a>
                            <?php
                            endif;
                        ?>
                    </div>

                    <div class="block content pt-40 pt-md-60 pt-xl-120">

                        <?php get_template_part('template-parts/content', 'blocks'); ?>

                    </div>

                </div>
            </div>

        </div>

    </main>

<?php

if (function_exists('get_field')) {
    $footer_for_single_posts = get_field('footer_for_single_posts', 'options');
}

get_footer(null, $footer_for_single_posts ?? ['text' => 'Contact us']);

