<?php

if (!defined('ABSPATH')) exit; 

get_header();

$services = [
    'Mobile' => 'Solbeg offers a full range of mobile application development and maintenance services for all major platforms, including iOS, Android and hybrid applications.',
    'Software<br>Development' => 'Solbeg leverages years of experience developing bespoke software solutions to deliver high-quality, reliable and cost-efficient solutions that address our customers’ business pain points with surgical accuracy.',
    'Maintenance<br>& Support' => 'Our application maintenance and support services can help your company reduce in-house IT costs by allowing our balanced team of professionals to support your business applications and user-facing services and provide long-term technical maintenance for perfect alignment with emerging requirements and challenges.',
    'Testing & QA' => 'Our application maintenance and support services can help your company reduce in-house IT costs by allowing our balanced team of professionals to support your business applications and user-facing services and provide long-term technical maintenance for perfect alignment with emerging requirements and challenges.',
    'IT Consulting' => 'If you are seeking a reliable application development consultant for an all-new project or need help conducting an audit of an existing solution, SolbegSoft will be your one-stop IT consulting shop.',
    'Application<br>security' => 'Our application maintenance and support services can help your company reduce in-house IT costs by allowing our balanced team of professionals to support your business applications and user-facing services and provide long-term technical maintenance for perfect alignment with emerging requirements and challenges.',
]

?>
    <main class="main">

        <!-- Gutenberg block intro -->
        <div class="block intro">
            <div class="container">
                <header class="short">

                    <!-- SEO h1, hidden on page -->
                    <h1 class="visuallyhidden">We provide a wide range of services</h1>
                    <!-- // SEO h1, hidden on page -->
                    
                    <p class="signature m-0 mb-40 animate d-block d-lg-none">
                        We make digital products for millions of users around the world.
                    </p>
                    
                    <div class="intro-header h1">
                        <div class="intro-header-start d-none d-lg-block">
                            <p class="signature animate">We make digital <br>products <br>for millions of users<br>around the world.</p>
                        </div>

                        <!-- Between md and lg -->
                        <div class="d-block d-lg-none">
                            <p class="h1 text-indent-7 text-indent-md-9 animate">We provide</p>
                            <p class="h1 animate">a wide range of</p>
                            <p class="h1 animate">services</p>
                        </div>
                        <!-- // Between md and lg -->

                        <!-- Between lg and more -->
                        <div class="d-none d-lg-block">
                            <p class="h1 text-indent-lg-9 text-indent-xl-8 animate">We provide a wide</p>
                            <p class="h1 animate">range of services</p>
                        </div>
                        <!-- // Between lg and more -->
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

        <?php $i = 0; foreach ($services as $service => $description) : $i -=- 1; ?>

        <section class="block short-md">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 col-md-40 col-lg-none col-lg-6 h3 pe-md-60">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="animate">
                                <a href="#"><?php echo $service; ?></a>
                            </div>
                            <svg class="d-block d-md-none" width="17" height="28">
                                <use xlink:href="#arrow-short"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="d-none d-md-block col-12 col-md-60 col-lg-none col-lg-6">
                        <p class="animate"><?php echo $description; ?></p>
                    </div>
                </div>
            </div>
        </section>
        
        <?php if ($i < count($services)) : ?>
        <!-- Gutenberg block divider -->
        <div class="container">
            <hr>
        </div>
        <!-- // Gutenberg block divider -->
        <?php endif; ?>

        <?php endforeach; ?>
            
    </main>

<?php

get_footer();