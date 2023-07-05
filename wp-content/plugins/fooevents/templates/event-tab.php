<?php
/**
 * Event tab template
 *
 * @link https://www.fooevents.com
 * @package woocommerce_events
 */

?>
<h2><?php esc_attr_e( 'Event Details', 'woocommerce-events' ); ?></h2>

<?php if ( ! empty( $woocommerce_events_event_details_text ) ) : ?>

<p><?php echo wp_kses_post( wpautop( $woocommerce_events_event_details_text ) ); ?></p>

<?php endif; ?> 

<?php
if ( ( ! empty( $woocommerce_events_type ) && ( 'single' === $woocommerce_events_type || 'seating' === $woocommerce_events_type || 'sequential' === $woocommerce_events_type ) ) ||
	( empty( $woocommerce_events_type ) && ( ( ! empty( $woocommerce_events_multi_day_type ) && 'sequential' === $woocommerce_events_multi_day_type ) || empty( $woocommerce_events_multi_day_type ) ) ) ) :
	?>

	<?php
	if ( ( ! empty( $woocommerce_events_type ) && 'sequential' === $woocommerce_events_type ) ||
	( empty( $woocommerce_events_type ) && ! empty( $woocommerce_events_multi_day_type ) && 'sequential' === $woocommerce_events_multi_day_type ) ) :
		?>

		<?php if ( ! empty( $woocommerce_events_date ) ) : ?>

			<p><b><?php esc_attr_e( 'Start date:', 'woocommerce-events' ); ?> </b><?php echo esc_attr( $woocommerce_events_date ); ?></p>

		<?php endif; ?>

	<?php else : ?>
		<?php if ( ! empty( $woocommerce_events_date ) ) : ?>

			<p><b><?php esc_attr_e( 'Date:', 'woocommerce-events' ); ?> </b><?php echo esc_attr( $woocommerce_events_date ); ?></p>

		<?php endif; ?>

	<?php endif; ?>

<?php endif; ?>

<?php if ( ( ! empty( $woocommerce_events_type ) && 'sequential' === $woocommerce_events_type ) || ( empty( $woocommerce_events_type ) && ! empty( $woocommerce_events_multi_day_type ) && 'sequential' === $woocommerce_events_multi_day_type ) ) : ?>

	<?php if ( ! empty( $woocommerce_events_end_date ) ) : ?>

		<p><b><?php esc_attr_e( 'End date:', 'woocommerce-events' ); ?> </b> <?php echo esc_attr( $woocommerce_events_end_date ); ?></p>

	<?php endif; ?>

<?php endif; ?>

<?php
if ( ( ! empty( $woocommerce_events_type ) && 'select' === $woocommerce_events_type )
	|| ( empty( $woocommerce_events_type ) && ! empty( $woocommerce_events_multi_day_type ) && 'select' === $woocommerce_events_multi_day_type ) ) :
	?>
	<?php $x = 1; ?>    
	<?php foreach ( $woocommerce_events_select_date as $date ) : ?>
		<p>
			<b><?php printf( esc_attr__( '%1$s %2$d: ', 'woocommerce-events' ), $day_term, $x ); ?> </b> <?php echo esc_attr( $date ); ?> <br />
			<?php if ( ! empty( $woocommerce_events_select_date_hour[ $x - 1 ] ) && ! empty( $woocommerce_events_select_date_minutes[ $x - 1 ] ) ) : ?>
				<b><?php esc_attr_e( 'Start time:', 'woocommerce-events' ); ?> </b>
				<?php echo esc_attr( $woocommerce_events_select_date_hour[ $x - 1 ] ) . ':' . esc_attr( $woocommerce_events_select_date_minutes[ $x - 1 ] ); ?><?php echo( isset( $woocommerce_events_select_date_period[ $x - 1 ] ) ) ? ' ' . esc_attr( $woocommerce_events_select_date_period[ $x - 1 ] ) : ''; ?><br />
			<?php endif; ?>	
			<?php if ( ! empty( $woocommerce_events_select_date_hour_end[ $x - 1 ] ) && ! empty( $woocommerce_events_select_date_minutes_end[ $x - 1 ] ) ) : ?>
				<b><?php esc_attr_e( 'End time:', 'woocommerce-events' ); ?> </b>
				<?php echo esc_attr( $woocommerce_events_select_date_hour_end[ $x - 1 ] ) . ':' . esc_attr( $woocommerce_events_select_date_minutes_end[ $x - 1 ] ); ?><?php echo( isset( $woocommerce_events_select_date_period_end[ $x - 1 ] ) ) ? ' ' . esc_attr( $woocommerce_events_select_date_period_end[ $x - 1 ] ) : ''; ?>
			<?php endif; ?>
		</p>

		<?php $x++; ?>
	<?php endforeach; ?>    	
