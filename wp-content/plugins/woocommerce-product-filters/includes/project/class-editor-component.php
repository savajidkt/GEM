<?php

namespace WooCommerce_Product_Filter_Plugin\Project;

use WooCommerce_Product_Filter_Plugin\Admin\Editor\Component,
	WooCommerce_Product_Filter_Plugin\Admin\Editor\Control,
	WooCommerce_Product_Filter_Plugin\Admin\Editor\Panel_Layout;

class Editor_Component extends Component\Base_Component implements Component\Generates_Panels_Interface {
	public function generate_panels() {
		$assets_component = $this->get_component_register()->get( 'Front/Assets' );

		$default_selectors = $assets_component->get_selectors();

		$default_panel = new Panel_Layout\Tabs_Layout(
			array(
				'title'    => __( 'Project', 'woocommerce-product-filters' ),
				'panel_id' => 'Project',
				'tabs'     => array(
					'general'   => array(
						'label'    => __( 'General', 'woocommerce-product-filters' ),
						'controls' => array(
							new Control\Text_Control(
								array(
									'key'            => 'entityTitle',
									'control_source' => 'entity',
									'label'          => __( 'Title', 'woocommerce-product-filters' ),
									'placeholder'    => __( 'Title', 'woocommerce-product-filters' ),
									'default_value'  => __( 'Filters', 'woocommerce-product-filters' ),
									'required'       => true,
								)
							),
							new Control\Select_Control(
								array(
									'key'                 => 'filteringStarts',
									'label'               => __( 'Filtering starts', 'woocommerce-product-filters' ),
									'control_description' => __( 'Apply filters to product immediately when you change options or clicking on the "send" button', 'woocommerce-product-filters' ),
									'options'             => array(
										'auto'        => __( 'Automatically', 'woocommerce-product-filters' ),
										'send-button' => __( 'When on click send button', 'woocommerce-product-filters' ),
									),
									'default_value'       => 'auto',
									'required'            => true,
								)
							),
							new Control\Check_List_Control(
								array(
									'key'                 => 'useComponents',
									'label'               => __( 'Which components to use', 'woocommerce-product-filters' ),
									'control_description' => __( 'Content of components will be updated when filtering', 'woocommerce-product-filters' ),
									'options'             => array(
										'pagination'    => __( 'Pagination', 'woocommerce-product-filters' ),
										'sorting'       => __( 'Sorting', 'woocommerce-product-filters' ),
										'results-count' => __( 'Results count', 'woocommerce-product-filters' ),
										'page-title'    => __( 'Page title', 'woocommerce-product-filters' ),
										'breadcrumb'    => __( 'Breadcrumb', 'woocommerce-product-filters' ),
									),
									'default_value'       => array(
										'pagination',
										'sorting',
										'results-count',
										'page-title',
										'breadcrumb',
									),
								)
							),
							new Control\Switch_Control(
								array(
									'key'           => 'paginationAjax',
									'label'         => __( 'Pagination ajax', 'woocommerce-product-filters' ),
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
											'optionKey' => 'useComponents',
											'operation' => 'inControl',
											'value'     => 'pagination',
										),
									),
								)
							),
							new Control\Switch_Control(
								array(
									'key'           => 'sortingAjax',
									'label'         => __( 'Sorting ajax', 'woocommerce-product-filters' ),
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
											'optionKey' => 'useComponents',
											'operation' => 'inControl',
											'value'     => 'sorting',
										),
									),
								)
							),
						),
					),
					'selectors' => array(
						'label'    => __( 'Selectors', 'woocommerce-product-filters' ),
						'controls' => array(
							new Control\Text_Control(
								array(
									'key'           => 'productsContainerSelector',
									'label'         => __( 'Products container selector', 'woocommerce-product-filters' ),
									'default_value' => $default_selectors['productsContainer'],
									'required'      => true,
								)
							),
							new Control\Text_Control(
								array(
									'key'           => 'paginationSelector',
									'label'         => __( 'Pagination selector', 'woocommerce-product-filters' ),
									'default_value' => $default_selectors['paginationContainer'],
									'display_rules' => array(
										array(
											'optionKey' => 'useComponents',
											'operation' => 'inControl',
											'value'     => 'pagination',
										),
									),
									'required'      => true,
								)
							),
							new Control\Text_Control(
								array(
									'key'           => 'resultCountSelector',
									'label'         => __( 'Result count selector', 'woocommerce-product-filters' ),
									'default_value' => $default_selectors['resultCount'],
									'display_rules' => array(
										array(
											'optionKey' => 'useComponents',
											'operation' => 'inControl',
											'value'     => 'results-count',
										),
									),
									'required'      => true,
								)
							),
							new Control\Text_Control(
								array(
									'key'           => 'sortingSelector',
									'label'         => __( 'Sorting selector', 'woocommerce-product-filters' ),
									'default_value' => $default_selectors['sorting'],
									'display_rules' => array(
										array(
											'optionKey' => 'useComponents',
											'operation' => 'inControl',
											'value'     => 'sorting',
										),
									),
									'required'      => true,
								)
							),
							new Control\Text_Control(
								array(
									'key'           => 'pageTitleSelector',
									'label'         => __( 'Page title selector', 'woocommerce-product-filters' ),
									'default_value' => $default_selectors['pageTitle'],
									'display_rules' => array(
										array(
											'optionKey' => 'useComponents',
											'operation' => 'inControl',
											'value'     => 'page-title',
										),
									),
									'required'      => true,
								)
							),
							new Control\Text_Control(
								array(
									'key'           => 'breadcrumbSelector',
									'label'         => __( 'Breadcrumb selector', 'woocommerce-product-filters' ),
									'default_value' => $default_selectors['breadcrumb'],
									'display_rules' => array(
										array(
											'optionKey' => 'useComponents',
											'operation' => 'inControl',
											'value'     => 'breadcrumb',
										),
									),
									'required'      => true,
								)
							),
							new Control\Switch_Control(
								array(
									'key'           => 'multipleContainersForProducts',
									'label'         => __( 'Multiple containers for products', 'woocommerce-product-filters' ),
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
						),
					),
				),
			)
		);

		return array( $default_panel );
	}
}
