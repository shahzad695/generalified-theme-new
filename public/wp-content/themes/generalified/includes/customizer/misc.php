<?php
function generalified_misc_customizer($wp_customize){
    $wp_customize->add_setting('generalified_header_show_search',[
        'default'           =>          'yes'
    ]);
    $wp_customize->add_setting('generalified_header_show_cart',[
        'default'           =>          'yes'
    ]);
    $wp_customize->add_setting('generalified_footer_show_copyright_text',[
        'default'           =>          'Copyrights &copy; 2017 All Rights Reserved by Udemy'
    ]);
    $wp_customize->add_setting('generalified_footer_show_privacy_policy_page',[
        'default'           =>          0
    ]);
    $wp_customize->add_setting('generalified_footer_show_terms_of_service_page',[
        'default'           =>          0
    ]);

    $wp_customize->add_section('generalified_misc_section',[
        'title'             =>          __('Generalified Misc Settings','generalified'),
        'priority'          =>          30
    ]);
    
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,'generalified_header_show_search_input',[
            'label'         =>      __('Search Icon','generalified'),
            'section'       =>      'generalified_misc_section',
            'settings'      =>      'generalified_header_show_search',
            'type'          =>      'checkbox',
            'chocies'       =>      [
                'yes'       =>      'Yes'
            ]
        ]
    ) );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,'generalified_header_show_cart_input',[
            'label'         =>      __('Cart Icon','generalified'),
            'section'       =>      'generalified_misc_section',
            'settings'      =>      'generalified_header_show_cart',
            'type'          =>      'checkbox',
            'chocies'       =>      [
                'yes'       =>      'Yes'
            ]
        ]
    ) );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,'generalified_footer_show_copyright_text_input',[
            'label'         =>      __('Copyright Text','generalified'),
            'section'       =>      'generalified_misc_section',
            'settings'      =>      'generalified_footer_show_copyright_text',
        ]
    ) );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,'generalified_footer_show_privacy_page_input',[
            'label'         =>      __('Privacy Policy Page','generalified'),
            'section'       =>      'generalified_misc_section',
            'settings'      =>      'generalified_footer_show_privacy_policy_page',
            'type'          =>      'dropdown-pages'
            
        ]
    ) );


    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,'generalified_footer_show_terms_of_service_page_input',[
            'label'         =>      __('Terms Of Service Page','generalified'),
            'section'       =>      'generalified_misc_section',
            'settings'      =>      'generalified_footer_show_terms_of_service_page',
            'type'          =>      'dropdown-pages'
           
        ]
    ) );


}