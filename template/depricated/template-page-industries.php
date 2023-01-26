<?php

/* Template Name: Industries example */

if (!defined('ABSPATH')) exit; 

get_header();

//TODO: Needs to be removed
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

?>
    <main class="main">

        <!-- Gutenberg block intro -->
        <section class="block intro">
            <div class="container">
                <header>
                    <h1 class="animate">
                        <?php esc_html_e(get_the_title());?>
                    </h1>
                </header>
            </div>
        </section>
        <!-- Gutenberg block intro -->

        <?php get_template_part('template-parts/content', 'blocks'); ?>

    </main>

<?php

get_footer(null, $footer_for_single_posts ?? ['text' => 'Contact us']);