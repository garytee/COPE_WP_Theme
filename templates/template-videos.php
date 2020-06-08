<?php 
/*
Template Name: Videos
*/
get_header(); ?>

<style type="text/css">

#howdoesketaminework{
  display: none;
}

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
    padding: 1px 20px;
    margin: 0px 20px;
  }

  .vidlinkwrapper{
    overflow: hidden;
    width: 100%;
    /*margin-top: 20px;*/
    /*For footer fix*/
        height: 100%;
    min-height: 624px;
  }

/*  #vidlink div{
    width: 33%;
    float: left;
    padding: 0px 7px 20px;
  }*/

  #vidlink div {
    /* width: 33%; */
    /* float: left; */
    padding: 0 7px 20px;
    display: inline-block;
    width: 33%;
    vertical-align: top;
}

    #vidlink div a{
color: #4f4f51;
font-size:18px;
  }

  #vid_title {
    margin: 20px 0;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 20px;
    letter-spacing: 1px;
    color: #434343;
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

.topicstitle h2{
  font-weight: bold;
  font-size: 26px;
  margin: 10px 0px;
}

.video_topics .col{
  cursor: pointer;
    padding: 7px 0;
  font-size: 20px;
  color: #4F4F51;
}

.video_topics .active{
  font-weight: bold;
      color: #3d4c9a;
}

</style>
<!-- <section id="homepage_content" role="main"> -->
<div class="video_wrapper">



   <div class="left_col">

  <div class="video_topics">
    <div class="topicstitle">
      <h2>VIDEO TOPICS</h2>
    </div>
<!--     <div class="category">
      <a href="#">What is Ketamine</a>
    </div>
    <div class="category">
      <a href="#">How Does Ketamine Work?</a>
    </div>
    <div class="category">
      <a href="#">Ketamine FAQs</a>
    </div>
    <div class="category">
      <a href="#">Ketamine for Depression</a>
    </div>
    <div class="category">
      <a href="#">Ketamine for Anxiety Disorders</a>
    </div>
    <div class="category">
      <a href="#">Ketamine for Chronic Pain</a>
    </div>
    <div class="category">
      <a href="#">Ketamine for Substance Abuse</a>
    </div>
    <div class="category">
      <a href="#">Side Effects of Ketamine
      </a>
    </div> -->

      <!-- <div id="allbtn" class="col">All</div> -->

  <div id="whatisketaminebtn" class="col">What is Ketamine?</div>
  <div id="howdoesketamineworkbtn" class="col">How Does Ketamine Work?</div>
  <div id="ketaminefaqsbtn" class="col">Ketamine FAQs</div>
  <div id="ketaminefordepressionbtn" class="col">Ketamine For Depression</div>
  <div id="ketamineforanxietybtn" class="col">Ketamine For Anxiety Disorder</div>
  <div id="ketamineforchronicpainbtn" class="col">Ketamine For Chronic Pain</div>
  <div id="ketaminesubstanceabusebtn" class="col">Ketamine and Substance Abuse</div>
  <div id="ketaminesideeffectsbtn" class="col">Side Effects of Ketamine</div>

</div>

</div>






<div class="right_col">




<div id="instructions">
  <video id="vid1" title="Ketamine for Treating Depression" class="video-js vjs-default-skin vjs-fluid" controls width="640" height="264"></video>

    <div id="vid_title">
    What is Ketamine?
  </div>





      <div id="whatisketamine">

<div class="vidlinkwrapper">



  <div id="vidlink">


    <div><a class="no-smoothstate" id="myLink" title="What is Ketamine?" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/05_What-is-Ketamine.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Masand.png" alt=""><br>What is Ketamine?</a></div>

<!-- 
<div><a class="no-smoothstate" id="myLink" title="Ketamine for Treating Depression" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/01_Ketamine-for-Treating-Depression.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/11/Screen-Shot-2017-11-30-at-2.13.31-PM.png" alt=""><br>What is Ketamine 1</a></div>
    




