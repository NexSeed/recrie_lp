<?php

	/**
	* Plugin Name: Drag and Drop Multiple File Upload - Contact Form 7
	* Plugin URI: https://profiles.wordpress.org/glenwpcoder
	* Description: This simple plugin create Drag & Drop or choose Multiple File upload in your Confact Form 7 Forms.
	* Text Domain: dnd-upload-cf7
	* Domain Path: /languages
	* Version: 1.3.1
	* Author: Glen Don L. Mongaya
	* Author URI: http://codedropz.com
	* License: GPL2
	**/

	/**  This protect the plugin file from direct access */
	if ( ! defined( 'WPINC' ) ) {
		die;
	}

	/** Set plugin constant to true **/
	define( 'dnd_upload_cf7', true );

	/**  Define plugin Version */
	define( 'dnd_upload_cf7_version', '1.3.1' );

	/**  Define constant Plugin Directories  */
	define( 'dnd_upload_cf7_directory', untrailingslashit( dirname( __FILE__ ) ) );

	/* Define Custom Upload Directory */
	define('wpcf7_dnd_dir', 'wp_dndcf7_uploads');

	// require plugin core file
	require_once( dnd_upload_cf7_directory .'/inc/dnd-upload-cf7.php' );