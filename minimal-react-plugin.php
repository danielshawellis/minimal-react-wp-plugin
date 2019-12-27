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
  // Echo the div that React will target as its container
  echo "<div id='minimal-react-plugin'></div>";
  // Enqueue the script only if shortcode callback runs
  wp_enqueue_script('minimal-react-plugin');
}
add_shortcode( 'minimal_react_shortcode', 'minimal_react_shortcode_callback' );
