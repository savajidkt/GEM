jQuery(function ($) {
    jQuery(document).ready(function () {
       
    jQuery(document).on("click", ".clear-filter-reset", function(e){
      e.preventDefault();
      jQuery(".filter-category:checked").each(function() {
            jQuery(this).prop('checked', false);
            
          });
      jQuery('#xclearResourceCentre').addClass('hide');
            var resourceTypeInput = jQuery('.resource-type .sf-option-active').find('input');
            var resourceType ='';
            resourceType = resourceTypeInput[0].value;
            resourceTypeFun(resourceType);
            //jQuery(".resource-type input[value='" + resourceType + "']").trigger('click');
     
    });

    jQuery(document).on("click", ".clear-filter-faq", function(e){
      e.preventDefault();
      jQuery(".filter-category:checked").each(function() {
            jQuery(this).prop('checked', false);
            
            
          });
            jQuery('#xclearFaq').addClass('hide');

            var resourceTypeInput = jQuery('.faq-type .sf-option-active').find('input');
            console.log(resourceTypeInput);
            var resourceType ='';
            resourceType = resourceTypeInput[0].value;
            faqTypeFun(resourceType);
            //jQuery(".faq-type input[value='" + resourceType + "']").trigger('click');
     
    });

    jQuery(document).on("change", "#misha_filters .filter-category", function(e){
          var categoryData =[];

          jQuery(".filter-category:checked").each(function() {
            categoryData.push(jQuery(this).val());
            jQuery('#xclearResourceCentre').removeClass('hide');
          });
          if (categoryData.length === 0) {
              jQuery('#xclearResourceCentre').addClass('hide');
          }
          var resourceTypeInput = jQuery('.resource-type .sf-option-active').find('input');
          console.log(resourceType);
          var resourceType ='';
          resourceType = resourceTypeInput[0].value;
          jQuery('#current_page').val(1);
      var current_page = jQuery('#current_page').val();

          jQuery.ajax({
                   type : "POST",
                   url : frontendajax.ajaxurl,
                   dataType:'html',
                   data : {action: "wp_filter_data",'categoryData':categoryData,'resourceType':resourceType,'page' :current_page},
                   beforeSend : function ( xhr ) {
                    $.blockUI({ message: null });
                  },
                  complete: function() {
                      $.unblockUI();
                  },
                   success: function(response) {
                    var response = jQuery.parseJSON(response);
                        jQuery('#resource-append').html('');
                        jQuery('#resource-remove').css('display','none');                      

                        jQuery('#resource-append').append(response.html);
                        console.log('max'+response.max);
                        console.log((parseInt(current_page) + 1));
                        jQuery('#current_page').val(parseInt(current_page) + 1);
                        if (current_page == response.max || response.max<=0){
                          jQuery('#misha_loadmore').hide();
                        }else{
                          jQuery('#misha_loadmore').show();
                          jQuery('#current_page').val(2);
                        } 

                      }
              });   

          $("#re-compare-bar-tabs div").remove(); 
          $('.re-compare-icon-toggle .re-compare-notice').text(0); 

      });

    // FAQ
    jQuery(document).on("change", "#resource-center-conten_faq .filter-category", function(e){
          var categoryData =[];

          jQuery(".filter-category:checked").each(function() {
            categoryData.push(jQuery(this).val());
            jQuery('#xclearFaq').removeClass('hide');
          });
          if (categoryData.length === 0) {
              jQuery('#xclearFaq').addClass('hide');
          }
          var resourceTypeInput = jQuery('.faq-type .sf-option-active').find('input');
          console.log(resourceType);
          var resourceType ='';
          resourceType = resourceTypeInput[0].value;
          jQuery('#current_page').val(1);
      var current_page = jQuery('#current_page').val();

          jQuery.ajax({
                   type : "POST",
                   url : frontendajax.ajaxurl,
                   dataType:'html',
                   data : {action: "wp_filter_faq_data",'categoryData':categoryData,'faqType':resourceType,'page' :current_page},
                   beforeSend : function ( xhr ) {
                    $.blockUI({ message: null });
                  },
                  complete: function() {
                      $.unblockUI();
                  },
                   success: function(response) {
                    var response = jQuery.parseJSON(response);
                        jQuery('#resource-append').html('');
                        jQuery('#resource-append').append(response.html);
                        console.log('max'+response.max);
                        console.log((parseInt(current_page) + 1));
                        jQuery('#current_page').val(parseInt(current_page) + 1);
                        if (current_page == response.max ){
                          jQuery('#misha_loadmore').hide();
                        }else{
                          jQuery('#misha_loadmore').show();
                          jQuery('#current_page').val(2);
                        } 

                      }
              });   

          $("#re-compare-bar-tabs div").remove(); 
          $('.re-compare-icon-toggle .re-compare-notice').text(0); 

      });

   /*
   * Load More
   */
    $('#misha_loadmore').click(function(){
    
    var categoryData =[];
          jQuery(".filter-category:checked").each(function() {
            categoryData.push(jQuery(this).val());
          });
          var resourceTypeInput = jQuery('.resource-type .sf-option-active').find('input');
          console.log(resourceType);
          var resourceType ='';
          resourceType = resourceTypeInput[0].value;
          var current_page = jQuery('#current_page').val();
          jQuery.ajax({
                   type : "POST",
                   url : frontendajax.ajaxurl,
                   dataType:'html',
                   data : {action: "wp_filter_data",'categoryData':categoryData,'resourceType':resourceType,'page' :current_page},
                   beforeSend : function ( xhr ) {
                    $('#misha_loadmore').text('Loading...'); // some type of preloader
                    $.blockUI({ message: null }); 
                  },
                  complete: function() {
                      $.unblockUI();
                  },
                   success: function(response) {
                    var response = jQuery.parseJSON(response);
                    console.log(response);
                        //jQuery('#resource-append').html('');
                       jQuery('#misha_loadmore').text( 'Load more' );
                        jQuery('#resource-remove').css('display','none');
                        jQuery('#resource-append').append(response.html);
                        
                        jQuery('#current_page').val(parseInt(current_page) + 1);
                        if (current_page == response.max ){
                          jQuery('#misha_loadmore').hide();
                        }else{
                          jQuery('#misha_loadmore').show();
                          jQuery('#current_page').val(parseInt(current_page) + 1);
                        } 
            
                        


                      }
              });

    
    });

   jQuery(document).on("change", ".resource-type .sf-input-radio", function(e){
          var categoryData =[];
          jQuery(".filter-category:checked").each(function() {
            categoryData.push(jQuery(this).val());
          });
          
                var $all_options = jQuery('.top-bar-type-category').find('li');
                    $all_options.removeClass("sf-option-active");

          jQuery(this).parent().addClass('sf-option-active');
          var resourceType = jQuery(this).val();
          jQuery('#current_page').val(1);
          var current_page = jQuery('#current_page').val();
          jQuery.ajax({
                   type : "POST",
                   url : frontendajax.ajaxurl,
                   dataType:'html',
                   data : {action: "wp_filter_data",'categoryData':categoryData,'resourceType':resourceType,'page' :current_page},
                   beforeSend : function ( xhr ) {
                    $.blockUI({ message: null });
                  },
                  complete: function() {
                     $.unblockUI();
                  },
                   success: function(response) {
                    var response = jQuery.parseJSON(response);
                        jQuery('#resource-append').html('');
                        jQuery('#resource-remove').css('display','none');                      

                        jQuery('#resource-append').append(response.html);

                        console.log('max'+response.max);
                        console.log((parseInt(current_page) + 1));
                        jQuery('#current_page').val(parseInt(current_page) + 1);
                        if (current_page > response.max ){
                          jQuery('#misha_loadmore').hide();
                        }else{
                          jQuery('#misha_loadmore').show();
                          jQuery('#current_page').val(2);
                        } 

                      }

              });   

          $("#re-compare-bar-tabs div").remove(); 
          $('.re-compare-icon-toggle .re-compare-notice').text(0); 

    });


   jQuery(document).on("change", ".faq-type .sf-input-radio", function(e){
          var categoryData =[];
          jQuery(".filter-category:checked").each(function() {
            categoryData.push(jQuery(this).val());
          });
          
                var $all_options = jQuery('.top-bar-type-category').find('li');
                    $all_options.removeClass("sf-option-active");

          jQuery(this).parent().addClass('sf-option-active');
          var faqType = jQuery(this).val();
          jQuery('#current_page').val(1);
          jQuery.ajax({
                   type : "POST",
                   url : frontendajax.ajaxurl,
                   dataType:'html',
                   data : {action: "wp_filter_faq_data",'categoryData':categoryData,'faqType':faqType},
                   beforeSend : function ( xhr ) {
                    $.blockUI({ message: null });
                  },
                  complete: function() {
                     $.unblockUI();
                  },
                   success: function(response) {
                    var response = jQuery.parseJSON(response);
                        jQuery('#resource-append').html('');
                        jQuery('#resource-append').append(response.html);

                      }

              });   

          $("#re-compare-bar-tabs div").remove(); 
          $('.re-compare-icon-toggle .re-compare-notice').text(0); 

      });
        
    });


    var size_loadMoreData = jQuery(".our-people-member .loadMoreData").length;
    loadMoreCount=8;
    jQuery('.our-people-member .loadMoreData:lt('+loadMoreCount+')').show();
    jQuery('#aboutloadMore').click(function () {
        loadMoreCount= (loadMoreCount+8 <= size_loadMoreData) ? loadMoreCount+8 : size_loadMoreData;
        jQuery('.our-people-member .loadMoreData:lt('+loadMoreCount+')').show();        
        if(loadMoreCount == size_loadMoreData){
          jQuery('#aboutloadMore').hide();
        }
    }); 
    
    


    var size_loadMoreDataA = jQuery(".our-people-member .loadMoreDataA").length;
    loadMoreCountA=4;
    jQuery('.our-people-member .loadMoreDataA:lt('+loadMoreCountA+')').show();
    jQuery('#aboutloadMoreA').click(function () {
      loadMoreCountA= (loadMoreCountA+4 <= size_loadMoreDataA) ? loadMoreCountA+4 : size_loadMoreDataA;
        jQuery('.our-people-member .loadMoreDataA:lt('+loadMoreCountA+')').show();        
        if(loadMoreCountA == size_loadMoreDataA){
          jQuery('#aboutloadMoreA').hide();
        }
    });
    

});

