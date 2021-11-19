<?php
if (function_exists('acf_add_local_field_group')) :

	acf_add_local_field_group(array(
		'key' => 'group_6196649d60639',
		'title' => 'Information de l\'évènement',
		'fields' => array(
			array(
				'key' => 'field_619664cbba821',
				'label' => 'Date de l\'évènement',
				'name' => 'event_date',
				'type' => 'date_picker',
				'instructions' => 'Définissez la date de l\'évènement',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'd/m/Y',
				'return_format' => 'j F Y',
				'first_day' => 1,
			),
			array(
				'key' => 'field_6196652eba822',
				'label' => 'Heure de l\'évènement',
				'name' => 'event_hour',
				'type' => 'time_picker',
				'instructions' => 'Définissez l\'heure de début de l\'évènement',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'H:i:s',
				'return_format' => 'H:i:s',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'event',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));

endif;
