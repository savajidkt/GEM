jQuery(document).ready(function($){
	var focus_qty;
	//Open cart pop up
	function open_popup(){
		$('.xoo-cp-opac').show();
		$('#myPopup').addClass("show");
    	//$('.xoo-cp-modal').addClass('xoo-cp-active');
	}
	//On add to cart
	$(document.body).on('added_to_cart',function(){
		open_popup();
	});
	//CLose Popup
	function close_popup(e){
		$.each(e.target.classList,function(key,value){
			if(value == 'xoo-cp-close' || value == 'xoo-cp-modal'){
				$('.xoo-cp-opac').hide();
				$('#myPopup').removeClass("show");
				$('.xoo-cp-modal').removeClass('xoo-cp-active');
				$('.xoo-cp-atcn , .xoo-cp-content').html('');
			}
		})
	}
	$(document).on('click','.xoo-cp-close , .xoo-cp-modal',close_popup);
	//Block popup
	function block_popup(){
		$('.xoo-cp-outer').show();
	}
	//Unblock popup
	function unblock_popup(){
		$('.xoo-cp-outer').hide();
	}
	//Reset cart button/form
	function reset_cart(atc_btn){
		$('.xoo-cp-added',atc_btn).remove();
		var qty_elem = atc_btn.parents('form.cart').find('.qty');
		if(qty_elem.length > 0) qty_elem.val(qty_elem.attr('min') || 1);
		$('.added_to_cart').remove();
	}
	//Notice Function
	function show_notice(notice_type,notice){
	 	$('.xoo-cp-notice').html(notice).attr('class','xoo-cp-notice').addClass('xoo-cp-nt-'+notice_type);
	 	$('.xoo-cp-notice-box').fadeIn('fast');
	 	clearTimeout(fadenotice);
	 	var fadenotice = setTimeout(function(){
	 		$('.xoo-cp-notice-box').fadeOut('slow');
	 	},3000);
	};
	//Add to cart function
	function add_to_cart(atc_btn,form_data){
		// Trigger event.
		$( document.body ).trigger( 'adding_to_cart', [ atc_btn, form_data ] );
		$.ajax({
			url: xoo_cp_localize.wc_ajax_url.toString().replace( '%%endpoint%%', 'xoo_cp_add_to_cart' ),
			type: 'POST',
			data: $.param(form_data),
		    success: function(response){
		    	
		    	$('.xoo-cp-adding',atc_btn).remove();
				if(response.fragments){
					// Trigger event so themes can refresh other areas.
					$( document.body ).trigger( 'added_to_cart', [ response.fragments, response.cart_hash, atc_btn ] );
					atc_btn.append('<span class="xoo-cp-icon-check xoo-cp-added"></span>');
				}
				else if(response.error){
					show_notice('error',response.error)
				}
				else{
					console.log(response);
				}
				//Reset to default
				if(xoo_cp_localize.reset_cart) reset_cart(atc_btn);
		
		    }
		})
	}
	//Add to cart on single page
	$(document).on('submit','form.cart',function(e){
		var form = $(this);
		var atc_btn  = form.find( 'button[type="submit"]');
		var form_data = form.serializeArray();
		// if button as name add-to-cart get it and add to form
        if( atc_btn.attr('name') && atc_btn.attr('name') == 'add-to-cart' && atc_btn.attr('value') ){
            form_data.push({ name: 'add-to-cart', value: atc_btn.attr('value') });
        }
        var is_valid = false;
        $.each( form_data, function( index, data ){
        	if( data.name === "add-to-cart" ){
        		is_valid = true;
        		return false;
        	}
        } )
        if( is_valid ){
        	e.preventDefault();
        }
        else{
        	return;
        }
        $('.xoo-cp-added',atc_btn).remove();
		atc_btn.append('<span class="xoo-cp-icon-spinner xoo-cp-adding" aria-hidden="true"></span>');
        form_data.push({name: 'action', value: 'xoo_cp_add_to_cart'});
		add_to_cart(atc_btn,form_data);//Ajax add to cart
	})
	//Ajax function to update cart (In a popup)
	function xoo_cp_update_ajax(cart_key,new_qty,pid){
		return $.ajax({
				url: xoo_cp_localize.adminurl,
				type: 'POST',
				data: {action: 'xoo_cp_change_ajax',
					   cart_key: cart_key, 
					   new_qty: new_qty,
					   pid: pid
					}
			})
	}
	//Update cart
	
	function update_cart(cart_key,new_qty,event_type){
		block_popup();
		//popup-content
		$.ajax({
			url: xoo_cp_localize.wc_ajax_url.toString().replace( '%%endpoint%%', 'xoo_cp_update_cart' ),
			type: 'POST',
			data: {
				cart_key: cart_key,
				event_type: event_type,
				new_qty: new_qty
			},
			success: function(response){
				//var response = jQuery.parseJSON(response);
				if(response.fragments){
					var fragments = response.fragments,
						cart_hash =  response.cart_hash;
					//Set fragments
			   		$.each( response.fragments, function( key, value ) {
						$( key ).replaceWith( value );
						$( key ).stop( true ).css( 'opacity', '1' ).unblock();
					});
			   		if(wc_cart_fragments_params){
				   		var cart_hash_key = wc_cart_fragments_params.ajax_url.toString() + '-wc_cart_hash';
						//Set cart hash
						sessionStorage.setItem( wc_cart_fragments_params.fragment_name, JSON.stringify( fragments ) );
						localStorage.setItem( cart_hash_key, cart_hash );
						sessionStorage.setItem( cart_hash_key, cart_hash );
					}
					//fragment_data();
					$( document.body ).trigger( 'wc_fragments_loaded' );
				}
				else{
					//Print error
					//show_notice('error',response.error);
					//console.log(response.fragments);
				}
				unblock_popup();
			}
		})
	}
	function fragment_data(){
		$.ajax({
			url: xoo_cp_localize.wc_ajax_url.toString().replace( '%%endpoint%%', 'get_refreshed_fragments' ),
			type: 'POST',
			dataType:'json',
			success: function(response){
				
			}
		})
	}
	//Save Quantity on focus
	$(document).on('focusin','.xoo-cp-qty',function(){
		focus_qty = $(this).val();

	})
	//Qty input on change
	$(document).on('change','.xoo-cp-qty',function(e){
		var _this = $(this);
		var new_qty = parseFloat($(this).val());
		var step = parseFloat($(this).attr('step'));
		var min_value = parseFloat($(this).attr('min'));
		var max_value = parseFloat($(this).attr('max'));
		var invalid  = false;
	
		if(new_qty === 0){
			_this.parents('.popup-cart').find('.xoo-cp-remove-pd').trigger('click');
			return;
		}
		//Check If valid number
		else if(isNaN(new_qty)  || new_qty < 0){
			invalid = true;
		}
		//Check maximum quantity
		else if(new_qty > max_value && max_value > 0){
			alert('Maximum Quantity: '+max_value);
			invalid = true;
		}
		//Check Minimum Quantity
		else if(new_qty < min_value){
			invalid = true;
		}
		//Check Step
		else if((new_qty % step) !== 0){
			alert('Quantity can only be purchased in multiple of '+step);
			invalid = true;
		}
		//Update if everything is fine.
		else{
			var event_type = $('.popup-cart').data('event_type');
		var cart_key = $('.popup-cart').data('xoo_cp_key');
		console.log(event_type);
		if(event_type == 'conference'){
			var cart_key = _this.data('xoo_cp_key');

		}
			update_cart(cart_key,new_qty,event_type);
		}
		if(invalid === true){
			$(this).val(focus_qty);
		}
		
	})
	//Plus minus buttons
	$(document).on('click', '.xcp-chng' ,function(){
		var _this = $(this);
		var qty_element = _this.siblings('.xoo-cp-qty');
		qty_element.trigger('focusin');
		var input_qty = parseFloat(qty_element.val());
		var step = parseFloat(qty_element.attr('step'));
		var min_value = parseFloat(qty_element.attr('min'));
		var max_value = parseFloat(qty_element.attr('max'));
		if(_this.hasClass('xcp-plus')){
			var new_qty	  = input_qty + step;
		
			if(new_qty > max_value && max_value > 0){
				alert('Maximum Quantity: '+max_value);
				return;
			}

		}else if(_this.hasClass('xcp-minus')){
			
			var new_qty = input_qty - step;
			if(new_qty === 0){
				_this.parents('.popup-cart').find('.xoo-cp-remove .xcp-icon').trigger('click');
				return;
			
			}else if(new_qty < min_value){
				return;
			
			}else if(input_qty < 0){
				alert('Invalid');
				return;
			}
		}
		var event_type = $('.popup-cart').data('event_type');
		var cart_key = $('.popup-cart').data('xoo_cp_key');

		console.log(event_type);
		if(event_type == 'conference'){
			var cart_key = _this.data('xoo_cp_key');
			console.log(cart_key);
			$('.shiv-'+cart_key).val(new_qty);
		}else{
			$('.xoo-cp-qty').val(new_qty);
		}
		
		
		
			update_cart(cart_key,new_qty,event_type);
		
	})

	//Remove item from cart
	$(document).on('click','.xoo-cp-remove-pd',function(e){
		e.preventDefault();
		var cart_key = $('.popup-cart').data('xoo_cp_key');
		//update_cart(cart_key,0);
		var event_type = $('.popup-cart').data('event_type');
		update_cart(cart_key,0,event_type);
	})

	jQuery(document).on('click', '#apply-btn', function() {
	    var coupon = jQuery( '#apply' ).val();
	    var data = {
	        action: "apply_coupon_code",
	        coupon_code: coupon
	    };
	    var form = jQuery('.checkout_coupon');
    	form.block({message: null, overlayCSS: {background: '#FFF', opacity: 0.6}})
	    jQuery.ajax({
	        type: 'POST',
	        dataType: 'html',
	        url: wc_add_to_cart_params.ajax_url,
	        data: data,
	        success: function (response) {
	                var cart_key = $('.popup-cart').data('xoo_cp_key');
	              var new_qty = $('.shiv-'+cart_key).val();	              				
				  //update_cart(cart_key,new_qty);
				  var event_type = $('.popup-cart').data('event_type');
				  
					update_cart(cart_key,new_qty,event_type);
				  form.unblock()
	         },
	        error: function (errorThrown) {
	               $( document.body ).trigger( 'wc_fragments_loaded' );
	        }
	    });  
	});

	jQuery(document).on('click', '#remove-btn', function() {
	    var coupon = jQuery('#apply').val();
	    var form = jQuery('.checkout_coupon');
    	form.block({message: null, overlayCSS: {background: '#FFF', opacity: 0.6}})
	    var data = {
	        action: "remove_coupon_code",
	        coupon_code: coupon
	    };
    
	    jQuery.ajax({
	        type: 'POST',
	        dataType: 'html',
	        url: wc_add_to_cart_params.ajax_url,
	        data: data,
	        success: function (response) {
	              var cart_key = $('.popup-cart').data('xoo_cp_key');
	              var new_qty = $('.shiv-'+cart_key).val();	
	              var event_type = $('.popup-cart').data('event_type');
			update_cart(cart_key,new_qty,event_type);              				
				  form.unblock()
	         },
	        error: function (errorThrown) {
	             $( document.body ).trigger( 'wc_fragments_loaded' );
	        }
	    });  
	});

jQuery(document).on('submit', 'form.checkout_coupon', function (e) {
    e.preventDefault()
    var form = jQuery(this)
    form.block({message: null, overlayCSS: {background: '#FFF', opacity: 0.6}})
    jQuery.post(wc_add_to_cart_params.ajax_url, {
      action: 'ajax_apply_coupon',
      coupon_code: form.find('[name="coupon_code"]').val()
    }).done(function () {
      setTimeout(function(){
                    //reload with ajax
                        $(document.body).trigger('update_checkout');
                        button.html( 'Apply');
                    }, 2000);
      form.unblock()
    }).fail(function (data) {
      setTimeout(function(){
                    //reload with ajax
                        $(document.body).trigger('update_checkout');
                        button.html( 'Apply');
                    }, 2000);
      form.unblock()
    })
  });

jQuery(document).on('click', ".popup-sub-content-b input[name$='download']", function() {
        if(jQuery(this).val() == 'yes'){
            jQuery('.pdf-down').removeClass('hide');
        }else{
            jQuery('.pdf-down').addClass('hide');
        }
       
    });

})