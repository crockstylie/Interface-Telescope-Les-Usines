<?php

/**
 * Interface Téléscope Les Usines
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           interface-telescope-les-usines
 *
 * @wordpress-plugin
 * Plugin Name:       Interface Téléscope Les Usines
 * Plugin URI:        http://lesusines.fr
 * Description:       Gestion à distance depuis une interface web du téléscope construit aux Usines de LIGUGÉ.
 * Version:           1.0.0
 * Author:            Les Makers des Usines
 * Author URI:        http://lesusines.fr
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       interface-telescope-les-usines
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'INTERFACE_TELESCOPE_LES_USINES_VERSION', '0.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-interface-telescope-les-usines-activator.php
 */
function activate_interface_telescope_les_usines() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-interface-telescope-les-usines-activator.php';
	interface_telescope_les_usines_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-interface-telescope-les-usines-deactivator.php
 */
function deactivate_interface_telescope_les_usines() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-interface-telescope-les-usines-deactivator.php';
	interface_telescope_les_usines_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_interface_telescope_les_usines' );
register_deactivation_hook( __FILE__, 'deactivate_interface_telescope_les_usines' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-interface-telescope-les-usines.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_interface_telescope_les_usines() {

	$plugin = new interface_telescope_les_usines();
	$plugin->run();

}
run_interface_telescope_les_usines();
