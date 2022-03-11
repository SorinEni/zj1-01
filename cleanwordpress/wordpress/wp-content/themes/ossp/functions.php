<?php

add_action('wp_enqueue_scripts', 'enqueue_parent_css', 10);
function enqueue_parent_css()
{
    wp_enqueue_style(
        'parent-style',
        trailingslashit(get_template_directory_uri()) . 'style.css', 
        array()
    );

    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
} // Konec povinného obsahu. Pod tento řádek můžete vkládat svůj kód.
