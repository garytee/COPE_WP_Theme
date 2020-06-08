'use strict';

/**
 * IIFE
 *
 * 1. Create the module execution controller (MEC);
 * 2. Create the application controller for SmoothState and Mapping;
 * 3. Attach our app's initializer and the MEC's executor to jQuery's Ready handler (executes once);
 * 4. Replace jQuery's Ready handler with the MEC's registrar;
 * 5. Attach a module to the MEC (executes on jQuery's onReady event and all SmoothState onAfter events);
 */
var app = {};

;(function($) {
    var $doc = $(document);

    /** [1] */
    $.readyFn = {
        list: [],
        register: function(fn) {
            console.log('Module Registered');

            $.readyFn.list.push(fn);
        },
        execute: function() {
            console.log('Modules Executing');

            for (var i = 0; i < $.readyFn.list.length; i++) {
                try {
                    $.readyFn.list[i].apply(document, [$]);
                } catch (e) {
                    throw e;
                }
            };
        }
    };

    /** [2] */
    app = {
        initSmoothState: function () {
            console.log('Module Executed: Smooth State');

            var $page = $('#page'),
                options = {
                    debug: true,
                    prefetch: true,
                    // cacheLength: 2,
                    anchors: 'a',
                    forms: false, 
                    // blacklist: 'input[type="submit"]',
                    // blacklist: '.wp-link',
                    // // blacklist: '.button',
                    // blacklist: '.woocommerce-LoopProduct-link',
                    // blacklist: '.woocommerce-LoopProduct-link',
                    // blacklist: '[href*=".jpg"]',
                    blacklist: ".no-smoothstate, .post-edit-link,  a[href*='.jpg'], a[href*='.png'], a[href*='.jpeg'], a[href*='.pdf']",
                    onStart: {
                        duration: 50,
                        render: function($container) {
                            // Add your CSS animation reversing class
                            $container.addClass('slide-out');
                            // Restart your animation
                            app.smoothState.restartCSSAnimations();
                            $(".edit-link").hide();
                            $('#footer').removeClass('slideInUp');
                            $('#footer').addClass('slideOutDown');
                            // $('.gform_wrapper').addClass('animated fadeOutDown');
                        }
                    },
                    onReady: {
                        duration: 0,
                        render: function($container, $newContent) {
                            // Remove your CSS animation reversing class
                            $container.removeClass('slide-out');
                            // Inject the new content
                            $container.html($newContent);
                            // $('.gform_wrapper').addClass('animated fadeInUp');
                            $('.col').addClass('animated fadeIn');
                            // Inject the new content
                            $container.html($newContent);
                            $('html, body').animate({ scrollTop: 0 }, 0);
                        }
                    },
                    onAfter: 
                    function($container, $newContent) {
                        $.readyFn.execute();
                        // $('#primary').addClass('animated fadeIn');
                    // $(".ajax-load-more-wrap").ajaxloadmore(); // Trigger ajax load more after load
                    }
                };

            this.smoothState = $page.smoothState(options).data('smoothState');
        },
        initStoreLocator: function () {
          console.log('Module Executed: Store Locator');
        },
        initSlick: function () {
          console.log('Module Executed: Slick');
          var el, set, timeRemain, sliderContinue;
          // App
          var Application = {
            settings: {
              sliderAutoplaySpeed: 6000,
              sliderSpeed: 250
            },
            elements: {
              slider: $('#slick'),
              slickAllThumbs: $('.slick-dots button'),
              slickActiveThumb: $('.slick-dots .slick-active button'),
            },
            init: function() {
              set = this.settings;
              el = this.elements;
              this.slider();
            },
            /**
            * Slider
            */
            slider: function() {
              el.slider.on('init', function() {
                $(this).find('.slick-dots button').text('');
                // Application.dotsAnimation();
              });
              if ($('[data-background]').length > 0) {
                $('[data-background]').each(function() {
                  var $background, $backgroundmobile, $this;
                  $this = $(this);
                  $background = $(this).attr('data-background');
                  $backgroundmobile = $(this).attr('data-background-mobile');
                  if ($this.attr('data-background').substr(0, 1) === '#') {
                    return $this.css('background-color', $background);
                  } else if ($this.attr('data-background-mobile') && device.mobile()) {
                    return $this.css('background-image', 'url(' + $backgroundmobile + ')');
                  } else {
                    return $this.css('background-image', 'url(' + $background + ')');
                  }
                });
              }
              el.slider.slick({
                arrows: true,
                autoplay: true,
                infinite: true,
                autoplaySpeed: set.sliderAutoplaySpeed,
                fade: false,
                speed: set.sliderSpeed,
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow:"<div class='prevArrow'><i class='fa fa-angle-left animated fadeInLeft'></i></div>",
                nextArrow:"<div class='nextArrow'><i class='fa fa-angle-right animated fadeInRight'></i></div>",
              });
            },
          };
          //Init
          Application.init();
        },


        initSlick3: function () {
          console.log('Module Executed: Slick3');
          var el, set, timeRemain, sliderContinue;
          // App
          var Application = {
            settings: {
              sliderAutoplaySpeed: 6000,
              sliderSpeed: 250
          },
          elements: {
              slider: $('.testimonials'),
              slickAllThumbs: $('.slick-dots button'),
              slickActiveThumb: $('.slick-dots .slick-active button'),
          },
          init: function() {
              set = this.settings;
              el = this.elements;
              this.slider();
          },
            /**
            * Slider
            */
            slider: function() {
            //   el.slider.on('init', function() {
            //     $(this).find('.slick-dots button').text('');
            //     // Application.dotsAnimation();
            // });
            //   if ($('[data-background]').length > 0) {
            //     $('[data-background]').each(function() {
            //       var $background, $backgroundmobile, $this;
            //       $this = $(this);
            //       $background = $(this).attr('data-background');
            //       $backgroundmobile = $(this).attr('data-background-mobile');
            //       if ($this.attr('data-background').substr(0, 1) === '#') {
            //         return $this.css('background-color', $background);
            //     } else if ($this.attr('data-background-mobile') && device.mobile()) {
            //         return $this.css('background-image', 'url(' + $backgroundmobile + ')');
            //     } else {
            //         return $this.css('background-image', 'url(' + $background + ')');
            //     }
            // });
            // }
            el.slider.slick({
  // dots: true,
  lazy: true,
    lazyLoad: 'ondemand',
    autoplay: true,
    autoplaySpeed: 10000,
  centerMode: true,
  slidesToShow: 3,
  centerPadding: '0',
  prevArrow: "<div class='previous prevArrow'><i class='fal fa-angle-double-left'></i></div>",
  nextArrow: "<div class='next nextArrow'><i class='fal fa-angle-double-right'></i></i></div>",

                    responsive: [
                    { breakpoint: 1400, settings: {
                        slidesToShow: 1,
                        // slidesToScroll: 1
                    }},
                    { breakpoint: 480, settings: {
                        slidesToShow: 1,
                        // slidesToScroll: 1,
                        // arrows: false
                    }},
                    ]

});
        },
    };
          //Init
          Application.init();
      },


        loadGoogleMaps: function () {
          console.log('Module Loaded: Store Locator');
          var js, lg, fjs, id = 'bh-sl-map-container';
          if (document.getElementById(id)) {
            return;
          }
          lg     = document.documentElement.getAttribute('lang');
          fjs    = document.getElementsByTagName('script')[0];
          js     = document.createElement('script')
          js.id  = id;
          // js.src = 'https://code.jquery.com/jquery-3.2.1.min.js';
          fjs.parentNode.insertBefore(js, fjs);
        },


        storelocator: function () {
            console.log('Module Loaded: Store Locator');
            var markerimg = scriptjs.markerimg;
            console.log(markerimg);
            $('#bh-sl-map-container').storeLocator({
              'querystringParams': true,
              'fullMapStart': true,
              'slideMap' : false,
              // 'defaultLoc': true,
              'autoGeocode': false,
              'markerImg': markerimg,
              'defaultLat': '38.345709',
              'defaultLng' : '-82.937924',
              'distanceAlert' : 500000,
              'markerDim' : { height: 94, width: 63 },
              'storeLimit' : 30,
              // 'mapSettings' : { zoom : 5, mapTypeId: google.maps.MapTypeId.TERRAIN },
              'mapSettings' : { 
              // disableDoubleClickZoom: true,
              // scrollwheel           : false,
              // navigationControl     : false,
              // draggable : false,
              gestureHandling: "none",
              fullscreenControl: false,
              zoom : 5, 
              mapTypeId: google.maps.MapTypeId.ROADMAP, 
              styles : [
              {
              "featureType": "landscape",
              "stylers": [
              { "saturation": -74 },
              { "lightness": -1 },
              { "gamma": 1.18 },
              { "color": "#f5faf3" }
              ]
            },{
                "featureType": "water",
              "stylers": [
              { "saturation": -49 },
              { "color": "#c6e0e0" },
              { "lightness": -1 },
              { "gamma": 1 }
              ]
            },{
                "featureType": "road",
              "stylers": [
              { "color": "#e5e3df" },
              { "lightness": -1 },
              // { "saturation": -78 }
              ]
            },{
                "featureType": "road.highway",
              "stylers": [
              { "color": "#f7e39e" },
              { "lightness": 4 },
              // { "saturation": -78 }
              ]
            },{
                "featureType": "poi",
              "stylers": [
              { "color": "#e5e3df" },
              // { "saturation": -38 },
              // { "lightness": 67 }
              ]
            }
              ] },
            });
            },
            singlestorelocator: function () {
              console.log('Module Loaded: Single Locator');
              var latitude = scriptjs.latitude;
              var longitude = scriptjs.longitude;
              var markerimg = scriptjs.markerimg;
              console.log(latitude);
              console.log(longitude);
              console.log(markerimg);
              $('#bh-sl-single-map-container').storeLocator({
                'slideMap' : false,
                'defaultLoc': true,
                'autoGeocode': false,
                // 'storeLimit' : 1,
                // 'defaultLat': '38.345709',
                // 'defaultLng' : '-82.937924',
                'defaultLat': latitude,
                'defaultLng' : longitude,
                'distanceAlert' : 500000,
                'markerDim' : { height: 94, width: 63 },
                'storeLimit' : 30,
                'markerImg' : markerimg,
                // 'mapSettings' : { zoom : 5, mapTypeId: google.maps.MapTypeId.TERRAIN },
                'mapSettings' : { 
                // disableDoubleClickZoom: true,
                // scrollwheel           : false,
                // navigationControl     : false,
                // draggable : false,
                gestureHandling: "none",
                fullscreenControl: false,
                zoom : 5, 
                mapTypeId: google.maps.MapTypeId.ROADMAP, 
                styles : [
                {
                "featureType": "landscape",
                "stylers": [
                { "saturation": -74 },
                { "lightness": -1 },
                { "gamma": 1.18 },
                { "color": "#f5faf3" }
                ]
                },{
                "featureType": "water",
                "stylers": [
                { "saturation": -49 },
                { "color": "#c6e0e0" },
                { "lightness": -1 },
                { "gamma": 1 }
                ]
                },{
                "featureType": "road",
                "stylers": [
                { "color": "#e5e3df" },
                { "lightness": -1 },
                // { "saturation": -78 }
                ]
                },{
                "featureType": "road.highway",
                "stylers": [
                { "color": "#f7e39e" },
                { "lightness": 4 },
                // { "saturation": -78 }
                ]
                },{
                "featureType": "poi",
                "stylers": [
                { "color": "#e5e3df" },
                // { "saturation": -38 },
                // { "lightness": 67 }
                ]
                }
                ] },
                // 'markerImg': '<?php the_field('map_marker', 'option');  ?>',
                // 'markerImg': 'https://staging.chorusy.com/cope/wp-content/uploads/2017/09/mapmarker.png',
                });
            },
          };

    /** [3] */
    $doc.ready(function() {
        console.log('Initial Document Ready');

        app.initSmoothState();

        $.readyFn.execute();
    });

    /** [4] */
    $.fn.ready = $.readyFn.register;

})(jQuery);

