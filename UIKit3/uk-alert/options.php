<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'message' => array(
		'label' => __( 'Текст:', '{domain}' ),
		'desc'  => __( 'Текст', '{domain}' ),
		'type'  => 'wp-editor',
		'value' => __( '', '{domain}' ),
	),
	'style'   => array(
		'label'   => __( 'Тип alert:', '{domain}' ),
		'desc'    => __( 'alert', '{domain}' ),
		'type'    => 'select',
		'choices' => array(
			'uk-alert-primary' => __( 'primary', '{domain}' ),
			'uk-alert-success'    => __( 'success', '{domain}' ),
			'uk-alert-warning'    => __( 'warning', '{domain}' ),
			'uk-alert-danger'  => __( 'danger', '{domain}' ),
			''  => __( 'default', '{domain}' ),
		)
	),

	'close' => array(
		'type'  => 'radio',
		'value' => '>',
		'label' => __('Button Close', '{domain}'),
		'choices' => array( 
			'>' => __('No', '{domain}'),
			'><a class="uk-alert-close" uk-close></a>' => __('Yes', '{domain}'),
		),
		'inline' => false,
	),
	'customstylewrap' => array(
		'label' => __('Custom container alert style', 'fw'),
		//'desc'  => __('Insert Custom Section Class', 'fw'),
		'type'  => 'text',
	)

);