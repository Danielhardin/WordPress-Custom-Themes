<?php 

    // add dynamic title tag 
    function brainwave_theme_support()
    {
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme','brainwave_theme_support');

    //show menu function
    function brainwave_menus()
    {
        $locations = array(
            'primary' => 'Desktop Primary Left Sidebar',
            'footer' => 'Footer Menu Items'
        );
        register_nav_menus($locations);
    }
    add_action('init','brainwave_menus');

    //register style
    function brainwave_register_styles(){
        
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('brainwave-carousel','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css',array(),'5.0.2','all');
        wp_enqueue_style('brainwave-bootstrap',get_template_directory_uri().'/assets/css/bootstrap.css',array(),'4.3.1','all');
        wp_enqueue_style('brainwave-font','https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Roboto:400,700&display=swap',array(),'5.0.2','all');
        wp_enqueue_style('brainwave-style',get_template_directory_uri().'/assets/css/style.css',array(),$version,'all');
        wp_enqueue_style('brainwave-responsive',get_template_directory_uri().'/assets/css/responsive.css',array(),$version,'all');
        wp_enqueue_style('brainwave-fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',array(),'6.4.0','all');
    }

    add_action('wp_enqueue_scripts','brainwave_register_styles');

     //register scripts
    function brainwave_register_scripts(){

        $version = wp_get_theme()->get('Version');
        wp_enqueue_script('brainwave-jquery-js',get_template_directory_uri().'/assets/js/jquery-3.4.1.min.js',array(),'3.4.1',true);
        wp_enqueue_script('brainwave-bootstrap-js',get_template_directory_uri().'/assets/js/bootstrap.js',array(),'4.3.1',true);
        wp_enqueue_script('brainwave-circles-js',get_template_directory_uri().'/assets/js/circles.min.js',array(),'0.0.6',true);
        wp_enqueue_script('brainwave-custom-js',get_template_directory_uri().'/assets/js/custom.js',array(),$version,true);
    }
    add_action('wp_enqueue_scripts','brainwave_register_scripts');

    function brainwave_widgets_area()
    {
        register_sidebar(
            array(
                'before_title' => '<h2>',
                'after_title' => '</h2>',
                'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
                'after_widget' => '</ul>',
                'name' => 'Sidebar Area',
                'id' => 'sidebar-1',
                'description' => 'Sidebar Widget Description'
            )
        );
        register_sidebar(
            array(
                'before_title' => '<h2>',
                'after_title' => '</h2>',
                'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
                'after_widget' => '</ul>',
                'name' => 'Footer Area',
                'id' => 'footer-1',
                'description' => 'Footer Widget Description'
            )
            );
    }
    add_action('widgets_init','brainwave_widgets_area');

?>