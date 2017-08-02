<?php
//Names the page template for each section
/*
Template Name: Request Information
*/
$students_name	= get_field('students_name');
$students_title	= get_field('students_title');
$students_image	= get_field('students_image');
$students_quote	= get_field('students_quote');

get_header('requestinfo'); ?>
<!--Get Page Banner-->
<div class="banner sticky">
<div class="row" data-topbar role="navigation" data-options="sticky_on: large">
  <div class="small-12 large-4 medium-12 columns">
      <a href="http://www.germanna.edu" class="logo">Germanna Community College</a>
  </div>
</div>
</div>
<!--.banner-->

<!--Header for page heading-->
<div class="callout">
  <div class="callout-content">
      <h1><?php echo get_post_meta($post->ID, 'custom_header', true); ?></h1>
      <p class="lead">
          <?php echo get_post_meta($post->ID, 'custom_lead_header', true); ?>
      </p>
  </div>
</div>
<!--.header-->

<!--Request Information Template Container-->
<div class="row">
<div class="contain-to-grid">
  
  <div class="request-info">
     
      <div class="row">
              
      <!--Request Form-->
          <div class="small-12 medium-12 large-8 columns form-group">

     
     					<!--Tab Container-->
<div class="tabs-content clearfix">

<!--Tab list--> 
<ul class="tabs small-12 columns" data-tab role="tablist">
<li class="tab-title small-12 medium-6 columns active" role="presentation">
<a href="#panel2-1" role="tab" tabindex="0" aria-selected="true" aria-controls="panel2-1">Step 1</a>
</li>
<li class="tab-title small-12 medium-6 columns" role="presentation">
<a href="#panel2-2" role="tab" tabindex="0" aria-selected="false" aria-controls="panel2-2">Step 2</a>
</li>
</ul><!--.tablist-->

<!--Tab Panel 1-->

<div role="tabpanel" aria-hidden="false" class="content active" id="panel2-1">

<fieldset class="step-1">
<legend>
Step 1:
</legend>

<div class="row">

<div class="large-12 columns">
  <p><strong>Field of Study Interested In (optional)</strong></p>
  <select name="field-of-study" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
      <option value="">---</option>
      <option value="Undecided">Undecided</option>
      <option value="Take A Class">Take A Class</option>
      <option value="Transfer Program">Transfer Program</option>
      <optgroup label="Associate Of Arts And Sciences (AA&S)">
          <option value="Business Administration">Business Administration</option>
          <option value="Education">Education</option>
          <option value="Education Specialization K-8">Education (K-8)</option>
          <option value="General Studies">General Studies</option>
          <option value="General Studies Psychology">General Studies - Psychology Specialization</option>
          <option value="Liberal Arts">Liberal Arts</option>
          <option value="Science">Science</option>
      </optgroup>
      <optgroup label="Associate Of Science Degree(AS)">
          <option value="Engineering - Mechanical">Engineering (Mechanical)</option>
          <option value="Engineering - Electrical">Engineering (Electrical)</option>
      </optgroup>
      <optgroup label="Associate Of Applied Science Degrees (AAS)">
          <option value="Business Management">Business Management</option>
          <option value="Early Childhood Development">Early Childhood Development</option>
          <option value="Fire Science Technology">Fire Science Technology</option>
          <option value="IST: Info Management/Network Security">Information System Technology - Information Management or Network Security</option>
          <option value="Networking">Networking</option>
          <option value="Nursing">Nursing*</option>
          <option value="LPN for Advanced Standing(LPN to RN)">LPN for Advanced Standing (LPN to RN)*</option>
          <option value="Physical Therapist Assistant">Physical Therapist Assistant*</option>
          <option value="Police Science">Police Science</option>
          <option value="Technical Studies Industrial Maintenance">Technical Studies Industrial Maintenance</option>
      </optgroup>
      <optgroup label="Certificates">
          <option value="Dental Assisting Certificate">Dental Assisting </option>
          <option value="Early Childhood Development Certificate">Early Childhood Development</option>
          <option value="Fine Arts Certificate">Fine Arts</option>
          <option value="Fire Science Technology Certificate">Fire Science Technology </option>
          <option value="General Education Certificate">General Education**</option>
          <option value="Graphic Communications Certificate">Graphic Communications</option>
          <option value="Police Science Certificate">Police Science</option>
          <option value="Practical Nursing Certificate">Practical Nursing*</option>
          <option value="Practical Nursing (Eastern View H.S.) Certificate">Practical Nursing (Eastern View H.S.)*</option>
      </optgroup>
      <optgroup label="Career Studies Certificate (CSC)">
          <option value="Accounting CSC">Accounting</option>
          <option value="Advanced Networking CSC">Advanced Networking</option>
          <option value="Allied Health CSC">Allied Health</option>
          <option value="American Sign Language CSC">American Sign Language</option>
          <option value="Automotive Diagnostician CSC">Automotive Diagnostician</option>
          <option value="Automotive Technician CSC">Automotive Technician</option>
          <option value="Business Core CSC">Business Core</option>
          <option value="E-Commerce CSC">E-Commerce**</option>
          <option value="Early Childhood Development CSC">Early Childhood Development </option>
          <option value="Engineering Technology CSC">Engineering Technology</option>
          <option value="Entrepreneurship CSC">Entrepreneurship (Small Business Management)</option>
          <option value="Industrial Maintenance Technology CSC">Industrial Maintenance Technology</option>
          <option value="Legal Assistant CSC">Legal Assistant</option>
          <option value="Microcomputer Applications for Business CSC">Microcomputer Applications for Business</option>
          <option value="Networking CSC">Networking </option>
          <option value="Nurse Aide CSC">Nurse Aide</option>
          <option value="Paraprofessional Counseling CSC">Paraprofessional Counseling </option>
          <option value="Personal Training CSC">Personal Training</option>
          <option value="Pharmacy Technician CSC">Pharmacy Technician*</option>
          <option value="Police Science CSC">Police Science</option>
          <option value="Supervision CSC">Supervision</option>
          <option value="Surgical Scrub Nurse CSC">Surgical Scrub Nurse*</option>
      </optgroup>
  </select>
  <p class="small">
      <strong>*</strong>Selective Admission Program – Admission Approval Required
      <br>
      <strong>**</strong> Not a Financial Aid Approved Plan
  </p>
