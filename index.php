<?php 

/* 
Plugin Name: wp-qrcode-generator
Version: 1.0
Author: devtawhid
Description: This plugin will generate qr code posts link. 
Author URI: https://devtawhid.com
Plugin URI: https://devtawhid.com
Text Domain: wp-qrcode-generator
License: GPLv2 or later
Domain Path: /languages/
*/

// Register activation hook
function wqrg_activation_hook() {
    // Activation code here
}
register_activation_hook( __FILE__, 'wqrg_activation_hook' );

// Register deactivation hook
function wqrg_deactivation_hook() {
    // Deactivation code here
}
register_deactivation_hook( __FILE__, 'wqrg_deactivation_hook' );

// Load plugin textdomain
function wqrg_load_textdomain(){
    load_plugin_textdomain( 'wp-qrcode-generator', false, dirname( plugin_basename(__FILE__) ) . '/languages' );
}
add_action( 'plugins_loaded', 'wqrg_load_textdomain' );



?>
