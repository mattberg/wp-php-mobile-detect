<?php
/*
Plugin Name: Wordpress Mobile Detect
Plugin URI: http://www.github.com
Description: Wordpress wrapper for the Mobile Detect lightweight PHP class for detecting mobile devices
Version: 0.1
Author: Matt Berg
Author URI: http://twitter.com/mattberg

PHP Mobile Detect Source: (https://github.com/serbanghita/Mobile-Detect)
*/

define( 'WP_PHP_MOBILE_DETECT_VERSION', '0.1' );
define( 'WP_PHP_MOBILE_DETECT_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'WP_PHP_MOBILE_DETECT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

require_once WP_PHP_MOBILE_DETECT_PLUGIN_PATH . '/classes/Mobile_Detect.php';
require_once WP_PHP_MOBILE_DETECT_PLUGIN_PATH . '/classes/core.php';

$wp_php_mobile_detect = new WP_PHP_Mobile_Detect();

add_filter( 'init', array( $wp_php_mobile_detect, 'init' ) );

if ( !function_exists( 'is_mobile' ) ) {
	function is_mobile() {
		global $wp_php_mobile_detect;
		return $wp_php_mobile_detect->is_mobile();
	}
}

if ( !function_exists( 'is_tablet' ) ) {
	function is_tablet() {
		global $wp_php_mobile_detect;
		return $wp_php_mobile_detect->is_tablet();
	}
}

if ( !function_exists( 'is_detect' ) ) {
	function is_detect( $prop ) {
		global $wp_php_mobile_detect;
		return $wp_php_mobile_detect->is( $prop );
	}
}