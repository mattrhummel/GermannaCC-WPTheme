<?php get_header(); ?>

<!--Page Sub Banner-->

<div class="row" role="banner">
<div class="container">

<div class="small-12 large-12 columns"  role="main">

<?php the_title( '<h1>', '</h1>' ); ?>

</div>
</div>
</div>

<!--.noimagebanner-->


<div class="row">
    <div class="container">

  <div class="small-12 large-12 columns" role="main">

		<?php do_action( 'foundationpress_before_content' ); ?>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

	<?php endif;?>

	<?php do_action( 'foundationpress_before_pagination' ); ?>

	<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>

		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
</div>

<?php get_footer(); ?>
