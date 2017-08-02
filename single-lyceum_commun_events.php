<?php get_header(); ?>

<div class="row single-post-article no-padding-left" >
<div class="small-12 large-12 columns no-padding-left" role="main">

<?php get_template_part( 'parts/custom-banners/lyceum-community-events-banner' ); ?>
             
<?php while ( have_posts( ) ) : the_post (); ?>
    
<article <?php post_class() ?> id="post-<?php the_ID(); ?>" >
<?php do_action( 'foundationpress_before_content' ); ?>
                      
<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		     
        
<div class="small-12 medium-8 medium-push-4 large-8 columns large-push-4" role="main">

<?php 

$button_text = get_field('button_text');
$community_event_url = get_field('community_event_url');


?>

<div class="panel">

<h2><?php the_title(); ?></h2>

<hr>

<div class="row">

<div class="small-12 medium-7 columns">

<?php the_content(); ?>


<?php if( !empty($button_text) ) : ?>
<a href="<?php echo $community_event_url; ?>" class="button button-default"target="_blank"><?php echo $button_text; ?></a>
<?php endif; ?>

</div>

<div class="small-12 medium-5 columns">
<?php
if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}
?>

</div>


</div>


</div>

<?php  wp_reset_query(); ?>
       
                         
</div>

			
               
  <?php endwhile;?>
  
  <?php do_action( 'foundationpress_after_content' ); ?>


  <!--Get Page Sidebars-->
    <?php get_template_part( 'parts/sidebars/lyceum-sidebar' ); ?>
    <!--.sidebars-->

 </article>

        </div>
        
        </div>
    

<!--.sidebars-->
<?php get_footer(); ?>
