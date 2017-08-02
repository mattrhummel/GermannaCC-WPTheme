<?php get_header(); ?>

<div class="row single-post-article no-padding-left" >
<div class="small-12 large-12 columns no-padding-left" role="main">

<?php get_template_part( 'parts/custom-banners/lyceum-events-banner' ); ?>
             
<?php while ( have_posts( ) ) : the_post (); ?>
    
<article <?php post_class() ?> id="post-<?php the_ID(); ?>" >
<?php do_action( 'foundationpress_before_content' ); ?>
                      
<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		     
        
<div class="small-12 medium-8 medium-push-4 large-8 columns large-push-4" role="main">

<?php 

$event_date = get_field('event_date');
$event_time = get_field('event_time');
$event_location = get_field('event_location');
$event_contact = get_field('event_contact');
$contact_email = get_field('contact_email');
$contact_phone = get_field('contact_phone');
$button_text = get_field('button_text');
$event_url = get_field('event_url');

?>

<div class="panel" itemscope itemtype="http://schema.org/Event">

<h2 itemprop="name"><?php the_title(); ?></h2>

<hr>

<div class="row">

<div class="small-12 medium-7 columns" itemprop="thumbnail">
<?php
if ( has_post_thumbnail() ) {
  the_post_thumbnail();
} else {
  ?><p>Photo Coming Soon</p>
<?php } ?>


</div>

<div class="small-12 medium-5 columns">

<?php if( !empty($event_date) ) : ?>
<p style="font-size: 1em; padding-top: 10px;" itemprop="startDate"><strong>Date:</strong> <?php echo $event_date; ?><br/>
<?php endif; ?></p>

<?php if( !empty($event_time) ) : ?>
<p><strong>Time:</strong> <?php echo $event_time; ?><br/>
<?php endif; ?></p>

<?php if( !empty($event_location) ) : ?>
<p itemprop="location"><strong>Location:</strong> <?php echo $event_location; ?><br/>
<?php endif; ?></p>

<?php if( !empty($event_contact) ) : ?>
<p><strong>Contact:</strong> <br/><?php echo $event_contact; ?><br/><?php echo $contact_phone; ?><br/> <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email ?></a><br/>
<?php endif; ?></p>

<?php if( !empty($button_text) ) : ?>
<a href="<?php echo $event_url; ?>" class="button button-default"target="_blank"><?php echo $button_text; ?></a>
<?php endif; ?>

</div>

</div>

<?php if ( $post->post_content!=="" ) {  ?>
  
<h3 style="padding-top: 12px">About</h3>

<div itemprop="description">

<?php the_content(); ?>

</div>

<?php } ?>


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
