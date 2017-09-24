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
<div class="row" role="navigation">
<div class="container">
  
  <div class="small-12 large-4 medium-12 columns">
      <a href="<?php echo esc_html('http://www.germanna.edu'); ?>" class="logo"><?php echo _e('Germanna Community College'); ?></a>
  </div>
  </div>
</div>
</div>

<div class="callout">
  <div class="row">
  <div class="container">
    
  <div class="callout-content">
   <div class="small-12 columns">
  	<h1><?php echo get_post_meta($post->ID, 'custom_header', true); ?></h1>
      <p class="lead">
          <?php echo get_post_meta($post->ID, 'custom_lead_header', true); ?>
      </p>
    </div>
  </div>   
  </div>
</div>
</div>

<div class="row">
<div class="container">
  
  <div class="request-info">
     
      <div class="row">
              
          <div class="small-12 medium-12 large-8 columns form-group">
     					
              <?php the_content(); ?>

 					</div>
              
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

              </div>
          </div>

      </div>
  </div>
</div>
</div>

<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_footer(); ?>