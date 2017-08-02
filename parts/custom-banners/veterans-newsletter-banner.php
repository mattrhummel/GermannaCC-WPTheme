    <!--Page Sub Banner-->
<div class="row">
    <div class="container">

    <div class="small-12 large-12 columns" role="main">
        <?php // if the page has a featured image
        if  (has_post_thumbnail( $post->ID ) )  { ?>
        <div class='row'>
        <div class='small-12 large-12 columns'>
        <?php the_title('<h1 role="heading">', '</h1>'); ?>

        </div>
        </div>
        <div class="row">
            <div class="small-12 large-12 columns" role="main" itemprop="breadcrumb">
                    <ul class="breadcrumbs">
                        
                        <?php $home_page = get_the_title( get_option('page_on_front')); ?>
                        <li><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>
                        
                        <?php
                        // if there is a parent, display the link to go back to parent page
                        $parent_title = get_the_title( $post->post_parent );
                        if ( $parent_title != the_title('', '', false) ) { ?>
                        <li><a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo $parent_title; ?></a></li>
                        <?php } else if ( $parent_title == the_title('', '', false)) { ?>
                        
                        <li class="last"><?php echo $parent_title; ?></li>
                        <?php }
                        // if the page is a child page display page title
                        if
                        ( is_page() && $post->post_parent != the_title('', '', false) ) { ?>
                        <li class="last"> <?php the_title(); ?></li>
                        <?php } ?>
                    </ul>
            </div>
        </div>
        <?php  //Attach featured image to the page
        
        }  else {  //.pagesubbanner
        // if page doesn't have a featured image
        ?>
        <div class="row without-image" role="banner">
            <div class="small-12 large-12 columns'">

                    <?php the_title('<h1 role="heading">', '</h1>'); ?>

                <div class="row">
                    <div class="small-12 large-12 columns" role="main">
                    <ul class="breadcrumbs">
                        
                        <?php $home_page = get_the_title( get_option('page_on_front')); ?>
                        <li><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>
                        
                        <?php
                        // if there is a parent, display the link to go back to parent page
                        $parent_title = get_the_title( $post->post_parent );
                        if ( $parent_title != the_title('', '', false) ) { ?>
                        <li><a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo $parent_title; ?></a></li>
                        <?php } else if ( $parent_title == the_title('', '', false)) { ?>
                        
                        <li class="last"><?php echo $parent_title; ?></li>
                        <?php }
                        // if the page is a child page display page title
                        if
                        ( is_page() && $post->post_parent != the_title('', '', false) ) { ?>
                        <li class="last"> <?php the_title(); ?></li>
                        <?php } ?>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
</div>