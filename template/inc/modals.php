<?php

if (!defined('ABSPATH')) exit;


// Success and failt rewrite rules
function solbeg_ajax_rewrite()
{
	add_rewrite_rule('^modal/success?', '/wp-admin/admin-ajax.php?action=modal_success', 'top');
	add_rewrite_rule('^modal/fail?', '/wp-admin/admin-ajax.php?action=modal_fail', 'top');
	add_rewrite_rule('^modal/test?', '/wp-admin/admin-ajax.php?action=modal_test', 'top');
}
add_action('init', 'solbeg_ajax_rewrite');


// Ajax functions
function solbeg_ajax_init() {
    add_action('wp_ajax_' . (is_user_logged_in() ? '' : 'nopriv_') . 'modal_success', 'solbeg_ajax_modal_success');
    add_action('wp_ajax_' . (is_user_logged_in() ? '' : 'nopriv_') . 'modal_fail', 'solbeg_ajax_modal_fail');
    add_action('wp_ajax_' . (is_user_logged_in() ? '' : 'nopriv_') . 'modal_test', 'solbeg_ajax_modal_test');
}
add_action('init', 'solbeg_ajax_init');

// Success modal
function solbeg_ajax_modal_success() {
?>
    <div class="modal">
        <a href="#" class="modal-close" rel="modal:close">
            <svg width="32" height="32">
                <use xlink:href="#close"></use>
            </svg>
        </a>
        <div class="container">
            <div class="text-center">
                <div class="modal-icon mb-40">
                    <svg viewBox="0 0 160 160" fill="none">
                        <circle cx="80" cy="80" r="80" fill="var(--accent)"/>
                        <path d="M56.4003 85.1999L74.2264 101.632L111.026 58.8324" stroke="var(--text)" stroke-width="5"/>
                    </svg>
                </div>
                <h3 class="m-0 mb-12">Thank you!</h3>
                <p class="m-0 mb-40 mb-xl-60 text-m">We will contact you shortly</p>
                <div class="d-flex">
                    <a href="#" class="btn sm mx-auto" rel="modal:close">OK</a>
                </div>
            </div>
        </div>
    </div>
<?php
    die();
}

// Fail modal
function solbeg_ajax_modal_fail() {
?>
    <div class="modal">
        <a href="#" class="modal-close" rel="modal:close">
            <svg width="32" height="32">
                <use xlink:href="#close"></use>
            </svg>
        </a>
        <div class="container">
            <div class="text-center">
                <div class="modal-icon mb-40">
                    <svg width="160" height="160" viewBox="0 0 160 160" fill="none">
                        <circle cx="80" cy="80" r="80" fill="var(--accent)"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M81 95L81 51L76 51L76 95H81ZM81 106V100H76V106H81Z" fill="var(--text)"/>
                    </svg>
                </div>
                <h3 class="m-0 mb-12">Failed to send</h3>
                <p class="m-0 mb-40 mb-xl-60 text-m">Server not responding, please try later</p>
                <div class="d-flex">
                    <a href="#" class="btn sm mx-auto" rel="modal:close">OK</a>
                </div>
            </div>
        </div>
    </div>
<?php
    die();
}

// Test modal
function solbeg_ajax_modal_test() {
?>
    <div class="modal">
        <a href="#" class="modal-close" rel="modal:close">
            <svg width="32" height="32">
                <use xlink:href="#close"></use>
            </svg>
        </a>
        <div class="container">
            <div class="row g-0 justify-content-center pb-xl-40">
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
                            <button type="submit" class="btn ms-auto ms-lg-40 ms-xl-60">Send</button>
                        </div>
                    </form>
                    <!-- // CF7 form -->
                </div>
            </div>
        </div>
    </div>
<?php
    die();
}