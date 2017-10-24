<?php get_header(); ?>
<div class="row single-post-article no-padding-left" >
    <div class="container">
  <div class="small-12 large-12 columns no-padding-left" role="main">
    <?php get_template_part( 'parts/custom-banners/veterans-newsletter-banner' ); ?>
    
    <?php while ( have_posts( ) ) : the_post (); ?>
    
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>" >
      <?php do_action( 'foundationpress_before_content' ); ?>
      
      <?php do_action( 'foundationpress_post_before_entry_content' ); ?>
      <div class="small-12 medium-8 medium-push-4 large-8 columns large-push-4" role="main">
        <?php the_title('<h2>', '</h2>');
        echo _e('<p>Post was written by <strong>'); the_author(); echo _e('</strong> on <strong>');
          the_date();
        _e('</strong></p>');  ?>
        <hr />
        
        <?php the_content(); ?>
        
        <?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
        <nav id="post-nav">
          <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
          <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
        </nav>
        <?php } ?>
        
        
        <?php endwhile;?>
        
        <?php do_action( 'foundationpress_after_content' ); ?>
      </div>
      <?php get_template_part( 'parts/sidebars/veterans-newsletter-sidebar' ); ?>
    </article>
  </div>
        </div>
</div>

<?php get_footer(); ?>