<?php
//Names the page template for each section
/*
Template Name: Educational Foundation Home
*/
get_header(); ?>
<?php get_template_part( 'parts/banners' ); ?>
<div class="row">
<div class="container">

<?php // Gets the alert custom post type id for each sub page needing special announcement
$post_id = 5447;
$queried_post = get_post($post_id);
$content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
if ($content) { ?>
<div class='alert-box alert'>
<?php echo "$content"; ?>
<a href='#' class='close' aria-hidden="true" role="button"><span class='icon-remove-circle'></span></a>
</div>
<?php }
else {
}
?>

<main class="small-12 medium-8 medium-push-4 large-8 columns large-push-4" id="main">
    <?php do_action( 'foundationpress_before_content' ); ?>
    <?php //start the loop
while ( have_posts() ) : the_post(); ?>

    <article <?php post_class() ?> id="post-
        <?php the_ID(); ?>" >
        <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
        <div class="entry-content">
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
                <h2>
                    <?php echo _e('Upcoming Events')?>
                </h2>
                <div class="panel" itemscope itemtype="http://schema.org/Event">
                 <div class="row">
                     <div class="container">

                    <?php the_title('<h3 itemprop="name">', '</h3>'); ?>
                    <hr />
                    <div class="columns small-12 medium-8">
                        <div class="event-description">
                            <?php echo $event_description; ?>
                            <?php echo $event_extra_info; ?>
                        </div>
                        <?php if ( !empty($event_button_text)) : ?>
                        <a class="button" itemprop="url" href="<?php echo $event_button_url; ?>" target="_blank">
                            <?php echo $event_button_text; ?>
                        </a>
                    </div>
                    <div class="columns small-12 medium-4">

                        <?php if ( !empty($event_image)) : ?>
                        <meta itemprop="thumbnail" content="<?php $event_image['url']; ?>" />
                        <img src="<?php echo $event_image['url']; ?>" class="img-responsive" alt="<?php echo $event_image['alt']; ?>" style="margin-bottom: 20px;" />
                        <?php endif ?>
                        <p itemprop="location" itemscope itemtype="http://schema.org/Place"><span class="fa fa-compass" aria-hidden="true" aria-label="location"></span>
                            <?php echo $event_location; ?>
                        </p>
                        <p itemprop="startDate" content="<?php echo $event_date; ?>"><span class="fa fa-calendar" aria-hidden="true" aria-label="event date"></span>
                            <?php echo $event_date; ?>
                        </p>
                        <p><span class="fa fa-clock-o" aria-hidden="true" aria-label="event time"></span>
                            <?php echo $event_time; ?>
                        </p>
                        <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span class="fa fa-map-marker" aria-hidden="true" aria-label="event address"></span>
                            <?php echo $event_address; ?>
                        </p>
                        <p itemprop="priceCurrency" content="USD"><span class="fa fa-dollar" aria-hidden="true" aria-label="event price"></span>
                            <?php echo $event_ticket_price; ?>
                        </p>
                        <h2 class="small">Questions:</h2>
                        <p><span class="fa fa-phone" aria-hidden="true" aria-label="event contact phone"></span>
                            <?php echo $event_contact_phone; ?>
                        </p>
                        <p><span class="fa fa-envelope" aria-hidden="true" aria-label="event contact email"></span>
                            <a href="mailto:<?php echo $event_contact_email; ?>">
                                <?php echo $event_contact_email; ?>
                            </a>
                        </p>
                        <?php endif ?>

                    </div>
                     </div>
                    </div>
                </div>
                <?php //post navigator
        if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
                <nav id="post-nav">
                    <div class="post-previous">
                        <?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?>
                    </div>
                    <div class="post-next">
                        <?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?>
                    </div>
                </nav>
                <?php } ?>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
        </div>
        <!--.content-->
    </article>
    <!--.article-->
    <?php endwhile; //Ends the loop ?>
    <?php do_action( 'foundationpress_after_content' ); ?>
</main>
<?php get_template_part( 'parts/sidebars/edfoundation-sidebar' ); ?>
</div>
</div>
<?php get_footer(); ?>