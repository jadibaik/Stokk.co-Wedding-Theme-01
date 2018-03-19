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
					'images_title' => array(
						'type' => 'text',
						'label' => __('Image Title', 'so-widgets-bundle')
					),
					'images_subtitle' => array(
						'type' => 'text',
						'label' => __('Image Subtitle', 'so-widgets-bundle')
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
					'title' => array(
						'type' => 'text',
						'label' => __('Title', 'so-widgets-bundle'),
						'default' => 'BEST MOMENT SHOOTS',
					),
					'subtitle' => array(
						'type' => 'text',
						'label' => __('Subtitle', 'so-widgets-bundle'),
						'default' => 'Photo Gallery',
					),
				)
			)
		);
	}

	function get_template_variables( $instance, $args ) {
		$images = isset( $instance['images'] ) ? $instance['images'] : array();
		$title = isset ( $instance['images_title'] ) ? $instance['images_title'] : array();
		
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
			'title' => $instance['display']['title'],
			'subtitle' => $instance['display']['subtitle'],
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