function resourceTypeFun(resourceType){
  var categoryData =[];
          jQuery(".filter-category:checked").each(function() {
            categoryData.push(jQuery(this).val());
          });
          
                var $all_options = jQuery('.top-bar-type-category').find('li');
                    $all_options.removeClass("sf-option-active");

          jQuery(".resource-type input[value='" + resourceType + "']").parent().addClass('sf-option-active');
          jQuery('#current_page').val(1);
          var current_page = jQuery('#current_page').val();
          jQuery.ajax({
                   type : "POST",
                   url : frontendajax.ajaxurl,
                   dataType:'html',
                   data : {action: "wp_filter_data",'categoryData':categoryData,'resourceType':resourceType,'page' :current_page},
                   beforeSend : function ( xhr ) {
                    $.blockUI({ message: null });
                  },
                  complete: function() {
                     $.unblockUI();
                  },
                   success: function(response) {
                    var response = jQuery.parseJSON(response);
                        jQuery('#resource-append').html('');
                        jQuery('#resource-remove').css('display','none');                      

                        jQuery('#resource-append').append(response.html);

                        console.log('max'+response.max);
                        console.log((parseInt(current_page) + 1));
                        jQuery('#current_page').val(parseInt(current_page) + 1);
                        if (current_page > response.max ){
                          jQuery('#misha_loadmore').hide();
                        }else{
                          jQuery('#misha_loadmore').show();
                          jQuery('#current_page').val(2);
                        } 

                      }

              });   

          $("#re-compare-bar-tabs div").remove(); 
          $('.re-compare-icon-toggle .re-compare-notice').text(0); 
}

