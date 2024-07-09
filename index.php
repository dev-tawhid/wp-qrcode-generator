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



function display_qr($content){
    $current_post_id = get_the_ID();
    $current_post_title = get_the_title($current_post_id);
    $current_post_url = urlencode(get_the_permalink($current_post_id));
    $qr_img_src = sprintf("https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=%s", $current_post_url ) ;
    $content .= sprintf('<div class="qr-code-container"><img src="%s" ald="%s"></div>', $qr_img_src, $current_post_title );
    return $content;
}


add_filter( 'the_content', 'display_qr' );

?>
