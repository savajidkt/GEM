<?php
/**
 * Ticket themes viewer template
 *
 * @link https://www.fooevents.com
 * @package woocommerce_events
 */

$config = new FooEvents_Config();
if ( ! function_exists( 'is_plugin_active' ) || ! function_exists( 'is_plugin_active_for_network' ) ) {

	require_once ABSPATH . '/wp-admin/includes/plugin.php';

}
?>
<div class='woocommerce-events-help'>
	<a href="https://www.fooevents.com/" target="_blank"><img src="https://www.fooevents.com/wp-content/uploads/2022/05/fooevents-1.png" alt="<?php esc_attr_e( 'Welcome to FooEvents for WooCommerce', 'woocommerce-events' ); ?>" /></a>

	<p> 
		<a href="https://help.fooevents.com/" target="_blank"><?php esc_attr_e( 'Help Center', 'woocommerce-events' ); ?></a> | 
		<a href="https://help.fooevents.com/docs/frequently-asked-questions/" target="_blank"><?php esc_attr_e( 'Frequently Asked Questions', 'woocommerce-events' ); ?></a> 
	</p>

	<?php esc_attr_e( 'FooEvents works great out of the box without any custom configuration, however, if you would like to configure FooEvents based on your specific event requirements, you can find out more about how to do this by visiting our', 'woocommerce-events' ); ?> <a href="https://help.fooevents.com/" target="_blank"><?php esc_attr_e( 'help documentation', 'woocommerce-events' ); ?></a>.

	<div class="clear"></div> 

	<div class="woocommerce-events-infobox">
		<h3><?php esc_attr_e( 'Helpful Resources', 'woocommerce-events' ); ?></h3>
		<ol>
			<li><strong><a href="https://help.fooevents.com/docs/topics/getting-started/" target="_blank"><?php esc_attr_e( 'Getting Started Guide →', 'woocommerce-events' ); ?></a></strong></li> 
			<li><a href="https://www.fooevents.com/take-a-look-under-the-hood-video/" target="_blank"><?php esc_attr_e( 'Overview of the FooEvents settings and event setup (video)', 'woocommerce-events' ); ?></a></li>
			<li><a href="https://help.fooevents.com/docs/topics/use-cases/" target="_blank"><?php esc_attr_e( 'Use Case Help Guides', 'woocommerce-events' ); ?></a></li>
			<li><a href="http://demo.fooevents.com/" target="_blank"><?php esc_attr_e( 'FooEvents Demos', 'woocommerce-events' ); ?></a>
			<li><a href="http://www.fooevents.com/blog" target="_blank"><?php esc_attr_e( 'FooEvents Blog', 'woocommerce-events' ); ?></a>
		</ol>
	</div>

	<div class="clear"></div> 

		<div class="woocommerce-events-extensions">
			<div class="woocommerce-events-extension">
				<h3><a href="https://www.fooevents.com/features/apps/" target="_blank"><?php esc_attr_e( 'FooEvents Check-ins App (FREE)', 'woocommerce-events' ); ?></a></h3>
				<p><?php esc_attr_e( 'Supercharge your check-in process and ensure that critical attendee, event, and booking information is always with you.', 'woocommerce-events' ); ?></p>
				<a href="https://www.fooevents.com/features/apps/"><?php esc_attr_e( 'Download', 'woocommerce-events' ); ?></a> | <a href="https://help.fooevents.com/docs/topics/check-ins-app/"><?php esc_attr_e( 'Documentation', 'woocommerce-events' ); ?></a> 
				<div class="clear"></div>  
			</div>	
			<div class="woocommerce-events-extension">
				<h3><a href="https://www.fooevents.com/products/ticket-themes/" target="_blank"><?php esc_attr_e( 'FooEvents Ticket Themes (FREE)', 'woocommerce-events' ); ?></a></h3>
				<p><?php esc_attr_e( 'Transform the appearance of your HTML and PDF tickets and make your event stand out with our FREE Ticket Themes.', 'woocommerce-events' ); ?></p>
				<a href="https://www.fooevents.com/products/ticket-themes/"><?php esc_attr_e( 'Download', 'woocommerce-events' ); ?></a> | <a href="https://help.fooevents.com/docs/topics/tickets/ticket-themes/"><?php esc_attr_e( 'Documentation', 'woocommerce-events' ); ?></a> 
				<div class="clear"></div>  
			</div>	
			<div class="clear"></div>  
		</div>

		<h3><?php esc_attr_e( 'FooEvents Extensions', 'woocommerce-events' ); ?></h3>

		<p><?php esc_attr_e( 'The following extensions add various advanced features to the FooEvents for WooCommerce plugin. They can be purchased separately or as part of our popular', 'woocommerce-events' ); ?> <a href="https://www.fooevents.com/pricing/" target="_blank"><?php esc_attr_e( 'bundles', 'woocommerce-events' ); ?></a>. <?php esc_attr_e( 'If you would like to upgrade to a bundle, please', 'woocommerce-events' ); ?> <a href="https://help.fooevents.com/contact/" target="_blank"><?php esc_attr_e( 'contact us', 'woocommerce-events' ); ?></a> <?php esc_attr_e( 'and we will gladly assist', 'woocommerce-events' ); ?>.</p>

		<div class="woocommerce-events-extensions">
		<div class="woocommerce-events-extension">
				<h3><a href="https://www.fooevents.com/products/fooevents-for-woocommerce/" target="_blank"><?php esc_attr_e( 'FooEvents for WooCommerce', 'woocommerce-events' ); ?></a></h3>
				<p><?php esc_attr_e( 'FooEvents adds powerful event, ticketing and booking functionality to your WooCommerce website with no commission or ticket fees.', 'woocommerce-events' ); ?></p>
				<strong><?php esc_attr_e( 'Status:', 'woocommerce-events' ); ?></strong>  
				<span class='install-status installed'><?php echo esc_attr_e( 'Installed', 'woocommerce-events' ); ?></span> | 
				<a href="https://www.fooevents.com/products/fooevents-for-woocommerce/"><?php esc_attr_e( 'Plugin Details', 'woocommerce-events' ); ?></a> | <a href="https://help.fooevents.com/docs/topics/fooevents-plugins/fooevents-for-woocommerce/"><?php esc_attr_e( 'Documentation', 'woocommerce-events' ); ?></a> 
				<div class="clear"></div>  
			</div>	

			<?php
			if ( is_plugin_active( 'fooevents_bookings/fooevents-bookings.php' ) || is_plugin_active_for_network( 'fooevents_bookings/fooevents-bookings.php' ) ) {
				$installed = true;
			} else {
				$installed = false; }
			?>
		<?php
		if ( is_plugin_active( 'fooevents_bookings/fooevents-pos.php' ) || is_plugin_active_for_network( 'fooevents_pos/fooevents-pos.php' ) ) {
			$installed = true;
		} else {
			$installed = false; }
		?>
		<div class="woocommerce-events-extension 
		<?php
		if ( false === $installed ) {
			echo 'not-installed'; }
		?>
		">    
			<h3><a href="https://www.fooevents.com/products/fooevents-pos/" target="_blank"><?php esc_attr_e( 'FooEvents POS', 'woocommerce-events' ); ?></a></h3>
			<p><?php esc_attr_e( 'FooEvents POS (point of sale) is a web-based point of sale plugin and enables you to sell products, bookings, event tickets and print tickets in-person.', 'woocommerce-events' ); ?></p>
			<strong><?php esc_attr_e( 'Status:', 'woocommerce-events' ); ?></strong>  

			<?php
			if ( is_plugin_active( 'fooevents_pos/fooevents-pos.php' ) || is_plugin_active_for_network( 'fooevents_pos/fooevents-pos.php' ) ) {
				echo "<span class='install-status installed'>" . esc_attr__( 'Installed', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-pos/' target='new'>" . esc_attr__( 'Plugin Details', 'woocommerce-events' ) . '</a>';
			} else {
				if ( file_exists( ABSPATH . 'wp-content/plugins/fooevents_pos/fooevents-pos.php' ) ) {
					echo '<span class="install-status notinstalled">' . esc_attr__( 'Deactivated', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-pos/' target='new'>" . esc_attr__( 'Plugin Details', 'woocommerce-events' ) . '</a>';
				} else {
					echo "<span class='install-status notinstalled'>" . esc_attr__( 'Not Installed', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-pos/' target='new'>" . esc_attr__( 'Get Plugin', 'woocommerce-events' ) . '</a>';
				}
			}
			?>
			| <a href="https://help.fooevents.com/docs/topics/fooevents-plugins/fooevents-pos/"><?php esc_attr_e( 'Documentation', 'woocommerce-events' ); ?></a> 
			<div class="clear"></div>   
		</div>
		<div class="clear"></div> 

		<div class="woocommerce-events-extension 
		<?php
		if ( false === $installed ) {
			echo 'not-installed'; }
		?>
		">    
			<h3><a href="https://www.fooevents.com/products/fooevents-bookings/" target="_blank"><?php esc_attr_e( 'FooEvents Bookings', 'woocommerce-events' ); ?></a></h3>
			<p><?php esc_attr_e( 'Offer bookings for both physical and virtual events, venues, classes and services. Let your customers check availability and book a space or slot.', 'woocommerce-events' ); ?></p>
			<strong><?php esc_attr_e( 'Status:', 'woocommerce-events' ); ?></strong>  

			<?php
			if ( is_plugin_active( 'fooevents_bookings/fooevents-bookings.php' ) || is_plugin_active_for_network( 'fooevents_bookings/fooevents-bookings.php' ) ) {
				echo "<span class='install-status installed'>" . esc_attr__( 'Installed', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-bookings/' target='new'>" . esc_attr__( 'Plugin Details', 'woocommerce-events' ) . '</a>';
			} else {
				if ( file_exists( ABSPATH . 'wp-content/plugins/fooevents_bookings/fooevents-bookings.php' ) ) {
					echo '<span class="install-status notinstalled">' . esc_attr__( 'Deactivated', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-bookings/' target='new'>" . esc_attr__( 'Plugin Details', 'woocommerce-events' ) . '</a>';
				} else {
					echo "<span class='install-status notinstalled'>" . esc_attr__( 'Not Installed', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-bookings/' target='new'>" . esc_attr__( 'Get Plugin', 'woocommerce-events' ) . '</a>';
				}
			}
			?>
			| <a href="https://help.fooevents.com/docs/topics/fooevents-plugins/fooevents-bookings/"><?php esc_attr_e( 'Documentation', 'woocommerce-events' ); ?></a> 
			<div class="clear"></div>   
		</div>
		<?php
		if ( is_plugin_active( 'fooevents_seating/fooevents-seating.php' ) || is_plugin_active_for_network( 'fooevents_seating/fooevents-seating.php' ) ) {
			$installed = true;
		} else {
			$installed = false; }
		?>
		<div class="woocommerce-events-extension 
		<?php
		if ( false === $installed ) {
			echo 'not-installed'; }
		?>
		">    
			<h3><a href="https://www.fooevents.com/products/fooevents-seating/" target="_blank"><?php esc_attr_e( 'FooEvents Seating', 'woocommerce-events' ); ?></a></h3>
			<p><?php esc_attr_e( 'Manage seating arrangements using our flexible seating chart builder and let attendees select their seats based on the layout of your venue.', 'woocommerce-events' ); ?></p>
			<strong><?php esc_attr_e( 'Status:', 'woocommerce-events' ); ?></strong> 
			<?php
			if ( is_plugin_active( 'fooevents_seating/fooevents-seating.php' ) || is_plugin_active_for_network( 'fooevents_seating/fooevents-seating.php' ) ) {
				echo "<span class='install-status installed'>" . esc_attr__( 'Installed', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-seating/' target='new'>" . esc_attr__( 'Plugin Details', 'woocommerce-events' ) . '</a>';
			} else {
				if ( file_exists( ABSPATH . 'wp-content/plugins/fooevents_seating/fooevents-seating.php' ) ) {
					echo '<span class="install-status notinstalled">' . esc_attr__( 'Deactivated', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-seating/' target='new'>" . esc_attr__( 'Plugin Details', 'woocommerce-events' ) . '</a>';
				} else {
					echo "<span class='install-status notinstalled'>" . esc_attr__( 'Not Installed', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-seating/' target='new'>" . esc_attr__( 'Get Plugin', 'woocommerce-events' ) . '</a>';
				}
			}
			?>
			| <a href="https://help.fooevents.com/docs/topics/fooevents-plugins/fooevents-seating/"><?php esc_attr_e( 'Documentation', 'woocommerce-events' ); ?></a> 
			<div class="clear"></div>        
		</div>
		<div class="clear"></div> 

		<?php
		if ( is_plugin_active( 'fooevents_custom_attendee_fields/fooevents-custom-attendee-fields.php' ) || is_plugin_active_for_network( 'fooevents_custom_attendee_fields/fooevents-custom-attendee-fields.php' ) ) {
			$installed = true;
		} else {
			$installed = false; }
		?>
		<div class="woocommerce-events-extension 
		<?php
		if ( false === $installed ) {
			echo 'not-installed'; }
		?>
		">    
			<h3><a href="https://www.fooevents.com/products/fooevents-custom-attendee-fields/" target="_blank"><?php esc_attr_e( 'FooEvents Custom Attendee Fields', 'woocommerce-events' ); ?></a></h3>
			<p><?php esc_attr_e( 'Capture customized attendee fields at checkout so you can tailor FooEvents according to your unique event requirements.', 'woocommerce-events' ); ?></p>
			<strong><?php esc_attr_e( 'Status:', 'woocommerce-events' ); ?></strong>  

			<?php
			if ( is_plugin_active( 'fooevents_custom_attendee_fields/fooevents-custom-attendee-fields.php' ) || is_plugin_active_for_network( 'fooevents_custom_attendee_fields/fooevents-custom-attendee-fields.php' ) ) {
				echo "<span class='install-status installed'>" . esc_attr__( 'Installed', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-custom-attendee-fields/' target='new'>" . esc_attr__( 'Plugin Details', 'woocommerce-events' ) . '</a>';
			} else {
				if ( file_exists( ABSPATH . 'wp-content/plugins/fooevents_custom_attendee_fields/fooevents-custom-attendee-fields.php' ) ) {
					echo '<span class="install-status notinstalled">' . esc_attr__( 'Deactivated', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-custom-attendee-fields/' target='new'>" . esc_attr__( 'Plugin Details', 'woocommerce-events' ) . '</a>';
				} else {
					echo "<span class='install-status notinstalled'>" . esc_attr__( 'Not Installed', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-custom-attendee-fields/' target='new'>" . esc_attr__( 'Get Plugin', 'woocommerce-events' ) . '</a>';
				}
			}
			?>
			| <a href="https://help.fooevents.com/docs/topics/fooevents-plugins/fooevents-custom-attendee-fields/"><?php esc_attr_e( 'Documentation', 'woocommerce-events' ); ?></a> 
			<div class="clear"></div>   
		</div>

		<?php
		if ( is_plugin_active( 'fooevents_pdf_tickets/fooevents-pdf-tickets.php' ) || is_plugin_active_for_network( 'fooevents_pdf_tickets/fooevents-pdf-tickets.php' ) ) {
			$installed = true;
		} else {
			$installed = false; }
		?>
		<div class="woocommerce-events-extension 
		<?php
		if ( false === $installed ) {
			echo 'not-installed'; }
		?>
		">
			<h3><a href="https://www.fooevents.com/products/fooevents-pdf-tickets/" target="_blank"><?php esc_attr_e( 'FooEvents PDF Tickets', 'woocommerce-events' ); ?></a></h3>
			<p><?php esc_attr_e( 'Attach event tickets or booking confirmations as PDF files to the email that is sent to the attendee or ticket purchaser.', 'woocommerce-events' ); ?></p>
			<strong><?php esc_attr_e( 'Status:', 'woocommerce-events' ); ?></strong> 
			<?php
			if ( is_plugin_active( 'fooevents_pdf_tickets/fooevents-pdf-tickets.php' ) || is_plugin_active_for_network( 'fooevents_pdf_tickets/fooevents-pdf-tickets.php' ) ) {
				echo "<span class='install-status installed'>" . esc_attr__( 'Installed', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-pdf-tickets/' target='new'>" . esc_attr__( 'Plugin Details', 'woocommerce-events' ) . '</a>';
			} else {
				if ( file_exists( ABSPATH . 'wp-content/plugins/fooevents_pdf_tickets/fooevents-pdf-tickets.php' ) ) {
					echo '<span class="install-status notinstalled">' . esc_attr__( 'Deactivated', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-pdf-tickets/' target='new'>" . esc_attr__( 'Plugin Details', 'woocommerce-events' ) . '</a>';
				} else {
					echo "<span class='install-status notinstalled'>" . esc_attr__( 'Not Installed', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-pdf-tickets/' target='new'>" . esc_attr__( 'Get Plugin', 'woocommerce-events' ) . '</a>';
				}
			}
			?>
			| <a href="https://help.fooevents.com/docs/topics/fooevents-plugins/fooevents-pdf-tickets/"><?php esc_attr_e( 'Documentation', 'woocommerce-events' ); ?></a> 
			<div class="clear"></div>   

		</div>
		<div class="clear"></div> 
		<?php
		if ( is_plugin_active( 'fooevents_multi_day/fooevents-multi-day.php' ) || is_plugin_active_for_network( 'fooevents_multi_day/fooevents-multi-day.php' ) ) {
			$installed = true;
		} else {
			$installed = false; }
		?>
		<div class="woocommerce-events-extension 
		<?php
		if ( false === $installed ) {
			echo 'not-installed'; }
		?>
		">    
			<h3><a href="https://www.fooevents.com/products/fooevents-multi-day/" target="_blank"><?php esc_attr_e( 'FooEvents Multi-day', 'woocommerce-events' ); ?></a></h3>
			<p><?php esc_attr_e( 'Sell tickets to events that run over multiple calendar or sequential days and perform separate check-ins for each day of the event.', 'woocommerce-events' ); ?></p>
			<strong><?php esc_attr_e( 'Status:', 'woocommerce-events' ); ?></strong> 
			<?php
			if ( is_plugin_active( 'fooevents_multi_day/fooevents-multi-day.php' ) || is_plugin_active_for_network( 'fooevents_multi_day/fooevents-multi-day.php' ) ) {
				echo "<span class='install-status installed'>" . esc_attr__( 'Installed', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-multi-day/' target='new'>" . esc_attr__( 'Plugin Details', 'woocommerce-events' ) . '</a>';
			} else {
				if ( file_exists( ABSPATH . 'wp-content/plugins/fooevents_multi_day/fooevents-multi-day.php' ) ) {
					echo '<span class="install-status notinstalled">' . esc_attr__( 'Deactivated', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-multi-day/' target='new'>" . esc_attr__( 'Plugin Details', 'woocommerce-events' ) . '</a>';
				} else {
					echo "<span class='install-status notinstalled'>" . esc_attr__( 'Not Installed', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-multi-day/' target='new'>" . esc_attr__( 'Get Plugin', 'woocommerce-events' ) . '</a>';
				}
			}
			?>
			| <a href="https://help.fooevents.com/docs/topics/fooevents-plugins/fooevents-multi-day/"><?php esc_attr_e( 'Documentation', 'woocommerce-events' ); ?></a> 
			<div class="clear"></div>        
		</div>

		<?php
		if ( is_plugin_active( 'fooevents_express_check_in/fooevents-express-check_in.php' ) || is_plugin_active_for_network( 'fooevents_express_check_in/fooevents-express-check_in.php' ) ) {
			$installed = true;
		} else {
			$installed = false; }
		?>
		<div class="woocommerce-events-extension 
		<?php
		if ( false === $installed ) {
			echo 'not-installed'; }
		?>
		">
			<h3><a href="https://www.fooevents.com/products/fooevents-express-check-in/" target="_blank"><?php esc_attr_e( 'FooEvents Express Check-ins', 'woocommerce-events' ); ?></a></h3>
			<p><?php esc_attr_e( 'Ensure fast and effortless attendee check-ins at your event. Search for attendees or connect a barcode scanner to scan tickets instead of typing.', 'woocommerce-events' ); ?></p>
			<strong><?php esc_attr_e( 'Status:', 'woocommerce-events' ); ?></strong> 
			<?php
			if ( is_plugin_active( 'fooevents_express_check_in/fooevents-express-check_in.php' ) || is_plugin_active_for_network( 'fooevents_express_check_in/fooevents-express-check_in.php' ) ) {
				echo "<span class='install-status installed'>" . esc_attr__( 'Installed', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-express-check-in/' target='new'>" . esc_attr__( 'Plugin Details', 'woocommerce-events' ) . '</a>';
			} else {
				if ( file_exists( ABSPATH . 'wp-content/plugins/fooevents_express_check_in/fooevents-express-check_in.php' ) ) {
					echo '<span class="install-status notinstalled">' . esc_attr__( 'Deactivated', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-express-check-in/' target='new'>" . esc_attr__( 'Plugin Details', 'woocommerce-events' ) . '</a>';
				} else {
					echo "<span class='install-status notinstalled'>" . esc_attr__( 'Not Installed', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-express-check-in/' target='new'>" . esc_attr__( 'Get Plugin', 'woocommerce-events' ) . '</a>';
				}
			}
			?>
			| <a href="https://help.fooevents.com/docs/topics/fooevents-plugins/fooevents-express-check-in/"><?php esc_attr_e( 'Documentation', 'woocommerce-events' ); ?></a> 
			<div class="clear"></div>  

		</div>
		<div class="clear"></div>	
		<?php
		if ( is_plugin_active( 'fooevents-calendar/fooevents-calendar.php' ) || is_plugin_active_for_network( 'fooevents-calendar/fooevents-calendar.php' ) ) {
			$installed = true;
		} else {
			$installed = false; }
		?>
		<div class="woocommerce-events-extension 
		<?php
		if ( false === $installed ) {
			echo 'not-installed'; }
		?>
		">
			<h3><a href="https://www.fooevents.com/products/fooevents-calendar/" target="_blank"><?php esc_attr_e( 'FooEvents Calendar', 'woocommerce-events' ); ?></a></h3>
			<p><?php esc_attr_e( 'Display your events in a stylish calendar on your WordPress website using simple short codes and widgets.', 'woocommerce-events' ); ?></p>
			<strong><?php esc_attr_e( 'Status:', 'woocommerce-events' ); ?></strong> 
			<?php
			if ( is_plugin_active( 'fooevents-calendar/fooevents-calendar.php' ) || is_plugin_active_for_network( 'fooevents-calendar/fooevents-calendar.php' ) ) {
				echo "<span class='install-status installed'>" . esc_attr__( 'Installed', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-calendar/' target='new'>" . esc_attr__( 'Plugin Details', 'woocommerce-events' ) . '</a>';
			} else {
				if ( file_exists( ABSPATH . 'wp-content/plugins/fooevents-calendar/fooevents-calendar.php' ) ) {
					echo '<span class="install-status notinstalled">' . esc_attr__( 'Deactivated', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-calendar/' target='new'>" . esc_attr__( 'Plugin Details', 'woocommerce-events' ) . '</a>';
				} else {
					echo "<span class='install-status notinstalled'>" . esc_attr__( 'Not Installed', 'woocommerce-events' ) . "</span> | <a href='https://www.fooevents.com/products/fooevents-calendar/' target='new'>" . esc_attr__( 'Get Plugin', 'woocommerce-events' ) . '</a>';
				}
			}
			?>
			| <a href="https://help.fooevents.com/docs/topics/fooevents-plugins/fooevents-calendar/"><?php esc_attr_e( 'Documentation', 'woocommerce-events' ); ?></a> 
			<div class="clear"></div> 
		</div>
		<div class="clear"></div> 
	</div>
</div>
