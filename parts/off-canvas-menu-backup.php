
	<a class="right-off-canvas-toggle close text-center">
		<span class="fa fa-times"></span>
	</a>
	<div class="mobile-main-menu" id="MobileMenu">
		<p aria-hidden="true" > <?php echo get_bloginfo ( 'description' ); //get taglin in mobile nav?> <br/><?php the_field('college_phone_number', 'option'); //get college phone number in mobile menu?>
		</p>
		<nav role="navigation" aria-hidden="true">
			<?php foundationpress_mobile_off_canvas(); ?>
		</nav>
		<?php //get custom sidebar menu for section
		wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
		'menu' => 'mobile-main-menu', 'container' => 'false', 'menu_class' => 'submenu no-bullet' ) ); ?>
	</div>
</aside>
<div class="row show-for-small-only">
	<ul class="button-group even-3">
		<li><a href="<?php the_field('button_1_url', 'option'); ?>" class="button secondary tiny" aria-hidden="true" ><?php the_field('button_1_text', 'option'); ?></a></li>
		
		<li><a href="<?php the_field('button_2_url', 'option'); ?>" class="button secondary tiny" aria-hidden="true" ><?php the_field('button_2_text', 'option'); ?></a></li>
		<li><a href="http://www.germanna.edu/admissions/request-information/" class="button secondary tiny" aria-hidden="true" >myGCC</a></li>
	</ul>
</div>