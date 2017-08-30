<div class="row">
<div class="quicklinks-container">
  <div class="container">
    <nav class="small-12 medium-9 large-9 columns pull-left top-bar-section quicklinks-bar hidden-for-small" id="QuicklinksNavigation" data-topbar data-options="is_hover: true">
      <?php foundationpress_top_bar_r(); //quicklinks bar and menu ?>
    </nav>
    <div class="medium-3 large-3 columns pull-right">
      <?php //Start of Important Links Widget Container
      if ( is_active_sidebar( 'quicklinks-widgets' ) ) : ?>
      <?php dynamic_sidebar( 'quicklinks-widgets' ); ?>
      <?php endif; //End of Important Links Widget Container
      ?>
    </div>
  </div>
</div>
</div>