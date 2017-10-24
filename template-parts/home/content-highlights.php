<?php
$highlights_heading = get_field('highlights_heading');
$highlights_button_text = get_field('highlights_button_text');
$highlights_button_url = get_field('highlights_button_url');
?>
<section class="module parallax parallax-1 no-margin">
  <div class="row">
   <div class="highlights">
     
    <div class="container">
      
      <h2 class="text-center"><?php echo $highlights_heading; ?></h2>
      
      <?php
      $args = array( 'post_type' => 'post', 'posts_per_page' => 4, 'orderby' => 'post_id',
      );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      ?>
      
      <div class="small-12 medium-6 columns">
        <div id="post-<?php the_ID(); ?>" class="latest-post">
          
          <div class="content">

            <?php the_title('<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' ); /*Get Excerpt Title*/
            the_excerpt(); ?>
            
          </div>
          <div class="meta-data">
            <hr />
            <span class="fa fa-calendar" aria-hidden="true"></span>
            <span class="post-date"><?php the_time('F Y'); ?></span>

            <a href="<?php echo esc_url( get_permalink() )  ?>" class="button button-primary tiny pull-right"><?php _e('Read More', 'foundationpress') ?> <span class="show-for-sr"> <?php _e('about', 'foundationpres'); ?>about the topic this article is pertaining to.</span></a>

          </div>
        </div>
      </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
  
  </div>
  </div>
  <div class="row text-center">
    <div class="container">
      <a class="button read-more" href="<?php echo $highlights_button_url; ?>"><?php echo $highlights_button_text; ?></a>
    </div>
 </div>
</section>