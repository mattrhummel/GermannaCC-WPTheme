<?php get_header(); ?>
<div class="row">
    <div class="container">
	<?php the_title('<h1>', '</h1>');?>
    
	
	<main class="small-12 large-8 columns large-push-4"  id="main">
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
</div>
<?php get_footer(); ?>