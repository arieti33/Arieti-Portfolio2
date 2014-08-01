<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * WARNING: Please do not edit this file in any way
 *
 * load the theme function files
 */

$template_directory = get_template_directory();

require( $template_directory . '/core/includes/functions.php' );
require( $template_directory . '/core/includes/functions-update.php' );
require( $template_directory . '/core/includes/functions-sidebar.php' );
require( $template_directory . '/core/includes/functions-install.php' );
require( $template_directory . '/core/includes/theme-options.php' );
require( $template_directory . '/core/includes/post-custom-meta.php' );
require( $template_directory . '/core/includes/tha-theme-hooks.php' );
require( $template_directory . '/core/includes/hooks.php' );
require( $template_directory . '/core/includes/version.php' );
require( $template_directory . '/core/includes/upsell/theme-upsell.php' );

// Return value of the supplied responsive free theme option.
function responsive_free_get_option( $option, $default = false ) {
	global $responsive_options;

	// If the option is set then return it's value, otherwise return false.
	if( isset( $responsive_options[$option] ) ) {
		return $responsive_options[$option];
	}

	return $default;
}

?>