function faqTypeFun(faqType){
      var categoryData =[];
          jQuery(".filter-category:checked").each(function() {
            categoryData.push(jQuery(this).val());
          });
          
                var $all_options = jQuery('.top-bar-type-category').find('li');
                    $all_options.removeClass("sf-option-active");

          jQuery(".faq-type input[value='" + faqType + "']").parent().addClass('sf-option-active');
          jQuery.ajax({
                   type : "POST",
                   url : frontendajax.ajaxurl,
                   dataType:'html',
                   data : {action: "wp_filter_faq_data",'categoryData':categoryData,'faqType':faqType},
                   beforeSend : function ( xhr ) {
                     // $.blockUI({ message: null });
                  },
                  complete: function() {
                     //$.unblockUI();
                  },
                   success: function(response) {
                    var response = jQuery.parseJSON(response);
                        jQuery('#resource-append').html('');
                        jQuery('#resource-append').append(response.html);

                      }

              });   

}
jQuery(function ($) {
    jQuery(document).ready(function () {
      jQuery('.header-slider').slick({
        slidesToShow: 1,
        arrows: false,
        dots: true,
        speed: 300,
        infinite: true,
        autoplaySpeed: 2000,
        autoplay: false,
    });

        jQuery('.event-slider-block').slick({
            slidesToShow: 1,
            arrows: false,
            dots: true,
            speed: 300,
            infinite: true,
            autoplaySpeed: 2000,
            autoplay: false,
        });
    });
});
jQuery(function ($) {
    jQuery(document).ready(function () {
        jQuery('.usp-section').slick({
            arrows: false,
            infinite: true,
            dots: false,
             slidesToShow: 4,
            slidesToScroll: 4,
            speed: 300,
            infinite: true,
            autoplaySpeed: 2000,
            autoplay: false,
            responsive: [
            {
              breakpoint: 1450,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 2,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 501,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        });
    });
});
// drop down
 jQuery(document).ready(function () {
$(function() {
  var list = $('.js-dropdown-list');
  var link = $('.js-link');
  link.click(function(e) {
    e.preventDefault();
    list.slideToggle(200);
  });
  list.find('li').click(function() {
    var text = $(this).html();
    var icon = '<i class="fa fa-chevron-down"></i>';
    link.html(text+icon);
    list.slideToggle(200);
    if (text === '* Reset') {
      link.html('Select one option'+icon);
    }
  });
});
 });
 
 
 
 
// // video section
// const videoPlayer = document.querySelector('.video-player')
// const videoss = videoPlayer.querySelector('.video')
// const playButton = videoss.querySelector('.play-button')
// // Play and Pause
// playButton.addEventListener('click', (e) => {
//     if(video.paused){
//         video.play()
//         e.target.textContent = '❚ ❚'
//     } else {
//         video.pause()
//         e.target.textContent = '►'
//     }
// })
// end video js
// header sticky JS Code
// end JS code
jQuery(function ($) {
    jQuery(document).ready(function () {
       $('.image-slider').slick({
                arrows: false,
                dots: true,
                infinite: true,
                speed: 500,
              //   slidesToShow: 1,
                slidesToShow: 4,
                centerMode: true,
              //   variableWidth: true,
                draggable: true,
                 responsive: [
                  {
                    breakpoint: 1024,
                    settings: {
                      slidesToShow: 3,
                      slidesToScroll: 3,
                      infinite: true,
                      dots: true
                    }
                  },
                  {
                    breakpoint: 600,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 2
                    }
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                    }
                  }
                  
                ]
              });

       
       $(document).on('click','#BlogsBtn',function(){
        
        $('#WebinarBtn').removeClass('active');
        $('#DownloadsBtn').removeClass('active');
        $('#BlogsBtn').addClass('active');
            destroyCarousel();
            slickCarousel();
       });
       $(document).on('click','#WebinarBtn',function(){
        $('#BlogsBtn').removeClass('active');
        $('#DownloadsBtn').removeClass('active');
        $('#WebinarBtn').addClass('active');
            destroyCarousel();
            slickCarousel();
       });
       $(document).on('click','#DownloadsBtn',function(){
        $('#WebinarBtn').removeClass('active');
        $('#BlogsBtn').removeClass('active');
        $('#DownloadsBtn').addClass('active');
            destroyCarousel();
            slickCarousel();
       });




    


    });

    
     function slickCarousel() {
  
    $('.gallery-slider').slick({               
                dots: true,
                infinite: true,
                speed: 300,             
                slidesToShow: 4,
                slidesToScroll: 4,               
                 responsive: [
                  {
                    breakpoint: 1200,
                    settings: {
                      slidesToShow: 3,
                      slidesToScroll: 3,
                      infinite: true,
                      dots: true
                    }
                  },
                  {
                    breakpoint: 600,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 2
                    }
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                    }
                  }
                  
                ]
              });
   }
           
  function destroyCarousel() {
    if ($('.gallery-slider').hasClass('slick-initialized')) {
      $('.gallery-slider').slick('destroy');
    }      
  }

    $(window).on('load', function() {
     
      // BLog slider
       $('.gallery-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,             
        slidesToShow: 4,
        slidesToScroll: 4,   
                 responsive: [
                  {
                    breakpoint: 1200,
                    settings: {
                      slidesToShow: 3,
                      slidesToScroll: 3,
                      infinite: true,
                      dots: true
                    }
                  },
                  {
                    breakpoint: 700,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 2
                    }
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                    }
                  }
                  
                ]
              });


                setTimeout(function () {
                  console.log('click');
                     $('#BlogsBtn').trigger('click');
                 }, 2000);


  });

    /*
   * Mobile Load More
   */
  $('#m_blog_misha_loadmore').click(function(){

          var resourceType ='';
          resourceType = 'blog';
          var current_page = jQuery('#blog_current_page').val();
          jQuery.ajax({
                   type : "POST",
                   url : frontendajax.ajaxurl,
                   dataType:'html',
                   data : {action: "wp_filter_resource_data",'resourceType':resourceType,'page' :current_page},
                   beforeSend : function ( xhr ) {
                    $('#m_blog_misha_loadmore').text('Loading...'); // some type of preloader
                    $.blockUI({ message: null }); 
                  },
                  complete: function() {
                      $.unblockUI();
                  },
                   success: function(response) {
                    var response = jQuery.parseJSON(response);
                    console.log(response);
                        //jQuery('#resource-append').html('');
                       jQuery('#m_blog_misha_loadmore').text( 'Load more' );
                        jQuery('#mblog-sec').append(response.html);
                        
                        jQuery('#blog_current_page').val(parseInt(current_page) + 1);
                        if (current_page == response.max ){
                          jQuery('#m_blog_misha_loadmore').hide();
                        }else{
                          jQuery('#m_blog_misha_loadmore').show();
                          jQuery('#blog_current_page').val(parseInt(current_page) + 1);
                        } 
                      }
              });
  
  });
  $('#m_webinar_misha_loadmore').click(function(){

          var resourceType ='';
          resourceType = 'webinar-recordings';
          var current_page = jQuery('#webinar_current_page').val();
          jQuery.ajax({
                   type : "POST",
                   url : frontendajax.ajaxurl,
                   dataType:'html',
                   data : {action: "wp_filter_resource_data",'resourceType':resourceType,'page' :current_page},
                   beforeSend : function ( xhr ) {
                    $('#m_webinar_misha_loadmore').text('Loading...'); // some type of preloader
                    $.blockUI({ message: null }); 
                  },
                  complete: function() {
                      $.unblockUI();
                  },
                   success: function(response) {
                    var response = jQuery.parseJSON(response);
                    console.log(response);
                        //jQuery('#resource-append').html('');
                       jQuery('#m_webinar_misha_loadmore').text( 'Load more' );
                        jQuery('#mwebinar-sec').append(response.html);
                        
                        jQuery('#webinar_current_page').val(parseInt(current_page) + 1);
                        if (current_page == response.max ){
                          jQuery('#m_webinar_misha_loadmore').hide();
                        }else{
                          jQuery('#m_webinar_misha_loadmore').show();
                          jQuery('#webinar_current_page').val(parseInt(current_page) + 1);
                        } 
                      }
              });
  
  });
  $('#m_dow_misha_loadmore').click(function(){

          var resourceType ='';
          resourceType = 'downloads';
          var current_page = jQuery('#down_current_page').val();
          jQuery.ajax({
                   type : "POST",
                   url : frontendajax.ajaxurl,
                   dataType:'html',
                   data : {action: "wp_filter_resource_data",'resourceType':resourceType,'page' :current_page},
                   beforeSend : function ( xhr ) {
                    $('#m_dow_misha_loadmore').text('Loading...'); // some type of preloader
                    $.blockUI({ message: null }); 
                  },
                  complete: function() {
                      $.unblockUI();
                  },
                   success: function(response) {
                    var response = jQuery.parseJSON(response);
                    console.log(response);
                        //jQuery('#resource-append').html('');
                       jQuery('#m_dow_misha_loadmore').text( 'Load more' );
                        jQuery('#mdonwload-sec').append(response.html);
                        
                        jQuery('#down_current_page').val(parseInt(current_page) + 1);
                        if (current_page == response.max ){
                          jQuery('#m_dow_misha_loadmore').hide();
                        }else{
                          jQuery('#m_dow_misha_loadmore').show();
                          jQuery('#down_current_page').val(parseInt(current_page) + 1);
                        } 
                      }
              });
  
  });



});
// popup forms for webinar recording
function showDiv_sign() {
   document.getElementById('login_popup').style.display = "block";
}
// function closeDiv_sign() {
//   document.getElementById('login_popup').style.display = "none";
// }


