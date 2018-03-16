<?php

/*
Widget Name: Stokk Carousel widget
Description: -
Author: Stokk.co Team
Author URI: http://stokk.co
*/

class Stokk_Carousel_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'stokk-carousel-widget',
			__('Stokk Carousel Widget', 'stokk-carousel-widget-text-domain'),
			array(
				'description' => __('A Stokk Carousel widget.', 'hello-world-widget-text-domain'),
				'panels_groups' => array('stokk'),
				'has_preview' => false,
			),
			array(),
			false,
			plugin_dir_path(__FILE__)
		);
	}

	function get_widget_form(){
		
		

		return array(

			'images' => array(
				'type' => 'repeater',
				'label' => __('Images', 'so-widgets-bundle'),
				'item_name'  => __( 'Image', 'so-widgets-bundle' ),
				'item_label' => array(
					'selector'     => "[name*='title']",
					'update_event' => 'change',
					'value_method' => 'val'
				),
				'fields' => array(
					'image' => array(
						'type' => 'media',
						'label' => __('Image Carousel', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'title' => array(
						'type' => 'text',
						'label' => __('Image title', 'so-widgets-bundle')
					),
					'url' => array(
						'type' => 'link',
						'label' => __('URL', 'so-widgets-bundle')
					),
					'new_window' => array(
						'type' => 'checkbox',
						'default' => false,
						'label' => __( 'Open in new window', 'so-widgets-bundle' ),
					),
				)
			),

			'display' => array(
				'type' => 'section',
				'label' => __('Display', 'so-widgets-bundle'),
				'fields' => array(
					'title_top' => array(
						'type' => 'text',
						'label' => __('Top small title', 'so-widgets-bundle')
					),
					'title' => array(
						'type' => 'text',
						'label' => __('Main title', 'so-widgets-bundle')
					),
					'title_bottom' => array(
						'type' => 'text',
						'label' => __('Bottom title', 'so-widgets-bundle')
					),
				)
			)
		);
	}

	function get_template_variables( $instance, $args ) {
		$images = isset( $instance['images'] ) ? $instance['images'] : array();
		
		foreach ( $images as $image ) {
			$link_atts = empty( $image['link_attributes'] ) ? array() : $image['link_attributes'];
			if ( ! empty( $image['new_window'] ) ) {
				$link_atts['target'] = '_blank';
				$link_atts['rel'] = 'noopener noreferrer';
			}
			$image['link_attributes'] = $link_atts;
		}
		
		return array(
			'images' => $images,
			'title_top' => $instance['display']['title_top'],
			'title' => $instance['display']['title'],
			'title_bottom' => $instance['display']['title_bottom'],
			'slide_badge' => $instance['display']['slide_badge'],
		);
	}

	function get_template_name($instance) {
		return 'stokk-carousel-widget-template';
	}

	function get_style_name($instance) {
		
		return 'stokk-carousel-widget-style';
	}

}

siteorigin_widget_register('stokk-carousel-widget', __FILE__, 'Stokk_Carousel_Widget');