<div><a class="no-smoothstate" id="myLink" title="Ketamine for Treating Depression" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/01_Ketamine-for-Treating-Depression.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/11/Screen-Shot-2017-11-30-at-2.13.31-PM.png" alt=""><br>What is Ketamine 2</a></div> -->


  </div>

</div>

</div>

</div>
</div>









</div> 
<!-- what is ketamine? -->








 <div id="howdoesketaminework">


<div class="video_wrapper">



<div class="right_col">

<div id="instructions">
<!--   <video id="vid1" title="Ketamine for Treating Depression" class="video-js vjs-default-skin vjs-fluid" controls width="640" height="264"></video>

    <div id="vid_title">
    What is Ketamine?
  </div> -->

<div class="vidlinkwrapper">



  <div id="vidlink">


<div><a class="no-smoothstate" id="myLink" title="How Does Ketamine Work?" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/10_How-does-Ketamine-Work.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Iosifescu.png" alt=""><br>How Does Ketamine Work?</a></div>

<div><a class="no-smoothstate" id="myLink" title="Ketamine Beneficial Effects" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/03_Ketamine-Beneficial-Effects.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Goldberg.png" alt=""><br>Ketamine Beneficial Effects</a></div>

<div><a class="no-smoothstate" id="myLink" title="Ketamine Modulates Glutamate" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/04_Ketamine-Modulates-Glutamate.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Iosifescu.png" alt=""><br>Ketamine Modulates Glutamate</a></div>

<div><a class="no-smoothstate" id="myLink" title="Ketamine Modulates Synaptic Plasticity" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/05_Ketamine-Modulates-Synaptic-Plasticity.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Iosifescu.png" alt=""><br>Ketamine Modulates Synaptic Plasticity</a></div>


  </div>

</div>

</div>

</div>
</div>




</div> 
<!-- how does ketamine work? -->







<div id="ketaminefaqs">


<div class="video_wrapper">



<div class="right_col">

<div id="instructions">
<!--   <video id="vid1" title="Ketamine for Treating Depression" class="video-js vjs-default-skin vjs-fluid" controls width="640" height="264"></video>

    <div id="vid_title">
    What is Ketamine?
  </div> -->

<div class="vidlinkwrapper">



  <div id="vidlink">


<div><a class="no-smoothstate" id="myLink" title="Why Intravenous Ketamine?" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/01_Why-Intravenous-Ketamine.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Goldberg.png" alt=""><br>Why Intravenous Ketamine?</a></div>

<div><a class="no-smoothstate" id="myLink" title="Can Ketamine be Taken Orally?" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/10_Can-Ketamine-be-Taken-Orally.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Goldberg.png" alt=""><br>Can Ketamine be Taken Orally?</a></div>

<div><a class="no-smoothstate" id="myLink" title="Why Low Doses of Ketamine?" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/04_Why-Low-Doses-of-Ketamine.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Goldberg.png" alt=""><br>Why Low Doses of Ketamine?</a></div>

<div><a class="no-smoothstate" id="myLink" title="Ketamine Response Rate" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/06_Ketamine-Response-Rate.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Iosifescu.png" alt=""><br>Ketamine Response Rate</a></div>


<div><a class="no-smoothstate" id="myLink" title="How Many Ketamine Injections Do I Need ?" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/07_How-Many-Injections-Do-I-Need.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Iosifescu.png" alt=""><br>How Many Ketamine Injections Do I Need ?</a></div>

<div><a class="no-smoothstate" id="myLink" title="Do Some Patients Need Long Term Maintainence Ketamine?" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/09_Do-Some-Need-Long-Term-Maintainence.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Iosifescu.png" alt=""><br>Do Some Patients Need Long Term Maintainence Ketamine?</a></div>

<div><a class="no-smoothstate" id="myLink" title="What Do We Do After a Successful Treatment with Ketamine?" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/11_What-Do-We-Do-After-a-Successful-Treatment.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Iosifescu.png" alt=""><br>What Do We Do After a Successful Treatment with Ketamine?</a></div>

