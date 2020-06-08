<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package COPE
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="norton-safeweb-site-verification" content="2ww7cbbv09579t4zwy717v9pqf5nctlh1k4dw9n-yy9p5hud1k704maogz7vb-9oyqez7zuk-r-iunrslu-9sgj0hnaj3bbi-0r8w17v1rc6z-wh4pl1ubs2dd2ie3tp" />
	<?php echo the_field('header_tracking_scripts', 'option'); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<script type="text/javascript">
// 	jQuery(document).ready(function($) {
// 		paceOptions = {
//         ajax: true, // disabled
//         document: false, // enabled
//         eventLag: true, // disabled
//         elements: {
//         	selectors: ['.site-content']
//         }
//     };
// });
</script>
<div id="page" class="site">
	<div class="loading2"></div>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cope' ); ?></a>
	<header id="masthead" class="site-header-thankyou">

<?php
if ( is_user_logged_in() ) { ?>






    <span class="mobile_login_button">
<!-- 	<a href="<?php echo site_url(); ?>/my-account">
My Account
</a> -->

<?php
// $url = site_url( '/my-account/', 'https' );
$url = site_url( '/my-account/' );
// echo $url;
?>

<!-- <a href="/my-account"> --> 

<!-- 	<a href="<?php echo $url ?>">
Make a Payment
</a> -->


<a href="<?php echo esc_url( network_home_url( '/my-account' ) ); ?>" rel="my-account">Make a Payment</a>

</span>






							
<?php }
 else { ?>

    <div class="mobile_login_button">
<!-- 	<a href="<?php echo site_url(); ?>/my-account">
My Account
</a> -->

<?php
// $url = site_url( '/my-account/', 'https' );
$url = site_url( '/my-account/' );
// echo $url;
?>

<!-- <a href="/my-account"> --> 
<!-- 	<a href="<?php echo $url ?>">
Make a Payment
</a> -->


<a href="<?php echo esc_url( network_home_url( '/my-account' ) ); ?>" rel="my-account">Make a Payment</a>

</div>
<?php }
?>

		<input type="checkbox" id="menu-open">
		<nav class="menu-list">
			<div id="main-nav_responsive">
				<div class="mobilemenu">
					<?php
					// GLOBAL NAV
					//store the current blog_id - Use this function at the start of the function that you want to share
					global $blog_id;
					$current_blog_id = $blog_id;
					//switch to the main blog which will have an id of 1
					switch_to_blog(1);
					//output the WordPress navigation menu - incase of menu-sharing use this
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
						//switch back to the current blog being viewed - before ending of the function
					switch_to_blog($current_blog_id); 
					?>
				</div>
			</div>
		</nav>
		<label for="menu-open" class="nav-btn">
			<span></span>
			<span></span>
			<span></span>
		</label>
		<div class="header_wrap_thankyou">

<div class="thankyou_img">
			<img src="https://cdn.copepsychiatry.com/wp-content/uploads/2019/02/thankyouheader.png" alt="">

		</div>


			<div class="col_1">
				<div class="logo">
					<?php
					global $blog_id;
					$current_blog_id = $blog_id;
					//switch to the main blog which will have an id of 1
					switch_to_blog(1);
					$logo = get_field('header_logo','option');
					if( !empty($logo) ): 
						// vars
						$url = $logo['url'];
						$title = $logo['title'];
						$alt = $logo['alt'];
						$caption = $logo['caption'];
						// thumbnail
						$size = 'large';
						$thumb = $logo['sizes'][ $size ];
						$width = $logo['sizes'][ $size . '-width' ];
						$height = $logo['sizes'][ $size . '-height' ];
						if( $caption ): ?>
						<?php endif; ?>
						<a href="<?php echo esc_url( network_home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
						</a>
						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php switch_to_blog($current_blog_id); ?>
					<?php endif; ?>
				</div>
			</div>

			


			<div class="col_2">
				

			</div>
		</div> <!-- header wrap -->
	</header><!-- #masthead -->
	<div id="content" class="site-content">