/** [5] */
   jQuery(document).ready(function($) {
    app.initSlick();
    app.storelocator();
        app.initSlick3();
    // app.singlestorelocator();
});



jQuery(document).ready(function($){
//iterate over the collection
$('.mobilemenu ul.sub-menu').each(function(){
    var $this = $(this);
    //does the current element have children?
    if($this.children().length >0){
     //yes, add the class "arrow"
     $this.parent().addClass('arrow');
     $this.parent().prepend('<span class="caret center"><i class="fa fa-chevron-right"></i></span>');
    }
});


});



jQuery(document).ready(function($) {

$('.fa-chevron-right').on('click', function(){
$(this).toggleClass('transform');
});

$('.fa-chevron-right').on('click',function(){
// let a common class(disable-btn) for each button which should be disabled for on second
$('.fa-chevron-right').prop('disabled',true);
setTimeout(function(){
// enable click after 1 second
$('.fa-chevron-right').prop('disabled',false);
},1000); // 1 second delay
});


});



jQuery(document).ready(function($) {

$(window).scroll(function(e){

if ($(this).scrollTop() > 30) { // choose the value you want.
$('.header_span').addClass( 'white_background' );
} 
else {
$('.header_span').removeClass( 'white_background' );
}

});

});


jQuery(document).ready(function($) {
$('.mobilemenu li > .sub-menu').parent().click(function() {
var submenu = $(this).children('.sub-menu');
if ( $(submenu).is(':hidden') ) {
$(submenu).stop().slideToggle();
} 
else {
$(submenu).slideUp(500);
}
});
});

