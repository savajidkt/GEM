<?php

namespace VIWEC\INCLUDES;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class I18n {
	public static function init() {
		return [
			'basic'                   => esc_html__( 'Basic', 'viwec-email-template-customizer' ),
			'sample'                  => esc_html__( 'Sample', 'viwec-email-template-customizer' ),
			'layout'                  => esc_html__( 'Layout', 'viwec-email-template-customizer' ),
			'content'                 => esc_html__( 'Content', 'viwec-email-template-customizer' ),
			'select_email_type'       => esc_html__( 'Select email type', 'viwec-email-template-customizer' ),
			'1_column'                => esc_html__( '1 Column', 'viwec-email-template-customizer' ),
			'2_columns'               => esc_html__( '2 Columns', 'viwec-email-template-customizer' ),
			'3_columns'               => esc_html__( '3 Columns', 'viwec-email-template-customizer' ),
			'4_columns'               => esc_html__( '4 Columns', 'viwec-email-template-customizer' ),
			'text'                    => esc_html__( 'Text', 'viwec-email-template-customizer' ),
			'image'                   => esc_html__( 'Image', 'viwec-email-template-customizer' ),
			'button'                  => esc_html__( 'Button', 'viwec-email-template-customizer' ),
			'order_detail'            => esc_html__( 'Order detail', 'viwec-email-template-customizer' ),
			'order_subtotal'          => esc_html__( 'Order subtotal', 'viwec-email-template-customizer' ),
			'order_total'             => esc_html__( 'Order total', 'viwec-email-template-customizer' ),
			'shipping'                => esc_html__( 'Shipping', 'viwec-email-template-customizer' ),
			'total'                   => esc_html__( 'Total', 'viwec-email-template-customizer' ),
			'shipping_method'         => esc_html__( 'Shipping method', 'viwec-email-template-customizer' ),
			'payment_method'          => esc_html__( 'Payment method', 'viwec-email-template-customizer' ),
			'billing_address'         => esc_html__( 'Billing address', 'viwec-email-template-customizer' ),
			'shipping_address'        => esc_html__( 'Shipping address', 'viwec-email-template-customizer' ),
			'products'                => esc_html__( 'Products', 'viwec-email-template-customizer' ),
			'coupon'                  => esc_html__( 'Coupon', 'viwec-email-template-customizer' ),
			'post'                    => esc_html__( 'Post', 'viwec-email-template-customizer' ),
			'contact'                 => esc_html__( 'Contact', 'viwec-email-template-customizer' ),
			'menu_bar'                => esc_html__( 'Menu bar', 'viwec-email-template-customizer' ),
			'social'                  => esc_html__( 'Social', 'viwec-email-template-customizer' ),
			'divider'                 => esc_html__( 'Divider', 'viwec-email-template-customizer' ),
			'spacer'                  => esc_html__( 'Spacer', 'viwec-email-template-customizer' ),
			'coupon_type'             => esc_html__( 'Coupon type', 'viwec-email-template-customizer' ),
			'select_coupon'           => esc_html__( 'Select coupon', 'viwec-email-template-customizer' ),
			'existing_coupon'         => esc_html__( 'Existing coupon', 'viwec-email-template-customizer' ),
			'generate_coupon'         => esc_html__( 'Generate coupon', 'viwec-email-template-customizer' ),
			'discount_prefix'           => esc_html__( 'Discount prefix', 'viwec-email-template-customizer' ),
			'discount_type'           => esc_html__( 'Discount type', 'viwec-email-template-customizer' ),
			'coupon_amount'           => esc_html__( 'Coupon amount', 'viwec-email-template-customizer' ),
			'percentage_discount'     => esc_html__( 'Percentage discount', 'viwec-email-template-customizer' ),
			'fixed_cart_discount'     => esc_html__( 'Fixed cart discount', 'viwec-email-template-customizer' ),
			'fixed_product_discount'  => esc_html__( 'Fixed product discount', 'viwec-email-template-customizer' ),
			'expire_after_x_days'     => esc_html__( 'Expire after x days', 'viwec-email-template-customizer' ),
			'minimum_spend'           => esc_html__( 'Minimum spend', 'viwec-email-template-customizer' ),
			'maximum_spend'           => esc_html__( 'Maximum spend', 'viwec-email-template-customizer' ),
			'exclude_products'        => esc_html__( 'Exclude products', 'viwec-email-template-customizer' ),
			'categories'              => esc_html__( 'Categories', 'viwec-email-template-customizer' ),
			'exclude_categories'      => esc_html__( 'Exclude categories', 'viwec-email-template-customizer' ),
			'usage_limit_per_coupon'  => esc_html__( 'Usage limit per coupon', 'viwec-email-template-customizer' ),
			'limit_usage_to_x_items'  => esc_html__( 'Limit usage to X items', 'viwec-email-template-customizer' ),
			'usage_limit_per_user'    => esc_html__( 'Usage limit per user', 'viwec-email-template-customizer' ),
			'allow_free_shipping'     => esc_html__( 'Allow free shipping', 'viwec-email-template-customizer' ),
			'individual_use_only'     => esc_html__( 'Individual use only', 'viwec-email-template-customizer' ),
			'exclude_sale_items'      => esc_html__( 'Exclude sale items', 'viwec-email-template-customizer' ),
			'template'                => esc_html__( 'Template', 'viwec-email-template-customizer' ),
			'translate_text'          => esc_html__( 'Translate text', 'viwec-email-template-customizer' ),
			'default'                 => esc_html__( 'Default', 'viwec-email-template-customizer' ),
			'vertical_text'           => esc_html__( 'Vertical text', 'viwec-email-template-customizer' ),
			'horizontal_text'         => esc_html__( 'Horizontal text', 'viwec-email-template-customizer' ),
			'quantity'                => esc_html__( 'Quantity', 'viwec-email-template-customizer' ),
			'product'                 => esc_html__( 'Product', 'viwec-email-template-customizer' ),
			'price'                   => esc_html__( 'Price', 'viwec-email-template-customizer' ),
			'last_column_width'       => esc_html__( 'Last column width', 'viwec-email-template-customizer' ),
			'edit'                    => esc_html__( 'Edit', 'viwec-email-template-customizer' ),
			'style'                   => esc_html__( 'Style', 'viwec-email-template-customizer' ),
			'related'                 => esc_html__( 'Related', 'viwec-email-template-customizer' ),
			'category'                => esc_html__( 'Category', 'viwec-email-template-customizer' ),
			'on_sale'                 => esc_html__( 'On sale', 'viwec-email-template-customizer' ),
			'featured'                => esc_html__( 'Featured', 'viwec-email-template-customizer' ),
			'up_sell'                 => esc_html__( 'Up sell', 'viwec-email-template-customizer' ),
			'cross_sell'              => esc_html__( 'Cross sell', 'viwec-email-template-customizer' ),
			'best_seller'             => esc_html__( 'Best seller', 'viwec-email-template-customizer' ),
			'best_rated'              => esc_html__( 'Best rated', 'viwec-email-template-customizer' ),
			'newest'                  => esc_html__( 'Newest', 'viwec-email-template-customizer' ),
			'max_row'                 => esc_html__( 'Max row', 'viwec-email-template-customizer' ),
			'column'                  => esc_html__( 'Column', 'viwec-email-template-customizer' ),
			'character_limit'         => esc_html__( 'Charracter limit', 'viwec-email-template-customizer' ),
			'product_type'            => esc_html__( 'Product type', 'viwec-email-template-customizer' ),
			'product_name'            => esc_html__( 'Product name', 'viwec-email-template-customizer' ),
			'product_distance'        => esc_html__( 'Product distance', 'viwec-email-template-customizer' ),
			'all_category'            => esc_html__( 'All category', 'viwec-email-template-customizer' ),
			'include_posts'           => esc_html__( 'Include posts', 'viwec-email-template-customizer' ),
			'exclude_posts'           => esc_html__( 'Exclude posts', 'viwec-email-template-customizer' ),
			'post_title'              => esc_html__( 'Post title', 'viwec-email-template-customizer' ),
			'post_content'            => esc_html__( 'Post content', 'viwec-email-template-customizer' ),
			'post_distance'           => esc_html__( 'Post distance', 'viwec-email-template-customizer' ),
			'change_template_confirm' => esc_html__( 'Do you want to change email template?', 'viwec-email-template-customizer' ),
			'select'                  => esc_html__( 'Select', 'viwec-email-template-customizer' ),
			'order_items'             => esc_html__( 'Order items', 'viwec-email-template-customizer' ),
			'refund_fully'            => esc_html__( 'Refunded fully', 'viwec-email-template-customizer' ),
			'refund_partial'          => esc_html__( 'Refunded partial', 'viwec-email-template-customizer' ),
			'column_ratio'            => esc_html__( 'Column ratio', 'viwec-email-template-customizer' ),
			'vertical'                => esc_html__( 'Vertical', 'viwec-email-template-customizer' ),
			'horizontal'              => esc_html__( 'Horizontal', 'viwec-email-template-customizer' ),
			'socials'                 => esc_html__( 'Socials', 'viwec-email-template-customizer' ),
			'order_note'              => esc_html__( 'Customer note', 'viwec-email-template-customizer' ),
			'subtotal'                => esc_html__( 'Subtotal', 'viwec-email-template-customizer' ),
			'discount'                => esc_html__( 'Discount', 'viwec-email-template-customizer' ),
			'product_price'           => esc_html__( 'Price', 'viwec-email-template-customizer' ),
			'product_quantity'        => esc_html__( 'Quantity', 'viwec-email-template-customizer' ),
			'auto_add_to_cart'        => esc_html__( 'Auto add to cart in product URL', 'viwec-email-template-customizer' ),
			'enable'                  => esc_html__( 'Enable', 'viwec-email-template-customizer' ),
			'show_sku'                => esc_html__( 'Show SKU', 'viwec-email-template-customizer' ),
			'font_size'               => esc_html__( 'Font size(px)', 'viwec-email-template-customizer' ),
			'font_weight'             => esc_html__( 'Font weight', 'viwec-email-template-customizer' ),
			'options'                 => esc_html__( 'Options', 'viwec-email-template-customizer' ),
			'remove_product_link'     => esc_html__( 'Remove product link', 'viwec-email-template-customizer' ),
		];
	}
}
