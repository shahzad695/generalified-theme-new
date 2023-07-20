<?php 
function generalified_customizer($wp_customize){
    // echo '<pre>';
    // var_dump($wp_customize);
    // echo '<pre>';
    $wp_customize->get_section('title_tagline')->title = 'General';

    $wp_customize->add_panel('generalified_custom_panel',[
        'title'         =>     __('Generalified Customizer', 'generalified'),
        'priority'      =>     160,
    ]);
    generalified_social_media_customizer($wp_customize);
    generalified_misc_customizer($wp_customize);
}



?>