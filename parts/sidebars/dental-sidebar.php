<aside id="sidebar" class="small-12 medium-4 medium-pull-8 large-4 columns large-pull-8"> 


<div>        
  
<h3><?php _e('GCC/NVCC Dental Partnership'); ?></h3>    
<?php //get custom sidebar menu for section
wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
    'menu' => 'Dental Partnership Menu', 'container' => 'true', 'menu_class' => 'submenu no-bullet' ) ); ?>
</div>
    
    
<div>   
<?php //custom department widgets 
dynamic_sidebar( 'dental-widgets' ); ?>  
</div>
    
<?php do_action( 'foundationpress_after_sidebar' ); ?>   
</aside>