<!--Page Content-->
<div class="small-12 medium-8 medium-push-4 large-8 columns large-push-4" role="main">
	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php //start the loop
	while ( have_posts() ) : the_post(); ?>
	
	<!--Main Article-->
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>" >
		
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		
		<div class="entry-content" id="main">
			
			<?php //Gets Page content
			the_content(); ?>
			
			
			
		</div>
		<!--.content-->
		
	</article>
	<!--.article-->
	
	
	
	<?php endwhile; //Ends the loop ?>
	<?php do_action( 'foundationpress_after_content' ); ?>
</div>

<!--.content loop-->