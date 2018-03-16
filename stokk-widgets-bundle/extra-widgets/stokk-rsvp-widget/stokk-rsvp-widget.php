<?php 

/*
Widget Name: Stokk RSVP widget
Description: -
Author: Stokk.co Team
Author URI: http://stokk.co
*/

class Stokk_Rsvp_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'stokk-rsvp-widget',
			__('Stokk RSVP Widget', 'stokk-rsvp-widget-text-domain'),
			array(
				'description' => __('A Stokk RSVP widget.', 'stokk-rsvp-widget-text-domain'),
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
			'rsvp_left' => array(
				'type' => 'section',
				'label' => __('Left RSVP', 'so-widgets-bundle'),
				'hide' => false,
				'fields' => array(
					'rsvp_icon' => array(
						'type' => 'media',
						'label' => __('Icon RSVP', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'rsvp_title' => array(
						'type' => 'text',
						'label' => __('Title Groom', 'so-widgets-bundle'),
						'default' => 'CEREMONY L',
					),
					'rsvp_subtitle' => array(
						'type' => 'text',
						'label' => __('Subtitle RSVP', 'so-widgets-bundle'),
						'default' => 'Wedding L',
					),
					'rsvp_content' => array(
						'type' => 'text',
						'label' => __('Content RSVP', 'so-widgets-bundle'),
						'default' => 'We ve got our foolproof tech tip to know EXACTLY how to bring more visitors. L',
					),
					'rsvp_one_content_title' => array(
						'type' => 'text',
						'label' => __('Title One Content RSVP', 'so-widgets-bundle'),
						'default' => 'SAVANNAH RIVERBOOT CRUISES L',
					),
					'rsvp_one_content_subtitle' => array(
						'type' => 'text',
						'label' => __('Subtitle One Content RSVP', 'so-widgets-bundle'),
						'default' => '9 E River St, Savannah, GA 31401, USA L',
					),
					'rsvp_one_icon' => array(
						'type' => 'media',
						'label' => __('Icon Content One', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'rsvp_two_content_title' => array(
						'type' => 'text',
						'label' => __('Title One Content RSVP', 'so-widgets-bundle'),
						'default' => 'SAVANNAH RIVERBOOT CRUISES L',
					),
					'rsvp_two_content_subtitle' => array(
						'type' => 'text',
						'label' => __('Subtitle One Content RSVP', 'so-widgets-bundle'),
						'default' => '9 E River St, Savannah, GA 31401, USA L',
					),
					'rsvp_two_icon' => array(
						'type' => 'media',
						'label' => __('Icon Content two', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
				)
			),
			'rsvp_right' => array(
				'type' => 'section',
				'label' => __('Right RSVP', 'so-widgets-bundle'),
				'hide' => true,
				'fields' => array(
					'rsvp_icon' => array(
						'type' => 'media',
						'label' => __('Icon RSVP', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'rsvp_title' => array(
						'type' => 'text',
						'label' => __('Title RSVP', 'so-widgets-bundle'),
						'default' => 'CEREMONY R',
					),
					'rsvp_subtitle' => array(
						'type' => 'text',
						'label' => __('Subtitle RSVP', 'so-widgets-bundle'),
						'default' => 'Wedding R',
					),
					'rsvp_content' => array(
						'type' => 'text',
						'label' => __('Content RSVP', 'so-widgets-bundle'),
						'default' => 'We ve got our foolproof tech tip to know EXACTLY how to bring more visitors. R',
					),
					'rsvp_one_content_title' => array(
						'type' => 'text',
						'label' => __('Title One Content RSVP', 'so-widgets-bundle'),
						'default' => 'SAVANNAH RIVERBOOT CRUISES R',
					),
					'rsvp_one_content_subtitle' => array(
						'type' => 'text',
						'label' => __('Subtitle One Content RSVP', 'so-widgets-bundle'),
						'default' => '9 E River St, Savannah, GA 31401, USA R',
					),
					'rsvp_one_icon' => array(
						'type' => 'media',
						'label' => __('Icon Content One', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'rsvp_two_content_title' => array(
						'type' => 'text',
						'label' => __('Title One Content RSVP', 'so-widgets-bundle'),
						'default' => 'SAVANNAH RIVERBOOT CRUISES R',
					),
					'rsvp_two_content_subtitle' => array(
						'type' => 'text',
						'label' => __('Subtitle One Content RSVP', 'so-widgets-bundle'),
						'default' => '9 E River St, Savannah, GA 31401, USA R',
					),
					'rsvp_two_icon' => array(
						'type' => 'media',
						'label' => __('Icon Content two', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
				)
			),
			'button_link' => array(
				'type' => 'section',
				'label' => __('Button Link', 'so-widgets-bundle'),
				'hide' => true,
				'fields' => array(
					'link' => array(
						'type' => 'link',
						'label' => __('Some URL goes here', 'widget-form-fields-text-domain'),
						'default' => 'https://goo.gl/forms/Ebfh0bdRrrkDlpPa2'
					),
				),
				'fields' => array(
					'caption' => array(
						'type' => 'text',
						'label' => __('Button Caption', 'so-widgets-bundle'),
						'default' => 'RSPV NOW'
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
			'rsvp_right' => array(
				'rsvp_title'=>$instance['rsvp_right']['rsvp_title'],
				'rsvp_icon'=>$this->stokk_src_image($instance['rsvp_right']['rsvp_icon']),
				'rsvp_subtitle'=>$instance['rsvp_right']['rsvp_subtitle'],
				'rsvp_content'=>$instance['rsvp_right']['rsvp_content'],
				'rsvp_one_content_title'=>$instance['rsvp_right']['rsvp_one_content_title'],
				'rsvp_one_content_subtitle'=>$instance['rsvp_right']['rsvp_one_content_subtitle'],
				'rsvp_one_icon'=>$this->stokk_src_image($instance['rsvp_right']['rsvp_one_icon']),
				'rsvp_two_content_title'=>$instance['rsvp_right']['rsvp_two_content_title'],
				'rsvp_two_content_subtitle'=>$instance['rsvp_right']['rsvp_two_content_subtitle'],
				'rsvp_two_icon'=>$this->stokk_src_image($instance['rsvp_right']['rsvp_two_icon'])
			),

			'rsvp_left' => array(
				'rsvp_title'=>$instance['rsvp_left']['rsvp_title'],
				'rsvp_icon'=>$this->stokk_src_image($instance['rsvp_left']['rsvp_icon']),
				'rsvp_subtitle'=>$instance['rsvp_left']['rsvp_subtitle'],
				'rsvp_content'=>$instance['rsvp_left']['rsvp_content'],
				'rsvp_one_content_title'=>$instance['rsvp_left']['rsvp_one_content_title'],
				'rsvp_one_content_subtitle'=>$instance['rsvp_left']['rsvp_one_content_subtitle'],
				'rsvp_one_icon'=>$this->stokk_src_image($instance['rsvp_left']['rsvp_one_icon']),
				'rsvp_two_content_title'=>$instance['rsvp_left']['rsvp_two_content_title'],
				'rsvp_two_content_subtitle'=>$instance['rsvp_left']['rsvp_two_content_subtitle'],
				'rsvp_two_icon'=>$this->stokk_src_image($instance['rsvp_left']['rsvp_two_icon'])
			),

			'button_link' => array(
				'link'=>$instance['button_link']['link'],
				'caption'=>$instance['button_link']['caption']
			),
		);
	}

	function get_template_name($instance) {
		return 'stokk-rsvp-widget-template';
	}

	function get_style_name($instance) {
		return 'stokk-rsvp-widget-style';
	}

}

siteorigin_widget_register('stokk-rsvp-widget', __FILE__, 'Stokk_Rsvp_Widget');