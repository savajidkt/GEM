<?php

namespace WooCommerce_Product_Filter_Plugin\Admin;

use WooCommerce_Product_Filter_Plugin\Structure;

/**
 * Class WC_Settings
 *
 * @package WooCommerce_Product_Filter_Plugin\Admin
 */
class WC_Settings extends Structure\Component {
	public function get_project_post_type() {
		return $this->get_component_register()->get( 'Project/Post_Type' )->get_post_type();
	}

	public function attach_hooks( Structure\Hook_Manager $hook_manager ) {
		$hook_manager->add_filter( 'woocommerce_get_sections_products', 'add_section', 30 );

		$hook_manager->add_action( 'woocommerce_get_settings_products', 'add_settings', 10, 2 );

		$hook_manager->add_action( 'woocommerce_admin_field_wcpf_js_editor', 'print_js_editor' );
	}

	public function add_section( $sections ) {
		$sections['woocommerce-product-filters'] = __( 'Filters', 'woocommerce-product-filters' );

		return $sections;
	}

	public function add_settings( $settings, $current_section ) {
		if ( 'woocommerce-product-filters' === $current_section ) {
			$settings = $this->get_settings();
		}

		return $settings;
	}

	/**
	 * Get plugin settings array.
	 *
	 * @return array
	 */
	public function get_settings() {
		$projects = array(
			0 => __( 'Not selected', 'woocommerce-product-filters' ),
		);

		$posts = get_posts(
			array(
				'post_type'      => $this->get_project_post_type(),
				'posts_per_page' => -1,
			)
		);

		if ( is_array( $posts ) ) {
			foreach ( $posts as $post ) {
				$projects[ $post->ID ] = $this->get_hook_manager()->apply_filters( 'the_title', $post->post_title, $post->ID );
			}
		}

		return $this->get_hook_manager()->apply_filters(
			'wcpf_wc_filter_settings',
			array(
				'section_title'                           => array(
					'name' => __( 'Filters', 'woocommerce-product-filters' ),
					'type' => 'title',
					'desc' => '',
					'id'   => 'wcpf_setting_section_title',
				),
				'default_project'                         => array(
					'title'    => __( 'Filters for product archive', 'woocommerce-product-filters' ),
					'type'     => 'select',
					'class'    => 'wc-enhanced-select',
					'options'  => $projects,
					'desc_tip' => __( 'Select product archive filter. It will modify list of products depending on options selected.', 'woocommerce-product-filters' ),
					'default'  => 0,
					'id'       => 'wcpf_setting_default_project',
				),
				'out_of_stock_products'                   => array(
					'title'   => __( 'Out of stock products', 'woocommerce-product-filters' ),
					'type'    => 'select',
					'class'   => 'wc-enhanced-select',
					'options' => array(
						'no-action'                  => __( 'No action', 'woocommerce-product-filters' ),
						'always-hide'                => __( 'Always hide', 'woocommerce-product-filters' ),
						'hide-if-active-any-options' => __( 'Hide if active options', 'woocommerce-product-filters' ),
					),
					'default' => 'no-action',
					'id'      => 'wcpf_setting_out_of_stock_products',
				),
				'scroll_top'                              => array(
					'title'   => __( 'Scroll top', 'woocommerce-product-filters' ),
					'type'    => 'checkbox',
					'id'      => 'wcpf_scroll_top',
					'default' => 'no',
				),
				'dynamic_image_change'                    => array(
					'title'   => __( 'Adaptive thumbnails', 'woocommerce-product-filters' ),
					'type'    => 'checkbox',
					'id'      => 'wcpf_setting_dynamic_image_change',
					'default' => 'no',
				),
				'large_product_counts'                    => [
					'title'   => __( 'Large product counts', 'woocommerce-product-filters' ),
					'type'    => 'checkbox',
					'id'      => 'wcpf_setting_large_product_counts',
					'desc'    => __( 'Uncapped large product counts in filters', 'woocommerce-product-filters' ),
					'default' => 'no',
				],
				'reduced_stock_query_size'                => [
					'title'   => __( 'Faster product counts', 'woocommerce-product-filters' ),
					'type'    => 'checkbox',
					'id'      => 'wcpf_setting_reduced_stock_query_size',
					'desc'    => __( 'Better performance for large numbers of product variants', 'woocommerce-product-filters' ),
					'default' => 'no',
				],
				'search_selectors_in_overrides_templates' => array(
					'title'   => __( 'Search selectors', 'woocommerce-product-filters' ),
					'type'    => 'checkbox',
					'id'      => 'search_selectors_in_overrides_templates',
					'desc'    => __( 'Component selectors in overrides WooCommerce templates', 'woocommerce-product-filters' ),
					'default' => 'no',
				),
				'script_after_updating_products'          => array(
					'title'   => __( 'Script after update', 'woocommerce-product-filters' ),
					'type'    => 'wcpf_js_editor',
					'id'      => 'wcpf_script_after_products_update',
					'default' => '',
					'class'   => 'ace_text-input',
				),
				'section_end'                             => array(
					'type' => 'sectionend',
					'id'   => 'wcpf_setting_section_end',
				),
			)
		);
	}

	public function print_js_editor( $value ) {
		$this->get_template_loader()->render_template(
			'js-editor.php',
			array(
				'value'        => $value,
				'option_value' => get_option( $value['id'], $value['default'] ),
			),
			__DIR__ . '/views'
		);
	}
}
