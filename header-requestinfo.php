<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
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
		<!--Siteimprove Analytics Tracking -->
		<script type="text/javascript">
			/*<![CDATA[*/
			(function() {
				var sz = document.createElement('script'); sz.type = 'text/javascript'; sz.async = true;
				sz.src = '//us2.siteimprove.com/js/siteanalyze_7751.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sz, s);
			})();
			/*]]>*/
		</script>
		<!--End Siteimprove Analytics Tracking-->
		<div id="skip"><a href="<?php echo esc_html('#main', 'foundationpress') ?>"><?php _e('Skip To Main Content', 'foundationpress') ?></a></div>
		<?php do_action( 'foundationpress_after_body' ); ?>
		
		<?php do_action( 'foundationpress_after_header' ); ?>
		<section>