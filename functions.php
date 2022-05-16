<?php


require_once dirname(__FILE__) . '/cmb2.php';

require_once dirname(__FILE__) . '/inc/custom-fields.php';


function leroma_setup() {

    register_nav_menus( array(
        'menu_principal' => esc_html__('Menu Principal', 'leromadeportes'),
        'menu_scroll' => esc_html__('Menu Scroll', 'leromadeportes'),
        'menu_responsive' => esc_html__('Menu Responsive', 'leromadeportes') 
    ) );



}

add_action('after_setup_theme', 'leroma_setup');


function leroma_scripts() {

    wp_enqueue_style('style', get_stylesheet_uri());   

    wp_enqueue_style('mi-css', get_template_directory_uri().'/normalize.css', array(), '1.0.0');



    wp_enqueue_script('js', get_template_directory_uri() . '/src/js/app.js', array(), '1.0', true);

}

add_action('wp_enqueue_scripts', 'leroma_scripts');


add_theme_support( 'woocommerce' );