</div>
</div>
<div class="large-12 columns">
<a href="#step-2" type="button" class="button round alignright next-tab">Continue</a>
</div>
</fieldset>
</div><!--.tabpanel1-->


<div role="tabpanel" aria-hidden="true" class="content" id="panel2-2">
<fieldset class="step-2">
<legend>Step 2:</legend>
<div class="row">
<div class="large-6 columns">
  <label>First Name*</label>
  [text* first-name]
</div>
<div class="large-6 columns">
  <label>Last Name*</label>
  [text* last-name ]
</div>
</div>
<div class="row">
<div class="large-6 columns">
  <label>Email*</label>
  [text* email]
</div>
<div class="large-6 columns">
  <label>Phone*</label>
  [text* phone ]
</div>
</div>
<div class="row">
<div class="large-6 columns">
  <label>Street Address or P.O. Box*</label>
  [text* address ]
</div>
<div class="large-6 columns">
  <label>City*</label>
  [text* city ]
</div>
</div>
<div class="row">
<div class="large-6 columns">
  <label>State*</label>
  [text* state ]
</div>
<div class="large-6 columns">
  <label>Zipcode*</label>
  [text* zipcode ] [recaptcha id:person] [submit id:submit class:button class:default class:round "Submit"]
</div>
</div>
</fieldset>
</div>

</div><!--.tabcontainer-->
              	
              </div><!--.requestform-->

              <!--Testimonials-->
          <div class="small-12 medium-12 large-4 columns testimonials show-for-medium-up">
              <div class="panel  radius">
                  <!--Start bxslider slides-->
                  <div class="bxslider-testimonials">
                      <!--Bxslider Slide-->
                      <?php $loop = new WP_Query( array( 'post_type' => 'request_info_slider', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
                      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                      <div class="row collapse slide-pane">
                          <div class="small-2 medium-4 columns">
                              <div class="thumbnail">
                                  <?php 
				$students_image = get_field('students_image');
				if( !empty($students_image) ): ?>
                                  <img src="<?php echo $students_image['url']; ?>" alt="<?php echo $students_image['alt']; ?>" />
                                  <?php endif; ?>
                              </div>
                          </div>
                          <div class="small-10 medium-8 columns student-info">
                              <h4 class="student-name"><?php echo get_field( 'students_name' ); ?></h4>
                              <p class="student-alumni">
                                  <?php echo get_field( 'students_title' ); ?>
                              </p>
                              <div class="student-quote">
                                  <blockquote>
                                      <?php echo  get_field( 'students_quote' ); ?>
                                  </blockquote>
                              </div>
                          </div>
                      </div>
                      <?php endwhile; wp_reset_query(); ?>
                  </div>
                  <!--end slides-->
              </div>
          </div><!--.testimonials-->

      </div>
  </div>
</div>
</div>
<!--.request information-->
<?php do_action( 'foundationpress_after_content' ); ?>
<!--.content loop-->
<?php get_footer(); ?>
