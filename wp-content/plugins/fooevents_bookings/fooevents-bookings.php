<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;}
/**
 * Plugin Name: FooEvents Bookings
 * Description: Adds booking slots to FooEvents
 * Version: 1.5.23
 * Author: FooEvents
 * Plugin URI: https://www.fooevents.com/
 * Author URI: https://www.fooevents.com/
 * Developer: FooEvents
 * Developer URI: https://www.fooevents.com/
 * Text Domain: fooevents-bookings
 * Copyright: © 2009-2022 FooEvents.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

require WP_PLUGIN_DIR . '/fooevents_bookings/class-fooevents-bookings-config.php';
require WP_PLUGIN_DIR . '/fooevents_bookings/class-fooevents-bookings.php';

$fooevents_bookings = new FooEvents_Bookings();
