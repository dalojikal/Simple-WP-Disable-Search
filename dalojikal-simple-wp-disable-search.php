<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.dalojikal.com/wp-plugins/dalojikal-simple-wp-disable-search
 * @since             1.0.0
 * @package           Dalojikal_Simple_Wp_Disable_Search
 *
 * @wordpress-plugin
 * Plugin Name:       Simple WP Disable Search by dalojikal
 * Plugin URI:        https://www.dalojikal.com/wp/plugins/dalojikal-simple-wp-disable-search
 * Description:       A simple plugin to disable search functionality on your wordpress site.
 * Version:           1.0.0
 * Author:            dalojikal
 * Author URI:        https://www.dalojikal.com/wp-plugins/dalojikal-simple-wp-disable-search
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dalojikal-simple-wp-disable-search
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
define( 'DALOJIKAL_SIMPLE_WP_DISABLE_SEARCH_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dalojikal-simple-wp-disable-search-activator.php
 */
function activate_dalojikal_simple_wp_disable_search() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dalojikal-simple-wp-disable-search-activator.php';
	Dalojikal_Simple_Wp_Disable_Search_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dalojikal-simple-wp-disable-search-deactivator.php
 */
function deactivate_dalojikal_simple_wp_disable_search() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dalojikal-simple-wp-disable-search-deactivator.php';
	Dalojikal_Simple_Wp_Disable_Search_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_dalojikal_simple_wp_disable_search' );
register_deactivation_hook( __FILE__, 'deactivate_dalojikal_simple_wp_disable_search' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dalojikal-simple-wp-disable-search.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_dalojikal_simple_wp_disable_search() {

	$plugin = new Dalojikal_Simple_Wp_Disable_Search();
	$plugin->run();

}
run_dalojikal_simple_wp_disable_search();