<div><a class="no-smoothstate" id="myLink" title="What if Ketamine Doesn't Work for Me?" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/06_What-if-Ketamine-Doesnt-Work.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Goldberg.png" alt=""><br>What if Ketamine Doesn't Work for Me?</a></div>


  </div>

</div>

</div>

</div>
</div>




</div> 
<!-- ketamine faqs -->






<div id="ketaminefordepression">


<div class="video_wrapper">



<div class="right_col">

<div id="instructions">
<!--   <video id="vid1" title="Ketamine for Treating Depression" class="video-js vjs-default-skin vjs-fluid" controls width="640" height="264"></video>

    <div id="vid_title">
    What is Ketamine?
  </div> -->

<div class="vidlinkwrapper">



  <div id="vidlink">


<div><a class="no-smoothstate" id="myLink" title="Ketamine for Treating Depression" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/01_Ketamine-for-Treating-Depression.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Iosifescu.png" alt=""><br>Ketamine for Treating Depression</a></div>

<div><a class="no-smoothstate" id="myLink" title="Ketamine for Treating Bipolar Depression" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/02_Ketamine-for-Treating-Bipolar-Depression.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Iosifescu.png" alt=""><br>Ketamine for Treating Bipolar Depression</a></div>

<div><a class="no-smoothstate" id="myLink" title="Augmenting Antidepressant Treatment with Ketamine" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/08_Augmenting-Antidepressant-Treatment.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Iosifescu.png" alt=""><br>Augmenting Antidepressant Treatment with Ketamine</a></div>

<div><a class="no-smoothstate" id="myLink" title="Ketamine for Treating Suicidal Ideation" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/01_Ketamine-for-Treating-Suicidal-Ideation.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Masand.png" alt=""><br>Ketamine for Treating Suicidal Ideation</a></div>




  </div>

</div>

</div>

</div>
</div>




</div> 
<!-- ketamine for depression -->






<div id="ketamineforanxiety">


<div class="video_wrapper">



<div class="right_col">

<div id="instructions">
<!--   <video id="vid1" title="Ketamine for Treating Depression" class="video-js vjs-default-skin vjs-fluid" controls width="640" height="264"></video>

    <div id="vid_title">
    What is Ketamine?
  </div> -->

<div class="vidlinkwrapper">



  <div id="vidlink">


<div><a class="no-smoothstate" id="myLink" title="Ketamine for Treating Anxiety Disorders" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/03_Ketamine-for-Treating-Anxiety-Disorders.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Iosifescu.png" alt=""><br>Ketamine for Treating Anxiety Disorders</a></div>

<div><a class="no-smoothstate" id="myLink" title="Ketamine for PTSD" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/02_Ketamine-for-PTSD.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Masand.png" alt=""><br>Ketamine for PTSD</a></div>

<div><a class="no-smoothstate" id="myLink" title="Ketamine for Refractory GAD and SAD" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/03_Ketamine-for-Refractory-GAD-and-SAD.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Masand.png" alt=""><br>Ketamine for Refractory GAD and SAD</a></div>

<div><a class="no-smoothstate" id="myLink" title="Ketamine for OCD" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/04_Ketamine-for-OCD.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Masand.png" alt=""><br>Ketamine for OCD</a></div>




  </div>

</div>

</div>

</div>
</div>




</div> 
<!-- ketamine for anxiety disorders -->





<div id="ketamineforchronicpain">


<div class="video_wrapper">



<div class="right_col">

<div id="instructions">
<!--   <video id="vid1" title="Ketamine for Treating Depression" class="video-js vjs-default-skin vjs-fluid" controls width="640" height="264"></video>

    <div id="vid_title">
    What is Ketamine?
  </div> -->

<div class="vidlinkwrapper">



  <div id="vidlink">


<div><a class="no-smoothstate" id="myLink" title="What is the Evidence for Ketamine in Chronic Pain?" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/04_Evidence-for-Ketamine-in-Chronic-Pain.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Patkar.png" alt=""><br>What is the Evidence for Ketamine in Chronic Pain?</a></div>






  </div>

