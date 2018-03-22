<?php

/*
Widget Name: Stokk Tab-profile widget
Description: -
Author: Stokk.co Team
Author URI: http://stokk.co
*/

class Stokk_tabProfile_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'stokk-tabprofile-widget',
			__('Stokk Tab-Profile Widget', 'stokk-tabprofile-widget-text-domain'),
			array(
				'description' => __('A Stokk Tab-profile widget.', 'stokk-tabprofile-widget-text-domain'),
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
			'groom' => array(
				'type' => 'section',
				'label' => __('Tab Groom', 'so-widgets-bundle'),
				'hide' => true,
				'fields' => array(
					'nav_title' => array(
						'type' => 'text',
						'label' => __('Title Groom', 'so-widgets-bundle'),
						'default' => 'ABOUT GROOM',
					),
					'nav_subtitle' => array(
						'type' => 'text',
						'label' => __('Subtitle Groom', 'so-widgets-bundle'),
						'default' => 'CHARMING & RESPONSIBLE',
					),
					'content_title' => array(
						'type' => 'text',
						'label' => __('Title Content Groom', 'so-widgets-bundle'),
						'default' => 'JACK SANDLER',
					),
					'content_subtitle' => array(
						'type' => 'text',
						'label' => __('Subtitle Content Groom', 'so-widgets-bundle'),
						'default' => 'SON OF MR. JOHN & MRS. JOANNA',
					),
					'groom_image' => array(
						'type' => 'media',
						'label' => __('Image file', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'groom_desc' => array(
						'type' => 'tinymce',
						'label' => __( 'Visually edit, richly.', 'widget-form-fields-text-domain' ),
						'default' => '<p><strong>Our story began in March 2010</strong> at LaGuardia Airport in New York. We were both going back to school in Atlanta. After a mutual friend introduced us we realized our seats were very close to each other. Dan could tell that Ariel, a classic nervous flyer, could use some support. A <strong>pretty turbulent flight </strong>allowed us to get to know each other. Throughout the rest of the semester we became good friends. As summer approached, we learned that we would be interning across the street from each other. After having lunch together every day that summer we both knew it was only a matter of time. <strong> we got back to school for fall semester the rest was history!</strong></p>',
						'rows' => 10,
						'default_editor' => 'tinymce',
						'button_filters' => array(
							'mce_buttons' => array( $this, 'filter_mce_buttons' ),
							'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
							'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
							'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
							'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
						),
					),
					'fb_link' => array(
						'type' => 'text',
						'label' => __('Facebook link', 'so-widgets-bundle')
					),
					'tw_link' => array(
						'type' => 'text',
						'label' => __('Twitter link', 'so-widgets-bundle')
					),
					'ig_link' => array(
						'type' => 'text',
						'label' => __('Instagram link', 'so-widgets-bundle')
					),
				)
			),
			'bride' => array(
				'type' => 'section',
				'label' => __('Tab Bride', 'so-widgets-bundle'),
				'hide' => true,
				'fields' => array(
					'nav_title' => array(
						'type' => 'text',
						'label' => __('Title Bride', 'so-widgets-bundle'),
						'default' => 'ABOUT BRIDE',
					),
					'nav_subtitle' => array(
						'type' => 'text',
						'label' => __('Subtitle Bride', 'so-widgets-bundle'),
						'default' => 'FRENDLY AND WARM',
					),
					'content_title' => array(
						'type' => 'text',
						'label' => __('Title Content Bride', 'so-widgets-bundle'),
						'default' => 'MARY JANE',
					),
					'content_subtitle' => array(
						'type' => 'text',
						'label' => __('Subtitle Content Bride', 'so-widgets-bundle'),
						'default' => 'SON OF MR. EDWARD & MRS. RIHANNA',
					),
					'bride_image' => array(
						'type' => 'media',
						'label' => __('Image file', 'so-widgets-bundle'),
						'library' => 'image',
						'fallback' => true,
					),
					'bride_desc' => array(
						'type' => 'tinymce',
						'label' => __( 'Visually edit, richly.', 'widget-form-fields-text-domain' ),
						'default' => '<p><strong>Our story began in March 2010</strong> at LaGuardia Airport in New York. We were both going back to school in Atlanta. After a mutual friend introduced us we realized our seats were very close to each other. Dan could tell that Ariel, a classic nervous flyer, could use some support. A <strong>pretty turbulent flight </strong>allowed us to get to know each other. Throughout the rest of the semester we became good friends. As summer approached, we learned that we would be interning across the street from each other. After having lunch together every day that summer we both knew it was only a matter of time. <strong> we got back to school for fall semester the rest was history!</strong></p>',
						'rows' => 10,
						'default_editor' => 'tinymce',
						'button_filters' => array(
							'mce_buttons' => array( $this, 'filter_mce_buttons' ),
							'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
							'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
							'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
							'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
						),
					),
					'fb_link' => array(
						'type' => 'text',
						'label' => __('Facebook link', 'so-widgets-bundle')
					),
					'tw_link' => array(
						'type' => 'text',
						'label' => __('Twitter link', 'so-widgets-bundle')
					),
					'ig_link' => array(
						'type' => 'text',
						'label' => __('Instagram link', 'so-widgets-bundle')
					),
				),
			),
			'story' => array(
				'type' => 'section',
				'label' => __('Tab Story', 'so-widgets-bundle'),
				'hide' => true,
				'fields' => array(
					'nav_title' => array(
						'type' => 'text',
						'label' => __('Title Story', 'so-widgets-bundle'),
						'default' => 'OUR STORY',
					),
					'nav_subtitle' => array(
						'type' => 'text',
						'label' => __('Subtitle Story', 'so-widgets-bundle'),
						'default' => 'WE MET, HAVE FUN & MARRIED',
					),
					'content_title' => array(
						'type' => 'text',
						'label' => __('Title Content Story', 'so-widgets-bundle'),
						'default' => 'Our Love Story',
					),
					'content_subtitle' => array(
						'type' => 'text',
						'label' => __('Subtitle Content Story', 'so-widgets-bundle'),
						'default' => 'ACCIDENTALLY IN LOVE',
					),
					'story_desc' => array(
						'type' => 'tinymce',
						'label' => __( 'Visually edit, richly.', 'widget-form-fields-text-domain' ),
						'default' => '<p><strong>Our story began in March 2010</strong> at LaGuardia Airport in New York. We were both going back to school in Atlanta. After a mutual friend introduced us we realized our seats were very close to each other. Dan could tell that Ariel, a classic nervous flyer, could use some support. A <strong>pretty turbulent flight </strong>allowed us to get to know each other. Throughout the rest of the semester we became good friends. As summer approached, we learned that we would be interning across the street from each other. After having lunch together every day that summer we both knew it was only a matter of time. <strong> we got back to school for fall semester the rest was history!</strong></p>',
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
					'bottom_subtitle' => array(
						'type' => 'text',
						'label' => __('Bottom Subtitle Story', 'so-widgets-bundle'),
						'default' => 'JACK & MARY',
					),
				)
			)
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
			'groom' => array(
				'nav_title'=>$instance['groom']['nav_title'],
				'nav_subtitle'=>$instance['groom']['nav_subtitle'],
				'content_title'=>$instance['groom']['content_title'],
				'content_subtitle'=>$instance['groom']['content_subtitle'],
				'groom_image'=>$this->stokk_src_image($instance['groom']['groom_image']),
				'groom_desc'=>$instance['groom']['groom_desc'],
				'fb_link'=>$instance['groom']['fb_link'],
				'tw_link'=>$instance['groom']['tw_link'],
				'ig_link'=>$instance['groom']['ig_link']
			),
			'bride' => array(
				'nav_title'=>$instance['bride']['nav_title'],
				'nav_subtitle'=>$instance['bride']['nav_subtitle'],
				'content_title'=>$instance['bride']['content_title'],
				'content_subtitle'=>$instance['bride']['content_subtitle'],
				'bride_image'=>$this->stokk_src_image($instance['bride']['bride_image']),
				'bride_desc'=>$instance['bride']['bride_desc'],
				'fb_link'=>$instance['bride']['fb_link'],
				'tw_link'=>$instance['bride']['tw_link'],
				'ig_link'=>$instance['bride']['ig_link'],

			),
			'story' => array(
				'nav_title'=>$instance['story']['nav_title'],
				'nav_subtitle'=>$instance['story']['nav_subtitle'],
				'content_title'=>$instance['story']['content_title'],
				'content_subtitle'=>$instance['story']['content_subtitle'],
				'story_desc'=>$instance['story']['story_desc'],
				'bottom_subtitle'=>$instance['story']['bottom_subtitle'],
			),
		);
	}

	function get_template_name($instance) {
		return 'stokk-tabprofile-widget-template';
	}

	function get_style_name($instance) {
		return 'stokk-tabprofile-widget-style';
	}

}

siteorigin_widget_register('stokk-tabprofile-widget', __FILE__, 'Stokk_tabProfile_Widget');