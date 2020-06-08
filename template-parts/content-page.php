<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package COPE
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<!-- <div class="entry-content"> -->
		<?php
			// the_content();

			// wp_link_pages( array(
			// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cope' ),
			// 	'after'  => '</div>',
			// ) );
		?>
   <!-- </div> -->
   <!-- .entry-content -->



   <?php


   if( is_page ('resources') ) : ?>
    <style id="my-internal-css">
    a {
     color: black;
   }
 </style>
<?php endif;

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
        $table = get_sub_field( 'tablepress' );

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

  // if ( get_row_layout() == 'relevant_blog_articles' ) :
  //   // echo 'a';

        
  //       endif;

        if ( $table ) {

    // echo '<table border="0">';

    //     if ( $table['header'] ) {

    //         echo '<thead>';

    //             echo '<tr>';

    //                 foreach ( $table['header'] as $th ) {

    //                     echo '<th>';
    //                         echo $th['c'];
    //                     echo '</th>';
    //                 }

    //             echo '</tr>';

    //         echo '</thead>';
    //     }

    //     echo '<tbody>';

    //         foreach ( $table['body'] as $tr ) {

    //             echo '<tr>';

    //                 foreach ( $tr as $td ) {

    //                     echo '<td>';
    //                         echo $td['c'];
    //                     echo '</td>';
    //                 }

    //             echo '</tr>';
    //         }

    //     echo '</tbody>';

    // echo '</table>';

          echo $table;
        }

        echo $wysiwyg;
        // and the rest of your flex field output
      } // end second while have rows
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

      //echo '<div class="mini_locator">';
      ?>
<!--         <form id="bh-sl-user-location" method="get" action="https://staging.chorusy.com/cope/locations/?bh-sl-address=Edina,MN&bh-sl-maxdistance=20">
 <div class="form-input">
  <label for="bh-sl-address">Enter Address or Zip Code:</label>
  <input type="text" id="bh-sl-address" name="bh-sl-address" />
 </div>
 
 <button id="bh-sl-submit" type="submit">Submit</button>
</form> -->
<?php
      //echo '</div>';
echo '</div>';
    } // end second if have rows
  } // end first while have rows
} // end first if have rows

?>


<?php



?>


<?php if ( get_edit_post_link() ) : ?>
  <footer class="entry-footer">
   <?php
   edit_post_link(
     sprintf(
      wp_kses(
       /* translators: %s: Name of current post. Only visible to screen readers */
       __( 'Edit Page<span class="screen-reader-text">%s</span>', 'cope' ),
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
</article><!-- #post-<?php the_ID(); ?> -->
