<div class="row">
    <div class="container">

<div class="small-12 large-12 columns" role="main">
<?php // if the page has a featured image
if  (has_post_thumbnail( $post->ID ) )  { ?>
<div class="row">
<div class='small-12 large-12 columns'>
<h1 role='heading'>
<?php the_title(); ?>
</h1>
</div>
</div>
<div class="row">
<div class="small-12 large-12 columns" role="main" itemprop="breadcrumb">
<ul class="breadcrumbs">
    <?php $home_page = get_the_title( get_option('page_on_front')); ?>
    <li><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>
    <?php
    // if there is a parent, display the link to go back to parent page
    $parent_title = get_the_title( $post->post_parent ); ?>
    <li>
        <a href="<?php echo get_permalink( $post->post_parent ) ?>" ?><?php echo $parent_title; ?></a></li>
        <?php
        // if the page is a child page display page title
        if ( is_page() && $post->post_parent > 0 ) { ?>
        <li class="last"><?php the_title(); ?></li>
        <?php  } ?>
    </ul>
</div>
</div>
<div class="row">
<div class="small-12 large-12 columns" role="main">
    <?php // Gets the alert custom post type id for each sub page needing special announcement
    $post_id = 5484;
    $queried_post = get_post($post_id);
    $content = $queried_post->post_content;
    $content = apply_filters('the_content', $content);
    if ($content) { ?>
    <div data-alert class='alert-box alert'>
        <?php  echo "$content"; ?>
        <a href='#' class='close'><i class='fa fa-times-circle'></i></a></div>
        <?php }
        else {
        }
        ?>
    </div>
</div>
<div class='subpage-hero'>
    <div id='bg'>
        <?php the_post_thumbnail( array() );  ?>
    </div>
</div>
<? }  else {  //.pagesubbanner
// if page doesn't have a featured image
?>
<div class="row without-image" role="banner">
    <div class="small-12 large-12 columns'">
        <h1><?php echo the_title(); ?></h1>
        <div class="row">
            <div class="small-12 large-12 columns" role="main">
                <ul class="breadcrumbs">
                    <?php $home_page = get_the_title( get_option('page_on_front')); ?>
                    <li><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>
                    <?php
                    // if there is a parent, display the link to go back to parent page
                    $parent_title = get_the_title( $post->post_parent ); ?>
                    <li><a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo $parent_title; ?></a></li>
                        <?php
                        // if the page is a child page display page title
                        if ( is_page() && $post->post_parent > 0 ) { ?>
                        <li class="last"><?php the_title(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="small-12 large-12 columns" role="main">
                <?php // Gets the alert custom post type id for each sub page needing special announcement
                $post_id = 5484;
                $queried_post = get_post($post_id);
                $content = $queried_post->post_content;
                $content = apply_filters('the_content', $content);
                if ($content) { ?>
                <div data-alert class='alert-box alert'>
                    <?php  echo "$content"; ?>
                    <a href='#' class='close'><i class='fa fa-times-circle'></i></a></div>
                    <?php  }
                    else {
                    }
                    ?>
                </div>
            </div>
            <?php } } ?>
        </div>
        </div>
    </div>
</div>