window.onload = function() {
  var popupForm = document.getElementById('popupForm');
  //var closeButton = document.getElementById('closeButton');

  popupForm.style.display = 'block';

//   closeButton.onclick = function() {
//     popupForm.style.display = 'none';
//   };
if (typeof slickCarousel == 'function') { 

  slickCarousel();
}
};


// popup for sponsor widget

function sponPopup(popupId) {
  $('.'+popupId).show();
  //document.getElementsByClassName(popupId).style.display = "block";
 
}
function sponPopupClose(popupId) {
  
  $('.'+popupId).hide();
}

document.addEventListener('DOMContentLoaded', function() {

// Add active class to the current button (highlight it)
var header = document.getElementById("mBtnWeb");
if(header){
var btns = header.getElementsByClassName("mBtnWeb");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("btnactive");
  current[0].className = current[0].className.replace("btnactive", "");
  this.className += " active";
  });
}
}
}, false);







// // edit by harry
//----------------------------------------------------------------------------- customize footer selct option-------------------------------------------------
jQuery(function ($) {
    jQuery(document).ready(function () {




      var customSelectEle, i, j, selElmnt, divEle, divEleSelected, c;
  customSelectEle = document.querySelector(".customselect .wpcf7-form-control-wrap");
  selElmnt = customSelectEle.getElementsByTagName("select")[0];
  divEle = document.createElement("DIV");
  divEle.setAttribute("class", "select-selected");
  divEle.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  customSelectEle.appendChild(divEle);
  divEleSelected = document.createElement("DIV");
  divEleSelected.setAttribute("class", "select-items select-hide");
  Array.from(selElmnt).forEach((item, index) => {
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[index].innerHTML;
      c.addEventListener("click", function(e) {
         var y, i, k, selEleParent, selEleSibling;
         selEleParent = this.parentNode.parentNode.getElementsByTagName( "select" )[0];
         selEleSibling = this.parentNode.previousSibling;
         for (i = 0; i < selEleParent.length; i++) {
            if (selEleParent.options[i].innerHTML == this.innerHTML) {
              selEleParent.selectedIndex = i;
              selEleSibling.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("sameSelected");
              for (k = 0; k < y.length; k++) {
                  y[k].removeAttribute("class");
              }
              this.setAttribute("class", "sameSelected");
              break;
            }
         }
         selEleSibling.click();
      });
      divEleSelected.appendChild(c);
  });
  customSelectEle.appendChild(divEleSelected);
  divEle.addEventListener("click", function(e) {
      e.stopPropagation();
      closeSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
  });
  function closeSelect(elmnt) {
      var customSelectEle,
      y,
      i,
      arrNo = [];
      customSelectEle = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      for (i = 0; i < y.length; i++) {
         if (elmnt == y[i]) {
            arrNo.push(i);
         }
         else {
            y[i].classList.remove("select-arrow-active");
         }
      }
      for (i = 0; i < customSelectEle.length; i++) {
         if (arrNo.indexOf(i)) {
            customSelectEle[i].classList.add("select-hide");
         }
      }
  }
  document.addEventListener("click", closeSelect);

  });
});


