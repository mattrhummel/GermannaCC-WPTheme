<?php
//Names the page template for each section
/*
Template Name: Library Services
*/
get_header(); ?>
<!--Get Page Banner-->
<?php get_template_part( 'parts/banners' ); ?>
<!--.banner-->
<!--Content loop-->
<div class="row">
	
	<!--Get Breadcrumbs-->
	<?php get_template_part( 'parts/breadcrumbs' ); ?>
	<!--.breadcrumbs-->
	<!--Page Content-->
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
			<!--.content-->
			
			
		</article>
		<!--.article-->
		
		
		<?php endwhile; //Ends the loop ?>
		<?php do_action( 'foundationpress_after_content' ); ?>
	</div>
	<!--.content loop-->
	
	
	<!--Get Page Sidebars-->
	<?php get_template_part( 'parts/sidebars/library-sidebar' ); ?>
	<!--.sidebars-->
</div>
<?php get_footer(); ?>