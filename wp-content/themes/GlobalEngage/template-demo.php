<?php
/*
Template Name: Demo
*/
get_header(); ?>

<style>
	span {cursor:pointer; }
		.number_quantity {
                display: flex;
                align-items: center;
                font-family: cursive;
                max-width: 200px;
                width: 100%;
                border:1px solid #333333;
            }
	.minus, .plus {
                width: 100px !important;
                height: 50px;
                background: #333333;
                color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                max-width: 50px !important;
                padding: 0 !important;
                margin: 0 !important;
            }
		input#count_num {
    padding: 0 !important;
    margin: 0 !important;
    text-align: center;
}
.promotion_block{
    display:grid;
    gap:30px;
}
.promotion_block input[type="submit"] {
    width: 100%;
    background-color: #F15D23 !important;
    border: none;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
}

.main_prom_block h2 {
    font-size: 25px;
    color: #333333;
    line-height: 40px;
    font-family: 'Montserrat';
}

.main_cart_page {
    display: grid;
    grid-template-columns: 65% 30%;
    gap: 5%;
}
#promo_code {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
}
#promo_code input#fname {
    padding: 0 20px !important;
    margin: 0 !important;
}
#promo_code input[type="submit"] {
    height: 50px;
    background-color: #333333 !important;
    color: #fff !important;
    display: flex;
    align-items: center;
    padding: 0;
    margin: 0;
    width: 116px;
    justify-content: center;
    font-size: 17px;
}
.subtotal_data,.total_data {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.main_prom_block {
    display: grid;
    gap: 30px;
    padding: 50px;
    background-color: #eaeaea;
}
.subtotal_data h2 {
    font-size: 17px !important;
    font-family: 'Open Sans' !important;
    color: #333333;
    line-height: 34px;
    font-weight: 600;
}
.sub_total_amount_promo {
    display: grid;
    gap: 30px;
}
h2.final_amount {
    color: #F15D23;
}

.product-name,.product-quantity,.product-subtotal {
    text-align: left;
    font-size: 25px;
    line-height: 40px;
    font-family: 'Montserrat';
}
/*cart Page Design*/
.contant_item_basket_cart {
    margin-top: 50px;
    display: grid;
    gap: 50px;
}
 .cart_page {
    display: grid;
    grid-template-columns: 60% 37%;
    gap: 3%;
}
.woocommerce .cart-collaterals .cart_totals, .woocommerce-page .cart-collaterals .cart_totals {
    float: right;
    width: 100%;
}
.cart_title_bar {
    padding: 40px 0;
    display: grid;
    align-items: center;
    grid-template-columns: 60% 20% 10%;
    gap: 5%;
}
.product-subtotal {
    text-align: right;
}
.product-subtotal {
    text-align: start;
}

.contant_item_cart {
    display: grid;
    align-items: center;
    grid-template-columns: repeat(1,1fr);
    padding: 4.1% 0;
}
.woocommerce-cart-form__cart-item.cart_item {
    display: grid;
    grid-template-columns: 60% 20% 10%;
    gap: 5%;
}
span.woocommerce-Price-currencySymbol {
    color: #F15D23;
    font-size: 25px;
    line-height: 40px;
    font-weight: 600;
}
span.woocommerce-Price-amount.amount {
    text-align: right;
}
.product-thumbnail {
    display: flex;
    gap: 50px;
    text-align: left;
}
.cart_price_title {
    display: grid;
    grid-template-columns: repeat(2,1fr);
}
.countinu_shoping_btn {
    display: flex;
    justify-content: flex-end;
    gap: 30px;
    align-items: center;
}
a.cs_btn {
    border: 1px solid;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 20px;
    font-size: 17px;
}
a.cs_btn_besk {
    font-size: 17px;
    color: #333333;
    text-decoration: underline;
}
.checkout_payment-logo-footer {
    display: flex;
    align-items: center;
    gap: 10px;
    justify-content: center;
}
.checkout_payment-logo-footer img {
    max-width: 46px !important;
    width: 100%;
}
a.removed {
    text-align: end;
    width: 100%;
    display: block;
    font-size: 17px;
    line-height: 34px;
    color: #333333;
}
</style>

<?php
$banner_title = get_field('banner_title',$post->ID);
$content = get_field('content',$post->ID);
?>
<div class="container sub_banner_title">
    <div class="header-banner-text">
        <?php if(!empty($banner_title)) { ?>
        <h2>
            <?php echo $banner_title;?>
        </h2>
        <?php } else { ?>
        <h2>
            <?php the_title();?>
        </h2>
        <?php } ?>
        <p>
            <?php echo $content; ?>
        </p>
    </div>
</div>
<section id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="https://gemain.cda-development3.co.uk/"><strong>Home</strong></a></li>
            <storng>/</storng>
                              
                 <li><?php the_title();?></li>
                    </ul>
    </div>
</section>

<section id="basket_page">
    <div class="container">
        <div class="main_cart_page">
        
        <div class="basket_cart_page">
            <div class="cart_main_header_title">
                <hr>
                <div class="cart_title_bar">
                    <div class="product-name">Product</div>
                    <div class="product-quantity">Quantity</div>
                    <div class="product-subtotal">Total</div>
                </div>
                <hr>
            </div>

            <div class="contant_item_basket_cart">
                <div class="woocommerce-cart-form__cart-item cart_item">

                    <div class="product-thumbnail">
                        <a href="#">
                            <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/jezael-melgoza-tUVf65KIVpI-unsplash-300x300.png"
                                class="size-woocommerce_thumbnail">
                        </a>
                        <div class="cart-title">
                            <div class="product-name" data-title="Product">
                                <a href="#">
                                   International Spatial Biology Congress: On Demand</a>
                            </div>
                             <p>Delated Package</p>
                             <div class="conference-details">
                                <p class="field_title"><strong>Date:</strong></p>
                                <p class="dield_data">20<sup>th</sup> March 2023</p>
                            </div>
                            <div class="product-price" data-title="Price">
                                <div class="cart_price_title">
                                    <div>Unit Price:</div>
                                    <div id="unit-price">
                                        <span class="woocommerce-Price-amount amount">
                                             <bdi>
                                                  <span class="woocommerce-Price-currencySymbol">£</span>
                                                 350.00
                                            </bdi>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="remove">Remove</a>
                        </div>

                    </div>
                    <div class="quantity">
                        <div class="number_quantity">
                            	<span class="minus">-</span>
                            	<input type="text" id="count_num" value="1"/>
                            	<span class="plus">+</span>
                            </div>
                    </div>



                    <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">
                                £<bdi>350.00</bdi>
                              </span>
                        </span>
                </div>
                
                <hr>
                
                 <div class="woocommerce-cart-form__cart-item cart_item">

                    <div class="product-thumbnail">
                        <a href="#">
                            <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/06/jezael-melgoza-tUVf65KIVpI-unsplash-300x300.png"
                                class="size-woocommerce_thumbnail">
                        </a>
                        <div class="cart-title">
                            <div class="product-name" data-title="Product">
                                <a href="#">
                                   International Spatial Biology Congress: On Demand</a>
                            </div>
                             <p>Delated Package</p>
                             <div class="conference-details">
                                <p class="field_title"><strong>Date:</strong></p>
                                <p class="dield_data">20<sup>th</sup> March 2023</p>
                            </div>
                            <div class="product-price" data-title="Price">
                                <div class="cart_price_title">
                                   
                                    <div>Unit Price:</div>
                                    
                                    <div id="unit-price">
                                        <span class="woocommerce-Price-amount amount">
                                             <bdi>
                                                  <span class="woocommerce-Price-currencySymbol">£</span>
                                                 350.00
                                            </bdi>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="remove">Remove</a>
                        </div>

                    </div>
                    <div class="quantity">
                        <div class="number_quantity">
                            	<span class="minus">-</span>
                            	<input type="text" id="count_num" value="1"/>
                            	<span class="plus">+</span>
                            </div>
                    </div>



                    <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">
                                £<bdi>350.00</bdi>
                              </span>
                        </span>
                </div>
                <hr>
                <div class="countinu_shoping_btn">
                    <a herf="#" class="cs_btn">Continue shopping</a>
                     <a herf="#" class="cs_btn_besk">Update basket</a>
                </div>
            </div>
        </div>
        
        <div class="promotion_block">
            <div class="main_prom_block">
                <h2>
                   Promotion Code 
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut 
                </p>
                <div class="prom_code_box">
                    <form id="promo_code">
                          <input type="text" id="fname" name="fname">
                          <input type="submit" value="Apply">
                        </form>
                </div>
                <hr>
                <div class="sub_total_amount_promo">
                    <div class="subtotal_data">
                        <h2>Subtotal:</h2>
                        <h2>£2199.98</h2>
                    </div>
                    <div class="subtotal_data">
                        <div class="subtotal_data_block">
                            <h2>Promotion Code:</h2>
                            <a href="#" class="removed">Remove</a>
                        </div>
                       <div class="subtotal_data_block">
                           <h2>-£10.00</h2>
                           <h2>NEWBIE10</h2>
                       </div>
                        
                    </div>
                </div>
                <hr>
                
                <div class="total_data">
                        <h2>Total</h2>
                        <h2 class="final_amount">£2189.98</h2>
                    </div>
                
            </div>
            
             <input type="submit" value="Checkout Securely">
             
             <div class="checkout_payment-logo-footer">
                                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/paypal.svg" alt="">
                                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/visa.svg" alt="">
                                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/mast.svg" alt="">
                                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/ax.svg" alt="">
                                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/pay.svg" alt="">
                                    <img src="https://gemain.cda-development3.co.uk/wp-content/uploads/2023/04/gpay.svg" alt="">
                </div>
            
        </div>
        
        
        </div>

    </div>
</section>

<script>
    	$(document).ready(function() {
			$('.minus').click(function () {
				var $input = $(this).parent().find('input');
				var count = parseInt($input.val()) - 1;
				count = count < 1 ? 1 : count;
				$input.val(count);
				$input.change();
				return false;
			});
			$('.plus').click(function () {
				var $input = $(this).parent().find('input');
				$input.val(parseInt($input.val()) + 1);
				$input.change();
				return false;
			});
		});
</script>






<?php get_footer(); ?>