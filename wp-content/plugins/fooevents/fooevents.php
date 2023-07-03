<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;}
/**
 * Plugin Name: FooEvents for WooCommerce
 * Description: FooEvents adds powerful event, ticketing and booking functionality to your WooCommerce website with no commission or ticket fees.
 * Version: 1.18.14
 * Author: FooEvents
 * Plugin URI: https://www.fooevents.com/
 * Author URI: https://www.fooevents.com/
 * Developer: FooEvents
 * Developer URI: https://www.fooevents.com/
 * Text Domain: woocommerce-events
 * WC requires at least: 5.0.0
 * WC tested up to: 6.4.1
 *
 * Copyright: © 2009-2022 FooEvents.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

require WP_PLUGIN_DIR . '/fooevents/class-fooevents-config.php';
require WP_PLUGIN_DIR . '/fooevents/class-fooevents.php';

$fooevents = new FooEvents();
