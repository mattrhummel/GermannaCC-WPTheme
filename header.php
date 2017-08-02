<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="initial-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">
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
	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<script type="text/javascript">
		/*<![CDATA[*/
		(function() {
		var sz = document.createElement('script'); sz.type = 'text/javascript'; sz.async = true;
		sz.src = 'c';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sz, s);
		})();
		/*]]>*/
		</script>
		
		<div id="outdated" aria-hidden="true">
			<p class="heading">Your Browser Is Out Of Date</p>
			<p>For a better and more secure user experience Germanna.EDU only supports current browser versions</p>
			<p><a id="btnUpdateBrowser" href="http://outdatedbrowser.com/fr">Find A Browser</a></p>
			<p class="last"><a href="#" id="btnCloseUpdateBrowser" title="Fermer">&times;</a></p>
		</div>
		<div id="skip"><a href="#main" class="sr-only">Skip To Main Content</a></div>
		<?php do_action( 'foundationpress_after_body' ); ?>
		<?php get_template_part( 'parts/top-bar' );  /*gets main navigation*/
		get_template_part( 'parts/branding' );  /*gets branding header*/
		get_template_part( 'parts/off-canvas-menu' );  /*gets mobile menu*/
		
		if(is_front_page())  : get_template_part( 'parts/homeheader' ); /*gets slider for homepage only*/
		endif; /*gets slider for workforce only*/
		if(is_page('workforce'))  : get_template_part( 'parts/workforceheader' );  endif;
		do_action( 'foundationpress_after_header' )?>