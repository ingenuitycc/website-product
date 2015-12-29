<?php 
/* Enqueue Child Theme Scripts & Styles */
add_action( 'wp_enqueue_scripts', 'ingenuity_styles' ); 
 
if( ! function_exists( 'ingenuity_styles' ) ) {

  function ingenuity_styles(){
		wp_enqueue_style( 'ingeunity-typography', get_template_directory_uri() . '/css/ingenuity-typography.css', array() ); // Typography Stylesheet
		wp_enqueue_style( 'ingeunity-framework', get_template_directory_uri() . '/css/ingenuity-framework.css', array() ); // Framework Stylesheet
		wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css', array() ); // FontAwesome Stylesheet  
  		wp_enqueue_script( 'bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', 'jquery', 3.0, true ); //Boostrap JS Components
  }
}

?>