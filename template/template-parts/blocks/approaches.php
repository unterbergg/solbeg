<?php

if (!defined('ABSPATH')) exit;

if(function_exists('get_field')) {
    $approaches = get_field('approaches');
}

if (!$approaches) return;
?>

<ul class="animate approach h3">
    <?php foreach ($approaches as $approach) : extract($approach);
        /**
         * @var string $title
         * @var string $text
         */
        if ($title && $text) : ?>
            <li>
                <?php echo esc_html($approach['title']); ?><!--Solid-->
                <span><svg><use xlink:href="#arrow"></use></svg>
                    <?php echo esc_html($approach['text']); ?><!--partnership approach-->
                </span>
            </li>
            <?php
        endif;
    endforeach; ?>
</ul>
