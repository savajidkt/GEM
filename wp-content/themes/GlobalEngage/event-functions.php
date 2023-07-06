<?php 
//add_action ('woocommerce_checkout_process', 'old_attendee_checkout_process', 10); // early priority

function old_attendee_checkout_process () {
  remove_action ('woocommerce_checkout_process', 'attendee_checkout_process'); // remove old hooked function
  add_action ('woocommerce_checkout_process', 'new_attendee_checkout_process', 20); // define new hooked function with later priority
  }

// CheckoutHelper.
        $my_plugin = WP_PLUGIN_DIR . '/fooevents/';
       
        require_once $my_plugin.'class-fooevents-config.php';
        require_once $my_plugin.'classes/class-fooevents-checkout-helper.php';
        
function new_attendee_checkout_process () {
  global $woocommerce;
  // Check if set, if its not set add an error.
    if(isset($_POST['billing_book_self']) && $_POST['billing_book_self'] == 'yes'){
        // CheckoutHelper.
        $my_plugin = WP_PLUGIN_DIR . '/fooevents/';
       
        require_once $my_plugin.'class-fooevents-config.php';
        require_once $my_plugin.'classes/class-fooevents-checkout-helper.php';
             $config = new FooEvents_Config();
            
         $eventsObj = new FooEvents_Checkout_Helper($config);

        $events = ijona_get_order_events( $woocommerce );
       
    }
  
}

function ijona_get_order_events( $woocommerce ) {

        $products = $woocommerce->cart->get_cart();

        $events = array();
        foreach ( $products as $cart_item_key => $product ) {

            for ( $x = 0; $x < $product['quantity']; $x++ ) {

                $woocommerce_events_event = get_post_meta( $product['product_id'], 'WooCommerceEventsEvent', true );

                if ( 'Event' === $woocommerce_events_event ) {

                    $product_data = get_post( $product['product_id'] );

                    $ticket                          = array();
                    $ticket['product_id']            = $product['product_id'];
                    $ticket['attribute_ticket-type'] = '';
                    $ticket['event_name']            = $product_data->post_title;
                    $ticket['price']                 = $product['data']->get_price();

                    if ( ! empty( $product['fooevents_bookings_slot_date_val'] ) ) {

                        $ticket['booking_selection_slot_date'] = $product['fooevents_bookings_slot_date_val'];

                    }

                    if ( ! empty( $product['fooevents_bookings_date_val'] ) ) {

                        $ticket['booking_selection_date'] = $product['fooevents_bookings_date_val'];

                    }

                    if ( ! empty( $product['fooevents_bookings_slot_val'] ) ) {

                        $ticket['booking_selection_slot'] = $product['fooevents_bookings_slot_val'];

                    }

                    if ( ! empty( $product['fooevents_bookings_method'] ) ) {

                        $ticket['fooevents_bookings_method'] = $product['fooevents_bookings_method'];

                    }

                    if ( ! empty( $product['fooevents_seats'] ) ) {

                        $ticket['seats'] = $product['fooevents_seats'];

                    }

                    if ( ! empty( $product['variation']['attribute_ticket-type'] ) ) {

                        $ticket['attribute_ticket-type'] = $product['variation']['attribute_ticket-type'];

                    }

                    if ( ! empty( $product['variation'] ) ) {

                        $ticket['variations']   = $product['variation'];
                        $ticket['variation_id'] = $product['variation_id'];

                    }

                    $events[ $product_data->ID ][] = $ticket;

                }
            }
        }

        return $events;

    }

add_action( 'woocommerce_checkout_update_order_meta', 'saving_woocommerce_events_process');
function saving_woocommerce_events_process( $order_id ) {
        
        if(isset($_POST['billing_book_self']) && $_POST['billing_book_self'] == 'yes'){
        	ijona_woocommerce_events_process($order_id);
        }
        

}

