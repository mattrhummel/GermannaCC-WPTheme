<?php
//Names the page template for each section
/*
Template Name: Dental Assisting Info Sessions
*/
get_header(); ?>
<div class="row">
    <div class="small-12 large-12 columns" >
<!--Get Page Banner-->
<!--Page Sub Banner-->
<div class="row">
    <div class="small-12 large-12 columns" >
        <?php if  (has_post_thumbnail( $post->ID ) )  { ?>
        <?php
        echo "<div class='row'>";
            echo "<div class='small-12 large-12 columns'>";
                echo "\t\t<h1>\n\t\t";
                echo  the_title();
                echo "\n\t\t</h1>\n";
            echo "</div>";
              echo "</div>";
        ?>
        </div>
    
        <div class="row">
            <div class="small-12 large-12 columns" role="main">
                <ul class="breadcrumbs">
                    <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                    <?php
                    // if there is a parent, display the link to go back to parent page
                    $parent_title = get_the_title( $post->post_parent );
                    if ( $parent_title != the_title( ' ', ' ', false ) ) {
                    echo '<li><a href="' . get_permalink( $post->post_parent ) . '"        title="' . $parent_title . '">' .               $parent_title . '</a></li>';
                    }
                    // if the page is a child page display page title
                    if ( is_page() && $post->post_parent > 0 ) {
                    echo '<li>';
                        the_title();
                    echo '</li>';
                    } ?>
                </ul>
            </div>
            </div>
            <div class="row">
    <div class="small-12 medium-12 large-12 columns" role="main">
        <ul class="sub-nav" role="menu" title="Filter Menu List" style="list-style: none;">
            
            <li class="" role="menuitem"><a href="/physical-therapist-assistant/about-the-program/">About PTA Program</a></li>
            <li role="menuitem"><a href="/physical-therapist-assistant/accreditation/">Accreditation</a></li>
            <li role="menuitem"><a href="/physical-therapist-assistant/application-information">Application Information</a></li>
    <li role="menuitem"><a href="http://applications.germanna.edu/pta-application/">Application</a></li>
            <li role="menuitem"><a href="/physical-therapist-assistant/program-requirements/">Program Requirements</a></li>
            
        </ul>
    </div>
</div>
        <?php
        echo "<div class='subpage-hero' role='banner'>\n";
            echo "\t<div id='bg'>\n";
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                echo "\t\t<img src='$image[0]' alt='header image' width='1900' height='300' />\n";
            echo "\t</div>\n";
        echo "</div>";
   //gets custom field for program icons "print_icons" // 
         echo "<div class='print-icons' style='position: absolute; right: 0; top: 0;'>";
                         echo get_post_meta($post->ID, 'print_icons', true); 
          echo "</div>";
          echo "</div>";
    
        }  else { ?>
        <!--.pagesubbanner-->
        <!--no featured image banner-->
        <div class="row without-image" role="banner">
            <div class="small-12 large-12 columns'">
                <div class="row">
                    <div class="small-12 large-11 columns" role="main">
                    <h1><?php echo the_title(); ?></h1>
                        <ul class="breadcrumbs">
                    <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                    <?php
                    // if there is a parent, display the link to go back to parent page
                    $parent_title = get_the_title( $post->post_parent );
                    if ( $parent_title != the_title( ' ', ' ', false ) ) {
                    echo '<li><a href="' . get_permalink( $post->post_parent ) . '"        title="' . $parent_title . '">' .               $parent_title . '</a></li>';
                    }
                    // if the page is a child page display page title
                    if ( is_page() && $post->post_parent > 0 ) {
                    echo '<li>';
                        the_title();
                    echo '</li>';
                    } ?>
                </ul>
                    </div>

                    <div class="small-12 large-1 columns print-icons">

                         <?php //gets custom field for program icons "print_icons" // 
                         echo get_post_meta($post->ID, 'print_icons', true); ?>

                    </div>
                </div>
        </div>
        </div>
        <div class="row">
    <div class="small-12 medium-12 large-12 columns" role="main">
        <ul class="sub-nav" role="menu" title="Filter Menu List" style="list-style:none">
                
                
                <li class="" role="menuitem"><a href="/dental/dental-assisting/accreditation/">Accreditation</a></li>
                <li role="menuitem"><a href="/dental/dental-assisting/admissions/">Admissions</a></li>
                <li class="" role="menuitem"><a href="/academic-advising/">Advising</a></li>
                <li class="" role="menuitem"><a href="/dental/dental-assisting/career-opportunities/">Career Opportunities</a></li>
                <li class="" role="menuitem"><a href="http://www.germanna.edu/testing/nursing-health-testing/">TEAS V Test</a></li>
                
            </ul>
    </div>
</div>
</div>
</div>
</div>

        <?php } ?>
<!--.noimagebanner-->
<!--.banner-->
</div>
</div>
</div>


<!--Content loop-->

    <div class="row">
        
       <!--Page Content-->

<div class="small-12 medium-8 medium-push-4 large-8 columns large-push-4" role="main">
	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php //start the loop
	while ( have_posts() ) : the_post(); ?>
	
	<!--Main Article-->
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>" >
		
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		
		<div class="entry-content" id="main">
			
			<?php //Gets Page content
			the_content(); ?>
			
<div id="adx060894">Loading Events...</div> 
<script type="text/javascript">if (typeof jQuery != 'undefined') { 
jQuery(document).ready(function () { 
var adx="Events are temporarily unavailable. Please check back later."; 
jQuery.ajax({ dataType: 'script', url: '​h​t​t​p​s:​/​/​c​a​l​e​n​d​a​r​.​a​c​t​i​v​e​d​a​t​a​x​.​c​o​m​/​g​e​r​m​a​n​n​a​/​E​v​e​n​t​L​i​s​t​S​y​n​d​i​c​a​t​o​r​.​a​s​p​x​?​t​y​p​e​=​N​&​n​u​m​b​e​r​=​5​0​&​c​a​t​e​g​o​r​y​=​5​1​-​7​9​&​a​d​p​i​d​=​1​6​&​n​e​m​=​N​o​+​e​v​e​n​t​s​+​a​r​e​+​a​v​a​i​l​a​b​l​e​+​t​h​a​t​+​m​a​t​c​h​+​y​o​u​r​+​r​e​q​u​e​s​t​&​s​o​r​t​o​r​d​e​r​=​A​S​C​&​v​e​r​=​2​.​0​&​t​a​r​g​e​t​=​a​d​x​0​6​0​8​9​4​' 
});setTimeout(function() {if(typeof r​e​s​p​o​n​s​e​=​=​'​u​n​d​e​f​i​n​e​d​'​)​{​j​Q​u​e​r​y​(​'​#​a​d​x​0​6​0​8​9​4​'​)​.​h​t​m​l​(​a​dx);}}, 5000); 
});}else { document.getElementById('adx060894').innerHTML = 'Events are temporarily unavailable because the jQuery library cannot be located.'; }</script> 



		</div>
		<!--.content-->
		
	</article>
	<!--.article-->
	
	
	
	<?php endwhile; //Ends the loop ?>
	<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<!--.content loop-->
        
        
        <!--Get Page Sidebars-->
        <?php get_template_part( 'parts/sidebars/dental-assisting-sidebar' ); ?>
        <!--.sidebars-->
    </div>
<?php get_footer(); ?>