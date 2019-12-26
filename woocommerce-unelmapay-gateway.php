<?php

/**
 * Plugin Name: WooCommerce Unelmapay Gateway
 * Plugin URI: https://www.unelmapay.com/
 * Description: Woocommerce Unelmapay Gateway to create payment
 * Author: unelmapay.com
 * Author URI: https://www.unelmapay.com/
 * Version: 1.0
 * Text Domain: unelmapay
 * Domain Path: languages/
 */
// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

/**
 * Basic plugin definitions
 *
 * @package WordPress unelmapay Gateway
 * @since 1.0.0
 */
if (!defined('WPG_VERSION')) {
    define('WPG_VERSION', '1.0.0'); //libraray version of js and css
}
if (!defined('WPG_DIR')) {
    define('WPG_DIR', dirname(__FILE__)); // plugin dir
}
if (!defined('WPG_URL')) {
    define('WPG_URL', plugin_dir_url(__FILE__)); // plugin url
}
if (!defined('WPG_BASENAME')) {
    define('WPG_BASENAME', basename(WPG_DIR)); // base name
}

if (!defined('WPG_INCLUDE_DIR')) {
    define('WPG_INCLUDE_DIR', WPG_DIR . '/includes'); // Admin Dir
}

if (!defined('WPG_ADMIN_DIR')) {
    define('WPG_ADMIN_DIR', WPG_DIR . '/includes/admin'); // Admin Dir
}


// Make sure WooCommerce is active
if (!in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    return;
}

include_once( WPG_INCLUDE_DIR . '/class-wpg-payment.php' );


