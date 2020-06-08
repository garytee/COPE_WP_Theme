<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package COPE
 */

get_header(); ?>


<div class="page-title">COPE Press</div>

<div class="press_header">
	<!-- <h1>COPE Press</h1> -->
	<p><strong>If you are interested in featuring COPE in a story please contact Prakash Masand MD at <a href="tel:1-919-619-5101">919-619-5101</a> or <a href="mailto:prakashmasand@copepsychiatry.com">prakashmasand@copepsychiatry.com</a></strong></p>
</div>

	<div id="primary" class="content-area press-archive">
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
				get_template_part( 'template-parts/content', 'press', get_post_format() );

			endwhile;

			// the_posts_navigation();
			wpbeginner_numeric_posts_nav();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

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

      <span class="no-smoothstate edit-link animated fadeInUp"><a href="/wp-admin/edit.php?post_type=press">Edit Press</a></span>
    </footer><!-- .entry-footer -->
  <?php endif; ?>



<?php
// get_sidebar();
get_footer();
