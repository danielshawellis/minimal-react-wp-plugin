<?php
/**
 * Plugin Name:       Minimal React Plugin
 * Version:           1.0.0
 * Author:            Daniel Ellis
 */


/*
  Basic security environment check
*/
if ( ! defined( 'ABSPATH' ) ) {
 die;
}


/*
  Load React app through a shortcode
*/
// Register react script
function minimal_react_register_scripts() {
  wp_register_script('minimal-react-plugin', plugins_url( 'assets/js/minimal-react-plugin.js', __FILE__ ), array (), false, false);
}
add_action('wp_enqueue_scripts', 'minimal_react_register_scripts');

// Add shortcode through callback
function minimal_react_shortcode_callback() {
  ?><div id='minimal-react-plugin'></div>"<?php
  // Enqueue the script only if shortcode callback runs
  wp_enqueue_script('minimal-react-plugin');
}
add_shortcode( 'minimal_react_shortcode', 'minimal_react_shortcode_callback' );


/*
  Load React app in plugin options page
*/
// Register react script
function minimal_react_register_admin_scripts() {
  wp_register_script('minimal-react-plugin', plugins_url( 'assets/js/minimal-react-plugin.js', __FILE__ ), array (), false, false);
}
add_action('admin_enqueue_scripts', 'minimal_react_register_admin_scripts');

// Create plugin options page
function minimal_react_create_menu() {
  add_menu_page('Minimal React Plugin', 'Minimal React', 'administrator', __FILE__, 'minimal_react_settings_page' );
}

// Load container div on options page
function minimal_react_settings_page() {
  ?><div id='minimal-react-plugin'></div><?php
  wp_enqueue_script('minimal-react-plugin');
}
add_action('admin_menu', 'minimal_react_create_menu');
