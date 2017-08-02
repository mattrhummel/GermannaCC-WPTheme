<?php get_header(); ?>

<div class="row" role="banner">
<div class="small-12 large-12 columns">
<h1><?php echo get_post_meta($post->ID, 'custom_header' , true);?></h1>
</div>
</div>

<!--Content loop-->
<div class="row">

<!--Page Content-->
<div class="small-12 large-8 columns large-push-4" role="main">
        
	<?php do_action( 'foundationpress_before_content' ); ?>

		<?php //start the loop 
        while ( have_posts() ) : the_post(); ?>
    
<!--Main Article-->
<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
            
<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
    
<div class="entry-content">
    
    <?php //Gets Page content 
     the_content(); ?>
    
</div>

<!--.content-->
            
<!--Get Page Tags-->          
<?php get_template_part( 'parts/page-tags' ); ?>
<!--.page tags-->
   
            
<!--Get Page Comments-->          
<?php get_template_part( 'parts/page-comments' ); ?>
<!--.page comments-->
            
</article>
<!--.article-->
    
    
<?php endwhile; //Ends the loop ?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>
<!--.content loop-->
    
    
<!--Get Page Sidebars-->
    
<?php get_sidebar(); ?>
<!--.sidebars-->

</div>


<?php get_footer(); ?>
