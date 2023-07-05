<?php
/**
 * Seating settings for event
 *
 * @link https://www.fooevents.com
 * @package fooevents-seating
 */

?>

<?php settings_fields( 'fooevents-seating-settings' ); ?>
<?php do_settings_sections( 'fooevents-seating-settings' ); ?>
<tr valign="top">
	<th scope="row"><h2><?php esc_attr_e( 'Seating', 'fooevents-calendar' ); ?></h2></th>
	<td></td>
	<td></td>
</tr>
<tr valign="top">
	<th scope="row"><?php esc_attr_e( 'Available seat color', 'fooevents-seating' ); ?></th>
	<td>
		<input type="text" name="globalWooCommerceEventsSeatingColor" id="globalWooCommerceEventsSeatingColor" class="woocommerce-events-color-field" value="<?php echo esc_html( $global_woocommerce_events_seating_color ); ?>">
		<img class="help_tip fooevents-tooltip" title="<?php esc_attr_e( 'Color of the seats that are available for purchase in the seating chart.', 'fooevents-seating' ); ?>" src="<?php echo esc_html( plugins_url() ); ?>/woocommerce/assets/images/help.png" height="16" width="16" />
	</td>
</tr>
<tr valign="top">
	<th scope="row"><?php esc_attr_e( 'Selected seat color', 'fooevents-seating' ); ?></th>
	<td>
		<input type="text" name="globalWooCommerceEventsSeatingColorSelected" id="globalWooCommerceEventsSeatingColorSelected" class="woocommerce-events-color-field" value="<?php echo esc_html( $global_woocommerce_events_seating_color_selected ); ?>">
		<img class="help_tip fooevents-tooltip" title="<?php esc_attr_e( 'Color of the seat that is currently selected in the seating chart.', 'fooevents-seating' ); ?>" src="<?php echo esc_html( plugins_url() ); ?>/woocommerce/assets/images/help.png" height="16" width="16" />
	</td>
</tr>
<tr valign="top">
	<th scope="row"><?php esc_attr_e( 'Selected seat color for other attendees', 'fooevents-seating' ); ?></th>
	<td>
		<input type="text" name="globalWooCommerceEventsSeatingColorUnavailableSelected" id="globalWooCommerceEventsSeatingColorUnavailableSelected" class="woocommerce-events-color-field" value="<?php echo esc_html( $global_woocommerce_events_seating_color_unavailable_selected ); ?>">
		<img class="help_tip fooevents-tooltip" title="<?php esc_attr_e( 'Color of the seats that are selected for other attendees in the same order in the seating chart.', 'fooevents-seating' ); ?>" src="<?php echo esc_html( plugins_url() ); ?>/woocommerce/assets/images/help.png" height="16" width="16" />
	</td>
</tr>
