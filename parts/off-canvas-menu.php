<div class="right-off-canvas-menu" aria-hidden="true" aria-labelledby="MobileMenu">
	<a class="right-off-canvas-toggle menu-icon">
		<span class="fa fa-times"></span>
	</a>
	<div class="mobile-main-menu" id="MobileMenu">
		<p> <?php echo get_bloginfo ( 'description' );  ?>
        </p>
		<p><?php the_field('college_phone_number', 'option'); //get college phone number in mobile menu?></p>
		<?php //get custom sidebar menu for section
		wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
		'menu' => 'Mobile Main Menu', 'container' => 'true', 'menu_class' => 'submenu no-bullet' ) ); ?>
	</div>
</div>