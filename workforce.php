<?php
/*
Template Name: Workforce Home
*/
/*headings*/
$page_heading = get_field('page_heading');
$workforce_highlights_heading = get_field('workforce_highlights_heading');
$social_media_heading = get_field('social_media_heading');
/*boxes*/
$box_1_heading = get_field('box_1_heading');
$box_1_description = get_field('box_1_description');
$box_1_image = get_field('box_1_image');
$box_1_url= get_field('box_1_url');
$box_1_button_text = get_field('box_1_button_text');
$box_2_heading = get_field('box_2_heading');
$box_2_description = get_field('box_2_description');
$box_2_image = get_field('box_2_image');
$box_2_url= get_field('box_2_url');
$box_2_button_text = get_field('box_2_button_text');
$box_3_heading = get_field('box_3_heading');
$box_3_description = get_field('box_3_description');
$box_3_image = get_field('box_3_image');
$box_3_url= get_field('box_3_url');
$box_3_button_text = get_field('box_3_button_text');
$box_4_heading = get_field('box_4_heading');
$box_4_description = get_field('box_4_description');
$box_4_url= get_field('box_4_url');
$box_5_heading = get_field('box_5_heading');
$box_5_description = get_field('box_5_description');
$box_5_url= get_field('box_5_url');
/*social media*/
$facebook_url = get_field('facebook_url');
$twitter_url = get_field('twitter_url');
$youtube_url = get_field('youtube_url');
$online_chat_url = get_field('online_chat_url');
/*Extras*/
$highlights_button_text = get_field('highlights_button_text');
$highlights_button_url = get_field('highlights_button_url');
get_header();
?>
<?php do_action( 'foundationpress_after_header' ); ?>
<div class="home-intro">
  <div class="row">
    <div class="container">
      
      <main  id="#main" class="small-12 medium-12 large-12 columns" role="main">
        
        <h1 class="text-center home-heading fancy"><span><?php echo $page_heading; ?></span></h1>
        <div class="small-12 medium-9 columns" id="main">
          
          <div class="small-12 large-4 columns home-panels">
            <ul class="feature-panels text-center">
              <li class="apply-panel">
                <a href="<?php echo $box_1_url; ?>">
                  <div class="panel-icon">
                    <?php
                    if( !empty($box_1_image) ): ?>
                    <img src="<?php echo $box_1_image['url']; ?>" alt="<?php echo $box_1_image['alt']; ?>" height="64" width="94" class="img-responsive" />
                    <?php endif; ?>
                  </div>
                  <div class="panel-content">
                    <span class="title"><?php echo $box_1_heading; ?></span>
                    <span class="description"><?php echo $box_1_description; ?></span>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="small-12  large-4 columns home-panels">
            <ul class="feature-panels text-center">
              <li class="register-panel">
                <a href="<?php echo $box_2_url; ?>">
                  <div class="panel-icon">
                    
                    <?php
                    if( !empty($box_2_image) ): ?>
                    <img src="<?php echo $box_2_image['url']; ?>" alt="<?php echo $box_2_image['alt']; ?>" height="64" width="64"  class="img-responsive"  />
                    <?php endif; ?>
                  </div>
                  <div class="panel-content">
                    <span class="title register-title"><?php echo $box_2_heading; ?></span>
                    <span class="description"><?php echo $box_2_description; ?></span>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="small-12 large-4 columns home-panels">
            <ul class="feature-panels text-center">
              <li class="payment-panel">
                <a href="<?php echo $box_3_url; ?>">
                  <div class="panel-icon">
                    
                    <?php
                    if( !empty($box_3_image) ): ?>
                    <img src="<?php echo $box_3_image['url']; ?>" alt="<?php echo $box_3_image['alt']; ?>" height="64" width="64"  class="img-responsive"  />
                    <?php endif; ?>
                  </div>
                  <div class="panel-content">
                    <span class="title"><?php echo $box_3_heading; ?></span>
                    <span class="description"><?php echo $box_3_description; ?></span>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="small-12 large-7 columns panel home-news text-center">
            <a href="<?php echo $box_4_url; ?>" class="panel-content">
              <span class="title center-block"><?php echo $box_4_heading; ?></span>
              <span class="description center-block"><?php echo $box_4_description; ?></span>
            </a>
          </div>
          <div class="small-12 large-5 columns panel home-news workforce-news text-center">
            <a href="<?php echo $box_5_url ?>" class="panel-content">
              <span class="title center-block"><?php echo $box_5_heading; ?></span>
              <span class="description center-block"><?php echo $box_5_description ?></span>
            </a>
          </div>
          <div class="entry-content">
            
            <?php the_content(); ?>
            
          </div>
          
          
        </div>
        <aside class="small-12 medium-3 columns wf-home-sidebar" role="complementary">
          <div class="sidebar-container">
            
            <h3>Workforce Services</h3>
            <?php do_action( 'foundationpress_before_sidebar' ); ?>
            <?php //get custom sidebar menu for section
            wp_nav_menu( array( 'menu' => 'Workforce Home Menu', 'container' => 'true', 'menu_class' => 'wf-home-menu no-bullet' ) ); ?>
            <?php do_action( 'foundationpress_after_sidebar' ); ?>
            
          </div>
          <div class="sidebar-social-icons">
            <h3><?php echo $social_media_heading; ?></h3>
            <ul class="intro-icons text-center">
              
              <?php if( !empty($facebook_url) ): ?>
              <li><a href="<?php echo $facebook_url; ?>" title="facebook"><span class="fa fa-facebook"></span ></a></li>
              <?php endif; ?>
              <?php if( !empty($youtube_url) ): ?>
              <li><a href="<?php echo $youtube_url; ?>" title="youtube"><span class="fa fa-youtube"></span ></a></li>
              <?php endif; ?>
              <?php if( !empty($twitter_url) ): ?>
              <li><a href="<?php echo $twitter_url; ?>" title="twitter"><span class="fa fa-twitter"></span ></a></li>
              <?php endif; ?>
              <?php if( !empty($online_chat_url) ): ?>
              <li><a href="<?php echo $online_chat_url; ?>"><span class="fa fa-headphones"></span ></a></li>
              <?php endif; ?>
            </ul>
          </div>
          <div class="sidebar-newsletter">
            
            <?php if ( is_active_sidebar( 'upcoming-workforceevents-widgets' ) ) : ?>
            <?php dynamic_sidebar( 'upcoming-workforceevents-widgets' ); ?>
            <?php endif; ?>
          </div>
          <div  class="sidebar-container">
            <?php //custom department widgets
            dynamic_sidebar( 'workforce-widgets' ); ?>
          </div>
        </aside>
        <!--.upcoming-events-->
      </main>
    </div>
  </div>
