<?php

/* Template Name: Front page example */

if (!defined('ABSPATH')) exit; 

get_header();

?>
    <main class="main">

        <!-- Gutenberg block intro -->
        <div class="block intro">
            <div class="container">
                <header class="short">

                    <?php

                        // Blocks example
                        $blocks = '
                        
                            <!-- wp:heading {"level":1, "className":"visuallyhidden"} -->
                            <h1 class="visuallyhidden">Here is where your success begins</h1>
                            <!-- /wp:heading -->


                            <!-- wp:paragraph {"className":"signature m-0 mb-40 animate d-block d-lg-none"} -->
                            <p class="signature m-0 mb-40 animate d-block d-lg-none">We make digital products for millions of users around the world.</p>
                            <!-- /wp:paragraph -->


                            <!-- wp:acf/wrapper {"name":"acf/wrapper","className":"intro-header h1"} -->

                                <!-- wp:acf/wrapper {"name":"acf/wrapper","className":"intro-header-start d-none d-lg-block"} -->
                                    <!-- wp:paragraph {"className":"signature animate"} -->
                                    <p class="signature animate">We make digital <br>products <br>for millions of users<br>around the world.</p>
                                    <!-- /wp:paragraph -->
                                <!-- /wp:acf/wrapper -->


                                <!-- wp:acf/wrapper {"name":"acf/wrapper","className":"d-block d-lg-none"} -->

                                    <!-- wp:paragraph {"className":"h1 text-indent-3 text-indent-sm-5 text-indent-md-6 animate"} -->
                                    <p class="h1 text-indent-3 text-indent-sm-5 text-indent-md-6 animate">Here is where</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:paragraph {"className":"h1 animate"} -->
                                    <p class="h1 animate">your success</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:paragraph {"className":"h1 animate"} -->
                                    <p class="h1 animate">begins</p>
                                    <!-- /wp:paragraph -->

                                <!-- /wp:acf/wrapper -->


                                <!-- wp:acf/wrapper {"name":"acf/wrapper","className":"d-none d-lg-block"} -->

                                    <!-- wp:paragraph {"className":"h1 text-indent-lg-9 text-indent-xl-8 animate"} -->
                                    <p class="h1 text-indent-lg-9 text-indent-xl-8 animate">Here is where your</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:paragraph {"className":"h1 animate"} -->
                                    <p class="h1 animate">success begins</p>
                                    <!-- /wp:paragraph -->

                                <!-- /wp:acf/wrapper -->


                                <!-- wp:acf/wrapper {"name":"acf/wrapper","className":"intro-header-bottom d-none d-md-block"} -->
                                    <!-- wp:acf/wrapper {"name":"acf/wrapper","className":"animate"} -->
                                        <!-- wp:acf/button {"id":"block_62735818e560c","name":"acf/button","data":{"field_6273579108a0e":"#","field_6273579b08a0f":"Get Started"},"align":"","mode":"preview"} /-->
                                    <!-- /wp:acf/wrapper -->
                                <!-- /wp:acf/wrapper -->
                            
                            <!-- /wp:acf/wrapper -->


                            <!-- wp:acf/wrapper {"name":"acf/wrapper","className":"animate mt-50 mt-sm-0 d-block d-sm-flex justify-content-end d-md-none"} -->
                                <!-- wp:acf/button {"id":"block_62735818e560c","name":"acf/button","data":{"field_6273579108a0e":"#","field_6273579b08a0f":"Get Started"},"align":"","mode":"preview"} /-->
                            <!-- /wp:acf/wrapper -->

                        ';

                        echo do_blocks($blocks);

                    ?>


                    <?php

                    /*

                    <!-- HTML CODE -->

                    <!-- SEO h1, hidden on page -->
                    <h1 class="visuallyhidden">Here is where your success begins</h1>
                    <!-- // SEO h1, hidden on page -->
                    
                    <p class="signature m-0 mb-40 animate d-block d-lg-none">
                        We make digital products for millions of users around the world.
                    </p>
                    
                    <div class="intro-header h1">
                        <div class="intro-header-start d-none d-lg-block">
                            <p class="signature animate">We make digital<br>products<br>for millions of users<br>around the world.</p>
                        </div>

                        <!-- Between md and lg -->
                        <div class="d-block d-lg-none">
                            <p class="h1 text-indent-3 text-indent-sm-5 text-indent-md-6 animate">Here is where</p>
                            <p class="h1 animate">your success</p>
                            <p class="h1 animate">begins</p>
                        </div>
                        <!-- // Between md and lg -->

                        <!-- Between lg and more -->
                        <div class="d-none d-lg-block">
                            <p class="h1 text-indent-lg-9 text-indent-xl-8 animate">Here is where your</p>
                            <p class="h1 animate">success begins</p>
                        </div>
                        <!-- // Between lg and more -->
                        
                        <div class="intro-header-bottom d-none d-md-block">
                            <div class="animate">
                                <a href="#" class="btn">Get started</a>
                            </div>
                        </div>
                    </div>

                    <div class="animate mt-50 mt-sm-0 d-block d-sm-flex justify-content-end d-md-none">
                        <a href="#" class="btn">Get started</a>
                    </div>

                    <!-- // HTML CODE -->

                    */
                    ?>
                    
                </header>

                <!-- Gutenberg block video -->
                <div class="video animate mt-60 mt-md-90 mt-lg-120 mt-xl-160">
                    <button class="video-play" type="button">
                        <div>
                            <figure>
                                <img src="https://picsum.photos/1920/1080" alt="Preview">
                            </figure>
                        </div>
                        <span>
                            <i></i>
                        </span>
                    </button>
                    <video class="d-block" muted loop>
                        <source src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/video/video.mp4">
                    </video>
                </div>
                <!-- // Gutenberg block video -->
            </div>
        </div>
        <!-- // Gutenberg block intro -->

        <!-- Gutenberg block divider -->
        <div class="container">
            <hr>
        </div>
        <!-- // Gutenberg block divider -->

        <section class="block">
            <div class="container">
                <header class="block-header d-flex justify-content-between">
                    <h2 class="signature m-0">Services</h2>
                    <a href="#" class="signature">
                        <span>All services</span>
                        <svg>
                            <use xlink:href="#arrow-short"></use>
                        </svg>
                    </a>
                </header>
                <div class="row g-0">
                    <div class="animate col-12 mb-40 col-md-40 mb-md-0 col-lg-auto col-lg-4">
                        <p class="text-indent-8">We are value-driven, result-oriented,
                            and always ready to go the extra mile to ensure that our customers leverage
                            the advances of technology for business success.</p>
                    </div>
                    <div class="animate col-12 col-md-40 col-margin-md-20 col-lg-6 col-margin-lg-auto offset-lg-2">
                        <ul class="services h3">
                            <li><a href="#">Mobile</a></li>
                            <li><a href="#">Software<br>Development</a></li>
                            <li><a href="#">Maintenance<br>& Support</a></li>
                            <li><a href="#">Testing & QA</a></li>
                        </ul>
                    </div>
                </div>
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
                    <h2 class="signature m-0">Why us?</h2>
                </header>
                <div class="row g-0">
                    <div class="animate col-12 mb-40 col-lg-4 mb-lg-0">

                        <div class="row g-0">
                            <div class="col-12 col-md-40 col-lg-12 col-lg-auto">
                                <h3 class="m-0 mb-28 md-lg-40 text-indent-md-4 text-indent-lg-auto text-indent-xl-10">Exceptionally<br>satisfied customers</h3>
                            </div>
                            <div class="col-12 col-md-40 col-margin-md-20 col-lg-12 col-lg-auto col-margin-lg-0">
                                <p>Our leading clients have entrusted us with the development of business-critical software for an average of more than 13 years. Our clients often refer to us as the best external development partner.</p>
                            </div>
                        </div>

                    </div>
                    <div class="animate col-12 col-md-80 col-lg-6 col-lg-auto offset-lg-2">
                        <!-- Gutenberg block collage -->
                        <div class="collage collage-type-1">
                            <svg viewBox="0 0 900 645">
                                <path d="M277 643L791.983 111L793.42 112.391L278.437 644.391L277 643Z"/>
                            </svg>
                            <figure>
                                <img src="https://picsum.photos/1200/1120" alt="Image">
                            </figure>
                            <figure>
                                <img src="https://picsum.photos/960/740" alt="Image">
                            </figure>
                            <span>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partner.png" alt="Gold Microsoft Partner">
                            </span>
                        </div>
                        <!-- // Gutenberg block collage -->
                    </div>
                </div>
            </div>
        </section>

        <!-- Gutenberg block divider -->
        <div class="container">
            <hr>
        </div>
        <!-- // Gutenberg block divider -->

        <div class="block">
            <div class="container">
                <!-- Gutenberg block digits -->
                <div class="digits">
                    <div class="digits-grid digits-grid__top"></div>
                    <div class="swiper overflow-visible overflow-md-hidden">
                        <div class="swiper-wrapper justify-content-between flex-md-wrap">
                            <div class="swiper-slide">
                                <div class="animate">
                                    <div class="h2 red">
                                        100<small>M+</small>
                                    </div>
                                    <p class="signature">End users<br>of our products</p>
                                </div>
                            </div>
                            <div class="animate swiper-slide">
                                <div class="animate">
                                    <div class="h2 red">
                                        8
                                    </div>
                                    <p class="signature">Offices<br>worldwide</p>
                                </div>
                            </div>
                            <div class="animate swiper-slide">
                                <div class="animate">
                                    <div class="h2 red">
                                        30<small>+</small>
                                    </div>
                                    <p class="signature">Years<br>of experience</p>
                                </div>
                            </div>
                            <div class="animate swiper-slide">
                                <div class="animate">
                                    <div class="h2 red">
                                        61
                                    </div>
                                    <p class="signature">Our NPS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="digits-grid digits-grid__bottom"></div>
                </div>
                <!-- // Gutenberg block digits -->
            </div>
        </div>

        <!-- Gutenberg block divider -->
        <div class="container">
            <hr>
        </div>
        <!-- // Gutenberg block divider -->

        <section class="block pb-0">
            <div class="container">
                <header class="block-header d-flex justify-content-between">
                    <h2 class="signature m-0">Projects</h2>
                    <a href="#" class="signature">
                        <span>All projects</span>
                        <svg>
                            <use xlink:href="#arrow-short"></use>
                        </svg>
                    </a>
                </header>
                <h3 class="animate m-0 mb-40 mb-lg-60 text-center">
                    Extensive experience in developing<br>projects of varying complexity
                </h3>
                <div class="row g-0 align-items-center">
                    <div class="animate col-12 mb-40 col-md-40 mb-md-0 col-lg-4">
                        <!-- Gutenberg block collage -->
                        <div class="collage collage-type-2">
                            <svg viewBox="0 0 464 372">
                                <path d="M164 154L18 46.9999L19.1823 45.3867L165.182 152.387L164 154Z"/>
                                <path d="M403 310L337 274L337.958 272.244L403.958 308.244L403 310Z"/>
                                <path d="M11 353L415.991 27.0742L417.245 28.6323L12.2539 354.558L11 353Z"/>
                            </svg>
                            <figure>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/java.svg" alt="Java">
                            </figure>
                            <figure>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/php.svg" alt="Java">
                            </figure>
                            <figure>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/dotnet.svg" alt=".Net">
                            </figure>
                        </div>
                        <!-- // Gutenberg block collage -->
                    </div>
                    <div class="d-none d-lg-block col-lg-2"></div>
                    <div class="animate col-12 col-md-40 col-margin-md-20 col-lg-4 col-margin-lg-0">
                        <p class="text-m">A team made up of experienced consumer investors and consumer tech professionals with complementary skill sets and a track record in investing and scaling USD 1Bn+ brands; we have built, operated, invested in, and advised over 100 consumer brands in the target categories and across all continents, including:</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="block">
            <div class="container">                
                <!-- Gutenberg block slider -->
                <div class="slider slider-projects h4">
                    <div class="swiper overflow-visible">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="animate">
                                    <a href="#">
                                        <figure>
                                            <img src="https://picsum.photos/1024/768/?1" alt="Leading Film Equipment Producer">
                                        </figure>
                                        <span>Leading Film Equipment Producer</span>
                                    </a>
                                </div>
                            </div>
                            <div class="animate swiper-slide">
                                <div class="animate">
                                    <a href="#">
                                        <figure>
                                            <img src="https://picsum.photos/1024/768/?2" alt="DocEx – Secure Document Distribution">
                                        </figure>
                                        <span>DocEx – Secure Document Distribution</span>
                                    </a>
                                </div>
                            </div>
                            <div class="animate swiper-slide">
                                <div class="animate">
                                    <a href="#">
                                        <figure>
                                            <img src="https://picsum.photos/1024/768/?3" alt="Service Channel – Facility Management Platform">
                                        </figure>
                                        <span>Service Channel – Facility Management Platform</span>
                                    </a>
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
                </div>
                <!-- // Gutenberg block slider -->
            </div>
        </div>

        <!-- Gutenberg block divider -->
        <div class="container">
            <hr>
        </div>
        <!-- // Gutenberg block divider -->

        <section class="block overflow-hidden">
            <div class="container">
                <header class="block-header d-flex justify-content-between">
                    <h2 class="signature m-0">Customers</h2>
                </header>
            </div>
            <!-- Gutenberg block marquee -->
            <div class="marquee py-md-30 py-lg-40" data-speed="<?php echo $animation ?? 3000; ?>">
                <div class="swiper">
                    <div class="swiper-wrapper align-items-center">
                        <?php
                            $logos = [
                                '/assets/images/partners/servicechannel.svg',
                                '/assets/images/partners/kuhne-nagel.svg',
                                '/assets/images/partners/nasdaq.svg',
                                '/assets/images/partners/skedge.svg',
                                '/assets/images/partners/kaltura.svg',
                                '/assets/images/partners/telia.svg',
                                '/assets/images/partners/audatex.svg',
                                '/assets/images/partners/dnb.svg',
                                '/assets/images/partners/imax.svg',
                                '/assets/images/partners/oracle.svg',
                                '/assets/images/partners/google.svg',
                                '/assets/images/partners/ikea.svg'
                            ];
                            foreach ($logos as $logo) :
                        ?>
                        <div class="swiper-slide">
                            <figure>
                                <?php echo file_get_contents(__DIR__ . $logo); ?>
                            </figure>
                        </div>
                        <?php
                            endforeach;
                        ?>
                    </div>
                </div>
            </div>
            <!-- // Gutenberg block marquee -->
        </section>

        <!-- Gutenberg block divider -->
        <div class="container">
            <hr>
        </div>
        <!-- // Gutenberg block divider -->

        <section class="block">
            <div class="container">
                <header class="block-header d-flex justify-content-between">
                    <h2 class="signature m-0">Industries</h2>
                    <a href="#" class="signature">
                        <span>All Industries</span>
                        <svg>
                            <use xlink:href="#arrow-short"></use>
                        </svg>
                    </a>
                </header>
                <div class="row g-0">
                    <div class="col-12 m-auto mb-40 col-lg-70 col-xl-60 text-l">
                        <p class="animate text-indent-8">We are value-driven, result-oriented, and always ready to go the extra mile to ensure that our customers leverage the advances of technology for business success.</p>
                    </div>
                </div>

                <!-- Gutenberg block slider -->
                <div class="slider slider-industries h4 pt-40 pt-md-60 pt-lg-120 pt-xl-160">
                    <div class="swiper overflow-visible">
                        <div class="swiper-wrapper">
                            <?php
                                $industries = [
                                    'Gas & Oil' => '/assets/images/industries/gas_oil.svg',
                                    'Finance & Banking' => '/assets/images/industries/finance_banking.svg',
                                    'Government' => '/assets/images/industries/government.svg',
                                    'Retail' => '/assets/images/industries/retail.svg',
                                    'Sport' => '/assets/images/industries/sport.svg',
                                    'Education' => '/assets/images/industries/education.svg',
                                    'Entertainment' => '/assets/images/industries/entertainment.svg',
                                    'Transnational Corporations' => '/assets/images/industries/transnational_corporations.svg',
                                    'Legal Services' => '/assets/images/industries/legal_services.svg',
                                    'Logistics & Transportation' => '/assets/images/industries/logistics_transportation.svg',
                                    'Manufacturing' => '/assets/images/industries/manufacturing.svg',
                                    'Rent Services' => '/assets/images/industries/rent_services.svg',
                                    'Health Care' => '/assets/images/industries/health_care.svg',
                                    'Restaurants' => '/assets/images/industries/restaurants.svg',
                                    'Insurance' => '/assets/images/industries/insurance.svg',
                                ];
                                foreach ($industries as $name => $logo) :
                            ?>
                            <div class="swiper-slide">
                                <div class="animate industries-item">
                                    <a href="#">
                                        <figure>
                                            <?php echo file_get_contents(__DIR__ . $logo); ?>
                                        </figure>
                                        <hr>
                                        <span><?php echo $name; ?></span>
                                    </a>
                                </div>
                            </div>
                            <?php
                                endforeach;
                            ?>
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
                </div>
                <!-- // Gutenberg block slider -->
            </div>
        </section>
            
    </main>

<?php

get_footer();