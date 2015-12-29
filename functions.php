<?php 
/* Enqueue Child Theme Scripts & Styles */
require_once( get_template_directory_uri() . '/includes/scripts.php' );

/* Theme Options Setup */
require_once( get_template_directory_uri() . '/includes/ingenuity-options.php' );

/* Include Required Plugins */
require_once( get_template_directory_uri() . '/includes/plugins/init.php' );

/* Define Theme Shortcodes */
require_once( get_template_directory_uri() . '/includes/ingenuity-shortcodes.php' );
?>