<?php
if( ! defined( 'ABSPATH' ) ) exit();
class WPFE_Elementor_Category{
    public function __construct(){
        $this->elementor_integration();
    }
    public function elementor_integration(){
        Plugin::instance()->elements_manager->add_category(
            'widgetpack_elementor',
            [
                'title'  => 'WidgetPack Elements',
                'icon'   => 'eicon-font'
            ],
            1
        );
    }
}
return WPFE_Elementor_Category::init();