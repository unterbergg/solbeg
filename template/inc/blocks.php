<?php

if (!defined('ABSPATH')) exit;

add_filter('block_categories_all', 'solbeg_block_categories', 10, 2);
function solbeg_block_categories($block_categories, $editor_context) {
    if (!empty( $editor_context->post)) {
        array_push(
            $block_categories,
            array(
                'slug'  => 'solbeg',
                'title' => __('Solbeg', 'solbeg'),
                'icon'  => null,
            )
        );
    }
    return $block_categories;
}

add_action('acf/init', 'solbeg_acf_init_blocks');
function solbeg_acf_init_blocks() {

    $icon = '<svg width="512" height="512" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M272.024 205.328H202.037C199.984 183.367 186.302 172.387 160.988 172.387C151.511 171.769 142.051 173.832 133.691 178.339C130.939 179.819 128.632 182.007 127.008 184.677C125.384 187.347 124.503 190.402 124.455 193.527C124.443 196.561 125.246 199.543 126.78 202.161C128.315 204.778 130.524 206.936 133.178 208.407C141.517 213.201 150.554 216.664 159.962 218.669C186.828 224.695 213.234 232.617 238.98 242.374C251.355 247.539 261.842 256.384 269.02 267.71C276.198 279.037 279.718 292.296 279.105 305.692C279.637 317.249 277.443 328.769 272.701 339.323C267.959 349.876 260.802 359.166 251.808 366.443C233.61 381.221 205.663 388.609 167.967 388.609C128.868 388.609 98.4922 380.707 77.147 364.904C66.8648 357.625 58.4853 347.979 52.7161 336.78C46.9469 325.581 43.9575 313.158 44.0005 300.561H120.145C120.038 305.434 121.133 310.26 123.335 314.609C125.536 318.959 128.776 322.698 132.768 325.497C143.349 332.491 155.924 335.841 168.582 335.041C193.93 335.041 206.655 327.139 206.655 311.438C206.803 308.621 206.185 305.816 204.866 303.322C203.547 300.828 201.576 298.739 199.163 297.277C191.071 292.736 182.307 289.515 173.2 287.733C147.686 282.259 122.716 274.497 98.5948 264.541C68.3216 249.558 53.2363 226.981 53.2363 197.119C52.9294 186.602 55.1339 176.164 59.667 166.669C64.2 157.175 70.9311 148.898 79.3021 142.524C96.5424 128.876 124.353 122 162.425 122C198.753 122 225.742 128.876 243.188 142.524C252.231 150.234 259.493 159.814 264.472 170.604C269.45 181.395 272.027 193.137 272.024 205.02V205.328Z" fill="#F05323"/><path d="M467.626 337.492H301.539V389H467.626V337.492Z" fill="#F05323"/></svg>';

    if (function_exists('acf_register_block_type')) {
        // Wrapper block
        acf_register_block_type(array(
            'name'              => 'wrapper',
            'title'             => __('Wrapper', 'solbeg'),
            'description'       => __('Wrapper block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/wrapper.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'supports'          => array(
                'jsx' => true
            ),
            'keywords'          => array('solbeg', 'wrapper'),
        ));

        // Block block
        acf_register_block_type(array(
            'name'              => 'block',
            'title'             => __('Block', 'solbeg'),
            'description'       => __('Block block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/block.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'supports'          => array(
                'anchor' => true,
                'jsx' => true
            ),
            'keywords'          => array('solbeg', 'block'),
        ));

        // Intro block
        acf_register_block_type(array(
            'name'              => 'intro',
            'title'             => __('Intro', 'solbeg'),
            'description'       => __('Intro block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/intro.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'supports'          => array(
                'jsx' => true
            ),
            'keywords'          => array('solbeg', 'intro'),
        ));

        // Header Intro block
        acf_register_block_type(array(
            'name'              => 'header',
            'title'             => __('Header', 'solbeg'),
            'description'       => __('Header block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/header.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'supports'          => array(
                'jsx' => true
            ),
            'keywords'          => array('solbeg', 'header'),
        ));

        // Button block
        acf_register_block_type(array(
            'name'              => 'button',
            'title'             => __('Button', 'solbeg'),
            'description'       => __('Button block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/button.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'keywords'          => array('solbeg', 'button'),
        ));

        // Video block
        acf_register_block_type(array(
            'name'              => 'video',
            'title'             => __('Video', 'solbeg'),
            'description'       => __('Video block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/video.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'supports'          => array(
                'jsx' => true
            ),
            'keywords'          => array('solbeg', 'video'),
        ));

        // Divider block
        acf_register_block_type(array(
            'name'              => 'divider',
            'title'             => __('Divider', 'solbeg'),
            'description'       => __('Divider block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/divider.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'keywords'          => array('solbeg', 'divider'),
        ));

        // Services block
        acf_register_block_type(array(
            'name'              => 'services',
            'title'             => __('Services', 'solbeg'),
            'description'       => __('Services block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/services.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'keywords'          => array('solbeg', 'services'),
        ));

        // Collage block
        acf_register_block_type(array(
            'name'              => 'collage',
            'title'             => __('Collage', 'solbeg'),
            'description'       => __('Collage block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/collage.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'keywords'          => array('solbeg', 'collage'),
        ));

        // Digits block
        acf_register_block_type(array(
            'name'              => 'digits',
            'title'             => __('Digits', 'solbeg'),
            'description'       => __('Digits block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/digits.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'keywords'          => array('solbeg', 'digits'),
        ));

        // Slider block
        acf_register_block_type(array(
            'name'              => 'projects',
            'title'             => __('Projects', 'solbeg'),
            'description'       => __('Projects block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/projects.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'keywords'          => array('solbeg', 'projects'),
        ));

        // Marquee block
        acf_register_block_type(array(
            'name'              => 'marquee',
            'title'             => __('Marquee', 'solbeg'),
            'description'       => __('Marquee block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/marquee.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'keywords'          => array('solbeg', 'marquee'),
        ));

        // Industries block
        acf_register_block_type(array(
            'name'              => 'industries',
            'title'             => __('Industries', 'solbeg'),
            'description'       => __('Industries block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/industries.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'keywords'          => array('solbeg', 'industries'),
        ));

        // Services block
        acf_register_block_type(array(
            'name'              => 'services',
            'title'             => __('Services', 'solbeg'),
            'description'       => __('Services block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/services.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'keywords'          => array('solbeg', 'services'),
        ));

        // Testimonials block
        acf_register_block_type(array(
            'name'              => 'testimonials',
            'title'             => __('Testimonials', 'solbeg'),
            'description'       => __('Testimonials block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/testimonials.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'keywords'          => array('solbeg', 'testimonials'),
            'mode' => 'edit'
        ));

        // Balls =) block
        acf_register_block_type(array(
            'name'              => 'projects_balls',
            'title'             => __('Services Balls', 'solbeg'),
            'description'       => __('Services Balls block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/balls.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'keywords'          => array('solbeg', 'balls', 'services balls', 'services'),
            'mode' => 'edit'
        ));

        // Steps block
        acf_register_block_type(array(
            'name'              => 'steps',
            'title'             => __('Steps', 'solbeg'),
            'description'       => __('Steps block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/steps.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'keywords'          => array('solbeg', 'steps'),
            'mode' => 'edit'
        ));

        // Video Modal block
        acf_register_block_type(array(
            'name'              => 'video_modal',
            'title'             => __('Video Modal', 'solbeg'),
            'description'       => __('Video Modal block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/video-modal.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'keywords'          => array('solbeg', 'video', 'modal', 'video modal'),
        ));

        // History block
        acf_register_block_type(array(
            'name'              => 'history',
            'title'             => __('History', 'solbeg'),
            'description'       => __('History block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/history.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'keywords'          => array('solbeg', 'history'),
            'mode'              => 'edit'
        ));

        // Employees block
        acf_register_block_type(array(
            'name'              => 'employees',
            'title'             => __('Employees', 'solbeg'),
            'description'       => __('Employees block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/employees.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'keywords'          => array('solbeg', 'employees'),
            'mode'              => 'edit'
        ));

        // SLider block
        acf_register_block_type(array(
            'name'              => 'slider',
            'title'             => __('Slider', 'solbeg'),
            'description'       => __('Slider block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/slider.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'keywords'          => array('solbeg', 'slider', 'post slider')
        ));

        // Offices block
        acf_register_block_type(array(
            'name'              => 'offices',
            'title'             => __('Offices', 'solbeg'),
            'description'       => __('Offices block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/offices.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'keywords'          => array('solbeg', 'offices')
        ));

        // Approaches block
        acf_register_block_type(array(
            'name'              => 'approaches',
            'title'             => __('Approaches', 'solbeg'),
            'description'       => __('Approaches block', 'solbeg'),
            'render_template'   => 'template-parts/blocks/approaches.php',
            'category'          => 'solbeg',
            'icon'              => $icon,
            'keywords'          => array('solbeg', 'approaches')
        ));

    }

}
