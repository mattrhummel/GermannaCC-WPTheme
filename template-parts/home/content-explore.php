<?php 
$explore_heading = get_field('explore_heading'); ?>

<section class="explore-germanna">
  <h2 class="text-center"><?php echo $explore_heading; ?></h2>
  <div class="row">
    <div class="container">
      
    <div class="small-12 medium-12 large-12 columns">
        <?php
        //Begin slider custom post type loop
        $loop = new WP_Query(array('post_type' =>'explore-slider',
                          'post_status' => 'publish',
                          'posts_per_page' => 24,
                          'caller_get_posts' => 1
                          ));
        ?>
        <div class='explore-slider-container'>
          <ul class='bxslider2'>
            <?php while ( $loop->have_posts() ) : $loop->the_post();
            $my_meta = get_post_meta( $post->ID, 'custom_link', true ); /*Gets custom link for each explore germanna image post */
            if( $my_meta && '' != $my_meta ) : ?>
           <li id="post-<?php the_ID(); ?>">
             <a href="<?php $my_meta ?>" >
                <?php if ( has_post_thumbnail() ) : /*Grabs the explore germanna post featured images*/
                the_post_thumbnail('explore-slider'); /*Displays post thumbnail */ ?>
                </a>
           </li>
            <?php endif; /*End of post thumbnail check*/ ?>
            <?php
            endif; /*End of Custom Link Check*/
            endwhile; ?>
          </ul>
          <div class="outside">
            <span id="slider-prev2"></span>
            <span id="slider-next2"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php wp_reset_postdata();
?>