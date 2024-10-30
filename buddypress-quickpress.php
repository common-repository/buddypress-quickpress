<?php
/*
Plugin Name: BuddyPress Quickpress
Plugin URI: http://dev.benoitgreant.be/blog/category/buddypress/buddypress-quickpress/
Description: Allows the users to write simple posts outside the dashboard (just like QuickPress from the dashboard)
Version: 0.1.6
Revision Date: March 4, 2010
Requires at least: WPMU 2.8.6, BuddyPress 1.2
Tested up to: WPMU 2.9.2, BuddyPress 1.2.1
License: (GNU General Public License 2.0 (GPL) http://www.gnu.org/licenses/gpl.html
Author: G.Breant
Author URI: http://dev.benoitgreant.be
Site Wide Only: true
*/

/*** Make sure BuddyPress is loaded ********************************/
if ( !function_exists( 'bp_core_install' ) ) {
	require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
	if ( is_plugin_active( 'buddypress/bp-loader.php' ) )
		require_once ( WP_PLUGIN_DIR . '/buddypress/bp-loader.php' );
	else
		return;
}
/*******************************************************************/

function bp_quickpress_init() {
	define ( 'BP_QUICKPRESS_IS_INSTALLED', 1 );
	define ( 'BP_QUICKPRESS_VERSION', '0.1.5-alpha' );
	define ( 'BP_QUICKPRESS_PLUGIN_NAME', 'buddypress-quickpress' );
	define ( 'BP_QUICKPRESS_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . BP_QUICKPRESS_PLUGIN_NAME );
	define ( 'BP_QUICKPRESS_PLUGIN_URL', WP_PLUGIN_URL . '/' . BP_QUICKPRESS_PLUGIN_NAME );

	require_once 'bp-quickpress.php';
}

if ( defined( 'BP_VERSION' ) )
	bp_quickpress_init();
else
	add_action( 'bp_init', 'bp_quickpress_init' );


?>