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
        <div class="small-12 medium-8 large-8 columns">
          <h3><?php bloginfo( 'description' ); ?></h3>
          <div class=" small-12 medium-6 large-6 columns no-margin-left">
            <?php wp_nav_menu( array( 'menu' => 'Footer Col1 Menu', 'container' => 'true', 'menu_class' => 'links' ) ); ?>
            <?php dynamic_sidebar( 'footer-col1-widgets' ); ?>
          </div>
          <div class=" small-12 medium-6 large-6 columns no-margin-left">
            <?php wp_nav_menu( array( 'menu' => 'Footer Col2 Menu', 'container' => 'true', 'menu_class' => 'links' ) ); ?>
            <?php dynamic_sidebar( 'footer-col2-widgets' ); ?>
          </div>
        </div>
        <div class="small-12 medium-4 large-4 columns">
         
          <h3>
          <?php if( get_field('before_number_text', 'option') ): //if the text before the number is filled out dispaly the text else it will hide ?>
          <?php the_field('before_number_text', 'option');  ?>
          <?php endif; ?>
          <?php if( get_field('college_phone_number', 'option') ): //if the phone number is entered display the phone number else it will hide ?>
          <?php the_field('college_phone_number', 'option'); ?>
          <?php endif; ?>
          </h3>
          
          <ul class="social-icons text-center" role="menu">
            <?php if( get_field('facebook_url', 'option') ): ?>
            <li role="menuitem"><a href="<?php the_field('facebook_url', 'option'); ?>" title="facebook" target="_blank" aria-hidden="true"><span class="fa fa-facebook"></span ></a>
            </li>
            <?php endif; ?>

            <?php if( get_field('youtube_url', 'option') ): ?>
            <li role="menuitem"><a href="<?php the_field('youtube_url', 'option'); ?>" title="youtube" target="_blank"  aria-hidden="true"><span  class="fa fa-youtube"></span ></a>
            </li>
            <?php endif; ?>

            <?php if( get_field('twitter_url', 'option') ): ?>
            <li role="menuitem"><a href="<?php the_field('twitter_url', 'option'); ?>" title="twitter" target="_blank"  aria-hidden="true"><span  class="fa fa-twitter"></span></a>
            </li>
            <?php endif; ?>

            <?php if( get_field('instagram_url', 'option') ): ?>
            <li role="menuitem"><a href="<?php the_field('instagram_url', 'option'); ?>" title="instagram" target="_blank"  aria-hidden="true"><span  class="fa fa-instagram"></span></a>
            </li>
            <?php endif; ?>

            <?php if( get_field('flickr_url', 'option') ): ?>
            <li role="menuitem"><a href= "<?php the_field('flickr_url', 'option'); ?>"
            title="flickr" target="_blank"><span  class="fa fa-flickr"></span ></a>
            </li>
            <?php endif; ?>

            <?php if( get_field('chat_url', 'option') ): ?>
            <li role="menuitem"><a href="<?php the_field('chat_url', 'option'); ?>" title="online chat" aria-hidden="true"><span  class="fa fa-headphones"></span></a>
            </li>
            <?php endif; ?>

            <?php if( get_field('rss_url', 'option') ): ?>
            <li role="menuitem"><a href="<?php the_field('rss_url', 'option'); ?>" title="rss feed" target="_blank" aria-hidden="true"><span  class="fa fa-rss"></span></a>
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
        <p class="copywrite">&copy; <?php echo date('Y'); ?>
        <?php bloginfo( 'name' );?><br/><?php the_field('vccs_text', 'option'); ?></p>
      </div>
    </div>
  </div>
</footer>

</div>
  </div>

<?php do_action( 'foundationpress_layout_end' ); ?>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-11698249-1', 'auto');
ga('send', 'pageview');
</script>
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