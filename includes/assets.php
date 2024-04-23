<?php 
function homely_assets(){
    wp_enqueue_style('homely-style', get_template_directory_uri() . '/css/main.css', microtime());
	// alt for production (using ver number instead of microtime)
	# wp_enqueue_style('homely-style', get_template_directory_uri() . '/css/main.css', 1.0);
	// alt approach to css
	# wp_register_style('homely-style', './css/main.css');
	# wp_enqueue_style('homely-style');	
	
	wp_enqueue_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css", '6.5.1');
	
	wp_enqueue_script('homely-script', get_template_directory_uri() . "/js/script.js", microtime(), [], true );
	// alt for production (using ver number instead of microtime)
	# wp_enqueue_script('homely-script', get_template_directory_uri() . "/js/script.js", 1.0, [], true );
	// alt approach to js 1
	# wp_enqueue_script('homely-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
	// alt approach to js 2
	# wp_register_script('homely-script', './js/script.js');
    # wp_enqueue_script( 'homely-script' );
	
	// conditional loading of page specific vendor assets
    if( is_front_page() || is_page_template( 'page-property-details.php' ) || is_page_template( 'page-about.php' )  | is_single()  ) {
		// wp_enqueue_style('tiny-slider-css', get_template_directory_uri() . '/vendor/tiny-slider/tiny-slider.css', '2.9.4');
		wp_enqueue_script('tiny-slider-js', get_template_directory_uri() . '/vendor/tiny-slider/tiny-slider.js', '2.9.4', [], true );
    }
	if ( is_page_template( 'page-properties.php' )  | is_single()){
		wp_enqueue_style('nouislider-css', get_template_directory_uri() . '/vendor/nouislider/nouislider.min.css', '15.7.1');
		wp_enqueue_script('nouislider-js', get_template_directory_uri() . '/vendor/nouislider/nouislider.min.js', '15.7.1', [], true );
	}
	
	//  conditional loading of page specific assets
	if( is_front_page() )  {
		wp_enqueue_script('home-page-js', get_template_directory_uri() . '/js/home.js', microtime(), [], true );
    }
	if ( is_page_template( 'page-property-details.php' ) | is_single() ){
		wp_enqueue_script('property-details-js', get_template_directory_uri() . '/js/property-details.js', microtime(), [], true );
		wp_enqueue_style('tiny-slider-css', get_template_directory_uri() . '/vendor/tiny-slider/tiny-slider.css', '2.9.4');
	}
	if ( is_page_template( 'page-properties.php' ) ){
		wp_enqueue_script('properties-js', get_template_directory_uri() . '/js/properties.js', microtime(), [], true );
	}
	if ( is_page_template( 'page-about.php' ) ){
		wp_enqueue_script('about-js', get_template_directory_uri() . '/js/about.js', microtime(), [], true );
	}
		
	# wp_enqueue_style( 'aos', get_template_directory_uri() . '/vendor/aos/aos.css', array(), '2.3.1', 'all');
    # wp_enqueue_script('aos', get_template_directory_uri() . '/vendor/aos/aos.js', array('jquery'), '2.3.1', true);
}
add_action('wp_enqueue_scripts', 'homely_assets');