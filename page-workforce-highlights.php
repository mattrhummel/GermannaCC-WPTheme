<?php
//Names the page template for each section
/*
Template Name: Workforce Highlights
*/
get_header(); ?>
<!--Get Page Banner-->
<?php get_template_part( 'parts/banners' ); ?>
<!--.banner-->
<!--Get Breadcrumbs-->
<?php get_template_part( 'parts/breadcrumbs' ); ?>
<!--.breadcrumbs-->

<div class="row single-post-article" >

    
<div class="small-12 large-8 large-push-4 columns" role="main">
  <?php do_action( 'foundationpress_before_content' ); ?>
  <?php //start the loop
  while ( have_posts() ) : the_post(); ?>
  <!--Main Article-->
  <article <?php post_class() ?> id="post-<?php the_ID(); ?>" >
    <?php do_action( 'foundationpress_page_before_entry_content' ); ?>

<?php 
 
//Define your custom post type name in the arguments
 
$args = array('post_type' => 'workforce-highlights');
 
//Define the loop based on arguments
 
$loop = new WP_Query( $args );
 
//Display the contents
 
while ( $loop->have_posts() ) : $loop->the_post();
?>

<?php if ( has_post_thumbnail() ) : ?>

<div class="small-12 medium-4 large-4 hide-for-small-only columns" style="padding-top: 10px;">
<?php the_post_thumbnail('workforce-highlights'); ?>
</div>
<?php endif; ?>

<div class="small-12 medium-8 large-8 columns">
<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p><strong><?php the_date(); ?></strong></p>
<?php the_excerpt(); ?>
</div>

<hr />


<?php endwhile;?>
     
<!--.content--> 
  </article>
  <!--.article-->
  <?php endwhile; //Ends the loop ?>
  <?php do_action( 'foundationpress_after_content' ); ?>
</div>


  
  <!--Get Page Sidebars-->
  <?php get_template_part( 'parts/sidebars/workforce-sidebar' ); ?>
  <!--.sidebars-->
</div>

<?php get_footer(); ?>