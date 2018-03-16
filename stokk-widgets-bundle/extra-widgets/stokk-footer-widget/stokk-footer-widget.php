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
			__('Stokk Footer Widget', 'hello-world-widget-text-domain'),
			array(
				'description' => __('A Stokk Footer widget.', 'hello-world-widget-text-domain'),
				'panels_groups' => array('stokk')
			),
			array(

			),
			array(
				'text' => array(
					'type' => 'text',
					'label' => __('Hello world! goes here.', 'hello-world-widget-text-domain'),
					'default' => 'Hello world!'
				),
			),
			plugin_dir_path(__FILE__)
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