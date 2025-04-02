<?php
/*
Plugin Name: Hello World Plugin
Description: A simple "Hello World" plugin to demonstrate custom plugin creation.
Version: 1.0
Author: Test
License: Test
*/

// Hook to WordPress initialization action

function hello_world_message() {
    echo "<p style='color: green; text-align: center;'>Hello World! This is a simple WordPress plugin testing.</p>";
}

// Add the function to the WordPress 'wp_footer' hook so it shows up on the front-end of the website
add_action('wp_footer', 'hello_world_message');