jQuery(function ($) {
    jQuery(document).ready(function () {
      var customSelectEle, i, j, selElmnt, divEle, divEleSelected, c;
  customSelectEle = document.querySelector(".show-me-customselect-3 .wpcf7-form-control-wrap");
  selElmnt = customSelectEle.getElementsByTagName("select")[0];
  divEle = document.createElement("DIV");
  divEle.setAttribute("class", "select-selected");
  divEle.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  customSelectEle.appendChild(divEle);
  divEleSelected = document.createElement("DIV");
  divEleSelected.setAttribute("class", "select-items select-hide");
  Array.from(selElmnt).forEach((item, index) => {
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[index].innerHTML;
      c.addEventListener("click", function(e) {
         var y, i, k, selEleParent, selEleSibling;
         selEleParent = this.parentNode.parentNode.getElementsByTagName( "select" )[0];
         selEleSibling = this.parentNode.previousSibling;
         for (i = 0; i < selEleParent.length; i++) {
            if (selEleParent.options[i].innerHTML == this.innerHTML) {
              selEleParent.selectedIndex = i;
              selEleSibling.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("sameSelected");
              for (k = 0; k < y.length; k++) {
                  y[k].removeAttribute("class");
              }
              this.setAttribute("class", "sameSelected");
              break;
            }
         }
         selEleSibling.click();
      });
      divEleSelected.appendChild(c);
  });
  customSelectEle.appendChild(divEleSelected);
  divEle.addEventListener("click", function(e) {
      e.stopPropagation();
      closeSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
  });
  function closeSelect(elmnt) {
      var customSelectEle,
      y,
      i,
      arrNo = [];
      customSelectEle = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      for (i = 0; i < y.length; i++) {
         if (elmnt == y[i]) {
            arrNo.push(i);
         }
         else {
            y[i].classList.remove("select-arrow-active");
         }
      }
      for (i = 0; i < customSelectEle.length; i++) {
         if (arrNo.indexOf(i)) {
            customSelectEle[i].classList.add("select-hide");
         }
      }
  }
  document.addEventListener("click", closeSelect);

  });
});



