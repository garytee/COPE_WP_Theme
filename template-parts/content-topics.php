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
    if ( 'post' === get_post_type() ) : ?>
    <div class="entry-meta">
      <?php cope_posted_on(); ?>
    </div><!-- .entry-meta -->
    <?php
    endif; 



			the_title( '<h1 class="entry-title">', '</h1>' );
      // the_post_thumbnail( 'single-post-thumbnail' );


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

    
      the_content();
		else :


?>


      <style type="text/css">
    #instructions {
    max-width: 640px;
    text-align: left;
    margin: 0px auto;
  }
  
  #instructions textarea {
    width: 100%;
    height: 100px;
  }
  /* Show the controls (hidden at the start by default) */
  
  .video-js .vjs-control-bar {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
  /* Make the demo a little prettier */
.video-js .vjs-big-play-button {
  text-align: center;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 33% !important;
    background: transparent !important;
    height: 150px !important;
    width: 150px !important;
    border-radius: 50% !important;
    color: #000000 !important;
    border-color: #000000 !important;
    border: 15px solid #000000 !important;
    opacity: 0.5 !important;
  }

  .vjs-poster{
    background-size: cover !important;
  }

  .video_wrapper{
    overflow: hidden;
    margin: 0 auto;
    max-width: 960px;
  }

  .video_wrapper .left_col{
    display: block;
    float: left;
    width:33%;
  }

    .video_wrapper .right_col{
    display: block;
    float: right;
    width:66%;
  }

  .video_topics{
        background: #e5e3df;
    padding: 10px;
  }

  .vidlinkwrapper{
    overflow: hidden;
    width: 100%;
    margin-top: 40px;
  }

  #vidlink div{
    width: 33%;
    float: left;
  }
/*  body {
    background: #222;
    text-align: center;
    color: #aaa;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    background: radial-gradient(#333, hsl(200, 30%, 6%));
  }
  
  a,
  a:hover,
  a:visited {
    color: #76DAFF;
  }*/


.vjs-big-play-button:before{
    top: 30% !important;
    font-size: 85px;
}

</style>

<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      ?>



      <div class="video_wrapper">

  <div class="left_col">

<div class="topics">

  <div class="topicstitle"><h2>TOPICS</h2></div>

<?php
// $categories = get_categories();
// foreach($categories as $category) {
//    echo '<div class="category"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
// }

$terms = get_terms('topics');
    // foreach ( $terms as $term ) {
    //     echo $term->name . ", ";
    // }
foreach ($terms as $term) {
    echo '<div><a class="no-smoothstate" href="'.get_term_link($term).'">'.$term->name.'</a></div>';
}



?>

</div>

</div>

<div class="right_col">

<div id="instructions">
  <video id="vid1" title="Ketamine for Treating Depression" class="video-js vjs-default-skin vjs-fluid" controls width="640" height="264"></video>

    <div id="vid_title">
    <!-- Ketamine for Treating Depression -->
    <?php the_title(); ?>
  </div>

<div class="vidlinkwrapper">



  <div id="vidlink">
    <!-- <li><a id="myLink" title="Click video" href="http://podcast.rickygervais.com/rickyandpepe_twitter.mp4">Play .MP4</a></li> -->

<div><a class="no-smoothstate" id="myLink" title="Ketamine for Treating Depression" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/02_Ketamine-for-Treating-Bipolar-Depression.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/11/Screen-Shot-2017-11-30-at-2.13.31-PM.png" alt=""><br>
  <!-- Ketamine for Treating Depression -->
  <?php the_title(); ?>
</a></div>
    


        <!-- <div><a id="myLink" title="Click video" href="https://assets3.ign.com/videos/zencoder/2016/06/15/640/7080c56a76e2b74ec8ecfe4c224441d4-500000-1466028542-w.mp4">Play .MP4</a></div> -->


<div><a class="no-smoothstate" id="myLink" title="Ketamine for Treating Depression 2" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/02_Ketamine-for-Treating-Bipolar-Depression.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/11/Screen-Shot-2017-11-30-at-2.13.31-PM.png" alt=""><br>Ketamine for Treating Depression 2</a></div>

 <!--    <li><a id="myLink" title="Click video" href="https://www.youtube.com/watch?v=kkGeOWYOFoA">Play Youtube 1</a></li>
    <li><a id="myLink" title="Click video" href="https://www.youtube.com/watch?v=Ie8olvmaZug">Play Youtube 2</a></li>
    <li><a id="myLink" title="Click video" href="http://www.france24.com/static/podcast/fr/REPORTAGES/videos/DN096980-A-01-20141211.m4v">Play .M4V</a></li>

    <li><a id="myLink" title="Click video" href="http://video.webmfiles.org/big-buck-bunny_trailer.webm">Play .webm</a></li>
    <li><a id="myLink" title="Click video" href="http://playertest.longtailvideo.com/adaptive/bbbfull/bbbfull.m3u8">Play .m3u8 streaming</a></li>
    <li><a id="myLink" title="Click video" href="http://techslides.com/demos/sample-videos/small.flv">Play .FLV (Do not work on JSFiddle)</a></li> -->
  </div>
