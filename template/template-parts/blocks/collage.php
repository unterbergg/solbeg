<?php
/**
 * @var array $block
 */
if(!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
    $type = get_field('type');
    $pictures = get_field('pictures');
}

//$pictures = array_values(array_filter($pictures, function($o){
//    return is_array($o['picture']);
//}));
?>

<?php if ($pictures): ?>
    <!-- Gutenberg block collage -->
    <div class="collage collage-type-<?php echo $type?> <?php echo esc_html($block['className']) ?? ''; ?>">

        <?php
        $img_count = 2;
        switch ($type) {
        case '1': ?>
        <div>
            <svg viewBox="0 0 900 645">
                <path d="M277 643L791.983 111L793.42 112.391L278.437 644.391L277 643Z"/>
            </svg>
            <?php
            break;
            case '2': ?>
                <svg viewBox="0 0 464 372">
                    <path d="M164 154L18 46.9999L19.1823 45.3867L165.182 152.387L164 154Z"/>
                    <path d="M403 310L337 274L337.958 272.244L403.958 308.244L403 310Z"/>
                    <path d="M11 353L415.991 27.0742L417.245 28.6323L12.2539 354.558L11 353Z"/>
                </svg>
                <?php
                $img_count = 3;
                break;
            case '3': ?>
                <svg class="d-block d-md-none" viewBox="0 0 288 532">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.60547 404L277.75 120.218L279.195 121.6L7.05063 405.383L5.60547 404Z"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M213.363 378.575L54.6438 129.191L56.3323 128.119L215.052 377.503L213.363 378.575Z"/>
                </svg>
                <svg class="d-none d-md-block" viewBox="0 0 1800 919">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M534 853L1261 94L1262.44 95.3834L535.444 854.384L534 853Z"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1089 785L665 118L666.688 116.927L1090.69 783.927L1089 785Z"/>
                </svg>
                <?php
                $img_count = 5;
                break;
            case '4': ?>
                <!--        <svg viewBox="0 0 275 171">-->
                <!--            <line x1="0.526355" y1="1.14973" x2="273.526" y2="170.15" stroke="red" stroke-width="2"/>-->
                <!--        </svg>-->
                <!--        <svg viewBox="0 0 162 162">-->
                <!--            <line x1="160.707" y1="0.707107" x2="0.707104" y2="160.707" stroke="red" stroke-width="2"/>-->
                <!--        </svg>-->

                <svg viewBox="0 0 458 171"  xmlns="http://www.w3.org/2000/svg">
                    <line x1="306.707" y1="2.70711" x2="146.707" y2="162.707" stroke="#20101E" stroke-width="2"/>
                    <line x1="80.5264" y1="1.14973" x2="353.526" y2="170.15" stroke="#20101E" stroke-width="2"/>
                </svg>
                <?php
                $img_count = count($pictures);
                break;
            }
            ?>
            <?php if ($type === '4'):?>
            <div class="img-wrapper">
                <?php endif;?>

                <?php for ($i = 0; $i < $img_count; $i++):
                    extract($pictures[$i]);
                    /**
                     * @var obj $picture
                     */
                    ?>
                    <figure>
                        <?php echo wp_get_attachment_image($picture['ID'], 'full');?>
                    </figure>
                <?php endfor; ?>

                <?php if ($type === '4'):?>
            </div>
        <?php endif;?>

            <?php if ($type === '1'):?>
        </div>
        <span>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/partner.png" alt="Gold Microsoft Partner">
    </span>
    <?php endif;?>

    </div>
    <!-- // Gutenberg block collage -->
<?php endif; ?>