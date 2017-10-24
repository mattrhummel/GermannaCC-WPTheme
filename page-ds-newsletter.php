<?php
//Names the page template for each section
/*
Template Name: Disability Services Newsletter
*/
get_header(); ?>
<div class="row">
<div class="container">

<?php // if the page has a featured image
if  (has_post_thumbnail( $post->ID ) )  { ?>


<div class="row">
<div class="container">

<?php the_title('<h1>', '</h1>'); ?>


<ul class="breadcrumbs" role="menu" itemprop="breadcrumb">

<?php $home_page = get_the_title( get_option('page_on_front')); ?>
<li role="menuitem">
    <a href="<?php echo get_site_url(); ?>">
        <?php echo $home_page; ?>
    </a>
</li>

<?php
// if there is a parent, display the link to go back to parent page
$parent_title = get_the_title( $post->post_parent );
if ( $parent_title != the_title('', '', false) ) { ?>
    <li role="menuitem">
        <a href="<?php echo get_permalink( $post->post_parent ) ?>">
            <?php echo $parent_title; ?>
        </a>
    </li>
    <?php } else if ( $parent_title == the_title('', '', false)) { ?>

    <li class="last" role="menuitem">
        <?php echo $parent_title; ?>
    </li>
    <?php }
// if the page is a child page display page title
if
( is_page() && $post->post_parent != the_title('', '', false) ) { ?>
    <?php the_title('<li class="last" role="menuitem">', '</li>'); ?>
    <?php } ?>
</ul>


<div class='subpage-hero'>
<div id='bg'>
    <?php the_post_thumbnail('', array('class' => 'img-responsive'));  ?>
</div>
</div>

</div>
</div>

<?php  }  else {  //.pagesubbanner
// if page doesn't have a featured image
?>
<div class="row without-image" role="banner">
<div class="container">

<?php the_title('<h1>', '</h1>'); ?>


<ul class="breadcrumbs" role="menu">

<?php $home_page = get_the_title( get_option('page_on_front')); ?>
<li role="menuitem">
    <a href="<?php echo get_site_url(); ?>">
        <?php echo $home_page; ?>
    </a>
</li>

<?php
// if there is a parent, display the link to go back to parent page
$parent_title = get_the_title( $post->post_parent );
if ( $parent_title != the_title('', '', false) ) { ?>
    <li role="menuitem">
        <a href="<?php echo get_permalink( $post->post_parent ) ?>">
            <?php echo $parent_title; ?>
        </a>
    </li>
    <?php } else if ( $parent_title == the_title('', '', false)) { ?>

    <li class="last" role="menuitem">
        <?php echo $parent_title; ?>
    </li>
    <?php }
// if the page is a child page display page title
if
( is_page() && $post->post_parent != the_title('', '', false) ) { ?>
    <?php the_title('<li class="last" role="menuitem">', '</li>'); ?>
    <?php } ?>
</ul>



</div>
</div>
<?php } ?>


<main class="small-12 medium-8 medium-push-4 large-8 columns large-push-4" id="main">
<?php do_action( 'foundationpress_before_content' ); ?>
<?php the_content(); ?>
<article <?php post_class() ?> id="post-
<?php the_ID(); ?>" role="article">
<div class="entry-content">
<?php $loop = new WP_Query( array( 'post_type' => 'ds_newsletter', 'posts_per_page' =>-1, 'orderby' => 'post_id', 'order' => 'DESC',  ) ); ?>
<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

<?php
if ( has_post_thumbnail() ) {  ?>
    <div class="small-12 medium-4 columns">
        <?php the_post_thumbnail(); ?>
    </div>
    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
    <?php the_excerpt(); ?>
    <a href="<?php echo get_post_permalink() ?>" class="button button-default" aria-label="View Post on <?php the_title();?>" role="button">Read More</a>
    <?php } 

else {  ?>
    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
    <?php the_excerpt(); ?>
    <a href="<?php echo get_post_permalink(); ?>" class="button button-default" aria-label="View Post on <?php the_title(); ?>" role="button">Read More</a>
    <?php	}  ?>
        <footer class="entry-footer" role="contentinfo">

            <p>Written by <strong><?php $author = get_the_author(); echo $author ?></strong> on <strong><?php the_date(); ?></strong></p>

        </footer>

        <?php endwhile; wp_reset_query(); ?>
</div>
</article>
</main>
<?php get_template_part( 'parts/sidebars/ds-newsletter-sidebar' ); ?>

</div>
</div>

<?php get_footer(); ?>
