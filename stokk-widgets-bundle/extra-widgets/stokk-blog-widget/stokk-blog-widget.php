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
			array(),
			false,
			plugin_dir_path(__FILE__)
		);
	}

	function get_widget_form(){
		return array(
			'images_blog' => array(
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
						'label' => __('Title', 'so-widgets-bundle'),
						'default' => 'PERFECT TIME WITH LOVELY COUPLE'
					),
					'subtitle' => array(
						'type' => 'text',
						'label' => __('Subitle', 'so-widgets-bundle'),
						'default' => 'Our Love Notes'
					),
					'content' => array(
						'type' => 'tinymce',
						'label' => __( 'Description', 'so-widgets-bundle' ),
						'default' => ' As summer approached, we learned that we would be interning across the street from each other. ',
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
					'url' => array(
						'type' => 'link',
						'label' => __('Button URL', 'so-widgets-bundle'),
						'default' => 'www.example.com'
					),
					'button_caption' => array(
						'type' => 'text',
						'label' => __('Button Caption', 'so-widgets-bundle'),
						'default' => 'READ ALL STORIES'
					),
					'new_window' => array(
						'type' => 'checkbox',
						'default' => false,
						'label' => __( 'Open in new window', 'so-widgets-bundle' ),
					),
				)
			),
		);
	}

	function stokk_src_image($instance){
		if ( function_exists( 'wp_get_attachment_image_srcset' ) ) {
			$srcset = wp_get_attachment_image_src( $instance,$instance['size']);
			return $srcset;
		}else{
			return $instance;
		}
	}

	function get_template_variables( $instance, $args ) {

		return array(
			'images' => array(
				'list'=>$instance['images_blog'],
			),
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