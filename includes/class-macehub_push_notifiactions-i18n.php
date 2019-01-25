<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.shameelsadaka.github.io
 * @since      1.0.0
 *
 * @package    Macehub_push_notifiactions
 * @subpackage Macehub_push_notifiactions/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Macehub_push_notifiactions
 * @subpackage Macehub_push_notifiactions/includes
 * @author     Shameel Kadannamanna <shameelsadaka@ieee.org>
 */
class Macehub_push_notifiactions_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'macehub_push_notifiactions',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
