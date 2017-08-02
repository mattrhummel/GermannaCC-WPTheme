<aside id="sidebar" class="small-12 medium-4 medium-pull-8 large-4 columns large-pull-8"> 
<div>        
<?php do_action( 'foundationpress_before_sidebar' ); ?>        
<h3><?php //gets parent page title
echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
?></h3>    
<?php //get custom sidebar menu for section
wp_nav_menu( array( 'menu' => 'Workforce Menu', 'container' => 'true', 'menu_class' => 'submenu no-bullet' ) ); ?>
</div>
    
    
<div>   
<?php //custom department widgets 
dynamic_sidebar( 'workforce-widgets' ); ?>  
</div>


<!--
<div class="sidebar-icons">
<ul class="intro-icons">

    <li><a href="https://www.facebook.com/gccworkforce"><i class="fa fa-facebook"></i></a></li>

    <li><a href="https://www.youtube.com/user/GCCVA"><i class="fa fa-youtube"></i></a></li>

    <li><a href="https://twitter.com/GCCWorkforce"><i class="fa fa-twitter"></i></a></li>

    <li><a href="/online-chat/"><i class="fa fa-headphones"></i> </a></li>

    </ul>
</div>
-->
    
<?php do_action( 'foundationpress_after_sidebar' ); ?>   
</aside>
