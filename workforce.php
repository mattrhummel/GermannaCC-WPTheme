<?php
/*
Template Name: Workforce Home
*/
get_header(); ?>
<section class="container" role="document">
  <?php do_action( 'foundationpress_after_header' ); ?>
  <div class="home-intro">
    <div class="row">
      <div class="small-12 medium-12 large-12 columns" role="main">
        <!--home-feature-intro-->
        <div class="small-12 medium-8 columns home-features-intro " id="main">
          <?php //Start of Tab Widget Container
          if ( is_active_sidebar( 'workforce-intro-widget' ) ) : ?>
          <?php dynamic_sidebar( 'workforce-intro-widget' ); ?>
          <ul class="pricing-table mobile-hide">
            <li class="title">Services</li>
            <li class="bullet-item"><a href="https://germanna.augusoft.net/index.cfm?fuseaction=1010&&">Course &amp; Registration</a></li>
            <li class="bullet-item"><a href="/workforce/adult-career-center/">Adult Career Center</a></li>
            <li class="bullet-item"><a href="/workforce/conference-and-events/">Conference and Events</a></li>
            <li class="bullet-item"><a href="/workforce/health-care-admissions/">Healthcare Admissions</a></li>
            <li class="bullet-item"><a href="/workforce/motorcycle-transportation/">Motorcycle and Transportation</a></li>
            <li class="bullet-item"><a href="/workforce/contact/">Contact Workforce</a></li>
          </ul>
          <?php endif; //End of Tab Widget Container  ?>
        </div>
        <!--.home-feature-intro-->
        <!--upcoming-events-->
        <div class="small-12 medium-3 columns events home-feature-intro">
          <?php if ( is_active_sidebar( 'upcoming-workforceevents-widgets' ) ) : ?>
          <?php dynamic_sidebar( 'upcoming-workforceevents-widgets' ); ?>
          <?php endif; ?>
        </div>
        <!--.upcoming-events-->
      </div>
    </div>
  </div>
<!--Germanna Highlights and Upcoming Events Row-->
<div class="module parallax parallax-2 no-margin">
  <div class="highlights">
    <h2 class="text-center">Workforce Highlights</h2>
    <!--Get Germanna Highlights Excerpts-->
    <section>
      <div class="highlights-slider-container">
            <ul class="bxslider3 highlights-content">

          <?php
              $loop = new WP_Query(array('post_type' => 'workforce-highlights',
                            'post_status' => 'published',
                            'posts_per_page' => 12,
                            'orderby' => '',
                            'caller_get_posts' => 1
                            ));
          ?>
              <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <li class="workforce-slides">
                <div class="content">
                  <a href="<?php the_permalink(); /*Get Title Link*/ ?>" title="<?php the_title_attribute();?>" class="wf-highlights-slides">
                    <h3>
                    <?php the_title(); /*Get Excerpt Title*/ ?>
                    </h3>
                    <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('workforce-highlights'); ?>
                    <?php endif; ?>
                    <p><?php the_excerpt(); /*Display the excerpt*/ ?></p>
                  </a>
                </div>
              </li>
              <?php endwhile; wp_reset_postdata(); ?>
              <!--End the loop-->
            </ul>
        <div class="outside">
          <span id="slider-prev3"></span>
          <span id="slider-next3"></span>
        </div>
      </div>
            <div class="text-center">
       <a class="button read-more" href="/workforce-highlights/">More Highlights</a>
      </div>

    </section>
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