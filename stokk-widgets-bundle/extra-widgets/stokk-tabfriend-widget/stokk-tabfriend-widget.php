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
					'image_a' => array(
						'type' => 'media',
						'label' => __('Foto Brides A', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'name_a' => array(
						'type' => 'text',
						'label' => __('Name Brides A', 'so-widgets-bundle'),
						'default' => 'EVELYN BREWER',
					),
					'status_a' => array(
						'type' => 'text',
						'label' => __('Status Brides A', 'so-widgets-bundle'),
						'default' => 'COUSIN',
					),
					'fb_link_a' => array(
						'type' => 'text',
						'label' => __('Facebook link', 'so-widgets-bundle'),
						'default' => 'www.facebook.com',
					),
					'tw_link_a' => array(
						'type' => 'text',
						'label' => __('Twitter link', 'so-widgets-bundle'),
						'default' => 'www.twitter.com',
					),
					'ig_link_a' => array(
						'type' => 'text',
						'label' => __('Instagram link', 'so-widgets-bundle'),
						'default' => 'www.instagram.com',
					),
					'image_b' => array(
						'type' => 'media',
						'label' => __('Foto Brides B', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'name_b' => array(
						'type' => 'text',
						'label' => __('Name Brides B', 'so-widgets-bundle'),
						'default' => 'SHARON WARREN',
					),
					'status_b' => array(
						'type' => 'text',
						'label' => __('Status Brides B', 'so-widgets-bundle'),
						'default' => 'COUSIN',
					),
					'fb_link_b' => array(
						'type' => 'text',
						'label' => __('Facebook link', 'so-widgets-bundle'),
						'default' => 'www.facebook.com',
					),
					'tw_link_b' => array(
						'type' => 'text',
						'label' => __('Twitter link', 'so-widgets-bundle'),
						'default' => 'www.twitter.com',
					),
					'ig_link_b' => array(
						'type' => 'text',
						'label' => __('Instagram link', 'so-widgets-bundle'),
						'default' => 'www.instagram.com',
					),
					'image_c' => array(
						'type' => 'media',
						'label' => __('Foto Brides C', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'name_c' => array(
						'type' => 'text',
						'label' => __('Name Brides C', 'so-widgets-bundle'),
						'default' => 'SHIRLEY HUNT',
					),
					'status_c' => array(
						'type' => 'text',
						'label' => __('Status Brides C', 'so-widgets-bundle'),
						'default' => 'COUSIN',
					),
					'fb_link_c' => array(
						'type' => 'text',
						'label' => __('Facebook link', 'so-widgets-bundle'),
						'default' => 'www.facebook.com',
					),
					'tw_link_c' => array(
						'type' => 'text',
						'label' => __('Twitter link', 'so-widgets-bundle'),
						'default' => 'www.twitter.com',
					),
					'ig_link_c' => array(
						'type' => 'text',
						'label' => __('Instagram link', 'so-widgets-bundle'),
						'default' => 'www.instagram.com',
					),
					'image_d' => array(
						'type' => 'media',
						'label' => __('Foto Brides D', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'name_d' => array(
						'type' => 'text',
						'label' => __('Name Brides D', 'so-widgets-bundle'),
						'default' => 'CAROL BRADLEY',
					),
					'status_d' => array(
						'type' => 'text',
						'label' => __('Status Brides D', 'so-widgets-bundle'),
						'default' => 'COUSIN',
					),
					'fb_link_d' => array(
						'type' => 'text',
						'label' => __('Facebook link', 'so-widgets-bundle'),
						'default' => 'www.facebook.com',
					),
					'tw_link_d' => array(
						'type' => 'text',
						'label' => __('Twitter link', 'so-widgets-bundle'),
						'default' => 'www.twitter.com',
					),
					'ig_link_d' => array(
						'type' => 'text',
						'label' => __('Instagram link', 'so-widgets-bundle'),
						'default' => 'www.instagram.com',
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
					'image_a' => array(
						'type' => 'media',
						'label' => __('Foto Brides A', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'name_a' => array(
						'type' => 'text',
						'label' => __('Name Brides A', 'so-widgets-bundle'),
						'default' => 'JEFFREY WAGNER',
					),
					'status_a' => array(
						'type' => 'text',
						'label' => __('Status Brides A', 'so-widgets-bundle'),
						'default' => 'COUSIN',
					),
					'fb_link_a' => array(
						'type' => 'text',
						'label' => __('Facebook link', 'so-widgets-bundle'),
						'default' => 'www.facebook.com',
					),
					'tw_link_a' => array(
						'type' => 'text',
						'label' => __('Twitter link', 'so-widgets-bundle'),
						'default' => 'www.twitter.com',
					),
					'ig_link_a' => array(
						'type' => 'text',
						'label' => __('Instagram link', 'so-widgets-bundle'),
						'default' => 'www.instagram.com',
					),
					'image_b' => array(
						'type' => 'media',
						'label' => __('Foto Brides B', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'name_b' => array(
						'type' => 'text',
						'label' => __('Name Brides B', 'so-widgets-bundle'),
						'default' => 'SHARON WARREN',
					),
					'status_b' => array(
						'type' => 'text',
						'label' => __('Status Brides B', 'so-widgets-bundle'),
						'default' => 'COUSIN',
					),
					'fb_link_b' => array(
						'type' => 'text',
						'label' => __('Facebook link', 'so-widgets-bundle'),
						'default' => 'www.facebook.com',
					),
					'tw_link_b' => array(
						'type' => 'text',
						'label' => __('Twitter link', 'so-widgets-bundle'),
						'default' => 'www.twitter.com',
					),
					'ig_link_b' => array(
						'type' => 'text',
						'label' => __('Instagram link', 'so-widgets-bundle'),
						'default' => 'www.instagram.com',
					),
					'image_c' => array(
						'type' => 'media',
						'label' => __('Foto Brides C', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'name_c' => array(
						'type' => 'text',
						'label' => __('Name Brides C', 'so-widgets-bundle'),
						'default' => 'DANIEL WILLIAMS',
					),
					'status_c' => array(
						'type' => 'text',
						'label' => __('Status Brides C', 'so-widgets-bundle'),
						'default' => 'COUSIN',
					),
					'fb_link_c' => array(
						'type' => 'text',
						'label' => __('Facebook link', 'so-widgets-bundle'),
						'default' => 'www.facebook.com',
					),
					'tw_link_c' => array(
						'type' => 'text',
						'label' => __('Twitter link', 'so-widgets-bundle'),
						'default' => 'www.twitter.com',
					),
					'ig_link_c' => array(
						'type' => 'text',
						'label' => __('Instagram link', 'so-widgets-bundle'),
						'default' => 'www.instagram.com',
					),
					'image_d' => array(
						'type' => 'media',
						'label' => __('Foto Brides D', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'name_d' => array(
						'type' => 'text',
						'label' => __('Name Brides D', 'so-widgets-bundle'),
						'default' => 'CAROL BRADLEY',
					),
					'status_d' => array(
						'type' => 'text',
						'label' => __('Status Brides D', 'so-widgets-bundle'),
						'default' => 'COUSIN',
					),
					'fb_link_d' => array(
						'type' => 'text',
						'label' => __('Facebook link', 'so-widgets-bundle'),
						'default' => 'www.facebook.com',
					),
					'tw_link_d' => array(
						'type' => 'text',
						'label' => __('Twitter link', 'so-widgets-bundle'),
						'default' => 'www.twitter.com',
					),
					'ig_link_d' => array(
						'type' => 'text',
						'label' => __('Instagram link', 'so-widgets-bundle'),
						'default' => 'www.instagram.com',
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
					'image_a' => array(
						'type' => 'media',
						'label' => __('Foto Brides A', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'name_a' => array(
						'type' => 'text',
						'label' => __('Name Brides A', 'so-widgets-bundle'),
						'default' => 'JACOB MUNOZ',
					),
					'status_a' => array(
						'type' => 'text',
						'label' => __('Status Brides A', 'so-widgets-bundle'),
						'default' => 'COUSIN',
					),
					'fb_link_a' => array(
						'type' => 'text',
						'label' => __('Facebook link', 'so-widgets-bundle'),
						'default' => 'www.facebook.com',
					),
					'tw_link_a' => array(
						'type' => 'text',
						'label' => __('Twitter link', 'so-widgets-bundle'),
						'default' => 'www.twitter.com',
					),
					'ig_link_a' => array(
						'type' => 'text',
						'label' => __('Instagram link', 'so-widgets-bundle'),
						'default' => 'www.instagram.com',
					),
					'image_b' => array(
						'type' => 'media',
						'label' => __('Foto Brides B', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'name_b' => array(
						'type' => 'text',
						'label' => __('Name Brides B', 'so-widgets-bundle'),
						'default' => 'JEFFREY WAGNER',
					),
					'status_b' => array(
						'type' => 'text',
						'label' => __('Status Brides B', 'so-widgets-bundle'),
						'default' => 'COUSIN',
					),
					'fb_link_b' => array(
						'type' => 'text',
						'label' => __('Facebook link', 'so-widgets-bundle'),
						'default' => 'www.facebook.com',
					),
					'tw_link_b' => array(
						'type' => 'text',
						'label' => __('Twitter link', 'so-widgets-bundle'),
						'default' => 'www.twitter.com',
					),
					'ig_link_b' => array(
						'type' => 'text',
						'label' => __('Instagram link', 'so-widgets-bundle'),
						'default' => 'www.instagram.com',
					),
					'image_c' => array(
						'type' => 'media',
						'label' => __('Foto Brides C', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'name_c' => array(
						'type' => 'text',
						'label' => __('Name Brides C', 'so-widgets-bundle'),
						'default' => 'PHILIP BATES',
					),
					'status_c' => array(
						'type' => 'text',
						'label' => __('Status Brides C', 'so-widgets-bundle'),
						'default' => 'COUSIN',
					),
					'fb_link_c' => array(
						'type' => 'text',
						'label' => __('Facebook link', 'so-widgets-bundle'),
						'default' => 'www.facebook.com',
					),
					'tw_link_c' => array(
						'type' => 'text',
						'label' => __('Twitter link', 'so-widgets-bundle'),
						'default' => 'www.twitter.com',
					),
					'ig_link_c' => array(
						'type' => 'text',
						'label' => __('Instagram link', 'so-widgets-bundle'),
						'default' => 'www.instagram.com',
					),
					'image_d' => array(
						'type' => 'media',
						'label' => __('Foto Brides D', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'name_d' => array(
						'type' => 'text',
						'label' => __('Name Brides D', 'so-widgets-bundle'),
						'default' => 'DANIEL WILLIAMS',
					),
					'status_d' => array(
						'type' => 'text',
						'label' => __('Status Brides D', 'so-widgets-bundle'),
						'default' => 'COUSIN',
					),
					'fb_link_d' => array(
						'type' => 'text',
						'label' => __('Facebook link', 'so-widgets-bundle'),
						'default' => 'www.facebook.com',
					),
					'tw_link_d' => array(
						'type' => 'text',
						'label' => __('Twitter link', 'so-widgets-bundle'),
						'default' => 'www.twitter.com',
					),
					'ig_link_d' => array(
						'type' => 'text',
						'label' => __('Instagram link', 'so-widgets-bundle'),
						'default' => 'www.instagram.com',
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
				'brides_maid' => array(
					'nav_title'=>$instance['brides_maid']['nav_title'],
					'name_a'=>$instance['brides_maid']['name_a'],
					'status_a'=>$instance['brides_maid']['status_a'],
					'image_a'=>$this->stokk_src_image($instance['brides_maid']['image_a']),
					'fb_link_a'=>$instance['brides_maid']['fb_link_a'],
					'tw_link_a'=>$instance['brides_maid']['tw_link_a'],
					'ig_link_a'=>$instance['brides_maid']['ig_link_a'],

					'name_b'=>$instance['brides_maid']['name_b'],
					'status_b'=>$instance['brides_maid']['status_b'],
					'image_b'=>$this->stokk_src_image($instance['brides_maid']['image_b']),
					'fb_link_b'=>$instance['brides_maid']['fb_link_b'],
					'tw_link_b'=>$instance['brides_maid']['tw_link_b'],
					'ig_link_b'=>$instance['brides_maid']['ig_link_b'],

					'name_c'=>$instance['brides_maid']['name_c'],
					'status_c'=>$instance['brides_maid']['status_c'],
					'image_c'=>$this->stokk_src_image($instance['brides_maid']['image_c']),
					'fb_link_c'=>$instance['brides_maid']['fb_link_c'],
					'tw_link_c'=>$instance['brides_maid']['tw_link_c'],
					'ig_link_c'=>$instance['brides_maid']['ig_link_c'],

					'name_d'=>$instance['brides_maid']['name_d'],
					'status_d'=>$instance['brides_maid']['status_d'],
					'image_d'=>$this->stokk_src_image($instance['brides_maid']['image_d']),
					'fb_link_d'=>$instance['brides_maid']['fb_link_d'],
					'tw_link_d'=>$instance['brides_maid']['tw_link_d'],
					'ig_link_d'=>$instance['brides_maid']['ig_link_d']
				),

				'friends_colleagues' => array(
					'nav_title'=>$instance['friends_colleagues']['nav_title'],
					'name_a'=>$instance['friends_colleagues']['name_a'],
					'status_a'=>$instance['friends_colleagues']['status_a'],
					'image_a'=>$this->stokk_src_image($instance['friends_colleagues']['image_a']),
					'fb_link_a'=>$instance['friends_colleagues']['fb_link_a'],
					'tw_link_a'=>$instance['friends_colleagues']['tw_link_a'],
					'ig_link_a'=>$instance['friends_colleagues']['ig_link_a'],

					'name_b'=>$instance['friends_colleagues']['name_b'],
					'status_b'=>$instance['friends_colleagues']['status_b'],
					'image_b'=>$this->stokk_src_image($instance['friends_colleagues']['image_b']),
					'fb_link_b'=>$instance['friends_colleagues']['fb_link_b'],
					'tw_link_b'=>$instance['friends_colleagues']['tw_link_b'],
					'ig_link_b'=>$instance['friends_colleagues']['ig_link_b'],

					'name_c'=>$instance['friends_colleagues']['name_c'],
					'status_c'=>$instance['friends_colleagues']['status_c'],
					'image_c'=>$this->stokk_src_image($instance['friends_colleagues']['image_c']),
					'fb_link_c'=>$instance['friends_colleagues']['fb_link_c'],
					'tw_link_c'=>$instance['friends_colleagues']['tw_link_c'],
					'ig_link_c'=>$instance['friends_colleagues']['ig_link_c'],

					'name_d'=>$instance['friends_colleagues']['name_d'],
					'status_d'=>$instance['friends_colleagues']['status_d'],
					'image_d'=>$this->stokk_src_image($instance['friends_colleagues']['image_d']),
					'fb_link_d'=>$instance['friends_colleagues']['fb_link_d'],
					'tw_link_d'=>$instance['friends_colleagues']['tw_link_d'],
					'ig_link_d'=>$instance['friends_colleagues']['ig_link_d']
				),

				'grooms_men' => array(
					'nav_title'=>$instance['grooms_men']['nav_title'],
					'name_a'=>$instance['grooms_men']['name_a'],
					'status_a'=>$instance['grooms_men']['status_a'],
					'image_a'=>$this->stokk_src_image($instance['grooms_men']['image_a']),
					'fb_link_a'=>$instance['grooms_men']['fb_link_a'],
					'tw_link_a'=>$instance['grooms_men']['tw_link_a'],
					'ig_link_a'=>$instance['grooms_men']['ig_link_a'],

					'name_b'=>$instance['grooms_men']['name_b'],
					'status_b'=>$instance['grooms_men']['status_b'],
					'image_b'=>$this->stokk_src_image($instance['grooms_men']['image_b']),
					'fb_link_b'=>$instance['grooms_men']['fb_link_b'],
					'tw_link_b'=>$instance['grooms_men']['tw_link_b'],
					'ig_link_b'=>$instance['grooms_men']['ig_link_b'],

					'name_c'=>$instance['grooms_men']['name_c'],
					'status_c'=>$instance['grooms_men']['status_c'],
					'image_c'=>$this->stokk_src_image($instance['grooms_men']['image_c']),
					'fb_link_c'=>$instance['grooms_men']['fb_link_c'],
					'tw_link_c'=>$instance['grooms_men']['tw_link_c'],
					'ig_link_c'=>$instance['grooms_men']['ig_link_c'],

					'name_d'=>$instance['grooms_men']['name_d'],
					'status_d'=>$instance['grooms_men']['status_d'],
					'image_d'=>$this->stokk_src_image($instance['grooms_men']['image_d']),
					'fb_link_d'=>$instance['grooms_men']['fb_link_d'],
					'tw_link_d'=>$instance['grooms_men']['tw_link_d'],
					'ig_link_d'=>$instance['grooms_men']['ig_link_d']
				),
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