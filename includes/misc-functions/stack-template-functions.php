<?php 
/**
 * Functions used to work with the MP Stacks Developer Plugin
 *
 * @link http://mintplugins.com/doc/
 * @since 1.0.0
 *
 * @package     MP Stacks + Main Image Lightbox
 * @subpackage  Functions
 *
 * @copyright   Copyright (c) 2014, Mint Plugins
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author      Philip Johnston
 */
 
/**
 * Add these options to the all_mp_stacks_meta array for MP Stacks
 */
function mp_stacks_mil_add_all_mp_stacks_meta( $all_mp_stacks_meta ){
	
	global $global_mp_stacks_main_image_lightbox_items_array;
	
	//If mp_stack_main_image_lightbox hasn't been added to the all plugins options array yet
	if ( empty( $all_mp_stacks_meta['mp_stacks_main_image_lightbox'] ) ){
		
		//Add it. For the title we use plugin_title_4325819681 so that if a meta key happens to be 'plugin'title' they don't get lost. 
		//4325819681 is just a random string to make this unique
		$all_mp_stacks_meta['mp_stacks_main_image_lightbox'] = array('plugin_title_4325819681' => 'MP Stacks + Main Image Lightbox');
	}
	
	//Loop through each field and add it to the mp_stacks_main_image_lightbox array of options
	foreach ( $global_mp_stacks_main_image_lightbox_items_array as $meta_option ){
		//Add all of these options to the mp_stacks_main_image_lightbox options array
		array_push( $all_mp_stacks_meta['mp_stacks_main_image_lightbox'], $meta_option );	
	}
	
	return $all_mp_stacks_meta;
}
add_filter( 'mp_stacks_all_mp_stacks_meta', 'mp_stacks_mil_add_all_mp_stacks_meta' );
