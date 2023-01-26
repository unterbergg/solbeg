<?php

if (!defined('ABSPATH')) exit; 

get_header();

$names = [
    'Leading Film Equipment Producer',
    'DocEx – Secure Document Distribution',
    'Service Channel – Facility Management Platform',
    'Online Appointment Scheduling System',
    'Driver Performance and Fleet Management Solution',
    'Telemedicine solution for online doctor consultations'
];

?>
    <main class="main">

        <?php get_template_part('template-parts/content', 'blocks'); ?>

        <?php /*
        <!-- Gutenberg block intro -->
        <section class="block intro">
            <div class="container">
                <header>

                    <?php
                    $block = '
                    <!-- wp:acf/intro {"id":"block_62737ed743fb8","name":"acf/intro","align":"","mode":"preview"} -->
                        <!-- wp:acf/header {"id":"block_62737ef743fb9","name":"acf/header","align":"","mode":"preview"} /-->
                        
                            <!-- wp:heading {"level":1,"className":"visuallyhidden"} -->
                            <h1 class="visuallyhidden">Real projects and real results</h1>
                            <!-- /wp:heading -->
                            
                            <!-- wp:acf/wrapper {"name":"acf/wrapper","className":"intro-header h1"} -->
                                
                                <!-- wp:acf/wrapper {"name":"acf/wrapper","className":"d-block d-md-none d-lg-block"} -->
                                
                                    <!-- wp:paragraph {"className":"h1 animate text-indent-lg-6"} -->
                                    <p class="h1 animate text-indent-lg-6">Real projects</p>
                                    <!-- /wp:paragraph -->
                            
                                    <!-- wp:paragraph {"className":"h1 animate d-inline-flex"} -->
                                    <p class="h1 animate d-inline-flex">and real results</p>
                                    <!-- /wp:paragraph -->
                                    
                                    <!-- wp:acf/wrapper {"name":"acf/wrapper","className":"d-none d-md-inline-flex align-middle"} -->
                                    
                                        <!-- wp:paragraph {"className":"signature animate ms-32"} -->
                                        <p class="signature animate ms-32">We make digital<br>products<br>for millions of users<br>around the world.</p>
                                        <!-- /wp:paragraph -->
                                        
                                    <!-- /wp:acf/wrapper -->
                                    
                                <!-- /wp:acf/wrapper -->
                                
                                <!-- wp:acf/wrapper {"name":"acf/wrapper","className":"d-none d-md-block d-lg-none"} -->
                                
                                    <!-- wp:paragraph {"className":"h1 animate"} -->
                                    <p class="h1 animate">Real projects</p>
                                    <!-- /wp:paragraph -->
                            
                                    <!-- wp:paragraph {"className":"h1 animate d-inline-flex"} -->
                                    <p class="h1 animate d-inline-flex">and real results</p>
                                    <!-- /wp:paragraph -->
                                    
                                    <!-- wp:acf/wrapper {"name":"acf/wrapper","className":"d-inline-flex align-middle"} -->
                                    
                                        <!-- wp:paragraph {"className":"signature animate ms-32"} -->
                                        <p class="signature animate ms-32">We make digital<br>products<br>for millions of users<br>around the world.</p>
                                        <!-- /wp:paragraph -->
                                        
                                    <!-- /wp:acf/wrapper -->
                                    
                                <!-- /wp:acf/wrapper -->
                                    
                            <!-- /wp:acf/wrapper -->
                            
                            <!-- wp:paragraph {"className":"signature m-0 mb-40 animate d-block d-lg-none"} -->
                                <p class="signature mt-20 animate d-block d-md-none">We make digital products for millions of users around the world.</p>
                            <!-- /wp:paragraph -->
                        
                        <!-- wp:acf/header /-->
                    <!-- /wp:acf/intro -->
                    ';
                    ?>

                    <!-- SEO h1, hidden on page -->
                    <h1 class="visuallyhidden">Real projects and real results</h1>
                    <!-- // SEO h1, hidden on page -->
                    
                    <div class="intro-header h1">

                        <!-- Md and more than lg -->
                        <div class="d-block d-md-none d-lg-block">
                            <p class="h1 animate text-indent-lg-6">Real projects</p>
                            <p  class="h1 animate d-inline-flex">and real results</p>
                            <div class="d-none d-md-inline-flex align-middle">
                                <p class="signature animate ms-32">We make digital<br>products<br>for millions of users<br>around the world.</p>
                            </div>
                        </div>
                        <!-- // Md and more than lg -->

                        <!-- Lg only -->
                        <div class="d-none d-md-block d-lg-none">
                            <p class="h1 animate">Real projects and</p>
                            <p class="h1 animate d-inline-flex">real results</p>
                            <div class="d-inline-flex align-middle">
                                <p class="signature animate ms-32">We make digital<br>products<br>for millions of users<br>around the world.</p>
                            </div>
                        </div>
                        <!-- // Lg only -->
                        
                    </div>
                    
                    <p class="signature mt-20 animate d-block d-md-none">
                        We make digital products for millions of users around the world.
                    </p>
                    
                </header>
            </div>
        </section>
        <!-- Gutenberg block intro -->

        <!-- Gutenberg block divider -->
        <div class="container">
            <hr>
        </div>
        <!-- // Gutenberg block divider -->

        <section class="block">
            <div class="container">
                <!-- Gutenberg block projects -->
                <div class="projects">
                    <div class="row g-0 justify-content-between">
                        <?php
                            foreach ($names as $i => $name) :
                                $i++;
                        ?>
                        <div class="col-100 col-md-40 col-lg-auto col-lg-<?php echo in_array($i % 4, [2, 3]) ? 6 : 4; ?>">
                            <div class="animate">
                                <div class="projects-item h3 <?php echo $i % 2 == 0 ? 'ms-auto' : ''; ?>">
                                    <a href="#">
                                        <figure>
                                            <img src="https://picsum.photos/1920/1080?<?php echo $i; ?>" alt="<?php echo $name; ?>">
                                        </figure>
                                        <span><?php echo $name; ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                            endforeach;
                        ?>
                    </div>
                </div>
                <!-- // Gutenberg block projects -->
            </div>
        </section>

        <!-- Gutenberg block divider -->
        <div class="container">
            <hr>
        </div>
        <!-- // Gutenberg block divider -->
        <section class="block">
            <div class="container">
                <header class="block-header d-flex justify-content-between">
                    <h2 class="signature m-0">Customer testimonials</h2>
                </header>

                <!-- Gutenberg block tesmonials slider -->
                <div class="slider slider-testmonials" data-effect="fade" data-autoheight="true">
                    <div class="swiper overflow-visible">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="animate">
                                    <div class="row g-0 justify-content-center">
                                        <div class="col-12 col-md-60 col-lg-auto col-lg-8">
                                            <figure>
                                                <blockquote>Solbeg delivers a comprehensive array of software development and consulting services, offering a well-balanced blend of technology skills, domain knowledge, hands-on experience, effective methodology, and passion for IT.</blockquote>
                                                <figcaption class="signature">Ronald Richards</figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="animate">
                                    <div class="row g-0 justify-content-center">
                                        <div class="col-12 col-md-60 col-lg-auto col-lg-8">
                                            <figure>
                                                <blockquote>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque id sapien id turpis scelerisque tempor id sed ipsum.</blockquote>
                                                <figcaption class="signature">Ronald Richards</figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="animate">
                                    <div class="row g-0 justify-content-center">
                                        <div class="col-12 col-md-60 col-lg-auto col-lg-8">
                                            <figure>
                                                <blockquote>Etiam maximus dapibus hendrerit. Aenean blandit turpis tortor, non tincidunt turpis rhoncus eget. Nulla vitae purus ac tellus vulputate vehicula. Donec blandit massa at magna egestas pharetra.</blockquote>
                                                <figcaption class="signature">Ronald Richards</figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-nav d-none d-lg-flex">
                            <div class="swiper-nav--prev">
                                <svg><use xlink:href="#arrow"></use></svg>
                            </div>
                            <div class="swiper-nav--next">
                                <svg><use xlink:href="#arrow"></use></svg>
                            </div>
                        </div>
                    </div>
                    <div class="slider-footer d-flex justify-content-center align-items-center">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- // Gutenberg block tesmonials slider -->
            </div>
        </section>

        */ ?>
    </main>

<?php

get_footer(null, ['footer_text' => 'Estimate project']);