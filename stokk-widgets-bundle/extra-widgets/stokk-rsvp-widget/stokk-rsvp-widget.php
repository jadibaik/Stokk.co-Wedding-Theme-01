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
			'rsvp_right' => array(
				'type' => 'section',
				'label' => __('RSVP Right', 'so-widgets-bundle'),
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

					'subrsvp_a' => array(
						'type' => 'section',
						'label' => __('Address RSVP A', 'so-widgets-bundle'),
						'hide' => true,
						'fields' => array(
							'subrsvp_title' => array(
								'type' => 'text',
								'label' => __('Title Content RSVP', 'so-widgets-bundle'),
								'default' => 'SAVANNAH RIVERBOOT CRUISES A R',
							),
							'subrsvp_subtitle' => array(
								'type' => 'text',
								'label' => __('Subtitle Content RSVP', 'so-widgets-bundle'),
								'default' => '9 E River St, Savannah, GA 31401, USA A R',
							),
							'subrsvp_icon' => array(
								'type' => 'media',
								'label' => __('Icon Content', 'so-widgets-bundle'),
								'library' => 'image',
								'fallback' => true,
							),
						),
					),

					'subrsvp_b' => array(
						'type' => 'section',
						'label' => __('Address RSVP B', 'so-widgets-bundle'),
						'hide' => true,
						'fields' => array(
							'subrsvp_title' => array(
								'type' => 'text',
								'label' => __('Title Content RSVP', 'so-widgets-bundle'),
								'default' => 'SAVANNAH RIVERBOOT CRUISES B R',
							),
							'subrsvp_subtitle' => array(
								'type' => 'text',
								'label' => __('Subtitle Content RSVP', 'so-widgets-bundle'),
								'default' => '9 E River St, Savannah, GA 31401, USA B R',
							),
							'subrsvp_icon' => array(
								'type' => 'media',
								'label' => __('Icon Content', 'so-widgets-bundle'),
								'library' => 'image',
								'fallback' => true,
							),
						),
					),
				)
			),
			'rsvp_left' => array(
				'type' => 'section',
				'label' => __('RSVP Left', 'so-widgets-bundle'),
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
					'subrsvp_a' => array(
						'type' => 'section',
						'label' => __('Address RSVP A', 'so-widgets-bundle'),
						'hide' => true,
						'fields' => array(
							'subrsvp_title' => array(
								'type' => 'text',
								'label' => __('Title Content RSVP', 'so-widgets-bundle'),
								'default' => 'SAVANNAH RIVERBOOT CRUISES A L',
							),
							'subrsvp_subtitle' => array(
								'type' => 'text',
								'label' => __('Subtitle Content RSVP', 'so-widgets-bundle'),
								'default' => '9 E River St, Savannah, GA 31401, USA A L',
							),
							'subrsvp_icon' => array(
								'type' => 'media',
								'label' => __('Icon Content', 'so-widgets-bundle'),
								'library' => 'image',
								'fallback' => true,
							),
						),
					),
					'subrsvp_b' => array(
						'type' => 'section',
						'label' => __('Address RSVP B', 'so-widgets-bundle'),
						'hide' => true,
						'fields' => array(
							'subrsvp_title' => array(
								'type' => 'text',
								'label' => __('Title Content RSVP', 'so-widgets-bundle'),
								'default' => 'SAVANNAH RIVERBOOT CRUISES B L',
							),
							'subrsvp_subtitle' => array(
								'type' => 'text',
								'label' => __('Subtitle Content RSVP', 'so-widgets-bundle'),
								'default' => '9 E River St, Savannah, GA 31401, USA B L',
							),
							'subrsvp_icon' => array(
								'type' => 'media',
								'label' => __('Icon Content', 'so-widgets-bundle'),
								'library' => 'image',
								'fallback' => true,
							),
						),
					),
				)
			),
			'button_link' => array(
				'type' => 'section',
				'label' => __('Button Link', 'so-widgets-bundle'),
				'hide' => true,
				'fields' => array(
					'caption' => array(
						'type' => 'text',
						'label' => __('Button Caption', 'so-widgets-bundle'),
						'default' => 'RSPV NOW'
					),
					'link' => array(
						'type' => 'link',
						'label' => __('Some URL goes here', 'widget-form-fields-text-domain'),
						'default' => 'http://www.example.com'
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
				
				'subrsvp_title_a'=>$instance['rsvp_right']['subrsvp_a']['subrsvp_title'],
				'subrsvp_subtitle_a'=>$instance['rsvp_right']['subrsvp_a']['subrsvp_subtitle'],
				'subrsvp_icon_a'=>$this->stokk_src_image($instance['rsvp_right']['subrsvp_a']['subrsvp_icon']),
				
				'subrsvp_title_b'=>$instance['rsvp_right']['subrsvp_b']['subrsvp_title'],
				'subrsvp_subtitle_b'=>$instance['rsvp_right']['subrsvp_b']['subrsvp_subtitle'],
				'subrsvp_icon_b'=>$this->stokk_src_image($instance['rsvp_right']['subrsvp_b']['subrsvp_icon']),
			),

			'rsvp_left' => array(
				'rsvp_title'=>$instance['rsvp_left']['rsvp_title'],
				'rsvp_icon'=>$this->stokk_src_image($instance['rsvp_left']['rsvp_icon']),
				'rsvp_subtitle'=>$instance['rsvp_left']['rsvp_subtitle'],
				'rsvp_content'=>$instance['rsvp_left']['rsvp_content'],
				
				'subrsvp_title_a'=>$instance['rsvp_left']['subrsvp_a']['subrsvp_title'],
				'subrsvp_subtitle_a'=>$instance['rsvp_left']['subrsvp_a']['subrsvp_subtitle'],
				'subrsvp_icon_a'=>$this->stokk_src_image($instance['rsvp_left']['subrsvp_a']['subrsvp_icon']),
				
				'subrsvp_title_b'=>$instance['rsvp_left']['subrsvp_b']['subrsvp_title'],
				'subrsvp_subtitle_b'=>$instance['rsvp_left']['subrsvp_b']['subrsvp_subtitle'],
				'subrsvp_icon_b'=>$this->stokk_src_image($instance['rsvp_left']['subrsvp_b']['subrsvp_icon']),
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