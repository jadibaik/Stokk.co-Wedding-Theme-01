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
						'label' => __('Blog Title', 'so-widgets-bundle')
					),
					'content' => array(
						'type' => 'tinymce',
						'label' => __( 'Description', 'so-widgets-bundle' ),
						'default' => 'As summer approached, we learned that we would be interning across the street from each other. You can read our love story from each other and give us some comments would great, cheers! HAPPY WEDDING DAY, Wish you all the best MIKE - BROTHERS',
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
						'label' => __('Button URL', 'so-widgets-bundle')
					),
					'button_capton' => array(
						'type' => 'text',
						'label' => __('Button Caption', 'so-widgets-bundle'),
						'default' => 'READ ALL STORIES',
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

	function get_template_variables( $instance, $args ) {
		$images_blog = isset( $instance['images_blog'] ) ? $instance['images_blog'] : array();
		
		foreach ( $images_blog as $image ) {
			$link_atts = empty( $image['link_attributes'] ) ? array() : $image['link_attributes'];
			if ( ! empty( $image['new_window'] ) ) {
				$link_atts['target'] = '_blank';
				$link_atts['rel'] = 'noopener noreferrer';
			}
			$image['link_attributes'] = $link_atts;
		}
			
			return array(
				'images_blog' => $images_blog,
				'content' => $instance['images_blog']['content'],
				'url' => $instance['images_blog']['url'],
				'button_caption' => $instance['images_blog']['button_caption'],
			);

		foreach ($images_blog as $content) {
			$link_cont = empty($content['link_content']) ? array() : $content['link_content'];
			if ( ! empty( $content['new_window'])){
				$link_cont['target'] = '_blank';
				$link_cont['rel'] = 'noopener noreferrer';
			}
			$content['link_content'] = $link_cont;
		}
	}

	function get_template_name($instance) {
		return 'stokk-blog-widget-template';
	}

	function get_style_name($instance) {
		return 'stokk-blog-widget-style';
	}

}

siteorigin_widget_register('stokk-blog-widget', __FILE__, 'Stokk_Blog_Widget');