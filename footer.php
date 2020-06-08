<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package COPE
 */
?>
</div><!-- #content -->
<div class="animated fadeIn" id="footer">
  <footer id="colophon footer" class="site-footer animated slideInUp">
    <div class="footer_wrap">
      <div class="col">
        <div class="footer_logo">
          <?php
          global $blog_id;
          $current_blog_id = $blog_id;
          //switch to the main blog which will have an id of 1
          switch_to_blog(1);
          $logo = get_field('footer_logo','option');
          if( !empty($logo) ): 
          // vars
            $url = $logo['url'];
            $title = $logo['title'];
            $alt = $logo['alt'];
            $caption = $logo['caption'];
            // thumbnail
            $size = 'large';
            $thumb = $logo['sizes'][ $size ];
            $width = $logo['sizes'][ $size . '-width' ];
            $height = $logo['sizes'][ $size . '-height' ];
            if( $caption ): ?>
            <div class="wp-caption">
            <?php endif; ?>
            <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
            <!-- <img src="https://s3.amazonaws.com/copepsychiatry/uploads/2018/02/COPE001-Logo_FINAL_OL_TM-300x350.png" alt=""> -->
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
          <?php endif; ?>
          </div>
          </div>
          <div class="col">
            <!-- <div class="address"><?php echo the_field('main_address', 'option'); ?></div> -->
          <div class="address_line_1"><?php echo the_field('address_line_1', 'option'); ?></div>
          <div class="address_line_2"><?php echo the_field('address_line_2', 'option'); ?></div>
          <div class="city"><?php echo the_field('city', 'option'); ?>, <?php echo the_field('state', 'option'); ?> <?php echo the_field('zip', 'option'); ?></div>
          <!-- <div class="phone"><?php echo the_field('primary_phone_number', 'option'); ?></div> -->
          <span class="phone">
                  <a class="phone" href="tel:<?php echo the_field('phone_number', 'option'); ?>">
                    <?php echo the_field('primary_phone_number', 'option'); ?>
                  </a>
                </span>
          <div class="email"><?php echo the_field('contact_email', 'option'); ?></div>
          <div class="social">
           
          <ul>
            <?php
        //   $field = get_field_object('color', 'option');
        //   // echo '<ul>';
        //   foreach ($field['choices'] as $value => $label) {
        //     echo '<li><a target="_blank" href="',$value,'">',$label,'</a></li>';
        // }
        //   // echo '</ul>';
          ?>

          <?php
                // GLOBAL NAV
                //store the current blog_id - Use this function at the start of the function that you want to share
                global $blog_id;
                $current_blog_id = $blog_id;
                //switch to the main blog which will have an id of 1
                switch_to_blog(1);
                //output the WordPress navigation menu - incase of menu-sharing use this

                // $selected = get_field('social_media');


                // $field = get_field_object('color', 'option');
                // if( $field ):
                // // echo '<ul>';
                //  var_dump($field);
                // foreach ($field['choices'] as $value => $label) {
                // // echo '<li><a target="_blank" href="',$value,'">',$label,'</a></li>';
                // }
                // endif;
                // // echo '</ul>';


                $field = get_field_object('color2', 'option'); 
                $colors = get_field('color2', 'option');

                foreach($colors as $key => $val) {
                $label = $colors[$key];
                echo '<li><a target="_blank" href="',$val,'">';
                echo $field['choices'][$label]; 
                echo '</a></li>';
                // ,$label,'</a></li>';
                }

                switch_to_blog($current_blog_id); 
                ?>

        </ul>
        </div>
        </div>
          <div class="col">
            <div class="footermenu">
            <?php //echo the_field('menu', 'option'); ?>
          <?php if( have_rows('menu_1', 'option') ): ?>
            <ul class="menu">
            <?php while( have_rows('menu_1', 'option') ): the_row(); 
          // vars
          $image = get_sub_field('image');
          $content = get_sub_field('menu_item', 'option');
          $link = get_sub_field('link_to_page', 'option');
          // $menu_item = get_sub_field('menu_item');
          ?>
          <li class="menu_item">
            <?php if( $link ): ?>
            <a href="<?php echo $link; ?>">
          <?php endif; ?>
          <!-- <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /> -->
          <?php echo $content; ?>
          <?php if( $link ): ?>
          </a>
        <?php endif; ?>
        </li>
        <?php endwhile; ?>
        </ul>
        <?php endif; ?>
        </div>
        </div>
          <div class="col">
            <div class="footermenu">
            <?php if( have_rows('menu_2', 'option') ): ?>
            <ul>
            <?php while( have_rows('menu_2', 'option') ): the_row(); 
          // vars
          $image = get_sub_field('image');
          $content = get_sub_field('menu_item', 'option');
          $link = get_sub_field('link_to_page', 'option');
          // $menu_item = get_sub_field('menu_item');
          ?>
          <li>
          <!-- 			<?php if( $link ): ?>
          <a href="<?php echo $link; ?>">
          <?php endif; ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
          <?php if( $link ): ?>
          </a>
        <?php endif; ?> -->
          <!-- <?php echo $content; ?> -->
          <?php if( $link ): ?>
            <a href="<?php echo $link; ?>">
          <?php endif; ?>
          <!-- <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /> -->
          <?php echo $content; ?>
          <?php if( $link ): ?>
          </a>
        <?php endif; ?>
        </li>
        <?php endwhile; ?>
        </ul>
          <div class="legal_links">
            <?php
          wp_nav_menu( array(
            'theme_location' => 'legal',
          'menu_id'        => 'Legal',
        ) );
          ?>
        </div>
        <?php endif; ?>
          <?php switch_to_blog($current_blog_id); ?>
        </div>
        </div>
        </div>
        </footer><!-- #colophon -->
        </div>
        </div><!-- #page -->
          <script type="text/javascript">
        //     jQuery(document).ready(function($) {
        //     if ($(window).width() < 1920) {
        //   // alert('Less than 960');
        //   $('#bh-sl-map-container').storeLocator({
        //     'slideMap' : false,
        //   'defaultLoc': true,
        //   'autoGeocode': false,
        //             'defaultLat': '38.345709',
        //             'defaultLng' : '-82.937924',
        //   'distanceAlert' : 500000,
        //   'markerDim' : { height: 94, width: 63 },
        //   // 'mapSettings' : { zoom : 5, mapTypeId: google.maps.MapTypeId.TERRAIN },
        //             'mapSettings' : { 
        //                 // disableDoubleClickZoom: true,
        //                 // scrollwheel           : false,
        //                 // navigationControl     : false,
        //                 // draggable : false,
        //                 gestureHandling: "none",
        //                 fullscreenControl: false,
        //                 zoom : 5, 
        //                 mapTypeId: google.maps.MapTypeId.ROADMAP, 
        //                 styles : [
        //     {
        //     "featureType": "landscape",
        //   "stylers": [
        //   { "saturation": -74 },
        //   { "lightness": -1 },
        //   { "gamma": 1.18 },
        //   { "color": "#f5faf3" }
        //   ]
        // },{
        //     "featureType": "water",
        //   "stylers": [
        //   { "saturation": -49 },
        //   { "color": "#c6e0e0" },
        //   { "lightness": -1 },
        //   { "gamma": 1 }
        //   ]
        // },{
        //     "featureType": "road",
        //   "stylers": [
        //   { "color": "#e5e3df" },
        //   { "lightness": -1 },
        //   // { "saturation": -78 }
        //   ]
        // },{
        //     "featureType": "road.highway",
        //   "stylers": [
        //   { "color": "#f7e39e" },
        //   { "lightness": 4 },
        //   // { "saturation": -78 }
        //   ]
        // },{
        //     "featureType": "poi",
        //   "stylers": [
        //   { "color": "#e5e3df" },
        //   // { "saturation": -38 },
        //   // { "lightness": 67 }
        //   ]
        // }
        //   ] },
        //   'markerImg': '<?php the_field('map_marker', 'option');  ?>',
        //   // 'markerImg': 'https://staging.chorusy.com/cope/wp-content/uploads/2017/09/mapmarker.png',
        // });
        // }
        //   else {
        //     $('#bh-sl-map-container').storeLocator({
        //     'slideMap' : false,
        //   'defaultLoc': true,
        //   'autoGeocode': false,
        //   // 'defaultLat': '40.127310',
        //   // 'defaultLng' : '-83.129272',
        //                       'defaultLat': '38.345709',
        //             'defaultLng' : '-82.937924',
        //   'distanceAlert' : 500000,
        //   'markerDim' : { height: 94, width: 63 },
        //   // 'mapSettings' : { zoom : 5, mapTypeId: google.maps.MapTypeId.TERRAIN },
        //   'mapSettings' : { zoom : 5, 
        //     gestureHandling: "none",
        //                 fullscreenControl: false,
        //     mapTypeId: google.maps.MapTypeId.ROADMAP, styles : [
        //     {
        //     "featureType": "landscape",
        //   "stylers": [
        //   { "saturation": -74 },
        //   { "lightness": -1 },
        //   { "gamma": 1.18 },
        //   { "color": "#f5faf3" }
        //   ]
        // },{
        //     "featureType": "water",
        //   "stylers": [
        //   { "saturation": -49 },
        //   { "color": "#c6e0e0" },
        //   { "lightness": -1 },
        //   { "gamma": 1 }
        //   ]
        // },{
        //     "featureType": "road",
        //   "stylers": [
        //   { "color": "#e5e3df" },
        //   { "lightness": -1 },
        //   // { "saturation": -78 }
        //   ]
        // },{
        //     "featureType": "road.highway",
        //   "stylers": [
        //   { "color": "#f7e39e" },
        //   { "lightness": 4 },
        //   // { "saturation": -78 }
        //   ]
        // },{
        //     "featureType": "poi",
        //   "stylers": [
        //   { "color": "#e5e3df" },
        //   // { "saturation": -38 },
        //   // { "lightness": 67 }
        //   ]
        // }
        //   ] },
        //   'markerImg': '<?php the_field('map_marker', 'option');  ?>',
        //   // 'markerImg': 'https://staging.chorusy.com/cope/wp-content/uploads/2017/09/mapmarker.png',
        // });
        // }
        // });
        </script>  
          <?php wp_footer(); ?>
        </body>
          </html>