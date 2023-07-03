<?php

namespace WooCommerce_Product_Filter_Plugin\Field\Price_Slider;

use WooCommerce_Product_Filter_Plugin\Admin\Editor\Control,
	WooCommerce_Product_Filter_Plugin\Admin\Editor\Component,
	WooCommerce_Product_Filter_Plugin\Admin\Editor\Panel_Layout,
	WooCommerce_Product_Filter_Plugin\Field\Editor\Field_Projection;

class Editor_Component extends Component\Base_Component implements Component\Generates_Panels_Interface, Component\Generates_Projection_Interface {
	public function generate_panels() {
		$field_controls = array(
			new Control\Text_control(
				array(
					'key'            => 'entityTitle',
					'control_source' => 'entity',
					'label'          => __( 'Title', 'woocommerce-product-filters' ),
					'placeholder'    => __( 'Title', 'woocommerce-product-filters' ),
					'required'       => true,
				)
			),
			new Control\Radio_List_Control(
				array(
					'key'           => 'optionKeyFormat',
					'label'         => __( 'URL format', 'woocommerce-product-filters' ),
					'options'       => array(
						'dash' => __( 'Parameters through a dash', 'woocommerce-product-filters' ),
						'two'  => __( 'Two parameters', 'woocommerce-product-filters' ),
					),
					'default_value' => 'dash',
				)
			),
			new Control\Text_Control(
				array(
					'key'                 => 'optionKey',
					'label'               => __( 'URL key', 'woocommerce-product-filters' ),
					'placeholder'         => __( 'option-key', 'woocommerce-product-filters' ),
					'control_description' => __( 'The “URL key” is the URL-friendly version of the title. It is usually all lowercase and contains only letters, numbers, and hyphens.', 'woocommerce-product-filters' ),
					'display_rules'       => array(
						array(
							'optionKey' => 'optionKeyFormat',
							'operation' => '==',
							'value'     => 'dash',
						),
					),
					'required'            => true,
				)
			),
			new Control\Text_Control(
				array(
					'key'                 => 'minPriceOptionKey',
					'label'               => __( 'URL key for minimum price', 'woocommerce-product-filters' ),
					'placeholder'         => __( 'option-key', 'woocommerce-product-filters' ),
					'control_description' => __( 'The “URL key for minimum price” is the URL-friendly version of “minimum price”. It is usually all lowercase and contains only letters, numbers, and hyphens.', 'woocommerce-product-filters' ),
					'display_rules'       => array(
						array(
							'optionKey' => 'optionKeyFormat',
							'operation' => '==',
							'value'     => 'two',
						),
					),
					'required'            => true,
				)
			),
			new Control\Text_Control(
				array(
					'key'                 => 'maxPriceOptionKey',
					'label'               => __( 'URL key for maximum price', 'woocommerce-product-filters' ),
					'placeholder'         => __( 'option-key', 'woocommerce-product-filters' ),
					'control_description' => __( 'The “URL key for maximum price” is the URL-friendly version of “maximum price”. It is usually all lowercase and contains only letters, numbers, and hyphens.', 'woocommerce-product-filters' ),
					'display_rules'       => array(
						array(
							'optionKey' => 'optionKeyFormat',
							'operation' => '==',
							'value'     => 'two',
						),
					),
					'required'            => true,
				)
			),
		);

		$visual_controls = array(
			new Control\Switch_Control(
				array(
					'key'           => 'displayTitle',
					'label'         => __( 'Display title', 'woocommerce-product-filters' ),
					'first_option'  => array(
						'text'  => __( 'On', 'woocommerce-product-filters' ),
						'value' => true,
					),
					'second_option' => array(
						'text'  => __( 'Off', 'woocommerce-product-filters' ),
						'value' => false,
					),
					'default_value' => true,
				)
			),
			new Control\Switch_Control(
				array(
					'key'           => 'displayToggleContent',
					'label'         => __( 'Display toggle content', 'woocommerce-product-filters' ),
					'first_option'  => array(
						'text'  => __( 'On', 'woocommerce-product-filters' ),
						'value' => true,
					),
					'second_option' => array(
						'text'  => __( 'Off', 'woocommerce-product-filters' ),
						'value' => false,
					),
					'default_value' => true,
					'display_rules' => array(
						array(
							'optionKey' => 'displayTitle',
							'operation' => '==',
							'value'     => true,
						),
					),
				)
			),
			new Control\Select_Control(
				array(
					'key'           => 'defaultToggleState',
					'label'         => __( 'Default toggle state', 'woocommerce-product-filters' ),
					'options'       => array(
						'show' => __( 'Show content', 'woocommerce-product-filters' ),
						'hide' => __( 'Hide content', 'woocommerce-product-filters' ),
					),
					'default_value' => 'show',
					'display_rules' => array(
						array(
							'optionKey' => 'displayToggleContent',
							'operation' => '==',
							'value'     => true,
						),
						array(
							'optionKey' => 'displayTitle',
							'operation' => '==',
							'value'     => true,
						),
					),
				)
			),
			new Control\Text_Control(
				array(
					'key'         => 'cssClass',
					'label'       => __( 'CSS Class', 'woocommerce-product-filters' ),
					'placeholder' => __( 'class-name', 'woocommerce-product-filters' ),
				)
			),
			new Control\Switch_Control(
				array(
					'key'           => 'displayMinMaxInput',
					'label'         => __( 'Display max and min inputs', 'woocommerce-product-filters' ),
					'first_option'  => array(
						'text'  => __( 'On', 'woocommerce-product-filters' ),
						'value' => true,
					),
					'second_option' => array(
						'text'  => __( 'Off', 'woocommerce-product-filters' ),
						'value' => false,
					),
					'default_value' => false,
				)
			),
			new Control\Switch_Control(
				array(
					'key'           => 'displayPriceLabel',
					'label'         => __( 'Display price label', 'woocommerce-product-filters' ),
					'first_option'  => array(
						'text'  => __( 'On', 'woocommerce-product-filters' ),
						'value' => true,
					),
					'second_option' => array(
						'text'  => __( 'Off', 'woocommerce-product-filters' ),
						'value' => false,
					),
					'default_value' => true,
				)
			),
		);

		$default_panel = new Panel_Layout\Tabs_Layout(
			array(
				'panel_id' => 'PriceSliderField',
				'title'    => __( 'Price Slider', 'woocommerce-product-filters' ),
				'tabs'     => array(
					'general' => array(
						'label'    => __( 'General', 'woocommerce-product-filters' ),
						'controls' => $field_controls,
					),
					'visual'  => array(
						'label'    => __( 'Visual', 'woocommerce-product-filters' ),
						'controls' => $visual_controls,
					),
				),
			)
		);

		return array( $default_panel );
	}

	public function generate_projection() {
		return new Field_Projection(
			array(
				'title' => __( 'Price Slider', 'woocommerce-product-filters' ),
			)
		);
	}
}
