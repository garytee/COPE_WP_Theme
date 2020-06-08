<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package COPE
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

<div class="bh-sl-container">
                <div id="page-header">
                  
                </div>
<!--                 <div class="bh-sl-form-container">
                  <form id="bh-sl-user-location" method="post" action="#">
                    <div class="form-input">
                      <label for="bh-sl-address">Enter Address or Zip Code:</label>
                      <input type="text" id="bh-sl-address" name="bh-sl-address" />
                    </div>
                    <button id="bh-sl-submit" type="submit">Submit</button>
                  </form>
                </div>
                <div id="bh-sl-map-container" class="bh-sl-map-container">
                  <div id="bh-sl-map" class="bh-sl-map"></div>
                  <div class="bh-sl-loc-list">
                    <ul class="list"></ul>
                  </div>
                </div>
              </div> -->


              <div class="bh-sl-container">
                <!-- <div id="locations-header"> -->
                  <!-- <span><h2>Locations</h2></span> -->
                <!-- </div> -->
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
                  <div class="bh-sl-loc-list">
                    <ul class="list"></ul>
                  </div>
                </div>
              </div>

<!-- <div class="locations_important_message">
<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> IMPORTANT: All new patients must call 1 (833) COPE-NOW<br>to be pre-qualified first. 
</div>
 -->
<div class="archive_locations">
<div class="row">
        <div class="col">


    <h1>Locations</h1>


    <?php


    ?>


<?php
    // $user_id = get_current_user_id();
    // // if ($user_id == 0) {
    //     // echo 'You are not logged in.';
    // // } 
    // // else {
    //     echo '<h2>Here is your blog list</h2>';
    //     // $user_blogs = get_blog_list( $user_id );
    //     $user_blogs = get_sites( $user_id );
    //     // $address = get_field('address');
    //           unset($user_blogs["0"]) ;
    //     foreach ($user_blogs AS $user_blog) {
    //         // echo '<li><a href="'.$user_blog->siteurl.'">'.$user_blog->blogname.'</a></li>';
    //       echo '<a href="'.$user_blog->siteurl.'">'.$user_blog->blogname.'</a>';
    //       // echo '<a href="'.$address.'">'.$address.'</a>';
    //       // echo '<a href="'.$user_blog->siteurl.'">'.$user_blog->blogname.'</a>';
    //      // echo the_field('address');

    //       echo '<div class="view_site_page"><a href="'.$user_blog->siteurl.'">View Site Page</a></div>';



    //     }


        // $address = get_field('address');
        //       unset($user_blogs["0"]) ;
        // foreach ($user_blogs AS $user_blog) {
        //     // echo '<li><a href="'.$user_blog->siteurl.'">'.$user_blog->blogname.'</a></li>';
        //   // echo '<a href="'.$user_blog->siteurl.'">'.$user_blog->blogname.'</a>';
        //   echo '<a href="'.$address.'">'.$address.'</a>';
        //   // echo '<a href="'.$user_blog->siteurl.'">'.$user_blog->blogname.'</a>';
        //  // echo the_field('address');

        //   // echo '<div class="view_site_page"><a href="'.$user_blog->siteurl.'">View Site Page</a></div>';
        // }


//         $rows = get_field('address');
// if($rows)
// {
//   echo '<ul>';

//   foreach($rows as $row)
//   {
//     echo '<li>sub_field_1 = ' . $row['sub_field_1'] . ', sub_field_2 = ' . $row['sub_field_2'] .', etc</li>';
//   }

//   echo '</ul>';
// }


        // echo '</ul>';
        ?>
<!-- <div class="view_site_page"> -->
  <!-- <?php echo '<a href="'.$user_blog->siteurl.'">'.$user_blog->blogname.'</a>'; ?> -->
<!-- <a href="<?php the_permalink(); ?>">View Site Page</a> -->
<!-- </div> -->



        <?php
    // }



    ?>

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					// the_archive_title( '<h1 class="page-title">', '</h1>' );
					// the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_post_format() );
        get_template_part( 'template-parts/content', 'locations', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

    
</div>

<div class="col_2">
<?php
// $form = get_the_field('form');
// echo do_shortcode( '[gravityform id="1" title="false" description="false"]' );
?>


<?php 
    $form_object = get_field('form', 'option');
    gravity_form_enqueue_scripts($form_object['id'], true);
    gravity_form($form_object['id'], false, true, false, '', true, 1); 
    // gravity_form($form_object, false, true, false, '', true, 1); 
?>
</div>

</div>

  </div>

		</main><!-- #main -->
	</div><!-- #primary -->



  <?php if ( get_edit_post_link() ) : ?>
    <footer class="entry-footer">
      <?php
        // edit_post_link(
        //   sprintf(
        //     wp_kses(
        //       /* translators: %s: Name of current post. Only visible to screen readers */
        //       __( 'Edit Locations<span class="screen-reader-text">%s</span>', 'cope' ),
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

      <span class="no-smoothstate edit-link animated fadeInUp"><a href="/wp-admin/edit.php?post_type=locations">Edit Locations</a></span>
    </footer><!-- .entry-footer -->
  <?php endif; ?>




<?php
// get_sidebar();
get_footer();
