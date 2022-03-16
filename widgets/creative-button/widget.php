<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class Creative_Button extends Widget_Base
{
//    Widget Name
    public function get_name()
    {
        return 'widgetpack-for-elementor-button';
    }

//    Widget Title
    public function get_title()
    {
        return esc_html__('Creative Button', 'widgetpack-for-elementor');
    }

//    Widget Icon
    public function get_icon()
    {
        return 'eicon-button';
    }

//    Widget keyword
    public function get_keywords()
    {
        return ['button', 'content', 'toggle'];
    }

//    Widget Category
    public function get_categories()
    {
        return ['basic'];
    }

//    Staring widget register control
    protected function register_controls()
    {
//        Starting control section
        $this->start_controls_section(
            'button_content',
            [
                'label' => esc_html__('Button', 'widgetpack-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

//        Adding text inside button
        $this->add_control(
            'button_text',
            [
                'label' => esc_html__('Button Text', 'widgetpack-for-elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Click Here', 'widgetpack-for-elementor'),
                'placeholder' => esc_html__('Click Here', 'widgetpack-for-elementor'),
            ]
        );


//        Button Size
$this->add_control(
    'button_size', [
        'label' => esc_html__('Button Size', 'widgetpack-for-elementor'),
        'type' => Controls_Manager::SELECT,
        'default' => 'md',
        'options' => [
            'xs' => esc_html__('Extra Small', 'widgetpack-for-elementor'),
            'sm' => esc_html__('Small', 'widgetpack-for-elementor'),
            'md' => esc_html__('Medium', 'widgetpack-for-elementor'),
            'lg' => esc_html__('Large', 'widgetpack-for-elementor'),
            'xl' => esc_html__('Extra Large', 'widgetpack-for-elementor'),
        ],
    ]
);

//        Button Link
        $this->add_control(
            'button_link',
            [
                'label' => esc_html__('Link', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::URL,
                'dynamic' => [
                    'active' => true,
                ],
                'placeholder' => esc_html__('https://your-link.com', 'widgetpack-for-elementor'),
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
            ]
        );

//        Button Alignment
        $this->add_control(
            'button_align',
            [
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'label' => esc_html__('Alignment', 'widgetpack-for-elementor'),
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'widgetpack-for-elementor'),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'widgetpack-for-elementor'),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'widgetpack-for-elementor'),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'center',
            ]
        );

//        Ending  content section for button
        $this->end_controls_section();

        //Tab for Icon
        $this->start_controls_section(
            'icon_content',
            [
                'label' => esc_html__('Icon', 'widgetpack-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

//        Button Icon
        $this->add_control(
            'button_icon',
            [
                'label' => esc_html__('Icon', 'widgetpack-for-elementor'),
                'type' => \Elementor\Controls_Manager::ICON,
                'label_block' => true,
                'default' => '',
            ]
        );

//        Icon Spacing
        $this->add_control(
            'icon_spacing', [
                'label' => esc_html__('Icon Spacing', 'widgetpack-for-elementor'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'default' => [
                    'size' => 0,
                ],
                'range' => [
                    'px' => [
                        'max' => 50,
                    ],
                ],
                'condition' => [
                    'button_icon!' => ''
                ]
            ]
        );

//        Button Icon Alignment
        $this->add_control(
            'button_icon_align',
            [
                'label' => esc_html__('Icon Position', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::SELECT,
                'default' => 'left',
                'options' => [
                    'left' => esc_html__('Before', 'widgetpack-for-elementor'),
                    'right' => esc_html__('After', 'widgetpack-for-elementor'),
                ],
                'condition' => [
                    'button_icon!' => ''
                ]
            ]
        );

//        Ending  content section for Icon
        $this->end_controls_section();

//        Start Border Content
        $this->start_controls_section(
            'border_content',
            [
                'label' => esc_html__('Border', 'widgetpack-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

//        Border Style
        $this->add_control(
            'border_style',
            ['label' => __('Border Style', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'solid',
                'options' => array(
                    'solid' => __('Solid', 'widgetpack-for-elementor'),
                    'dashed' => __('Dashed', 'widgetpack-for-elementor'),
                    'dotted' => __('Dotted', 'widgetpack-for-elementor'),
                    'double' => __('Double', 'widgetpack-for-elementor'),
                    'none' => __('None', 'widgetpack-for-elementor')
                )
            ]
        );

//        Ending  content section
        $this->end_controls_section();

//        Staring style tab
        $this->start_controls_section(
            'button_style',
            [
                'label' => esc_html__('Button', 'widgetpack-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

//        Button text color
        $this->add_control(
            'button_text_color',
            [
                'label' => __('Text Color', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'default' => '#54595F',
            ]
        );

//        Button background color
        $this->add_control(
            'bg_color',
            [
                'label' => __('Background Color', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'default' => '#6EC1E4',
            ]
        );

//        Button hover text color
        $this->add_control(
            'button_hover_text_color',
            [
                'label' => __('Text Hover Color', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'default' => '#B12B2B',
            ]
        );

//        button hover color
        $this->add_control(
            'bg_hover_color',
            [
                'label' => __('Background Hover Color', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'default' => '#61CE70',
            ]
        );

//        Ending  style section for button
        $this->end_controls_section();

        //Tab for Icon
        $this->start_controls_section(
            'icon_style',
            [
                'label' => esc_html__('Icon', 'widgetpack-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

//        Button Icon Color
        $this->add_control(
            'button_icon_color',
            [
                'label' => __('Icon Color', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'default' => '#54595F',
            ]
        );

//        Button Hover Icon
        $this->add_control(
            'button_hover_icon_color',
            [
                'label' => __('Icon Hover Color', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'default' => '#B12B2B',
            ]
        );

//        Ending  style section for Icon
        $this->end_controls_section();

        //Tab for Border
        $this->start_controls_section(
            'border_style_tab',
            [
                'label' => esc_html__('Border', 'widgetpack-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'border_style!' => 'none'
                ]
            ]
        );

        //        Border color
        $this->add_control(
            'border_color',
            [
                'label' => __('Border Color', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'default' => '#6EC1E4',
                'condition' => [
                    'border_style!' => 'none'
                ]
            ]
        );


        $this->add_control(
            'button_border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'widgetpack-for-elementor' ),
                'type'  => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors'  => [
                    '{{WRAPPER}} .creative_button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' =>[
                    'border_style!' => 'none'
                ]
            ]
        );

//        Ending  style section for Border
        $this->end_controls_section();

        //Tab for MISC
        $this->start_controls_section(
            'misc_style',
            [
                'label' => esc_html__('MISC', 'widgetpack-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        
        //        Button class
        $this->add_control(
            'button_class',
            [
                'label' => __('Class', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'title' => __('Enter Button Class', 'widgetpack-for-elementor'),
            ]
        );

//        Button Id
        $this->add_control(
            'button_id',
            [
                'label' => __('ID', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::TEXT,
                'default' => '',
                'title' => __('Enter Button ID', 'widgetpack-for-elementor'),
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
    require 'template.php';
    }

    protected function content_template()
    {
    }

    public function render_plain_content($instance = [])
    {
    }
}