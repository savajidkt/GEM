<?php



//Exit if accessed directly

if(!defined('ABSPATH')){

	return; 	

}



?>



<!-- <div class="xoo-cp-opac"></div> -->
    <div id="myPopup" class="popup">
        <div class="popup-content">
            <div class="xoo-cp-outer">
            <div class="xoo-cp-cont-opac"></div>
            <span class="xoo-cp-preloader xoo-cp-icon-spinner"></span>
        </div>
            <div class="conferences-content-page-right-side">

            <div class="popup-content-heading-close">
                <h1 class="heading-popup">
                    Added To Basket
                  </h1>
                    <a href="javascript:void(0);"
                    class="box-close xoo-cp-close" id="closePopup">
                     ×
                 </a>
            </div>

            
			<div class="xoo-cp-content"></div>
            <div class="popup-content-d">
                <a href="<?php echo wc_get_checkout_url(); ?>" class="conference-btn checkout-btn">Checkout now</a>
                <a href="javascript:void();" class="xoo-cp-close xcp-btn continue-btn">Continue shopping</a>
                <a href="<?php echo wc_get_cart_url(); ?>" class="view-basket-btn">View basket</a>
            </div>

        </div>
    </div>
</div>

<div class="xoo-cp-notice-box" style="display: none;">

	<div>

	  <span class="xoo-cp-notice"></span>

	</div>

</div>

