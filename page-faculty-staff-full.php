<?php
//Names the page template for each section
/*
Template Name: Faculty Staff Full
*/
get_header(); ?>
<!--Get Page Banner-->
<?php get_template_part( 'parts/banners' ); ?>
<!--.banner-->
<!--programs panels-->
<style>
.panel ul {list-style: none;}
.panel-img {margin-bottom: 20px;}
.panel h3 {font-size: 1em;}
.panel-list {list-style: none; margin:  0; padding:  0;}
.panel-list li.  bullet-item {font-weight: 800;}
.panel-list li.title {color: #333333; padding: 6px 0;}
.panel-list li.bullet-item {padding: 6px 0; border-top: 1px solid #CCC;}
.panel-list li.bullet-item a {font-size: .8em;}
</style>
<div class="row">
  
  <div class="small-12 medium-12 large-12 columns" role="main" id="main">
    <div class="small-12 medium-4 large-4 columns">
      
      <div class="panel">
        <h3>GCC Log-Ins</h3>
        <img src="http://placehold.it/350x160" class="panel-img">
        <ul class="panel-list">
          <?php //get custom sidebar menu for section
    wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
    'menu' => 'Faculty Login Panel', 'container' => 'false', 'menu_class' => 'panel-list' ) ); ?>
        </ul>
      </div>
    </div>
    <div class="small-12 medium-4 large-4 columns">
      
      <div class="panel">
        <h3>Student Info &amp; Directories</h3>
        <img src="http://placehold.it/350x160" class="panel-img">
        
        <ul class="panel-list">
          <li class="bullet-item"><a href="/dental/">Academic Advising</a></li>
          <li class="bullet-item"><a href="http://www.nvcc.edu/medical/divisions/allied/dental-hygiene.html">Academic Calendar</a></li>
          <li class="bullet-item"><a href="/dental/dental-assisting/">Faculty Advising Contacts</a></li>
          <li class="bullet-item"><a href="/dental/dental-hygiene/">Events Calendar</a></li>
          <li class="bullet-item"><a href="/dental/dental-hygiene/">Faculty Advising</a></li>
          <li class="bullet-item"><a href="/dental/dental-hygiene/">Administration</a></li>
          <li class="bullet-item"><a href="/dental/dental-hygiene/">Academic Deans</a></li>
          <li class="bullet-item"><a href="/dental/dental-hygiene/">Germanna Policies</a></li>
          <li class="bullet-item"><a href="/dental/dental-hygiene/">Closings and Emergencies</a></li>
          <li class="bullet-item"><a href="/dental/dental-hygiene/">Faculty and Staff Directory</a></li>
          <li class="bullet-item"><a href="/dental/dental-hygiene/">Workforce Directory</a></li>
          <li class="bullet-item"><a href="/dental/dental-hygiene/">Student Technical Help Desk</a></li>
        </ul>
      </div>
    </div>
    <div class="small-12 medium-4 large-4 columns">
      <div class="panel">
        <h3>Faculty &amp; Staff Resources</h3>
        <img src="http://placehold.it/350x160" class="panel-img">
        <ul class="panel-list">
          <li class="bullet-item"><a href="/physical-therapist-assistant/">GCentral</a></li>
          <li class="bullet-item"><a href="/physical-therapist-assistant/about-the-program/">Business Office</a></li>
          <li class="bullet-item"><a href="/physical-therapist-assistant/accreditation/">Presidents Office</a></li>
          <li class="bullet-item"><a href="/physical-therapist-assistant/program-requirements/">Human Resources</a></li>
          <li class="bullet-item"><a href="/dental/dental-hygiene/">Organizational Planning</a></li>
          <li class="bullet-item"><a href="/dental/dental-hygiene/">Facilities</a></li>
          <li class="bullet-item"><a href="/dental/dental-hygiene/">Technical Services</a></li>
          <li class="bullet-item"><a href="/dental/dental-hygiene/">Publications</a></li>
          <li class="bullet-item"><a href="/dental/dental-hygiene/">Germanna Staff Association</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--.programs-->
<!--programs panels-->
<div class="row nursing-panels">
  <div class="small-12 medium-12 large-12 columns">
    
  </div>
</div>
<!--.programs-->

<?php get_footer(); ?>