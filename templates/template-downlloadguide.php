<?php 
/*
Template Name: Download Guide
*/
get_header('logoonly'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php 
  if (have_rows('content')) : 
    while (have_rows('content')) : the_row();
      if( get_row_layout() == 'three_equal_columns' ): 
        $counter = get_sub_field('columns');
        if ( have_rows('columns') ) :
          echo '<div class="flexible_columns">';
            while ( have_rows('columns') ) : the_row();
              $count = count( $counter );
                    // echo $count;
                    // HTML goes here
                    echo '<div class="col ';
                    if ($count == 1) {
                                  $class  = 'one';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                                } 
                    if ($count == 2) {
                                  $class  = 'two';
                                  // echo $class .'" style="background-color: blue;">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                                }
                    if ($count == 3) {
                                  $class  = 'three';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                                }
                    if ($count == 4) {
                                  $class  = 'four';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 5) {
                                  $class  = 'five';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 6) {
                                  $class  = 'six';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 7) {
                                  $class  = 'seven';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 8) {
                                  $class  = 'eight';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 9) {
                                  $class  = 'nine';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 10) {
                                  $class  = 'ten';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 11) {
                                  $class  = 'eleven';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 12) {
                                  $class  = 'twelve';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                  $image = get_sub_field('center_image');
                  $column = get_sub_field('column');

                  echo $column . '</div>';
            endwhile;
          echo '</div>';
        endif;
      elseif( get_row_layout() == 'two_columns_right_sidebar' ): 
        $counter = get_sub_field('columns');
        if ( have_rows('columns') ) :
          echo '<div class="two_column_right_sidebar">';
            while ( have_rows('columns') ) : the_row();
              $count = count( $counter );
                    // echo $count;
                    // HTML goes here
                    echo '<div class="col ';
                    if ($count == 1) {
                                  $class  = 'one';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                                } 
                    if ($count == 2) {
                                  $class  = 'two';
                                  // echo $class .'" style="background-color: blue;">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                                }
                    if ($count == 3) {
                                  $class  = 'three';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                                }
                    if ($count == 4) {
                                  $class  = 'four';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 5) {
                                  $class  = 'five';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 6) {
                                  $class  = 'six';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 7) {
                                  $class  = 'seven';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 8) {
                                  $class  = 'eight';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 9) {
                                  $class  = 'nine';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 10) {
                                  $class  = 'ten';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 11) {
                                  $class  = 'eleven';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 12) {
                                  $class  = 'twelve';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                  $image = get_sub_field('center_image');
                  $column = get_sub_field('column');

                  echo $column . '</div>';
            endwhile;
          echo '</div>';
        endif;

        elseif( get_row_layout() == 'call_to_action' ): 
        $counter = get_sub_field('columns');
        if ( have_rows('columns') ) :
          echo '<div class="call_to_action">';
            while ( have_rows('columns') ) : the_row();
              $count = count( $counter );
                    // echo $count;
                    // HTML goes here
                    echo '<div class="col ';
                    if ($count == 1) {
                                  $class  = 'one';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                                } 
                    if ($count == 2) {
                                  $class  = 'two';
                                  // echo $class .'" style="background-color: blue;">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                                }
                    if ($count == 3) {
                                  $class  = 'three';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                                }
                    if ($count == 4) {
                                  $class  = 'four';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 5) {
                                  $class  = 'five';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 6) {
                                  $class  = 'six';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 7) {
                                  $class  = 'seven';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 8) {
                                  $class  = 'eight';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 9) {
                                  $class  = 'nine';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 10) {
                                  $class  = 'ten';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 11) {
                                  $class  = 'eleven';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 12) {
                                  $class  = 'twelve';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                  $image = get_sub_field('center_image');
                  $column = get_sub_field('column');

                  echo $column . '</div>';
            endwhile;
          echo '</div>';
        endif;



      elseif( get_row_layout() == 'treatments_section' ): 
        $counter = get_sub_field('columns');
        if ( have_rows('columns') ) :
          echo '<div class="treatment_sections"><div class="treatment_wrap">';
            while ( have_rows('columns') ) : the_row();
              $count = count( $counter );
                    // echo $count;
                    // HTML goes here
                    echo '<div class="col ';
                    if ($count == 1) {
                                  $class  = 'one';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                                } 
                    if ($count == 2) {
                                  $class  = 'two';
                                  // echo $class .'" style="background-color: blue;">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                                }
                    if ($count == 3) {
                                  $class  = 'three';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                                }
                    if ($count == 4) {
                                  $class  = 'four';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 5) {
                                  $class  = 'five';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 6) {
                                  $class  = 'six';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 7) {
                                  $class  = 'seven';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 8) {
                                  $class  = 'eight';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 9) {
                                  $class  = 'nine';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 10) {
                                  $class  = 'ten';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 11) {
                                  $class  = 'eleven';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 12) {
                                  $class  = 'twelve';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                  $image = get_sub_field('image');
                  $column = get_sub_field('column');
                  $link_to_page = get_sub_field('link_to_page');

                  // echo $column . '</div>';

?>
                  <a href="<?php echo $link_to_page ?>">
                  <?php 
                  $blog_image = get_sub_field('image');
                  $default_image = get_field('header_logo', 'option');
                  // $blog_image = the_post_thumbnail('portfolio-thumb');
                  if( !empty($blog_image) ): 
                  // vars
                    $url = $blog_image['url'];
                    $title = $blog_image['title'];
                    $alt = $blog_image['alt'];
                    $caption = $blog_image['caption'];
                    // thumbnail
                    $size = 'portfolio-thumb';
                    $thumb = $blog_image['sizes'][ $size ];
                    $width = $blog_image['sizes'][ $size . '-width' ];
                    $height = $blog_image['sizes'][ $size . '-height' ];
                    ?>
                    <!-- <a href="<?php echo $url; ?>" title="<?php echo $title; ?>"> -->
                      <!-- <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" /> -->
                      
                      <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

                      <span class="treatment_title"><?php echo $column ?></span>

                      <?php

                    else:

// vars
                    $url = $default_image['url'];
                    $title = $default_image['title'];
                    $alt = $default_image['alt'];
                    $caption = $default_image['caption'];
                    // thumbnail
                    $size = 'portfolio-thumb';
                    $thumb = $default_image['sizes'][ $size ];
                    $width = $default_image['sizes'][ $size . '-width' ];
                    $height = $default_image['sizes'][ $size . '-height' ];
                    ?>
                    <!-- <a href="<?php echo $url; ?>" title="<?php echo $title; ?>"> -->
                      <!-- <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" /> -->
                      
                      <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

                                        <?php endif; ?>

                    <!-- </a> -->
                  </a>


<?php
                  // echo '<div class="treatmentimg">'. $image .'</div><div class="treatmentcontent">'. $column .'</div></div>';
echo '</div>';

            endwhile;
          echo '</div></div>';
        endif;


        elseif( get_row_layout() == 'homepage_slider' ): 
          $counter = get_sub_field('homepage_slider');
          if ( have_rows('homepage_slider') ) :
            echo '<div id="slick" data-arrows="true" data-autoplay="true">';
            while ( have_rows('homepage_slider') ) : the_row();
              ?>
              <div class="ct-header tablex item hero-slider-image" data-background="<?php the_sub_field('image');?>">
                <div class="ct-u-display-tablex">
                  <div class="inner">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-8 col-lg-6 slider-inner">
                          <div class="blue_line_text">
                          <?php if( get_sub_field('blue_line_text') ): ?> 
                          <span class="big slick animated"><?php echo the_sub_field('blue_line_text');?></span>
                          <?php endif; ?> 
                          </div>
                          <div class="second_line_text">
                          <?php if( get_sub_field('second_line_text') ): ?> 
                          <span class="big slick animated"><?php echo the_sub_field('second_line_text');?></span>
                          <?php endif; ?> 
                          </div>
                          <div class="third_line_text">
                          <?php if( get_sub_field('third_line_text') ): ?> 
                          <span class="big slick animated"><?php echo the_sub_field('third_line_text');?></span>
                          <?php endif; ?> 
                          </div>
                          <?php if( get_sub_field('text') ): ?> 
                          <h1 class="big slick animated"><?php echo the_sub_field('text');?></h1>
                          <?php endif; ?> 
                          <?php if( get_sub_field('button_text') ): ?> 
                          <div class="homepage_slider_button">
                          <a class="homepage_button slick animated" href="<?php echo the_sub_field('link_to_page');?>"><?php echo the_sub_field('button_text');?></a>
                          </div>
                          <?php endif; ?> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            endwhile;
            echo '</div>';
          endif;
          elseif (get_row_layout() == 'gallery'):
            $rows = get_sub_field('gallery');
            if ($rows) : ?>
            <div class="homeslides">
              <?php foreach ($rows as $row) : $img = wp_get_attachment_image_src($row['ID'], 'full'); ?>
                <div class="mainslide">
                  <div class="slidewrap">
                    <img src="<?php echo $img[0]; ?>" alt="">
                  </div>
                </div>
              <?php endforeach; ?>
              </div>
            <?php endif;
            elseif (get_row_layout() == 'locations'):
              $gmap = get_sub_field('show_google_map_location');
              if ($gmap) : ?>
              <div class="bh-sl-container">
                <div id="locations-header">
                  <span><h2>Locations</h2></span>
                </div>
                <div class="bh-sl-form-container">
                  <form id="bh-sl-user-location" method="post" action="#">
                    <div class="form-input">
                      <label for="bh-sl-address"></label>
                      <input placeholder="Enter Zip Code" type="text" id="bh-sl-address" name="bh-sl-address" />
                    </div>
                    <button id="bh-sl-submit" type="submit"></button>
                  </form>
                </div>
                <div id="bh-sl-map-container" class="bh-sl-map-container">
                  <div id="bh-sl-map" class="bh-sl-map"></div>
                  <!-- <div class="bh-sl-loc-list">
                    <ul class="list"></ul>
                  </div> -->
                </div>
              </div>
              <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
              <!-- <script src="https://staging.chorusy.com/cope/wp-content/themes/cope/assets/js/libs/handlebars.min.js"></script> -->
              <!-- <script src="https://staging.chorusy.com/cope/wp-content/themes/cope/assets/js/plugins/storeLocator/jquery.storelocator.js"></script> -->
              <script>
                // jQuery(document).ready(function($) {
                //   $('#bh-sl-map-container').storeLocator({
                //     'slideMap' : false,
                //     'defaultLoc': true,
                //     'defaultLat': '44.9207462',
                //     'defaultLng' : '-93.3935366',
                //     'distanceAlert' : 500000,
                //   });
                // });
              </script>
            <?php endif;
            elseif (get_row_layout() == 'animated_headline'):
              $text = get_sub_field('text');
              $backgroundcolor = get_sub_field('background_color');
              if ($text) : ?>
              <div class="animated_headline_wrapper" style="background-color: <?php echo get_sub_field('background_color'); ?>">
              <div class="animated_headline">            
                <div class="wow card card--castle" data-wow-delay="0s">
                  <span class="wow card__text card__text--primary" data-wow-delay="0.4s">
                    <?php echo $text ?>
                    <span class="wow card__bar card__bar--primary" data-wow-delay="0.2s"></span>
                  </span>
                </div>
              </div>
            </div>
              <?php endif; ?>

<?php
              elseif (get_row_layout() == 'wysiwyg'):
              $text = get_sub_field('text');
              $backgroundcolor = get_sub_field('background_color');
              if ($text) : ?>
              <!-- <div class="animated_headline_wrapper" style="background-color: <?php echo get_sub_field('background_color'); ?>"> -->
              <!-- <div class="animated_headline">             -->
                <!-- <div class="wow card card--castle" data-wow-delay="0s"> -->
                  <!-- <span class="wow card__text card__text--primary" data-wow-delay="0.4s"> -->

                    <div class="home_wysiwyg">
                    <?php echo $text ?>
                  </div>
                    <!-- <span class="wow card__bar card__bar--primary" data-wow-delay="0.2s"></span> -->
                  <!-- </span> -->
                <!-- </div> -->
              <!-- </div> -->
            <!-- </div> -->
              <?php endif; ?>


            <?php elseif( get_row_layout() == 'physician_section' ): 
            $counter = get_sub_field('physicians');
            if ( have_rows('physicians') ) :
              // echo '<div class="physician_wrap"><div class="physician_text"><h2>Our Physicians</h2></div><div class="physician_section">';
              echo '<div class="physician_wrap"><div class="physician_section">';
              while ( have_rows('physicians') ) : the_row();
                $post_object = get_sub_field('physicians');
                if( $post_object ): 
                // override $post
                  $post = $post_object;
                  setup_postdata( $post ); 
                  $count = count( $counter );
                    // echo $count;
                    // HTML goes here
                    echo '<div class="col ';
                    if ($count == 1) {
                                  $class  = 'one';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                                } 
                    if ($count == 2) {
                                  $class  = 'two';
                                  // echo $class .'" style="background-color: blue;">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                                }
                    if ($count == 3) {
                                  $class  = 'three';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                                }
                    if ($count == 4) {
                                  $class  = 'four';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 5) {
                                  $class  = 'five';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 6) {
                                  $class  = 'six';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 7) {
                                  $class  = 'seven';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 8) {
                                  $class  = 'eight';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 9) {
                                  $class  = 'nine';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 10) {
                                  $class  = 'ten';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 11) {
                                  $class  = 'eleven';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                    if ($count == 12) {
                                  $class  = 'twelve';
                                  // echo $class .'">';
                                  echo $class;
                                  echo '" style="background-color:';
                                  $color = the_sub_field("background_color");
                                  echo $color .'">';
                    }
                  $image = get_sub_field('center_image');
                  // $physician_image = get_sub_field('physician_image');

                  // echo $physician_image . '</div>';


                  ?>
                  
                  <?php 
                  $physician_image = get_field('physician_image');
                  if( !empty($physician_image) ): 
                  // vars
                  $url = $physician_image['url'];
                  $title = $physician_image['title'];
                  $alt = $physician_image['alt'];
                  $caption = $physician_image['caption'];
                  // thumbnail
                  $size = 'portfolio-thumb';
                  $thumb = $physician_image['sizes'][ $size ];
                  $width = $physician_image['sizes'][ $size . '-width' ];
                  $height = $physician_image['sizes'][ $size . '-height' ];
                  ?>
                  <div class="physicianfixedheight">
                  <!-- <a href="<?php echo $url; ?>" title="<?php echo $title; ?>"> -->
                    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                  <!-- </a> -->
                </div>
                <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
                </div>
                <?php endif; ?>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
              <?php endif; ?>
              <?php endwhile; ?>
            </div>
              <?php
              $physician_text_block = get_sub_field('physician_text_block');
              if ($physician_text_block) : ?>
              <div class="physician_text">
              <?php echo $physician_text_block; ?>
              </div>
              <?php endif; endif; ?>
            </div>
            <?php
          elseif( get_row_layout() == 'blog_section' ): 

                          $checked = get_sub_field('show_specific_blog_post');

              if ($checked) {
             // return "<a href='/my-link/'>".$atts['title']."</a>"; 
                // echo 'true';


            if ( have_rows('blogs') ) :
            // echo '<ul class="flexible_columns">';
              echo '<div class="blog_section">';
              while ( have_rows('blogs') ) : the_row();





              $post_object = get_sub_field('blogs');




              if( $post_object ): 
              // override $post
                $post = $post_object;
                setup_postdata( $post ); 
                ?>
                <div class="blog">
                  <div class="blogfixedheight">
                      <a href="<?php the_permalink(); ?>">
                  <?php 
                  $blog_image = get_field('blog_image');
                  $default_image = get_field('header_logo', 'option');
                  // $blog_image = the_post_thumbnail('portfolio-thumb');
                  if( !empty($blog_image) ): 
                  // vars
                    $url = $blog_image['url'];
                    $title = $blog_image['title'];
                    $alt = $blog_image['alt'];
                    $caption = $blog_image['caption'];
                    // thumbnail
                    $size = 'portfolio-thumb';
                    $thumb = $blog_image['sizes'][ $size ];
                    $width = $blog_image['sizes'][ $size . '-width' ];
                    $height = $blog_image['sizes'][ $size . '-height' ];
                    ?>
                    <!-- <a href="<?php echo $url; ?>" title="<?php echo $title; ?>"> -->
                      <!-- <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" /> -->
                      
                      <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

                      <?php

                    else:

// vars
                    $url = $default_image['url'];
                    $title = $default_image['title'];
                    $alt = $default_image['alt'];
                    $caption = $default_image['caption'];
                    // thumbnail
                    $size = 'portfolio-thumb';
                    $thumb = $default_image['sizes'][ $size ];
                    $width = $default_image['sizes'][ $size . '-width' ];
                    $height = $default_image['sizes'][ $size . '-height' ];
                    ?>
                    <!-- <a href="<?php echo $url; ?>" title="<?php echo $title; ?>"> -->
                      <!-- <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" /> -->
                      
                      <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

                                        <?php endif; ?>

                    <!-- </a> -->
                  </a>
                  </div>
                    <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
                  <div class="blog_excerpt">
                  <?php echo the_field('blog_excerpt'); ?>
                  </div>
                  <a href="<?php the_permalink(); ?>">LEARN MORE</a>
                </div>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
              <?php endif; ?>
              <?php endwhile; ?>
            <?php endif;


   }  else {
             // return "<a>".$atts['title']."</a>";
    // echo 'false';

echo '<div class="blog_section">';
   // the query
   $the_query = new WP_Query( array(
     // 'category_name' => 'news',
      'posts_per_page' => 3,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <?php //the_title(); ?>
    <?php //the_excerpt(); ?>

<div class="blog">
                  <?php 
                  $blog_image = get_field('blog_image');
                  // $blog_image = the_post_thumbnail('portfolio-thumb');
                  if( !empty($blog_image) ): 
                  // vars
                    $url = $blog_image['url'];
                    $title = $blog_image['title'];
                    $alt = $blog_image['alt'];
                    $caption = $blog_image['caption'];
                    // thumbnail
                    $size = 'portfolio-thumb';
                    $thumb = $blog_image['sizes'][ $size ];
                    $width = $blog_image['sizes'][ $size . '-width' ];
                    $height = $blog_image['sizes'][ $size . '-height' ];
                    ?>
                    <!-- <a href="<?php echo $url; ?>" title="<?php echo $title; ?>"> -->
                      <!-- <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" /> -->
                      <div class="blogfixedheight">
                      <a href="<?php the_permalink(); ?>">
                      <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

                    <!-- </a> -->
                  </a>
                  </div>
                    <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
                  <?php endif; ?>
                  <div class="blog_excerpt">
                  <?php echo the_field('blog_excerpt'); ?>
                  </div>
                  <a href="<?php the_permalink(); ?>">LEARN MORE</a>
                </div>



  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

</div>

<?php else : ?>
  <!-- <p><?php __('No News'); ?></p> -->
<?php endif;


   }
?>
          </div>
          <?php
            endif; 
      endwhile;
    else :

      // echo 'hi';


      ?>

<div class="thankyoupage">

<div class="thankyoucontent1">

<h1>Thank You!</h1>

<div class="thankyouflex">

<div class="col">
Download your free “Depression By The Numbers—A Guide to Understanding Major Depression” Infograph through the download button below. 
</div>

<div class="col">
<img src="https://cdn.copepsychiatry.com/wp-content/uploads/2019/02/COPE-Major-Depression-Lead-Magnet-2-1@2x.png" alt="">
  </div>



  </div>



  <div class="dlguide">

<a target="_blank" href="https://cdn.copepsychiatry.com/wp-content/uploads/2019/02/MajorDepression_COPE-Branding.pdf">
  <span style="background: #00A4EC; color: white; border: 1px solid #959595; padding: 10px; font-weight: bold; border-radius: 5px;">Download Guide</span>
</a>
  </div>

</div>


<!--   <div class="thankyouflex2">

<div class="col">
VIDEO HERE
</div>

<div class="col">
VIDEO LINKS
  </div>



  </div> -->



</div>

<div class="call_to_action"><div class="col three" style="background-color:"><p><img class="alignnone size-full wp-image-3575 aligncenter" src="https://cdn.copepsychiatry.com/wp-content/uploads/2019/02/phone_2194472@2x.png" alt="" width="122" height="144"></p>
</div><div class="col three" style="background-color:"><p style="text-align: center;">Schedule your free 15 minute phone consultation today with one of our psychiatric experts</p>
</div><div class="col three" style="background-color:"><p style="text-align: center;"><a href="tel:18332673669"><span style="background: #00A4EC; color: white; border: 1px solid #959595; padding: 10px; font-weight: bold; border-radius: 5px;">Call Today!</span></a></p>
</div></div>






      <?php
  endif; 
?>
<?php endwhile; endif; ?>
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
<?php get_footer(); ?>