</div>

</div>

</div>
</div>




</div> 
<!-- ketamine for chronic pain -->






<div id="ketaminesubstanceabuse">


<div class="video_wrapper">



<div class="right_col">

<div id="instructions">
<!--   <video id="vid1" title="Ketamine for Treating Depression" class="video-js vjs-default-skin vjs-fluid" controls width="640" height="264"></video>

    <div id="vid_title">
    What is Ketamine?
  </div> -->

<div class="vidlinkwrapper">



  <div id="vidlink">


<div><a class="no-smoothstate" id="myLink" title="Ketamine and Opiod Exposure" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/05_Ketamine-and-Opiod-Exposure.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Patkar.png" alt=""><br>Ketamine and Opiod Exposure</a></div>

<div><a class="no-smoothstate" id="myLink" title="Sustance Abuse Concerns and Ketamine" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/07_Sustance-Abuse-Concerns.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Goldberg.png" alt=""><br>Sustance Abuse Concerns and Ketamine</a></div>






  </div>

</div>

</div>

</div>
</div>




</div> 
<!-- ketamine for substance abuse -->






<div id="ketaminesideeffects">


<div class="video_wrapper">



<div class="right_col">

<div id="instructions">
<!--   <video id="vid1" title="Ketamine for Treating Depression" class="video-js vjs-default-skin vjs-fluid" controls width="640" height="264"></video>

    <div id="vid_title">
    What is Ketamine?
  </div> -->

<div class="vidlinkwrapper">



  <div id="vidlink">


<div><a class="no-smoothstate" id="myLink" title="Ketamine Side Effects" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/02_Ketamine-Side-Effects.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Goldberg.png" alt=""><br>Ketamine Side Effects</a></div>

<div><a class="no-smoothstate" id="myLink" title="Dissociation and Ketamine " href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/05_Dissociation-and-Ketamine.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Goldberg.png" alt=""><br>Dissociation and Ketamine</a></div>

<div><a class="no-smoothstate" id="myLink" title="Are There Long Term Side Effects of Ketamine?" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/09_Are-There-Long-Term-Side-Effects.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Goldberg.png" alt=""><br>Are There Long Term Side Effects of Ketamine?</a></div>

<div><a class="no-smoothstate" id="myLink" title="Cardiovascular Concerns and Ketamine" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/08_Cardiovascular-Concerns.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Goldberg.png" alt=""><br>Cardiovascular Concerns and Ketamine</a></div>

<div><a class="no-smoothstate" id="myLink" title="What are Symptoms of Ketamine Intoxication?" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/02_Symptoms-of-Ketamine-Intoxication.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Patkar.png" alt=""><br>What are Symptoms of Ketamine Intoxication?</a></div>

<div><a class="no-smoothstate" id="myLink" title="What is the Abuse Liability of Ketamine?" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/01_What-is-the-Abuse-Liability.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Patkar.png" alt=""><br>What is the Abuse Liability of Ketamine?</a></div>

<div><a class="no-smoothstate" id="myLink" title="How Can You Minimize Addiction Risk with Ketamine?" href="https://www.copepsychiatry.com/wp-content/uploads/2017/12/03_Can-You-Minimize-Addiction-Risk.mp4"><img src="https://www.copepsychiatry.com/wp-content/uploads/2017/12/Patkar.png" alt=""><br>How Can You Minimize Addiction Risk with Ketamine?</a></div>





  </div>

</div>

</div>

</div>
</div>




</div> 
<!-- ketamine side effects -->




  <?php if ( get_edit_post_link() ) : ?>
    <footer class="entry-footer">
      <?php
        edit_post_link(
          sprintf(
            wp_kses(
              /* translators: %s: Name of current post. Only visible to screen readers */
              __( 'Edit <span class="screen-reader-text">%s</span>', 'cope' ),
              array(
                'span' => array(
                  'class' => array(),
                ),
              )
            ),
            get_the_title()
          ),
          '<span class="edit-link animated fadeInUp">',
          '</span>'
        );
      ?>
    </footer><!-- .entry-footer -->
  <?php endif; ?>








