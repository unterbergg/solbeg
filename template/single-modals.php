<?php

if (!defined('ABSPATH')) exit;

?>

<div class="modal">
    <a href="#" class="modal-close" rel="modal:close">
        <svg width="32" height="32">
            <use xlink:href="#close"></use>
        </svg>
    </a>
    <div class="container">

        <?php get_template_part('template-parts/content', 'blocks'); ?>

    </div>
</div>
