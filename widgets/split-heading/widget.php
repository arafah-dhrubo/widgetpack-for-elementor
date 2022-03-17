<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

class Split_Heading extends Widget_Base
{
//    Widget Name
    public function get_name()
    {
        return 'widgetpack-for-elementor-heading';
    }

//    Widget Title
    public function get_title()
    {
        return esc_html__('Split Heading', 'widgetpack-for-elementor');
    }

//    Widget Icon
    public function get_icon()
    {
        return 'eicon-heading';
    }

//    Widget keyword
    public function get_keywords()
    {
        return ['heading', 'split', 'text'];
    }

//    Widget Category
    public function get_categories()
    {
        return ['basic'];
    }

//    Staring widget register control
    protected function register_controls()
    {
        //        Starting control section for Primary Heading
        $this->start_controls_section(
            'heading_content',
            [
                'label' => esc_html__('General', 'widgetpack-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

//        Heading Tag
        $this->add_control(
            'heading_tag', [
                'label' => esc_html__('Heading Tag', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::SELECT,
                'default' => 'h1',
                'options' => [
                    'h1' => esc_html__('H1', 'widgetpack-for-elementor'),
                    'h2' => esc_html__('H2', 'widgetpack-for-elementor'),
                    'h3' => esc_html__('H3', 'widgetpack-for-elementor'),
                    'h4' => esc_html__('H4', 'widgetpack-for-elementor'),
                    'h5' => esc_html__('H5', 'widgetpack-for-elementor'),
                    'h6' => esc_html__('H6', 'widgetpack-for-elementor'),
                ],
            ]
        );

//        Split type
        $this->add_control(
            'split_type',
            [
                'type' => Controls_Manager::CHOOSE,
                'label' => esc_html__('Split Type', 'widgetpack-for-elementor'),
                'options' => [
                    'row' => [
                        'title' => esc_html__('Row', 'widgetpack-for-elementor'),
                        'icon' => 'eicon-ellipsis-h',
                    ],
                    'column' => [
                        'title' => esc_html__('Column', 'widgetpack-for-elementor'),
                        'icon' => 'eicon-ellipsis-v',
                    ],
                ],
                'default' => 'row',
            ]
        );

//        Heading Alignment
        $this->add_control(
            'heading_align',
            [
                'type' => Controls_Manager::CHOOSE,
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

//        Ending  content section for heading
        $this->end_controls_section();

//        Starting control section for Primary Heading
        $this->start_controls_section(
            'primary_content',
            [
                'label' => esc_html__('Primary Heading', 'widgetpack-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

//        Adding text inside heading widget
        $this->add_control(
            'primary_heading',
            [
                'label' => esc_html__('Primary Heading', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Hello', 'widgetpack-for-elementor'),
                'placeholder' => esc_html__('Primary Heading Text', 'widgetpack-for-elementor'),
            ]
        );

//        Ending  content section for primary heading
        $this->end_controls_section();

//        Starting control section for Secondary Heading
        $this->start_controls_section(
            'secondary_content',
            [
                'label' => esc_html__('Secondary Heading', 'widgetpack-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

//        Adding text inside secondary heading widget
        $this->add_control(
            'secondary_heading',
            [
                'label' => esc_html__('Secondary Heading Text', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('World', 'widgetpack-for-elementor'),
                'placeholder' => esc_html__('Secondary Heading Text', 'widgetpack-for-elementor'),
            ]
        );

//        Secondary Heading Spacing
        $this->add_control(
            'secondary_spacing', [
                'label' => esc_html__('Secondary Spacing', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::SLIDER,
                'default' => [
                    'size' => 0,
                ],
                'range' => [
                    'px' => [
                        'max' => 50,
                    ],
                ],
                'condition' => [
                    'secondary_heading!' => ''
                ],
                'selectors' => [
                    '{{wrapper}} .secondary' =>
                        'margin-left:{{SIZE}}{{UNIT}}'
                ]
            ]
        );

//        Ending  content section for secondary heading
        $this->end_controls_section();

//        --------------------------------

//        Staring style tab
        $this->start_controls_section(
            'primary_style',
            [
                'label' => esc_html__('Primary Heading', 'widgetpack-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

//        Primary heading color
        $this->add_control(
            'primary_heading_color',
            [
                'label' => __('Color', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'default' => '#54595F',
                'selectors' => [
                    '{{wrapper}} .primary' =>
                        'color:{{VALUE}}'
                ]
            ]
        );

//        Primary heading typography
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'primary_title_typography',
                'selector' => '{{WRAPPER}} .primary',
            ]
        );

//        primary heading bg
        $this->add_control(
            'primary_heading_bg',
            [
                'label' => __('Background Color', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'default' => '#FFF',
                'selectors' => [
                    '{{wrapper}} .primary' =>
                        'background:{{VALUE}}'
                ]
            ]
        );

        // primary Heading Padding
        $this->add_control(
            'primary_padding',
            [
                'label' => esc_html__('Padding', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .primary' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

//        primary Border Style
        $this->add_control(
            'primary_border_style',
            ['label' => __('Border Style', 'plugin-domain'),
                'type' => Controls_Manager::SELECT,
                'default' => 'none',
                'options' => array(
                    'solid' => __('Solid', 'widgetpack-for-elementor'),
                    'dashed' => __('Dashed', 'widgetpack-for-elementor'),
                    'dotted' => __('Dotted', 'widgetpack-for-elementor'),
                    'double' => __('Double', 'widgetpack-for-elementor'),
                    'none' => __('None', 'widgetpack-for-elementor')
                ),
                'selectors' => [
                    '{{WRAPPER}} .primary' => 'border-style: {{UNIT}};',
                ],
            ]
        );

        //        primary heading border color
        $this->add_control(
            'primary_border_color',
            [
                'label' => __('Border Color', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'default' => '#FFF',
                'selectors' => [
                    '{{wrapper}} .primary' =>
                        'border-color:{{VALUE}}'
                ]
            ]
        );

        //        primary Border Width
        $this->add_control(
            'primary_border_width',
            [
                'label' => esc_html__('Border Width', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .primary' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        //        primary Border Radius
        $this->add_control(
            'primary_border_radius',
            [
                'label' => esc_html__('Border Radius', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .primary' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

//        Ending  style section for heading
        $this->end_controls_section();

        //        Staring style tab
        $this->start_controls_section(
            'secondary_style',
            [
                'label' => esc_html__('Secondary Heading', 'widgetpack-for-elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

//        Secondary heading color
        $this->add_control(
            'secondary_heading_color',
            [
                'label' => __('Color', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'default' => '#54595F',
                'selectors' => [
                    '{{wrapper}} .secondary' =>
                        'color:{{VALUE}}'
                ]
            ]
        );

//        Secondary heading bg
        $this->add_control(
            'secondary_heading_bg',
            [
                'label' => __('Background Color', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'default' => '#FFF',
                'selectors' => [
                    '{{wrapper}} .secondary' =>
                        'background:{{VALUE}}'
                ]
            ]
        );

//        Secondary heading typography
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name' => 'secondary_title_typography',
                'selector' => '{{WRAPPER}} .secondary',
            ]
        );

        // Secondary Heading Padding
        $this->add_control(
            'secondary_padding',
            [
                'label' => esc_html__('Padding', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .secondary' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

//        Secondary Border Style
        $this->add_control(
            'secondary_border_style',
            ['label' => __('Border Style', 'plugin-domain'),
                'type' => Controls_Manager::SELECT,
                'default' => 'none',
                'options' => array(
                    'solid' => __('Solid', 'widgetpack-for-elementor'),
                    'dashed' => __('Dashed', 'widgetpack-for-elementor'),
                    'dotted' => __('Dotted', 'widgetpack-for-elementor'),
                    'double' => __('Double', 'widgetpack-for-elementor'),
                    'none' => __('None', 'widgetpack-for-elementor')
                ),
                'selectors' => [
                    '{{WRAPPER}} .secondary' => 'border-style: {{UNIT}};',
                ],
            ]
        );

        //        Secondary heading border color
        $this->add_control(
            'secondary_border_color',
            [
                'label' => __('Border Color', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::COLOR,
                'default' => '#FFF',
                'selectors' => [
                    '{{wrapper}} .secondary' =>
                        'border-color:{{VALUE}}'
                ]
            ]
        );

        //        Secondary Border Width
        $this->add_control(
            'secondary_border_width',
            [
                'label' => esc_html__('Border Width', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .secondary' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        //        Secondary Border Radius
        $this->add_control(
            'secondary_border_radius',
            [
                'label' => esc_html__('Border Radius', 'widgetpack-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .secondary' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

//        Ending  style section for heading
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