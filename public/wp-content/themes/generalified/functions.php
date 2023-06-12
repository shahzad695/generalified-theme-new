<?php
//Setup
define('generalified_dev_mode',true);

//Includes

include(get_theme_file_path('/includes/frontend/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));
include(get_theme_file_path('/includes/widgets.php'));

//Hooks
add_action('wp_enqueue_scripts', 'generalified_scripts');
add_action('after_setup_theme', 'generalized_register_navmenu');
add_action('widgets_init', 'generalified_registar_sidebar');

//ShortCodes
?>