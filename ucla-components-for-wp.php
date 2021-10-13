<?php
/**
 * UCLA Components for WordPress
 *
 * @package       UCLACOMPONENTSWP
 * @author        Scott Gruber
 * @version       1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:   UCLA Components for WordPress
 * Plugin URI:    https://github.com/uclaioes/ucla-components-for-wp
 * Description:   WordPress plugin for the UCLA Web Component Library
 * Version:       1.0.0
 * Author:        Scott Gruber
 * Author URI:    https://github.com/uclaioes/ucla-components-for-wp
 * Text Domain:   ucla-components-for-wp
 * Domain Path:   /languages
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * HELPER COMMENT START
 * 
 * This file contains the main information about the plugin.
 * It is used to register all components necessary to run the plugin.
 * 
 * The comment above contains all information about the plugin 
 * that are used by WordPress to differenciate the plugin and register it properly.
 * It also contains further PHPDocs parameter for a better documentation
 * 
 * The function UCLACOMPONENTSWP() is the main function that you will be able to 
 * use throughout your plugin to extend the logic. Further information
 * about that is available within the sub classes.
 * 
 * HELPER COMMENT END
 */

// Plugin name
define( 'UCLACOMPONENTSWP_NAME',			'UCLA Components for WordPress' );

// Plugin version
define( 'UCLACOMPONENTSWP_VERSION',		'1.0.0' );

// Plugin Root File
define( 'UCLACOMPONENTSWP_PLUGIN_FILE',	__FILE__ );

// Plugin base
define( 'UCLACOMPONENTSWP_PLUGIN_BASE',	plugin_basename( UCLACOMPONENTSWP_PLUGIN_FILE ) );

// Plugin Folder Path
define( 'UCLACOMPONENTSWP_PLUGIN_DIR',	plugin_dir_path( UCLACOMPONENTSWP_PLUGIN_FILE ) );

// Plugin Folder URL
define( 'UCLACOMPONENTSWP_PLUGIN_URL',	plugin_dir_url( UCLACOMPONENTSWP_PLUGIN_FILE ) );

/**
 * Load the main class for the core functionality
 */
require_once UCLACOMPONENTSWP_PLUGIN_DIR . 'core/class-ucla-components-for-wp.php';

/**
 * The main function to load the only instance
 * of our master class.
 *
 * @author  Scott Gruber
 * @since   1.0.0
 * @return  object|Ucla_Components_For_Wp
 */
function UCLACOMPONENTSWP() {
	return Ucla_Components_For_Wp::instance();
}

UCLACOMPONENTSWP();
