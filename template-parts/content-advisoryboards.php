<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package COPE
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			// echo '<div class="single_physician_post">';
			// the_title( '<h1 class="entry-title">', '</h1>' );
			// echo the_field('physician_content');
			// echo '</div>';

?>
<div class="banner-image">

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


<?php

$advisor_image = get_field('advisor_image');

if( !empty($advisor_image) ): 

  // vars
  $url = $advisor_image['url'];
  $title = $advisor_image['title'];
  $alt = $advisor_image['alt'];
  $caption = $advisor_image['caption'];

  // thumbnail
  $size = 'wordpress-thumbnail-topcenter';
  $thumb = $advisor_image['sizes'][ $size ];
  $width = $advisor_image['sizes'][ $size . '-width' ];
  $height = $advisor_image['sizes'][ $size . '-height' ];

  //if( $caption ): ?>

    <div class="single_physician">

      <div class="col">

  <?php //endif; ?>

  <div class="single_physician_image">

  <!-- <a href="<?php echo $url; ?>" title="<?php echo $title; ?>"> -->

    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

        <!-- <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" /> -->


  <!-- </a> -->

</div>



    <?php endif; ?>

<h2 class="entry-title physician-name">
    <?php


			// the_title( '<h2 class="entry-title physician-name"></h2>' );

the_title();
?>

</h2>

<div class="single_physician_text">
	
<?php echo the_field('advisor_info'); ?>
</div>

</div>

<div class="col_2">
<?php
echo do_shortcode( '[gravityform id="1" title="false" description="false"]' );
?>
</div>

<?php
		else :
			$physician_image = get_field('advisor_image');

if( !empty($physician_image) ): 

  // vars
  $url = $physician_image['url'];
  $title = $physician_image['title'];
  $alt = $physician_image['alt'];
  $caption = $physician_image['caption'];

  // thumbnail
  $size = 'wordpress-thumbnail-topcenter';
  $thumb = $physician_image['sizes'][ $size ];
  $width2 = $physician_image['sizes'][ $size . '-width' ];
  $height = $physician_image['sizes'][ $size . '-height' ];

  //if( $caption ): ?>

    <div class="physician_block">

      <!-- <div class="fixedheight"> -->

  <?php //endif; ?>

  <!-- <a href="<?php echo $url; ?>" title="<?php echo $title; ?>"> -->

    <a href="<?php the_permalink(); ?>">

    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width2; ?>" height="<?php echo $height; ?>" />

    </a>

        <!-- <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" /> -->


  <!-- </a> -->

<!-- </div> -->
    <?php endif;

			the_title( '<h2 class="entry-title physician-name"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php cope_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

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

	<footer class="entry-footer">
		<?php // cope_entry_footer(); ?>
	</footer>

	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
