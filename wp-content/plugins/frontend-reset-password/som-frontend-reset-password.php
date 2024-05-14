<?php
/**
 * Plugin Name: Reset Password
 * Description: Let your users reset their forgotten passwords from the frontend of your website.
 * Version: 9.99
 * Author: Followers Studio
 * Author URI: https://followerstudio.net/
 * Requires at least: 4.4
 * Tested up to: 6.2.2
 *
 * Text Domain: frontend-reset-password
 * Domain Path: /i18n/languages
 *
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Donate link: https://followerstudio.net/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define plugin constants
define( 'SOMFRP_FILE', __FILE__ );
define( 'SOMFRP_PATH', plugin_dir_path( __FILE__ ) );
define( 'SOMFRP_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

// Require main plugin loader
require_once( SOMFRP_PATH . 'somfrp-loader.php' );