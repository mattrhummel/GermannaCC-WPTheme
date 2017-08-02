<?php get_header(); ?>

<div class="row single-post-article no-padding-left" >
<div class="small-12 large-12 columns no-padding-left" role="main">

<?php get_template_part( 'parts/custom-banners/lyceum-performances-banner' ); ?>
             
<?php while ( have_posts( ) ) : the_post (); ?>
    
<article <?php post_class() ?> id="post-<?php the_ID(); ?>" >
<?php do_action( 'foundationpress_before_content' ); ?>
                      
<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		     
        
<div class="small-12 medium-8 medium-push-4 large-8 columns large-push-4" role="main">

<?php 

$button_text = get_field('button_text');
$performer_url = get_field('performer_url');

?>

<div class="panel">

<h2><?php the_title(); ?></h2>

<hr>

<div class="row">

<div class="small-12 medium-7 columns">

<?php the_content(); ?>


<?php if( !empty($button_text) ) : ?>
<a href="<?php echo $performer_url; ?>" class="button button-default"target="_blank"><?php echo $button_text; ?></a>
<?php endif; ?>

</div>

<div class="small-12 medium-5 columns">
<?php
if ( has_post_thumbnail() ) {
the_post_thumbnail();
}
?>

<?php if( !empty($event_date) ) : ?>
<p style="font-size: 1em; padding-top: 10px;"><strong>Date:</strong> <?php echo $event_date; ?><br/>
<?php endif; ?>

<?php if( !empty($event_time) ) : ?>
<strong>Time:</strong> <?php echo $event_time; ?><br/>
<?php endif; ?>

<?php if( !empty($event_location) ) : ?>
<strong>Location:</strong> <?php echo $event_location; ?></p>
<?php endif; ?>
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
