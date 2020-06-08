<?php 
/*
Template Name: COVID-19
*/
get_header(); ?>
<!-- <section id="homepage_content" role="main"> -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div class="covid-19-page">

  <div class="covid-hero">

    <img class="covid-hero-img" src="https://cdn.copepsychiatry.com/wp-content/uploads/2020/05/05232854/covidheroimg.jpg" alt="">

  </div>

  <div class="row">

<div class="col">
<h3>Current Issue</h3>
<p>Concerns around COVID-19 and its impact on our health and economy may lead to mental health concerns, including anxiety, depression, 
adjustment disorders, and unhealthy behaviors such as excessive substance use, aggression, or unhealthy eating habits.</p>

<h3>Solution</h3>
<p>The Centers of Psychiatric Excellence (COPE) has developed an 
individualized therapy for mental health issues related to or 
exacerbated by COVID-19.  COPE’s model is based on Acceptance 
and Commitment Therapy (ACT), mindfulness-based stress reduction (MBSR), resiliency training, and crisis counseling. This treatment is administered in six weekly individual therapy sessions (40 – 50 mins) 
by COPE-trained therapists via a telehealth platform. </p>

<h3>Costs</h3>
<p>Insurance will be billed for reimbursement for the teletherapy sessions. There may be a co-payment per session based on the insurance coverage.</p>

<h3>Goal of Therapy</h3>
<p>This treatment regimen is specifically designed to help patients adapt 
to the negative emotions and behaviors associated with COVID-19 concerns. COPE’s unique approach allows individuals to learn values that inform and guide healthy behavioral decisions and improve their resilience during these challenging times. </p>
</div>

<div class="col">

  <img src="https://cdn.copepsychiatry.com/wp-content/uploads/2020/05/05235936/covid-bg.png" alt="">

</div>

  </div>


</div>


<?php endwhile; endif; ?>



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





<?php get_footer(); ?>