<?php
$home_heading = get_field('home_heading');
$apply_box_icon = get_field('apply_box_icon');
$apply_heading = get_field('apply_heading');
$apply_description = get_field('apply_description');
$apply_url = get_field('apply_url');
$register_heading = get_field('register_heading');
$register_box_icon = get_field('register_box_icon');
$register_description = get_field('register_description');
$register_url = get_field('register_url');
$payment_heading = get_field('payment_heading');
$payment_box_icon = get_field('payment_box_icon');
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
$events_button_text = get_field('events_button_text');
$events_button_url = get_field('events_button_url');
?>
<div class="row home-intro">
  <div class="container">
    
    <main class="small-12 medium-12 columns" role="main" id="main">
      <?php if( !empty($home_heading) ):  ?>
      <h1 class="text-center home-heading fancy"><span><?php echo $home_heading; ?></span></h1>
      <?php endif; ?>
      <div class="small-12 medium-8 columns home-features-intro">
        <div class="small-12 large-4 columns home-panels">
          <ul class="feature-panels text-center">
            <li class="apply-panel">
              <a href="<?php echo $apply_url; ?>">
                <div class="panel-icon">
                  <?php if( !empty($apply_box_icon) ):
                  
                  //vars
                  $alt = $apply_box_icon['alt']
                  ?>
                  
                  <img src="<?php echo $apply_box_icon['url'] ?>" height="35" width="35" alt="<?php echo $alt; ?>" />
                  <?php endif; ?>
                </div>
                <div class="panel-content">
                  <span class="title"><?php echo $apply_heading; ?></span>
                  <span class="description"><?php echo $apply_description; ?></span>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="small-12 large-4 columns home-panels">
          <ul class="feature-panels text-center">
            <li class="register-panel">
              <a href="<?php echo $register_url; ?>">
                <div class="panel-icon">
                  <?php if( !empty($register_box_icon) ):
                  
                  //vars
                  $alt = $register_box_icon['alt']
                  ?>
                  <img src="<?php echo $register_box_icon['url'] ?>" height="25" width="25" alt="<?php echo $register_box_icon['alt'] ?>" />
                  <?php endif; ?>
                </div>
                <div class="panel-content">
                  <span class="title register-title"><?php echo $register_heading; ?></span>
                  <span class="description"><?php echo $register_description; ?></span>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="small-12 large-4 columns home-panels">
          <ul class="feature-panels text-center">
            <li class="payment-panel">
              <a href="<?php echo $payment_url; ?>">
                <div class="panel-icon">
                  <?php if( !empty($payment_box_icon) ):
                  
                  //vars
                  $alt = $payment_box_icon['alt']
                  ?>
                  <img src="<?php echo $payment_box_icon['url'] ?>" height="45" width="45" alt="<?php echo $payment_box_icon['alt'] ?>" />
                  <?php endif; ?>
                </div>
                <div class="panel-content">
                  <span class="title"><?php echo $payment_heading; ?></span>
                  <span class="description"><?php echo $payment_description; ?></span>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <?php if( !empty($announcement_heading) ):  ?>
        <div class="small-12 columns panel home-news">
          <a href="<?php echo $announcement_url; ?>" class="panel-content">
            <h2><?php echo $announcement_heading; ?></h2>
            <p><?php echo $announcement_description; ?></p>
          </a>
        </div>
        <?php endif; ?>
        <?php if( !empty($extra_box1_heading) ):  ?>
        <div class="small-12 medium-6 columns panel home-extra">
          <a href="<?php echo $extra_box1_url; ?>" class="panel-content">
            <h3><?php echo $extra_box1_heading; ?></h3>
            <p><?php echo $extra_box1_description; ?></p>
          </a>
        </div>
        <?php endif; ?>
        <?php if( !empty($extra_box2_heading) ):  ?>
        <div class="small-12 medium-6 columns panel home-extra">
          <a href="<?php echo $extra_box2_url; ?>" class="panel-content">
            <h3><?php echo $extra_box2_heading; ?></h3>
            <p><?php echo $extra_box2_description; ?></p>
          </a>
        </div>
        <?php endif; ?>
      </div>
      
      <div class="small-12 medium-4 columns events events-box">
        <?php if ( is_active_sidebar( 'upcoming-events-widgets' ) ) : ?>
        <?php dynamic_sidebar( 'upcoming-events-widgets' ); ?>
        <?php endif; ?>
        <?php if( !empty($events_button_text) ):  ?>
        <a href="<?php echo $events_button_url; ?>" class="button default text-center" target="_blank"><?php echo $events_button_text; ?></a>
        <?php endif; ?>
      </div>
    </main>
  </div>
</div>