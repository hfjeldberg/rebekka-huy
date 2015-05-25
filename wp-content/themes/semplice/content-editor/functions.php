<?php

#---------------------------------------------------------------------------#
# Meta Box																	#
#---------------------------------------------------------------------------# 

// Re-define meta box path and URL
define( 'RWMB_URL', trailingslashit( get_stylesheet_directory_uri() . '/includes/meta-box' ) );
define( 'RWMB_DIR', trailingslashit( get_template_directory() . '/includes/meta-box' ) );

// Include the meta box script
require_once RWMB_DIR . 'meta-box.php';

// Include content editor meta boxes
require get_template_directory() . '/content-editor/meta_boxes.php';

// content editor ajax
if(is_admin()) {
	function semplice_ce_ajax() {
		if (isset($_REQUEST)) {
			// include content editor
			require get_template_directory() . '/content-editor/editor.php';
		}
		// stop script here after ajax request
		die();
	}
}

add_action( 'wp_ajax_semplice_ce_ajax', 'semplice_ce_ajax' );

#---------------------------------------------------------------------------#
# Content Editor Quickstart													#
#---------------------------------------------------------------------------# 

// add the content editor to row actions
function ce_link_pages($actions, $page) {

	global $post;
	if(get_post_type($post->ID) === 'page') {
		$actions['ce_link'] = "<a class='smp_ce_link' href='" . admin_url( "post.php?post=$post->ID&action=edit&smp_ce=true") . "'>" . __( 'Content Editor', 'semplice' ) . "</a>";
	}
 
   return $actions;
}

function ce_link_portfolio($actions, $project) {

	global $post;
	if(get_post_type($post->ID) === 'work') {
		 $actions['ce_link'] = "<a class='smp_ce_link' href='" . admin_url( "post.php?post=$post->ID&action=edit&smp_ce=true") . "'>" . __( 'Content Editor', 'semplice' ) . "</a>";
	}
 
   return $actions;
}

add_filter('page_row_actions', 'ce_link_pages', 10, 2);
add_filter('post_row_actions', 'ce_link_portfolio', 10, 2);

#---------------------------------------------------------------------------#
# Container Styles															#
#---------------------------------------------------------------------------# 

// container styles
function container_styles($styles) {

	$css = '';

	if(!empty($styles['padding-top']) && $styles['padding-top'] !== '0px') {
		$css .= 'padding-top: ' . $styles['padding-top'] . ';';
	}
	if(!empty($styles['padding-bottom']) && $styles['padding-bottom'] !== '0px') {
		$css .= 'padding-bottom: ' . $styles['padding-bottom'] . ';';
	}
	if(!empty($styles['padding-right']) && $styles['padding-right'] !== '0px') {
		$css .= 'padding-right: ' . $styles['padding-right'] . ';';
	}
	if(!empty($styles['padding-left']) && $styles['padding-left'] !== '0px') {
		$css .= 'padding-left: ' . $styles['padding-left'] . ';';
	}
	if(!empty($styles['background-image'])) {			
		$css .= 'background-image: url(' . $styles['background-image'] . ');';
		$css .= 'background-repeat: ' . $styles['background-repeat'] . ';';
		if(!empty($styles['background-size']) && $styles['background-size'] === 'cover') {
			$css .= 'background-size: cover;';	
		} else if(!empty($styles['background-repeat']) && $styles['background-repeat'] !== 'no-repeat') {
			$css .= 'background-size: auto !important;';
		}
		if(!empty($styles['background-position'])) {
			$css .= 'background-position: ' . $styles['background-position'] . ';';
		} else {
			$css .= 'background-position: top center;';
		}
	}
	if(preg_match('/^#[a-f0-9]{6}$/i', $styles['background-color'])) {
		$has_color = true;
	} 
	if(!empty($has_color) && $has_color === true) {
		$css .= 'background-color: ' . $styles['background-color'] . ';';
	} else {
		$css .= 'background-color: transparent;';
	}
	
	// fwt border bottom
	if(!empty($styles['border-bottom'])) {
		$css .= 'border-color: ' . $styles['border-bottom'] . ' !important;';
	} 

	return $css;
}

#---------------------------------------------------------------------------#
# Modules																	#
#---------------------------------------------------------------------------# 

// include modules class
require get_template_directory() . '/content-editor/modules.php';

// ce shortcode whitelist
if(is_admin()) {	

	add_filter('ce_shortcodes', 'ce_shortcode_whitelist', 0, 2);

	function ce_shortcode_whitelist($content, $post_id) {
		
		// modules array
		$modules_array = json_decode(get_post_meta( $post_id, 'semplice_ce_modules', true));
	
		// whitelist
		$ce_shortcode_whitelist = array();

		if(isset($modules_array)) {
			foreach($modules_array as $module) {
				$ce_shortcode_whitelist[] = 'ce_' . $module;
			}
		}

		global $shortcode_tags;

		foreach($shortcode_tags as $tag => $func) {
			if(!in_array($tag, $ce_shortcode_whitelist)) {
				remove_shortcode($tag);
			}
		}

		// manually remove some shortcodes from the whitelist
		remove_shortcode('ce_code');

		// Return the post content
		return $content;
	}
}

?>