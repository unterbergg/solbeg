<?php

if (!defined('ABSPATH')) exit; 

get_header();

$technology = [
    'Android'       => '/assets/images/technology/android.svg',
    'AWS'           => '/assets/images/technology/aws.svg',
    'Azure'         => '/assets/images/technology/azure.svg',
    'C++'           => '/assets/images/technology/cpp.svg',
    'Docker'        => '/assets/images/technology/docker.svg', // Need check
    '.Net'          => '/assets/images/technology/dotnet.svg',
    'Git'           => '/assets/images/technology/git.svg',
    'iOS'           => '/assets/images/technology/ios.svg',
    'Java'          => '/assets/images/technology/java.svg',
    'Jenkins'       => '/assets/images/technology/jenkins.svg', // Need check
    'PHP'           => '/assets/images/technology/php.svg',
    'Python'        => '/assets/images/technology/python.svg',
    'Sharepoint'    => '/assets/images/technology/sharepoint.png', // Here png
    'Tableau'       => '/assets/images/technology/tableau.svg',
    'Zendesk'       => '/assets/images/technology/zendesk.svg'
];

function __get_image($id = "Android") {
    global $technology;
    $mime = wp_get_image_mime(__DIR__ . $technology[$id]);
    if ($mime === 'image/png') {
        echo '<img src="' . get_template_directory_uri() . $technology[$id] . '">';
    } else {
        echo file_get_contents(__DIR__ . $technology[$id]);
    }
}

