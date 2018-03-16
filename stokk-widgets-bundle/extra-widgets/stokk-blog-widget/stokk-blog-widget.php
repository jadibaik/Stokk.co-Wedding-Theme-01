<?php
/*
Widget Name: Stokk Blog widget
Description: -
Author: Stokk.co Team
Author URI: http://stokk.co
*/

class Stokk_Blog_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'stokk-blog-widget',
			__('Stokk Blog Widget', 'hello-world-widget-text-domain'),
			array(
				'description' => __('A Stokk Blog widget.', 'hello-world-widget-text-domain'),
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
		return 'stokk-blog-widget-template';
	}

	function get_style_name($instance) {
		return 'stokk-blog-widget-style';
	}

}

siteorigin_widget_register('stokk-blog-widget', __FILE__, 'Stokk_Blog_Widget');