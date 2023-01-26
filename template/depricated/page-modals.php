<?php

if (!defined('ABSPATH')) exit; 

get_header();

?>
    <main class="main">

        <!-- Gutenberg block intro -->
        <section class="block intro">
            <div class="container">
                <header>
                    <h1 class="animate">Modals</h1>
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
                <div class="d-flex flex-wrap">
                    <a href="/modal/success/" class="btn me-40 mb-20" rel="modal:open">Success&nbsp;modal</a>
                    <a href="/modal/fail/" class="btn me-40 mb-20" rel="modal:open">Fail modal</a>
                    <a href="/modal/contact-form/" class="btn me-40 mb-20" rel="modal:open">Test modal</a>
                </div>
            </div>
        </section>
            
    </main>

<?php

get_footer(null, $footer_for_single_posts ?? ['text' => 'Contact us']);
