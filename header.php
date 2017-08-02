<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
<meta charset="utf-8" />
<meta name="viewport" content="initial-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes" />
<title><?php if ( is_category() ) {
echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
} elseif ( is_tag() ) {
echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
} elseif ( is_archive() ) {
wp_title( '' ); echo ' Archive | '; bloginfo( 'name' );
} elseif ( is_search() ) {
echo 'Search for &quot;'.esc_html( $s ).'&quot; | '; bloginfo( 'name' );
} elseif ( is_home() || is_front_page() ) {
bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
} elseif ( is_404() ) {
echo 'Error 404 Not Found | '; bloginfo( 'name' );
} elseif ( is_single() ) {
wp_title( '' );
} else {
echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
} ?></title>
<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">
<?php wp_head(); ?>
<!--[if lt IE 9]>
<link rel='stylesheet' href="<?php echo get_stylesheet_directory_uri(); ?>/css/ie8.css" type="text/css">
<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
<script src="http://s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
<script src="http://html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/rem.min.js"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>
<script type="text/javascript">
/*<![CDATA[*/
(function() {
var sz = document.createElement('script'); sz.type = 'text/javascript'; sz.async = true;
sz.src = '//us2.siteimprove.com/js/siteanalyze_7751.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sz, s);
})();
/*]]>*/
</script>

<div id="skip"><a href="#main">Skip To Main Content</a></div>
<?php do_action( 'foundationpress_after_body' ); ?>
	<div class="off-canvas-wrap" data-offcanvas >
		<div class="inner-wrap">
			<?php do_action( 'foundationpress_layout_start' ); ?>
			<nav class="tab-bar show-for-small-only">
				<ul class="mobile-menu-callouts show-for-small-only">
                   <li><a href="http://gcc.my.vccs.edu/">myGCC</a></li>
               </ul>
		 <div class="right-small">
		   <a class="right-off-canvas-toggle"><i class="fa fa-bars"></i></a>
			</div>
			<div class="left tab-bar-section">
				<a href="http://www.germanna.edu" class="logo">
				GermannaCC </a>
			</div>
		</nav>

				<?php get_template_part( 'parts/off-canvas-menu' ); ?>
				<?php get_template_part( 'parts/top-bar' ); ?>
				<?php /*gets slider for homepage only*/ if(is_front_page())  : ?>
				<header id="homepage-hero" role="banner">
				 <div class="slider-container">
				 <?php echo "<ul class='bxslider1'>\n";
				$loop = new WP_Query(array('post_type' => 'home-slider',
				'posts_per_page' => 6,
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
				<a href="<?php echo $my_meta ?>"><?php if ( has_post_thumbnail() ) : the_post_thumbnail('home-slider'); ?> </a><?php endif; } ?>
			    <?php  else : ?>
				<?php if ( has_post_thumbnail() ) : the_post_thumbnail('home-slider');?>
				<?php endif; ?>
				<?php  endif; ?>
				</li>
				<?php /*keep below li or it will cause an empty li*/ endwhile; wp_reset_postdata(); ?>
				</ul>
				<div class="outside">
					<span id="slider-prev"></span>
					<span id="slider-next"></span>
				</div>
				</div>
				</header>
				<div class="banner-sub-nav contain-to-grid hide-for-small show-for-large-up">
					<div class="row">
						<div class="icon-bar five-up">
							<a href="/information-sessions/" class="item">
								Information Sessions
								<span>Prospective Students
								</span>
							</a>
							<a href="http://applications.germanna.edu/class-schedule/" class="item">
								Registration
								<span>View Class Schedule</span>
							</a>
							<a href="/orientation/" class="item">
								New Student Orientation
								<span>Getting Started
								</span>
							</a>
							<a href="/about-germanna/locations/" class="item">
								Locations
								<span>Explore Our Campuses
								</span>
							</a>
							<a href="/academic-calendar/" class="item">
								Academic Calendar
								<span>Important Dates
								</span>
							</a>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<?php /*gets slider for homepage only*/ if(is_page('workforce'))  : ?>
				<!--hero slider-->
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
						<?php if ( has_post_thumbnail() ) : the_post_thumbnail('home-slider');?>
						<?php endif; ?>
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
							<a href="/workforce/adult-career-center/" class="item">
								Adult Career Center
								<span>Career Assistance
								</span>
							</a>
							<a href="/workforce/conference-and-events/" class="item">
								Conference/Events
								<span>Germanna Facility Rentals
								</span>
							</a>
							<a href="http://germanna.augusoft.net/index.cfm?fuseaction=1010&amp;&amp;" class="item">
								Courses &amp; Registration
								<span>View Class Schedule</span>
							</a>
							<a href="/workforce/health-care-admissions/" class="item">
								Health Care
								<span>Admissions Applications
								</span>
							</a>
							<a href="/workforce/contact/" class="item">
								Contact Workforce
								<span>Our Staff
								</span>
							</a>
						</div>
					</div>
				</div>
				<!--.banner-->
				<?php endif; ?>
				<?php do_action( 'foundationpress_after_header' ); ?>