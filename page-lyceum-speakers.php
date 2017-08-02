<?php
//Names the page template for each section
/*
Template Name: Lyceum Speakers
*/
get_header(); ?>
<?php get_template_part( 'parts/banners' ); ?>
<div class="row">
<div class="container">
	
	<main class="small-12 medium-8 medium-push-4 large-8 columns large-push-4" id="main" role="main">
		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php //start the loop
		while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>" role="article">
			<div class="entry-content">
				<?php $loop = new WP_Query( array( 'post_type' => 'lyceum_speakers', 'posts_per_page' => -1, 'orderby' => 'post_id', 'order' => 'ASC',  ) ); ?>
				<?php while( $loop->have_posts() ) : $loop->the_post();
				$button_text = get_field('button_text');
				$speaker_url = get_field('speaker_url');
				?>
				<div class="panel">
					<?php the_title('<h2>','</h2>'); ?>
					<hr >
					<div class="row">
						<div class="small-12 medium-7 columns">
							<?php the_content(); ?>
							<?php if( !empty($button_text) ) : ?>
							<a href="<?php echo $speaker_url; ?>" class="button button-default" target="_blank" role="button" aria-label="Read more about <?php the_title(); ?>"><?php echo $button_text; ?></a>
							<?php endif; ?>
						</div>
						<div class="small-12 medium-5 columns">
							<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							}
							?>
						</div>
					</div>
				</div>
				<?php //post navigator
				if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
				<nav id="post-nav">
					<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
					<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
				</nav>
				<?php } ?>
				<?php endwhile; wp_reset_query(); ?>
		</div>
		</article>
		<?php endwhile; //Ends the loop ?>
		<?php do_action( 'foundationpress_after_content' ); ?>
	</main>
	<?php get_template_part( 'parts/sidebars/lyceum-sidebar' ); ?>

	</div>
</div>
<?php get_footer(); ?>