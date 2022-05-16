<?php
// Wordpress Shortcode

function basic_shortcode() {
    return 'This is our first shortcode.';
}

add_shortcode( 'text', 'basic_shortcode');

function button_shortcode($atts, $content = null) {

    $values = shortcode_atts( array(
        'url' => '#',

    ), $atts );

    return '<a class="shortcode_button" href="'.esc_attr($values['url']) .'">' .$content . '</a>';

}

add_shortcode( 'button', 'button_shortcode');