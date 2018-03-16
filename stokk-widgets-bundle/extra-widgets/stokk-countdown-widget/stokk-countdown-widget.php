<?php

/*
Widget Name: Stokk Countdown widget
Description: -
Author: Stokk.co Team
Author URI: http://stokk.co
*/

class Stokk_Countdown_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'stokk-countdown-widget',
			__('Stokk Countdown Widget', 'stokk-countdown-widget-text-domain'),
			array(
				'description' => __('A Stokk Countdown widget.', 'stokk-countdown-widget-text-domain'),
				'panels_groups' => array('stokk')
			),
			array(

			),
			array(
				'days' => array(
					'type' => 'text',
					'label' => __('Days', 'stokk-countdown-widget-text-domain'),
					'default' => '7'
				),
				'hours' => array(
					'type' => 'text',
					'label' => __('Hours', 'stokk-countdown-widget-text-domain'),
					'default' => '60'
				),
				'mins' => array(
					'type' => 'text',
					'label' => __('Mins', 'stokk-countdown-widget-text-domain'),
					'default' => '60'
				),
				'second' => array(
					'type' => 'text',
					'label' => __('Second', 'stokk-countdown-widget-text-domain'),
					'default' => '60'
				),
			),
			plugin_dir_path(__FILE__)
		);
	}

	function get_template_name($instance) {
		return 'stokk-countdown-widget-template';
	}

	function get_style_name($instance) {
		return 'stokk-countdown-widget-style';
	}

}

siteorigin_widget_register('stokk-countdown-widget', __FILE__, 'Stokk_Countdown_Widget');