jQuery(function ($) {
    jQuery(document).ready(function () {




      var customSelectEle, i, j, selElmnt, divEle, divEleSelected, c;
  customSelectEle = document.querySelector(".show-me-customselect");
  selElmnt = customSelectEle.getElementsByTagName("select")[0];
  divEle = document.createElement("DIV");
  divEle.setAttribute("class", "select-selected");
  divEle.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  customSelectEle.appendChild(divEle);
  divEleSelected = document.createElement("DIV");
  divEleSelected.setAttribute("class", "select-items select-hide");
  Array.from(selElmnt).forEach((item, index) => {
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[index].innerHTML;
      c.addEventListener("click", function(e) {
         var y, i, k, selEleParent, selEleSibling;
         selEleParent = this.parentNode.parentNode.getElementsByTagName( "select" )[0];
         selEleSibling = this.parentNode.previousSibling;
         for (i = 0; i < selEleParent.length; i++) {
            if (selEleParent.options[i].innerHTML == this.innerHTML) {
              selEleParent.selectedIndex = i;
              selEleSibling.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("sameSelected");
              for (k = 0; k < y.length; k++) {
                  y[k].removeAttribute("class");
              }
              this.setAttribute("class", "sameSelected");
              break;
            }
         }
         selEleSibling.click();
      });
      divEleSelected.appendChild(c);
  });
  customSelectEle.appendChild(divEleSelected);
  divEle.addEventListener("click", function(e) {
      e.stopPropagation();
      closeSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
  });
  function closeSelect(elmnt) {
      var customSelectEle,
      y,
      i,
      arrNo = [];
      customSelectEle = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      for (i = 0; i < y.length; i++) {
         if (elmnt == y[i]) {
            arrNo.push(i);
         }
         else {
            y[i].classList.remove("select-arrow-active");
         }
      }
      for (i = 0; i < customSelectEle.length; i++) {
         if (arrNo.indexOf(i)) {
            customSelectEle[i].classList.add("select-hide");
         }
      }
  }
  document.addEventListener("click", closeSelect);

  });
});
jQuery(function ($) {
    jQuery(document).ready(function () {




      var customSelectEle, i, j, selElmnt, divEle, divEleSelected, c;
  customSelectEle = document.querySelector(".show-me-customselect1");
  selElmnt = customSelectEle.getElementsByTagName("select")[0];
  divEle = document.createElement("DIV");
  divEle.setAttribute("class", "select-selected");
  divEle.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  customSelectEle.appendChild(divEle);
  divEleSelected = document.createElement("DIV");
  divEleSelected.setAttribute("class", "select-items select-hide");
  Array.from(selElmnt).forEach((item, index) => {
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[index].innerHTML;
      c.addEventListener("click", function(e) {
         var y, i, k, selEleParent, selEleSibling;
         selEleParent = this.parentNode.parentNode.getElementsByTagName( "select" )[0];
         selEleSibling = this.parentNode.previousSibling;
         for (i = 0; i < selEleParent.length; i++) {
            if (selEleParent.options[i].innerHTML == this.innerHTML) {
              selEleParent.selectedIndex = i;
              selEleSibling.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("sameSelected");
              for (k = 0; k < y.length; k++) {
                  y[k].removeAttribute("class");
              }
              this.setAttribute("class", "sameSelected");
              break;
            }
         }
         selEleSibling.click();
      });
      divEleSelected.appendChild(c);
  });
  customSelectEle.appendChild(divEleSelected);
  divEle.addEventListener("click", function(e) {
      e.stopPropagation();
      closeSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
  });
  function closeSelect(elmnt) {
      var customSelectEle,
      y,
      i,
      arrNo = [];
      customSelectEle = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      for (i = 0; i < y.length; i++) {
         if (elmnt == y[i]) {
            arrNo.push(i);
         }
         else {
            y[i].classList.remove("select-arrow-active");
         }
      }
      for (i = 0; i < customSelectEle.length; i++) {
         if (arrNo.indexOf(i)) {
            customSelectEle[i].classList.add("select-hide");
         }
      }
  }
  document.addEventListener("click", closeSelect);

  });
});


