<?php

class WP_PHP_Mobile_Detect {

	function __construct() {

		$this->detect = new Mobile_Detect();

	}

	function init() {

		if (phpversion() < 5) {
			add_action( 'admin_notices', array( $this, 'php_version_warning' ) );
			return;
		}

	}	

	function php_version_warning() {

		echo '<div id="php-mobile-detect-warning" class="error"><p>Sorry, PHP Mobile Detect requires PHP version 5.0 or greater.</p></div>';

	}

	function is_mobile() {

		return $this->detect->isMobile();

	}

	function is_tablet() {

		return $this->detect->isTablet();

	}

	function is( $prop ) {

		return $this->detect->is( $prop );

	}

}