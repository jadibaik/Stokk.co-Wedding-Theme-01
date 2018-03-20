<?php

/*
Widget Name: Stokk Registry widget
Description: -
Author: Stokk.co Team
Author URI: http://stokk.co
*/

class Stokk_Registry_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'stokk-registry-widget',
			__('Stokk Registry Widget', 'stokk-registry-widget-text-domain'),
			array(
				'description' => __('A Stokk Registry widget.', 'stokk-registry-widget-text-domain'),
				'panels_groups' => array('stokk')
			),
			array(),
			false,
			
			plugin_dir_path(__FILE__)
		);
	}

	function get_widget_form(){
		return array(
			'registry' => array(
				'type' => 'section',
				'label' => __('Registry', 'so-widgets-bundle'),
				'hide' => true,
				'fields' => array(
					'registry_title' => array(
						'type' => 'text',
						'label' => __('Registry Title', 'so-widgets-bundle'),
						'default' => 'Registry',
					),
					'registry_subtitle' => array(
						'type' => 'text',
						'label' => __('Registry Subtitle', 'so-widgets-bundle'),
						'default' => 'SUPPORT OUR NEW FAMILY',
					),
					'registry_repeater' => array(
						'type' => 'repeater',
						'label' => __( 'Registry Icons' , 'so-widgets-bundle' ),
						'item_name'  => __( 'Registry Icon', 'so-widgets-bundle' ),
						'item_label' => array(
							'selector'     => "[id*='label']",
							'update_event' => 'change',
							'value_method' => 'val'
						),
						'fields' => array(
							'repeat_icon' => array(
								'type' => 'media',
								'label' => __('Registry Icon', 'so-widgets-bundle'),
								'library' => 'image',
								'fallback' => true,
							),
							'label' => array(
								'type' => 'text',
								'label' => __('Label Icon', 'so-widgets-bundle'),
							),
						)
					)
				)
			),
			'testimonial' => array(
				'type' => 'section',
				'label' => __('Testimonial', 'so-widgets-bundle'),
				'hide' => true,
				'fields' => array(
					'logo' => array(
						'type' => 'media',
						'label' => __('Logo Testimonial', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'description' => array(
						'type' => 'tinymce',
						'label' => __( 'Testimonial Description', 'so-widgets-bundle' ),
						'default' => 'As summer approached, we learned that we would be interning across the street from each other. You can read our love story from each other and give us some comments would great, cheers! HAPPY WEDDING DAY, Wish you all the best <br><br>MIKE - BROTHERS',
						'rows' => 10,
						'default_editor' => 'html',
						'button_filters' => array(
							'mce_buttons' => array( $this, 'filter_mce_buttons' ),
							'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
							'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
							'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
							'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
						),
					),
				),
			),
		);
	}

	function get_template_name($instance) {
		return 'stokk-registry-widget-template';
	}

	function get_style_name($instance) {
		return 'stokk-registry-widget-style';
	}

}

siteorigin_widget_register('stokk-registry-widget', __FILE__, 'Stokk_Registry_Widget');