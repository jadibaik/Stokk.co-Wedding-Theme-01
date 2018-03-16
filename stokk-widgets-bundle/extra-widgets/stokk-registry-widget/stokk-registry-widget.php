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
			__('Stokk Registry Widget', 'hello-world-widget-text-domain'),
			array(
				'description' => __('A Stokk Registry widget.', 'hello-world-widget-text-domain'),
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
		return 'stokk-registry-widget-template';
	}

	function get_style_name($instance) {
		return 'stokk-registry-widget-style';
	}

}

siteorigin_widget_register('stokk-registry-widget', __FILE__, 'Stokk_Registry_Widget');