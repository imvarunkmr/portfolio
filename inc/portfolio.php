<?php
// Add custom post type
$args = array(
    'label' => 'Portfolio',
    'labels' => array(
        'name' => 'Projects',
        'singular_name' => 'Project',
    ),
    'public' => true,
    'menu_icon' => 'dashicons-format-gallery',
    'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'custom-fields',
    ),
);
register_post_type( 'slick_slider', $args );