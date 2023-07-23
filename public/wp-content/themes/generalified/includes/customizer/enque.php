<?php 
function generalified_customizer_script(){
    wp_enqueue_script('generalified_customizer',get_theme_file_uri().'/assets/js/theme-customize.js',['jquery','customize-preview'],false,true);
}
