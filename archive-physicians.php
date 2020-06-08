<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package COPE
 */

get_header(); ?>

<div class="banner-image-archive">

<?php
$physician_banner_image = get_field('physician_banner_image', 'option');

if( !empty($physician_banner_image) ): 

  // vars
  $url = $physician_banner_image['url'];
  $title = $physician_banner_image['title'];
  $alt = $physician_banner_image['alt'];
  $caption = $physician_banner_image['caption'];

  // thumbnail
  $size = 'large';
  $thumb = $physician_banner_image['sizes'][ $size ];
  $width = $physician_banner_image['sizes'][ $size . '-width' ];
  $height = $physician_banner_image['sizes'][ $size . '-height' ];

  //if( $caption ): ?>

    <!-- <div class="wp-caption"> -->

  <?php endif; ?>

  <!-- <a href="<?php echo $url; ?>" title="<?php echo $title; ?>"> -->

    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"/>

        <!-- <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" /> -->


  <!-- </a> -->
    <?php //endif; ?>

<!-- </div> -->
</div>

<div class="right_sidebar_columns">
	<div class="col">

<div class="page-title">Center Physicians</div>

	<div id="primary" class="content-area physician-archive">
		<main id="main" class="site-main">

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
				get_template_part( 'template-parts/content', 'physicians', get_post_format() );

			endwhile;

			// the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>

<div class="col">

<?php
echo do_shortcode( '[gravityform id="1" title="false" description="false"]' );
?>

</div>

</div>


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

      <span class="no-smoothstate edit-link animated fadeInUp"><a href="/wp-admin/edit.php?post_type=physicians">Edit Physicians</a></span>
    </footer><!-- .entry-footer -->
  <?php endif; ?>



<?php
// get_sidebar();
get_footer();
