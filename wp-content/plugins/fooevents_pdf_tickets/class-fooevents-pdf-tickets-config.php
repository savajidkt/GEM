<?php
/**
 * Config class.
 *
 * @link https://www.fooevents.com
 * @package fooevents-pdf-tickets
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;}

/**
 * Plugin config class
 */
class FooEvents_PDF_Tickets_Config {

	/**
	 * Path to classes
	 *
	 * @var string $class_path path to classes
	 */
	public $class_path;

	/**
	 * Plugin URL
	 *
	 * @var string $plugin_url plugin URL
	 */
	public $plugin_url;

	/**
	 * Plugin Directory
	 *
	 * @var string $plugin_directory plugin directory
	 */
	public $plugin_directory;

	/**
	 * Template path
	 *
	 * @var string $template_path template path
	 */
	public $template_path;

	/**
	 * Barcode path
	 *
	 * @var string $barcode_path barcode path
	 */
	public $barcode_path;

	/**
	 * PDF ticket path
	 *
	 * @var string $pdf_ticket_path PDF ticket path
	 */
	public $pdf_ticket_path;

	/**
	 * Styles path
	 *
	 * @var string $styles_path styles path
	 */
	public $styles_path;

	/**
	 * Template path in theme
	 *
	 * @var string $template_path_theme template path in theme
	 */
	public $template_path_theme;

	/**
	 * Path
	 *
	 * @var string $path path
	 */
	public $path;

	/**
	 * Plugin path
	 *
	 * @var string $plugin_file plugin file
	 */
	public $plugin_file;

	/**
	 * Theme pack path
	 *
	 * @var string $theme_packs_path theme pack path
	 */
	public $theme_packs_path;

	/**
	 * Theme pack URL
	 *
	 * @var string $theme_packs_url theme pack url
	 */
	public $theme_packs_url;

	/**
	 * Upload directory path
	 *
	 * @var string $uploads_dir_path upload directory path
	 */
	public $uploads_dir_path;

	/**
	 * Uploads path
	 *
	 * @var string $uploads_path uploads path
	 */
	public $uploads_path;

	/**
	 * Barcode URL
	 *
	 * @var string $barcode_url barcode URL
	 */
	public $barcode_url;

	/**
	 * Plugin Data
	 *
	 * @var object $plugin_data plugin data
	 */
	public $plugin_data;

	/**
	 * Initialize configuration variables to be used as object.
	 */
	public function __construct() {

		$upload_dir = wp_upload_dir();

		$this->class_path            = plugin_dir_path( __FILE__ ) . 'classes/';
		$this->plugin_directory      = 'fooevents_pdf_tickets';
		$this->event_plugin_url      = plugins_url() . '/' . $this->plugin_directory . '/';
		$this->template_path         = plugin_dir_path( __FILE__ ) . 'templates/';
		$this->pdf_ticket_path       = $upload_dir['basedir'] . '/fooevents/pdftickets/';
		$this->pdf_ticket_url        = $upload_dir['baseurl'] . '/fooevents/pdftickets/';
		$this->styles_path           = plugin_dir_url( __FILE__ ) . 'css/';
		$this->template_path_theme   = get_stylesheet_directory() . '/' . $this->plugin_directory . '/templates/';
		$this->path                  = plugin_dir_path( __FILE__ );
		$this->plugin_file           = $this->path . 'fooevents-pdf-tickets.php';
		$this->theme_packs_path      = $upload_dir['basedir'] . '/fooevents/themes/';
		$this->theme_packs_url       = $upload_dir['baseurl'] . '/fooevents/themes/';
		$this->uploads_dir_path      = $upload_dir['basedir'];
		$this->uploads_path          = $upload_dir['basedir'] . '/fooevents/';
		$this->pdf_template_single   = plugin_dir_path( __FILE__ ) . 'templates/default_pdf_single/';
		$this->pdf_template_multiple = plugin_dir_path( __FILE__ ) . 'templates/default_pdf_multiple/';
		$this->barcode_url           = $upload_dir['baseurl'] . '/fooevents/barcodes/';
		$this->barcode_path          = $upload_dir['basedir'] . '/fooevents/barcodes/';

		if ( ! function_exists( 'get_plugin_data' ) ) {

			require_once ABSPATH . 'wp-admin/includes/plugin.php';

		}

		$this->plugin_data = get_plugin_data( __DIR__ . '/fooevents-pdf-tickets.php' );

	}

}
