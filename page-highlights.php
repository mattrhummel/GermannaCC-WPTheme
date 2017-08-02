<?php
//Names the page template for each section
/*
Template Name: Blog
*/
get_header(); ?>
<?php get_template_part( 'parts/banners' ); ?>
<div class="row">
	<main class="small-12 large-12 columns" id="main" role="main">
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<?php
			$loop = new WP_Query(array('post_type' => 'germanna-workforce',
			'post_status' => 'published',
			'posts_per_page' => 12,
			'orderby' => 'menu_order',
			'caller_get_posts' => 1
			));
			?>
			<div class="small-12 medium-4">
				<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail('germanna-workforce'); ?>
				<?php endif; ?>
			</div>
			<div class="small-12 medium-8">
				<?php the_title('<h2>', '</h2>'); /*Get Excerpt Title*/ ?>
				<p><?php the_excerpt(); /*Display the excerpt*/ ?></p>
				<a href="<?php the_permalink(); /*Get Title Link*/ ?>" title="<?php the_title_attribute();?>" class="button" role="button" aria-label="Read more about<?php the_title();?>">Read More</a>
			</div>
			<?php  wp_reset_postdata(); ?>
			<?php get_template_part( 'parts/page-tags' ); ?>
			<?php get_template_part( 'parts/page-comments' ); ?>
		</article>
		<?php do_action( 'foundationpress_after_content' ); ?>
	</main>
	<?php get_template_part( 'parts/sidebars/workforce-sidebar' ); ?>
</div>
<?php get_footer(); ?>