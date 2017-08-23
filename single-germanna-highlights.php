<?php get_header(); ?>
<div class="row single-post-article" >
  
  
  <div class="small-12 large-12 columns" role="main">
    
    
    <?php while ( have_posts() ) : the_post(); ?>
    
    <div class="small-12 medium-8 columns single-post">
      
      <article <?php post_class() ?> id="post-<?php the_ID(); ?>" >
        <?php do_action( 'foundationpress_before_content' ); ?>
        
        
        <header>
          <h1><?php the_title(); ?></h1>
          
          <?php foundationpress_entry_meta(); ?>
          
          <?php do_action( 'foundationpress_post_before_entry_content' ); ?>
          
          
        </header>
        
        
        <?php the_content(); ?>
        
        
        <?php endwhile;?>
        
        <footer>
          <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
          <p><?php the_tags(); ?></p>
        </footer>
        
        
        
      </article>
      
      
    </div>
    <?php do_action( 'foundationpress_after_content' ); ?>
    
    <div class="small-12 medium-4 columns">
      
      
      <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail('post-thumbnail', array( 'class' => "post-thumb th"), 'large'); ?>
      <?php endif; ?>
      
      
      <?php get_template_part( 'parts/sidebars/global-sidebar' ); ?>
      
    </div>
    
  </div>
</div>
<?php get_footer(); ?>