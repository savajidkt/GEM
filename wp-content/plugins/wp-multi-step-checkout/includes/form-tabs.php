<?php
/**
 * The steps tabs
 *
 * @package WPMultiStepCheckout
 */

defined( 'ABSPATH' ) || exit;

$i                  = 0;
$number_of_steps    = ( $show_login_step ) ? count( $steps ) + 1 : count( $steps );
$current_step_title = ( $show_login_step ) ? 'login' : key( array_slice( $steps, 0, 1, true ) );

do_action( 'wpmc_before_tabs' );

?>
<section id="checkout">
    
          <div class="top_checkout">
            <h1>Your Checkout</h1>
            <a class="return_to_basket" href="#">Return to basket</a>
          </div>
<!-- The steps tabs -->
<div class="checkout_bar">
	<ul class="cdetail__bar__row wpmc-tabs-list wpmc-<?php echo $number_of_steps; ?>-tabs" data-current-title="<?php echo $current_step_title; ?>">

	<?php
	$i=0;
	foreach ( $steps as $_id => $_step ) :
		$class = ($i == 0 ) ? ' current' : '';
		?>
		<li class="step wpmc-tab-item<?php echo $class; ?> wpmc-<?php echo $_id; ?>" data-step-title="<?php echo $_id; ?>">
			<div class="wpmc-tab-text"><?php echo $_step['title']; ?></div>
		</li>
	<?php endforeach; ?>
	</ul>
</div>
