<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?><?php echo esc_html('/assets/img/icons/apple-touch-icon-144x144-precomposed.png'); ?>">
		<link rel="apple-touch-icon icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?><?php echo esc_html('/assets/img/icons/apple-touch-icon-114x114-precomposed.png'); ?>">
		<link rel="apple-touch-icon icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?><?php echo esc_html('/assets/img/icons/apple-touch-icon-72x72-precomposed.png'); ?>">
		<link rel="apple-touch-icon icon" href="<?php echo get_stylesheet_directory_uri(); ?><?php echo esc_html('/assets/img/icons/apple-touch-icon-precomposed.png'); ?>">
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
	<body <?php body_class(); ?> itemscope itemtype="<?php echo esc_html('http://schema.org/WebPage'); ?>">
	<?php include_once("analyticstracking.php") ?>
		<script type="text/javascript">
		/*<![CDATA[*/
		(function() {
		var sz = document.createElement('script'); sz.type = 'text/javascript'; sz.async = true;
		sz.src = 'c';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sz, s);
		})();
		/*]]>*/
		</script>
		
		<noscript class="jsalert" aria-hidden="true">
		<?php echo _e('Sorry, your browser does not support JavaScript! For the best viewing experience please enable Javascript.') ?>
		</noscript>

		<div id="skip"><a href="<?php echo esc_html('#main'); ?>" class="sr-only"><?php echo _e('Skip To Main Content', 'foundationpress'); ?></a></div>
		<?php do_action( 'foundationpress_after_body' ); ?>
		<?php get_template_part( 'parts/top-bar' );  /*gets main navigation*/
		get_template_part( 'parts/branding' );  /*gets branding header*/
		get_template_part( 'parts/off-canvas-menu' );  /*gets mobile menu*/
		
		if(is_front_page())  : get_template_part( 'parts/homeheader' ); /*gets slider for homepage only*/
		endif; /*gets slider for workforce only*/
		if(is_page('workforce'))  : get_template_part( 'parts/workforceheader' );  endif;
		do_action( 'foundationpress_after_header' )?>