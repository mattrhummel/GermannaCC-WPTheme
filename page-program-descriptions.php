<?php
/*
Template Name: Program Descriptions
*/
get_header(); ?>
<div class="row">
<div class="container">

<?php if  (has_post_thumbnail( $post->ID ) )  { ?>

<?php the_title('<h1>', '</h1>') ?>

<ul class="breadcrumbs">

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
        <?php the_title('<li class="last">', '</li>'); ?>
        <?php } ?>
</ul>


<div class='subpage-hero'>
    <div id='bg'>
        <?php the_post_thumbnail('', array('class' => 'img-responsive'));  ?>
    </div>
</div>
<?php }  else { ?>


<div class="row without-image">

    <div class="small-12 large-7 columns">
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
                <?php } else if ( $parent_title == the_title('',  '', false)) { ?>

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

    <div class="small-12 large-5 columns print-icons show-for-medium-up">

        <?php //gets custom field for program icons "print_icons" // 
echo get_post_meta($post->ID, 'print_icons', true); ?>


    </div>
</div>

<?php } ?>


<?php /* Start loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<main id="main" role="main">

    <article <?php post_class() ?> id="post-
        <?php the_ID(); ?>" role="article">

        <div class="entry-content">
            <?php the_content(); ?>
        </div>

    </article>
</main>
<?php endwhile; // End the loop ?>



</div>
</div>

<?php get_footer(); ?>
