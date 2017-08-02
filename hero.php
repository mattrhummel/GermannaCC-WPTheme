<?php
/*
Template Name: Hero
*/
get_header(); ?>
<div class="home-intro">
  <div class="row">
    <div class="small-12 medium-12 large-12 columns" role="main">
      <!--home-feature-intro-->
      <div class="small-12 medium-7 large-7 columns home-features-intro ">
        <?php //Start of Tab Widget Container
        if ( is_active_sidebar( 'intro-widget' ) ) : ?>
        <?php dynamic_sidebar( 'intro-widget' ); ?>
        <?php endif; //End of Tab Widget Container  ?>
        <h2>Becoming A Germanna Student</h2>
        <div class="row">
          <div class="small-12 columns no-margin">
            <div class="small-12 medium-4 large-4 columns home-panels">
              <ul class="feature-panels text-center">
                <li class="apply-panel">
                  <a href="/admissions/apply-online/">
                    <div class="panel-icon">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/board.png" height="35" width="35" alt="panel icon" />
                    </div>
                    <div class="panel-content">
                      <span class="title">Apply</span>
                      <span class="description">Get started at Germanna</span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="small-12  medium-4 large-4 columns home-panels">
              <ul class="feature-panels text-center">
                <li class="register-panel">
                  <a href="http://applications.germanna.edu/class-schedule/index.asp">
                    <div class="panel-icon">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/pencil.png" height="25" width="25" alt="panel icon" />
                    </div>
                    <div class="panel-content">
                      <span class="title">Register</span>
                      <span class="description">Search for courses and sign up</span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="small-12 medium-4 large-4 columns home-panels">
              <ul class="feature-panels text-center">
                <li class="payment-panel">
                  <a href="/paying-for-college/">
                    <div class="panel-icon">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/pig.png" height="45" width="45" alt="panel icon" />
                    </div>
                    <div class="panel-content">
                      <span class="title">Payment</span>
                      <span class="description">Explore your flexible payment options</span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--.home-feature-intro-->
      <!--upcoming-events-->
      <div class="small-12 medium-4 large-4 columns events home-feature-intro">
        <?php if ( is_active_sidebar( 'upcoming-events-widgets' ) ) : ?>
        <?php dynamic_sidebar( 'upcoming-events-widgets' ); ?>
        <?php endif; ?>
        <a href="http://calendar.activedatax.com/germanna/CalendarNow.aspx?amp;more=1/1/0001&display=Month&type=public" class="button default text-center">View More Events</a>
      </div>
      <!--.upcoming-events-->
    </div>
  </div>
</div>
<section class="explore-germanna">
  <h2 class="text-center">Explore Germanna</h2>
  <div class="row">
    <div class="small-12 medium-12 large-12 columns" role="main">
      <article role="article">
        <?php
        //Begin slider custom post type loop
        $loop = new WP_Query(array('post_type' =>'explore-slider',
                          'post_status' => 'published',
                          'posts_per_page' => 24,
                          'caller_get_posts' => 1
                          ));
        ?>
        <div class='explore-slider-container'>
          <ul class='bxslider2'>
            <?php while ( $loop->have_posts() ) : $loop->the_post();
            $my_meta = get_post_meta( $post->ID, 'custom_link', true ); /*Gets custom link for each explore germanna image post */
            if( $my_meta && '' != $my_meta ) :
            echo "\t\t\t\t<li>\n";
              echo "\t\t\t\t\t<a href='$my_meta'>\n";
                if ( has_post_thumbnail() ) : /*Grabs the explore germanna post featured images*/
                the_post_thumbnail('explore-slider'); /*Displays post thumbnail */
                echo "\t\t\t\t\t  </a>";
            echo "\t\t\t\t</li>\n";
            endif; /*End of post thumbnail check*/ ?>
            <?php
            endif; /*End of Custom Link Check*/
            endwhile; ?>
          </ul>
          <div class="outside">
            <span id="slider-prev2"></span>
            <span id="slider-next2"></span>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>
<?php wp_reset_postdata();
?>
<!--Germanna Highlights and Upcoming Events Row-->
<div class="module parallax parallax-1 no-margin">
  <div class="highlights">
    <h2 class="text-center">Germanna Highlights</h2>
    <!--Get Germanna Highlights Excerpts-->
    <article role="article">
      <div class="highlights-slider-container">
        <ul class="bxslider3 highlights-content">
          <?php
          global $post;
          $myposts = get_posts('post');
          foreach($myposts as $post) :
          ?>
          <li>
            <a href="<?php the_permalink(); /*Get Title Link*/ ?>" title="<?php the_title_attribute();?>">
              <div class="content">
                <h3><?php the_title(); /*Get Excerpt Title*/ ?></h3>
                <?php the_excerpt(); /*Display the excerpt*/ ?>
              </div>
            </a>
          </li>
          <?php endforeach; ?>
          <!--End the loop-->
        </ul>
        <div class="outside">
          <span id="slider-prev3"></span>
          <span id="slider-next3"></span>
        </div>
      </div>
    </article>
  </div>
  <div class="row text-center">
    <a class="button read-more" href="/highlights/">More Highlights</a>
  </div>
</div>
<div class='calltos' role='main'>
  <div class="row text-center">
    <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/on-time-registration-logo-lg.png" height="44" width="300"></p>
    <p>Register early and pay by deadline. Once the session begins, registration is closed.</p>
    <a href="/on-time/" class="button default">Learn More</a>
  </div>
</div>
<!--.extras-->
<?php get_footer(); ?>