<header id="homepage-hero"  aria-hidden="true">
	<div class="container">
		
		<div class="slider-container">
			<ul class='bxslider1'>
				<?php $loop = new WP_Query(array('post_type' => 'home-slider', //starts the loop for the slider
				'posts_per_page' => 6,
				'orderby' => 'menu_order',
				'caller_get_posts' => 1
				));
				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); // checks to see if there is a post
				
				$slide_link = get_field('slide_link');
				?>
				<li><?php if( get_field('slide_link') ): ?><a href="<?php echo $slide_link ?>" aria-label="<?php the_title(); ?>"><?php endif; ?>
					<?php $my_meta = get_post_meta( $post->ID, 'header_link', true ); ?>
					<?php if ( $my_meta && '' != $my_meta ) : { ?>
					<?php if ( has_post_thumbnail() ) : the_post_thumbnail('home-slider') ; /*loads the slide image*/ {
					if ( has_excerpt() ) {  // This post has excerpt.
					//the caption buttons
					$slide_button_1_text = get_field('slide_button_1_text');
					$slide_button_2_text = get_field('slide_button_2_text');
					$slide_button_1_url = get_field('slide_button_1_url');
					$slide_button_2_url = get_field('slide_button_2_url');
					?>
					<div class="hero-caption">
						<?php the_title('<h1>', '</h1>') ?>
						
						<?php the_excerpt() ?>
						<ul class="button-group">
							<?php if( get_field('slide_button_1_text') ): ?>
							<li><a href="<?php echo $slide_button_1_url ?>" class="button" aria-label="<?php echo $slide_button_1_ ?> about <?php the_title(); ?>"><?php echo $slide_button_1_text; ?></a></li>
							<?php endif; ?>
							<?php if( get_field('slide_button_2_text') ): ?>
							<li><a href="<?php echo $slide_button_2_url ?>" class="button secondary" aria-label="<?php echo $slide_button_1_ ?>  about <?php the_title(); ?>"><?php echo $slide_button_2_text; ?></a></li>
							<?php endif; ?>
						</ul>
					</div>
					<?php }  else  { //the slide is a video display the video instead of the image. ?>
					
					<?php } } ?>
					<?php endif; } ?>
					<?php  else : ?>
					<?php if ( has_post_thumbnail() ) : the_post_thumbnail('home-slider');?>
					<?php endif; ?>
					<?php  endif; ?>
					<?php if( get_field('slide_link') ): ?>
				</a>
				<?php endif; ?>
			</li>
			<?php /*keep below li or it will cause an empty li*/ endwhile; wp_reset_postdata(); ?>
		</ul>
		<div class="outside">
			<span id="slider-prev" aria-hidden="true"></span>
			<span id="slider-next" aria-hidden="true"></span>
		</div>
	</div>
</div>
</header>