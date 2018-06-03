<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'radioview' => array(
		'type'  => 'radio',
		'value' => 'card-columns',
		//'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Виды', '{domain}'),
		'desc'  => __('Выберете вид', '{domain}'),
		//'help'  => __('Help tip', '{domain}'),
    'choices' => array( // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
    	'card-columns' => __('card-columns', '{domain}'),
    	'card-deck' => __('card-deck', '{domain}'),
    	'card-group' => __('card-group', '{domain}'),
    	),
    // Display choices inline instead of list
    'inline' => true,
    ),

	'pt' => array(
		'type'  => 'select',
		'value' => false,
		//'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Отступы контейнера top', '{domain}'),
		'desc'  => __('Стандартные стили верхних отсступов bootstrap4 ', '{domain}'),
    //'help'  => __('Help tip', '{domain}'),
		'choices' => array(
			'' => 'none',
			'mt-0' => __('mt-0', '{domain}'),
			'mt-1' => __('mt-1', '{domain}'),
			'mt-2' => __('mt-2', '{domain}'),
			'mt-3' => __('mt-3', '{domain}'),
			'mt-4' => __('mt-4', '{domain}'),
			'mt-5' => __('mt-5', '{domain}'),
			'pt-0' => __('pt-0', '{domain}'),
			'pt-1' => __('pt-1', '{domain}'),
			'pt-2' => __('pt-2', '{domain}'),
			'pt-3' => __('pt-3', '{domain}'),
			'pt-4' => __('pt-4', '{domain}'),
			'pt-5' => __('pt-5', '{domain}'),
			),
		'no-validate' => false,
		),

	'pb' => array(
		'type'  => 'select',
		'value' => false,
		//'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Отступы контейнера bottom', '{domain}'),
		'desc'  => __('Стандартные стили нижних отсступов bootstrap4 ', '{domain}'),
    //'help'  => __('Help tip', '{domain}'),
		'choices' => array(
			'' => 'none',
			'mb-0' => __('mb-0', '{domain}'),
			'mb-1' => __('mb-1', '{domain}'),
			'mb-2' => __('mb-2', '{domain}'),
			'mb-3' => __('mb-3', '{domain}'),
			'mb-4' => __('mb-4', '{domain}'),
			'mb-5' => __('mb-5', '{domain}'),
			'pb-0' => __('pb-0', '{domain}'),
			'pb-1' => __('pb-1', '{domain}'),
			'pb-2' => __('pb-2', '{domain}'),
			'pb-3' => __('pb-3', '{domain}'),
			'pb-4' => __('pb-4', '{domain}'),
			'pb-5' => __('pb-5', '{domain}'),
			),
		'no-validate' => false,
		),

	'myclass' => array(
		'type'  => 'text',
		'value' => false,
    //'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Произвольный class', '{domain}'),
		'desc'  => __('Можно вписать любой произвольный class, например: d-flex', '{domain}'),
    //'help'  => __('Help tip', '{domain}'),
		),



	'cards' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Добавить Card', '{domain}' ),
		'popup-title'   => __( 'Add/Edit card', '{domain}' ),
		'desc'          => __( 'Создать новый Сard', '{domain}' ),
		'template'      => '{{=card_title}}',
		'popup-options' => array(

			'card_img' => array(
				'label' => __( 'Image', 'fw' ),
				'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
				'type'  => 'upload',
				),

			'card_title' => array(
				'type'  => 'text',
				'label' => __('Заголовок', '{domain}')
				),

			'title_number' => array(
				'type'  => 'select',
				'value' => true,
		//'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label' => __('Тип заголовка', '{domain}'),
				'desc'  => __('Тип заголовка играет огромную поль в SEO, поэтому при выборе будьте внимательны.', '{domain}'),
    //'help'  => __('Help tip', '{domain}'),
				'choices' => array(
					'h1' => 'h1',
					'h2' => __('h2', '{domain}'),
					'h3' => __('h3', '{domain}'),
					'h4' => __('h4', '{domain}'),
					'h5' => __('h5', '{domain}'),
					'h6' => __('h6', '{domain}'),
					),
				'no-validate' => false,
				),

			'card_price' => array(
				'type'  => 'text',
				'label' => __('Цена', '{domain}')
				),

			'card_content' => array(
				'type'  => 'textarea',
				'label' => __('Описание', '{domain}')
				),


			//'card_features' => array(
				//'type'  => 'addable-option',
				//'value' => false,
				//'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				//'label' => __('Параметры', '{domain}'),
				//'desc'  => __('Добавьте нужные параметры к Card', '{domain}'),
				//'help'  => __('Help tip', '{domain}'),
				//'option' => array( 'type' => 'text' ),
				//'add-button-text' => __('Добавить', '{domain}'),
				//'sortable' => true,
				//),

			'card_footer' => array(
				'type'  => 'textarea',
				'label' => __('Разное', '{domain}')
				),


			),
		),









	);