<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package COPE
 */

get_header(); ?>
<div class="category_page">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					// the_archive_title( '<h1 class="page-title">', '</h1>' );
					// the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

<div class="page-title">
	<!-- <h1>COPE Press</h1>
	<p>If you are interested in featuring COPE in a story please contact Prakash Masand MD at 919-619-5101 or prakashmasand@copepsychiatry.com</p> -->
Category:
	<?php
// $categories = get_the_category('cat_name');
 
// var_dump($categories);
// echo $categories;

	global $post;
$postcat = get_the_category( $post->ID );

// try print_r($postcat) ;  

if ( ! empty( $postcat ) ) {
    echo esc_html( $postcat[0]->name );   
}

	?>

</div>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_post_format() );
				get_template_part( 'template-parts/content' );



			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .category_page -->
<?php
get_sidebar();
get_footer();
