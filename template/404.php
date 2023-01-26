<?php

if (!defined('ABSPATH')) exit;

get_header();
?>

    <main class="main d-flex">

        <section class="block d-flex flex-fill align-items-center">
            <div class="container">
                <div class="text-center">
                    <h3 class="m-0">Sorry, we couldn’t find<br>what  you’re looking for.</h3>
                    <div class="d-flex justify-content-center mt-40 mt-lg-60">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn sm">Go&nbsp;to&nbsp;Main&nbsp;page</a>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php

get_footer(null, ['text' => 'Contact us']);

