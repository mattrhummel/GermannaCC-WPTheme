<!--Page Sub Banner-->
<div class="row">
    <div class="container">
        <div class="small-12 large-12 columns">
            <?php // if the page has a featured image
            if  (has_post_thumbnail( $post->ID ) )  { ?>
            <div class='row'>
                <div class='small-12 large-12 columns'>
                    <h1 role='heading'>
                   <?php echo _e('Disability Services Blog'); ?>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="small-12 large-12 columns" role="main" itemprop="breadcrumb">
                    <ul class="breadcrumbs" role="menu">
                        <li role="menuitem"><a href="<?php echo get_site_url(); ?>"><?php echo _e('Home'); ?></a></li>
                        <li role="menuitem"><a href="<?php echo esc_html('/disability-services/'); ?>"><?php echo _e('Disability Services'); ?></a></li>
                        <li role="menuitem"> <a href="<?php echo esc_html('/blog/disability-services/'); ?>"><?php echo _e('Disability Services Blog'); ?></a></li>
                        <?php
                        // if there is a parent, display the link to go back to parent page
                        $parent_title = get_the_title( $post->post_parent );
                        if ( $parent_title != the_title( ' ', ' ', false ) ) {
                        the_title('<li class="last" role="menuitem">', '</li>');
                        }
                        // if the page is a child page display page title
                        if ( is_page() && $post->post_parent > 0 ) {
                        the_title('<li class="last" role="menuitem">', '</li>');
                        } ?>
                    </ul>
                </div>
            </div>
            <?php  //Attach featured image to the page
            
            }  else {  //.pagesubbanner
            // if page doesn't have a featured image
            ?>
            <div class="row without-image">
                <div class="small-12 large-12 columns'">
                    <h1><?php echo _e('Disability Services Blog'); ?></h1>
                    <div class="row">
                        <div class="small-12 large-12 columns">
                            <ul class="breadcrumbs" role="menu">
                                <li role="menuitem"><a href="<?php echo get_site_url( ); ?>"><?php echo _e('Home'); ?></a></li>
                                <li role="menuitem"><a href="<?php echo esc_html('/disability-services/'); ?>"><?php echo _e('Disability Services'); ?></a></li>
                                <li role="menuitem"><a href="<?php echo esc_html('/blog/disability-services/'); ?>"><?php echo _e('Disability Services Blog');  ?></a></li>
                                <?php
                                // if there is a parent, display the link to go back to parent page
                                $parent_title = get_the_title( $post->post_parent );
                                if ( $parent_title != the_title( ' ', ' ', false ) ) {
                                the_title('<li class="last" role="menuitem">', '</li>');
                                }
                                // if the page is a child page display page title
                                if ( is_page() && $post->post_parent > 0 ) {
                                the_title('<li class="last" role="menuitem">', '</li>');
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>