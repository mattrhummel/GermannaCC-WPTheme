<div class="small-12 large-8 columns" role="main">
	
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