jQuery(document).ready(function($){
$('.no-smoothstate a').addClass('no-smoothstate');
});

jQuery(document).ready(function($) {
$('#english').show();
$('#myselect1').change(function(){
if($(this).val() == 'English'){ // or this.value == 'volvo'
$('#english').show();
$('#japanese').hide();
$('#portuguese').hide();
$('#chinese').hide();
$('#spanish').hide();
$('#french').hide();
}
if($(this).val() == 'Japanese'){ // or this.value == 'volvo'
$('#japanese').show();
$('#portuguese').hide();
$('#english').hide();
$('#chinese').hide();
$('#spanish').hide();
$('#french').hide();
}

if($(this).val() == 'Chinese'){ // or this.value == 'volvo'
$('#chinese').show();
$('#japanese').hide();
$('#english').hide();
$('#portuguese').hide();
$('#spanish').hide();
$('#french').hide();
}

if($(this).val() == 'Portuguese'){ // or this.value == 'volvo'
$('#portuguese').show();
$('#japanese').hide();
$('#english').hide();
$('#chinese').hide();
$('#spanish').hide();
$('#french').hide();
}


if($(this).val() == 'Spanish'){ // or this.value == 'volvo'
$('#spanish').show();
$('#japanese').hide();
$('#english').hide();
$('#chinese').hide();
$('#portuguese').hide();
$('#french').hide();
}


if($(this).val() == 'French'){ // or this.value == 'volvo'
$('#french').show();
$('#japanese').hide();
$('#english').hide();
$('#chinese').hide();
$('#spanish').hide();
$('#portuguese').hide();
}
})
});

