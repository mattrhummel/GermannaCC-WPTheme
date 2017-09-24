<div class="scroll-top-wrapper">
<div class="scroll-top-inner">
  <span class="fa fa-2x fa-arrow-circle-up" aria-hidden="true" aria-label="back to top"></span>
</div>
</div>
<footer class="footer" aria-labelledby="FooterImportantLinks">
<div class="container">
  <?php do_action( 'foundationpress_before_footer' ); ?>
  <?php
  if (   ! is_active_sidebar( 'footer-col1-widgets'  )
  && ! is_active_sidebar( 'footer-col2-widgets' )
  && ! is_active_sidebar( 'footer-col3-widgets'  )
  && ! is_active_sidebar( 'footer-callto-widgets'  )
  )
  ?>
  <div class="row" id="FooterImportantLinks">
    <div class="small-12 medium-7 large-8 columns">
      <h3 class="tagline"><?php bloginfo( 'description' ); ?></h3>
      <div class=" small-12 medium-6 columns no-margin-left ">
        <?php wp_nav_menu( array( 'menu' => 'Footer Col1 Menu', 'container' => 'true', 'menu_class' => 'links' ) ); ?>
        <?php dynamic_sidebar( 'footer-col1-widgets' ); ?>
      </div>
      <div class=" small-12 medium-6  columns no-margin-left">
        <?php wp_nav_menu( array( 'menu' => 'Footer Col2 Menu', 'container' => 'true', 'menu_class' => 'links' ) ); ?>
        <?php dynamic_sidebar( 'footer-col2-widgets' ); ?>
      </div>
    </div>
    <div class="small-12 medium-5 large-4 columns">
      
      <h3 class="contact-number">
      <?php if( get_field('before_number_text', 'option') ): //if the text before the number is filled out dispaly the text else it will hide ?>
      <?php the_field('before_number_text', 'option');  ?>
      <?php endif; ?>
      <?php if( get_field('college_phone_number', 'option') ): //if the phone number is entered display the phone number else it will hide ?>
      <?php the_field('college_phone_number', 'option'); ?>
      <?php endif; ?>
      </h3>
      
      <ul class="social-icons text-center" role="menu">
        <?php if( get_field('facebook_url', 'option') ): ?>
        <li role="menuitem"><a href="<?php the_field('facebook_url', 'option'); ?>"  aria-hidden="true"><span class="fa fa-facebook"></span></a></li>
        <?php endif; ?>
        <?php if( get_field('youtube_url', 'option') ): ?>
        <li role="menuitem"><a href="<?php the_field('youtube_url', 'option'); ?>" aria-hidden="true"><span class="fa fa-youtube"></span></a>
      </li>
      <?php endif; ?>
      <?php if( get_field('twitter_url', 'option') ): ?>
      <li role="menuitem"><a href="<?php the_field('twitter_url', 'option'); ?>" aria-hidden="true"><span class="fa fa-twitter"></span></a>
    </li>
    <?php endif; ?>
    <?php if( get_field('instagram_url', 'option') ): ?>
    <li role="menuitem"><a href="<?php the_field('instagram_url', 'option'); ?>"  aria-hidden="true"><span  class="fa fa-instagram"></span></a>
  </li>
  <?php endif; ?>
  <?php if( get_field('flickr_url', 'option') ): ?>
  <li role="menuitem"><a href= "<?php the_field('flickr_url', 'option'); ?>"
  ><span  class="fa fa-flickr"></span ></a>
</li>
<?php endif; ?>
<?php if( get_field('chat_url', 'option') ): ?>
<li role="menuitem"><a href="<?php the_field('chat_url', 'option'); ?>" aria-hidden="true"><span  class="fa fa-headphones"></span></a>
</li>
<?php endif; ?>
<?php if( get_field('rss_url', 'option') ): ?>
<li role="menuitem"><a href="<?php the_field('rss_url', 'option'); ?>" aria-hidden="true"><span  class="fa fa-rss"></span></a>
</li>
<?php endif; ?>
</ul>
<?php dynamic_sidebar( 'footer-col3-widgets' ); ?>
</div>
<?php do_action( 'foundationpress_after_footer' ); ?>
<?php do_action( 'foundationpress_after_footer' ); ?>
<?php do_action( 'foundationpress_layout_end' ); ?>
</div>
</div>
</footer>
<footer class="footer-copyright" aria-labelledby="FooterCopywriteInfo">
<div class="container">
<div class="row" id="FooterCopywriteInfo">
<div class="small-12 columns text-center">
<p class="copywrite">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' );?><br/><?php the_field('vccs_text', 'option'); ?></p>
</div>
</div>
</div>
</footer>
</div>
</div>
<?php do_action( 'foundationpress_layout_end' ); ?>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script type="text/javascript">
/*<![CDATA[*/
(function() {
var sz = document.createElement('script'); sz.type = 'text/javascript'; sz.async = true;
sz.src = '//us2.siteimprove.com/js/siteanalyze_7751.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sz, s);
})();
/*]]>*/
</script>
</body>
</html>