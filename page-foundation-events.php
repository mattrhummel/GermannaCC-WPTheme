<?php
//Names the page template for each section
/*
Template Name: Educational Foundation Events
*/
get_header(); ?>
<?php get_template_part( 'parts/banners' ); ?>
<div class="row">
	<div class="container">
		
		<main class="small-12 medium-8 medium-push-4 large-8 columns large-push-4" id="main" role="main">
			<?php do_action( 'foundationpress_before_content' ); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>" >
				<div class="entry-content">
					<?php $loop = new WP_Query( array( 'post_type' => 'foundation_events', 'posts_per_page' => -1, 'orderby' => 'post_id', 'order' => 'ASC',  ) ); ?>
					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php
					$event_description = get_field('event_description');
					$event_image = get_field('event_image');
					$event_date = get_field('event_date');
					$event_time = get_field('event_time');
					$event_location = get_field('event_location');
					$event_address = get_field('event_address');
					$event_ticket_price = get_field('event_ticket_price');
					$event_contact_phone = get_field('event_contact_phone');
					$event_contact_email = get_field('event_contact_email');
					$event_extra_info = get_field('event_extra_info');
					$event_button_url = get_field('event_button_url');
					$event_button_text = get_field('event_button_text');
					?>
					<?php the_title('<h3>', '</h3>'); ?>
					<hr />
					<div class="panel">
						<div class="row">
							<div class="event-description" style="padding: 0 10px 20px 10px">
								<?php echo $event_description; ?>
							</div>
							<div class="columns large-6 small-12 medium-6   ">
								<p><strong>Location:</strong><br /> <?php echo $event_location; ?></p>
								<p><strong>Date:</strong> <?php echo $event_date; ?><br />
								<strong>Time:</strong> <?php echo $event_time; ?></p>
								<p><strong>Address:</strong><br /> <?php echo $event_address; ?></p>
								<p><strong>Tickets:</strong><?php echo $event_ticket_price; ?></p>
								<p><strong>Questions:<br /></strong>Phone: <?php echo $event_contact_phone; ?><strong><br />
									</strong>Email: <a href="mailto:<?php echo $event_contact_email; ?>"><?php echo $event_contact_email; ?></a></p>
									<p><?php echo $event_extra_info; ?></p>
									<?php if ( !empty($event_button_text)) : ?>
									<a class="button" href="<?php echo $event_button_url; ?>"  target="_blank" role="button"><?php echo $event_button_text; ?></a>
									<?php endif ?>
								</div>
								<div class="columns large-6 small-12 medium-6">
									<?php if ( !empty($event_image)) : ?>
									<img src="<?php echo $event_image['url']; ?>" alt="<?php echo $event_image['alt']; ?>" class="img-responsive" height="300" widht="300" />
									<?php endif ?>
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
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</div>
				</article>
		</main>
			<?php get_template_part( 'parts/sidebars/edfoundation-sidebar' ); ?>
		</div>
	</div>
	<?php get_footer(); ?>