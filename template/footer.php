<?php
/**
 * @var array $args
 */

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
    $footer_link_group = get_field('footer_link', get_queried_object()->ID);
    $socials = get_field('socials_flexible', 'options');
    $request_for_quote = get_field('request_for_quote', 'options');
}
$footer_text = esc_html($args['text']);
if (in_array(get_post_type(), ['services', 'projects', 'industries'])) {
    $footer_text = $args['text_other'] != "" ? esc_html($args['text_other']) : esc_html($args['text']);
}
if ($footer_link_group['text']) {
    $footer_text = esc_html($footer_link_group['text']);
}

$footer_link = false;
if (!empty($args['modal'])) {
    $footer_link = get_permalink($args['modal']);
}
if (!empty($footer_link_group['modal'])) {
    $footer_link = get_permalink($footer_link_group['modal']);
}

?>

    <footer class="footer">
        <div class="container">
            <hr>
            <?php if ($footer_link != false) :  ?>
            <div class="footer-link d-flex flex-column align-items-center">
                <p class="animate signature">Let’s get to work?</p>
                <div class="animate h2">
                    <a href="<?php echo esc_url($footer_link ?? '#contactus'); ?>"
                        <?php if (empty($footer_link) || str_contains($footer_link, 'modal')) : ?>
                            rel="modal:open"
                        <?php endif; ?>
                    >
                        <?php echo esc_html($footer_text); ?>
                    </a>
                </div>
            </div>
            <?php endif; ?>
            <div class="footer-wrapper d-grid">
                <div class="footer-careers order-1">
                    <h3>Careers</h3>
                    <?php wp_nav_menu( [
                        'theme_location'  => 'footer-career',
                        'container'       => 'div',
                        'container_class' => 'text-m',
                        'items_wrap'      => '<ul id="%1$s">%3$s</ul>',
                    ] );?>
                </div>
                <div class="footer-menu order-3 order-md-2">
                    <div class="h3 d-none d-md-block">&nbsp;</div>
                    <?php wp_nav_menu( [
                        'theme_location'  => 'footer',
                        'container'       => 'div',
                        'container_class' => 'text-m',
                        'items_wrap'      => '<ul id="%1$s">%3$s</ul>',
                    ] );?>
                </div>
                <div class="footer-offices order-2 order-md-3">
                    <h3>Offices</h3>
                    <?php wp_nav_menu( [
                        'theme_location'  => 'footer-offices',
                        'container'       => 'div',
                        'container_class' => 'text-m',
                        'items_wrap'      => '<ul id="%1$s">%3$s</ul>',
                    ] );?>
                </div>
                <div class="footer-social align-self-end order-4 align-self-md-start order-md-last order-lg-4">
                    <div class="h3 d-none d-lg-block">&nbsp;</div>
                    <ul>
                        <?php if (!empty($socials) && is_array($socials)) : foreach ($socials as $item) :
                            if (empty($item)) continue;
                            extract($item);
                            /**
                             * @var $link
                             * @var $icon
                             */
                            ?>
                            <li>
                                <a href="<?php echo esc_url($link); ?>"
                                   aria-label="<?php echo esc_url($link); ?>"
                                   target="_blank"
                                >
                                    <?php echo file_get_contents($icon['url']);?>
                                </a>
                            </li>
                        <?php endforeach; endif; ?>
                    </ul>

                </div>
                <div class="footer-copyright order-last align-self-md-end order-md-4 order-lg-5">
                    <p>© 2008-<?php echo date('Y'); ?>&nbsp;<br>Solbeg, Ltd</p>
                </div>
                <div class="footer-links order-5 align-self-md-end d-lg-flex justify-content-lg-end order-lg-last">
                    <?php if ($request_for_quote) : ?>
                    <p>
                        <a href="<?php echo get_permalink($request_for_quote); ?>" rel="modal:open">
                            Request for Quote
                        </a>
                    </p>
                    <?php endif;?>

                    <p><a href="<?php echo get_privacy_policy_url();?>">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </footer>

    <?php  if (empty($_COOKIE['accepted'])) : ?>
    <div class="policy-agreement">
        <div class="d-flex align-items-center">
            <p>We use <a href="<?php echo get_privacy_policy_url();?>">cookies</a> to optimise site functionality and enhance your experience.</p>
            <a href="javascript: void(0);" class="btn xs" onClick="Cookies.set('accepted', 1); this.closest('.policy-agreement').classList.toggle('hide'); return false;">I&nbsp;agree</a>
        </div>
    </div>
    <?php  endif; ?>
    
    <?php wp_footer(); ?>
</body>
</html>