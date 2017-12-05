<?php
/**
 * Plugin Name:       loftschool
 * Plugin URI:        https://loftschool.com
 * Description:       loftschool
 * Version:           0.4.9
 */

function initPlugin()
{
    add_menu_page(
        'СуперПлагин',
        'СуперПлагин',
        'manage_options',
        'loftschool/another.php',
        '',
        'dashicons-welcome-widgets-menus',
        90
    );
}

add_action('admin_menu', 'initPlugin');
