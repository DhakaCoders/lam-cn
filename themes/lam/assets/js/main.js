(function($) {

/*Google Map Style*/
var CustomMapStyles  = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"simplified"},{"gamma":"0.00"},{"lightness":"1"},{"color":"#ffffff"},{"saturation":"-3"},{"weight":"1.92"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#b78454"},{"lightness":"-50"},{"saturation":"-40"},{"weight":"1"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45},{"visibility":"simplified"},{"color":"#342b2b"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"off"},{"color":"#342b2b"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#342b2b"},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"simplified"},{"color":"#342b2b"}]},{"featureType":"road.highway.controlled_access","elementType":"all","stylers":[{"visibility":"off"},{"color":"#342b2b"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"all","stylers":[{"color":"#342b2b"},{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit.station.airport","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"transit.station.bus","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit.station.rail","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#dde6e8"},{"visibility":"off"}]}]



var windowWidth = $(window).width();
$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});
	
  
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.mHc1').length){
  $('.mHc1').matchHeight();
};
if($('.mHc2').length){
  $('.mHc2').matchHeight();
};
if($('.mHc3').length){
  $('.mHc3').matchHeight();
};
if($('.mHc4').length){
  $('.mHc4').matchHeight();
};
if($('.mHc5').length){
  $('.mHc5').matchHeight();
};


//$('[data-toggle="tooltip"]').tooltip();

//banner animation
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $('.page-banner-bg').css({
    '-webkit-transform' : 'scale(' + (1 + scroll/2000) + ')',
    '-moz-transform'    : 'scale(' + (1 + scroll/2000) + ')',
    '-ms-transform'     : 'scale(' + (1 + scroll/2000) + ')',
    '-o-transform'      : 'scale(' + (1 + scroll/2000) + ')',
    'transform'         : 'scale(' + (1 + scroll/2000) + ')'
  });
});


if($('.fancybox').length){
$('.fancybox').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
  });

}


/**
Responsive on 767px
*/

// if (windowWidth <= 767) {
  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
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
}




if( $('#mapID').length ){
var latitude = $('#mapID').data('latitude');
var longitude = $('#mapID').data('longitude');
var uri = $('#mapID').data('uri');
var myCenter= new google.maps.LatLng(latitude,  longitude);
function initialize(){
    var mapProp = {
      center:myCenter,
      mapTypeControl:false,
      scrollwheel: false,
      zoomControl: false,
      disableDefaultUI: false,
      zoom:12,
      streetViewControl: false,
      rotateControl: false,
      mapTypeId:google.maps.MapTypeId.ROADMAP,
      styles: CustomMapStyles
      };

    var map= new google.maps.Map(document.getElementById('mapID'),mapProp);
    var marker= new google.maps.Marker({
      position:myCenter,
        icon:uri+'/assets/images/map-marker.png'
      });
    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);

}

    new WOW().init();






    $('.scrollto').on('click', function(e){
      e.preventDefault();
      var togo = $(this).data('to');
      goToByScroll(togo, 0);
    });

    function goToByScroll(id, offset){
      if(id){
      // Remove "link" from the ID
      id = id.replace("link", "");
      // Scroll
      $('html,body').animate(
        {scrollTop: $(id).offset().top - offset},
        500);
    }
  }



/*  function leftWidth() {
    var container = $(".container").width();
    var leftSideWidth = (windowWidth - container ) / 2;
    $(".map-side-add").css({left : leftSideWidth});
  };
  leftWidth();
  $(window).resize(function() {
    leftWidth();
  });*/
  if (windowWidth <= 1199) {
    $('.hdr-humberger').on('click', function(e){
      $('.xs-main-nav-cntlr').addClass('opacity-1');
      $('.bdoverlay').addClass('active');
      $('body').addClass('active-scroll-off');
      $(this).addClass('active-collapse');
    });
    $('.closebtn').on('click', function(e){
      $('.bdoverlay').removeClass('active');
      $('.xs-main-nav-cntlr').removeClass('opacity-1');
      $('body').removeClass('active-scroll-off');
      $('.line-icon').removeClass('active-collapse');
    });
    
    $('li.menu-item-has-children > a').on('click', function(e){
      e.preventDefault();
    //$('li.menu-item-has-children .sub-menu').slideUp(300);
    $(this).toggleClass('sub-menu-active');
    $(this).toggleClass('sub-menu-plus');
    //$(this).next().slideDown(300);
    $(this).next().slideToggle(300);
    $(this).css('color', '#B78454');

  });
  }




    /*End of Noyon*/










     /*End of Shariful*/




var container = $(".container").width();
var leftSideWidth = (windowWidth - container ) / 2;
var gmapside = $('.map-side-add').outerWidth();
var gmapsideleft = leftSideWidth + gmapside;
$(".lm-testi-angle-sec-des-cntlr blockquote, .map-side-add").css({left : leftSideWidth});
$('.gmap-frame').css('margin-left', gmapsideleft);
function leftWidth() {
  var container = $(".container").width();
  var leftSideWidth = (windowWidth - container ) / 2;
  $(".lm-testi-angle-sec-des-cntlr blockquote, .map-side-add").css({left : leftSideWidth});
};
leftWidth();
$(window).resize(function() {
    leftWidth();
});

      /*End of Rannojit*/

})(jQuery);