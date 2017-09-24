<div class="row">
<div class="container">

<div class="small-12 large-12 columns">
<?php // if the page has a featured image
if  (has_post_thumbnail( $post->ID ) )  { ?>

<div class='row'>
<div class='small-12 large-12 columns'>
<?php the_title('<h1>', '</h1>'); ?>
</div>
</div>

<div class="row">
<div class="small-12 large-12 columns" itemprop="breadcrumb">
<ul class="breadcrumbs" role="menu">
    
    <?php $home_page = get_the_title( get_option('page_on_front')); ?>
    <li role="menuitem"><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>
    
    <?php
    // if there is a parent, display the link to go back to parent page
    $parent_title = get_the_title( $post->post_parent );
    if ( $parent_title != the_title('', '', false) ) { ?>
    <li role="menuitem"><a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo $parent_title; ?></a></li>
    <?php } else if ( $parent_title == the_title('', '', false)) { ?>
    
    <li class="last" role="menuitem"><?php echo $parent_title; ?></li>
    <?php }
    // if the page is a child page display page title
    if
    ( is_page() && $post->post_parent != the_title('', '', false) ) { ?>
    <?php the_title('<li class="last">', '</li>'); ?>
    <?php } ?>
</ul>
</div>

</div>
<div class='subpage-hero'>
<div id='bg'>
<?php the_post_thumbnail('', array('class' => 'img-responsive'));  ?>
</div>
</div>

<?php  }  else {  //.pagesubbanner
// if page doesn't have a featured image
?>
<div class="row without-image">
<div class="small-12 large-12 columns'">
<?php the_title('<h1>', '</h1>'); ?>
<div class="row">
    <div class="small-12 large-12 columns">
        <ul class="breadcrumbs" role="menu">
            
            <?php $home_page = get_the_title( get_option('page_on_front')); ?>
            <li role="menuitem"><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>
            
            <?php
            // if there is a parent, display the link to go back to parent page
            $parent_title = get_the_title( $post->post_parent );
            if ( $parent_title != the_title('', '', false) ) { ?>
            <li role="menuitem"> <a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo $parent_title; ?></a></li>
            <?php } else if ( $parent_title == the_title('',  '', false)) { ?>
            
            <li class="last" role="menuitem"><?php echo $parent_title; ?></li>
            <?php }
            // if the page is a child page display page title
            if
            ( is_page() && $post->post_parent != the_title('', '', false) ) { ?>
            <?php the_title('<li class="last" role="menuitem">', '</li>'); ?>
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