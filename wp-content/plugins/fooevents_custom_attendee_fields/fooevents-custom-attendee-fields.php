<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;}
/**
 * Plugin Name: FooEvents Custom Attendee Fields
 * Description: Capture customized attendee fields at checkout so you can tailor FooEvents according to your unique event requirements.
 * Version: 1.6.23
 * Author: FooEvents
 * Plugin URI: https://www.fooevents.com/
 * Author URI: https://www.fooevents.com/
 * Developer: FooEvents
 * Developer URI: https://www.fooevents.com/
 * Text Domain: fooevents-custom-attendee-fields
 *
 * Copyright: © 2009-2022 FooEvents.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// include config.
require WP_PLUGIN_DIR . '/fooevents_custom_attendee_fields/class-fooevents-custom-attendee-fields-config.php';
require WP_PLUGIN_DIR . '/fooevents_custom_attendee_fields/class-fooevents-custom-attendee-fields.php';

$fooevents_custom_attendee_fields = new Fooevents_Custom_Attendee_Fields();
