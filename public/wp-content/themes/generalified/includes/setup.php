<?php 

function generalized_register_navmenu(){
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
register_nav_menu('primary', __('Primary menu','generalified'));
register_nav_menu('secondary', __('Secondary menu','generalified'));
}
?>