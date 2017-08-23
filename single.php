<?php get_header(); ?>
<div class="row single-post-article no-padding-left" >
  <div class="container">
    <div class="small-12 large-12 columns no-padding-left" role="main">
      <?php get_template_part( 'parts/custom-banners/highlights-single-page' ); ?>
      
      <?php while ( have_posts() ) : the_post(); ?>
      
      <article <?php post_class() ?> id="post-<?php the_ID(); ?>" >
        <?php do_action( 'foundationpress_before_content' ); ?>
        
        
        <div class="small-12 medium-8 medium-push-4 large-8 columns large-push-4" role="main">
          
          <header>
            <?php the_title('<h2>', '</h2>');
            
            do_action( 'foundationpress_post_before_entry_content' );
            echo _e('<p>Post was written by <strong>'); the_author(); echo _e('</strong> on <strong>');
              the_date();
            _e('</strong></p>');  ?>
          </header>
          <hr >
          <?php the_content(); ?>
          
          
          <?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
          <nav id="post-nav">
            <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
            <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
          </nav>
          <?php } ?>
          
          
          <?php endwhile;?>
          
        </div>
        
      </article>
      
      
      <?php do_action( 'foundationpress_after_content' ); ?>
      
      <div  class="small-12 large-4 columns large-pull-8">
        
        <aside id="sidebar">
          <div>
            <?php do_action( 'foundationpress_before_sidebar' ); ?>
            <h3><?php echo _e('Around Germanna'); ?></h3>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
            'menu' => 'Global Menu', 'container' => 'true', 'menu_class' => 'submenu no-bullet' ) ); ?>
          </div>
          
          
          <div>
            <?php //custom department widgets
            dynamic_sidebar( 'sidebar-widgets' ); ?>
          </div>
          
          <?php do_action( 'foundationpress_after_sidebar' ); ?>
        </aside>
        
      </div>
      
    </div>
  </div>
</div>
<?php get_footer(); ?>