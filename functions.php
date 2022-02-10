<?php 


// funcion para agregar los scripts que necesitemos

function scubo_template_scripts(){

    wp_enqueue_style( 'animate',get_template_directory_uri().'/assets/css/animate.css', array(), '0.1' );
    wp_enqueue_style( 'boostrap-datapicker',get_template_directory_uri().'/assets/css/bootstrap-datepicker.min.css', array(), '0.1' );
    wp_enqueue_style( 'boostrap-select',get_template_directory_uri().'/assets/css/bootstrap-select.min.css', array(), '0.1' );
    wp_enqueue_style( 'boostrap-min',get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '0.1' );
    wp_enqueue_style( 'fontawesome-all.min',get_template_directory_uri().'/assets/css/fontawesome-all.min.css', array(), '0.1' );
    wp_enqueue_style( 'hover-min',get_template_directory_uri().'/assets/css/hover-min.css', array(), '0.1' );
    wp_enqueue_style( 'jquery.mCustomScrollbar.min',get_template_directory_uri().'/assets/css/jquery.mCustomScrollbar.min.css', array(), '0.1' );
    wp_enqueue_style( 'magnific-popup',get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '0.1' );
    wp_enqueue_style( 'owl.carousel.min',get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '0.1' );
    wp_enqueue_style( 'responsive',get_template_directory_uri().'/assets/css/responsive.css', array(), '0.1' );
    wp_enqueue_style( 'owl.theme.default.min',get_template_directory_uri().'/assets/css/owl.theme.default.min.css', array(), '0.1' );
    wp_enqueue_style( 'rtl',get_template_directory_uri().'/assets/css/rtl.css', array(), '0.1' );
    wp_enqueue_style( 'scubo-icons',get_template_directory_uri().'/assets/css/scubo-icons.css', array(), '0.1' );
    wp_enqueue_style( 'style',get_template_directory_uri().'/assets/css/style.css', array(), '0.2' );
    

}




add_action('wp_enqueue_scripts','scubo_template_scripts');








