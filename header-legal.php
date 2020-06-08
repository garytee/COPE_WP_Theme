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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		paceOptions = {
        ajax: true, // disabled
        document: false, // enabled
        eventLag: true, // disabled
        elements: {
        	selectors: ['.site-content']
        }
    };
});
</script>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cope' ); ?></a>
	<header id="masthead" class="site-header">

<!-- <ul id="menu-lateral" class="menu"> -->

<input type="checkbox" id="menu-open">
    <!-- <nav class="menu-list"> -->

<?php
// wp_nav_menu( array(
// 	'theme_location' => 'menu-1',
// 	'menu_id'        => 'primary-menu',
// ) );
?>

<!-- <div id="main-nav_responsive"> -->
  <!-- <div class="mobilemenu"> -->
    <!-- <ul class="menu"> -->
      <!-- <li>
        <a href="#">Specialties</a>  -->
          <!-- <ul class="sub-menu">
            <li><a href="#" >Consumer Packaged Goods</a></li>
            <li><a href="#" >Grocery Stores</a></li>
            <li><a href="#" >Resorts + Hospitality</a></li>
            <li><a href="#" >Education</a></li>
            <li><a href="#" >New Product Development</a></li>
          </ul>
        </li>
              
              
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-522"><a href="#" >Services</a>
<ul class="sub-menu">
    
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-523"><a href="#" >Advertising</a></li>
    
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-538"><a href="#" >Branding</a></li>
    
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-524"><a href="#" >PR</a></li>
    
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-525"><a href="#" >Online</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-527"><a href="#" >Events</a></li>
</ul>
</li>
              
              
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-643"><a href="#" >Results</a></li>
              
              
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-645"><a href="#" >About</a>
    
<ul class="sub-menu">
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-531"><a href="#" >Who We Are</a></li>
    
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-532"><a href="#" >How We Work</a></li>
    
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-533"><a href="#" >Blog</a></li>
</ul>
</li>
              
              
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-534"><a href="#" >Contact</a>
<ul class="sub-menu">
    
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-535"><a href="#" >Careers</a></li>
</ul>
</li>
</ul> -->


<?php
// wp_nav_menu( array(
// 	'theme_location' => 'menu-1',
// 	'menu_id'        => 'primary-menu',
// ) );
?>

<!-- </div> -->


	  <!-- </nav> -->
<!-- 	  <label for="menu-open" class="nav-btn">
    	<span></span>
    	<span></span>
      <span></span>
    </label> -->

<!-- </ul> -->


		<div class="header_wrap" style="width: 100%;">
			<div class="col_1" style="width: 100%; float: none;">
				<div class="logo" style="text-align: center; margin: 0 auto;">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
<?php

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

  ?>

    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

                          <?php endif; ?>

                    </a>
				</div>
			</div>
			<div class="col_2">
				
<!-- 				<div class="desktopmenu">
					<nav id="site-navigation" class="main-navigation">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</nav>
				</div> -->
			</div>
		</div> <!-- header wrap -->
	</header><!-- #masthead -->
	<div id="content" class="site-content">
