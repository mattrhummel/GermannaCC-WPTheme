<?php //Get Weather Alert Ticker
if (is_page()) {

$post_id = 4963;
$queried_post = get_post($post_id);
$content = $queried_post->post_content;
$content = apply_filters('the_content', $content);
if ($content) {
echo "<div data-alert class='alert-box weather'>\n";
echo "<div class='row'>\n";
echo "<div class='small-12 medium-11 columns'>\n";
echo "$content";
echo "</div>";
echo "</div>";
echo "<a href='#' class='close'><i class='fa fa-times-circle'></i></a>";
echo "</div>";
}

else {
}

}
?>
<!--<p>Sign Up For <a href='/e2campus/'>e2Campus Alerts</a> Today!</p>-->
<!--Quicklinks Container-->
  <div class="quicklinks-container contain-to-grid hidden-for-small show-for-medium-up">
    <div class="quicklinks-bar" data-topbar data-topbar role="navigation">
      <div class="row">
        <!--Container For Call To Menu-->
        <div class="small-12 medium-9 large-9 columns">
          <?php foundationpress_top_bar_r();s ?>
        </div>
        <div class="medium-3 large-3 columns">
        <?php //Start of Important Links Widget Container
        if ( is_active_sidebar( 'quicklinks-widgets' ) ) : ?>
        <?php dynamic_sidebar( 'quicklinks-widgets' ); ?>
        <?php endif; //End of Important Links Widget Container
        ?>
        </div>
      </div>
    </div>
  </div>
  <!--.quicklinkscontainer-->
  <!--Banner for logo and tagline-->
  <div class="banner contain-to-grid show-for-medium-up hidden-for-small-only" itemscope itemtype="http://schema.org/CollegeOrUniversity">
    <div class="row">
      <div class="large-4 medium-4 columns" itemprop="logo">
        <a itemprop="url" href="<?php echo get_home_url(); ?>" class="logo" itemprop="name">Germanna Community College</a>
      </div>
      <div class="large-8 medium-8 columns">
        <p class="tagline text-right" itemprop="description">
        <?php echo get_bloginfo ( 'description' );  ?>
        </p>
        <p class="sub-tagline text-right">Questions? <span itemprop="telephone">(540) 891-3000</span></p>
        <?php //get custom sidebar menu for section
        wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
        'menu' => 'Mini Menu', 'container' => 'true', 'menu_class' => 'mini-menu text-right show-for-medium-up' ) ); ?>
      </div>
    </div>
  </div>
  <div class="top-bar-container contain-to-grid show-for-medium-up">
    <nav class="top-bar" data-topbar>
      <div class="top-bar-section">
        <?php foundationpress_top_bar_l(); ?>
      </div>
    </nav>
  </div>
  <!--.banner-->