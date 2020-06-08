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
	<meta name="google-analytics-verification" content =““GooGhywoiu9839t543j0s7543uw1.  Please add gary@chorusy.com to GA account  UA-57385504-6. with “Manage Users and Edit” permissions - date 10/16/2019”>
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
	<header id="masthead" class="site-header">

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
My Account
</a> -->


<a href="<?php echo esc_url( network_home_url( '/my-account' ) ); ?>" rel="my-account">My Account</a>

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
My Account
</a> -->


<a href="<?php echo esc_url( network_home_url( '/my-account' ) ); ?>" rel="my-account">My Account</a>

</div>
<?php }
?>

		<input type="checkbox" id="menu-open">
		<nav class="menu-list">
			<div id="main-nav_responsive">
				<div class="mobilemenu">
					<?php
					// // GLOBAL NAV
					// //store the current blog_id - Use this function at the start of the function that you want to share
					// global $blog_id;
					// $current_blog_id = $blog_id;
					// //switch to the main blog which will have an id of 1
					// switch_to_blog(1);
					//output the WordPress navigation menu - incase of menu-sharing use this
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
						//switch back to the current blog being viewed - before ending of the function
					// switch_to_blog($current_blog_id); 
					?>
				</div>
			</div>
		</nav>
		<label for="menu-open" class="nav-btn">
			<span></span>
			<span></span>
			<span></span>
		</label>
		<div class="header_wrap">
			<div class="col_1">
				<div class="logo notlazy">
					<?php
					// global $blog_id;
					// $current_blog_id = $blog_id;
					// //switch to the main blog which will have an id of 1
					// switch_to_blog(1);
					$logo = get_field('header_logo','option');
					if( !empty($logo) ): 
						// vars
						$url = $logo['url'];
						$title = $logo['title'];
						$alt = $logo['alt'];
						$caption = $logo['caption'];
						// thumbnail
						$size = 'cope-logo2';
						$thumb = $logo['sizes'][ $size ];
						$width = $logo['sizes'][ $size . '-width' ];
						$height = $logo['sizes'][ $size . '-height' ];
						if( $caption ): ?>
						<?php endif; ?>
						<a href="<?php echo esc_url( network_home_url( '/' ) ); ?>" rel="home">
						<img class="notlazy" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
						</a>
						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php // switch_to_blog($current_blog_id); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col_2">
				<div class="utility_menu">
					<nav id="utility">
						<ul>
							<li>
								<div class="search">
									<form role="search" method="get" class="search-form" action="https://www.copepsychiatry.com/?s">
										<label>
											<input type="search" class="search-field" placeholder="Search" value="" name="s" title="Search efter:">
										</label>
										<input type="submit" class="search-submit" value="Search">
									</form>
								</div>
							</li>
							<li>
								<span class="telephone_number">
									<a href="tel:<?php echo the_field('phone_number', 'option'); ?>">
										<?php echo the_field('primary_phone_number', 'option'); ?>
									</a>
								</span>
							</li>
							<span class="social_icons">
								<?php
								// // GLOBAL NAV
								// //store the current blog_id - Use this function at the start of the function that you want to share
								// global $blog_id;
								// $current_blog_id = $blog_id;
								// //switch to the main blog which will have an id of 1
								// switch_to_blog(1);
								// //output the WordPress navigation menu - incase of menu-sharing use this

								// // $selected = get_field('social_media');


								// // $field = get_field_object('color', 'option');
								// // if( $field ):
								// // // echo '<ul>';
								// // 	var_dump($field);
								// // foreach ($field['choices'] as $value => $label) {
								// // // echo '<li><a target="_blank" href="',$value,'">',$label,'</a></li>';
								// // }
								// // endif;
								// // // echo '</ul>';


								$field = get_field_object('color', 'option'); 
								$colors = get_field('color', 'option');

								foreach($colors as $key => $val) {
								$label = $colors[$key];
								echo '<li><a target="_blank" href="',$val,'">';
								echo $field['choices'][$label]; 
								echo '</a></li>';
								// ,$label,'</a></li>';
								}

								// switch_to_blog($current_blog_id); 
								?>
							</span>
							<li>



<?php
if ( is_user_logged_in() ) { ?>






    <span class="login_button">
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
My Account
</a> -->


<a href="<?php echo esc_url( network_home_url( '/my-account' ) ); ?>" rel="my-account">My Account</a>

</span>






							
<?php }
 else { ?>

    <div class="login_button">
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
My Account
</a> -->


<a href="<?php echo esc_url( network_home_url( '/my-account' ) ); ?>" rel="my-account">My Account</a>

</div>
<?php }
?>





							</li>
						</ul>
					</nav>
				</div>
				<div class="desktopmenu">
					<?php
					// // GLOBAL NAV
					// //store the current blog_id - Use this function at the start of the function that you want to share
					// global $blog_id;
					// $current_blog_id = $blog_id;
					// //switch to the main blog which will have an id of 1
					// switch_to_blog(1);
					// //output the WordPress navigation menu - incase of menu-sharing use this
					wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					) );
					// //switch back to the current blog being viewed - before ending of the function
					// switch_to_blog($current_blog_id); 
					?>
				</div>
			</div>
		</div> <!-- header wrap -->
	</header><!-- #masthead -->
	<div id="content" class="site-content">