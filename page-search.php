<?php
//Names the page template for each section
/*
Template Name: Search
*/
get_header(); ?>
<div class="row">
	<div class="container">
		
			<?php the_title('<h1>', '</h1>') ?>

        <main class="small-12 large-12 columns"  id="main">
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
			</article>
			<?php endwhile; //Ends the loop ?>
			<?php do_action( 'foundationpress_after_content' ); ?>
		</main>
        
	</div>
</div>
<?php get_footer(); ?>