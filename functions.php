<?php 


//Register styles
function style_resources() {  

    
    // Register css files for this theme:  
      
    wp_register_style( 'main-style', get_template_directory_uri().'/assets/css/style.css');  
    wp_register_style( 'aos', get_template_directory_uri().'/assets/vendor/aos/aos.css');  
    wp_register_style( 'bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');  
    wp_register_style( 'bootstrap-icons', get_template_directory_uri().'/assets/vendor/bootstrap-icons/bootstrap-icons.css');  
    wp_register_style( 'boxicons', get_template_directory_uri().'/assets/vendor/boxicons/css/boxicons.min.css');  
    wp_register_style( 'glightbox', get_template_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css');  
    wp_register_style( 'swiper', "https://unpkg.com/swiper@8/swiper-bundle.min.css");  

   

            
    // enqueue the style  
    wp_enqueue_style('main-style');  
    wp_enqueue_style('aos');  
    wp_enqueue_style('bootstrap');  
    wp_enqueue_style('bootstrap-icons');  
    wp_enqueue_style('boxicons');  
    wp_enqueue_style('glightbox');  
    wp_enqueue_style('swiper-bundle');  

    
}  

function js_resources(){
 //Register js files for this theme:

       
    wp_register_script( 'aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js');    
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');    
    wp_register_script( 'glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js');
    wp_register_script( 'isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js');
    wp_register_script( 'purecounter', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter.js');
    wp_register_script( 'swiper-bundle', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js');
    wp_register_script( 'git-hub', "https://unpkg.com/github-calendar@latest/dist/github-calendar.min.js");

    // enqueue js

    
    wp_enqueue_script('aos');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('glightbox');
    wp_enqueue_script('isotope');
    wp_enqueue_script('purecounter');
    wp_enqueue_script('swiper-bundle');
    wp_enqueue_script('git-hub');
}

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}



add_action( 'wp_enqueue_scripts', 'style_resources' ); 
add_action( 'wp_enqueue_scripts', 'js_resources' ); 
add_theme_support( 'post-thumbnails' );