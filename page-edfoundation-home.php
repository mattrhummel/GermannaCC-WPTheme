<?php
//Names the page template for each section
/*
Template Name: Educational Foundation Home
*/
get_header(); ?>
<?php get_template_part( 'parts/banners' ); ?>

<div class="row">
<div class="container">
	
<div class="small-12 large-12 columns">
<?php // Gets the alert custom post type id for each sub page needing special announcement
$post_id = 5447;
$queried_post = get_post($post_id);
			$content = $queried_post->post_content;
			$content = apply_filters('the_content', $content);
			if ($content) { ?>
<div class='alert-box alert'>
<?php echo "$content"; ?>
<a href='#' class='close' aria-hidden="true" role="button"><span class='icon-remove-circle'></span></a></div>
<?php
}
else {
}
?>
</div>


<!--Page Content-->
<div class="small-12 medium-8 medium-push-4 large-8 columns large-push-4">
<?php do_action( 'foundationpress_before_content' ); ?>
<?php //start the loop
while ( have_posts() ) : the_post(); ?>

<!--Main Article-->
<article <?php post_class() ?> id="post-<?php the_ID(); ?>" >

<?php do_action( 'foundationpress_page_before_entry_content' ); ?>

<main class="entry-content" id="main" role="main">

<?php //Gets Page content
the_content(); ?>


<?php $loop = new WP_Query( array( 'post_type' => 'foundation_events', 'posts_per_page' => 5, 'orderby' => 'post_id', 'order' => 'ASC',  ) ); ?>

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

<h2>Upcoming Events</h2>

<hr />

<h3><?php the_title(); ?></h3>

<div class="panel">
<div class="row">

<div class="event-description">
<?php echo $event_description; ?>
</div>

<div class="columns large-6 small-12 medium-6">

<p><strong>Location:</strong><br /> <?php echo $event_location; ?></p>

<p><strong>Date:</strong> <?php echo $event_date; ?><br /> 
<strong>Time:</strong> <?php echo $event_time; ?></p>

<p><strong>Address:</strong><br /> <?php echo $event_address; ?></p>

<p><strong>Tickets:</strong> <?php echo $event_ticket_price; ?></p>

<p><strong>Questions:<br /></strong>Phone: <?php echo $event_contact_phone; ?><strong><br />
</strong>Email: <a href="mailto:<?php echo $event_contact_email; ?>"><?php echo $event_contact_email; ?></a></p>

<p><?php echo $event_extra_info; ?></p>

<?php if ( !empty($event_button_text)) : ?>


<a class="button" href="<?php echo $event_button_url; ?>"  target="_blank" role="button" aria-label="Learn more about <?php the_title();?>"><?php echo $event_button_text; ?></a>

<?php endif ?>

</div>

<div class="columns large-6 small-12 medium-6"> 

<?php if ( !empty($event_image)) : ?>

<img src="<?php echo $event_image['url']; ?>" alt="<?php echo $event_image['alt']; ?>" />

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


</main>
<!--.content-->

</article>
<!--.article-->


<?php endwhile; //Ends the loop ?>
<?php do_action( 'foundationpress_after_content' ); ?>
</div>


<?php get_template_part( 'parts/sidebars/edfoundation-sidebar' ); ?>
</div>
</div>
<?php get_footer(); ?>