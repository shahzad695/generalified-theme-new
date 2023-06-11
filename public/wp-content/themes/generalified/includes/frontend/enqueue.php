<?php 

function generalified_scripts( ){
$uri=get_theme_file_uri();
$ver = generalified_dev_mode ? time():false;
wp_register_style('generalifide_google_fonts','https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i',[],$ver);
wp_register_style('generalified_bootstrap',$uri.'/assests/css/bootstrap.css',[],$ver);
wp_register_style('generalified_style',$uri.'/assests/css/style.css',[],$ver);
wp_register_style('generalified_dark',$uri.'/assests/css/dark.css"');
wp_register_style('generalified_font-icons',$uri.'/assests/css/font-icons.css',[],$ver);
wp_register_style('generalified_animate',$uri.'/assests/css/animate.css');
wp_register_style('generalified_magnific-popup',$uri.'/assests/css/magnific-popup.css',[],$ver);
wp_register_style('generalified_custom',$uri.'/assests/css/custom.css',[],$ver);

wp_enqueue_style('generalifide_google_fonts');
wp_enqueue_style('generalified_bootstrap');
wp_enqueue_style('generalified_style');
wp_enqueue_style('generalified_dark');
wp_enqueue_style('generalified_font-icons');
wp_enqueue_style('generalified_animate');
wp_enqueue_style('generalified_magnific-popup');
wp_enqueue_style('generalified_custom');
    

wp_register_script('generalified_plugins',$uri.'/assests/js/plugins.js',[],false,true);
wp_register_script('generalified_functions',$uri.'/assests/js/functions.js',[],false,true);


wp_enqueue_script('jquery');
wp_enqueue_script('generalified_plugins');
wp_enqueue_script('generalified_functions');


}