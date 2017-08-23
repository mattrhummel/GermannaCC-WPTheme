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
        'posts_per_page' => -1,
        'caller_get_posts' => 1
        ));
        ?>
        
        <?php while ( $loop->have_posts() ) : $loop->the_post();

        $department_blurb = get_field('department_blurb');
        
        $my_meta = get_post_meta( $post->ID, 'custom_link', true ); /*Gets custom link for each explore germanna image post */
        if( $my_meta && '' != $my_meta ) : ?>
        <div class="small-12 medium-6 large-4 columns explore" id="post-<?php the_ID(); ?>">
          <div class="small-12 columns explore-container">
            
            <div class="small-12 columns explore-image" aria-hidden="true" aria-label="section image">
              <?php if ( has_post_thumbnail() ) : /*Grabs the explore germanna post featured images*/
              the_post_thumbnail(); /*Displays post thumbnail */ ?>
            </div>
            <div class="small-12 columns explore-content">
             <h3><a href="<?php echo $my_meta; ?>" aria-label="<?php the_title(); echo _e('Website') ?>" role="link"><?php the_title(); ?></a></h3>
              
              <p><?php echo $department_blurb; ?></p>
              
            </div>
            <a role="button" aria-label="<?php the_title(); echo _e('s Website') ?>" href="<?php echo $my_meta ?>" class="button tiny"><?php echo _e('Learn More') ?></a>
            
          </div>
        </div>
        <?php endif; /*End of post thumbnail check*/ ?>
        <?php
        endif; /*End of Custom Link Check*/
        endwhile; ?>
        
      </div>
    </div>
  </div>
</section>
<?php wp_reset_postdata(); ?>