<?php
//Setup
define('generalified_dev_mode',true);

//Includes

include(get_theme_file_path('/includes/frontend/enqueue.php'));

//Hooks
add_action('wp_enqueue_scripts', 'generalified_scripts');

//ShortCodes
?>