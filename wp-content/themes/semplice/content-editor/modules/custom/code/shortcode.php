<?php

/*
 * code shortcode
 * semplice.theme
 */

 
class ce_code {

	function __construct() {
	
		// add shortcode
		add_shortcode('ce_code', array(&$this, 'ce_code_shortcode'));

	}
	
	function ce_code_shortcode($options) {

		$e = '';
		$content = '';
		
		// attributes
		extract( shortcode_atts(
			array(
				'content_id'			=> '',
				'post_id'				=> '',
				'use_responsive_video'	=> '',
				'in_column'				=> '',
				'column_id'				=> '',
				'column_content_id' 	=> '',
			), $options )
		);

		// content id
		$content_id = '#' . $content_id;
			
		$rom = json_decode(get_post_meta( $post_id, 'semplice_ce_rom', true), true);

		if(isset($rom)) {
			// get code block from rom
			if(!$in_column) {
				$content = $rom[$content_id]['content'];
			} else {
				if(isset($rom[$content_id])) {
					
					$content = $rom[$content_id]['columns'][$column_id][$column_content_id]['content'];
				}
			}
		}
		
		// code wrapper start
		$e .= '<div class="ce-code">';
		
		$e .= $content;
		
		// code wrapper close
		$e .= '</div>';
		
		// output es
		return $e;
	}
}

// call instance of module class
global $ce_code;
$ce_code = new ce_code();

?>