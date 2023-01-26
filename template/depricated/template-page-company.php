<?php

/* Template Name: Company example */

if (!defined('ABSPATH')) exit; 

get_header();

$video_id = vsprintf('video_%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4));

?>
    <main class="main">

        <!-- Gutenberg block intro -->
        <div class="block intro">
            <div class="container">
                <header class="short">

                    <!-- SEO h1, hidden on page -->
                    <h1 class="visuallyhidden">Fast growing and successful company</h1>
                    <!-- // SEO h1, hidden on page -->
                    
                    <div class="intro-header h1 mt-60">

                        <!-- All breakpoints -->
                        <div class="d-block">
                            <p class="h1 animate text-indent-3 text-indent-sm-5 text-indent-md-6 text-indent-lg-9 text-indent-xl-8">Fast growing</p>
                            <p  class="h1 animate">and successful</p>
                            <p  class="h1 animate">company</p>
                        </div>
                        <!-- // All breakpoints -->

                    </div>

                    <div class="animate">

                        <!-- Gutenberg block video modal -->
                        <a href="#<?php echo $video_id; ?>" class="video-btn m-auto mt-40 mt-md-0" rel="modal:open">
                            <img src="https://picsum.photos/512/512" alt="Preview">
                            <span>
                                <i></i>
                                <svg>
                                    <use xlink:href="#video"></use>
                                </svg>
                            </span>
                        </a>
                        <div id="<?php echo $video_id; ?>" class="modal">
                            <a href="#" class="modal-close" rel="modal:close">
                                <svg width="32" height="32">
                                    <use xlink:href="#close"></use>
                                </svg>
                            </a>
                            <div class="container">

                                <!-- Gutenberg block video -->
                                <div class="video">
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
                        <!-- // Gutenberg block video modal -->
                        
                    </div>

                </header>
            </div>
        </div>
        <!-- // Gutenberg block intro -->

        <!-- Gutenberg block divider -->
        <div class="container">
            <hr>
        </div>
        <!-- // Gutenberg block divider -->

        <div class="block">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 m-auto col-md-60 col-lg-auto col-lg-8">
                        <p class="animate text-center">Solbeg delivers a comprehensive array of software development and consulting services, offering a well-balanced blend of technology skills, domain knowledge, hands-on experience, effective methodology, and passion for IT.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gutenberg block divider -->
        <div class="container">
            <hr>
        </div>
        <!-- // Gutenberg block divider -->

        <section class="block">
            <div class="container">
                <header class="block-header d-flex justify-content-between">
                    <h2 class="signature m-0">History</h2>
                </header>

                <!-- Gutenberg block history -->
                <div class="history">
                    <div class="history-years">
                        <div class="swiper overflow-visible">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <div class="animate">2008</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="animate">2010</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="animate">2011</div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="animate">2012</div>
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
                    <div class="history-description animate">
                        <div class="row g-0">
                            <div class="col-12 m-auto col-md-60 col-lg-auto col-lg-8">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <p>Solbeg is founded in Minsk</p>
                                        </div>
                                        <div class="swiper-slide">
                                            <p>Nulla rutrum dui feugiat neque pretium</p>
                                        </div>
                                        <div class="swiper-slide">
                                            <p>Suspendisse rutrum ligula vitae</p>
                                        </div>
                                        <div class="swiper-slide">
                                            <p>Nam id tristique massa</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // Gutenberg block history -->
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
                    <h2 class="signature m-0">Our mission and approach</h2>
                </header>

                <div class="row g-0">
                    <div class="col-12 col-lg-4 mb-60 mb-lg-0">
                        <p class="animate">Through technology and high service standards Solbeg improves the quality of people’s life, help them to achieve more and enjoy life. With Solbeg people can avoid stress, save their time and mind for family and friends, for favorite activities making them happier and for world-changing ideas.</p>
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-2">
                        <ul class="animate approach h3">
                            <li>
                                Solid <span><svg><use xlink:href="#arrow"></use></svg> partnership approach</span>
                            </li>
                            <li>
                                Open <span><svg><use xlink:href="#arrow"></use></svg> mind to new ideas</span>
                            </li>
                            <li>
                                Leading <span><svg><use xlink:href="#arrow"></use></svg> IT industry specialists</span>
                            </li>
                            <li>
                                Best <span><svg><use xlink:href="#arrow"></use></svg> practices implementation</span>
                            </li>
                            <li>
                                Effective <span><svg><use xlink:href="#arrow"></use></svg> bussiness solutions</span>
                            </li>
                            <li>
                                Global <span><svg><use xlink:href="#arrow"></use></svg> customer’s delight</span>
                            </li>
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

        <section class="block has-sticky has-sticky-lg">
            <div class="container">
                <header class="block-header d-flex justify-content-between">
                    <h2 class="signature m-0">Our team</h2>
                </header>
                <div class="row g-0">
                    <div class="col-12 col-md-7 col-lg-4 col-xl-5">
                        <h3 class="sticky animate mb-40 mb-lg-0 text-indent-4 text-indent-xl-6">Our most valuable <br>resource is our employees</h3>
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-2 offset-xl-1">

                        <!-- Gutenberg block employees -->
                        <div class="animate employees">
                            <div class="employees-wrapper overflow-lg-hidden">
                                <div class="swiper overflow-visible overflow-lg-hidden">
                                    <div class="swiper-wrapper d-lg-grid">
                                        <div class="swiper-slide">
                                            <div class="employees-item">
                                                <figure>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/employees/mironchik.png" alt="Pavel Mironchik">
                                                </figure>
                                                <p>Pavel<br>Mironchik</p>
                                                <p class="text-s">CEO</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="employees-item">
                                                <figure>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/employees/pytko.png" alt="Dmitry Pytko">
                                                </figure>
                                                <p>Dmitry<br>Pytko</p>
                                                <p class="text-s">CFO</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="employees-item">
                                                <figure>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/employees/mogulenko.png" alt="Oksana Mogulenko">
                                                </figure>
                                                <p>Oksana<br>Mogulenko</p>
                                                <p class="text-s">COO</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="employees-item">
                                                <figure>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/employees/vasilyeva.png" alt="Valeria Vasilyeva">
                                                </figure>
                                                <p>Valeria<br>Vasilyeva</p>
                                                <p class="text-s">CRO</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="employees-item">
                                                <figure>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/employees/sarakach.png" alt="Sergey Sarakach">
                                                </figure>
                                                <p>Sergey<br>Sarakach</p>
                                                <p class="text-s">CTO</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="employees-item">
                                                <figure>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/employees/burachevskaya.png" alt="Marina Burachevskaya">
                                                </figure>
                                                <p>Marina<br>Burachevskaya</p>
                                                <p class="text-s">CHRO</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="employees-item">
                                                <figure>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/employees/nikolaev.png" alt="Maxim Nikolaev">
                                                </figure>
                                                <p>Maxim<br>Nikolaev</p>
                                                <p class="text-s">CBDO</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="employees-item">
                                                <figure>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/employees/kremez.png" alt="Andrey Kremez">
                                                </figure>
                                                <p>Andrey<br>Kremez</p>
                                                <p class="text-s">Head of Design</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="employees-item">
                                                <figure>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/employees/babenkov.png" alt="Evgeniy Babenkov">
                                                </figure>
                                                <p>Evgeniy<br>Babenkov</p>
                                                <p class="text-s">Head of IT</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="employees-item">
                                                <figure>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/employees/yurkov.png" alt="Anton Yurkov">
                                                </figure>
                                                <p>Anton<br>Yurkov</p>
                                                <p class="text-s">Product Lead</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="employees-item">
                                                <figure>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/employees/kozodaev.png" alt="Evgeniy Kozodaev">
                                                </figure>
                                                <p>Evgeniy<br>Kozodaev</p>
                                                <p class="text-s">Business Unit Manager</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="employees-item">
                                                <figure>
                                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/employees/siroezhkin.png" alt="Sergey Siroezhkin">
                                                </figure>
                                                <p>Sergey<br>Siroezhkin</p>
                                                <p class="text-s">Business Unit Manager</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-lg-block employees-expand text-l">
                                <a href="#" class="employees-toggle" data-text="Hide">See all</a>
                            </div>
                        </div>
                        <!-- // Gutenberg block employees -->

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
                    <h2 class="signature m-0">Activities</h2>
                </header>
                <!-- Gutenberg block collage -->
                <div class="animate collage collage-type-3">
                    <svg class="d-block d-md-none" viewBox="0 0 288 532">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.60547 404L277.75 120.218L279.195 121.6L7.05063 405.383L5.60547 404Z"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M213.363 378.575L54.6438 129.191L56.3323 128.119L215.052 377.503L213.363 378.575Z"/>
                    </svg>
                    <svg class="d-none d-md-block" viewBox="0 0 1800 919">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M534 853L1261 94L1262.44 95.3834L535.444 854.384L534 853Z"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1089 785L665 118L666.688 116.927L1090.69 783.927L1089 785Z"/>
                    </svg>
                    <figure>
                        <img src="https://picsum.photos/1200/760?1" alt="Image">
                    </figure>
                    <figure>
                        <img src="https://picsum.photos/512/720?1" alt="Image">
                    </figure>
                    <figure>
                        <img src="https://picsum.photos/1580/988" alt="Image">
                    </figure>
                    <figure>
                        <img src="https://picsum.photos/512/720?2" alt="Image">
                    </figure>
                    <figure>
                        <img src="https://picsum.photos/1200/760?2" alt="Image">
                    </figure>
                </div>
                <!-- // Gutenberg block collage -->
            </div>
        </section>
            
    </main>

<?php

get_footer();