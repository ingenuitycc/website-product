<?php 
/* include Require Plugins */
require_once( get_template_directory_uri() . '/includes/plugins/init.php' );


/* Enqueue Child Theme Scripts & Styles */
require_once( get_template_directory_uri() . '/includes/scripts.php' );


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 1728; /* pixels */

/**
 * Adjust the content width when the full width page template is being used
 */

function layers_reset_content_width() {
	global $content_width;

	$left_sidebar_active = layers_can_show_sidebar( 'left-sidebar' );
	$right_sidebar_active = layers_can_show_sidebar( 'right-sidebar' );

	if( is_page_template( LAYERS_BUILDER_TEMPLATE ) ) {
		$content_width = 1728;
	} else if( is_page_template( 'template-both-sidebar.php' ) ||
		is_page_template( 'template-left-sidebar.php' ) ||
		is_page_template( 'template-right-sidebar.php' ) ){
		$content_width = 660;
	} elseif ( is_page_template( 'template-blog.php' ) ) {
		$content_width = 1728;
	} elseif( $left_sidebar_active || $right_sidebar_active ){
		$content_width = 660;
	}
}
add_action( 'template_redirect', 'layers_reset_content_width', 20 );
?>