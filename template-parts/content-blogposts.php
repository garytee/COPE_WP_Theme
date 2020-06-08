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
			echo '<div class="single_blog_post">';
			the_title( '<h1 class="entry-title">', '</h1>' );
			echo the_field('blog_content');
			echo '<div class="tweet"></div>';
			echo '</div>';

			// es_subbox( $namefield = “YES”, $desc = testing, $group = “” );

?>
<div class="tnp tnp-subscription">
<form method="post" action="https://staging.chorusy.com/cope/?na=s" onsubmit="return newsletter_check(this)">

<div class="tnp-field tnp-field-email"><label>Email</label><input class="tnp-email" type="email" name="ne" required></div>
<div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit" value="Subscribe">
</div>
</form>
</div>
<?php



			?>
<script type="text/javascript">
	jQuery('.tweet').twittie();
</script>
			<?php
		else :
			$blog_image = get_field('blog_image');

if( !empty($blog_image) ): 
echo '<div class="blogpost_image">';
  // vars
  $url = $blog_image['url'];
  $title = $blog_image['title'];
  $alt = $blog_image['alt'];
  $caption = $blog_image['caption'];

  // thumbnail
  $size = 'single-blog';
  $thumb = $blog_image['sizes'][ $size ];
  $width = $blog_image['sizes'][ $size . '-width' ];
  $height = $blog_image['sizes'][ $size . '-height' ];

  if( $caption ): ?>

    <div class="wp-caption">

  <?php endif; ?>

  <!-- <a href="<?php echo $url; ?>" title="<?php echo $title; ?>"> -->

    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

        <!-- <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" /> -->


  <!-- </a> -->

</div>


    <?php endif;

			the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><h6 class="entry-title">', '</h6></a>' );

			?>
<div class="blog_excerpt">
                  <?php echo the_field('blog_excerpt'); ?>
                  </div>
			<?php
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
		<?php cope_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
