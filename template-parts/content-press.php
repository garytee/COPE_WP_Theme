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
      if ( 'press' === get_post_type() ) : ?>
        <div class="entry-meta">
          <?php cope_press_date(); ?>
        </div><!-- .entry-meta -->
        <?php endif; 
        the_title( '<h1 class="entry-title">', '</h1>' );
       $image = get_field( 'blog_image' ); ?>
            <?php if ( $image ) { ?>
              <?php echo wp_get_attachment_image( $image, 'press-image' ); ?>
            <?php } 
        the_content();
        ?>  
        <footer class="entry-footer">  
          <?php cope_entry_footer(); ?>  
        </footer>
        <?php
      else : ?>

<!--         <div class="entry-meta">
          <?php cope_press_date(); ?>
        </div> -->

<?php
              if ( 'press' === get_post_type() ) : ?>
        <div class="entry-meta">
          <?php cope_press_date(); ?>
        </div><!-- .entry-meta -->
        <?php endif; 

        ?>
        <!-- .entry-meta -->

<!--         <a href="<?php the_permalink(); ?>">
          <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
        </a> -->
        <div class="press_row">
        <div class="press_col_1">
        <a href="<?php the_permalink(); ?>">
          <?php $image = get_field( 'blog_image' ); ?>
            <?php  // if ( $image ) { ?>
              <?php echo wp_get_attachment_image( $image, 'press-image' ); ?>
            <?php // } ?>
        </a>
        </div>
        <div class="press_col_2">
        <a href="<?php the_permalink(); ?>">
          <?php the_title( '<div class="entry-title-press-archive"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</div>' ); ?>
        </a>
        <div class="postexcerpt">
          <?php the_field('blog_excerpt'); ?>    
        </div>
        <div class="readmore">
          <a href="<?php the_permalink(); ?>">
            Read More
          </a>
        </div>
      </div>
    </div>
      <?php endif; ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php
      // the_content( sprintf(
      //  wp_kses(
      //    /* translators: %s: Name of current post. Only visible to screen readers */
      //    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cope' ),
      //    array(
      //      'span' => array(
      //        'class' => array(),
      //      ),
      //    )
      //  ),
      //  get_the_title()
      // ) );

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cope' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->

  <!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->