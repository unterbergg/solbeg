<?php

/* Template Name: Contact us example */

if (!defined('ABSPATH')) exit; 

get_header();

?>
    <main class="main">

        <!-- Gutenberg block intro -->
        <section class="block intro">
            <div class="container">
                <header>
                    <h1 class="animate">Contact Us</h1>
                </header>
            </div>
        </section>
        <!-- Gutenberg block intro -->

        <!-- Gutenberg block divider -->
        <div class="container">
            <hr>
        </div>
        <!-- // Gutenberg block divider -->

        <section class="block overflow-hidden">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 col-lg-3">
                        <h3 class="animate m-0 mb-28 mb-md-40">Offices</h3>
                    </div>
                    <div class="col-12 col-lg-9">
                        <!-- Gutenberg block offices -->
                        <div class="offices">
                            <div class="swiper overflow-visible overflow-md-hidden">
                                <div class="swiper-wrapper justify-content-between">
                                    <div class="swiper-slide">
                                        <div class="animate offices-item">
                                            <figure>
                                                <img src="https://picsum.photos/280/196/?1" alt="Warsaw">
                                            </figure>
                                            <div class="d-flex flex-column align-items-start">
                                                <h4>Warsaw, Poland</h4>
                                                <div class="text-m d-flex flex-column">
                                                    <address>ul.Twarda, 18</address>
                                                    <a href="tel: +375291725377">+375 29 172-53-77</a>
                                                    <a href="mailto: info@solbeg.com">info@solbeg.com</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="animate offices-item">
                                            <figure>
                                                <img src="https://picsum.photos/280/196/?2" alt="Jersey City">
                                            </figure>
                                            <div class="d-flex flex-column align-items-start">
                                                <h4>Jersey City, USA</h4>
                                                <div class="text-m d-flex flex-column">
                                                    <address>1, Greene Street, #513</address>
                                                    <a href="tel: +13472208411">+1 347 220 8411</a>
                                                    <a href="mailto: info@solbeg.com">info@solbeg.com</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="animate offices-item">
                                            <figure>
                                                <img src="https://picsum.photos/280/196/?3" alt="San Diego">
                                            </figure>
                                            <div class="d-flex flex-column align-items-start">
                                                <h4>San Diego, USA</h4>
                                                <div class="text-m d-flex flex-column">
                                                    <address>6390 Greenwich Dr, 215</address>
                                                    <a href="tel: +16198700114">+1 619 870 0114</a>
                                                    <a href="mailto: info@solbeg.com">info@solbeg.com</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // Gutenberg block offices -->
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
                <div class="animate row g-0 justify-content-center pb-xl-40">
                    <div class="col-12 col-md-60 col-lg-6 col-lg-auto">
                        <h3 class="m-0 mb-60">Let’s get to work</h3>
                        <!-- CF7 form -->
                        <form>
                            <div class="form-field text-field">
                                <input type="text" id="name" required value="qwe">
                                <label for="name">Your name <i>*</i></label>
                            </div>
                            <div class="form-field text-field">
                                <span class="wpcf7-form-control-wrap">
                                    <input class="wpcf7-not-valid" type="email" id="email" required>
                                    <span class="wpcf7-not-valid-tip" aria-hidden="true">Please enter a real email address</span>
                                </span>
                                <label for="email">Your email <i>*</i></label>
                            </div>
                            <div class="form-field text-field">
                                <span class="wpcf7-form-control-wrap">
                                    <input type="email" id="email" required disabled>
                                </span>
                                <label for="email">Your email <i>*</i></label>
                            </div>
                            <div class="form-field text-field required">
                                <textarea id="message" required></textarea>
                                <label for="message">Message <i>*</i></label>
                            </div>
                            <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-lg-end">
                                <div class="form-field checkbox-field agreement text-s m-lg-0">
                                    <label>
                                        <input type="checkbox" name="agreement">
                                        <span class="wpcf7-list-item-label">I have read, understand and accept the content of the <a href="#">Privacy Policy</a> and consent to the processing of my data as part of this application</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn ms-auto ms-lg-40 ms-xl-60" disabled>Send</button>
                            </div>
                        </form>
                        <!-- // CF7 form -->
                    </div>
                </div>
            </div>
        </section>
            
    </main>

<?php

get_footer(null, ['footer_link' => false]);