<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package COPE
 */

get_header(); ?>

<div class="allposts">


	<h4 style="line-height: 30px;">COPE supported centers are pleased to provide a blog for patients and family members of patients that provides more information on ketamine treatments and mental illness.</h4>

	<hr style="margin: 0px 0px 40px 0px;">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
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
				get_template_part( 'template-parts/content', 'videos', get_post_format() );

			endwhile;

			// the_posts_navigation();

			wpbeginner_numeric_posts_nav();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>

<?php
get_sidebar();
get_footer();