jQuery(document).ready(function($) {
new WOW().init();
});

jQuery(document).ready(function($) {

var docHeight = $(window).height();
var footerHeight = $('#footer').height();
var footerTop = $('#footer').position().top + footerHeight;

if (footerTop < docHeight) {
$('#footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
}
});

jQuery(document).ready(function($) {
$(".expand-show").click(function(){
var target = $(this).parent().children(".expand-hide");
$(target).slideToggle();
});
});

// jQuery(document).ready(function($) {
// var tl = new TimelineLite({delay: 1}),
// firstBg = document.querySelectorAll('.text__first-bg'),
// secBg = document.querySelectorAll('.text__second-bg'),
// word  = document.querySelectorAll('.text__word');

// if($('.text__first').is(':visible')) {

// tl
// .to(firstBg, 0.2, {scaleX:1})
// .to(secBg, 0.2, {scaleX:1})
// .to(word, 0.1, {opacity:1}, "-=0.1")  
// .to(firstBg, 0.2, {scaleX:0})
// .to(secBg, 0.2, {scaleX:0});


// }

// });

jQuery(document).ready(function($) {

$('#gform_3 input[type=submit]').click(function () {
// do something here
});

});

jQuery(document).ready(function($){
//iterate over the collection
$('.gfield_contains_required label').each(function(){
var $this = $(this);
//does the current element have children?
// if($this.children().length >0){
//yes, add the class "arrow"
// $this.parent().addClass('arrow');
$this.parent().addClass('requiredd');
// $this.parent().prepend('<span class="caret center"><i class="fa fa-chevron-right"></i></span>');
// }
});


});

jQuery(document).ready(function($){
//iterate over the collection
$('.gfield').each(function(){
var $this = $(this);

//does the current element have children?
if($this.hasClass('under')){

$('.gfield_label').hide();
//yes, add the class "arrow"
// $this.parent().addClass('arrow');
// $this.next('.ginput_container').addClass('input');
// ('.ginput_container .ginput_container_phone .input').detach();
// $this.parent().prepend('<span class="caret center"><i class="fa fa-chevron-right"></i></span>');
// $this.detach().appendTo('.ginput_container');
}
});


});

jQuery(document).ready(function($){

// get your select element and listen for a change event on it
$('#input_5_1').change(function() {
// set the window's location property to the value of the option the user has selected
window.location = $(this).val();
});


});


jQuery(document).ready(function($){

$(".twitter_avatar img").attr("src", "floatingball.gif");

});

jQuery(document).ready(function($) {
$('.woocommerce a').addClass( 'no-smoothstate' );
$('.woocommerce-MyAccount-navigation-link--payment-methods a').addClass( 'no-smoothstate' );
});

jQuery(document).ready(function($) {
$( ".quantity" ).prepend( "<span class='quantity_label'>Quantity</span>" );
$('#customer_login .u-column2').attr('id', 'fl1');
});


jQuery(document).ready(function($) {
$(".acf-button").each(function (i, e) {
    var $e = $(e);
    if ($e.text().length > 0) {
        $e.addClass("buttoneffect");
    }
});
});



jQuery(document).ready(function($) {

// $("[href*='tel:'], [href*='mailto:']").click(function(e) {

//   e.preventDefault();
//   var href = $(this).attr('href');

//   // tel:
//   if (href.toLowerCase().indexOf("tel:") >= 0) {
//     eventCategory = 'Call';
//     eventLabel = href.replace('tel:', '');

//   }

//   // mailto:
//   if (href.toLowerCase().indexOf("mailto:") >= 0) {
//     eventCategory = 'Email';
//     eventLabel = href.replace('mailto:', '');
//   }

//   ga('send', 'event', eventCategory, 'Click');

//   setTimeout(function() {
//     window.location = href;
//   }, 500);

// });




    // jQuery('a[href$=".pdf"]').click(function(){
    //   var pdf=jQuery(this).attr('href');
    //   _gaq.push(['_trackEvent', 'pdf', 'download', pdf]);
    // });
    // jQuery('a[href^="mailto:"]').click(function(){
    //   var mailto=jQuery(this).attr('href');
    //   _gaq.push(['_trackEvent', 'contact', 'mailto', mailto]);
    // });
    // jQuery('a[href^="tel:"]').click(function(){
    //   var ctc=jQuery(this).attr('href');
    //   _gaq.push(['_trackEvent', 'contact', 'click-to-call', ctc]);
    // });

});




  jQuery(function() {
    // jQuery('a[href$=".pdf"]').click(function(){
    //   var pdf=jQuery(this).attr('href');
    //   gtag('event', 'download', { event_category: 'download', event_action: 'pdf', event_label: pdf});
    // });
    // jQuery('a[href^="mailto:"]').click(function(){
    //   var mailto=jQuery(this).attr('href');
    //   gtag('event', 'contact', { event_category: 'contact', event_action: 'mailto', event_label: mailto});
    // });
    jQuery('a[href^="tel:"]').click(function(){
      var ctc=jQuery(this).attr('href');
      gtag('event', 'contact', { event_category: 'contact', event_action: 'click-to-call', event_label: ctc});
    });
  });
