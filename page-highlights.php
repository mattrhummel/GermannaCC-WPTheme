<?php
//Names the page template for each section
/*
Template Name: Blog
*/
get_header(); ?>
<!--Get Page Banner-->
<?php get_template_part( 'parts/banners' ); ?>
<!--.banner-->
<!--Content loop-->
<div class="row">
  <!--Page Content-->
  <div class="small-12 large-12 columns" role="main">
    
    <!--Main Article-->
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      
    

      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>



         <?php
          
          $loop = new WP_Query(array('post_type' => 'germanna-workforce',
                        'post_status' => 'published',
                        'posts_per_page' => 12,
                        'orderby' => 'menu_order',
                        'caller_get_posts' => 1
                        ));
      ?>
        
        <div class="small-12 medium-4 large-4">
          
          <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail('germanna-workforce'); ?>
          <?php endif; ?>
          
        </div> 
        
        <div class="small-12 medium-8 large-8">
          
          <h2>
          <?php the_title(); /*Get Excerpt Title*/ ?>
          </h2>
          
          
          <p><?php the_excerpt(); /*Display the excerpt*/ ?></p>
          
          <a href="<?php the_permalink(); /*Get Title Link*/ ?>" title="<?php the_title_attribute();?>" class="button">Read More</a>
          
          
        </div>
      
      <?php  wp_reset_postdata(); ?>
      
      
      <!--.content-->
      
      <!--Get Page Tags-->
      <?php get_template_part( 'parts/page-tags' ); ?>
      <!--.page tags-->
      
      
      <!--Get Page Comments-->
      <?php get_template_part( 'parts/page-comments' ); ?>
      <!--.page comments-->
      
    </article>
    <!--.article-->
    
    
    <?php do_action( 'foundationpress_after_content' ); ?>
  </div>
  <!--.content loop-->
  
  
  <!--Get Page Sidebars-->
  <?php get_template_part( 'parts/sidebars/workforce-sidebar' ); ?>
  <!--.sidebars-->
</div>
<?php get_footer(); ?>