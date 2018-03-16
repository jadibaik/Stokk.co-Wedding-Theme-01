<?php

/*
Widget Name: Stokk Gallery widget
Description: -
Author: Stokk.co Team
Author URI: http://stokk.co
*/

class Stokk_Gallery_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'stokk-gallery-widget',
			__('Stokk Gallery Widget', 'hello-world-widget-text-domain'),
			array(
				'description' => __('A Stokk Gallery widget.', 'hello-world-widget-text-domain'),
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
		return 'stokk-gallery-widget-template';
	}

	function get_style_name($instance) {
		return 'stokk-gallery-widget-style';
	}

}

siteorigin_widget_register('stokk-gallery-widget', __FILE__, 'Stokk_Gallery_Widget');