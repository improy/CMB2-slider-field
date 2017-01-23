function cmb2_render_slider( $field, $field_escaped_value, $field_object_id, $field_object_type, $field_type_object ){

	// Only enqueue scripts if field is used.
	//$this->setup_admin_scripts();
	$slider = '<div class="cmb2-slider"></div>';
	$slider .= $field_type_object->input( array(
		'type'       => 'hidden',
		'class'      => 'cmb2-slider-value',
		'readonly'   => 'readonly',
		'data-start' => absint( $field_escaped_value ),
		'data-min'   => $field->min(),
		'data-step'   => $field->step(),
		'data-max'   => $field->max(),
		'desc'       => '',
	) );

	$slider .= '<span class="cmb2-slider-value-display">'. $field->value_label() .' <span class="cmb2-slider-value-text"></span></span>';
	$slider .= $field_type_object->_desc( true );
	echo $slider;
}add_action( 'cmb2_render_slider', 'cmb2_render_slider', 10, 5 );
