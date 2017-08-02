<?php get_header(); ?>
<div class="row" role="banner">
	<div class="small-12 large-12 columns">
		<h1><?php echo get_post_meta($post->ID, 'custom_header' , true);?></h1>
	</div>
</div>
<div class="row">
	<main class="small-12 large-8 columns large-push-4" role="main" id="main">
		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php //start the loop
		while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>" role="article">
			
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php //Gets Page content
				the_content(); ?>
			</div>
			<?php get_template_part( 'parts/page-tags' ); ?>
			
		</article>
		<?php endwhile; //Ends the loop ?>
		<?php do_action( 'foundationpress_after_content' ); ?>
	</main>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>