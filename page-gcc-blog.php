<?php
//Names the page template for each section
/*
Template Name: GCC Blog
*/
get_header(); ?>
<?php get_template_part( 'parts/banners' ); ?>
<div class="row">
<div class="container">
	
	<main class="small-12 medium-8 medium-push-4 large-8 columns large-push-4" id="main" role="main">
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2>Germanna Highlights Latest News</h2>
			<?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 10, 'orderby' => 'post_id', 'order' => 'DES',  ) ); ?>
			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
			<h4><a href="<?php echo get_post_permalink() ?>" ><?php the_title(); ?></a></h4>
			<?php endwhile; wp_reset_query(); ?>
			<hr />
			<?php $loop = new WP_Query( array( 'post_type' => 'workforce-highlights', 'posts_per_page' => 5, 'orderby' => 'post_id', 'order' => 'ASC',  ) ); ?>
			<h2>Workforce Highlights</h2>
			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
			<h4><a href="<?php echo get_post_permalink() ?>" ><?php the_title(); ?></a></h4>
			<?php endwhile; wp_reset_query(); ?>
			<hr/>
			<?php $loop = new WP_Query( array( 'post_type' => 'ds_newsletter', 'posts_per_page' => 3, 'orderby' => 'post_id', 'order' => 'ASC',  ) ); ?>
			<h2>Disability Services Newsletters</h2>
			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
			<h4>
			<a href="<?php echo get_post_permalink() ?>" ><?php the_title(); ?></a></h4>
			<?php endwhile; wp_reset_query(); ?>
		</article>
		<?php do_action( 'foundationpress_after_content' ); ?>
</main>
	<?php get_template_part( 'sidebar' ); ?>
</div>
</div>
<?php get_footer(); ?>