<?php 
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function my_theme_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'     	=> 'DevKit - Developer Tools for WordPress', // The plugin name.
			'slug'     	=> 'devkit-extension', // The plugin slug (typically the folder name).
			'source'   	=> 'http://ingenwp.inortho.net/latest/devkit.zip', // The plugin source.
			'required' 	=> true, // If false, the plugin is only 'recommended' instead of required.
		),
		array(
			'name'     	=> 'FontPress', // The plugin name.
			'slug'     	=> 'fontpress', // The plugin slug (typically the folder name).
			'source'   	=> 'http://ingenwp.inortho.net/latest/fontpress.zip', // The plugin source.
			'required' 	=> false, // If false, the plugin is only 'recommended' instead of required.
		),
		array(
			'name'     	=> 'Layers - Updater', // The plugin name.
			'slug'     	=> 'layers-updater', // The plugin slug (typically the folder name).
			'source'   	=> 'http://ingenwp.inortho.net/latest/layers-updater.zip', // The plugin source.
			'required' 	=> false, // If false, the plugin is only 'recommended' instead of required.
		),
		array(
			'name'     	=> 'Layers Essential Addons', // The plugin name.
			'slug'     	=> 'layers-essential-addons', // The plugin slug (typically the folder name).
			'source'   	=> 'http://ingenwp.inortho.net/latest/layers-essential-addons.zip', // The plugin source.
			'required' 	=> true, // If false, the plugin is only 'recommended' instead of required.
		),
		array(
			'name'     	=> 'Layouts', // The plugin name.
			'slug'     	=> 'layouts', // The plugin slug (typically the folder name).
			'source'   	=> 'http://ingenwp.inortho.net/latest/layouts.zip', // The plugin source.
			'required' 	=> false, // If false, the plugin is only 'recommended' instead of required.
		),
		array(
			'name'     	=> 'Revolution Slider', // The plugin name.
			'slug'     	=> 'revslider', // The plugin slug (typically the folder name).
			'source'   	=> 'http://ingenwp.inortho.net/latest/revslider.zip', // The plugin source.
			'required' 	=> false, // If false, the plugin is only 'recommended' instead of required.
		),
		array(
			'name'     	=> 'WP Views', // The plugin name.
			'slug'     	=> 'wp-views', // The plugin slug (typically the folder name).
			'source'   	=> 'http://ingenwp.inortho.net/latest/wp-views.zip', // The plugin source.
			'required' 	=> true, // If false, the plugin is only 'recommended' instead of required.
		),

		array(
			'name'      => 'Admin Post Navigation',
			'slug'      => 'admin-post-navigation',
			'required'  => false,
		),
		array(
			'name'      => 'Advanced Custom Fields',
			'slug'      => 'advanced-custom-fields',
			'required'  => true,
		),
		array(
			'name'      => 'BackWPup',
			'slug'      => 'backwpup',
			'required'  => true,
		),
		array(
			'name'      => 'Better Search Replace',
			'slug'      => 'better-search-replace',
			'required'  => false,
		),
		array(
			'name'      => 'EWWW Image Optimizer',
			'slug'      => 'ewww-image-optimizer',
			'required'  => true,
		),
		array(
			'name'      => 'AJAX Thumbnail Rebuild',
			'slug'      => 'ajax-thumbnail-rebuild',
			'required'  => false,
		),
		array(
			'name'      => 'Instagram Feed',
			'slug'      => 'instagram-feed',
			'required'  => false,
		),
		array(
			'name'      => 'Jetpack by WordPress.com',
			'slug'      => 'jetpack',
			'required'  => true,
		),
		array(
			'name'      => 'Manual Image Crop',
			'slug'      => 'manual-image-crop',
			'required'  => false,
		),
		array(
			'name'      => 'Redirection',
			'slug'      => 'redirection',
			'required'  => false,
		),
		array(
			'name'      => 'Synchi',
			'slug'      => 'synchi',
			'required'  => false,
		),
		array(
			'name'      => 'Types',
			'slug'      => 'types',
			'required'  => true,
		),
		array(
			'name'      => 'W3 Total Cache',
			'slug'      => 'w3-total-cache',
			'required'  => false,
		),
		array(
			'name'      => 'WP Video Lightbox',
			'slug'      => 'wp-video-lightbox',
			'required'  => false,
		),
		array(
			'name'      => 'WordPress SEO by Yoast',
			'slug'      => 'wordpress-seo',
			'required'	=> false,
		)

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'theme-slug' ),
			'menu_title'                      => __( 'Install Plugins', 'theme-slug' ),
			'installing'                      => __( 'Installing Plugin: %s', 'theme-slug' ), // %s = plugin name.
			'oops'                            => __( 'Something went wrong with the plugin API.', 'theme-slug' ),
			'notice_can_install_required'     => _n_noop(
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'theme-slug'
			), // %1$s = plugin name(s).
			'notice_can_install_recommended'  => _n_noop(
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'theme-slug'
			), // %1$s = plugin name(s).
			'notice_cannot_install'           => _n_noop(
				'Sorry, but you do not have the correct permissions to install the %1$s plugin.',
				'Sorry, but you do not have the correct permissions to install the %1$s plugins.',
				'theme-slug'
			), // %1$s = plugin name(s).
			'notice_ask_to_update'            => _n_noop(
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'theme-slug'
			), // %1$s = plugin name(s).
			'notice_ask_to_update_maybe'      => _n_noop(
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'theme-slug'
			), // %1$s = plugin name(s).
			'notice_cannot_update'            => _n_noop(
				'Sorry, but you do not have the correct permissions to update the %1$s plugin.',
				'Sorry, but you do not have the correct permissions to update the %1$s plugins.',
				'theme-slug'
			), // %1$s = plugin name(s).
			'notice_can_activate_required'    => _n_noop(
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'theme-slug'
			), // %1$s = plugin name(s).
			'notice_can_activate_recommended' => _n_noop(
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'theme-slug'
			), // %1$s = plugin name(s).
			'notice_cannot_activate'          => _n_noop(
				'Sorry, but you do not have the correct permissions to activate the %1$s plugin.',
				'Sorry, but you do not have the correct permissions to activate the %1$s plugins.',
				'theme-slug'
			), // %1$s = plugin name(s).
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'theme-slug'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'theme-slug'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'theme-slug'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'theme-slug' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'theme-slug' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'theme-slug' ),
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'theme-slug' ),  // %1$s = plugin name(s).
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'theme-slug' ),  // %1$s = plugin name(s).
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'theme-slug' ), // %s = dashboard link.
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'tgmpa' ),

			'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
		),
		*/
	);

	tgmpa( $plugins, $config );
}

