<div class="right-off-canvas-menu" aria-hidden="true">
	<a class="right-off-canvas-toggle menu-icon">
		<span class="fa fa-times"></span>
	</a>

	<div class="mobile-main-menu" id="MobileMenu">
		<p class="mobile-tagline"> <?php echo get_bloginfo ( 'description' );  ?>
        </p>
		<p class="mobile-contact"><?php if( get_field('before_number_text', 'option') ): //if the text before the number is filled out dispaly the text else it will hide ?>
      <?php the_field('before_number_text', 'option');  ?>
      <?php endif; ?>
      <?php the_field('college_phone_number', 'option'); //get college phone number in mobile menu?></p>
		<?php //get custom sidebar menu for section
		wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
		'menu' => 'Mobile Main Menu', 'container' => 'true', 'menu_class' => 'submenu no-bullet' ) ); ?>
	</div>

</div>

<div class="row show-for-small-only">
	<ul class="button-group even-3">
		<li><a href="<?php the_field('button_1_url', 'option'); ?>" class="button secondary tiny" aria-hidden="true" ><?php the_field('button_1_text', 'option'); ?></a></li>
		
		<li><a href="<?php the_field('button_2_url', 'option'); ?>" class="button secondary tiny" aria-hidden="true" ><?php the_field('button_2_text', 'option'); ?></a></li>
		
		<li><a href="<?php the_field('button_3_url', 'option'); ?>" class="button secondary tiny" aria-hidden="true" ><?php the_field('button_3_text', 'option'); ?></a></li>
		</ul>
</div>
