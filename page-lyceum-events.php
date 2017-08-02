<?php
//Names the page template for each section
/*
Template Name: Lyceum Upcoming Events
*/
get_header(); ?>
<?php get_template_part( 'parts/banners' ); ?>
<div class="row">
	<div class="container">
		
		<main class="small-12 medium-8 medium-push-4 large-8 columns large-push-4" id="main" role="main">
			<?php do_action( 'foundationpress_before_content' ); ?>
			<?php //start the loop
			while ( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>" >
				<div class="entry-content" id="main" role="main">
					<?php $loop = new WP_Query( array( 'post_type' => 'lyceum_events', 'posts_per_page' => 10, 'orderby' => 'post_id', 'order' => 'DESC',  ) ); ?>
					<?php while( $loop->have_posts() ) : $loop->the_post();
					$event_date = get_field('event_date');
					$event_time = get_field('event_time');
					$event_location = get_field('event_location');
					$event_contact = get_field('event_contact');
					$contact_email = get_field('contact_email');
					$contact_phone = get_field('contact_phone');
					$button_text = get_field('button_text');
					$event_url = get_field('event_url');
					?>
					<div class="panel" itemscope itemtype="http://schema.org/Event">
						<h2 itemprop="name"><?php the_title(); ?></h2>
						<hr>
						<div class="row">
							<div class="small-12 medium-7 columns" itemprop="thumbnail">
								<?php
								if ( has_post_thumbnail() ) {
									the_post_thumbnail();
								} else {
								?><p>Photo Coming Soon</p>
								<?php } ?>
							</div>
							<div class="small-12 medium-5 columns">
								<?php if( !empty($event_date) ) : ?>
								<p itemprop="startDate"><strong>Date:</strong> <?php echo $event_date; ?><br/>
								<?php endif; ?></p>
								<?php if( !empty($event_time) ) : ?>
								<p><strong>Time:</strong> <?php echo $event_time; ?><br/>
								<?php endif; ?></p>
								<?php if( !empty($event_location) ) : ?>
								<p itemprop="location"><strong>Location:</strong> <?php echo $event_location; ?><br/>
								<?php endif; ?></p>
								<?php if( !empty($event_contact) ) : ?>
								<p><strong>Contact:</strong> <br/><?php echo $event_contact; ?><br/><?php echo $contact_phone; ?><br/> <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email ?></a><br/>
							<?php endif; ?></p>
							<?php if( !empty($button_text) ) : ?>
							<a href="<?php echo $event_url; ?>" class="button button-default" target="_blank" role="button" aria-label="Read more about <?php the_title(); ?>"><?php echo $button_text; ?></a>
							<?php endif; ?>
						</div>
					</div>
					<?php if ( $post->post_content!=="" ) {  ?>
					
					<h3>About</h3>
					<div itemprop="description">
						<?php the_content(); ?>
					</div>
					<?php } ?>
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