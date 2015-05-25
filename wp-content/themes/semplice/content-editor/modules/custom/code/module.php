<?php

/*
 * dummy module
 * semplice.theme
 */

if($this->edit_mode) {
	
	// output
	$e = '';

	// edit head
	$this->edit_head($values);

	$yes_no = array(
		'no' => 'No',
		'yes' => 'Yes'
	);
	
	if(!$values['in_column'] && $this->edit_mode !== 'single-edit') {
		// options head
		echo '<div class="row"><div class="span12 options">';
	} else {
		echo '<div class="options">';
	}

	$this->option_seperator();
	
	$this->get_option('select', 'Is this a shortcode?', 'is_shortcode', 'no', $yes_no, $values);
	
	$this->get_option('select', 'Use Responsive Video', 'use_responsive_video', 'no', $yes_no, $values);
	
	echo '<div class="clear"></div>';
	
	// close options
	if(!$values['in_column'] && $this->edit_mode !== 'single-edit') {
		echo '</div></div>';
	} else {
		echo '</div>';
	}
	
	if(!$content) {
		$content = '<!-- Paste your HTML / JS Code here. Please note that this is a module to embed code not to showcase it -->';
	}
	
	// content area
	$e .= '
		<textarea class="is-content textarea-code">' . $content . '</textarea>
	';
	
		
	// custom module id
	$this->custom_module_id('code', $values);
	
	// display paragraph
	echo $e;
	
	// edit foot
	$this->edit_foot($values);
		
} else {
	// output
	$e = '';
	
	// fluid
	$values['has_container'] = false;
	
	// edit content
	$edit_content = '<div class="code-edit"><div class="is-code"></div></div>';
	
	// wrap around grid if needed
	if(!$values['in_column']) {
		$values['has_container'] = true;
		$edit_content = '<div class="span12">' . $edit_content . '</div>';
	}
	
	$this->view_head($values);

	if(!$values['in_column']) {
		$values['single_edit_column_id'] = false;
		$values['single_edit_content_id'] = false;
	} else {
		// multi column container id
		$values['id'] = $this->id;
	}

	$e .= $edit_content;
	
	// is this a shortcode?
	if($values['options']['is_shortcode'] !== 'yes') {
		// unexecuted shortcode
		$content = '[ce_code content_id="' . $values['id'] . '" post_id="' . $values['post_id'] . '" use_responsive_video="' . $values['options']['use_responsive_video'] . '" in_column="' . $values['in_column'] . '" column_id="' . $values['single_edit_column_id'] . '" column_content_id="' . $values['single_edit_content_id'] . '"][/ce_code]';
	}
	
	if($values['options']['use_responsive_video'] === 'yes') {
		$content = '<div class="responsive-video">' . $content . '</div>';
	}
	
	if(!$values['in_column']) {
		$content = '<div class="span12">' . $content . '</div>';
	}
	
	// unexecuted shortcode / code
	$e .= '<div class="code-content">' . $content . '</div>';
	
	// output
	echo $e;
	
	// cs footer
	$this->view_foot($values);

}
