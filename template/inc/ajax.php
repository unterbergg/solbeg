<?php

if (!defined('ABSPATH')) exit;

function solbeg_ajax_loadmore_posts() {

    $args = array(
        'paged' => $_POST['paged'] + 1,
        'cat' => $_POST['cat'] ?? ""
    );

    $query = new WP_Query($args);

    if( $query->have_posts() ) :

        while( $query->have_posts() ): $query->the_post();
            $cat = wp_get_post_categories(get_the_ID(), ['fields' => 'all']);
            ?>
            <hr>
            <article class="blog-article">
                <div class="row g-0 align-items-stretch">
                    <div class="d-flex col-12 mb-16 col-md-6 mb-md-0 col-xl-5 col-xxl-4">
                        <a class="d-flex flex-fill" href="<?php the_permalink(); ?>">
                            <figure class="flex-fill cover">
                                <?php echo get_the_post_thumbnail();?>
                            </figure>
                        </a>
                    </div>
                    <div class="d-flex col-12 col-md-6 col-xl-7 col-xxl-8">
                        <div class="blog-article__content d-flex flex-column flex-fill justify-content-between">
                            <h3 class="m-0 mb-16 mb-md-40"><?php the_title(); ?></h3>
                            <div class="d-flex justify-content-between align-items-end">
                                <div class="blog-article__more text-l">
                                    <a href="<?php the_permalink(); ?>">Read more</a>
                                </div>
                                <div class="d-flex flex-column sugnature text-end">
                                    <?php echo esc_html($cat[0]->name); ?>
                                    <time datetime="<?php echo get_the_date('Y-M-d h:m'); ?>">
                                        <?php echo solbeg_get_date(get_the_ID()); ?>
                                    </time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <?php

        endwhile;

        wp_reset_postdata();

    endif;
    die;

}
add_action('wp_ajax_' . (is_user_logged_in() ? '' : 'nopriv_') . 'loadmore_posts', 'solbeg_ajax_loadmore_posts');

function solbeg_loadmore_projects() {

    $projects = $_POST['projects'];
    $projects = array_slice(json_decode($projects), $_POST['offset']);

    if( $projects ) :
        $i = 0;
        foreach($projects as $project) :
            $i++;
            ?>
            <div class="col-100 col-md-40 col-lg-auto col-lg-<?php echo in_array($i % 4, [2, 3]) ? 6 : 4; ?>">
                <div class="animate">
                    <div class="projects-item h3 <?php echo $i % 2 == 0 ? 'ms-auto' : ''; ?>">
                        <a href="<?php echo esc_url(get_permalink($project)); ?>">
                            <figure>
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url($project, 'full')); ?>"
                                     alt="<?php echo get_post_meta(get_the_post_thumbnail_url($project, 'full'), '_wp_attachment_image_alt', TRUE);?>"
                                >
                            </figure>
                            <span>
                                <?php echo esc_html(get_the_title($project)); ?>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <?php
            if ($i >= $_POST['post_per_page']) break;
        endforeach;

    endif;
    die;
}
add_action('wp_ajax_' . (is_user_logged_in() ? '' : 'nopriv_') . 'loadmore_projects', 'solbeg_loadmore_projects');
