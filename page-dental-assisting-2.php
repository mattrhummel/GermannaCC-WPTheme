<?php
//Names the page template for each section
/*
Template Name: Dental Assisting II
*/
get_header(); ?>
<div class="row">
    <div class="container">
        
        <div class="small-12 large-12 columns">
            
            <?php if  (has_post_thumbnail( $post->ID ) ) // if the page has a featured image {
            the_title('<h1 role="heading">', '</h1>');
            ?>
            <div class="small-12 large-12 columns" itemprop="breadcrumb">
                <ul class="breadcrumbs" role="menu">
                    <?php $home_page = get_the_title( get_option('page_on_front')); ?>
                    <li role="menuitem"><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>
                    <?php
                    // if there is a parent, display the link to go back to parent page
                    $parent_title = get_the_title( $post->post_parent );
                    if ( $parent_title != the_title( ' ', ' ', false ) ) { ?>
                    <li class="last" role="menuitem"><a href="<?php get_permalink( $post->post_parent )?>" title="<?php echo $parent_title?>"<?php echo $parent_title ?></a></li>
                    <?php }
                    // if the page is a child page display page title
                    if ( is_page() && $post->post_parent > 0 ) {
                    the_title('<li class="last" role="menuitem"><strong>', '</strong></li>');
                    } ?>
                </ul>
            </div>
            <div class="small-12 large-12 columns" role="main">
                <?php // Gets the alert custom post type id for each sub page needing special announcement
                $post_id = 16506;
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
                <div class='subpage-hero'>
                    <div id='bg'>
                        <?php the_post_thumbnail( array() );  ?>
                        
                    </div>
                </div>
                
                <?php  }  else {  //.pagesubbanner
                // if page doesn't have a featured image
                ?>
                <div class="without-image small-12 large-12 columns'">
                    <h1><?php echo the_title(); ?></h1>
                    <div class="row">
                        <div class="small-12 large-12 columns">
                            <ul class="breadcrumbs" role="menu">
                                <?php $home_page = get_the_title( get_option('page_on_front')); ?>
                                <li role="menuitem"><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>
                                <?php
                                // if there is a parent, display the link to go back to parent page
                                $parent_title = get_the_title( $post->post_parent );
                                if ( $parent_title != the_title( ' ', ' ', false ) ) { ?>
                                <li class="last" role="menuitem"><a href="<?php get_permalink( $post->post_parent )?>" title="<?php echo $parent_title?>"<?php echo $parent_title ?></a></li>
                                <?php }
                                // if the page is a child page display page title
                                if ( is_page() && $post->post_parent > 0 ) {
                                the_title('<li class="last" role="menuitem"><strong>', '</strong></li>');
                                } ?>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="small-12 large-12 columns">
                        <?php // Gets the alert custom post type id for each sub page needing special announcement
                        $post_id = 16506;
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
                    </div>
                    <?php } ?>
                    <?php get_template_part( 'parts/content' ); ?>
                    <?php get_template_part( 'parts/sidebars/dental-assisting-sidebar' ); ?>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>