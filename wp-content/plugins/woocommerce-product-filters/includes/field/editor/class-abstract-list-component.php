<?php

namespace WooCommerce_Product_Filter_Plugin\Field\Editor;

use WooCommerce_Product_Filter_Plugin\Admin\Editor\Component,
	WooCommerce_Product_Filter_Plugin\Admin\Editor\Panel_Layout,
	WooCommerce_Product_Filter_Plugin\Admin\Editor\Control;

abstract class Abstract_List_Component extends Component\Base_Component implements Component\Generates_Panels_Interface, Component\Generates_Projection_Interface {
	protected $supports = array();

	abstract public function get_element_id();

	abstract public function get_element_title();

	public function generate_panels() {
		$field_panel = new Panel_Layout\Tabs_Layout(
			array(
				'panel_id' => $this->get_element_id(),
				'title'    => $this->get_element_title(),
				'tabs'     => array(
					'general' => array(
						'label'    => __( 'General', 'woocommerce-product-filters' ),
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
							new Control\Text_Control(
								array(
									'key'                 => 'optionKey',
									'label'               => __( 'URL key', 'woocommerce-product-filters' ),
									'placeholder'         => __( 'option-key', 'woocommerce-product-filters' ),
									'control_description' => __( 'The “URL key” is the URL-friendly version of the title. It is usually all lowercase and contains only letters, numbers, and hyphens', 'woocommerce-product-filters' ),
									'required'            => true,
								)
							),
							new Control\Select_Control(
								array(
									'key'                 => 'itemsSource',
									'label'               => __( 'Source of options', 'woocommerce-product-filters' ),
									'control_description' => __( 'Select source of options, that will be using to filter products', 'woocommerce-product-filters' ),
									'options'             => array(
										'attribute' => __( 'Attribute', 'woocommerce-product-filters' ),
										'category'  => __( 'Category', 'woocommerce-product-filters' ),
										'tag'       => __( 'Tag', 'woocommerce-product-filters' ),
										'taxonomy'  => __( 'Taxonomy', 'woocommerce-product-filters' ),
									),
									'default_value'       => 'attribute',
								)
							),
							new Control\Select_Control(
								array(
									'key'                 => 'itemsSourceAttribute',
									'label'               => __( 'Attribute', 'woocommerce-product-filters' ),
									'options'             => $this->get_attribute_taxonomies(),
									'control_description' => __( 'Choose one of the attributes created in “Products > Attributes”', 'woocommerce-product-filters' ),
									'display_rules'       => array(
										array(
											'optionKey' => 'itemsSource',
											'operation' => '==',
											'value'     => array(
												'attribute',
											),
										),
									),
									'required'            => true,
								)
							),
							new Control\Select_Control(
								array(
									'key'                 => 'itemsSourceCategory',
									'label'               => __( 'Category', 'woocommerce-product-filters' ),
									'options'             => $this->get_categories(),
									'control_description' => __( 'Choose one of the categories created in “Products > Categories”', 'woocommerce-product-filters' ),
									'default_value'       => 'all',
									'display_rules'       => array(
										array(
											'optionKey' => 'itemsSource',
											'operation' => '==',
											'value'     => array(
												'category',
											),
										),
									),
									'required'            => true,
								)
							),
							new Control\Select_Control(
								array(
									'key'                 => 'itemsSourceTaxonomy',
									'label'               => __( 'Taxonomy', 'woocommerce-product-filters' ),
									'options'             => $this->get_taxonomies(),
									'control_description' => __( 'The “Taxonomy” is a grouping mechanism for posts. For example, "product tags" and "product attributes" are also taxonomies', 'woocommerce-product-filters' ),
									'display_rules'       => array(
										array(
											'optionKey' => 'itemsSource',
											'operation' => '==',
											'value'     => array(
												'taxonomy',
											),
										),
									),
									'required'            => true,
								)
							),
							new Control\Select_Control(
								array(
									'key'           => 'itemsDisplayWithoutParents',
									'label'         => __( 'Display', 'woocommerce-product-filters' ),
									'options'       => array(
										'all'      => __( 'All', 'woocommerce-product-filters' ),
										'selected' => __( 'Only Selected', 'woocommerce-product-filters' ),
										'except'   => __( 'Except Selected', 'woocommerce-product-filters' ),
									),
									'default_value' => 'all',
									'display_rules' => array(
										array(
											'optionKey' => 'itemsSource',
											'operation' => 'in',
											'value'     => array(
												'attribute',
												'tag',
											),
										),
									),
								)
							),
							new Control\Select_Control(
								array(
									'key'           => 'itemsDisplay',
									'label'         => __( 'Display', 'woocommerce-product-filters' ),
									'options'       => array(
										'all'      => __( 'All', 'woocommerce-product-filters' ),
										'parent'   => __( 'Only Parent', 'woocommerce-product-filters' ),
										'selected' => __( 'Only Selected', 'woocommerce-product-filters' ),
										'except'   => __( 'Except Selected', 'woocommerce-product-filters' ),
									),
									'default_value' => 'all',
									'display_rules' => array(
										array(
											'optionKey' => 'itemsSource',
											'operation' => 'in',
											'value'     => array(
												'category',
												'taxonomy',
											),
										),
									),
								)
							),
							new Control\Check_List_Control(
								array(
									'key'                 => 'taxonomySelectedItems',
									'label'               => __( 'Select options', 'woocommerce-product-filters' ),
									'control_description' => __( 'Only these options will be displayed in filter', 'woocommerce-product-filters' ),
									'options_handler'     => array( $this, 'get_terms_by_control_values' ),
									'style'               => 'wp',
									'options_depends'     => array(
										'itemsSourceTaxonomy',
										'itemsSourceCategory',
										'itemsSourceAttribute',
										'itemsSource',
									),
									'display_rules'       => array(
										'relation' => 'OR',
										array(
											array(
												'optionKey' => 'itemsDisplay',
												'operation' => '==',
												'value' => 'selected',
											),
											array(
												'optionKey' => 'itemsSource',
												'operation' => 'in',
												'value' => array(
													'category',
													'taxonomy',
												),
											),
										),
										array(
											array(
												'optionKey' => 'itemsDisplayWithoutParents',
												'operation' => '==',
												'value' => 'selected',
											),
											array(
												'optionKey' => 'itemsSource',
												'operation' => 'in',
												'value' => array(
													'attribute',
													'tag',
												),
											),
										),
									),
								)
							),
							new Control\Check_List_Control(
								array(
									'key'                 => 'taxonomyExceptItems',
									'label'               => __( 'Exclude options', 'woocommerce-product-filters' ),
									'control_description' => __( 'These options will not be displayed in filter', 'woocommerce-product-filters' ),
									'options_handler'     => array( $this, 'get_terms_by_control_values' ),
									'style'               => 'wp',
									'options_depends'     => array(
										'itemsSourceTaxonomy',
										'itemsSourceCategory',
										'itemsSourceAttribute',
										'itemsSource',
									),
									'display_rules'       => array(
										'relation' => 'OR',
										array(
											array(
												'optionKey' => 'itemsDisplay',
												'operation' => '==',
												'value' => 'except',
											),
											array(
												'optionKey' => 'itemsSource',
												'operation' => 'in',
												'value' => array(
													'category',
													'taxonomy',
												),
											),
										),
										array(
											array(
												'optionKey' => 'itemsDisplayWithoutParents',
												'operation' => '==',
												'value' => 'except',
											),
											array(
												'optionKey' => 'itemsSource',
												'operation' => 'in',
												'value' => array(
													'attribute',
													'tag',
												),
											),
										),
									),
								)
							),
							new Control\Rules_Builder_Control(
								array(
									'key'                 => 'displayRules',
									'label'               => __( 'Display rules', 'woocommerce-product-filters' ),
									'title_before_fields' => __( 'Show this element if', 'woocommerce-product-filters' ),
								)
							),
						),
					),
					'visual'  => array(
						'label'    => __( 'Visual', 'woocommerce-product-filters' ),
						'controls' => array(
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
							new Control\Text_Control(
								array(
									'key'         => 'cssClass',
									'label'       => __( 'CSS Class', 'woocommerce-product-filters' ),
									'placeholder' => __( 'class-name', 'woocommerce-product-filters' ),
								)
							),
						),
					),
				),
			)
		);

