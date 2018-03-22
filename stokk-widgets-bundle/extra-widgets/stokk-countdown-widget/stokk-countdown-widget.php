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
			__('Stokk Countdown Widget', 'hello-world-widget-text-domain'),
			array(
				'description' => __('A Stokk Countdown widget.', 'hello-world-widget-text-domain'),
				'panels_groups' => array('stokk')
			),
			array(),
			false,
			plugin_dir_path(__FILE__)
		);
	}

	function get_widget_form(){
		return array(
			'countdown' => array(
				'type' => 'section',
				'label' => __('Countdown', 'so-widgets-bundle'),
				'fields' => array(
					'days' => array(
						'type' => 'section',
						'label' => __('Days', 'so-widgets-bundle'),
						'hide' => true,
						'fields' => array(
							'day' => array(
								'type' => 'text',
								'label' => __('Day', 'so-widgets-bundle'),
								'default' => '99'
							),
							'day_desc' => array(
								'type' => 'text',
								'label' => __('Description', 'so-widgets-bundle'),
								'default' => 'DAYS'
							),
						)
					),
					'hours' => array(
						'type' => 'section',
						'label' => __('Hours', 'so-widgets-bundle'),
						'hide' => true,
						'fields' => array(
							'hour' => array(
								'type' => 'text',
								'label' => __('Hour', 'so-widgets-bundle'),
								'default' => '24'
							),
							'hour_desc' => array(
								'type' => 'text',
								'label' => __('Description', 'so-widgets-bundle'),
								'default' => 'HOURS'
							),
						)
					),					
					'mins' => array(
						'type' => 'section',
						'label' => __('Mins', 'so-widgets-bundle'),
						'hide' => true,
						'fields' => array(
							'min' => array(
								'type' => 'text',
								'label' => __('Min', 'so-widgets-bundle'),
								'default' => '60'
							),
							'min_desc' => array(
								'type' => 'text',
								'label' => __('Description', 'so-widgets-bundle'),
								'default' => 'MINS'
							),
						)
					),					
					'second' => array(
						'type' => 'section',
						'label' => __('Second', 'so-widgets-bundle'),
						'hide' => true,
						'fields' => array(
							'second' => array(
								'type' => 'text',
								'label' => __('Second', 'so-widgets-bundle'),
								'default' => '60'
							),
							'second_desc' => array(
								'type' => 'text',
								'label' => __('Description', 'so-widgets-bundle'),
								'default' => 'SECOND'
							),
						)
					)
				)
			)
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