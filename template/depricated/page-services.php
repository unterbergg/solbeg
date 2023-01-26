<?php

if (!defined('ABSPATH')) exit; 

get_header();
//TODO: Needs to be removed
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

        <?php get_template_part('template-parts/content', 'blocks'); ?>
            
    </main>

<?php

get_footer(null, ['footer_link' => '#', 'footer_text' => 'Estimate project']);