		if ( in_array( 'multi_select_toggle', $this->supports, true ) ) {
			$field_panel->add_control(
				'general',
				new Control\Switch_Control(
					array(
						'key'           => 'multiSelect',
						'label'         => __( 'Multi select', 'woocommerce-product-filters' ),
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
				2
			);
		}

		if ( in_array( 'multi_select', $this->supports, true ) ) {
			$display_rules = array(
				array(
					'optionKey' => 'itemsSource',
					'operation' => 'in',
					'value'     => array(
						'attribute',
						'category',
						'tag',
						'taxonomy',
					),
				),
			);

			if ( in_array( 'multi_select_toggle', $this->supports, true ) ) {
				$display_rules[] = array(
					'optionKey' => 'multiSelect',
					'operation' => '==',
					'value'     => true,
				);
			}

			$field_panel->add_control(
				'general',
				new Control\Radio_List_Control(
					array(
						'key'                 => 'queryType',
						'label'               => __( 'Query type', 'woocommerce-product-filters' ),
						'control_description' => __( 'Type of query that allows you to apply multiple filters. “And” satisfy both conditions. “Or” satisfy at least one of the conditions', 'woocommerce-product-filters' ),
						'options'             => array(
							'and' => __( 'And', 'woocommerce-product-filters' ),
							'or'  => __( 'Or', 'woocommerce-product-filters' ),
						),
						'default_value'       => 'and',
						'is_inline_style'     => true,
						'display_rules'       => $display_rules,
					)
				),
				2
			);
		}

		if ( in_array( 'hierarchical', $this->supports, true ) ) {
			$field_panel->add_control(
				'visual',
				new Control\Switch_Control(
					array(
						'key'                 => 'itemsDisplayHierarchical',
						'label'               => __( 'Display hierarchical', 'woocommerce-product-filters' ),
						'control_description' => __( 'Switch to display options as a tree or a list', 'woocommerce-product-filters' ),
						'first_option'        => array(
							'text'  => __( 'On', 'woocommerce-product-filters' ),
							'value' => true,
						),
						'second_option'       => array(
							'text'  => __( 'Off', 'woocommerce-product-filters' ),
							'value' => false,
						),
						'default_value'       => true,
						'display_rules'       => array(
							array(
								'optionKey' => 'itemsDisplay',
								'operation' => 'in',
								'value'     => array(
									'all',
									'selected',
									'except',
								),
							),
							array(
								'optionKey' => 'itemsSource',
								'operation' => 'in',
								'value'     => array(
									'category',
									'taxonomy',
								),
							),
						),
					)
				)
			);

			$field_panel->add_control(
				'visual',
				new Control\Switch_Control(
					array(
						'key'           => 'displayHierarchicalCollapsed',
						'label'         => __( 'Display hierarchy collapsed', 'woocommerce-product-filters' ),
						'first_option'  => array(
							'text'  => __( 'On', 'woocommerce-product-filters' ),
							'value' => true,
						),
						'second_option' => array(
							'text'  => __( 'Off', 'woocommerce-product-filters' ),
							'value' => false,
						),
						'default_value' => false,
						'display_rules' => array(
							array(
								'optionKey' => 'itemsDisplay',
								'operation' => 'in',
								'value'     => array(
									'all',
									'selected',
									'except',
								),
							),
							array(
								'optionKey' => 'itemsSource',
								'operation' => 'in',
								'value'     => array(
									'category',
									'taxonomy',
								),
							),
							array(
								'optionKey' => 'itemsDisplayHierarchical',
								'operation' => '==',
								'value'     => true,
							),
						),
					)
				)
			);
		}

		if ( in_array( 'stock_status_options', $this->supports, true ) ) {
			$source_control = $field_panel->get_control_by_option_key( 'itemsSource' );

			$source_control->add_option( 'stock-status', __( 'Stock status', 'woocommerce-product-filters' ) );

			$field_panel->add_control(
				'general',
				new Control\Check_List_Control(
					array(
						'key'           => 'displayedStockStatuses',
						'label'         => __( 'Displayed statuses', 'woocommerce-product-filters' ),
						'style'         => 'wp',
						'options'       => array(
							'in-stock'     => __( 'In stock', 'woocommerce-product-filters' ),
							'out-of-stock' => __( 'Out of stock', 'woocommerce-product-filters' ),
							'on-backorder' => __( 'On backorder', 'woocommerce-product-filters' ),
						),
						'default_value' => array( 'in-stock', 'out-of-stock', 'on-backorder' ),
						'display_rules' => array(
							array(
								'optionKey' => 'itemsSource',
								'operation' => '==',
								'value'     => 'stock-status',
							),
						),
					)
				),
				-1
			);

			$field_panel->add_control(
				'general',
				new Control\Text_Control(
					array(
						'key'           => 'inStockText',
						'label'         => __( '"In stock" text', 'woocommerce-product-filters' ),
						'placeholder'   => __( 'In stock', 'woocommerce-product-filters' ),
						'default_value' => __( 'In stock', 'woocommerce-product-filters' ),
						'display_rules' => array(
							array(
								'optionKey' => 'displayedStockStatuses',
								'operation' => 'inControl',
								'value'     => 'in-stock',
							),
							array(
								'optionKey' => 'itemsSource',
								'operation' => '==',
								'value'     => 'stock-status',
							),
						),
					)
				),
				-1
			);

			$field_panel->add_control(
				'general',
				new Control\Text_Control(
					array(
						'key'           => 'outOfStockText',
						'label'         => __( '"Out of stock" text', 'woocommerce-product-filters' ),
						'placeholder'   => __( 'Out of stock', 'woocommerce-product-filters' ),
						'default_value' => __( 'Out of stock', 'woocommerce-product-filters' ),
						'display_rules' => array(
							array(
								'optionKey' => 'displayedStockStatuses',
								'operation' => 'inControl',
								'value'     => 'out-of-stock',
							),
							array(
								'optionKey' => 'itemsSource',
								'operation' => '==',
								'value'     => 'stock-status',
							),
						),
					)
				),
				-1
			);

			$field_panel->add_control(
				'general',
				new Control\Text_Control(
					array(
						'key'           => 'onBackorderText',
						'label'         => __( '"On backorder" text', 'woocommerce-product-filters' ),
						'placeholder'   => __( 'On backorder', 'woocommerce-product-filters' ),
						'default_value' => __( 'On backorder', 'woocommerce-product-filters' ),
						'display_rules' => array(
							array(
								'optionKey' => 'displayedStockStatuses',
								'operation' => 'inControl',
								'value'     => 'on-backorder',
							),
							array(
								'optionKey' => 'itemsSource',
								'operation' => '==',
								'value'     => 'stock-status',
							),
						),
					)
				),
				-1
			);
		}

		if ( in_array( 'reset_item', $this->supports, true ) ) {
			$field_panel->add_control(
				'general',
				new Control\Text_Control(
					array(
						'key'           => 'titleItemReset',
						'label'         => __( '"Show all" text', 'woocommerce-product-filters' ),
						'placeholder'   => __( 'Show all', 'woocommerce-product-filters' ),
						'default_value' => __( 'Show all', 'woocommerce-product-filters' ),
						'required'      => true,
					)
				),
				-1
			);
		}

		if ( in_array( 'sorting', $this->supports, true ) ) {
			$field_panel->add_control(
				'general',
				new Control\Radio_List_Control(
					array(
						'key'             => 'orderby',
						'label'           => __( 'Order by', 'woocommerce-product-filters' ),
						'options'         => array(
							'name'  => __( 'Name', 'woocommerce-product-filters' ),
							'order' => __( 'Order', 'woocommerce-product-filters' ),
							'count' => __( 'Count', 'woocommerce-product-filters' ),
						),
						'default_value'   => 'order',
						'is_inline_style' => true,
						'display_rules'   => array(
							array(
								'optionKey' => 'itemsSource',
								'operation' => 'in',
								'value'     => array(
									'attribute',
									'category',
									'tag',
									'taxonomy',
								),
							),
						),
					)
				),
				-1
			);
		}

		if ( in_array( 'toggle_content', $this->supports, true ) ) {
			$field_panel->add_control(
				'visual',
				new Control\Switch_Control(
					array(
						'key'                 => 'displayToggleContent',
						'label'               => __( 'Display toggle content', 'woocommerce-product-filters' ),
						'control_description' => __( 'Display toggle to hide content', 'woocommerce-product-filters' ),
						'first_option'        => array(
							'text'  => __( 'On', 'woocommerce-product-filters' ),
							'value' => true,
						),
						'second_option'       => array(
							'text'  => __( 'Off', 'woocommerce-product-filters' ),
							'value' => false,
						),
						'default_value'       => true,
						'display_rules'       => array(
							array(
								'optionKey' => 'displayTitle',
								'operation' => '==',
								'value'     => true,
							),
						),
					)
				),
				1
			);

			$field_panel->add_control(
				'visual',
				new Control\Select_Control(
					array(
						'key'                 => 'defaultToggleState',
						'label'               => __( 'Default toggle state', 'woocommerce-product-filters' ),
						'control_description' => __( 'Default state (show/hide)', 'woocommerce-product-filters' ),
						'options'             => array(
							'show' => __( 'Show content', 'woocommerce-product-filters' ),
							'hide' => __( 'Hide content', 'woocommerce-product-filters' ),
						),
						'default_value'       => 'show',
						'display_rules'       => array(
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
				2
			);
		}

		$field_panel->add_control(
			'visual',
			new Control\Select_Control(
				array(
					'key'                 => 'actionForEmptyOptions',
					'label'               => __( 'Action for empty options', 'woocommerce-product-filters' ),
					'control_description' => __( 'Actions with options when no available products', 'woocommerce-product-filters' ),
					'options'             => array(
						'noAction'       => __( 'Show all', 'woocommerce-product-filters' ),
						'hide'           => __( 'Hide', 'woocommerce-product-filters' ),
						'markAsDisabled' => __( 'Mark as disabled', 'woocommerce-product-filters' ),
					),
					'default_value'       => 'noAction',
				)
			)
		);

		if ( in_array( 'product_counts', $this->supports, true ) ) {
			$field_panel->add_control(
				'visual',
				new Control\Switch_Control(
					array(
						'key'                 => 'displayProductCount',
						'label'               => __( 'Display product counts', 'woocommerce-product-filters' ),
						'control_description' => __( 'Show/hide product counts in options', 'woocommerce-product-filters' ),
						'first_option'        => array(
							'text'  => __( 'On', 'woocommerce-product-filters' ),
							'value' => true,
						),
						'second_option'       => array(
							'text'  => __( 'Off', 'woocommerce-product-filters' ),
							'value' => false,
						),
						'default_value'       => true,
					)
				)
			);

			if ( in_array( 'multi_select', $this->supports, true ) ) {
				$display_rules = array(
					array(
						'optionKey' => 'itemsSource',
						'operation' => 'in',
						'value'     => array(
							'attribute',
							'category',
							'tag',
							'taxonomy',
						),
					),
				);

				if ( in_array( 'multi_select_toggle', $this->supports, true ) ) {
					$display_rules[] = array(
						'optionKey' => 'multiSelect',
						'operation' => '==',
						'value'     => true,
					);
				}

				$field_panel->add_control(
					'visual',
					new Control\Select_Control(
						array(
							'key'           => 'productCountPolicy',
							'label'         => __( 'Product count policy', 'woocommerce-product-filters' ),
							'options'       => array(
								'with-selected-options' => __( 'With selected options', 'woocommerce-product-filters' ),
								'for-option-only'       => __( 'For option only', 'woocommerce-product-filters' ),
							),
							'default_value' => 'for-option-only',
							'display_rules' => $display_rules,
						)
					)
				);
			}
		}

		if ( in_array( 'see_more_options_by', $this->supports, true ) ) {
			$field_panel->add_control(
				'visual',
				new Control\Select_Control(
					array(
						'key'           => 'seeMoreOptionsBy',
						'label'         => __( 'See more options by', 'woocommerce-product-filters' ),
						'options'       => array(
							'disabled'   => __( 'Disabled', 'woocommerce-product-filters' ),
							'scrollbar'  => __( 'Scrollbar', 'woocommerce-product-filters' ),
							'moreButton' => __( 'More button', 'woocommerce-product-filters' ),
						),
						'default_value' => 'scrollbar',
					)
				)
			);

			$field_panel->add_control(
				'visual',
				new Control\Text_Size_Control(
					array(
						'key'           => 'heightOfVisibleContent',
						'label'         => __( 'Height of visible content', 'woocommerce-product-filters' ),
						'units'         => array(
							'' => __( 'options', 'woocommerce-product-filters' ),
						),
						'default_value' => 15,
						'display_rules' => array(
							array(
								'optionKey' => 'seeMoreOptionsBy',
								'operation' => 'in',
								'value'     => array(
									'scrollbar',
									'moreButton',
								),
							),
						),
					)
				)
			);
		}

		return array( $field_panel );
	}

	public function generate_projection() {
		return new Field_Projection( array( 'title' => $this->get_element_title() ) );
	}

	protected function get_attribute_taxonomies() {
		$list = array();

		foreach ( wc_get_attribute_taxonomies() as $attribute ) {
			$list[ $attribute->attribute_name ] = $attribute->attribute_label;
		}

		return $list;
	}

	protected function get_taxonomies() {
		$list = array();

		foreach ( get_taxonomies( array( 'object_type' => array( 'product' ) ), 'objects' ) as $taxonomy ) {
			$list[ $taxonomy->name ] = $taxonomy->label;
		}

		foreach ( array(
			'product_cat',
			'product_tag',
			'product_type',
		) as $removed_index ) {
			if ( isset( $list[ $removed_index ] ) ) {
				unset( $list[ $removed_index ] );
			}
		}

		return $list;
	}

	protected function get_categories() {
		$list = array(
			'all' => __( 'All categories', 'woocommerce-product-filters' ),
		);

		foreach ( get_terms(
			array(
				'taxonomy'   => 'product_cat',
				'hide_empty' => false,
			)
		) as $term ) {
			$list[ $term->term_id ] = $term->name;
		}

		return $list;
	}

	public function get_terms_by_options_for_select( $options ) {
		return $this->transform_tree_terms_to_list( $this->get_terms_by_control_values( $options ) );
	}

	protected function transform_tree_terms_to_list( $term_items ) {
		$result = array();

		foreach ( $term_items as $index => $term_item ) {
			$result[ (string) $term_item['key'] ] = $term_item['title'];

			if ( isset( $term_item['children'] ) && is_array( $term_item['children'] ) ) {
				$result += $this->transform_tree_terms_to_list( $term_item['children'] );
			}
		}

		return $result;
	}


	public function get_terms_by_control_values( $control_values ) {
		$list = array();

		$taxonomy = false;

		$item_source = isset( $control_values['itemsSource'] ) ? $control_values['itemsSource'] : null;

		$parent_term = 0;

		if ( 'category' === $item_source ) {
			$taxonomy = 'product_cat';

			if ( isset( $control_values['itemsSourceCategory'] ) && 'all' !== $control_values['itemsSourceCategory'] ) {
				$parent_term = $control_values['itemsSourceCategory'];
			}
		} elseif ( 'taxonomy' === $item_source && isset( $control_values['itemsSourceTaxonomy'] ) ) {
			$taxonomy = $control_values['itemsSourceTaxonomy'];
		} elseif ( 'attribute' === $item_source && isset( $control_values['itemsSourceAttribute'] ) ) {
			$taxonomy = wc_attribute_taxonomy_name( $control_values['itemsSourceAttribute'] );
		} elseif ( 'tag' === $item_source ) {
			$taxonomy = 'product_tag';
		}

		if ( $taxonomy ) {
			$list = $this->get_taxonomy_list( $taxonomy, $parent_term, true );
		}

		return $list;
	}

	protected function get_taxonomy_list( $taxonomy, $parent = 0, $need_child = false ) {
		$terms = get_terms(
			array(
				'taxonomy'     => $taxonomy,
				'hide_empty'   => false,
				'hierarchical' => false,
				'parent'       => $parent,
			)
		);

		$list = array();

		foreach ( $terms as $term ) {
			$item = array(
				'key'   => $term->term_id,
				'title' => $term->name,
			);

			if ( $need_child ) {
				$item['children'] = $this->get_taxonomy_list( $taxonomy, $term->term_id, true );
			}

			$list[ $term->term_id ] = $item;
		}

		return $list;
	}
}
