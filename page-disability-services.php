<?php
//Names the page template for each section
/*
Template Name: Disability Services
*/
get_header(); ?>
<?php get_template_part( 'parts/banners' ); ?>
<div class="row">
<div class="container">
	
<div class="small-12 large-12 columns">
<?php // Gets the alert custom post type id for each sub page needing special announcement
$post_id = 5460;
$queried_post = get_post($post_id);
			$content = $queried_post->post_content;
			$content = apply_filters('the_content', $content);
			if ($content) { ?>
<div class='alert-box alert'>
<?php echo "$content"; ?>
<a href='#' class='close' aria-hidden="true" role="button"><span class='icon-remove-circle'></span></a></div>
<?php
}
else {
}
?>
</div>



<div class="small-12 medium-8 medium-push-4 large-8 columns large-push-4">
<?php do_action( 'foundationpress_before_content' ); ?>
<?php //start the loop
while ( have_posts() ) : the_post(); ?>

<article <?php post_class() ?> id="post-<?php the_ID(); ?>" >

<main class="entry-content" id="main" role="main">

<?php do_action( 'foundationpress_page_before_entry_content' ); ?>

<?php //Gets Page content
the_content(); ?>

<?php endwhile; //Ends the loop ?>
<?php do_action( 'foundationpress_after_content' ); ?>

</main>

</article>


</div>

<?php get_template_part( 'parts/sidebars/disability-services-sidebar' ); ?>

</div>
</div>
<?php get_footer(); ?>