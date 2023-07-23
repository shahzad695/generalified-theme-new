<?php
function generalified_misc_customizer($wp_customize){
    $wp_customize->add_setting('generalified_header_show_search',[
        'default'           =>          'yes',
        'transport'         =>          'postMessage'
    ]);
    $wp_customize->add_setting('generalified_header_show_cart',[
        'default'           =>          'yes',
        'transport'         =>          'postMessage'
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

    $wp_customize->add_setting('generalified_read_more_link',[
        'default'           =>          '#1ABC9C'
    ]);
    $wp_customize->add_setting('generalified_upload_link',[
        'default'           =>          0
    ]);

    $wp_customize->add_section('generalified_misc_section',[
        'title'             =>          __('Generalified Misc Settings','generalified'),
        'panel'             =>          'generalified_custom_panel',
        'priority'          =>          30
    ]);
    
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,'generalified_header_show_search_input',[
            'label'         =>      __('Search Icon','generalified'),
            'section'       =>      'generalified_misc_section',
            'settings'      =>      'generalified_header_show_search',
            'type'          =>      'checkbox',
            'choices'       =>      [
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
            'choices'       =>      [
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


    $wp_customize->add_control(new WP_Customize_Upload_Control(
        $wp_customize,'generalified_upload_link_input',[
            'label'         =>      __('File Upload link','generalified'),
            'section'       =>      'generalified_misc_section',
            'settings'      =>      'generalified_upload_link',
        
           
        ]
    ) );

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,'generalified_read_more_link_input',[
            'label'         =>      __('Read more link color','generalified'),
            'section'       =>      'generalified_misc_section',
            'settings'      =>      'generalified_read_more_link',
            
           
        ]
    ) );

}