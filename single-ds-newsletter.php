<?php get_header(); ?>

<div class="row single-post-article no-padding-left" >
    <div class="small-12 large-12 columns no-padding-left" role="main">
        
        
    <?php while ( have_posts( ) ) : the_post ); ?>
    
         <article <?php post_class() ?> id="post-<?php the_ID(); ?>" >
			<?php do_action( 'foundationpress_before_content' ); ?>
            
            
           <header>
                <h1 class="no-margin-top"><?php the_title(); ?></h1>
               
                	<?php foundationpress_entry_meta(); ?>
                
                <?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		 </header>
        
<div class="small-12 medium-8 medium-push-4 large-8 columns large-push-4" role="main">
        
     
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
    
<?php get_template_part( 'parts/sidebars/disability-services-sidebar' ); ?> 
</div>
    
<?php do_action( 'foundationpress_after_sidebar' ); ?>   
</aside>


	      
    </div>
    
            
                
        </div>
        </div>
        
        
<!--.content loop-->
    



<!--.sidebars-->
<?php get_footer(); ?>
