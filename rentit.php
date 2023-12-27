<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://github.com/christos-tsm
 * @since             1.0.0
 * @package           Rentit
 *
 * @wordpress-plugin
 * Plugin Name:       RentIT
 * Plugin URI:        https://https://github.com/christos-tsm/rentit-wp
 * Description:       Rental plugin for cars or boats, with seasonal price functionality and availability per day
 * Version:           1.0.0
 * Author:            Christos TSM
 * Author URI:        https://https://github.com/christos-tsm/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rentit
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'RENTIT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rentit-activator.php
 */
function activate_rentit() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rentit-activator.php';
	Rentit_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rentit-deactivator.php
 */
function deactivate_rentit() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rentit-deactivator.php';
	Rentit_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rentit' );
register_deactivation_hook( __FILE__, 'deactivate_rentit' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rentit.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rentit() {

	$plugin = new Rentit();
	$plugin->run();

}
run_rentit();
