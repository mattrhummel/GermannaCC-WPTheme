<aside id="sidebar" class="small-12 large-4 columns" role="complementary">
    
	<?php do_action( 'foundationpress_before_sidebar' ); ?>

    
    
	<?php dynamic_sidebar( 'gssa-widgets' ); ?>

<?php

/* if the current pages has a parent, i.e. we are on a subpage */
if($post->post_parent){
    $parent_title = get_the_title($post->post_parent);
    //$children = wp_list_pages("title_li=&include=".$post->post_parent."&echo=0"); // list the parent page
    $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0"); // append the list of children pages to the same $children variable
}

/* else if the current page does not have a parent, i.e. this is a top level page */
else {
    $parent_title = get_the_title($post->ID);
    //$children = wp_list_pages("title_li=&include=".$post->ID."&echo=0");
    $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0"); // form a list of the children of the current page
}

/* if we ended up with any pages from the queries above */
if ($parent_title) { ?>
    <h3><?php echo $parent_title; ?></h3>
<?php } 

if ($children) { ?>
    <ul class="submenu no-bullet">
        <?php echo $children; /*print list of pages*/ ?>
    </ul>
<?php } ?>
  
   <?php do_action( 'foundationpress_after_sidebar' ); ?>
    
   
    
    
</aside>
