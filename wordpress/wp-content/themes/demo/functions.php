<?php

// Theme will only work for Wordpress 4.9.6 or later
if (version_compare($GLOBALS['wp_version'], '4.9.6', '<')) {
    
    die('This theme only works in Wordpress 4.9.6 or later. Please update your Wordpress to view this page.');
}


function register_menus() {
    
    //identifying what is a nav menu, so users can later edit their nav
    //for more info, go to https://codex.wordpress.org/Function_Reference/register_nav_menus
    register_nav_menus([
        
        'main_menu' => __('Main Navigation'),
        'footer_menu' => __('Footer Navigation'),
        
    ]);
    
}

//second hook needs to be same as func name !!
add_action('init', 'register_menus');





















?>