/**
*	Use latest jQuery release
*/
if( !is_admin() ){
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false, '');
	wp_enqueue_script('jquery');
}

if( is_admin() ){ wp_deregister_style('toolset-font-awesome-css'); }

/* Custom Walker Class for the Main Menu */ 
class Menu_With_Description extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth, $args) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		
		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '<h5 class="description">' . $item->description . '</h5>';
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}


/* Enqueue Child Theme Scripts & Styles 
** http://codex.wordpress.org/Function_Reference/wp_enqueue_style
* Since 1.0
*/
add_action( 'wp_enqueue_scripts', 'layers_child_styles' ); 
 
if( ! function_exists( 'layers_child_styles' ) ) {
 
  function layers_child_styles(){
	wp_enqueue_style( 'layers-parent-style', get_template_directory_uri() . '/style.css', array() ); // Parent Stylesheet
  wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css', array() ); // FontAwesome Stylesheet  
  wp_enqueue_script( 'bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', 'jquery', 3.0, true ); //Boostrap JS Components
  }
}

/* Define excerpts as the first paragraph */ 
function my_custom_excerpt($text, $raw_excerpt) {
    if( ! $raw_excerpt ) {
	$content = apply_filters( 'the_content', strip_shortcodes( get_the_content() ) );
        $text = substr( $content, 0, strpos( $content, '</p>' ) + 4 );
	$text = preg_replace("/<img[^>]+\>/i", "", $text);
    }
    return $text;
}
add_filter( 'wp_trim_excerpt', 'my_custom_excerpt', 10, 2 );
 
/* Creating a menu shortcode with Walker Functionality */ 
function print_menu_shortcode($atts, $content = null) { 
	extract(shortcode_atts(array( 'name' => null, 'walkerClass' => '', 'class' => 'nav-menu', 'link_tag' => '', 'link_class' => '', 'descriptions' => 'no', 'menu_class' => '' ), $atts));

	$options = array();

	if ( $descriptions == 'yes' ) {
		$walker = new Menu_With_Description;
		$options['walker'] = $walker;
	}
	
	if ( $link_tag != '' && $link_class != '' ) {
			$options['link_before'] = '<'.$link_tag.' class="'.$link_class.'">';
			$options['link_after'] = '</'.$link_tag.'>';
	}

	$options['menu'] = $name;
	$options['echo'] = $false;
	$options['menu_class'] = $menu_class;
	
	return wp_nav_menu( $options );
}

add_shortcode('menu', 'print_menu_shortcode');

//Add a No P version of the WPV-Post-Excerpt Shortcode
add_shortcode( 'wpv-post-excerpt-no-p', 'get_excerpt_no_p' );
function get_excerpt_no_p( $atts ) {
   $excerpt = substr_replace( get_the_excerpt(), '' , 0 , 3 );
   $excerpt = substr_replace( get_the_excerpt() , '' , -3 , 0 );
   return $excerpt;
}


// add ie conditional html5 shim to header
function add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
    echo '<![endif]-->';
}
add_action('wp_head', 'add_ie_html5_shim');


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
if( ! function_exists('customizer_icons_styles')){	
	function customizer_icons_styles() { ?>
	    <style>
	        [class^="icon-"], [class*=" icon-"] {
	    		font-family: "layers-interface" !important;
	        }
	        .icon-columns::before, .icon-trash::before, .icon-desktop::before, .icon-tablet::before, .icon-phone::before {
 				   font-family: FontAwesome !important;
			}
	    </style>
	    <?php
	}
}
add_action( 'customize_controls_print_styles', 'customizer_icons_styles', 999 );
?>