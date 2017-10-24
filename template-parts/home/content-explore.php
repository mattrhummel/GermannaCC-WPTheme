<?php
$explore_heading = get_field('explore_heading'); ?>
<section class="explore-germanna">
<h2 class="text-center"><?php echo $explore_heading; ?></h2>
<div class="row">
<div class="container">

<div class="small-12 columns">
  <?php
  //Begin slider custom post type loop
  $loop = new WP_Query(array('post_type' =>'explore-slider',
  'post_status' => 'publish',
  'posts_per_page' => -1
  ));
  ?>

  <?php while ( $loop->have_posts() ) : $loop->the_post();
  $department_blurb = get_field('department_blurb');
  $department_link = get_field('department_link');  ?>
  
  
  <div class="small-12 medium-6 large-4 columns explore" id="post-<?php the_ID(); ?>">
    <div class="small-12 columns explore-container">
      
      <div class="small-12 columns explore-image" aria-hidden="true" aria-label="section image">
        <a href="<?php echo $department_link; ?>">
          <?php if ( has_post_thumbnail() ) : /*Grabs the explore germanna post featured images*/
          the_post_thumbnail(); /*Displays post thumbnail */ ?>
        </a>
      </div>
       
    </div>
  </div>
  
  <?php
  endif; /*End of Custom Link Check*/
  endwhile; ?>
  
</div>
</div>
</div>
</section>
<?php wp_reset_postdata(); ?>