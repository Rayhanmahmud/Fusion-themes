<?php 



function mamurjor_enqueue(){

    wp_enqueue_style( 'theme-bootstrap',get_theme_file_uri('assets/css/bootstrap.min.css'), '215', true );
	wp_enqueue_style( 'theme-fonts', get_theme_file_uri('assets/fonts/line-icons.css'), '215', true );
	wp_enqueue_style( 'theme-carousel', get_theme_file_uri('assets/css/owl.carousel.min.css'), '215', true );
	wp_enqueue_style( 'theme-owl', get_theme_file_uri('assets/css/owl.theme.css'), '215', true );
	wp_enqueue_style( 'theme-animate', get_theme_file_uri('assets/css/animate.css'), '215', true );
	wp_enqueue_style( 'theme-main', get_theme_file_uri('assets/css/main.css'), '215', true );
	wp_enqueue_style( 'theme-responsive', get_theme_file_uri('assets/css/responsive.css'), '215', true );
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

	

	wp_enqueue_script( 'theme-jquery', get_theme_file_uri('assets/js/jquery-min.js'), array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-popper', get_theme_file_uri('assets/js/popper.min.js'), array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-bootstrap', get_theme_file_uri('assets/js/bootstrap.min.js'), array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-owl-js', get_theme_file_uri('assets/js/owl.carousel.min.js'), array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-wow', get_theme_file_uri('assets/js/wow.js'), array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-nav', get_theme_file_uri('assets/js/jquery.nav.js'), array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-scrolling', get_theme_file_uri('assets/js/scrolling-nav.js'), array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-easing', get_theme_file_uri('assets/js/jquery.easing.min.js'), array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-js', get_theme_file_uri('assets/js/main.js'), array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-validator', get_theme_file_uri('assets/js/form-validator.min.js'), array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-script', get_theme_file_uri('assets/js/contact-form-script.min.js'), array('jquery'), '1215', true );

}


add_action( 'wp_enqueue_scripts', 'mamurjor_enqueue' );








?>