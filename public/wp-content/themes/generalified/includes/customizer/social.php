<?php 
function generalified_social_media_customizer($wp_customize){
    $wp_customize->add_setting('generalized_facebook_handle',[
        'default'     =>   ''

    ]);
    $wp_customize->add_setting('generalified_twitter_handle',[
        'default'   =>    ''

    ]);
    $wp_customize->add_setting('generlified_instagram_handle',[
        'default'   =>    ''
    ]);
    $wp_customize->add_setting('generlified_phone_handle',[
        'default'   =>    ''
    ]);
    $wp_customize->add_setting('generlified_email_handle',[
        'default'   =>    ''
    ]);

    $wp_customize->add_section('generalized_social_section',[
        'title'      =>     __('Social media settings','generalified'),
        'panel'      =>     'generalified_custom_panel',
        'priority'   =>     30
    ]);

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'generalified_twitter_input',
        [
            'label'   =>    __('Twitter Handle', 'generalified'),
            'section' =>    'generalized_social_section',
            'settings'=>    'generalified_twitter_handle',

        ]
    ) );
    
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'generalified_Instagram_input',
        [
            'label'   =>    __('Instagram Handle', 'generalified'),
            'section' =>    'generalized_social_section',
            'settings'=>    'generlified_instagram_handle',

        ]
    ) );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'generalified_Phone_input',
        [
            'label'   =>    __('Phone Handle', 'generalified'),
            'section' =>    'generalized_social_section',
            'settings'=>    'generlified_phone_handle',

        ]
    ) );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'generalified_Email_input',
        [
            'label'   =>    __('Email Handle', 'generalified'),
            'section' =>    'generalized_social_section',
            'settings'=>    'generlified_email_handle',

        ]
    ) );



    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,'generalified_facebook_input',[
        'label'      =>    __('Facebook Handle','generalified'),
        'section'    =>    'generalized_social_section',
        'settings'    =>    'generalized_facebook_handle'

        ]

        ));
}