<script type="text/javascript">

/* VIDEOJS */
// declare object for video
var vgsPlayer, poster;

vgsPlayer = videojs('vid1', {
  techOrder: ["html5", "flash", "youtube"],
  autoplay: false,
  youtube: { "iv_load_policy": 3 },
  sources: [{
      type: "video/mp4",
      src: "https://www.copepsychiatry.com/wp-content/uploads/2017/12/05_What-is-Ketamine.mp4"
    }]
});



vgsPlayer.poster('https://www.copepsychiatry.com/wp-content/uploads/2017/12/Masand.png');


function vsgLoadVideo(vidURL, poster) {

  if (ytVidId(vidURL) !== false) {
    ext = "youtube"
    console.log('Youtube');



  } else {


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

// vgsPlayer.show();

// $('#vid_title').show();

});
});

</script>








<script type="text/javascript">
jQuery(document).ready(function($) {


$('#howdoesketaminework').hide();
$('#ketaminefaqs').hide();
$('#ketaminefordepression').hide();
$('#ketamineforanxiety').hide();
$('#ketamineforchronicpain').hide();
$('#ketaminesubstanceabuse').hide();
$('#ketaminesideeffects').hide();


$('#whatisketaminebtn').addClass("active");


    $("#howdoesketamineworkbtn").click(function(){
        $('#howdoesketaminework').show();
        $('#whatisketamine').hide();
        $('#ketaminefaqs').hide();
        $('#ketaminefordepression').hide();
        $('#ketamineforanxiety').hide();
        $('#ketamineforchronicpain').hide();
        $('#ketaminesubstanceabuse').hide();
        $('#ketaminesideeffects').hide();


// $('#howdoesketamineworkbtn').addClass("active");
// $('#whatisketaminebtn').removeClass("active");


        $('#howdoesketamineworkbtn').addClass('active');
        $('#whatisketaminebtn').removeClass('active');
        $('#ketaminefaqsbtn').removeClass('active');
        $('#ketaminefordepressionbtn').removeClass('active');
        $('#ketamineforanxietybtn').removeClass('active');
        $('#ketamineforchronicpainbtn').removeClass('active');
        $('#ketaminesubstanceabusebtn').removeClass('active');
        $('#ketaminesideeffectsbtn').removeClass('active');



// vgsPlayer.pause();

// vgsPlayer.hide();

// $('#vid_title').hide();

// vgsPlayer.poster('https://www.copepsychiatry.com/wp-content/uploads/2017/11/Screen-Shot-2017-11-30-at-2.13.31-PM.png');

// var oldPlayer = document.getElementById('vid1');
// videojs(oldPlayer).dispose();

    });


        $("#whatisketaminebtn").click(function(){

        $('#howdoesketaminework').hide();
        $('#whatisketamine').show();
        $('#ketaminefaqs').hide();
        $('#ketaminefordepression').hide();
        $('#ketamineforanxiety').hide();
        $('#ketamineforchronicpain').hide();
        $('#ketaminesubstanceabuse').hide();
        $('#ketaminesideeffects').hide();

//         $('#howdoesketamineworkbtn').removeClass("active");
// $('#whatisketaminebtn').addClass("active");


        $('#howdoesketamineworkbtn').removeClass('active');
        $('#whatisketaminebtn').addClass('active');
        $('#ketaminefaqsbtn').removeClass('active');
        $('#ketaminefordepressionbtn').removeClass('active');
        $('#ketamineforanxietybtn').removeClass('active');
        $('#ketamineforchronicpainbtn').removeClass('active');
        $('#ketaminesubstanceabusebtn').removeClass('active');
        $('#ketaminesideeffectsbtn').removeClass('active');


//         vgsPlayer.pause();

// vgsPlayer.poster('https://www.copepsychiatry.com/wp-content/uploads/2017/12/Screen-Shot-2017-12-01-at-10.45.43-AM.png');



    });




        $("#ketaminefaqsbtn").click(function(){

        $('#howdoesketaminework').hide();
        $('#whatisketamine').hide();
        $('#ketaminefaqs').show();
        $('#ketaminefordepression').hide();
        $('#ketamineforanxiety').hide();
        $('#ketamineforchronicpain').hide();
        $('#ketaminesubstanceabuse').hide();
        $('#ketaminesideeffects').hide();


//         $('#howdoesketamineworkbtn').removeClass("active");
// $('#ketaminefaqsbtn').addClass("active");
// $('#whatisketaminebtn').removeClass("active");



        $('#howdoesketamineworkbtn').removeClass('active');
        $('#whatisketaminebtn').removeClass('active');
        $('#ketaminefaqsbtn').addClass('active');
        $('#ketaminefordepressionbtn').removeClass('active');
        $('#ketamineforanxietybtn').removeClass('active');
        $('#ketamineforchronicpainbtn').removeClass('active');
        $('#ketaminesubstanceabusebtn').removeClass('active');
        $('#ketaminesideeffectsbtn').removeClass('active');


//         vgsPlayer.pause();

// vgsPlayer.poster('https://www.copepsychiatry.com/wp-content/uploads/2017/12/Screen-Shot-2017-12-01-at-10.45.43-AM.png');



    });


                $("#ketaminefordepressionbtn").click(function(){

        $('#howdoesketaminework').hide();
        $('#whatisketamine').hide();
        $('#ketaminefaqs').hide();
        $('#ketaminefordepression').show();
        $('#ketamineforanxiety').hide();
        $('#ketamineforchronicpain').hide();
        $('#ketaminesubstanceabuse').hide();
        $('#ketaminesideeffects').hide();



                $('#howdoesketamineworkbtn').removeClass('active');
        $('#whatisketaminebtn').removeClass('active');
        $('#ketaminefaqsbtn').removeClass('active');
        $('#ketaminefordepressionbtn').addClass('active');
        $('#ketamineforanxietybtn').removeClass('active');
        $('#ketamineforchronicpainbtn').removeClass('active');
        $('#ketaminesubstanceabusebtn').removeClass('active');
        $('#ketaminesideeffectsbtn').removeClass('active');



//         vgsPlayer.pause();

// vgsPlayer.poster('https://www.copepsychiatry.com/wp-content/uploads/2017/12/Screen-Shot-2017-12-01-at-10.45.43-AM.png');



    });

                                $("#ketamineforanxietybtn").click(function(){

        $('#howdoesketaminework').hide();
        $('#whatisketamine').hide();
        $('#ketaminefaqs').hide();
        $('#ketaminefordepression').hide();
        $('#ketamineforanxiety').show();
        $('#ketamineforchronicpain').hide();
        $('#ketaminesubstanceabuse').hide();
        $('#ketaminesideeffects').hide();


                $('#howdoesketamineworkbtn').removeClass('active');
        $('#whatisketaminebtn').removeClass('active');
        $('#ketaminefaqsbtn').removeClass('active');
        $('#ketaminefordepressionbtn').removeClass('active');
        $('#ketamineforanxietybtn').addClass('active');
        $('#ketamineforchronicpainbtn').removeClass('active');
        $('#ketaminesubstanceabusebtn').removeClass('active');
        $('#ketaminesideeffectsbtn').removeClass('active');



//         vgsPlayer.pause();

// vgsPlayer.poster('https://www.copepsychiatry.com/wp-content/uploads/2017/12/Screen-Shot-2017-12-01-at-10.45.43-AM.png');



    });



$("#ketamineforchronicpainbtn").click(function(){

        $('#howdoesketaminework').hide();
        $('#whatisketamine').hide();
        $('#ketaminefaqs').hide();
        $('#ketaminefordepression').hide();
        $('#ketamineforanxiety').hide();
        $('#ketamineforchronicpain').show();
        $('#ketaminesubstanceabuse').hide();
        $('#ketaminesideeffects').hide();



                $('#howdoesketamineworkbtn').removeClass('active');
        $('#whatisketaminebtn').removeClass('active');
        $('#ketaminefaqsbtn').removeClass('active');
        $('#ketaminefordepressionbtn').removeClass('active');
        $('#ketamineforanxietybtn').removeClass('active');
        $('#ketamineforchronicpainbtn').addClass('active');
        $('#ketaminesubstanceabusebtn').removeClass('active');
        $('#ketaminesideeffectsbtn').removeClass('active');



//         vgsPlayer.pause();

// vgsPlayer.poster('https://www.copepsychiatry.com/wp-content/uploads/2017/12/Screen-Shot-2017-12-01-at-10.45.43-AM.png');



    });


$("#ketaminesubstanceabusebtn").click(function(){

        $('#howdoesketaminework').hide();
        $('#whatisketamine').hide();
        $('#ketaminefaqs').hide();
        $('#ketaminefordepression').hide();
        $('#ketamineforanxiety').hide();
        $('#ketamineforchronicpain').hide();
        $('#ketaminesubstanceabuse').show();
        $('#ketaminesideeffects').hide();



                $('#howdoesketamineworkbtn').removeClass('active');
        $('#whatisketaminebtn').removeClass('active');
        $('#ketaminefaqsbtn').removeClass('active');
        $('#ketaminefordepressionbtn').removeClass('active');
        $('#ketamineforanxietybtn').removeClass('active');
        $('#ketamineforchronicpainbtn').removeClass('active');
        $('#ketaminesubstanceabusebtn').addClass('active');
        $('#ketaminesideeffectsbtn').removeClass('active');



//         vgsPlayer.pause();

// vgsPlayer.poster('https://www.copepsychiatry.com/wp-content/uploads/2017/12/Screen-Shot-2017-12-01-at-10.45.43-AM.png');



    });



$("#ketaminesideeffectsbtn").click(function(){

        $('#howdoesketaminework').hide();
        $('#whatisketamine').hide();
        $('#ketaminefaqs').hide();
        $('#ketaminefordepression').hide();
        $('#ketamineforanxiety').hide();
        $('#ketamineforchronicpain').hide();
        $('#ketaminesubstanceabuse').hide();
        $('#ketaminesideeffects').show();

        // $('#ketaminesideeffectsbtn').addClass("active");


        $('#howdoesketamineworkbtn').removeClass('active');
        $('#whatisketaminebtn').removeClass('active');
        $('#ketaminefaqsbtn').removeClass('active');
        $('#ketaminefordepressionbtn').removeClass('active');
        $('#ketamineforanxietybtn').removeClass('active');
        $('#ketamineforchronicpainbtn').removeClass('active');
        $('#ketaminesubstanceabusebtn').removeClass('active');
        $('#ketaminesideeffectsbtn').addClass('active');


//         vgsPlayer.pause();

// vgsPlayer.poster('https://www.copepsychiatry.com/wp-content/uploads/2017/12/Screen-Shot-2017-12-01-at-10.45.43-AM.png');



    });




    // $("#alumfriendsbtn").click(function(){
    //     $('#allevents').hide();
    //     $('#alumfriendslist').show();
    //     $('#currentstudents').hide();
    //     $('#prospstud').hide();


    // });

    //     $("#currstudentsbtn").click(function(){
    //     $('#allevents').hide();
    //     $('#alumfriendslist').hide();
    //     $('#currentstudents').show();
    //     $('#prospstud').hide();



    // });

    //     $("#allbtn").click(function(){
    //     $('#allevents').show();
    //     $('#alumfriendslist').hide();
    //     $('#currentstudents').hide();
    //     $('#prospstud').hide();



    // });

    //         $("#prospstudbtn").click(function(){
    //     $('#prospstud').show();
    //     $('#allevents').hide();
    //     $('#alumfriendslist').hide();
    //     $('#currentstudents').hide();


    // });


});
</script>


<?php get_footer(); ?>