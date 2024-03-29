<?php
    $melbourne_option = hotel_melbourne_theme_default_data();
    $front_page_options = wp_parse_args(get_option('melbourne_option', array()), $melbourne_option);
    if ($front_page_options['front_page_enabled'] == "1" && is_front_page()) {

        get_header();

        /****** Home Slider ******/
        get_template_part('home', 'slider');

        /****** Home floor plan ******/
        get_template_part('home', 'floor-plan');

        /****** Home about ******/
        get_template_part('home', 'about');

        /****** Home colout ******/
        get_template_part('home', 'service');

        /****** Home blog ******/
        get_template_part('home', 'blog');

        /****** Home gallery ******/
        get_template_part('home', 'gallery');


        get_footer();
    }
    else {
        if (is_page()) {
            get_template_part('page');
        } else {
            get_template_part('index');
        }
    }
?>