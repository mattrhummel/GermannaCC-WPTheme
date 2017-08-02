</section>
<div class="scroll-top-wrapper ">
<span class="scroll-top-inner">
  <i class="fa fa-2x fa-arrow-circle-up"></i>
</span>
</div>
<footer class="footer">
<?php do_action( 'foundationpress_before_footer' ); ?>
<?php
if (   ! is_active_sidebar( 'footer-col1-widgets'  )
&& ! is_active_sidebar( 'footer-col2-widgets' )
&& ! is_active_sidebar( 'footer-col3-widgets'  )
&& ! is_active_sidebar( 'footer-callto-widgets'  )
)
?>
<div class="row">
  <div class="small-12 medium-12 large-12 columns no-margin">
    <div class="small-12 medium-8 large-8 columns no-margin">
      <h3><?php bloginfo( 'description' ); ?></h3>
      <div class=" small-12 medium-6 large-6 columns">
        <?php wp_nav_menu( array( 'menu' => 'Footer Col1 Menu', 'container' => 'true', 'menu_class' => 'links' ) ); ?>
        <?php dynamic_sidebar( 'footer-col1-widgets' ); ?>
      </div>
      <div class=" small-12 medium-6 large-6 columns no-margin">
        <?php wp_nav_menu( array( 'menu' => 'Footer Col2 Menu', 'container' => 'true', 'menu_class' => 'links' ) ); ?>
        <?php dynamic_sidebar( 'footer-col2-widgets' ); ?>
      </div>
    </div>
    <div class="small-12 medium-4 large-4 columns">
      <h4><?php dynamic_sidebar( 'footer-callto-widgets' ); ?>
      </h4>
      <?php dynamic_sidebar( 'footer-col3-widgets' ); ?>
    </div>
  </div>
  <?php do_action( 'foundationpress_after_footer' ); ?>
  <?php do_action( 'foundationpress_after_footer' ); ?>
  <?php do_action( 'foundationpress_layout_end' ); ?>
</div>
</footer>
<footer class="footer-copyright">
<div class="row">
  <div class="small-12 columns text-center">
    <p class="copywrite">&copy; 2016 Germanna Community College <br/>Germanna is part of the <a href="http://www.vccs.edu">Virginia Community College System</a></p>
  </div>
</div>
</footer>
<?php do_action( 'foundationpress_layout_end' ); ?>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>