<?php
/**
 * Add to the Array which stores all info about the new metabox
 *
 */
function mp_stacks_mil_additional_items_array($items_array) {
	
	//Create slice of array using the first item
	$first_three_options = array_slice($items_array, 0, 3, true);
	
	$return_items_array = $first_three_options;
	
	//Add new items to array after first three items
    array_push($return_items_array,
      array(
			'field_id'			=> 'brick_main_image_open_type',
			'field_title' 	=> __( 'Link Open Type', 'mp_stacks'),
			'field_description' 	=> 'Enter the URL the above image will go to when clicked. EG: http://mylink.com',
			'field_type' 	=> 'select',
			'field_value' => '',
			'field_select_values' => array( 'lightbox' => __( 'Open in Lightbox', 'mp_stacks' ), 'parent' => __( 'Open in current Window/Tab', 'mp_stacks' ), 'blank' => __( 'Open in New Window/Tab', 'mp_stacks' ) )
		)
	);
		
    return $return_items_array;
}
add_filter('mp_stacks_image_items_array','mp_stacks_mil_additional_items_array');