<?php
//Names the page template for each section
/*
Template Name: Foundation Highlights
*/
get_header(); ?>
<?php get_template_part( 'parts/banners' ); ?>
<div class="row">
	<div class="container">
		
		<main  class="small-12 large-8 columns" role="main" id="main">
			<?php do_action( 'foundationpress_before_content' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<header>
					<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
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
		</main>
	</div>
	<?php get_template_part( 'parts/sidebars/edfoundation-sidebar' ); ?>
</div>
</div>
<?php get_footer(); ?>