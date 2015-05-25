<?php

/*
 * dribbble module
 * semplice.theme
 */
  
if($this->edit_mode) {
	
	// output
	$e = '';

	// edit head
	$this->edit_head($values);
	
	if(!$values['in_column'] && $this->edit_mode !== 'single-edit') {
		// options head
		echo '<div class="row"><div class="span12 options">';
	} else {
		echo '<div class="options">';
	}

	// arrays
	$is_fluid = array(
		'no' => 'No',
		'yes' => 'Yes',
	);
	
	$remove_gutter = array(
		'no' => 'No',
		'yes' => 'Yes',
	);
	
	$span = array(
		'span12' => '1 Image',
		'span6' => '2 Images',
		'span4' => '3 Images',
		'span3' => '4 Images',
		'span2' => '6 Images',
		'span1' => '12 Images'
	);
	
	$on_click = array(
		'lightbox' => 'Open in Lightbox',
		'dribbble' => 'Open in Dribbble (new site)'
	);
	
	// options
	$this->get_option('text', 'Dribbble Username', 'dribbble_id', '', '', $values);
	
	$this->get_option('text', 'Number of Shots', 'shots', '15', '10', $values);
	
	$this->get_option('select', 'Fluid Grid', 'is_fluid', 'no', $is_fluid, $values);
	
	$this->get_option('select', 'Remove Gutter', 'remove_gutter', 'no', $remove_gutter, $values);
	
	$this->get_option('select', 'Images per Row', 'span', '3', $span, $values);
	
	$this->get_option('select', 'On Click Action', 'target', 'lightbox', $on_click, $values);
	
	// custom module id
	$this->custom_module_id('dribbble', $values);
	
	echo '<div class="clear"></div>';
	
	// close options
	if($values['content_type'] !== 'column-content-audio') {
		echo '</div></div>';
	} else {
		echo '</div>';
	}
	
	// display paragraph
	echo $e;
	
	// edit foot
	$this->edit_foot($values);
		
} else {

	// output
	$e = '';
	
	// fluid
	$values['has_container'] = false;
	
	$this->view_head($values);
	
	// shortcode wrapper start
	$e .= '<div class="is-shortcode">';
	
	// ce grid open
	$e .= '<div class="executed">' . do_shortcode('[ce_dribbble id="' . $values['id'] . '" shots="' . $values['options']['shots'] . '" dribbble_id="' . $values['options']['dribbble_id'] . '" span="' . $values['options']['span'] . '" is_fluid="' . $values['options']['is_fluid'] . '" remove_gutter="' . $values['options']['remove_gutter'] . '" target="' . $values['options']['target'] . '"][/ce_dribbble]') . '</div>';

	// unexecuted shortcode
	$e .= '<div class="unexecuted">[unex_ce_dribbble id="' . $values['id'] . '" shots="' . $values['options']['shots'] . '" dribbble_id="' . $values['options']['dribbble_id'] . '" span="' . $values['options']['span'] . '" is_fluid="' . $values['options']['is_fluid'] . '" remove_gutter="' . $values['options']['remove_gutter'] . '" target="' . $values['options']['target'] . '"][/ce_dribbble]</div>';
	
	// shortcode wrapper close
	$e .= '</div>';
	
	// output
	echo $e;
	
	// cs footer
	$this->view_foot($values);

}
