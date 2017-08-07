<?php 
$apply_heading = get_field('apply_heading');
$apply_description = get_field('apply_description');
$apply_url = get_field('apply_url');
$register_heading = get_field('register_heading');
$register_description = get_field('register_description');
$register_url = get_field('register_url');
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
?>

<main class="home-intro" id="main">
  <div class="row">
   <div class="container">
     
    <div class="small-12 medium-12 large-12 columns">
      <!--home-feature-intro-->
      <div class="small-12 medium-9 columns home-features-intro ">
        <div class="row">
          <div class="small-12 columns no-margin">
            <div class="small-12 medium-4 columns home-panels">
              <ul class="feature-panels text-center">
                <li class="apply-panel">
                  <a href="<?php echo $apply_url; ?>">
                    <div class="panel-icon">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/board.png" height="35" width="35" alt="panel icon" />
                    </div>
                    <div class="panel-content">
                      <span class="title"><?php echo $apply_heading; ?></span>
                      <span class="description"><?php echo $apply_description; ?></span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="small-12  medium-4 columns home-panels">
              <ul class="feature-panels text-center">
                <li class="register-panel">
                  <a href="<?php echo $register_url; ?>">
                    <div class="panel-icon">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/pencil.png" height="25" width="25" alt="panel icon" />
                    </div>
                    <div class="panel-content">
                      <span class="title register-title"><?php echo $register_heading; ?></span>
                      <span class="description"><?php echo $register_description; ?></span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="small-12 medium-4 columns home-panels">
              <ul class="feature-panels text-center">
                <li class="payment-panel">
                  <a href="<?php echo $payment_url; ?>">
                    <div class="panel-icon">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/pig.png" height="45" width="45" alt="panel icon" />
                    </div>
                    <div class="panel-content">
                      <span class="title"><?php echo $payment_heading; ?></span>
                      <span class="description"><?php echo $payment_description; ?></span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>

            <div class="small-12 medium-12 columns panel home-news">
            <a href="<?php echo $announcement_url; ?>" class="panel-content">

            <h2><?php echo $announcement_heading; ?></h2>
            <p><?php echo $announcement_description; ?></p>
        

            </a>
            </div>

            <div class="small-12 medium-12 large-6 columns panel home-extra">
            <a href="<?php echo $extra_box1_url; ?>" class="panel-content">

            <h3><?php echo $extra_box1_heading; ?></h3>
            <p><?php echo $extra_box1_description; ?></p>
        

            </a>
            </div>

            <div class="small-12 medium-12 large-6 columns panel home-extra">
            <a href="<?php echo $extra_box2_url; ?>" class="panel-content">

            <h3><?php echo $extra_box2_heading; ?></h3>
            <p><?php echo $extra_box2_description; ?></p>
        

            </a>
            </div>

          </div>
        </div>
      </div>
      <!--.home-feature-intro-->
      <!--upcoming-events-->
      <div class="small-12 medium-3  columns events events-box">
        <?php if ( is_active_sidebar( 'upcoming-events-widgets' ) ) : ?>
        <?php dynamic_sidebar( 'upcoming-events-widgets' ); ?>
        <?php endif; ?>
        <a href="https://calendar.activedatax.com/germanna/CalendarNow.aspx?amp;more=1/1/0001&amp;display=Month&amp;type=public" class="button default text-center" target="_blank">View More Events</a>
      </div>
      <!--.upcoming-events-->
    </div>
  </div>
  </div>
</main>