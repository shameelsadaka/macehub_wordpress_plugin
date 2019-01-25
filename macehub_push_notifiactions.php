<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.shameelsadaka.github.io
 * @since             1.0.0
 * @package           Macehub_push_notifiactions
 *
 * @wordpress-plugin
 * Plugin Name:       Macehub Push Notifications
 * Plugin URI:        http://www.macehub.in/plugin
 * Description:       Use this plugin to send notifications to macians through macehub app.
 * Version:           1.0.0
 * Author:            Shameel Kadannamanna
 * Author URI:        www.shameelsadaka.github.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       macehub_push_notifiactions
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-macehub_push_notifiactions-activator.php
 */
function activate_macehub_push_notifiactions() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-macehub_push_notifiactions-activator.php';
	Macehub_push_notifiactions_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-macehub_push_notifiactions-deactivator.php
 */
function deactivate_macehub_push_notifiactions() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-macehub_push_notifiactions-deactivator.php';
	Macehub_push_notifiactions_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_macehub_push_notifiactions' );
register_deactivation_hook( __FILE__, 'deactivate_macehub_push_notifiactions' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-macehub_push_notifiactions.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_macehub_push_notifiactions() {

	$plugin = new Macehub_push_notifiactions();
	$plugin->run();

}
run_macehub_push_notifiactions();
