<?php

function homely_support(){
    add_theme_support('post-thumbnails');   // for post thumbnails
    add_theme_support('menus'); // for header and footer menus
    add_theme_support('custom-logo');   // for logo

    register_nav_menu('header_menu', 'Header Menu');
    register_nav_menu('footer_menu', 'Footer Menu');
}
add_action('after_setup_theme','homely_support');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}