<?php 


//Register styles
function style_resources() {  
    // Register css files for this theme:  
      
    wp_register_style( 'aos', get_template_directory_uri().'/assets/vendor/aos/aos.css');  
    wp_register_style( 'bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');  
    wp_register_style( 'bootstrap-icons', get_template_directory_uri().'/assets/vendor/bootstrap-icons/bootstrap-icons.css');  
    wp_register_style( 'boxicons', get_template_directory_uri().'/assets/vendor/boxicons/css/boxicons.min.css');  
    wp_register_style( 'glightbox', get_template_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css');  
    wp_register_style( 'main-style', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css');  
    
    

    // enqueue the style  
    wp_enqueue_style('main-style');  
    wp_enqueue_style('aos');  
    wp_enqueue_style('bootstrap');  
    wp_enqueue_style('bootstrap-icons');  
    wp_enqueue_style('boxicons');  
    wp_enqueue_style('glightbox');  
    wp_enqueue_style('swiper-bundle');  
}  
add_action( 'wp_enqueue_scripts', 'style_resources' ); 