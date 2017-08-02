<?php
//Names the page template for each section
/*
Template Name: Dental Assisting
*/
get_header(); ?>
<div class="row">
    <div class="small-12 large-12 columns" role="main">
<!--Get Page Banner-->
<!--Page Sub Banner-->
<div class="row">
    <div class="small-12 large-12 columns" role="main">
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

                         <!--
                         Markup for program of study print icons
                         <a href="" title="Print PDF"><i class="fa fa-print fa-1x"></i><span>Print</span></a>
                        <a href="http://applications.germanna.edu/gainful-employment/allied-health-preparation-csc/" title="Gainful Employment Disclosure Data"><i class="fa fa-info fa-1x"></i><span>GED</span></a>
                        <a href="" title="Program Website"><i class="fa fa-desktop fa-1x"></i><span>Website</span></a>
                        <a href="http://www.germanna.edu/academic-advising/" title="Academic Advising"><i class="fa fa-rocket fa-1x"></i><span>Advising</span></a>
                         -->

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
                <li class="" role="menuitem"><a href="http://applications.germanna.edu/dental-assisting/application-for-admission.asp">Application</a></li>
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
        
        <!--Get Content-->
        <?php get_template_part( 'parts/content' ); ?>
        <!--.content-->
        
        
        <!--Get Page Sidebars-->
        <?php get_template_part( 'parts/sidebars/dental-assisting-sidebar' ); ?>
        <!--.sidebars-->
    </div>
    <!--Get Extras-->
    <?php get_template_part( 'parts/extras' ); ?>
    <!--.extras-->
    <?php get_footer(); ?>