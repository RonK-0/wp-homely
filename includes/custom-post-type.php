<?php

function homely_testimonies_post(){
    $clientTestimonies_label = array(
        'name'          => __('Client Testimonies','textdomain'),
        'singular_name' => __('Client Testimonies','textdomain'),
        'add_new'       => __('Add Client Testimonies', 'textdomain'),
        'add_new_item'  => __('Add new Client Testimonies', 'textdomain'),
        'edit_item'     => __('Edit Client Testimonies', 'textdomain'),
        'all_items'     => __('Client Testimonies', 'textdomain'),
    );

    $clientTestimonies_args = array(
        'labels'            => $clientTestimonies_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports' => array('title', 'editor','thumbnail', 'custom-fields', 'excerpt'),
        'menu_icon'        => 'dashicons-format-aside',
    );

    register_post_type('clientTestimonies', $clientTestimonies_args);
}

add_action('init', 'homely_testimonies_post');

function homely_custom_agents_post(){
    $realEstateAgents_label = array(
        'name'          => __('Real Estate Agents','textdomain'),
        'singular_name' => __('Real Estate Agents','textdomain'),
        'add_new'       => __('Add Real Estate Agents', 'textdomain'),
        'add_new_item'  => __('Add new Real Estate Agents', 'textdomain'),
        'edit_item'     => __('Edit Real Estate Agents', 'textdomain'),
        'all_items'     => __('Real Estate Agents', 'textdomain'),
    );

    $realEstateAgents_args = array(
        'labels'            => $realEstateAgents_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports' => array('title', 'editor','thumbnail', 'custom-fields', 'excerpt'),
        'menu_icon'        => 'dashicons-businessperson',
    );

    register_post_type('realEstateAgents', $realEstateAgents_args);
}

add_action('init', 'homely_custom_agents_post');

function homely_custom_properties_post(){
    $properties_post_label = array(
        'name'          => __('Properties','textdomain'),
        'singular_name' => __('Properties','textdomain'),
        'add_new'       => __('Add Properties', 'textdomain'),
        'add_new_item'  => __('Add new Properties', 'textdomain'),
        'edit_item'     => __('Edit Properties', 'textdomain'),
        'all_items'     => __('Properties', 'textdomain'),
    );

    $properties_post_args = array(
        'labels'            => $properties_post_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports' => array('title', 'editor','thumbnail', 'custom-fields', 'excerpt'),
        'menu_icon'        => 'dashicons-location-alt',
    );

    register_post_type('properties_post', $properties_post_args);
}

add_action('init', 'homely_custom_properties_post');

function homely_custom_blog_Post(){
    $blog_Post_label = array(
        'name'          => __('Blog Post','textdomain'),
        'singular_name' => __('Blog Post','textdomain'),
        'add_new'       => __('Add Blog Post', 'textdomain'),
        'add_new_item'  => __('Add new Blog Post', 'textdomain'),
        'edit_item'     => __('Edit Blog Post', 'textdomain'),
        'all_items'     => __('Blog Post', 'textdomain'),
    );

    $blog_Post_args = array(
        'labels'            => $blog_Post_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports' => array('title', 'editor','thumbnail', 'custom-fields', 'excerpt'),
    );

    register_post_type('blog_Post', $blog_Post_args);
}

add_action('init', 'homely_custom_blog_Post');
?>