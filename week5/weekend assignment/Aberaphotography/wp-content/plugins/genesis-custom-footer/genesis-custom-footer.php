<?php
/**
 * Plugin Name: Genesis Custom Footer
 * Plugin URI: https://www.nutsandboltsmedia.com/
 * Description: Allows you to change the Genesis footer credits from the Genesis customizer settings panel.
 * Version: 1.0.1
 * Author: Nuts and Bolts Media
 * Author URI: https://www.nutsandboltsmedia.com/
 *
 * This plugin is released under the GPLv2 license. The images packaged with this plugin are the property of
 * their respective owners, and do not, necessarily, inherit the GPLv2 license.
 */

add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'nabm_settings_link' );
/**
 * Add settings link on plugin page.
 *
 * @since  0.1
 * @param  array $links Existing settings links.
 * @return array $links Modified settings links.
 */
function nabm_settings_link( $links ) {
	$settings_link = '<a href="admin.php?page=genesis">Settings</a>';
	array_unshift( $links, $settings_link );
	return $links;
}

/**
 * Get the default value used in the admin and customizer.
 *
 * @since  0.9
 * @return string The default value text..
 */
function nabm_get_footer_default_value() {
	return 'Copyright [footer_copyright] [footer_childtheme_link] &amp;middot; [footer_genesis_link] [footer_studiopress_link] &amp;middot; [footer_wordpress_link] &amp;middot; [footer_loginout]';
}

add_filter( 'genesis_theme_settings_defaults', 'nabm_footer_defaults' );
/**
 * Register footer defaults.
 *
 * @since  0.1
 * @param  array $defaults Existing defaults.
 * @return array $defaults Modified defaults.
 */
function nabm_footer_defaults( $defaults ) {
	$defaults['nabm_footer_creds'] = nabm_get_footer_default_value();

	return $defaults;
}

add_action( 'genesis_settings_sanitizer_init', 'nabm_sanitization_filters' );
/**
 * Add sanitization to our custom field.
 *
 * @since  0.1
 * @return void
 */
function nabm_sanitization_filters() {
	genesis_add_option_filter(
		'safe_html',
		GENESIS_SETTINGS_FIELD,
		array(
			'nabm_footer_creds',
		)
	);
}

add_action( 'genesis_theme_settings_metaboxes', 'nabm_footer_settings_box' );
/**
 * Register custom metabox for the Genesis admin panel.
 *
 * @since  0.1
 * @param  string $hook The hook used for the Genesis admin panel.
 * @return void
 */
function nabm_footer_settings_box( $hook ) {
	add_meta_box(
		'nabm-footer-box',
		'Custom Footer Text',
		'nabm_footer_box',
		$hook,
		'main',
		'high'
	);
}

/**
 * Get the default input label text used in the admin and customizer.
 *
 * @since  0.9
 * @return string The default label text.
 */
function nabm_get_footer_input_label_text() {
	return __( 'Custom Footer Text', 'nabm_footer' );
}

/**
 * Get the default input helper text used in the admin and customizer.
 *
 * @since  0.9
 * @return string The default helper text.
 */
function nabm_get_footer_input_helper_text() {
	return __( 'Enter your custom credits text, including HTML if desired. <strong>Please note:</strong> This option will not work if your functions.php already has a function for custom footer text.', 'nabm_footer' );
}

/**
 * Get the default input description text used in the admin and customizer.
 *
 * @since  0.9
 * @return string The default description text.
 */
function nabm_get_footer_input_decription_text() {
	return __( '<b>Default Text:</b><br/> Copyright [footer_copyright] [footer_childtheme_link] &amp;middot; [footer_genesis_link] [footer_studiopress_link] &amp;middot; [footer_wordpress_link] &amp;middot; [footer_loginout]', 'nabm_footer' );
}

/**
 * Outpoot our custom metabox for the Genesis admin panel.
 *
 * @since  0.1
 * @return void
 */
function nabm_footer_box() {
	?>
	<p><?php echo nabm_get_footer_input_helper_text(); ?><br />
	<p><?php echo nabm_get_footer_input_label_text(); ?><br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[nabm_footer_creds]" value="<?php echo esc_attr( genesis_get_option( 'nabm_footer_creds' ) ); ?>" size="75" /> </p>
	<span class="description"><?php echo nabm_get_footer_input_decription_text(); ?></span></p>
	<?php
}

add_filter( 'genesis_footer_output', 'nabm_footer_creds_text', 10, 3 );
/**
 * Customize the footer credits text.
 *
 * @since  0.1
 * @param  string $creds The default footer credits.
 * @return string $creds The modified footer credits.
 */
function nabm_footer_creds_text( $creds ) {
	$custom_creds = genesis_get_option( 'nabm_footer_creds' );

	if ( $custom_creds ) {
		return $custom_creds;
	}

	return $creds;
}

add_filter( 'genesis_customizer_theme_settings_config', 'nabm_customizer_theme_settings_config' );
/**
 * Customize the footer credits text.
 *
 * @since  0.1
 * @param  array $config The default theme settings config.
 * @return array $config The modified theme settings config.
 */
function nabm_customizer_theme_settings_config( $config ) {
	if ( ! isset( $config['genesis']['sections'] ) ) {
		return $config;
	}

	$config['genesis']['sections']['nabm_footer_creds'] = array(
		'title'       => nabm_get_footer_input_label_text(),
		'description' => nabm_get_footer_input_helper_text(),
		'panel'       => 'genesis',
		'controls'    => array(
			'nabm_footer_creds' => array(
				'label'       => nabm_get_footer_input_label_text(),
				'description' => nabm_get_footer_input_decription_text(),
				'section'     => 'nabm_footer_creds',
				'type'        => 'textarea',
				'settings'    => array(
					'default' => nabm_get_footer_default_value(),
				),
			),
		),
	);

	return $config;
}
