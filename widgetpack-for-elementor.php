<?php
/*
Plugin Name: WidgetPack for Elementor
Description: Everything you need to create a stunning website with <strong>Elementor, WooCommerce, LearnDash, Sensei & LearnPress</strong> and more.
Version: 1.0.0
Text Domain: widgetpack-for-elementor
Author: Dhrubo
Author URI: #
Plugin URI: #
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.txt
@package  WidgetPack_For_Elementor
Domain Path: /languages
WP requires at least: 3.0.0
WP tested up to: 3.8.0
*/

if( !defined( 'ABSPATH' ) ) exit;

function WidgetPack_For_Elementor($widget_manager){
    require_once(__DIR__.'/widgets/creative-button/widget.php');
    require_once(__DIR__.'/widgets/call-to-action/widget.php');
    $widget_manager->register(new \Creative_Button());
    $widget_manager->register(new \Call_To_Action());

}
add_action('elementor/widgets/register', 'WidgetPack_For_Elementor');