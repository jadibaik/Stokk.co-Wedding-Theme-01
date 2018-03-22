<?php
/*
Widget Name: Stokk Tab-friend widget
Description: -
Author: Stokk.co Team 
Author URI: http://stokk.co
*/

class Stokk_tabFriend_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'stokk-tabfriend-widget',
			__('Stokk Tab-friend Widget', 'hello-world-widget-text-domain'),
			array(
				'description' => __('A Stokk Tab-friend widget.', 'hello-world-widget-text-domain'),
				'panels_groups' => array('stokk')
			),
			array(),
			false,
			plugin_dir_path(__FILE__)
		);
	}


	function get_widget_form(){
		return array(
			'brides_maid' => array(
				'type' => 'section',
				'label' => __('Tab Brides Maid', 'so-widgets-bundle'),
				'hide' => true,
				'fields' => array(
					'nav_title' => array(
						'type' => 'text',
						'label' => __('Tab Title', 'so-widgets-bundle'),
						'default' => 'BRIDES MAID',
					),
					'brides_maid_list' => array(
						'type' => 'repeater',
						'label' => __('Tab Brides Maid', 'so-widgets-bundle'),
						'item_name'  => __( 'Brides Maid', 'so-widgets-bundle' ),
						'item_label' => array(
							'selector'     => "[name*='name']",
							'update_event' => 'change',
							'value_method' => 'val'
						), 
						'fields' => array(
							'image' => array(
								'type' => 'media',
								'label' => __('Photo', 'so-widgets-bundle'),
								'library' => 'image',
								'fallback' => true,
							),
							'name' => array(
								'type' => 'text',
								'label' => __('Name', 'so-widgets-bundle'),
								'default' => 'EVELYN BREWER',
							),
							'status' => array(
								'type' => 'text',
								'label' => __('Status', 'so-widgets-bundle'),
								'default' => 'COUSIN',
							),
							'fb_link' => array(
								'type' => 'text',
								'label' => __('Facebook link', 'so-widgets-bundle'),
								'default' => 'www.facebook.com',
							),
							'tw_link' => array(
								'type' => 'text',
								'label' => __('Twitter link', 'so-widgets-bundle'),
								'default' => 'www.twitter.com',
							),
							'ig_link' => array(
								'type' => 'text',
								'label' => __('Instagram link', 'so-widgets-bundle'),
								'default' => 'www.instagram.com',
							),
						),
					),
					
				)
			),

			'friends_colleagues' => array(
				'type' => 'section',
				'label' => __('Tab Friends & Colleagues', 'so-widgets-bundle'),
				'hide' => true,
				'fields' => array(
					'nav_title' => array(
						'type' => 'text',
						'label' => __('Tab Title', 'so-widgets-bundle'),
						'default' => 'Friends & Colleagues',
					),
					'friends_colleagues_list' => array(
						'type' => 'repeater',
						'label' => __('Friends & Colleagues', 'so-widgets-bundle'),
						'item_name'  => __( 'Friends & Colleagues', 'so-widgets-bundle' ),
						'item_label' => array(
							'selector'     => "[name*='name']",
							'update_event' => 'change',
							'value_method' => 'val'
						), 
						'fields' => array(
							'image' => array(
								'type' => 'media',
								'label' => __('Photo', 'so-widgets-bundle'),
								'library' => 'image',
								'fallback' => true,
							),
							'name' => array(
								'type' => 'text',
								'label' => __('Name', 'so-widgets-bundle'),
								'default' => 'EVELYN BREWER',
							),
							'status' => array(
								'type' => 'text',
								'label' => __('Status', 'so-widgets-bundle'),
								'default' => 'COUSIN',
							),
							'fb_link' => array(
								'type' => 'text',
								'label' => __('Facebook link', 'so-widgets-bundle'),
								'default' => 'www.facebook.com',
							),
							'tw_link' => array(
								'type' => 'text',
								'label' => __('Twitter link', 'so-widgets-bundle'),
								'default' => 'www.twitter.com',
							),
							'ig_link' => array(
								'type' => 'text',
								'label' => __('Instagram link', 'so-widgets-bundle'),
								'default' => 'www.instagram.com',
							),
						),
					),
					
				)
			),

			'grooms_men' => array(
				'type' => 'section',
				'label' => __('Tab Grooms Men', 'so-widgets-bundle'),
				'hide' => true,
				'fields' => array(
					'nav_title' => array(
						'type' => 'text',
						'label' => __('Tab Title', 'so-widgets-bundle'),
						'default' => 'GROOMS MEN',
					),
					'grooms_men_list' => array(
						'type' => 'repeater',
						'label' => __('Tab GROOMS MEN', 'so-widgets-bundle'),
						'item_name'  => __( 'GROOMS MEN', 'so-widgets-bundle' ),
						'item_label' => array(
							'selector'     => "[name*='name']",
							'update_event' => 'change',
							'value_method' => 'val'
						), 
						'fields' => array(
							'image' => array(
								'type' => 'media',
								'label' => __('Photo', 'so-widgets-bundle'),
								'library' => 'image',
								'fallback' => true,
							),
							'name' => array(
								'type' => 'text',
								'label' => __('Name', 'so-widgets-bundle'),
								'default' => 'EVELYN BREWER',
							),
							'status' => array(
								'type' => 'text',
								'label' => __('Status', 'so-widgets-bundle'),
								'default' => 'COUSIN',
							),
							'fb_link' => array(
								'type' => 'text',
								'label' => __('Facebook link', 'so-widgets-bundle'),
								'default' => 'www.facebook.com',
							),
							'tw_link' => array(
								'type' => 'text',
								'label' => __('Twitter link', 'so-widgets-bundle'),
								'default' => 'www.twitter.com',
							),
							'ig_link' => array(
								'type' => 'text',
								'label' => __('Instagram link', 'so-widgets-bundle'),
								'default' => 'www.instagram.com',
							),
						),
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
		$brides_maid_list = isset( $instance['brides_maid']['brides_maid_list'] ) ? $instance['brides_maid']['brides_maid_list'] : array();
				
				foreach ( $brides_maid_list as $image ) {
					$link_atts = empty( $image['link_attributes'] ) ? array() : $image['link_attributes'];
					if ( ! empty( $image['new_window'] ) ) {
						$link_atts['target'] = '_blank';
						$link_atts['rel'] = 'noopener noreferrer';
					}
					$image['link_attributes'] = $link_atts;
				}
				return array(
					'brides_maid_list' => $brides_maid_list,
				);
		
		}

	function get_template_name($instance) {
		return 'stokk-tabfriend-widget-template';
	}

	function get_style_name($instance) {
		return 'stokk-tabfriend-widget-style';
	}

}

siteorigin_widget_register('stokk-tabfriend-widget', __FILE__, 'Stokk_tabFriend_Widget');