<?php get_header(); ?>
<!--Content loop-->
<div class="row  single-post-article">
	<div class="small-12 large-12 columns" role="main">
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php _e( 'File Not Found', 'foundationpress' ); ?></h1>
			</header>
			<div class="entry-content">
				<div class="error">
					<p class="bottom"><?php _e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'foundationpress' ); ?></p>
				</div>
				<p><?php _e( 'Please try the following:', 'foundationpress' ); ?></p>
				<ul>
					<li><?php _e( 'Check your spelling', 'foundationpress' ); ?></li>
					<li><?php _e( 'Use the search box at the top of the page', 'foundationpress' ); ?></li>
					<li><?php _e( 'Use the <a href="http://applications.germanna.edu/webmaster/contact.asp">contact germanna</a> form if you still cant find what you are looking for. ', 'foundationpress' ); ?></li>
				</ul>
			</div>
		</article>
	</div>
	
</div>
<?php get_footer(); ?>