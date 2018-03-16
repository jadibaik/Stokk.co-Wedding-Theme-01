<?php

/*
Plugin Name: Stokk Widget Extend Widgets Bundle Plugin
Description: Stokk.co Widget Bundle.
Version: 0.1
Author: Stokk.co Team
Author URI: http://stokk.co
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.txt
*/

function stokk_widgets_collection($folders){
	$folders[] = plugin_dir_path(__FILE__).'extra-widgets/';
	return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'stokk_widgets_collection');

function stokk_class_prefixes( $class_prefixes ) {
	$class_prefixes[] = 'Stokk_Field_';
	return $class_prefixes;
}
add_filter( 'siteorigin_widgets_field_class_prefixes', 'stokk_class_prefixes' );

function stokk_fields_class_paths( $class_paths ) {
	$class_paths[] = plugin_dir_path( __FILE__ ) . 'custom-fields/';
	return $class_paths;
}
add_filter( 'siteorigin_widgets_field_class_paths', 'stokk_fields_class_paths' );

add_filter( 'siteorigin_panels_widget_style_fields','__return_false', 11 );