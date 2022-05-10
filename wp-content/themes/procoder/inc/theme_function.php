<?php

// Theme Function

function nazmul_customizar_register($wp_customize){
    // Header area function
    $wp_customize->add_section('nazmul_header_area', array(
        'title' => __('Header Area', 'nazmul'),
        'description' => 'If you interested to update your header area, you can do it here.'
    ));
    $wp_customize->add_setting('nazmul_logo', array(
        'default' => get_bloginfo( 'template_directory' ) . '/img/logo.png',
    ));
    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'nazmul_logo', array(
        'label' => 'Logo Upload',
        'Description' => 'You can upload a logo here.',
        'setting' => 'nazmul_logo',
        'section' => 'nazmul_header_area',
        
    )));

    // Menu Postion Option
    $wp_customize->add_section('nazmul_menu_option', array(
        'title' => __('Menu Postion Option', 'nazmul'),
        'description' => 'If you interested to update your menu postion, you can do it here.'
    ));
    $wp_customize->add_setting('nazmul_menu_position', array(
        'default' => 'right_menu',
    ));
    $wp_customize-> add_control( 'nazmul_menu_position', array(
        'label' => 'Menu Postion',
        'Description' => 'Select your menu position.',
        'setting' => 'nazmul_menu_position',
        'section' => 'nazmul_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        ),
    ));

    //Footer option
    $wp_customize->add_section('nazmul_footer_option', array(
        'title' => __('Footer Option', 'nazmul'),
        'description' => 'If you interested to update your footer settings, you can do it here.'
    ));
    $wp_customize->add_setting('nazmul_copyright_section', array(
        'default' => '&copy; Copyright 2022 | Last Call Media',
    ));
    $wp_customize-> add_control( 'nazmul_copyright_section', array(
        'label' => 'Copyright Text',
        'Description' => 'If need you can update your copyright text from here.',
        'setting' => 'nazmul_copyright_section',
        'section' => 'nazmul_footer_option',
    ));

    // Theme Color

    $wp_customize-> add_section('nazmul_colors', array(
        'title' => __('Theme Color', 'nazmul'),
        'description' => 'If you can change your theme color.',
    ));

    $wp_customize-> add_setting('nazmul_bg_color', array(
        'default' => '#ffffff',
    ));

    $wp_customize-> add_control(new WP_Customize_Color_Control($wp_customize, 'nazmul_bg_color', array(
        'label' => 'Background Color',
        'section' => 'nazmul_colors',
        'settings' => 'nazmul_bg_color'
    )));

    $wp_customize-> add_setting('nazmul_primary_color', array(
        'default' => '#ea1a70',
    ));

    $wp_customize-> add_control(new WP_Customize_Color_Control($wp_customize, 'nazmul_primary_color', array(
        'label' => 'Primary Color',
        'section' => 'nazmul_colors',
        'settings' => 'nazmul_primary_color'
    )));
};

add_action( 'customize_register', 'nazmul_customizar_register' );

function nazmul_theme_color_customize(){
    ?>
     <style>
         body{background: <?php echo get_theme_mod( 'nazmul_bg_color');?>}
         :root{ --pink: <?php echo get_theme_mod( 'nazmul_primary_color');?>}
     </style>
    <?php
}

add_action( 'wp_head', 'nazmul_theme_color_customize' );