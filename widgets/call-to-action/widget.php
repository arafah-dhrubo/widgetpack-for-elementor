<?php
class Call_To_Action extends \Elementor\Widget_Base{
    public function get_name() {
        return 'widgetpack-for-elementor-cta';
    }

    public function get_title() {
        return esc_html__( 'Call To Action', 'widgetpack-for-elementor' );
    }

    public function get_icon() {
        return 'eicon-call-to-action';
    }

    public function get_categories() {
        return [ 'basic' ];
    }
}