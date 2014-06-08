<?php
/**
 * Add to the Array which stores all info about the new metabox
 *
 */
function mp_stacks_mil_additional_items_array($items_array) {
	
	$counter = 0;
	
	//Loop through passed-in metabox fields
	foreach ( $items_array as $item ){
		
		//If the current loop is for the brick_main_image_link_url
		if ($item['field_id'] == 'brick_main_image_link_url'){
			
			//Split the array after the array with the field containing 'brick_main_image_link_url'
			$options_prior = array_slice($items_array, 0, $counter+1, true);
			$options_after = array_slice($items_array, $counter+1, true);
			
			break;
						
		}
		
		//Increment Counter
		$counter = $counter + 1;
	
	}
	
	if ( !empty($options_prior) ){
		
		//Add the first options to the return array
		$return_items_array = $options_prior;
		
		$main_image_lightbox_options = array(
				'field_id'			=> 'brick_main_image_open_type',
				'field_title' 	=> __( 'Link Open Type', 'mp_stacks'),
				'field_description' 	=> 'Enter the URL the above image will go to when clicked. EG: http://mylink.com',
				'field_type' 	=> 'select',
				'field_value' => '',
				'field_select_values' => array( 'lightbox' => __( 'Open in Lightbox', 'mp_stacks' ), 'parent' => __( 'Open in current Window/Tab', 'mp_stacks' ), 'blank' => __( 'Open in New Window/Tab', 'mp_stacks' ) )
			);
		
		//Globalize the and populate the mp_stacks_googlefonts_items_array (do this before filter hooks are run)
		global $global_mp_stacks_main_image_lightbox_items_array;
		$global_mp_stacks_main_image_lightbox_items_array = $main_image_lightbox_options;
	
		//Add new option to array  for main image lightbox
		array_push($return_items_array, $main_image_lightbox_options	);
		
		//Add all fields that came after
		array_push($return_items_array, $options_after[0]);
		
	}
		
    return $return_items_array;
}
add_filter('mp_stacks_image_items_array','mp_stacks_mil_additional_items_array');