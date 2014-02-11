<?php 

/**
 * Filter Media Output for Image Link Class
 */
function mp_stacks_mil_brick_main_image_link_class( $class_name, $post_id){
	
	//Set Image Open Type
	$brick_main_image_open_type = get_post_meta($post_id, 'brick_main_image_open_type', true);
		
	//If the user has saved an open type
	if ( !empty($brick_main_image_open_type)){
		if ( $brick_main_image_open_type == 'lightbox'){
			$class_name .= ' mp-stacks-lightbox-link'; 
		}
	}
	
	return $class_name;
}
add_filter( 'brick_main_image_link_class', 'mp_stacks_mil_brick_main_image_link_class', 10, 2);

/**
 * Filter Media Output for Image Link target string
 */
function mp_stacks_mil_brick_main_image_link_target( $target, $post_id){
	
	//Set Image Open Type
	$brick_main_image_open_type = get_post_meta($post_id, 'brick_main_image_open_type', true);
		
	//If the user has saved an open type
	if ( !empty($brick_main_image_open_type)){
		if ( $brick_main_image_open_type == 'blank'){
			$target = '_blank'; 
		}
	}
	
	return $target;
}
add_filter( 'brick_main_image_link_target', 'mp_stacks_mil_brick_main_image_link_target', 10, 2);