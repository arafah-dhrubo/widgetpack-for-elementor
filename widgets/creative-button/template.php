<?php
// get our input from the widget settings.
        $settings = $this->get_settings_for_display();

        //Button parameters
        $button_text = !empty($settings['button_text']) ? $settings['button_text'] : 'Learn More';
        $button_url = !empty($settings['button_link']) ? $settings['button_link']['url'] : '#';
        $button_icon = $settings['button_icon'];
        $new_tab = !empty($settings['button_link']['is_external']) ? '_blank' : '';
        $follow = !empty($settings['button_link']['nofollow']) ? 'nofollow' : '';
        ?>

        <div class="creative_button_container">
            <a href="<?php echo esc_attr($button_url); ?>"
               class="creative_button <?php echo esc_attr($settings['button_class']); ?> btn btn-<?php echo esc_attr($settings['button_size']);?>"
               id="<?php echo esc_attr($settings['button_id']); ?>"
               rel="<?php echo $follow ?>"
               target="<?php echo $new_tab ?>">
                <i class="
            <?php echo $settings['button_icon_align'] == "left" ? $button_icon : "not_visible" ?>"
                   style="padding-right: <?php echo $settings['icon_spacing']['size'];
                   echo $settings['icon_spacing']['unit']; ?>"></i>
                <span class="button-text"><?php echo esc_html($button_text); ?></span>
                <i class="
            <?php echo $settings['button_icon_align'] == "right" ? $button_icon : "not_visible" ?>"
                   style="padding-left: <?php echo $settings['icon_spacing']['size'];
                   echo $settings['icon_spacing']['unit']; ?>"></i>
            </a>
        </div>
        <style>
            .creative_button_container {
                display: flex;
                align-items: center;
                justify-content: <?php echo $settings['button_align'] ?>;
                height:80px;
            }

            a.creative_button {
                padding: 8px 25px;
                border: <?php echo $settings['border_style']?>;
                border-color: <?php echo $settings['border_color']?>;
                background: <?php echo esc_attr($settings['bg_color']); ?>;
            }

            .not_visible {
                display: none !important;

            }

            a.creative_button span {
                /* font-size: 16px; */
                color: <?php echo esc_attr($settings['button_text_color']); ?>;
               
            }

            a.creative_button:hover {
                background: <?php echo esc_attr($settings['bg_hover_color']); ?>;
            }

            a.creative_button:hover span {
                color: <?php echo esc_attr($settings['button_hover_text_color']); ?>;
            }

            a.creative_button i {
                width: <?php echo $settings['icon_size']['size']; ?>px;
                color: <?php echo esc_attr($settings['button_icon_color']); ?>;
            }

            a.creative_button img {
                padding: 12px;
                display: table-cell;
            }

            a.creative_button:hover i {
                color: <?php echo esc_attr($settings['button_hover_icon_color']); ?>;
            }

            a.creative_button:hover img {
                color: <?php echo esc_attr($settings['button_hover_color']); ?>;
            }
        </style>