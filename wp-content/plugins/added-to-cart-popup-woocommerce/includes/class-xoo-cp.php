<?php



if(!defined('ABSPATH'))

	return;





class Xoo_CP{



	protected static $instance = null;



	//Get instance

	public static function get_instance(){

		if(self::$instance === null){

			self::$instance = new self();

		}

		return self::$instance;

	}



	public function __construct(){



		//Front end

		include_once XOO_CP_PATH.'/includes/class-xoo-cp-public.php';

		Xoo_CP_Public::get_instance();



		//Core functions

		include_once XOO_CP_PATH.'/includes/class-xoo-cp-core.php';

		Xoo_CP_Core::get_instance();



	}



}

function apply_coupon_code(){
	
    $coupon_code = isset( $_POST["coupon_code"] ) ? $_POST["coupon_code"] : '';
    WC()->cart->apply_coupon($coupon_code);
    // ob_start();
    // woocommerce_mini_cart();
    // $cart_html = ob_get_clean();
    WC_AJAX::get_refreshed_fragments();
    //return $cart_html;
    die;
}
add_action( 'wp_ajax_apply_coupon_code', 'apply_coupon_code' );
add_action( 'wp_ajax_nopriv_apply_coupon_code', 'apply_coupon_code' );


function remove_coupon_code(){
	
    $coupon_code = isset( $_POST["coupon_code"] ) ? $_POST["coupon_code"] : '';

    $applied_coupons = WC()->cart->get_applied_coupons(); // All of the applied coupons.
    $certain_coupon  = $coupon_code; // Recommended to use lowercase.
   
    if ( in_array( $certain_coupon, $applied_coupons, true ) ) {
        WC()->cart->remove_coupon( $certain_coupon ); // Remove certain coupon from cart.
    }

    // ob_start();
    // woocommerce_mini_cart();
    // $cart_html = ob_get_clean();
    WC_AJAX::get_refreshed_fragments();
    //return $cart_html;
    die;
}
add_action( 'wp_ajax_remove_coupon_code', 'remove_coupon_code' );
add_action( 'wp_ajax_nopriv_remove_coupon_code', 'remove_coupon_code' );

function ajax_apply_coupon()
 {
     $coupon_code = null;
     if (!empty($_POST['coupon_code'])) {
         $coupon_code = sanitize_key($_POST['coupon_code']);
     }
     $coupon_id = wc_get_coupon_id_by_code($coupon_code);
     if (empty($coupon_id)) {
     	WC_AJAX::get_refreshed_fragments();
         wc_add_notice(__('Sorry, there has been an error.', 'woocommerce'), 'error');
         wp_send_json_error(['message' => __('Sorry, there has been an error.', 'woocommerce')], 400);
     }

     if (!WC()->cart->has_discount($coupon_code)) {
         WC()->cart->add_discount($coupon_code);
     }
     WC_AJAX::get_refreshed_fragments();
     wp_send_json_success(['message' => __('Coupon code applied successfully.', 'woocommerce')], 200);
 }

 add_action('wp_ajax_ajax_apply_coupon', 'ajax_apply_coupon');
 add_action('wp_ajax_nopriv_ajax_apply_coupon', 'ajax_apply_coupon');

?>