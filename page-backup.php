<?php get_header(); ?>
<div id="homepage-hero" role="banner">
	<div class="row">
		<div class="small-12 large-12 columns">
			<h1 class="entry-title"  itemprop="name"><?php echo get_post_meta($post->ID, 'custom_header' , true);?></h1>
		</div>
	</div>
</div>
<div class="row">
	<div class="small-12 large-8 columns" role="main">
		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
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
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>