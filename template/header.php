<?php if (!defined('ABSPATH')) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="<?php echo $_COOKIE['theme'] === 'dark' ? 'dark' : 'light'; ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://solbegresource.solbeg.com/fileshare/coolveticabk/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <?php get_template_part('template-parts/sprite'); ?>

    <input id="menu-toggle" class="d-none" type="checkbox" />
    <header class="header d-flex align-items-center">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo" rel="home">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.svg" alt="<?php echo esc_attr(bloginfo('name')); ?>">
                </a>
                <div class="d-flex align-items-center">
                    <div class="header-menu d-flex">
                        <div class="header-menu-wrapper m-auto d-flex flex-column justify-content-between align-items-center">

                            <?php wp_nav_menu( [
                                'theme_location'  => 'header',
                                'container'       => 'nav',
                            ] );?>
                            <div class="header-switcher d-block d-sm-none">
                                <label>
                                    <input type="checkbox" <?php echo $_COOKIE['theme'] === 'dark' ? 'checked' : ''; ?> onChange="toggleTheme(this.checked ? 'dark' : 'light')">
                                    <i></i>
                                    <svg width="20" height="20">
                                        <use xlink:href="#theme-dark"></use>
                                    </svg>
                                    <svg width="20" height="20">
                                        <use xlink:href="#theme-light"></use>
                                    </svg>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="header-switcher d-none d-sm-block">
                        <label>
                            <input type="checkbox" <?php echo $_COOKIE['theme'] === 'dark' ? 'checked' : ''; ?> onChange="toggleTheme(this.checked ? 'dark' : 'light')">
                            <i></i>
                            <svg width="20" height="20">
                                <use xlink:href="#theme-dark"></use>
                            </svg>
                            <svg width="20" height="20">
                                <use xlink:href="#theme-light"></use>
                            </svg>
                        </label>
                    </div>
                    <label class="header-burger d-block d-lg-none" for="menu-toggle">
                        <span></span>
                        <span></span>
                    </label>
                </div>
            </div>
        </div>
    </header>
    <div class="header-tint"></div>
