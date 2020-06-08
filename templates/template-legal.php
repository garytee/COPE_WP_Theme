<?php 
/*
Template Name: Legal
*/
get_header('legal'); ?>
<!-- <section id="homepage_content" role="main"> -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="page-title">
<?php
echo the_title();
?>
</div>

<div class="fullwidth-content">

<?php echo the_content();?>

  </div>
<?php endwhile; endif; ?>





<style type="text/css">


</style>


<script type="text/javascript">
// jQuery(document).ready(function($) {
//   $('.homeslides').slick({
// adaptiveHeight: true,
//   infinite: true,
//   autoplay: true,
//       fade: true,
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   speed: 1000,
//   prevArrow:"<div class='prevArrow'><i class='fa fa-angle-left animated fadeInLeft'></i></div>",
//   nextArrow:"<div class='nextArrow'><i class='fa fa-angle-right animated fadeInRight'></i></div>",
//   });  // Code that uses jQuery's $ can follow here.
// });
</script>


<script type="text/javascript">
 //  jQuery(document).ready(function($) {

 //   function heroSlider() {

 //   function slideAnimation(elem) {
 //     var animEndEv = 'webkitAnimationEnd animationend';
 //     elem.each(function() {
 //       var $this = $(this),
 //         $animationType = $this.data('animation');

 //       $this.css('opacity', '1').addClass($animationType).one(animEndEv, function() {
 //         $this.removeClass($animationType);
 //       });
 //     });
 //   }
 //   var $heroSlider = $('.hero-slider'),
 //     $sliderContent = $('.hero-slider-content'),
 //     $firstSlideAnimation = $heroSlider.find('article:first').find("[data-animation ^= 'animated']");

 //   $heroSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
 //     var slide = $(slick.$slides.get(currentSlide));
 //     var $caption = slide.find("[data-animation ^= 'animated']").css('opacity', '0');
 //   });
 //   $heroSlider.on('afterChange', function(event, slick, currentSlide, nextSlide) {
 //     var slide = $(slick.$slides.get(currentSlide));
 //     var $caption = slide.find("[data-animation ^= 'animated']");
 //     slideAnimation($caption);
 //   });

 //   $('.hero-slider').slick({
 //     autoplay: true,
 //     autoplaySpeed: 7000,
 //     arrows: true,
 //     dots: false,
 //     fade: true,
 //     // prevArrow: $('.prev'),
 //     // nextArrow: $('.next')
 //       prevArrow:"<div class='prevArrow'><i class='fa fa-angle-left animated fadeInLeft'></i></div>",
 //  nextArrow:"<div class='nextArrow'><i class='fa fa-angle-right animated fadeInRight'></i></div>",
 //   });
 //   slideAnimation($firstSlideAnimation);
 // }

 // heroSlider();
 // });

</script>






<!-- <div class="instatitle">
Follow Us on Instagram <strong>@12oaksBakery</strong> and Facebook <strong>/12oaksbakery</strong> for more!
</div>
  <div id="instafeed" class="wow fadeInUp instafeed" data-wow-offset="50" data-wow-duration="0.5s" data-wow-delay="0.5s"></div>
 -->

<style type="text/css">

</style>



<script type="text/javascript">
// jQuery(document).ready(function($) {
// var feed = new Instafeed({
//     resolution: 'low_resolution',
//     get: 'user',
//     userId: 15207770,
//     accessToken: '15207770.d226df6.59f73e3503284b83b0eb0c43d9769b21',
//     // template: '<div><a href="{{link}}" target="_blank"><img src="{{image}}" /></a></div>',
//     target: 'instafeed',
//     sortBy: 'most-liked',
//     limit: 8,
// //     after: function() {

// //         $('#instafeed').slick({
// //         // speed: 0,
// //         // autoplay: false,
// //         // autoplaySpeed: 0,
// //         // cssEase: 'linear',
// //         // slidesToShow: 5,
// //         //   centerMode: false,
// //   infinite: false,

// //         // slidesToScroll: 1,
// //         // variableWidth: true,
// //         // arrows: false,
// //         });

// //     }

// after: function () {
//     var images = $("#instafeed").find('a');
//     $.each(images, function(index, image) {
//       var delay = (index * 75) + 'ms';
//       $(image).css('-webkit-animation-delay', delay);
//       $(image).css('-moz-animation-delay', delay);
//       $(image).css('-ms-animation-delay', delay);
//       $(image).css('-o-animation-delay', delay);
//       $(image).css('animation-delay', delay);
//       $(image).addClass('animated flipInX');
//     });
//   },
//   // template: '<a href="{{link}}" target="_blank"><img src="{{image}}" /><div class="likes">&hearts; {{likes}}</div></a>'
// });
// feed.run();
// });
</script>


<script>
              // new WOW().init();
              </script>






  <?php if ( get_edit_post_link() ) : ?>
    <footer class="entry-footer">
      <?php
        edit_post_link(
          sprintf(
            wp_kses(
              /* translators: %s: Name of current post. Only visible to screen readers */
              __( 'Edit <span class="screen-reader-text">%s</span>', 'cope' ),
              array(
                'span' => array(
                  'class' => array(),
                ),
              )
            ),
            get_the_title()
          ),
          '<span class="edit-link animated fadeInUp">',
          '</span>'
        );
      ?>
    </footer><!-- .entry-footer -->
  <?php endif; ?>






              <!-- <div id="map" class="wow fadeIn" data-wow-offset="500"></div> -->


<!-- <p class="text"> 
<span class="wow bounceInUp text__first"><span class="text__word">Hello </span><span class="text__first-bg"></span></span><br/>
<span class="text__second"><span class="text__word">World</span><span class="text__second-bg"></span></span>
</p>
<button class="restart">repeat</button>
 -->




<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false" type="text/javascript"></script> -->

<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXulXd0GLV7y0soyn1QNAuN_cWEkt-Py8&callback=makeGoogleMaps" type="text/javascript"></script> -->

<?php get_footer(); ?>