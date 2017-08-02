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
  <!--Germanna Highlights -->
<div class="module parallax parallax-2 no-margin">
    <div class="row highlights container">
      <div class="small-12 medium-12 large-12 columns">
        <!--Get Germanna Highlights Excerpts-->

        <article role="article">
        <div class="highlights-slider-container">
            <h2 class="text-center">Workforce Highlights</h2>
          
            <ul class="bxslider3 highlights-content">

          <?php
              $loop = new WP_Query(array('post_type' => 'workforce-highlights',
                            'post_status' => 'published',
                            'posts_per_page' => 12,
                            'orderby' => 'menu_order',
                            'caller_get_posts' => 1
                            ));
          ?>
              <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <li>
                <div class="content">
                  <a href="<?php the_permalink(); /*Get Title Link*/ ?>" title="<?php the_title_attribute();?>" class="wf-highlights-slides">
                    <h3>
                    <?php the_title(); /*Get Excerpt Title*/ ?>
                    </h3>
                    <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('germanna-highlights'); ?>
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
        </article>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>