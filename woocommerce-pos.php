<?php
/**
 * Plugin Name:       WooCommerce POS
 * Plugin URI:        https://wordpress.org/plugins/woocommerce-pos/
 * Description:       A simple front-end for taking WooCommerce orders at the Point of Sale. Requires <a href="http://wordpress.org/plugins/woocommerce/">WooCommerce</a>.
 * Version:           1.0.0-beta.4
 * Author:            kilbot
 * Author URI:        http://wcpos.com
 * Text Domain:       woocommerce-pos
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Domain Path:       /languages
 * WC tested up to:   6.2
 * WC requires at least: 5.3
 *
 * @author    Paul Kilmurray <paul@kilbot.com>
 *
 * @see      http://wcpos.com
 */

namespace WCPOS\WooCommercePOS;

use Dotenv\Dotenv;

// Define plugin constants.
const VERSION = '1.0.0-beta.4';
const PLUGIN_NAME = 'woocommerce-pos';
const SHORT_NAME = 'wcpos';
\define( __NAMESPACE__ . '\PLUGIN_FILE', plugin_basename( __FILE__ ) ); // 'woocommerce-pos/woocommerce-pos.php'
\define( __NAMESPACE__ . '\PLUGIN_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );
\define( __NAMESPACE__ . '\PLUGIN_URL', trailingslashit( plugins_url( basename( plugin_dir_path( __FILE__ ) ), basename( __FILE__ ) ) ) );

// Autoloader
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';

	/**
	 * Environment variables.
	 */
	Dotenv::createImmutable( __DIR__ )->safeLoad();

	/**
	 * Activate plugin
	 */
	new Activator();

	/**
	 * Deactivate plugin
	 */
	new Deactivator();

} else {
	add_action( 'admin_notices', function() {
		?>
		<div class="notice notice-error">
			<p><?php esc_html_e( 'The WooCommerce POS plugin failed to load correctly.', 'woocommerce-pos' ); ?></p>
		</div>
		<?php
	} );
}


