<main class="small-12 medium-8 medium-push-4 large-8 columns large-push-4" id="main" >
	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php //start the loop
	while ( have_posts() ) : the_post(); ?>
	
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		
		<div class="entry-content">
			
			<?php //Gets Page content
			the_content(); ?>
			
			
		</div>
		
	</article>
	
	<?php endwhile; //Ends the loop ?>
	<?php do_action( 'foundationpress_after_content' ); ?>
</main>