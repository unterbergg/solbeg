<?php

if (!defined('ABSPATH')) exit;

get_header();
?>
    <main class="main">
        <!-- Gutenberg block intro -->
        <section class="block intro">
            <div class="container">
                <header>
                    <h1 class="animate">Blog</h1>
                </header>
                <div class="intro-menu slider text-m" id="categories-menu" data-cat="<?php echo get_queried_object()->slug; ?>">
                    <div class="swiper overflow-visible">
                        <div class="swiper-wrapper">
                            <?php
                            $categories = get_categories( [
                                'taxonomy'     => 'category',
                                'type'         => 'post',
                                'child_of'     => 0,
                                'parent'       => '',
                                'orderby'      => 'name',
                                'order'        => 'ASC',
                                'hide_empty'   => 1,
                                'hierarchical' => 1,
                                'exclude'      => '',
                                'include'      => ''
                            ] );


                            ?>
                            <div class="swiper-slide">
                                <a href="<?php echo get_post_type_archive_link('post'); ?>"
                                   class="nav-item-cat-page"
                                >
                                    All posts
                                </a>
                            </div>
                            <?php if ($categories) : ?>
                                <?php foreach ($categories as $cat) : ?>
                                    <div class="swiper-slide">
                                        <a href="<?php echo get_post_type_archive_link('post') . "#" . esc_html($cat->slug); ?>"
                                           data-catid="<?php echo $cat->term_id; ?>"
                                           class="nav-item-cat-page"
                                        >
                                            <?php echo esc_html($cat->cat_name); ?>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gutenberg block intro -->

        <section class="blog">
            <div class="container" id="posts"></div>
        </section>
    </main>
<?php

if (function_exists('get_field')) {
    $args = get_field('footer_link', get_option( 'page_for_posts' ));
}

$args['text'] = $args['text'] != "" ? $args['text'] : 'Contact us';


get_footer(null, $args ?? ['text' => 'Contact us']);