</div>
<!--Germanna Highlights and Upcoming Events Row-->
<div class="module parallax parallax-2 no-margin">
  
  <div class="highlights">

    <div class="row">
    <div class="container">

    <h2 class="text-center"><?php echo $workforce_highlights_heading; ?></h2>
    <!--Get Germanna Highlights Excerpts-->
    <div class="highlights-slider-container">
      
      
      <ul class="bxslider3 highlights-content">
        <?php
        $loop = new WP_Query(array(
        'post_type' => 'workforce-highlights',
        'post_status' => 'publish',
        'posts_per_page' => 12,
        'orderby' => '',
        'caller_get_posts' => 1
        ));
        ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <li class="workforce-slides">
          <div class="content">
            <div class="wf-highlights-slides" ?>
              <h3>
              <?php the_title(); /*Get Excerpt Title*/ ?>
              </h3>
              <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('workforce-highlights'); ?>
              <?php endif; ?>
              <?php the_content(); /*Display the excerpt*/ ?>
            </div>
          </div>
        </li>
        <?php endwhile; wp_reset_postdata(); ?>
        <!--End the loop-->
      </ul>
      <div class="outside">
        <span id="slider-prev3"></span>
        <span id="slider-next3"></span>
      </div>
      <div class="text-center">
        <?php if( !empty($highlights_button_text) ): ?>
        <a class="button read-more" href="<?php echo $highlights_button_url; ?>"><?php echo $highlights_button_text; ?></a>
        <?php endif; ?>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>
<!--<div class='calltos' role='main'>
  <div class="row text-center">
  </div>
</div>-->
<!--.extras-->
<?php get_footer(); ?>