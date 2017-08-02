				<header id="homepage-hero">
					<div class="slider-container">
						<?php
						echo "\t<ul class='bxslider1'>\n";
						$loop = new WP_Query(array('post_type' => 'workforce-slider',
						'posts_per_page' => 10,
						'orderby' => 'menu_order',
						'caller_get_posts' => 1
						));
						?>
						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						 <li>
				<!--<div class="bx-content">
				<h1><?php echo the_title(); ?>
				</h1>
				<?php echo the_content();?>
				</div>-->
				<?php $my_meta = get_post_meta( $post->ID, 'header_link', true ); // see http://codex.wordpress.org/Function_Reference/get_post_meta ?>
				<?php if ( $my_meta && '' != $my_meta ) : { ?>
				<a href="<?php echo $my_meta ?>"><?php if ( has_post_thumbnail() ) : the_post_thumbnail('workforce-slider'); ?> </a><?php endif; } ?>
			    <?php  else : ?>
				<?php if ( has_post_thumbnail() ) : the_post_thumbnail('workforce-slider');?>
				<?php endif; ?>
				<?php  endif; ?>
				</li>
						<?php /*keep below li or it will cause an empty li*/ endwhile; wp_reset_postdata(); ?>
						</ul>
						<!--.slider-->
						<div class="outside">
							<span id="slider-prev"></span>
							<span id="slider-next"></span>
						</div>
					</div>
				</header>
				<!--important links banner-->
				<div class="banner-sub-nav">
					<div class="row show-for-medium-up">
						<div class="icon-bar five-up">
							<a href="https://www.germanna.edu/workforce/adult-career-center/" class="item">
								Adult Career Center
								<span>Career Assistance
								</span>
							</a>
							<a href="https://www.germanna.edu/workforce/facility-rentals/" class="item">
								Facility Rentals
								<span>Conference and Events
								</span>
							</a>
							<a href="http://germanna.augusoft.net/index.cfm?fuseaction=1010&amp;&amp;" class="item">
								Courses &amp; Registration
								<span>View Class Schedule</span>
							</a>
							<a href="https://www.germanna.edu/workforce/health-care-admissions/" class="item">
								Health Care
								<span>Admissions Applications
								</span>
							</a>
							<a href="https://www.germanna.edu/workforce/contact/" class="item">
								Contact Workforce
								<span>Our Staff
								</span>
							</a>
						</div>
					</div>
				</div>