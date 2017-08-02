<?php
//Names the page template for each section
/*
Template Name: Subpage For Nursing Health Technologies
*/
get_header(); ?>
<!--Get Page Banner-->
<?php get_template_part( 'parts/banners' ); ?>
<!--Get Breadcrumbs-->
<?php get_template_part( 'parts/breadcrumbs' ); ?>
<!--.breadcrumbs-->
<!--.banner-->
<!--Content loop-->
<div class="row">
  <div class="small-12 large-12 columns" role="main">
    <?php // Gets the alert custom post type id for each sub page needing special announcement
    $post_id = 5485;
    $queried_post = get_post($post_id);
    $content = $queried_post->post_content;
    $content = apply_filters('the_content', $content);
    if ($content) {
      
    echo "<div class='alert-box alert'>";
      echo "$content";
      echo "<a href='#' class='close'><i class='icon-remove-circle'></i></a></div>";
              
      }
      else {
        
        
      }
      ?>
    </div>
  </div>
  <div class="row">
    <div class="small-12 medium-12 large-12 columns" role="main">
      <ul class="sub-nav" role="menu" title="Filter Menu List" style="list-style:none;">
        
        <li class="" role="menuitem"><a href="/nursing-health-technologies/admissions/">Admissions</a></li>
        <li role="menuitem"><a href="/nursing-health-technologies/programs/">Programs</a></li>
        <li role="menuitem"><a href="/nursing-health-technologies/application-deadlines/">Application Deadlines</a></li>
        <li role="menuitem"><a href="/nursing-health-technologies/financial-aid/">Financial Aid</a></li>
        <li role="menuitem"><a href="/nursing-health-technologies/faculty-staff/">Faculty &amp; Staff</a></li>
        <li role="menuitem"><a href="/nursing-health-technologies/nursing-and-health-faqs/">FAQs</a></li>
      </ul>
    </div>
  </div>
  <div class="row">
    
    <!--Get Content-->
    <?php get_template_part( 'parts/content' ); ?>
    <!--.content-->
    
    
    <!--Get Page Sidebars-->
    <?php get_template_part( 'parts/sidebars/nursing-health-sidebar' ); ?>
    <!--.sidebars-->
  </div>
  <!--Get Extras-->
  <?php get_template_part( 'parts/extras' ); ?>
  <!--.extras-->
  <?php get_footer(); ?>