<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
  /**
	 * Load theme's JavaScript and CSS sources.
	 */
  function understrap_scripts() {
    // Get the theme data.
    $the_theme = wp_get_theme();
    $theme_version = $the_theme->get( 'Version' );
    
    wp_deregister_script( 'jquery' );

    //    $css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.min.css');
    //    wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $css_version );

		 
    wp_enqueue_style( 'ported-styles', get_stylesheet_directory_uri() . '/css/style.css', array(), $css_version );
		
		
    wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js', array(), $theme_version, false);

    wp_enqueue_script( 'core-scripts', get_template_directory_uri() . '/js/core.min.js', array(), $theme_version, true);

    wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/script.js', array(), $theme_version, true);
		
		wp_enqueue_style( 'theme-css', get_stylesheet_directory_uri() . '/css/rk-stylesheet.css', array(), $css_version );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }



  }
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
