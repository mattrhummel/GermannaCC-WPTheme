<?php
$apply_box_image = get_field('apply_box_image');
$apply_heading = get_field('apply_heading');
$apply_description = get_field('apply_description');
$apply_url = get_field('apply_url');
$register_box_image = get_field('register_box_image');
$register_heading = get_field('register_heading');
$register_description = get_field('register_description');
$register_url = get_field('register_url');
$payment_box_image = get_field('payment_box_image');
$payment_heading = get_field('payment_heading');
$payment_description = get_field('payment_description');
$payment_url = get_field('payment_url');
$announcement_heading = get_field('announcement_heading');
$announcement_description = get_field('announcement_description');
$announcement_url = get_field('announcement_url');
$extra_box1_heading = get_field('extra_box1_heading');
$extra_box1_description = get_field('extra_box1_description');
$extra_box1_url = get_field('extra_box1_url');
$extra_box2_heading = get_field('extra_box2_heading');
$extra_box2_description = get_field('extra_box2_description');
$extra_box2_url = get_field('extra_box2_url');
$calendar_url = get_field('calendar_url');
$calendar_button_text = get_field('calendar_button_text');
?>
<main class="home-intro" id="main">
  <div class="row">
    <div class="container">
      
      <div class="small-12 columns">

        <div class="small-12 medium-9 columns home-features-intro ">
            <div class="small-12 columns">
              <div class="small-12 large-4 columns home-panels">
                <ul class="feature-panels text-center">
                  <li class="apply-panel">
                    <a href="<?php echo $apply_url; //apply box links to online application?>">
                      <?php if( !empty($apply_box_image) ):  ?>
                      <div class="panel-icon">
                        <span class="fa fa-clipboard " aria-hidden="true"></span>
                      </div>
                      <?php endif; ?>
                      <div class="panel-content">
                        <span class="title"><?php echo $apply_heading; ?></span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="small-12  large-4  columns home-panels">
                <ul class="feature-panels text-center">
                  <li class="register-panel">
                    <a href="<?php echo $register_url;  //register box links to class schedule?>">
                      <?php if( !empty($register_box_image) ):  ?>
                      <div class="panel-icon">
                        <span class="fa fa-pencil" aria-hidden="true"></span>
                                              </div>
                      <?php endif; ?>
                      <div class="panel-content">
                        <span class="title register-title"><?php echo $register_heading; ?></span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="small-12 large-4 columns home-panels">
                <ul class="feature-panels text-center">
                  <li class="payment-panel">
                    <a href="<?php echo $payment_url; //payment box links to paying for college ?>">
                      <?php if( !empty($payment_box_image) ):  ?>
                      <div class="panel-icon">
                        <span class="fa fa-credit-card" aria-hidden="true"></span>
                      </div>
                      <?php endif; ?>
                      <div class="panel-content">
                        <span class="title"><?php echo $payment_heading; ?></span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="small-12 columns panel home-news">
                <a href="<?php echo $announcement_url; //middle special announcment box ?>" class="panel-content">
                  <h3 class="title"><?php echo $announcement_heading; ?></h3>
                  <p class="description"><?php echo $announcement_description; ?></p>
                  
                </a>
              </div>
        <div class="small-12 large-6 columns panel home-extra">
                <a href="<?php echo $extra_box1_url; //bottom right special announcement box links to programs of study page ?>" class="panel-content">
                  <h3 class="title"><?php echo $extra_box1_heading; ?></h3>
                  <p class="description"><?php echo $extra_box1_description; ?></p>
                  
                </a>
              </div>
              <div class="small-12 large-6 columns panel home-extra">
                <a href="<?php echo $extra_box2_url; //bottom right special announcement box links to programs of study page ?>" class="panel-content">
                  <h3 class="title"><?php echo $extra_box2_heading; ?></h3>
                  <p class="description"><?php echo $extra_box2_description; ?></p>
                  
                </a>
              </div>
            </div>
        </div>
        
        <div class="small-12 medium-3 columns events events-box">
          <?php if ( is_active_sidebar( 'upcoming-events-widgets' ) ) : ?>
          <?php dynamic_sidebar( 'upcoming-events-widgets' ); ?>
          <?php endif; ?>
          <a href="<?php echo $calendar_url; ?><" class="button default text-center" target="_blank"><?php echo $calendar_button_text; ?></a>
        </div>
       
      </div>
    </div>
  </div>
</main>