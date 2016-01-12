<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.anuragsingh.me/
 * @since      1.0.0
 *
 * @package    As_Bootstrap_Carousel
 * @subpackage As_Bootstrap_Carousel/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    As_Bootstrap_Carousel
 * @subpackage As_Bootstrap_Carousel/includes
 * @author     Anurag Singh <contact@anuragsingh.me>
 */
class As_Bootstrap_Carousel_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'as-bootstrap-carousel',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
