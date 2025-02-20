<?php

/**
 * POS Settings.
 *
 * @author   Paul Kilmurray <paul@kilbot.com>
 *
 * @see     http://wcpos.com
 */

namespace WCPOS\WooCommercePOS\Admin;

use const WCPOS\WooCommercePOS\PLUGIN_NAME;
use const WCPOS\WooCommercePOS\PLUGIN_URL;
use const WCPOS\WooCommercePOS\VERSION;

class Settings {

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
	}

	/**
	 * Add Settings page to admin menu.
	 */
	public function admin_menu(): void {
		$page_hook_suffix = add_submenu_page(
			PLUGIN_NAME,
			// translators: wordpress
			__( 'Settings' ),
			// translators: wordpress
			__( 'Settings' ),
			'manage_woocommerce_pos',
			PLUGIN_NAME . '-settings',
			array( $this, 'display_settings_page' )
		);

		add_action( "load-{$page_hook_suffix}", array( $this, 'enqueue_assets' ) );
	}

	/**
	 * Output the settings pages.
	 */
	public function display_settings_page(): void {
		printf('<div id="woocommerce-pos-settings">
			<div id="woocommerce-pos-js-error" class="wrap">
				<h1>%s</h1>
				<p>%s <a href="mailto:support@wcpos.com">support@wcpos.com</a></p>
			</div>
		</div>',
            __( 'Error', 'woocommerce-pos' ),
            __( 'Settings failed to load, please contact support', 'woocommerce-pos' )
		);
	}

	/**
	 * Enqueue assets.
	 *
	 * Note: SCRIPT_DEBUG should be set in the wp-config.php file for debugging
	 *
	 * @return void
	 */
	public function enqueue_assets() {
		$is_development = isset( $_ENV['DEVELOPMENT'] ) && $_ENV['DEVELOPMENT'];
		$dir = $is_development ? 'build' : 'assets';

		wp_enqueue_style(
			PLUGIN_NAME . '-settings-styles',
			PLUGIN_URL . $dir . '/css/settings.css',
			array(
				'wp-components',
			),
			VERSION
		);


		/**
		 * unpkg.com is unreliable, so we're packaging these dependencies
		 */
//		wp_enqueue_script(
//			PLUGIN_NAME . '-react-query',
//			'https://unpkg.com/@tanstack/react-query@4/build/umd/index.production.js',
//			array(
//				'react',
//				'react-dom',
//			),
//			VERSION
//		);
//
//		wp_enqueue_script(
//			PLUGIN_NAME . '-react-beautiful-dnd',
//			'https://unpkg.com/react-beautiful-dnd@13.1.1/dist/react-beautiful-dnd.js',
//			array(
//				'react',
//				'react-dom',
//			),
//			VERSION
//		);

		wp_enqueue_script(
			PLUGIN_NAME . '-transifex',
			'https://cdn.jsdelivr.net/npm/@transifex/native/dist/browser.native.min.js',
			array(),
			VERSION
		);

		wp_enqueue_script(
			PLUGIN_NAME . '-settings',
			PLUGIN_URL . $dir . '/js/settings.js',
			array(
				'react',
				'react-dom',
				'wp-components',
				'wp-element',
				'wp-i18n',
				'wp-api-fetch',
				'lodash',
				PLUGIN_NAME . '-transifex',
			),
			VERSION,
			true
		);

		if ( $is_development ) {
			wp_enqueue_script(
				'webpack-live-reload',
				'http://localhost:35729/livereload.js',
				null,
				null,
				true
			);
		}

		do_action( 'woocommerce_pos_admin_settings_enqueue_assets' );
	}

	/**
	 * Delete settings in WP options table
	 *
	 * @param $id
	 * @return bool
	 */
	public static function delete_settings($id ) {
		return delete_option( 'woocommerce_pos_' . $id );
	}

	/**
	 * Delete all settings in WP options table
	 */
	public static function delete_all_settings() {
		global $wpdb;
		$wpdb->query(
			$wpdb->prepare( "
        DELETE FROM {$wpdb->options}
        WHERE option_name
        LIKE '%s'",
				'woocommerce_pos_%'
			)
		);
	}

	/**
	 * @return int
	 */
	public static function get_db_version() {
		return get_option( 'woocommerce_pos_db_version', 0 );
	}

	/**
	 * updates db to new version number
	 * bumps the idb version number
	 */
	public static function bump_versions() {
		add_option( 'woocommerce_pos_db_version', VERSION, '', 'no' );
	}
}
