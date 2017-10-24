<?php
//Names the page template for each section
/*
Template Name: Veterans Newsletter
*/
get_header(); 
?>
<?php get_template_part( 'parts/custom-banners/veterans-newsletter-banner' ); ?>

<div class="row">
<div class="container">

<main class="small-12 medium-8 medium-push-4 large-8 columns large-push-4" id="main">
<?php do_action( 'foundationpress_before_content' ); ?>

<article <?php post_class() ?> id="post-
<?php the_ID(); ?>">

<div class="entry-content">

<?php the_content();?>

<?php $loop = new WP_Query( array( 'post_type' => 'veterans_newsletter', 'posts_per_page' => -1, 'orderby' => 'post_id', 'order' => 'ASC',  ) ); ?>

<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
<?php $button_text= get_field('button_text');
$button_document_file = get_field('button_document_file'); ?>


<div class="row">


    <?php
if ( has_post_thumbnail() ) {  ?>
    
    <?php the_title('<h3>', '</h3>'); ?>


        <div class="small-12 medium-4 columns">


            <?php the_post_thumbnail(); ?>


        </div>

        <div class="small-12 medium-8 columns">

            <?php the_excerpt(); ?>


        </div>

        <?php } else {  ?>

        <div class="small-12 columns">
            
                <?php the_title('<h3>', '</h3>'); ?>


            <?php the_excerpt(); ?>

            <div class="button-group">

                <?php if(!empty($button_text)) { ?>
                <a href="<?php echo $button_document_file; ?>" class="button button-default" role="button" aria-label="Read more about <?php the_title(); ?>">
                    <?php echo $button_text; ?>
                </a>

                <?php } else { ?>

                <a href="<?php echo get_the_permalink() ?>" class="button button-default">Read More</a>

                <?php } ?>

            </div>

        </div>

        <?php	}  ?>



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

<?php endwhile; wp_reset_query(); ?>

</div>
</article>
<!--.article-->

</main>

<?php get_template_part( 'parts/sidebars/veterans-newsletter-sidebar' ); ?>
</div>
</div>
<?php get_footer(); ?>
