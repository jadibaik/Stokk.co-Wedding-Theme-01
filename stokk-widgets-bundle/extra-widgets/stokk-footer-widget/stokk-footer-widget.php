<?php

/*
Widget Name: Stokk Footer widget
Description: -
Author: Stokk.co Team
Author URI: http://stokk.co
*/

class Stokk_Footer_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'stokk-footer-widget',
			__('Stokk Footer Widget', 'stokk-footer-widget-text-domain'),
			array(
				'description' => __('A Stokk Footer widget.', 'stokk-footer-widget-text-domain'),
				'panels_groups' => array('stokk')
			),
			array(),
			false,
			plugin_dir_path(__FILE__)
		);
	}

	function get_widget_form(){
		return array(
			'footer' => array(
				'type' => 'section',
				'label' => __('Map', 'so-widgets-bundle'),
				'item_name'  => __( 'Map', 'so-widgets-bundle' ),
				'item_label' => array(
					'selector'     => "[name*='title']",
					'update_event' => 'change',
					'value_method' => 'val'
				),
				'fields' => array(
					'url' => array(
						'type' => 'link',
						'label' => __('Map URL', 'so-widgets-bundle')
					),
					'logo' => array(
						'type' => 'media',
						'label' => __('Footer Logo', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'background' => array(
						'type' => 'media',
						'label' => __('Background Image', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
				)
			),
		);
	}
	
	
	function get_template_variables( $instance, $args ) {

		return array(
			'footer' => array(
				'background'=>$this->stokk_src_image($instance['footer']['background']),
				'logo'=>$this->stokk_src_image($instance['footer']['logo']),
				'url'=>$instance['footer']['url']
			),
		);
	}

	function get_template_name($instance) {
		return 'stokk-footer-widget-template';
	}

	function get_style_name($instance) {
		return 'stokk-footer-widget-style';
	}

}

siteorigin_widget_register('stokk-footer-widget', __FILE__, 'Stokk_Footer_Widget');