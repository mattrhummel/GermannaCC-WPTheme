<?php
//Names the page template for each section
/*
Template Name: Request Information Thank You
*/


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
  <div class="row">
  <div class="callout-content">
  	<h1>Considering Germanna Community College?</h1>
      <p class="lead">    
Lets Get Started.
      </p>
  </div>   
  </div>
</div>
<!--.header-->
<!--Request Information Template Container-->
<div class="row">
	<div class="small-12 contain-to-grid">
		<section class="request-info">
			<div class="row">
				<div class="small-12 medium-12 large-8 columns form-group">

				<?php the_content(); ?>
				
	            </div>
			  <div class="small-12 medium-12 large-4 columns testimonials">
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
										<p class="student-alumni"><?php echo get_field( 'students_title' ); ?>
										</p>
										<div class="student-quote">
										<blockquote><?php echo  get_field( 'students_quote' ); ?></blockquote>
									</div>
								</div>
							</div>

<?php endwhile; wp_reset_query(); ?>
					</div>
					<!--end slides-->	
				</div>
			</div>	
		</div>
		
	</section>
</div>
</div>
<!--.request information-->



<?php do_action( 'foundationpress_after_content' ); ?>
<!--.content loop-->

<!-- Google Code for RFI form complete Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 991441201;
var google_conversion_language = "en";
var google_conversion_format = "1";
var google_conversion_color = "ffffff";
var google_conversion_label = "aPsVCKLr3m0QseLg2AM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/991441201/?label=aPsVCKLr3m0QseLg2AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<?php get_footer(); ?>