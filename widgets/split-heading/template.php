<?php
// get our input from the widget settings.
$settings = $this->get_settings_for_display();

//Heading parameters
$tag = $settings['heading_tag'];
$align = $settings['heading_align'];
$primary_heading = $settings['primary_heading'];
$secondary_heading = $settings['secondary_heading'];
$spacing = $settings['secondary_spacing'];
$primary_color = $settings['primary_heading_color'];
$primary_bg = $settings['primary_heading_bg'];
$secondary_color = $settings['secondary_heading_color'];
$secondary_bg = $settings['secondary_heading_bg'];
$split_type = $settings['split_type'];
?>

<!--Markup-->
<div class="w-full">
    <?php echo '<'.$tag.' class="split_heading"'.'>'?>
    <span class="primary"><?php echo $primary_heading?></span>
    <span class="secondary"><?php echo $secondary_heading?></span>
    <?php echo '</'.$tag.'>'?>


<style>
    .split_heading{
        display: flex;
        flex-direction: <?php echo $split_type?>;
        justify-content: <?php echo $align?>;
        align-items: center;
    }
</style>
</div>