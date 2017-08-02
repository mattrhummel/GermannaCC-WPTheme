<?php 
$bar_1_title = get_field('bar_1_title');
$bar_2_title = get_field('bar_2_title');
$bar_3_title = get_field('bar_3_title');
$bar_4_title = get_field('bar_4_title');
$bar_5_title = get_field('bar_5_title');
$bar_1_description = get_field('bar_1_description');
$bar_2_description = get_field('bar_2_description');
$bar_3_description = get_field('bar_3_description');
$bar_4_description = get_field('bar_4_description');
$bar_5_description = get_field('bar_5_description');
$bar_1_url = get_field('bar_1_url');
$bar_2_url = get_field('bar_2_url');
$bar_3_url = get_field('bar_3_url');
$bar_4_url = get_field('bar_4_url');
$bar_5_url = get_field('bar_5_url');
?>

<header id="homepage-hero" role="banner">
	<div class="row">
		<div class="container">
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
		</div>
	</div>
</header>

<div class="banner-sub-nav hide-for-small show-for-large-up">
	<div class="container">
		<div class="icon-bar five-up">
			<a href="<?php echo $bar_1_url; ?>" class="item">
				<?php echo $bar_1_title; ?>
				<span><?php echo $bar_1_description; ?>
				</span>
			</a>
			<a href="<?php echo $bar_2_url; ?>" class="item">
				<?php echo $bar_2_title; ?>
				<span><?php echo $bar_2_description; ?>
				</span>
			</a>
			<a href="<?php echo $bar_3_url; ?>" class="item">
				<?php echo $bar_3_title; ?>
				<span><?php echo $bar_3_description; ?>
				</span>
			</a>
			<a href="<?php echo $bar_4_url; ?>" class="item">
				<?php echo $bar_4_title; ?>
				<span><?php echo $bar_4_description; ?>
				</span>
			</a>
			<a href="<?php echo $bar_5_url; ?>" class="item">
				<?php echo $bar_5_title; ?>
				<span><?php echo $bar_5_description; ?>
				</span>
			</a>
			
		</div>
	</div>
</div>
</div>