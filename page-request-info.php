<?php
//Names the page template for each section
/*
Template Name: Request Information
*/
$students_name	= get_field('students_name');
$students_title	= get_field('students_title');
$students_image	= get_field('students_image');
$students_quote	= get_field('students_quote');

get_header('requestinfo'); ?>

<!--Get Page Banner-->
<div class="banner sticky">
<div class="row" data-topbar role="navigation" data-options="sticky_on: large">
  <div class="small-12 large-4 medium-12 columns">
      <a href="http://www.germanna.edu" class="logo">Germanna Community College</a>
  </div>
</div>
</div>
<!--.banner-->

<!--Header for page heading-->
<div class="callout">
  <div class="row">
  <div class="callout-content">
  	<h1><?php echo get_post_meta($post->ID, 'custom_header', true); ?></h1>
      <p class="lead">
          <?php echo get_post_meta($post->ID, 'custom_lead_header', true); ?>
      </p>
  </div>   
  </div>
</div>
<!--.header-->


<!--Request Information Template Container-->



<!--Request Information Template Container-->
<div class="row">
<div class="contain-to-grid">
  
  <div class="request-info">
     
      <div class="row">
              
      <!--Request Form-->
          <div class="small-12 medium-12 large-8 columns form-group no-padding">
     					
              <?php the_content(); ?>

 					</div><!--.requestform-->

              
              <!--Testimonials-->
          <div class="small-12 medium-12 large-4 columns testimonials show-for-medium-up">
              <div class="panel  radius">
                  <!--Start bxslider slides-->
                  <div class="bxslider-testimonials">
                      <!--Bxslider Slide-->
                      <?php $loop = new WP_Query( array( 'post_type' => 'request_info_slider', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
                      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                      <div class="row collapse slide-pane">
                          <div class="small-2 medium-4 columns">
                              <div class="thumbnail">
                                  <?php 
				$students_image = get_field('students_image');
				if( !empty($students_image) ): ?>
                                  <img src="<?php echo $students_image['url']; ?>" alt="<?php echo $students_image['alt']; ?>" />
                                  <?php endif; ?>
                              </div>
                          </div>
                          <div class="small-10 medium-8 columns student-info">
                              <h4 class="student-name"><?php echo get_field( 'students_name' ); ?></h4>
                              <p class="student-alumni">
                                  <?php echo get_field( 'students_title' ); ?>
                              </p>
                              <div class="student-quote">
                                  <blockquote>
                                      <?php echo  get_field( 'students_quote' ); ?>
                                  </blockquote>
                              </div>
                          </div>
                      </div>
                      <?php endwhile; wp_reset_query(); ?>
                  </div>
                  <!--end slides-->
              </div>
          </div><!--.testimonials-->

      </div>
  </div>
</div>
</div>



<!--.request information-->
<?php do_action( 'foundationpress_after_content' ); ?>
<!--.content loop-->
<?php get_footer(); ?>
