<?php

namespace WooCommerce_Product_Filter_Plugin\Field\Button;

use WooCommerce_Product_Filter_Plugin\Admin\Editor\Component,
	WooCommerce_Product_Filter_Plugin\Admin\Editor\Panel_Layout,
	WooCommerce_Product_Filter_Plugin\Admin\Editor\Control,
	WooCommerce_Product_Filter_Plugin\Field\Editor\Field_Projection;

class Editor_Component extends Component\Base_Component implements Component\Generates_Projection_Interface, Component\Generates_Panels_Interface {
	public function generate_panels() {
		$default_panel = new Panel_Layout\List_Layout(
			array(
				'panel_id' => 'ButtonField',
				'title'    => __( 'Button', 'woocommerce-product-filters' ),
				'controls' => array(
					new Control\Text_Control(
						array(
							'key'            => 'entityTitle',
							'control_source' => 'entity',
							'label'          => __( 'Title', 'woocommerce-product-filters' ),
							'placeholder'    => __( 'Title', 'woocommerce-product-filters' ),
							'required'       => true,
						)
					),
					new Control\Select_Control(
						array(
							'key'     => 'action',
							'label'   => __( 'Action', 'woocommerce-product-filters' ),
							'options' => array(
								'filter' => __( 'Filter', 'woocommerce-product-filters' ),
								'reset'  => __( 'Reset', 'woocommerce-product-filters' ),
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
				),
			)
		);

		return array( $default_panel );
	}

	public function generate_projection() {
		return new Field_Projection(
			array(
				'title' => __( 'Button', 'woocommerce-product-filters' ),
			)
		);
	}
}