?>
    <main class="main">

        <!-- Gutenberg block intro -->
        <section class="block intro">
            <div class="container">
                <header>
                    <h1 class="h2 animate">Mobile</h1>
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
                <div class="row g-0 align-items-center">
                    <div class="col-6 col-md-3">
                        <h2 class="signature m-0 animate">Techlology:</h2>
                        <p class="signature animate">Flutter<br>React Native<br>Swift</p>
                    </div>
                    <div class="col-5 offset-1 col-md-2">
                        <div class="animate">
                            <div class="h2 red">
                                25+
                            </div>
                            <p class="signature">Сompleted<br>projects</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-1">

                        <!-- Gutenberg block balls :) -->
                        <div class="balls animate mx-auto mx-md-0 mt-40 mt-sm-60 mt-md-0">
                            <div class="swiper overflow-visible">
                                <div class="swiper-wrapper">
                                    <?php foreach (['iOS', 'Android'] as $image) : ?>
                                    <div class="swiper-slide">
                                        <div class="balls-ball">
                                            <?php __get_image($image); ?>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <!-- // Gutenberg block balls :) -->

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
                <div class="row g-0 align-items-center">
                    <div class="col-6 col-md-3">
                        <h2 class="signature m-0 animate">Techlology:</h2>
                        <p class="signature animate">.NET<br>JAVA<br>Python<br>PHP<br>C/C++</p>
                    </div>
                    <div class="col-5 offset-1 col-md-2">
                        <div class="animate">
                            <div class="h2 red">
                                95+
                            </div>
                            <p class="signature">Сompleted<br>projects</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-1">

                        <!-- Gutenberg block balls :) -->
                        <div class="balls animate mx-auto mx-md-0 mt-40 mt-sm-60 mt-md-0">
                            <div class="swiper overflow-visible">
                                <div class="swiper-wrapper">
                                    <?php foreach (['.Net', 'Java', 'Python', 'PHP', 'C++'] as $image) : ?>
                                    <div class="swiper-slide">
                                        <div class="balls-ball">
                                            <?php __get_image($image); ?>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <!-- // Gutenberg block balls :) -->

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
                <div class="row g-0 align-items-center">
                    <div class="col-6 col-md-3">
                        <h2 class="signature m-0 animate">expertise:</h2>
                        <p class="signature animate">Test Automation<br>Mobile Testing</p>
                    </div>
                    <div class="col-5 offset-1 col-md-2">
                        <div class="animate">
                            <div class="h2 red">
                                85+
                            </div>
                            <p class="signature">Сompleted<br>projects</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-1">

                    <!-- Gutenberg block balls :) -->
                    <div class="balls animate mx-auto mx-md-0 mt-40 mt-sm-60 mt-md-0">
                        <div class="swiper overflow-visible">
                            <div class="swiper-wrapper">
                                <?php foreach (['Zendesk'] as $image) : ?>
                                <div class="swiper-slide">
                                    <div class="balls-ball">
                                            <?php __get_image($image); ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <!-- // Gutenberg block balls :) -->

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
                <div class="row g-0 align-items-center">
                    <div class="col-6 col-md-3">
                        <h2 class="signature m-0 animate">expertise:</h2>
                        <p class="signature animate">SaaS<br>DevOps<br>Sharepoint</p>
                    </div>
                    <div class="col-5 offset-1 col-md-2">
                        <div class="animate">
                            <div class="h2 red">
                                60+
                            </div>
                            <p class="signature">Сompleted<br>projects</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-1">

                    <!-- Gutenberg block balls :) -->
                    <div class="balls animate mx-auto mx-md-0 mt-40 mt-sm-60 mt-md-0">
                        <div class="swiper overflow-visible">
                            <div class="swiper-wrapper">
                                <?php foreach (['Git', 'Jenkins', 'Azure', 'AWS', 'Docker', 'Sharepoint'] as $image) : ?>
                                <div class="swiper-slide">
                                    <div class="balls-ball">
                                            <?php __get_image($image); ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <!-- // Gutenberg block balls :) -->

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
                <div class="row g-0 align-items-center">
                    <div class="col-6 col-md-3">
                        <h2 class="signature m-0 animate">expertise:</h2>
                        <p class="signature animate">SaaS<br>DevOps<br>Sharepoint</p>
                    </div>
                    <div class="col-5 offset-1 col-md-2">
                        <div class="animate">
                            <div class="h2 red">
                                100+
                            </div>
                            <p class="signature">Сompleted<br>projects</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 offset-md-1">

                    <!-- Gutenberg block balls :) -->
                    <div class="balls animate mx-auto mx-md-0 mt-40 mt-sm-60 mt-md-0">
                        <div class="swiper overflow-visible">
                            <div class="swiper-wrapper">
                                <?php foreach (['Zendesk', 'Tableau'] as $image) : ?>
                                <div class="swiper-slide">
                                    <div class="balls-ball">
                                            <?php __get_image($image); ?>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <!-- // Gutenberg block balls :) -->

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
                    <h2 class="signature m-0">Steps</h2>
                </header>
                
                <!-- Gutenberg block steps -->
                <div class="steps">
                    <div class="swiper overflow-visible overflow-lg-hidden">
                        <div class="steps-wrapper swiper-wrapper d-lg-grid">
                            <div class="steps-step swiper-slide">
                                <div class="animate">
                                    <div class="steps-step__num h3 red"></div>
                                    <h4>Analysis</h4>
                                    <p class="text-m">We are value-driven, result-oriented, and always ready to go the extra mile to ensure that our customers</p>
                                </div>
                            </div>
                            <div class="steps-step swiper-slide">
                                <div class="animate">
                                    <div class="steps-step__num h3 red"></div>
                                    <h4>UI/UX</h4>
                                    <p class="text-m">We are value-driven, result-oriented, and always ready to go the extra mile to ensure that our customers</p>
                                </div>
                            </div>
                            <div class="steps-step swiper-slide">
                                <div class="animate">
                                    <div class="steps-step__num h3 red"></div>
                                    <h4>Development</h4>
                                    <p class="text-m">We are value-driven, result-oriented, and always ready to go the extra mile to ensure that our customers</p>
                                </div>
                            </div>
                            <div class="steps-step swiper-slide">
                                <div class="animate">
                                    <div class="steps-step__num h3 red"></div>
                                    <h4>Testing</h4>
                                    <p class="text-m">We are value-driven, result-oriented, and always ready to go the extra mile to ensure that our customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // Gutenberg block steps -->
            </div>
        </section>

        <!-- Gutenberg block divider -->
        <div class="container">
            <hr>
        </div>
        <!-- // Gutenberg block divider -->

        <section class="block">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 mb-40 col-md-40 mb-md-0 col-lg-50">
                        <div class="row g-0">
                            <div class="col-12 col-md-80">
                                <div class="animate">
                                    <img src="https://picsum.photos/600/460" alt="Preview">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-60 col-lg-50 content">
                        <h3 class="animate">Native Apps</h3>
                        <p class="animate">The key aims of the project were to streamline the website performance and improve user experience. It was a challenge because of the high –level graphic content, such as animations and high – resolution images.</p>
                        <h3 class="animate">Cross-platform Apps</h3>
                        <p class="animate">To resolve this issue Drupal–based website CMS was suggested and were implemented some UX features:</p>
                        <p class="animate">A dynamic homepage contents. An acceptable search extension. Detailed theatres list, that includes maps, location descriptions, time – schedule in the theatres. Possibility to follow the latest news and movie releases. The Sweepstakes Drupal module supporting user contests.</p>
                    </div>
                </div>
            </div>
        </section>

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
            
    </main>

<?php

get_footer(null, ['footer_text' => 'Estimate project']);