<?php endif; ?>
<?php if ( ! empty( $woocommerce_events_hour ) && ! empty( $woocommerce_events_minutes ) && '00' !== $woocommerce_events_hour ) : ?>
	<p><b><?php esc_attr_e( 'Start time:', 'woocommerce-events' ); ?> </b> <?php echo esc_attr( $woocommerce_events_hour ) . ':' . esc_attr( $woocommerce_events_minutes ); ?> <?php echo ( ! empty( $woocommerce_events_period ) ) ? esc_attr( $woocommerce_events_period ) : ''; ?> <span class="fooevents-tab-timezone" title="<?php echo esc_attr( $woocommerce_events_timezone ); ?>"><?php echo esc_attr( $timezone ); ?></span></p>
<?php endif; ?>
<?php if ( ! empty( $woocommerce_events_hour_end ) && ! empty( $woocommerce_events_minutes ) && '00' !== $woocommerce_events_hour_end ) : ?>
	<p><b><?php esc_attr_e( 'End time:', 'woocommerce-events' ); ?> </b> <?php echo esc_attr( $woocommerce_events_hour_end ) . ':' . esc_attr( $woocommerce_events_minutes_end ); ?> <?php echo ( ! empty( $woocommerce_events_end_period ) ) ? esc_attr( $woocommerce_events_end_period ) : ''; ?> <span class="fooevents-tab-timezone" title="<?php echo esc_attr( $woocommerce_events_timezone ); ?>"><?php echo esc_attr( $timezone ); ?></span></p>
<?php endif; ?>
<?php if ( ! empty( $woocommerce_events_location ) ) : ?>
	<p><b><?php esc_attr_e( 'Venue:', 'woocommerce-events' ); ?> </b> <?php echo esc_attr( html_entity_decode( $woocommerce_events_location ) ); ?></p>
<?php endif; ?>
<?php if ( ! empty( $woocommerce_events_gps ) ) : ?>
	<p><b><?php esc_attr_e( 'Coordinates:', 'woocommerce-events' ); ?> </b> <?php echo esc_attr( $woocommerce_events_gps ); ?></p>
<?php endif; ?>
<?php if ( ! empty( $woocommerce_events_directions ) ) : ?>
	<p><b><?php esc_attr_e( 'Directions:', 'woocommerce-events' ); ?> </b> <?php echo esc_attr( html_entity_decode( $woocommerce_events_directions ) ); ?></p>
<?php endif; ?>
<?php if ( ! empty( $woocommerce_events_support_contact ) ) : ?>
	<p><b><?php esc_attr_e( 'Phone:', 'woocommerce-events' ); ?> </b> <?php echo esc_attr( html_entity_decode( $woocommerce_events_support_contact ) ); ?></p>
<?php endif; ?>
<?php if ( ! empty( $woocommerce_events_email ) ) : ?>
	<p><b><?php esc_attr_e( 'Email:', 'woocommerce-events' ); ?> </b> <?php echo esc_attr( html_entity_decode( $woocommerce_events_email ) ); ?></p>
<?php endif; ?>
