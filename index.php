<?php get_header(); ?>
<!--Page Sub Banner-->
<div class="row" role="banner">
<div class="container">
	<div class="small-12 large-12 columns">
		<h1><?php echo _e('News And Highlights', 'foundationpress'); ?></h1>
	</div>
    </div>
</div>
<!--.noimagebanner-->
<div class="row single-post-article" >
    <div class="container">

	<main class="small-12 medium-8 medium-push-4 large-8 columns large-push-4"  id="main" role="main">
		
		<?php if ( have_posts() ) : ?>
		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>
		<?php do_action( 'foundationpress_before_pagination' ); ?>
		<?php endif;?>
		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
		</nav>
		<?php } ?>
		<?php do_action( 'foundationpress_after_content' ); ?>
		
</main>

	<?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>