<aside id="sidebar" class="small-12 medium-4 medium-pull-8 large-4 columns large-pull-8"> 
<div>        
<?php do_action( 'foundationpress_before_sidebar' ); ?>        
<h3><?php //gets parent page title
echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
?></h3>    
<?php //get custom sidebar menu for section
wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
    'menu' => 'Tutoring Menu', 'container' => 'true', 'menu_class' => 'sudfbmenu no-bullet' ) ); ?>
</div>
    
<div>
<h3>Online Tutoring</h3>
<a href="https://services.smarthinking.com/login/login.php?" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/smarthinking.jpg" height="140" width="355" alt="online tutoring smarthinking"/></a>
 </div>
 
<div>   
<?php //custom department widgets 
dynamic_sidebar( 'tutoring-services-widgets' ); ?>  
</div>
    
<?php do_action( 'foundationpress_after_sidebar' ); ?>   
</aside>
