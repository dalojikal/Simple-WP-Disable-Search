<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.dalojikal.com/wp-plugins/dalojikal-simple-wp-disable-search
 * @since      1.0.0
 *
 * @package    Dalojikal_Simple_Wp_Disable_Search
 * @subpackage Dalojikal_Simple_Wp_Disable_Search/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Dalojikal_Simple_Wp_Disable_Search
 * @subpackage Dalojikal_Simple_Wp_Disable_Search/includes
 * @author     dalojikal <dalojikal@hotmail.com>
 */
class Dalojikal_Simple_Wp_Disable_Search_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'dalojikal-simple-wp-disable-search',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
