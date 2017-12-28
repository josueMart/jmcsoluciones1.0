<?php 
    
        #Registro de Menus

    if (function_exists('register_nav_menus')) {
        # code...
        register_nav_menus( array('superior'=> 'Menu Principal Superior') );
    }

    #Agregando scripts js 

    function jmc_scripts_js(){

    	wp_enqueue_script( 'jQuery_js', get_template_directory_uri() . '/js/jquery-3.2.1.min.js',  array('jQuery'), '1.0.0', true );
    	
		wp_enqueue_script( 'Tether_js', get_template_directory_uri() . '/js/tether.min.js',  array('jquery'), '1.0.0', true );
    	wp_enqueue_script( 'Bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js',  array('jquery'), '1.0.0', true );

    
    }

    add_action('wp_enqueue_scripts', 'jmc_scripts_js');


 ?>