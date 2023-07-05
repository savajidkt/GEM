<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;}
/**
 * Plugin Name: FooEvents PDF Tickets
 * Description: Attach event tickets or booking confirmations as PDF files to the email that is sent to the attendee or ticket purchaser.
 * Version: 1.9.23
 * Author: FooEvents
 * Plugin URI: https://www.fooevents.com/
 * Author URI: https://www.fooevents.com/
 * Developer: FooEvents
 * Developer URI: https://www.fooevents.com/
 * Text Domain: fooevents-pdf-tickets
 *
 * Copyright: © 2009-2022 FooEvents.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

require WP_PLUGIN_DIR . '/fooevents_pdf_tickets/class-fooevents-pdf-tickets-config.php';
require WP_PLUGIN_DIR . '/fooevents_pdf_tickets/class-fooevents-pdf-tickets.php';
require WP_PLUGIN_DIR . '/fooevents_pdf_tickets/vendor/autoload.php';

$fooevents_pdf_tickets = new FooEvents_PDF_Tickets();
