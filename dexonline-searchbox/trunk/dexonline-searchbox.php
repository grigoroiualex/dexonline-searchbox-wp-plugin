<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://dexonline.ro/unelte
 * @since             1.0.0
 * @package           Dexonline_Searchbox
 * @author            Alexandru Marian Grigoroiu <grigoroiualexandru@gmail.com>
 * @license           GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name:       Dexonline Searchbox
 * Plugin URI:        http://dexonline.ro/unelte
 * Description:       Adds a searchbox to help easily search romanian words definitions. 
 * Version:           1.0.0
 * Author:            Alexandru Marian Grigoroiu
 * Author URI:        http://grigoroiualex.ro/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dexonline-searchbox
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/grigoroiualex/dexonline-searchbox-wp-plugin
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-dexonline-searchbox-activator.php';

/**
 * The code that runs during plugin deactivation.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-dexonline-searchbox-deactivator.php';

/** This action is documented in includes/class-dexonline-searchbox-activator.php */
register_activation_hook( __FILE__, array( 'Dexonline_Searchbox_Activator', 'activate' ) );

/** This action is documented in includes/class-dexonline-searchbox-deactivator.php */
register_deactivation_hook( __FILE__, array( 'Dexonline_Searchbox_Deactivator', 'deactivate' ) );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-dexonline-searchbox.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_name() {

	$plugin = new Dexonline_Searchbox();
	$plugin->run();

}
run_plugin_name();
