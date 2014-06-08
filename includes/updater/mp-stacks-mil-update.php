<?php
/**
 * This file contains the function keeps the MP Stacks + Main Image Lightbox plugin up to date.
 *
 * @since 1.0.0
 *
 * @package    MP Stacks + Main Image Lightbox
 * @subpackage Functions
 *
 * @copyright  Copyright (c) 2014, Mint Plugins
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author     Philip Johnston
 */
 
/**
 * Check for updates for the MP Stacks Text Plugin by creating a new instance of the MP_CORE_Plugin_Updater class.
 *
 * @access   public
 * @since    1.0.0
 * @return   void
 */
 if (!function_exists('mp_stacks_mil_update')){
	function mp_stacks_mil_update() {
		$args = array(
			'software_name' => 'MP Stacks + Main Image Lightbox', //<- The exact name of this Plugin. Make sure it matches the title in your mp_stacks-text, text, and the WP.org stacks-text
			'software_api_url' => 'http://mintplugins.com',//The URL where Text and mp_stacks-text are installed and checked
			'software_filename' => 'mp-stacks-main-image-lightbox.php',
			'software_licensed' => false, //<-Boolean
		);
		
		//Since this is a plugin, call the Plugin Updater class
		$mp_stacks_mil_plugin_updater = new MP_CORE_Plugin_Updater($args);
	}
 }
add_action( 'init', 'mp_stacks_mil_update' );
