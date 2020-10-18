<?php
/**
 * Plugin Name: wordPress alert
 * Version: 1.0.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: This is your starter Alert for your next WordPress plugin.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: wordpress-alert
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load plugin class files.
require_once 'includes/class-wordpress-alert.php';
require_once 'includes/class-wordpress-alert-settings.php';

// Load plugin libraries.
require_once 'includes/lib/class-wordpress-alert-admin-api.php';
require_once 'includes/lib/class-wordpress-alert-post-type.php';
require_once 'includes/lib/class-wordpress-alert-taxonomy.php';

/**
 * Returns the main instance of WordPress_Plugin_alert to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object WordPress_Plugin_alert
 */
function WordPress_Plugin_alert() {
	$instance = WordPress_Plugin_alert::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = WordPress_Plugin_alert_Settings::instance( $instance );
	}

	return $instance;
}

WordPress_Plugin_alert();
