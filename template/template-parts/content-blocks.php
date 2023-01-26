<?php

if (!defined('ABSPATH')) exit;

while (have_posts()) {
    the_post();
    the_content();
}