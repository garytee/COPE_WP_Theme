<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package COPE
 */

get_header(); ?>


<div class="allposts">
	<div class="row">
<div class="posts_col_1">

	<!-- <h4 style="line-height: 30px;">COPE supported centers are pleased to provide a blog for patients and family members of patients that provides more information on ketamine treatments and mental illness.</h4> -->

    <h4 style="line-height: 30px;">COPE supported centers are pleased to provide a blog for patients and family members of patients that provides more information on ketamine treatments and mental illness.</h4>

	<!-- <hr style="margin: 0px 0px 40px 0px;"> -->


	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			// the_posts_navigation();

			 wpbeginner_numeric_posts_nav();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<div class="posts_col_2">
<?php // get_sidebar(); ?>







<!-- 

<div class="tnp tnp-subscription">
	<div class="subscribe_text">
<h2>SUBSCRIBE</h2>
<p>
Enter your email address if you'd like to subscribe to this blog and receive an email each time we put up a new post.
</p>
	</div>


<form method="post" action="https://staging.chorusy.com/cope/?na=s" onsubmit="return newsletter_check(this)">

<div class="tnp-field tnp-field-email"><input class="tnp-email" type="email" name="ne" required><label>Email Address</label></div>
<div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit" value="Submit">
</div>
</form>
</div> -->


<div class="tnp tnp-subscription">
    <div class="subscribe_text">
<h2>SUBSCRIBE</h2>
<p>
Enter your email address if you'd like to subscribe to this blog and receive an email each time we put up a new post.
</p>
    </div>


<!-- <form method="post" action="https://www.copepsychiatry.com/subscribe-thank-you/?na=s" onsubmit="return newsletter_check(this)">

<div class="tnp-field tnp-field-email"><input class="tnp-email" type="email" name="ne" required><label>Email Address</label></div>
<div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit" value="Submit">
</div>
</form> -->

<?php
echo do_shortcode( '[gravityform id="7" title="false" description="false"]' );
?>

</div>


<div class="tweettitlewrap">
	<div class="tweettitle">Tweets</div>
	<div class="followbutton">
		<!-- <a href="https://twitter.com/CopeCenters">Follow</a> -->
<a href="https://twitter.com/CopeCenters?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false">Follow @CopeCenters</a>

<script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
	
</script>
	</div>
</div>


<div class="twitterstream">


<div class="tweet"></div>






</div>

<!-- <a class="twitter-mention-button"
  href="https://twitter.com/intent/tweet?screen_name=CopeCenters">
Tweet to @CopeCenters</a> -->

<div class="tweetto">

<a href="https://twitter.com/intent/tweet?screen_name=CopeCenters">
Tweet to @CopeCenters</a>

</div>

<script type="text/javascript">
	// jQuery('.tweet').twittie();
</script>


<script type="text/javascript">
	       //  jQuery('.tweet').twittie({
        //     // username: 'rrhoover',
        //     // list: 'top-angellist-developers',
        //     dateFormat: '%b. %d, %Y',
        //     template: '<div class="tweet_wrap"><div class="twitter_avatar">{{avatar}}</div><div class="twitter_username">{{user_name}}</div> <div class="twitter_screenname">{{screen_name}}</div> <div class="twitter_tweet">{{tweet}}</div></div>',
        //     count: 10
        // // }, function () {
        // //     setInterval(function() {
        // //         var item = $('.example2 .tweet ul').find('li:first');

        // //         item.animate( {marginLeft: '-220px', 'opacity': '0'}, 500, function() {
        // //             $(this).detach().appendTo('.example2 .tweet ul').removeAttr('style');
        // //         });
        // //     }, 5000);
        // });



        
         jQuery(document).ready(function($){

          $('.tweet').twittie({
            // username: 'rrhoover',
            // list: 'top-angellist-developers',
            dateFormat: '%b. %d, %Y',
            template: '<div class="tweet_wrap"><div class="twitter_avatar">{{avatar}}</div><div class="twitter_username">{{user_name}}</div> <div class="twitter_screenname">{{screen_name}}</div> <div class="twitter_tweet">{{tweet}}</div></div>',
            count: 10
        // }, function () {
        //     setInterval(function() {
        //         var item = $('.example2 .tweet ul').find('li:first');

        //         item.animate( {marginLeft: '-220px', 'opacity': '0'}, 500, function() {
        //             $(this).detach().appendTo('.example2 .tweet ul').removeAttr('style');
        //         });
        //     }, 5000);
        });
          });

    
</script>


<div class="topics">

	<div class="topicstitle"><h2>TOPICS</h2></div>

<?php
$categories = get_categories();
foreach($categories as $category) {
   echo '<div class="category"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
}
?>

</div>



<div class="recent_posts">

<div class="recent_post_title"><h2>RECENT POSTS</h2></div>

<?php
$args = array( 'numberposts' => 5 );
$lastposts = get_posts( $args );
foreach($lastposts as $post) : setup_postdata($post); ?>
	<div class="single_recent_post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
	<?php //the_content(); ?>
<?php endforeach; ?>


</div>

	</div>

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

      <span class="no-smoothstate edit-link animated fadeInUp"><a href="/wp-admin/edit.php">Manage Blogs</a></span>
    </footer><!-- .entry-footer -->
  <?php endif; ?>


<?php
// get_sidebar();
get_footer();
