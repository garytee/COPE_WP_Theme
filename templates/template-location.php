<?php 
/*
Template Name: Location
*/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>




<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <!-- <header class="entry-header"> -->
    <?php
    if ( is_singular() ) :
      // the_title( '<h1 class="entry-title">', '</h1>' ); ?>



<script type="text/javascript">
// var latitude = scriptjs.latitude;
//   var longitude = scriptjs.longitude;

//   console.log(latitude);
//   console.log(longitude);


//                     setTimeout(function(){

// $("#slick .nextArrow").css("pointer-events", "inherit");

//     }, 1000);

// Set interval to avoid "unable to find address error"
// setInterval(function() {
jQuery('#bh-sl-single-map-container').storeLocator({
'slideMap' : false,
'defaultLoc': true,
'autoGeocode': false,
'storeLimit' : 1,
// 'defaultLat': '40.127310',
'defaultLat': '<?php the_field('latitude'); ?>',
// 'defaultLng' : '-83.129272',
'defaultLng' : '<?php the_field('longitude'); ?>',
// 'defaultLat': '<?php the_field('latitude');?>',
// 'defaultLng' : '<?php the_field('longitude');?>',
// 'distanceAlert' : 500000,
// 'distanceAlert': -1,
'markerDim' : { height: 94, width: 63 },
// 'mapSettings' : { zoom : 5, mapTypeId: google.maps.MapTypeId.TERRAIN },
'mapSettings' : { zoom : 6, mapTypeId: google.maps.MapTypeId.ROADMAP, styles : [
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
'markerImg': '<?php the_field('map_marker', 'option');  ?>',
// 'markerImg': 'https://staging.chorusy.com/cope/wp-content/uploads/2017/09/mapmarker.png',
});

// }, 250);
</script>


<script type="text/javascript">

//   $ = jQuery;
  
//   $(function(){

//     $('#bh-sl-single-map-container').hide();

//     setTimeout(function(){
//         $('#bh-sl-single-map-container').fadeIn('slow');
//     },5000);

// });


</script>



<style type="text/css">
  .bh-sl-container .bh-sl-map {
    float: left;
    /* height: 530px; */
    width: 100%;
    height: 250px;
}
</style>


<script type="text/javascript">
//   jQuery(document).ready(function($) {
//     $(window).resize(function() {
//         google.maps.event.trigger(map, 'resize');
//     });
//     google.maps.event.trigger(map, 'resize');
// });


// jQuery(document).ready(function($) {
// if ($(window).width() < 1920) {
//    // alert('Less than 960');

//    $('#bh-sl-single-map-container').storeLocator({
//                     'slideMap' : false,
//                     'defaultLoc': true,
//                     'autoGeocode': false,
//                     // 'defaultLat': '40.127310',
//                     // 'defaultLng' : '-83.129272',
//                     'defaultLat': '<?php the_field('latitude');?>',
//                     'defaultLng' : '<?php the_field('longitude');?>',
//                     'distanceAlert' : 500000,
//                     'markerDim' : { height: 94, width: 63 },
//                     // 'mapSettings' : { zoom : 5, mapTypeId: google.maps.MapTypeId.TERRAIN },
//                     'mapSettings' : { zoom : 7, mapTypeId: google.maps.MapTypeId.ROADMAP, styles : [
//             {
//                 "featureType": "landscape",
//                 "stylers": [
//                   { "saturation": -74 },
//                   { "lightness": -1 },
//                   { "gamma": 1.18 },
//                   { "color": "#f5faf3" }
//                 ]
//             },{
//                 "featureType": "water",
//                 "stylers": [
//                   { "saturation": -49 },
//                   { "color": "#c6e0e0" },
//                   { "lightness": -1 },
//                   { "gamma": 1 }
//                 ]
//             },{
//                 "featureType": "road",
//                 "stylers": [
//                   { "color": "#e5e3df" },
//                   { "lightness": -1 },
//                   // { "saturation": -78 }
//                 ]
//             },{
//                 "featureType": "road.highway",
//                 "stylers": [
//                   { "color": "#f7e39e" },
//                   { "lightness": 4 },
//                   // { "saturation": -78 }
//                 ]
//             },{
//                 "featureType": "poi",
//                 "stylers": [
//                   { "color": "#e5e3df" },
//                   // { "saturation": -38 },
//                   // { "lightness": 67 }
//                 ]
//               }
//             ] },
//                     'markerImg': '<?php the_field('map_marker', 'option');  ?>',
//                     // 'markerImg': 'https://staging.chorusy.com/cope/wp-content/uploads/2017/09/mapmarker.png',
//                   });
// }
// else {
//    $('#bh-sl-single-map-container').storeLocator({
//                     'slideMap' : false,
//                     'defaultLoc': true,
//                     'autoGeocode': false,
//                     // 'defaultLat': '40.127310',
//                     // 'defaultLng' : '-83.129272',
//                     'defaultLat': '<?php the_field('latitude');?>',
//                     'defaultLng' : '<?php the_field('longitude');?>',
//                     'distanceAlert' : 500000,
//                     'markerDim' : { height: 94, width: 63 },
//                     // 'mapSettings' : { zoom : 5, mapTypeId: google.maps.MapTypeId.TERRAIN },
//                     'mapSettings' : { zoom : 6, mapTypeId: google.maps.MapTypeId.ROADMAP, styles : [
//             {
//                 "featureType": "landscape",
//                 "stylers": [
//                   { "saturation": -74 },
//                   { "lightness": -1 },
//                   { "gamma": 1.18 },
//                   { "color": "#f5faf3" }
//                 ]
//             },{
//                 "featureType": "water",
//                 "stylers": [
//                   { "saturation": -49 },
//                   { "color": "#c6e0e0" },
//                   { "lightness": -1 },
//                   { "gamma": 1 }
//                 ]
//             },{
//                 "featureType": "road",
//                 "stylers": [
//                   { "color": "#e5e3df" },
//                   { "lightness": -1 },
//                   // { "saturation": -78 }
//                 ]
//             },{
//                 "featureType": "road.highway",
//                 "stylers": [
//                   { "color": "#f7e39e" },
//                   { "lightness": 4 },
//                   // { "saturation": -78 }
//                 ]
//             },{
//                 "featureType": "poi",
//                 "stylers": [
//                   { "color": "#e5e3df" },
//                   // { "saturation": -38 },
//                   // { "lightness": 67 }
//                 ]
//               }
//             ] },
//                     'markerImg': '<?php the_field('map_marker', 'option');  ?>',
//                     // 'markerImg': 'https://staging.chorusy.com/cope/wp-content/uploads/2017/09/mapmarker.png',
//                   });
// }
// });
</script>

<?php





if (have_rows('content')) {
  while (have_rows('content')) {
    the_row();
    echo '<div class="right_sidebar_columns">';
    if (have_rows('left_column')) {
        echo '<div class="col">';
      while (have_rows('left_column')) {
        the_row(); // forgot this line
        $layout = get_row_layout('wysiwyg');
        $wysiwyg = get_sub_field('left_wysiwyg');
        $table = get_sub_field( 'left_table' );

$counter = get_sub_field('columns');
// $counter = get_field('repeater'); if not in Flexible Content
if ( have_rows('columns') ) :
    while ( have_rows('columns') ) : the_row();
        $count = count( $counter );
        // echo $count;
        // HTML goes here


        echo '<div class="column ';
    if ($count == 1) {
                  $class  = 'one';
                  echo $class .'">';
                } 
    if ($count == 2) {
                  $class  = 'two';
                  echo $class .'">';
                }
    if ($count == 3) {
                  $class  = 'three';
                  echo $class .'">';
                }
    if ($count == 4) {
                  $class  = 'four';
                  echo $class .'">';
    }
    if ($count == 5) {
                  $class  = 'five';
                  echo $class .'">';
    }
    if ($count == 6) {
                  $class  = 'six';
                  echo $class .'">';
    }
    if ($count == 7) {
                  $class  = 'seven';
                  echo $class .'">';
    }
    if ($count == 8) {
                  $class  = 'eight';
                  echo $class .'">';
    }
    if ($count == 9) {
                  $class  = 'nine';
                  echo $class .'">';
    }
    if ($count == 10) {
                  $class  = 'ten';
                  echo $class .'">';
    }
    if ($count == 11) {
                  $class  = 'eleven';
                  echo $class .'">';
    }
    if ($count == 12) {
                  $class  = 'twelve';
                  echo $class .'">';
    }

    else {
                  // $image = get_sub_field('center_image');
                  // $product_name = get_sub_field('column');
                  // $link = get_sub_field('link');
                  // echo '<li><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /><br>' . $product_name .'</li></div>';
    }


                      $product_name = get_sub_field('column');
                  echo $product_name;

    echo '</div>';
    endwhile;
endif;

if ( $table ) {

    echo '<table border="0">';

        if ( $table['header'] ) {

            echo '<thead>';

                echo '<tr>';

                    foreach ( $table['header'] as $th ) {

                        echo '<th>';
                            echo $th['c'];
                        echo '</th>';
                    }

                echo '</tr>';

            echo '</thead>';
        }

        echo '<tbody>';

            foreach ( $table['body'] as $tr ) {

                echo '<tr>';

                    foreach ( $tr as $td ) {

                        echo '<td>';
                            echo $td['c'];
                        echo '</td>';
                    }

                echo '</tr>';
            }

        echo '</tbody>';

    echo '</table>';
}

        echo $wysiwyg;


// $attachment_id = get_sub_field('upload_infographic');
//  $url = wp_get_attachment_url( $attachment_id );
//  // $title = get_the_title( $attachment_id );
// $infographic_language = get_sub_field('infographic_language');

// $Download = 'Download';
// $Print = 'Print';





        // and the rest of your flex field output
      } // end second while have rows

      // check if the repeater field has rows of data
if( have_rows('site_director') ):

  // loop through the rows of data
    while ( have_rows('site_director') ) : the_row();

$image = get_sub_field('image');
$name = get_sub_field('name');
$university = get_sub_field('university');
$bio_excerpt = get_sub_field('bio_exerpt');
$link_to_page = get_sub_field('link_to_page');

        // display a sub field value
        // the_sub_field('image');
?>
<div class="site_director">
  <div class="meet_site_director">
    <h3>Meet the Site Director</h3>
  </div>
  <div class="site_director_wrap">
  <div class="image">
   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
</div>
<?php
echo '<div class="name">'. $name . '</div>';
echo '<div class="university">'. $university . '</div>';
// echo '<div class="bio_excerpt">'. $bio_excerpt . '<span class="link_to_page"><a href='. $link_to_page . '>Read Full Bio</a></span></div>';
// echo '<span class="link_to_page"><a href='. $link_to_page . '>Read Full Bio</a></span>';
?>
<div class="bio_excerpt"><?php echo $bio_excerpt ?>

<?php if( get_sub_field('link_to_page') ): ?><span class="link_to_page"><a href="<?php echo $link_to_page ?>">Read Full Bio</a></span><?php endif; ?>

</div>
<?php

echo '</div></div>';

    endwhile;

else :

    // no rows found

endif;




if( have_rows('patient_forms') ):

  ?>

  <div class="forms">
    <h3>Patient Forms</h3>
    <p><?php echo the_title(); ?> patients, please find a link to your patient forms below.</p>
  <?php

  // loop through the rows of data
    while ( have_rows('patient_forms') ) : the_row();

$image = get_sub_field('image');
// $formlink = get_sub_field('formlink');

$links = get_sub_field('formlink');



        // display a sub field value
        // the_sub_field('image');
?>
<!-- <div class="site_director">
  <div class="meet_site_director"> -->

  <!-- </div> -->
<!--   <div class="site_director_wrap">
  <div class="image">
   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
</div> -->

<a href="<?php echo the_sub_field('formlink'); ?>">
<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
</a>
<!-- <a href='. $links["url"] .'>link</a> -->

<!-- <span class="link_to_page"><a href='. $formlink . '>Read Full Bio</a></span> -->


<!-- <a class="no-smoothstate homepage_button slick animated" href="<?php echo $link ?>">link</a> -->

<?php

// echo '<span class="link_to_page"><a href='. $link . '>Read Full Bio</a></span>';





// echo '<div class="name">'. $image . '</div>';
// echo '<div class="university">'. $link . '</div>';
// echo '<div class="bio_excerpt">'. $bio_excerpt . '<span class="link_to_page"><a href='. $link_to_page . '>Read Full Bio</a></span></div>';
// echo '<span class="link_to_page"><a href='. $link_to_page . '>Read Full Bio</a></span>';

// echo '</div></div>';

    endwhile;

    echo '</div>';

else :

    // no rows found

endif;







if( have_rows('clinical_forms') ):

  ?>

  <div class="forms">
    <h3>Clinician Forms</h3>
    <p><?php echo the_title(); ?> clinicians, please find a link to your clinician forms below.</p>
  <?php

  // loop through the rows of data
    while ( have_rows('clinical_forms') ) : the_row();

$image = get_sub_field('image');
// $formlink = get_sub_field('formlink');

$links = get_sub_field('formlink');



        // display a sub field value
        // the_sub_field('image');
?>
<!-- <div class="site_director">
  <div class="meet_site_director"> -->

  <!-- </div> -->
<!--   <div class="site_director_wrap">
  <div class="image">
   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
</div> -->

<a href="<?php echo the_sub_field('formlink'); ?>">
<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
</a>
<!-- <a href='. $links["url"] .'>link</a> -->

<!-- <span class="link_to_page"><a href='. $formlink . '>Read Full Bio</a></span> -->


<!-- <a class="no-smoothstate homepage_button slick animated" href="<?php echo $link ?>">link</a> -->

<?php

// echo '<span class="link_to_page"><a href='. $link . '>Read Full Bio</a></span>';





// echo '<div class="name">'. $image . '</div>';
// echo '<div class="university">'. $link . '</div>';
// echo '<div class="bio_excerpt">'. $bio_excerpt . '<span class="link_to_page"><a href='. $link_to_page . '>Read Full Bio</a></span></div>';
// echo '<span class="link_to_page"><a href='. $link_to_page . '>Read Full Bio</a></span>';

// echo '</div></div>';

    endwhile;

    echo '</div>';

else :

    // no rows found

endif;



      echo '</div>';
    } // end second if have rows
    if (have_rows('right_column')) {
        echo '<div class="col">';
      while (have_rows('right_column')) {
        the_row(); // forgot this line
        $layout = get_row_layout('wysiwyg');
        $wysiwyg = get_sub_field('wysiwyg');
        echo $wysiwyg;
        // and the rest of your flex field output
      } // end second while have rows
      echo '</div>';
    } // end second if have rows
  } // end first while have rows


} // end first if have rows




?>




      <?php
    else :
      echo '<div class="location">';
      the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><h3 class="entry-title">', '</h3></a>' );
      echo '</div>';

    ?>

    <div class="address">
<div class="street">
<?php echo the_field('address'); ?>
</div>
<div class="city">
<?php echo the_field('city'); ?>
</div>

<div class="state">
<?php echo the_field('state'); ?>,<?php echo the_field('postal'); ?>
</div>

<div class="phone">
<?php echo the_field('phone'); ?>
</div>

<div class="view_site_page">
<a href="<?php the_permalink(); ?>">View Site Page</a>
</div>

    </div>

    <?php
    endif;

    if ( 'post' === get_post_type() ) : ?>
    <div class="entry-meta">
      <?php cope_posted_on(); ?>
    </div><!-- .entry-meta -->
    <?php
    endif; ?>
  <!-- </header> -->
  <!-- .entry-header -->

  <div class="entry-content">
    <?php
      the_content( sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cope' ),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        get_the_title()
      ) );

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cope' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->






  
<?php




?>

  <footer class="entry-footer">
    <?php cope_entry_footer(); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->



<?php endwhile; endif; ?>
  <?php // if ( get_edit_post_link() ) : ?>
    <footer class="entry-footer">
      <?php
        // edit_post_link(
        //   sprintf(
        //     wp_kses(
        //       /* translators: %s: Name of current post. Only visible to screen readers */
        //       __( 'Edit <span class="screen-reader-text">%s</span>', 'cope' ),
        //       array(
        //         'span' => array(
        //           'class' => array(),
        //         ),
        //       )
        //     ),
        //     get_the_title()
        //   ),
        //   '<span class="edit-link animated fadeInUp">',
        //   '</span>'
        // );
      ?>
    </footer><!-- .entry-footer -->
  <?php // endif; ?>


  
<?php get_footer(); ?>