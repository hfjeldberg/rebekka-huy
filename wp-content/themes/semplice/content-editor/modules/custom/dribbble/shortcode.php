<?php

/*
 * dribbble shortcode
 * semplice.theme
 */

 
class ce_dribbble {

	// public vars
	public $dribbble;

	function __construct() {
	
		// add shortcode
		add_shortcode('ce_dribbble', array(&$this, 'ce_dribbble_shortcode'));
		
		// include dribbble api
		if( !class_exists('dribbble') ) {
	
			// include dribbble wrapper
			include get_template_directory() . '/content-editor/modules/custom/dribbble/dribbble.php';

			// new wrapper class instance
			$this->dribbble = new dribbble();

		}

	}
	
	function ce_dribbble_shortcode($atts) {
		
		// attributes
		extract( shortcode_atts(
			array(
				'id'							=> '',
				'shots'							=> '',
				'is_fluid'						=> '',
				'hor_gutter'					=> '',
				'ver_gutter'					=> '',
				'remove_gutter' 				=> '',
				'dribbble_id' 					=> '',
				'span'		 					=> '',
				'target'						=> ''
			), $atts )
		);
		
		//output
		$e = '';
		
		// content
		$content = '';
		
		// dribbble username
		if(empty($dribbble_id)) {
			$dribbble_id = 'vanschneider';
		}
		
		// get boolean values
		$is_fluid = filter_var($is_fluid, FILTER_VALIDATE_BOOLEAN);
		$remove_gutter = filter_var($remove_gutter, FILTER_VALIDATE_BOOLEAN);
		
		// get 15 shots if shots is empty
		if(empty($shots)) {
			$shots = 15;
		}	
		
		// shots array
		$shots = $this->dribbble->getPlayerShots($dribbble_id, 1, $shots);
		
		// is remove gutter?
		if($remove_gutter) {
			$pre = 'no-gutter-';
			$thumb_class = 'remove-gutter-yes masonry-';
		} else {
			$pre = '';
			$thumb_class = '';
		}
		
		// index
		$index = 0;

		// holder start
		$e .= '<div id="masonry-' . $id . '-holder">';
		
		// get shots
		foreach ($shots->shots as $shot) {
		
			if($target === 'lightbox') {
				$href = $shot->image_url;
				$href_target = 'data-rel="lightbox"';
			} else {
				$href = $shot->url;
				$href_target = 'target="_blank"';
			}
		
			// add thumb to holder
			$e .= '<div class="grid-item ' . $thumb_class . $span . ' masonry-' . $id . '-item masonry-' . $id . '-item-' . $index . '">';
			$e .= '<a href="' . $href . '" ' . $href_target . '><img src="' . $shot->image_url . '"></a>';
			$e .= '</div>';
			
			// increment index
			$index ++;
		}
		
		// holder end
		$e .= '</div>';
		
		// get grid
		$e .= semplice_grid($id, $content, $is_fluid, $remove_gutter, $index, $pre);
		
		
		return $e;
	}
}

// call instance of ce_dribbble
global $ce_dribbble;
$ce_dribbble = new ce_dribbble();

?>