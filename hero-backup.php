<?php
/*
Template Name: Hero Backup
*/
 ?>
 <!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
	</head>
	<body <?php body_class(); ?>>
     
	<?php do_action( 'foundationpress_after_body' ); ?>
        
        
	
	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	
	<?php do_action( 'foundationpress_layout_start' ); ?>
	
	<nav class="tab-bar">
		<section class="left-small">
			<a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
		</section>
		<section class="middle tab-bar-section">
			
		     <ul class="title-area">
            <li class="name">
                <img src="http://www.germanna.edu/images/germanna_cc_logo.gif" alt="germanna logo">
            </li>
        </ul>

		</section>
	</nav>

	<?php get_template_part( 'parts/off-canvas-menu' ); ?>

	<?php get_template_part( 'parts/top-bar' ); ?>
    


<section class="container" role="document">
	<?php do_action( 'foundationpress_after_header' ); ?>

<!--hero slider-->
<header id="homepage-hero" role="banner">
<div class="slider-container">

<?php
echo "\t<ul class='bxslider1'>\n";
  		$loop = new WP_Query(array('post_type' => 'home-slider',
  							'posts_per_page' => 6,
      						'orderby' => 'menu_order',
							'caller_get_posts' => 1
  		));
?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<li>

<div class="bx-content">
 <h1><?php echo the_title(); ?>
 </h1>
 	<?php echo the_content();?>
</div>

 <?php if ( has_post_thumbnail() ) : the_post_thumbnail('home-slider');?>
 <?php endif; ?>

</li>
<?php /*keep below li or it will cause an empty li*/ endwhile; wp_reset_postdata(); ?>

    
    </ul>
    

 	</div>
    
  

</div>
<!--.slider-->

</div>

</header>

<!--important links banner-->
<div class="banner-sub-nav contain-to-grid show-for-medium-up">
	<div class="row">
		<div class="icon-bar five-up">
			<a href="/about-germanna/" class="item">
				About Us
				<label>Germanna At A Glance
                </label>
			</a>
			<a href="/about-germanna/locations/" class="item">
				Locations
				<label>Explore Our Campuses
                </label>
			</a> 
                       
			<a href="http://applications.germanna.edu/class-schedule/" class="item">
				Registration
				<label>View Class Schedule</label>
			</a>
            
            	<a href="academic-calendar" class="item">
				Academic Calendar
				<label>Important Dates
                </label>
			</a>

			<a href="/mobile/" class="item">
				Germanna Mobile
				<label>Download Our App
                </label>
			</a>

	

		</div>
	</div>
 
</div>
<!--.banner-->

<div class="home-intro">

<div class="row">
<div class="small-12 medium-12 large-12 columns" role="main">
   <!--home-feature-intro-->
   
  <div class="small-12 medium-8 columns home-features-intro ">
    <?php //Start of Tab Widget Container
            if ( is_active_sidebar( 'intro-widget' ) ) : ?>
		      <?php dynamic_sidebar( 'intro-widget' ); ?>
              
              
     <h2>Getting Started</h2>
     
     <ul class="button-group even-3">
  <li><a href="/admissions/apply-online/" class="button primary"><i class="fa fa-pencil-square-o  fa-2x"></i><br/>Applying</a></li>
  <li><a href="/programs/" class="button primary"><i class="fa fa-book fa-2x"></i><br/>Programs</a></li>
  <li><a href="/admissions/registration-information/" class="button primary"><i class="fa fa-info fa-2x"></i><br/>Registration</a></li>
</ul>
              
 

    <?php endif; //End of Tab Widget Container  ?>
       
	</div>

    <!--.home-feature-intro-->
    
    
<!--upcoming-events-->
<div class="small-12 medium-4 columns events home-feature-intro">
    	<?php if ( is_active_sidebar( 'upcoming-events-widgets' ) ) : ?>
		<?php dynamic_sidebar( 'upcoming-events-widgets' ); ?>
				<?php endif; ?>
                
     
  
</div>
<!--.upcoming-events-->

</div>
</div>
</div>  

<div class="row explore-germanna">
<div class="small-12 medium-12 large-12 columns" role="main">  
<article role="article">

<?php
//Begin slider custom post type loop
$loop = new WP_Query(array('post_type' => 'explore-slider',
      									'post_status' => 'published',
      									'posts_per_page' => 24,
      									'caller_get_posts' => 1
      									));
?>
										
<div class='explore-slider-container'>
			<ul class='bxslider2'>

<?php while ( $loop->have_posts() ) : $loop->the_post(); 
$my_meta = get_post_meta( $post->ID, 'custom_link', true ); /*Gets custom link for each explore germanna image post */ 

if( $my_meta && '' != $my_meta ) :

echo "\t\t\t\t<li>\n";
echo "\t\t\t\t\t<a href='$my_meta'>\n";
  
if ( has_post_thumbnail() ) : /*Grabs the explore germanna post featured images*/
  the_post_thumbnail('explore-slider'); /*Displays post thumbnail */ 
endif; /*End of post thumbnail check*/ ?>
  
					</a>
				</li>

<?php 
endif; /*End of Custom Link Check*/

endwhile; ?>

			</ul>
		</div>

	</article>
</div>
</div>


<?php wp_reset_postdata();

?>

<!--Germanna Highlights and Upcoming Events Row-->

<div class="row highlights">
<div class="small-12 medium-12 large-12 columns">
<!--Get Germanna Highlights Excerpts-->     
    
<article role="article">

<?php
      		
      		$loop = new WP_Query(array('post_type' => 'germanna-highlights',
      									'post_status' => 'published',
      									'posts_per_page' => 12,
      									'orderby' => 'menu_order',
      									'caller_get_posts' => 1
      									));

?>

<div class="highlights-slider-container">

<h2 class="text-center">Germanna Highlights</h2> 
    
<ul class="bxslider3 highlights-content">
        
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
        <li>

            <div class="content">
                
                <a href="<?php the_permalink(); /*Get Title Link*/ ?>" title="<?php the_title_attribute();?>">
                
                    <h3>
                    <?php the_title(); /*Get Excerpt Title*/ ?>
                    </h3>
                
                    <?php if ( has_post_thumbnail() ) : ?>
        
                    <?php the_post_thumbnail('germanna-highlights'); ?>
                    <?php endif; ?>
                    
            
                    <p><?php the_excerpt(); /*Display the excerpt*/ ?></p> 
                    
                    
                
                </a>
                
          </div>
           
        
        </li>
        
                    <?php endwhile; wp_reset_postdata();
					
					
					 ?>            
<!--End the loop--> 
    
    </ul>
   
  </div>
      
    </article>
    
         <div class="row text-center">
      <a class="button read-more" href="<?php echo esc_url( get_permalink() ); ?>">More Highlights<i class="fa fa-arrow-right"></i></a>
      </div>

    
 
</div> 
</div>



<div class='calltos no-margin text-center' role='main'>

 <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/on-time-registration-logo-lg.png" height="44" width="300">
 
 <p>Register early and pay by deadline. Once the session begins, registration is closed.</p>
 
 
 <a href="/on-time/" class="button default">Learn More</a>


</div>;


<!--Get Extras-->
<?php get_template_part( 'parts/extras' ); ?>
<!--.extras-->

    

<?php get_footer(); ?>