jQuery(function ($) {
    jQuery(document).ready(function () {




      var customSelectEle, i, j, selElmnt, divEle, divEleSelected, c;
  customSelectEle = document.querySelector(".show-me-customselect2");
  selElmnt = customSelectEle.getElementsByTagName("select")[0];
  divEle = document.createElement("DIV");
  divEle.setAttribute("class", "select-selected");
  divEle.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  customSelectEle.appendChild(divEle);
  divEleSelected = document.createElement("DIV");
  divEleSelected.setAttribute("class", "select-items select-hide");
  Array.from(selElmnt).forEach((item, index) => {
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[index].innerHTML;
      c.addEventListener("click", function(e) {
         var y, i, k, selEleParent, selEleSibling;
         selEleParent = this.parentNode.parentNode.getElementsByTagName( "select" )[0];
         selEleSibling = this.parentNode.previousSibling;
         for (i = 0; i < selEleParent.length; i++) {
            if (selEleParent.options[i].innerHTML == this.innerHTML) {
              selEleParent.selectedIndex = i;
              selEleSibling.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("sameSelected");
              for (k = 0; k < y.length; k++) {
                  y[k].removeAttribute("class");
              }
              this.setAttribute("class", "sameSelected");
              break;
            }
         }
         selEleSibling.click();
      });
      divEleSelected.appendChild(c);
  });
  customSelectEle.appendChild(divEleSelected);
  divEle.addEventListener("click", function(e) {
      e.stopPropagation();
      closeSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
  });
  function closeSelect(elmnt) {
      var customSelectEle,
      y,
      i,
      arrNo = [];
      customSelectEle = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      for (i = 0; i < y.length; i++) {
         if (elmnt == y[i]) {
            arrNo.push(i);
         }
         else {
            y[i].classList.remove("select-arrow-active");
         }
      }
      for (i = 0; i < customSelectEle.length; i++) {
         if (arrNo.indexOf(i)) {
            customSelectEle[i].classList.add("select-hide");
         }
      }
  }
  document.addEventListener("click", closeSelect);

  });
});
//----------------------------------------------------------------------------- // Sign Up & Stay Informed-------------------------------------------------
// jQuery(function ($) {
//     jQuery(document).ready(function () {
       
// selectOption(".show-me-customselect-3 .wpcf7-form-control-wrap")
// selectOption(".show-me-customselect2")
// selectOption(".show-me-customselect1")
// selectOption(".show-me-customselect")
// selectOption(".customselect .wpcf7-form-control-wrap")
//   });
// });
// function selectOption(className){
//       var customSelectEle, i, j, selElmnt, divEle, divEleSelected, c;
//   customSelectEle = document.querySelector(className);
//   selElmnt = customSelectEle.getElementsByTagName("select")[0];
//   divEle = document.createElement("DIV");
//   divEle.setAttribute("class", "select-selected");
//   divEle.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
//   customSelectEle.appendChild(divEle);
//   divEleSelected = document.createElement("DIV");
//   divEleSelected.setAttribute("class", "select-items select-hide");
//   Array.from(selElmnt).forEach((item, index) => {
//       c = document.createElement("DIV");
//       c.innerHTML = selElmnt.options[index].innerHTML;
//       c.addEventListener("click", function(e) {
//          var y, i, k, selEleParent, selEleSibling;
//          selEleParent = this.parentNode.parentNode.getElementsByTagName( "select" )[0];
//          selEleSibling = this.parentNode.previousSibling;
//          for (i = 0; i < selEleParent.length; i++) {
//             if (selEleParent.options[i].innerHTML == this.innerHTML) {
//               selEleParent.selectedIndex = i;
//               selEleSibling.innerHTML = this.innerHTML;
//               y = this.parentNode.getElementsByClassName("sameSelected");
//               for (k = 0; k < y.length; k++) {
//                   y[k].removeAttribute("class");
//               }
//               this.setAttribute("class", "sameSelected");
//               break;
//             }
//          }
//          selEleSibling.click();
//       });
//       divEleSelected.appendChild(c);
//   });
//   customSelectEle.appendChild(divEleSelected);
//   divEle.addEventListener("click", function(e) {
//       e.stopPropagation();
//       closeSelect(this);
//       this.nextSibling.classList.toggle("select-hide");
//       this.classList.toggle("select-arrow-active");
//   });
//   function closeSelect(elmnt) {
//       var customSelectEle,
//       y,
//       i,
//       arrNo = [];
//       customSelectEle = document.getElementsByClassName("select-items");
//       y = document.getElementsByClassName("select-selected");
//       for (i = 0; i < y.length; i++) {
//          if (elmnt == y[i]) {
//             arrNo.push(i);
//          }
//          else {
//             y[i].classList.remove("select-arrow-active");
//          }
//       }
//       for (i = 0; i < customSelectEle.length; i++) {
//          if (arrNo.indexOf(i)) {
//             customSelectEle[i].classList.add("select-hide");
//          }
//       }
//   }
//   document.addEventListener("click", closeSelect);
// }

