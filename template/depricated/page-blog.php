<?php

if (!defined('ABSPATH')) exit; 

get_header();

$posts_page_id = get_option('page_for_posts');
$posts_page_url = get_permalink($posts_page_id);

?>
    <main class="main">

        <!-- Gutenberg block intro -->
        <section class="block intro">
            <div class="container">
                <header>
                    <h1 class="animate">Blog</h1>
                </header>
                <div class="intro-menu slider text-m" id="categories-menu">
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
                                <a href="<?php echo esc_url($posts_page_url); ?>">
                                    All posts
                                </a>
                            </div>
                            <?php if ($categories) : ?>
                                <?php foreach ($categories as $cat) : ?>
                                <div class="swiper-slide">
                                    <a href="<?php echo esc_url($posts_page_url) . "#" . esc_html($cat->slug); ?>" data-catid="<?php echo $cat->term_id; ?>">
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

get_footer(null, ['text' => 'Contact us']);