<?php
//Names the page template for each section
/*
Template Name: Foundation Highlights
*/
get_header(); ?>
<!--Get Page Banner-->
<?php get_template_part( 'parts/banners' ); ?>
<!--.banner-->

<!--Get Breadcrumbs-->
<?php get_template_part( 'parts/breadcrumbs' ); ?>
<!--.breadcrumbs-->
<div class="row">
	<div class="small-12 large-12 columns" role="main">
		<!--Page Content-->
		<div class="small-12 large-8 columns" role="main">
			
			<?php do_action( 'foundationpress_before_content' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
			
			
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				
				
				
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				
				
				
				<footer>
					<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
					<p><?php the_tags(); ?></p>
				</footer>
				
				
				<?php do_action( 'foundationpress_page_before_comments' ); ?>
				<?php comments_template(); ?>
				<?php do_action( 'foundationpress_page_after_comments' ); ?>
			</article>
			
			
			<?php endwhile;?>
			<?php do_action( 'foundationpress_after_content' ); ?>
		</div>
	</div>
</div>
<!--Get Page Sidebars-->
<?php get_template_part( 'parts/sidebars/edfoundation-sidebar' ); ?>
<!--.sidebars-->
</div>
<!--Get Extras-->
<?php get_template_part( 'parts/extras' ); ?>
<!--.extras-->
<?php get_footer(); ?>