//----------------------------------------------------------------------------- // become sponser custom select -------------------------------------------------


jQuery(function ($) {
    jQuery(document).ready(function () {




      var customSelectEle, i, j, selElmnt, divEle, divEleSelected, c;
  customSelectEle = document.querySelector(".show-me-customselect-4");
  selElmnt = customSelectEle.getElementsByTagName("select")[0];
  divEle = document.createElement("DIV");
  divEle.setAttribute("class", "select-selected");
  divEle.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  customSelectEle.appendChild(divEle);
  divEleSelected = document.createElement("DIV");
  divEleSelected.setAttribute("class", "select-items select-hide");
  Array.from(selElmnt).forEach((item, index) => {
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[index].innerHTML;
      c.addEventListener("click", function(e) {
         var y, i, k, selEleParent, selEleSibling;
         selEleParent = this.parentNode.parentNode.getElementsByTagName( "select" )[0];
         selEleSibling = this.parentNode.previousSibling;
         for (i = 0; i < selEleParent.length; i++) {
            if (selEleParent.options[i].innerHTML == this.innerHTML) {
              selEleParent.selectedIndex = i;
              selEleSibling.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("sameSelected");
              for (k = 0; k < y.length; k++) {
                  y[k].removeAttribute("class");
              }
              this.setAttribute("class", "sameSelected");
              break;
            }
         }
         selEleSibling.click();
      });
      divEleSelected.appendChild(c);
  });
  customSelectEle.appendChild(divEleSelected);
  divEle.addEventListener("click", function(e) {
      e.stopPropagation();
      closeSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
  });
  function closeSelect(elmnt) {
      var customSelectEle,
      y,
      i,
      arrNo = [];
      customSelectEle = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      for (i = 0; i < y.length; i++) {
         if (elmnt == y[i]) {
            arrNo.push(i);
         }
         else {
            y[i].classList.remove("select-arrow-active");
         }
      }
      for (i = 0; i < customSelectEle.length; i++) {
         if (arrNo.indexOf(i)) {
            customSelectEle[i].classList.add("select-hide");
         }
      }
  }
  document.addEventListener("click", closeSelect);

  });
});

 jQuery(document).ready(function(){
     
    jQuery('.add').click(function () {    
      var th = $(this).closest('.product_add').find('.quantity');     
      th.val(+th.val() + 1);
      $(this).parent().closest('.overlay_inner').find('.add_to_cart_button').attr('data-quantity',th.val());
    });

    jQuery('.sub').click(function () {
      var th = $(this).closest('.product_add').find('.quantity');     
          if (th.val() > 1){th.val(+th.val() - 1);
          $(this).parent().closest('.overlay_inner').find('.add_to_cart_button').attr('data-quantity',th.val());
        }
    });

    jQuery(document).on('click','.custom_new_button',function(){
    jQuery('.overlay').removeClass('book_overlay');
    jQuery('.card').removeClass('pos_rel');
     jQuery(this).closest('.cards_item').find('.overlay').addClass('book_overlay');
     jQuery(this).closest('.cards_item').find('.card').addClass('pos_rel');
    });
  
    jQuery(document).on('click','.cross_overlay',function(){
    jQuery('.overlay').removeClass('book_overlay');
    jQuery('.card').removeClass('pos_rel');
    
    });


    jQuery(document).on('click','.cart_totals button[name="apply_coupon"]',function(){
      var couponCode = jQuery('.cart_totals input[name="coupon_code"]').val();
      jQuery('.woocommerce-cart-form .coupon input[name="coupon_code"]').val(couponCode);
      jQuery('.woocommerce-cart-form .wp-element-button').trigger('click');
  });

    jQuery(document).on('click','.minus',function(){
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
      });
      jQuery(document).on('click','.plus',function(){
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
      });

});


        
