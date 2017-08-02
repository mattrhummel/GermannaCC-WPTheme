<?php
//Names the page template for each section
/*
Template Name: Search
*/
get_header(); ?>
<!--Page Sub Banner-->
<div class="row" role="banner">
	<div class="small-12 large-12 columns"  role="main">
		<h1>Search Results</h1>
	</div>
</div>
<!--.noimagebanner-->
<!--Content loop-->
<div class="row">
	
	<!--Page Content-->
	<div class="small-12 large-12 columns" role="main">
		
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
			<!--.content-->
			
		</article>
		<!--.article-->
		
		
		
		<?php endwhile; //Ends the loop ?>
		<?php do_action( 'foundationpress_after_content' ); ?>
	</div>
	
	<!--.content loop-->
	
</div>
<?php get_footer(); ?>