<?php
//Names the page template for each section
/*
Template Name: Employment Opportunities
*/
get_header(); ?>
<!--Get Page Banner-->
<?php get_template_part( 'parts/banners' ); ?>
<!--.banner-->
<!--Get Breadcrumbs-->
<?php get_template_part( 'parts/breadcrumbs' ); ?>
<!--.breadcrumbs-->
<!--Content loop-->
<div class="row">
    <div class="small-12 large-12 columns" role="main">
        <?php // Gets the alert custom post type id for each sub page needing special announcement
        $post_id = 5447;
        $queried_post = get_post($post_id);
        $content = $queried_post->post_content;
        $content = apply_filters('the_content', $content);
        if ($content) {
            
        echo "<div class='alert-box alert'>";
            echo "$content";
            echo "<a href='#' class='close'><i class='icon-remove-circle'></i></a></div>";
                            
            }
            else {
                
                
            }
            ?>
        </div>
    </div>
    <div class="row">
        
        <!--Get Content-->
        <!--Page Content-->
        <div class="small-12 large-8 columns" role="main">
            
            <?php do_action( 'foundationpress_before_content' ); ?>
            <?php //start the loop
            while ( have_posts() ) : the_post(); ?>
            
            <!--Main Article-->
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                
                <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
                
                <div class="entry-content">
                    
                    <?php //Gets Page content
                    the_content(); ?>
                    
                    
                    
                </div>
                <?php // get the categories for the custom post taxonomy
                $terms = get_terms( 'careers_cat', array(
                'orderby'    => 'id',
                'hide_empty' => 1 // hide categories with no posts
                )
                );
                ?>
                <?php // now run a query for each category
                foreach( $terms as $term ) {
                // Define the query
                $args = array(
                'post_type' => 'careers', // replace with name of your custom post type
                'careers_cat'  => $term->administrative-professional// replace with name of your custom taxonomy
                );
                $query = new WP_Query( $args );
                // output the category in a heading
                echo'<h2>' . $term->name . '</h2>';
                // Start the post loop
                while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php /* display the post as you see fit */ ?>
                <div id="post-<?php the_ID(); ?>">
                    <p><strong><?php the_title(); ?></strong></p>
                    <?php the_content(); ?>
                </div>
                <?php endwhile;
                echo '<hr/>';
                // use reset postdata to restore the original query
                wp_reset_postdata();
                } ?>
                <!--.content-->
                
                
                <!--Get Page Sidebars-->
                <?php get_template_part( 'parts/sidebars/careers-sidebar' ); ?>
                <!--.sidebars-->
            </div>
            <!--.content-->
            
        </article>
        <!--.article-->
        
        
        
        <?php endwhile; //Ends the loop ?>
        <?php do_action( 'foundationpress_after_content' ); ?>
    </div>
    <!--Get Extras-->
    <?php get_template_part( 'parts/extras' ); ?>
    <!--.extras-->
    
    <!--.content loop-->
    <?php get_footer(); ?>