<!--   Audio:
<audio id="audio_example" class="video-js vjs-default-skin" controls 
  preload="auto" width="300" height="300" 
  poster="http://www.maninblack.org/demos/ManinblackSitDownShutUp.jpg" data-setup='{}'>
  <source src="http://www.maninblack.org/demos/SitDownShutUp.mp3" type='audio/mp3'/>
</audio>  -->
</div>

</div>

</div>
</div>






<script type="text/javascript">

/* VIDEOJS */
// declare object for video
var vgsPlayer, poster;
/*
vgsPlayer = videojs('vid1', {
  techOrder: ['youtube'],
  autoplay: false,
  sources: [{
    type: "video/youtube",
    src: "https://www.youtube.com/watch?v=xjS6SftYQaQ"
  }]
});
*/

vgsPlayer = videojs('vid1', {
  techOrder: ["html5", "flash", "youtube"],
  autoplay: false,
  youtube: { "iv_load_policy": 3 },
  sources: [{
      type: "video/mp4",
      // src: "https://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4"
      src: "https://www.copepsychiatry.com/wp-content/uploads/2017/12/02_Ketamine-for-Treating-Bipolar-Depression.mp4"
    }]
});

// vgsPlayer.poster('https://img.youtube.com/vi/aqz-KE-bpKQ/maxresdefault.jpg');
//vgsPlayer.poster("http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4")

vgsPlayer.poster('https://www.copepsychiatry.com/wp-content/uploads/2017/11/Screen-Shot-2017-11-30-at-2.13.31-PM.png');

//videojs("vid1").ready(function() {
//  vgsPlayer = this;
//});

// jQuery(function($) {
  jQuery(document).ready(function($) {

  // vsgLoadVideo("https://www.youtube.com/watch?v=r1H98REH0c0");
  // Video on page load

  //jQuery(document).ready(function($) {

  $("#vsg-loadvideo").submit(function(e) {
    e.preventDefault();

    var vidURL = $("#vsg-vurl").val();

    vsgLoadVideo(vidURL);

  });

}); // jQuery(function($) END


function vsgLoadVideo(vidURL, poster) {

  if (ytVidId(vidURL) !== false) {
    ext = "youtube"
    console.log('Youtube');

    // alert(getId(vidURL)) // Youtube video ID
    //var yvID = getId(vidURL);
    //vidURL = "https://www.youtube.com/watch?v="+yvID;

  } else {

    //$("#vid1 iframe, #vid1 .vjs-iframe-blocker").remove();

    if (!ext) ext = "mp4";
    var ext = vidURL.split('.').pop();
  }

  console.log(ext);

  vgsPlayer.src({
    //"techOrder": ['youtube'],
    "type": "video/" + ext,
    "src": vidURL
    //"youtube": { "iv_load_policy": 3 }
  });
  if (poster) vgsPlayer.poster(poster);
  vgsPlayer.play();

}


function ytVidId(url) {
  //var p = /^(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?(?=.*v=((\w|-){11}))(?:\S+)?$/;
  var p = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
  return (url.match(p)) ? RegExp.$1 : false;
}

/**/
function getId(url) {
  var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
  var match = url.match(regExp);

  if (match && match[2].length == 11) {
    return match[2];
  } else {
    return 'error';
  }
}

/********* LOAD URL *********/
jQuery(document).ready(function($) {
$('#vidlink a').on('click', function(e) {
  e.preventDefault();
  var vidlink = $(this).attr('href');
// var vidlink = $(this).attr('title');
var vidtitle = $(this).attr('title');
  vsgLoadVideo(vidlink);
  // $('#vsg-vurl').val(vidlink);
  $('#vsg-vurl').val(vidtitle);
// $('#vid_title').val(vidtitle);

$( "div#vid_title" ).text(vidtitle);

});
});

</script>



    
    <?php
		endif;


    ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			// the_content( sprintf(
			// 	wp_kses(
			// 		/* translators: %s: Name of current post. Only visible to screen readers */
			// 		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cope' ),
			// 		array(
			// 			'span' => array(
			// 				'class' => array(),
			// 			),
			// 		)
			// 	),
			// 	get_the_title()
			// ) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cope' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->






	<footer class="entry-footer">
		<?php cope_entry_footer(); ?>
	</footer>

  <!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
