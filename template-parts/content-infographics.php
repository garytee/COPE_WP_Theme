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
			echo '<div class="single_infographic">';
      the_title( '<h1 class="entry-title">', '</h1>' ); 
      the_field('content'); 
      ?>



<?php if( have_rows('infographics') ): ?>

  <!-- <ul class="slides"> -->
    <div class="translate_dropdown">
    <select id="myselect1">

  <?php while( have_rows('infographics') ): the_row(); 

    // vars
    // $image = get_sub_field('image');
    // $content = get_sub_field('content');
    // $link = get_sub_field('link');

    $infographic_language = get_sub_field('infographic_language');

    ?>

    <!-- <li class="slide"> -->

      <?php if( $infographic_language ): ?>
        <!-- <a href="<?php echo $link; ?>"> -->
          <option value="<?php the_sub_field('infographic_language'); ?>"><?php the_sub_field('infographic_language'); ?></option>
      <?php endif; ?>

        <!-- <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /> -->

      <?php if( $link ): ?>
        </a>
      <?php endif; ?>

        <?php //echo $content; ?>


    <!-- </li> -->

  <?php endwhile; ?>

  <!-- </ul> -->
</select>
</div>

<?php endif; ?>




<?php if( have_rows('infographics') ): ?>



  <?php while( have_rows('infographics') ): the_row(); ?>

    
<?php


  // echo '<div class="widget"><h3 class="widgettitle">Downloads</h3><ul>';

$attachment_id = get_sub_field('upload_infographic');
 $url = wp_get_attachment_url( $attachment_id );
 // $title = get_the_title( $attachment_id );
$infographic_language = get_sub_field('infographic_language');
$infographic_image = get_sub_field('infographic_image');
$Download = 'Download';
$Print = 'Print';
?>




<?php
if( $infographic_language == 'English' ): 
// echo 'woooo!';
?>
 <div id="english" class="group2">
   <!-- English -->


   <div class="infographic_download_button">
    
      <?php
echo '<button class="download" type="button"><a target="_blank" class="download_pdf" href="' . $url . '" download><i class="fa fa-download" aria-hidden="true"></i>&nbsp;' . $Download . '</a></button>';
   ?>
</div>

   <div class="infographic_print_button">

   <button class="print" type="button" onclick="printJS('<?php echo $url;?>')">
    <i class="fa fa-print" aria-hidden="true"></i>&nbsp;Print PDF
 </button>

 <div id="main">
    <iframe id="my-iframe" style="display:none"></iframe>
</div>

<script type="text/javascript">
// window.onload = function() {
//     function print_pdf(url){
//         var id = "iframe", frame = document.createElement("iframe");
//         frame.setAttribute("id", id);
//         frame.setAttribute("width", "800px");
//         frame.setAttribute("height", "600px");
//         frame.setAttribute("allowfullscreen", "true");
//         frame.setAttribute("name", "printframe");
//         document.body.appendChild(frame);
//         frame.onload = function() {
//           this.requestFullScreen = this.mozRequestFullScreen || this.webkitRequestFullScreen;
//           this.requestFullScreen();
//           setTimeout(function() {
//             print()
//           },2000)
//         }
//         frame.setAttribute("src", url);
//     }
//     print_pdf("https://cdn.copepsychiatry.com/wp-content/uploads/2017/10/major-depression_eng.jpg");
// }
</script>
</div>




   <img src="<?php echo $infographic_image['url']; ?>" alt="<?php echo $infographic_image['alt'] ?>" />
   
</div>
<?php
endif;
?>



<?php
if( $infographic_language == 'Japanese' ): 
// echo 'woooo!';
?>
 <div id="japanese" class="group2">

<div class="infographic_download_button">
      <?php
echo '<span><a target="_blank" class="download_pdf" href="' . $url . '" download>' . $Download . '</a></span>';
   ?>
</div>

<div class="infographic_print_button">
<button type="button" onclick="printJS('<?php echo $url;?>')">
    Print PDF
 </button>
</div>

   

      <img src="<?php echo $infographic_image['url']; ?>" alt="<?php echo $infographic_image['alt'] ?>" />


</div>
<?php
endif;
?>






<?php
if( $infographic_language == 'Chinese' ): 
// echo 'woooo!';
?>
 <div id="chinese" class="group2">

<div class="infographic_download_button">
      <?php
echo '<span><a target="_blank" class="download_pdf" href="' . $url . '" download>' . $Download . '</a></span>';
   ?>
</div>

<div class="infographic_print_button">
<button type="button" onclick="printJS('<?php echo $url;?>')">
    Print PDF
 </button>
</div>

   

      <img src="<?php echo $infographic_image['url']; ?>" alt="<?php echo $infographic_image['alt'] ?>" />


</div>
<?php
endif;
?>






<?php
if( $infographic_language == 'Portuguese' ): 
// echo 'woooo!';
?>
 <div id="portuguese" class="group2">

<div class="infographic_download_button">
      <?php
echo '<span><a target="_blank" class="download_pdf" href="' . $url . '" download>' . $Download . '</a></span>';
   ?>
</div>

<div class="infographic_print_button">
<button type="button" onclick="printJS('<?php echo $url;?>')">
    Print PDF
 </button>
</div>

   

      <img src="<?php echo $infographic_image['url']; ?>" alt="<?php echo $infographic_image['alt'] ?>" />


</div>
<?php
endif;
?>




<?php
if( $infographic_language == 'Spanish' ): 
// echo 'woooo!';
?>
 <div id="spanish" class="group2">

<div class="infographic_download_button">
      <?php
echo '<span><a target="_blank" class="download_pdf" href="' . $url . '" download>' . $Download . '</a></span>';
   ?>
</div>

<div class="infographic_print_button">
<button type="button" onclick="printJS('<?php echo $url;?>')">
    Print PDF
 </button>
</div>

   

      <img src="<?php echo $infographic_image['url']; ?>" alt="<?php echo $infographic_image['alt'] ?>" />


</div>
<?php
endif;
?>




<?php
if( $infographic_language == 'French' ): 
// echo 'woooo!';
?>
 <div id="french" class="group2">

<div class="infographic_download_button">
      <?php
echo '<span><a target="_blank" class="download_pdf" href="' . $url . '" download>' . $Download . '</a></span>';
   ?>
</div>

<div class="infographic_print_button">
<button type="button" onclick="printJS('<?php echo $url;?>')">
    Print PDF
 </button>
</div>

   

      <img src="<?php echo $infographic_image['url']; ?>" alt="<?php echo $infographic_image['alt'] ?>" />


</div>
<?php
endif;
?>






  <?php endwhile; ?>



<?php endif; ?>

</div> <!-- single_infographic -->

  <footer class="entry-footer">
    <?php cope_entry_footer(); ?>
  </footer><!-- .entry-footer -->

      <?php
		else :
			// echo 'test';

      if (have_rows('infographics')) {
  while (have_rows('infographics')) {
    the_row();
    // code here to show image
    // echo the_sub_field('infographic_image');

    $infoimage = get_sub_field('infographic_image');
?>
<div class="infographic_archive_image">
    <img src="<?php echo $infoimage['url']; ?>" alt="<?php echo $infoimage['alt'] ?>" />
  </div>


    <?php
    // exit loop after first image
    break;
  }
}

			the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><h6 class="entry-title">', '</h6></a>' );

the_field('content');



echo the_sub_field('content');

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


</article><!-- #post-<?php the_ID(); ?> -->
