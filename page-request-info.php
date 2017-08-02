<?php
//Names the page template for each section
/*
Template Name: Request Information
*/
get_header('requestinfo'); ?>
<!--Get Page Banner-->
<div class="banner contain-to-grid sticky">
	<div class="row" data-topbar role="navigation" data-options="sticky_on: large">
		<div class="large-4 medium-4 columns">
			<a href="http://www.germanna.edu" class="logo">Germanna Community College</a>
		</div>
	</div>
</div>
<!--.banner-->
<!--Header for page heading-->
<div class="callout contain-to-grid">
	<div class="row">
		<div class="small-12 medium-8">
			<h1><?php echo get_post_meta($post->ID, 'custom_header', true); ?></h1>
			<p class="lead"><?php echo get_post_meta($post->ID, 'custom_lead_header', true); ?></p>
		</div>
	</div>
</div>
<!--.header-->
<!--Request Information Template Container-->
<div class="row">
	<div class="small-12 contain-to-grid">
		<section class="request-info">
			<div class="row">
				
				<div class="medium-7 columns form-group">
				<?php //Gets Page content
			the_content(); ?>
	           </div>
			  




			  <div class="medium-4 columns testimonials">
						<div class="panel  radius">
							
							<!--Start bxslider slides-->
							<div class="bxslider-testimonials">
								<!--Bxslider Slide-->
								
								<div class="row collapse slide-pane">
									<div class="medium-4 columns">
										
										<div class="thumbnail">
											<img class="thumbnail text-left" src="<?php echo get_template_directory_uri()?>/img/jasmine-thumb.png" height="80px" width="180px">
										</div>
										
									</div>
									<div class="medium-8 columns student-info">
										<h4 class="student-name">Jesica Perez</h4>
										<p class="student-alumni">Germanna Graduate<br/>
										</p>
									</div>
									
									<div class="row">
										<div class="small-12 columns student-quote">
										<blockquote>"I have tremendous respect for Germanna and what it does for people. As a tutor, I get to see people who are a lot like I was when I started here.  IT's inspiring to see them go through the same process i did. The opportunity Germanna gives people is amazing. I don't know if I would have had the same results anywhere else."</blockquote>
									</div>
								</div>
							</div>
							<!--.bxslider slide-->
							<!--Bxslider Slide-->
							<div class="row collapse slide-pane">
								<div class="medium-4 columns">
									
									<div class="thumbnail">
										<img class="thumbnail text-left" src="<?php echo get_template_directory_uri()?>/img/eugene-thumb.png" height="80px" width="80px">
									</div>
									
								</div>
								
								<div class="medium-8 columns student-info">
									<h4 class="student-name">Eugene Triplett</h4>
									<p class="student-alumni">Germanna Graduate<br/>
									</p>
								</div>
								
								<div class="row">
									<div class="small-12 columns student-quote">
									<blockquote>"For the price you pay, it's probably your best bet to start. IF you're note sure what you want to do, what you want your major to be, it's the best way to start"</blockquote>
								</div>
							</div>
						</div>
						<!--.bxslider slides-->
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

<?php get_footer(); ?>