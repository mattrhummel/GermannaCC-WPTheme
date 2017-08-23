<aside id="sidebar" class="small-12 medium-4 medium-pull-8 large-4 columns large-pull-8"> 
<div>        
<?php do_action( 'foundationpress_before_sidebar' ); ?>        
<h3><?php //gets parent page title
echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
?></h3>    
<?php //get custom sidebar menu for section from custom-sidebars.php
wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
    'menu' => 'Testing Menu', 'container' => 'true', 'menu_class' => 'submenu no-bullet' ) ); ?>
</div>
 
 
<div>        
<?php do_action( 'foundationpress_before_sidebar' ); ?>        
<h3><?php echo _e('Available Test'); ?></h3>    
<?php //get custom sidebar menu for section from custom-sidebars.php
wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
    'menu' => 'Available Test Menu', 'container' => 'true', 'menu_class' => 'submenu no-bullet' ) ); ?>
</div>   
    
<div>   
<?php //custom department widgets 
dynamic_sidebar( 'testing-services-widgets' ); ?>  
</div>
    
<?php do_action( 'foundationpress_after_sidebar' ); ?>   
</aside>
