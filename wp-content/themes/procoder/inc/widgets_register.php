<?php

//Sidebar Register Function

function nazmul_widgets_regsiter(){
    register_sidebar(array(
        'name' => __('Main Widget Area',  'nazmul'),
        'id' =>  'siderbar-1',
        'description' => __('Appears in the sidebar on the blog page and also on other page.', 'nazmul'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>'
    ));
    register_sidebar(array(
        'name' => __('Footer 1',  'nazmul'),
        'id' =>  'footer-1',
        'description' => __('Appears in the sidebar on the blog page and also on other page.', 'nazmul'),
        'before_widget' => '<div class="footer_left_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>'
    ));
    register_sidebar(array(
        'name' => __('Footer 2',  'nazmul'),
        'id' =>  'footer-2',
        'description' => __('Appears in the sidebar on the blog page and also on other page.', 'nazmul'),
        'before_widget' => '<div class="footer_right_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>'
    ));
    register_sidebar(array(
        'name' => __('Footer 3',  'nazmul'),
        'id' =>  'footer-3',
        'description' => __('Appears in the sidebar on the blog page and also on other page.', 'nazmul'),
        'before_widget' => '<div class="footer_social_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>'
    ));

}

add_action( 'widgets_init', 'nazmul_widgets_regsiter');