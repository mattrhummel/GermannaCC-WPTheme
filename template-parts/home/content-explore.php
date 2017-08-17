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
        'posts_per_page' => 24,
        'caller_get_posts' => 1
        ));
        ?>
        
        <?php while ( $loop->have_posts() ) : $loop->the_post();
        
        $my_meta = get_post_meta( $post->ID, 'custom_link', true ); /*Gets custom link for each explore germanna image post */
        if( $my_meta && '' != $my_meta ) : ?>
        <div class="small-12 medium-6 large-6 columns explore" id="post-<?php the_ID(); ?>">
          <div class="small-12 columns explore-container">
            
            <div class="small-12 medium-12 large-4 columns explore-image">
              <?php if ( has_post_thumbnail() ) : /*Grabs the explore germanna post featured images*/
              the_post_thumbnail('post_thumbnail', ['class' => 'img-responsive']); /*Displays post thumbnail */ ?>
            </div>
            <div class="small-12 medium-12 large-8 columns explore-content">
              <?php the_title('<h3>', '</h3>');
               the_excerpt('<p>','</p>');
               ?>

              <a role="button" aria-label="<?php the_title(); echo _e('s Website') ?>" href="<?php echo $my_meta ?>" class="button tiny right"><?php echo _e('Learn More') ?></a>
              
            </div>
            
          </div>
        </div>
        <?php endif; /*End of post thumbnail check*/ ?>
        <?php
        endif; /*End of Custom Link Check*/
        endwhile; ?>
        
      </div>
    </div>
  </div>
</div>
</section>
<?php wp_reset_postdata();
?>