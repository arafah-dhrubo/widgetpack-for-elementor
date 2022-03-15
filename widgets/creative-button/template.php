<?php $settings = $this->get_settings_for_display();?>

<a
    href="<?php echo $settings['button_link']['url'];?>"
    class="btn-hover-<?php echo $settings['button_hover_effect'];?>  button-normal"
    target="<?php echo $settings['button_link']['is_external'] ? '_blank' : '';  ?>"
    rel="<?php echo $settings['button_link']['nofollow'] ? 'nofollow' : ''; ?>"
>