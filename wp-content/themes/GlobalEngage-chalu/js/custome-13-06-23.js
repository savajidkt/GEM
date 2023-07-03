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
    });
});

jQuery(function ($) {
    jQuery(document).ready(function () {
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
        jQuery('.review_right_side').slick({
           
            infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
            arrows: true,
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
              breakpoint: 1600,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 1450,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                autoplaySpeed: 2000,
            autoplay: true,
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
       $('.gallery-slider').slick({
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

    });
});



jQuery(function ($) {
    jQuery(document).ready(function () {
       $('.gallery-slider1').slick({
  arrows: false,
  dots: true,
  infinite: true,
  speed: 500,
  slidesToShow: 4,
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

    });
});



jQuery(function ($) {
    jQuery(document).ready(function () {
       $('.gallery-slider2').slick({
  arrows: false,
  dots: true,
  infinite: true,
  speed: 500,
  slidesToShow: 4,
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

    });
});

// 
function showDiv_sign() {
   document.getElementById('login_popup').style.display = "block";
}
function closeDiv_sign() {
   document.getElementById('login_popup').style.display = "none";
}


window.onload = function() {
  var popupForm = document.getElementById('popupForm');
  var closeButton = document.getElementById('closeButton');

  popupForm.style.display = 'block';

  closeButton.onclick = function() {
    popupForm.style.display = 'none';
  };
};