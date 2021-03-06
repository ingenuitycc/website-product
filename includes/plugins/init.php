<?php
 /**
  * Include the TGM_Plugin_Activation class.
  */
 require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'ingenuity_required_plugins' );
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
function ingenuity_required_plugins() {
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
	);

	tgmpa( $plugins, $config );
}
?>