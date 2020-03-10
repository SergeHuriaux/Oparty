<?php

// Inclusion de mes enqueues
require 'inc/enqueue.php';

// Inclusion de mon thème setup
require 'inc/theme-setup.php';

// Suppression des emojis
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');