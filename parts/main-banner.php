<div class="banner show-for-medium-up hidden-for-small-only" itemscope itemtype="http://schema.org/CollegeOrUniversity">
  
  <div class="row">
    <div class="container">
      
      <div class="large-4 medium-12 columns" itemprop="logo">
        <a href="<?php echo get_home_url();  //get logo url ?>" class="logo" itemprop="name"><?php bloginfo('name') //get name site name ?></a>
      </div>
      <div class="large-8 medium-12 columns">
        <p class="tagline text-right" itemprop="description">
          <?php echo get_bloginfo ( 'description' ); //get tagline of website  ?>
        </p>
        <div class="sub-tagline text-right">
          <?php if( get_field('before_number_text', 'option') ): //if the text before the number is filled out dispaly the text else it will hide ?>
          <span><?php the_field('before_number_text', 'option');  ?></span>
          <?php endif; ?>
          <?php if( get_field('college_phone_number', 'option') ): //if the phone number is entered display the phone number else it will hide ?>
          <span itemprop="telephone"><?php the_field('college_phone_number', 'option'); ?></span>
          <?php endif; ?>
          <?php if( get_field('button_1_text', 'option') ):  //if the text for the 1st call to action is entered display the button else it will hide ?>
          <a href="<?php the_field('button_1_url', 'option'); //get call to 1 url ?>" class="button default round tiny callto" target="_blank"><?php the_field('button_1_text', 'option'); ?></a>
          <?php endif; ?>
          <?php if( get_field('button_2_text', 'option') ): //if the text for the 2nd call to action is entered display the button else it will hide ?>
          
          <a href="<?php the_field('button_2_url', 'option'); //get call to 2 url ?>" class="button default round tiny callto" target="_blank"><?php the_field('button_2_text', 'option'); ?></a>
          <?php endif; ?>

        </div>
        
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="top-bar-container show-for-medium-up">
    <div class="container">
      
      <nav class="top-bar" data-topbar aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" >
        <div class="top-bar-section " id="MainNavigation">
          <?php foundationpress_top_bar_l(); //displays the main navigation menu ?>
        </div>
      </nav>

    </div>
  </div>
  
</div>