function ijona_woocommerce_events_process( $order_id ) {

		set_time_limit( 0 );
		
		global $woocommerce;

		$events = ijona_get_order_events( $woocommerce );

		$order         = new WC_Order($order_id);
		
		$total_tickets = array();
		$order_tickets = array();
		$x             = 1;
		foreach ( $events as $event => $tickets ) {

			$y = 1;
			
			foreach ( $tickets as $ticket ) {
				if($y == 1){				

				$woocommerce_events_capture_attendee_details     = get_post_meta( $ticket['product_id'], 'WooCommerceEventsCaptureAttendeeDetails', true );
				$woocommerce_events_capture_attendee_email       = get_post_meta( $ticket['product_id'], 'WooCommerceEventsCaptureAttendeeEmail', true );
				$woocommerce_events_capture_attendee_telephone   = get_post_meta( $ticket['product_id'], 'WooCommerceEventsCaptureAttendeeTelephone', true );
				$woocommerce_events_capture_attendee_company     = get_post_meta( $ticket['product_id'], 'WooCommerceEventsCaptureAttendeeCompany', true );
				$woocommerce_events_capture_attendee_designation = get_post_meta( $ticket['product_id'], 'WooCommerceEventsCaptureAttendeeDesignation', true );

				$pos_order = 'foosales_app' === get_post_meta( $order_id, '_foosales_order_source', true ) || 'fooeventspos_app' === get_post_meta( $order_id, '_fooeventspos_order_source', true );

				$woocommerce_events_pos_attendee_details     = get_post_meta( $ticket['product_id'], 'WooCommerceEventsPOSAttendeeDetails', true );
				$woocommerce_events_pos_attendee_email       = get_post_meta( $ticket['product_id'], 'WooCommerceEventsPOSAttendeeEmail', true );
				$woocommerce_events_pos_attendee_telephone   = get_post_meta( $ticket['product_id'], 'WooCommerceEventsPOSAttendeeTelephone', true );
				$woocommerce_events_pos_attendee_company     = get_post_meta( $ticket['product_id'], 'WooCommerceEventsPOSAttendeeCompany', true );
				$woocommerce_events_pos_attendee_designation = get_post_meta( $ticket['product_id'], 'WooCommerceEventsPOSAttendeeDesignation', true );

				$customer = $order->get_user_id();

				$customer_details = array(
					'customerID' => $customer,
				);

				if ( empty( $customer_details['customerID'] ) ) {

					$customer_details['customerID'] = 0;

				}

				if ( empty( $ticket['variations'] ) ) {

					$ticket['variations'] = '';

				}

				$woocommerce_events_purchaser_first_name = $order->get_billing_first_name();
				$woocommerce_events_purchaser_last_name  = $order->get_billing_last_name();
				$woocommerce_events_purchaser_email      = $order->get_billing_email();
				$woocommerce_events_purchaser_phone      = $order->get_billing_phone();

				$attendee_name        =  $order->get_billing_first_name();
				$attendee_last_name   =  $order->get_billing_last_name();
				$attendee_email       =  $order->get_billing_email();
				$attendee_telephone   =  $order->get_billing_phone();
				$attendee_company     =  $order->get_billing_company();
				$attendee_designation =  $_POST['billing_job_title'];

				if ( empty( $ticket['variation_id'] ) ) {

					$ticket['variation_id'] = '';

				}

				// create ticket.
				$order_tickets[ $x ][ $y ] = create_order_ticket( $customer_details['customerID'], $ticket['product_id'], $order_id, $ticket['attribute_ticket-type'], $ticket['variations'], $ticket['variation_id'], $ticket['price'], $x, $y, $attendee_name, $attendee_last_name, $attendee_email, $attendee_telephone, $attendee_company, $attendee_designation );

				if ( empty( $ticket['product_id'] ) ) {

					$total_tickets[ $ticket['product_id'] ] = 1;

				} else {

					if ( isset( $total_tickets[ $ticket['product_id'] ] ) ) {

						$total_tickets[ $ticket['product_id'] ]++;

					} else {

						$total_tickets[ $ticket['product_id'] ] = 1;

					}
				}

				$y++;

			}
		}

			$x++;

		}

		update_post_meta( $order_id, 'WooCommerceEventsOrderTickets', $order_tickets );
		update_post_meta( $order_id, 'WooCommerceEventsTicketsPurchased', $total_tickets );
	}

function create_order_ticket( $customer_id, $product_id, $order_id, $ticket_type, $variations, $variation_id, $price, $x, $y, $attendee_name = '', $attendee_last_name = '', $attendee_email = '', $attendee_telephone = '', $attendee_company = '', $attendee_designation = '' ) {

		$order = new WC_Order( $order_id );

		$ticket = array();

		$ticket['WooCommerceEventsProductID']           = sanitize_text_field( $product_id );
		$ticket['WooCommerceEventsOrderID']             = sanitize_text_field( $order_id );
		$ticket['WooCommerceEventsTicketType']          = sanitize_text_field( $ticket_type );
		$ticket['WooCommerceEventsStatus']              = 'Unpaid';
		$ticket['WooCommerceEventsCustomerID']          = sanitize_text_field( $customer_id );
		$ticket['WooCommerceEventsAttendeeName']        = sanitize_text_field( $attendee_name );
		$ticket['WooCommerceEventsAttendeeLastName']    = sanitize_text_field( $attendee_last_name );
		$ticket['WooCommerceEventsAttendeeEmail']       = sanitize_text_field( $attendee_email );
		$ticket['WooCommerceEventsAttendeeTelephone']   = sanitize_text_field( $attendee_telephone );
		$ticket['WooCommerceEventsAttendeeCompany']     = sanitize_text_field( $attendee_company );
		$ticket['WooCommerceEventsAttendeeDesignation'] = sanitize_text_field( $attendee_designation );
		$ticket['WooCommerceEventsVariations']          = $variations;
		$ticket['WooCommerceEventsVariationID']         = $variation_id;
		$ticket['WooCommerceEventsPrice']               = wc_price( $price );

		$woocommerce_events_purchaser_first_name = $order->get_billing_first_name();
		$woocommerce_events_purchaser_last_name  = $order->get_billing_last_name();
		$woocommerce_events_purchaser_email      = $order->get_billing_email();
		$woocommerce_events_purchaser_phone      = $order->get_billing_phone();

		$ticket['WooCommerceEventsPurchaserFirstName'] = $woocommerce_events_purchaser_first_name;
		$ticket['WooCommerceEventsPurchaserLastName']  = $woocommerce_events_purchaser_last_name;
		$ticket['WooCommerceEventsPurchaserEmail']     = $woocommerce_events_purchaser_email;
		$ticket['WooCommerceEventsPurchaserPhone']     = $woocommerce_events_purchaser_phone;

		$woocommerce_events_custom_attendee_fields = '';
		$ticket['WooCommerceEventsCustomAttendeeFields'] = $woocommerce_events_custom_attendee_fields;

		$woocommerce_events_seating_fields = '';
		$ticket['WooCommerceEventsSeatingFields'] = $woocommerce_events_seating_fields;

		
		return $ticket;

	}
?>