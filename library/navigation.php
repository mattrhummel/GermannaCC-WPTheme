<?php
/**
* Register Menus
* http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
*/
register_nav_menus(array(
'top-bar-l' => 'Left Top Bar', // registers the menu in the WordPress admin menu editor
'top-bar-r' => 'Right Top Bar',
'about-menu' => 'About Menu',// registers the departmental menus in the WordPress admin menu editor
'about-governance-menu' => 'About Governance Menu',
'acc-menu' => 'ACC Menu',
'academic-calendar-menu' => 'Academic Calendar Menu',
'academic-departments-menu' => 'Academic Departments Menu',
'ase-exam-menu' => 'ASE Exam Menu',
'academics-menu' => 'Academics Menu',
'administration-menu' => 'Administration Menu',
'admissions-menu' => 'Admissions Menu',
'admissions-sub-menu' => 'Admissions Sub Menu',
'advising-menu' => 'Advising Menu',
'arts-sciences-menu' => 'Arts Sciences Menu',
'arts-menu' => 'Arts Menu',
'automotive-menu' => 'Automotive Menu',
'available-test-menu' => 'Available Test Menu',
'awards-menu' => 'Awards Menu',
'bookstore-menu' => 'Bookstore Menu',
'business-office-menu' => 'Business Office Menu',
'career-services-menu' => 'Career Services Menu',
'career-transfer-menu' => 'Career Transfer Menu',
'catalog-menu' => 'Catalog Menu',
'class-schedule-menu' => 'Class Schedule Menu',
'college-board-menu' => 'College Board Menu',
'college-police-menu' => 'College Police Menu',
'contact-menu' => 'Contact Menu',
'counseling-menu' => 'Counseling Menu',
'ccs-menu' => 'Course Content Summaries Menu',
'dental-asstisting-menu' => 'Dental Assisting Menu',
'dental-partnership-menu' => 'Dental Partnership Menu',
'da-program-info-menu' => 'Dental Assisting Program Information Menu',
'dental-hygiene-subnav' => 'Dental Hygiene Subnav Menu',
'dental-assisting-subnav' => 'Dental Assisting Subnav Menu',
'dental-subnav' => 'Dental Subnav Menu',
'dh-important-menu' => 'DH Important Links Menu',
'da-important-menu' => 'DA Important Links Menu',
'dental-hygiene-menu' => 'Dental Hygiene Menu',
'dental-menu' => 'Dental Menu',
'dental-program-info-menu' => 'Dental Program Information Menu',
'developmental-studies-menu' => 'Developmental Studies Menu',
'disability-services-menu' => 'Disability Services Menu',
'ds-newsletter-menu' => 'DS Newsletter Menu',
'disability-services-sub-menu' => 'Disability Services Sub Menu',
'distance-learning-menu' => 'Distance Learning Menu',
'divisions-menu' => 'Divisions Menu',
'diversity-menu' => 'Diversity Menu',
'diversity-secondary-sidebar-menu' => 'Diversity Secondary Sidebar Menu',
'dual-enrollment-menu' => 'Dual Enrollment Menu',
'early-college-menu' => 'Early College Menu',
'early-childhood-menu' => 'Early Childhood Menu',
'edfoundation-menu' => 'Educational Foundation Menu',
'engineering-technologies-menu' => 'Engineering Technologies Menu',
'envisioning-menu' => 'Envisioning Menu',
'extras-menu-1' => 'Extras Menu 1',
'extras-menu-2' => 'Extras Menu 2',
'f1-visa-menu' => 'F1 Visa Menu',
'facilities-menu' => 'Facilities Menu',
'faculty-menu' => 'Faculty Menu',
'financial-aid-menu' => 'Financial Aid Menu',
'footer-col1-menu' => 'Footer Col1 Menu',
'footer-col2-menu' => 'Footer Col2 Menu',
'footer-col3-menu' => 'Footer Col3 Menu',
'footer-col4-menu' => 'Footer Col4 Menu',
'facts-figures-menu' => 'Facts Figures Menu',
'gainful-employment-menu' => 'Gainful Employment Menu',
'ged-testing-menu' => 'GED Testing Menu',
'germanna-ready-menu' => 'Germanna Ready Menu',
'giving-menu' => 'Giving Menu',
'gladys-todd-menu' => 'Gladys Todd Menu',
'global-menu' => 'Global Menu',
'graduation-menu' => 'Graduation Menu',
'grants-menu' => 'Grants Menu',
'great-expectations-menu' => 'Great Expectations Menu',
'grit-workshops-menu' => 'GRIT Workshops Menu',
'health-physed-menu' => 'Health Physed Menu',
'helpdesk-menu' => 'Helpdesk Menu',
'highlights-menu' => 'Highlights Menu',
'history-humanities-menu' => 'History Menu',
'human-resources-menu' => 'Human Resources Menu',
'ie-menu' => 'IE Menu',
'important-links-menu' => 'Important Links Menu',
'information-sessions-menu' => 'Information Sessions Menu',
'instruction-menu' => 'Instruction Menu',
'international-studies-menu' => 'International Studies',
'internships-services-menu' => 'Internships Services Menu',
'life-sciences-menu' => 'Life Sciences Menu',
'lyceum-menu' => 'Lyceum Menu',
'locations-menu' => 'Locations Menu',
'legal-menu' => 'Legal Menu',
'marketing-menu' => 'Marketing Menu',
'mygcc-menu' => 'myGCC Menu',
'math-menu' => 'Math Menu',
'mini-menu' => 'Mini Menu',
'motorcycle-transportation-menu' => 'Motorcycle Transportation Menu',
'mobile-off-canvas' => 'Mobile',
'mobile-quicklinks-menu' => 'Mobile Quicklinks Menu',
'mobile-administration-menu' => 'Mobile Administration Menu',
'mobile-main-menu' => 'Mobile Main Menu',
'mobile-sub-menu' => 'Mobile Sub Menu',
'nursing-health-menu' => 'Nursing Health Menu',
'nursing-getting-started-menu' => 'Nursing Home Getting Started Menu',
'nursing-interactive-tools-menu' => 'Nursing Home Interactive Tools Menu',
'nursing-programs-menu' => 'Nursing Programs Menu',
'nursing-main-navigation-menu' => 'Nursing Main Navigation Menu',
'nursing-menu' => 'Nursing Menu',
'nursing-program-main-menu' => 'Nursing Program Main Menu',
'ontime-menu' => 'On-time Menu',
'orientation-menu' => 'Orientation Menu',
'paying-for-college-menu' => 'Paying For College Menu',
'physical-therapist-assistant-menu' => 'Physical Therapist Assistant Menu',
'policies-menu' => 'Policies Menu',
'publications-menu' => 'Publications Menu',
'presidents-office-menu' => 'Presidents Office Menu',
'printing-sidebar-menu' => 'Printing Menu',
'professional-technical-menu' => 'Professional Technical Menu',
'programs-menu' => 'Programs Menu',
'psychology-menu' => 'Psychology Menu',
'resources-menu' => 'Resources Menu',
'sacs-menu' => 'SACS Menu',
'scholars-program-menu' => 'Scholars Program Menu',
'social-sciences-menu' => 'Social Sciences Menu',
'sails-menu' => 'Sails Menu',
'student-activities-menu' => 'Student Activities Menu',
'student-development-menu' => 'Student Development Menu',
'students-menu' => 'Students Menu',
'student-success-menu' => 'Student Success Menu',
'technical-services-menu' => 'Technical Services Menu',
'testing-menu' => 'Testing Menu',
'transfer-services-menu' => 'Transfer Services Menu',
'tutoring-menu' => 'Tutoring Menu',
'veterans-sidebar-menu' => 'Veterans Menu',
'vets-mentor-sidebar-menu' => 'Veterans Mentor Program Menu',
'veterans-newsletter-menu' => 'Veterans Newsletter Menu',
'welcome-day-menu' => 'Welcome Day Menu',
'workforce-menu' => 'Workforce Menu',
'workforce-home-menu' => 'Workforce Home Menu'
));
/**
* Left top bar
* http://codex.wordpress.org/Function_Reference/wp_nav_menu
*/
if ( ! function_exists( 'foundationpress_top_bar_l' ) ) {
function foundationpress_top_bar_l() {
wp_nav_menu(array(
'container' => true,                           // remove nav container
'container_class' => 'left',                        // class of container
'menu' => '',                                   // menu name
'menu_class' => 'top-bar-menu left',            // adding custom nav class
'theme_location' => 'top-bar-l',                // where it's located in the theme
'before' => '',                                 // before each link <a>
'after' => '',                                  // after each link </a>
'link_before' => '',                            // before each link text
'link_after' => '',                             // after each link text
'depth' => 5,                                   // limit the depth of the nav
'fallback_cb' => false,                         // fallback function (see below)
 'items_wrap'     => '<ul id="%1$s" class="%2$s" role="menubar" aria-label="Main Menu">%3$s</ul>',
'walker' => new Foundationpress_Top_Bar_Walker()
));
}
}
/**
* Right top bar
*/
if ( ! function_exists( 'foundationpress_top_bar_r' ) ) {
function foundationpress_top_bar_r() {
wp_nav_menu(array(
'container' => true,                           // remove nav container
'container_class' => 'pull-left',                        // class of container
'menu' => '',                                   // menu name
'menu_class' => 'top-bar-menu left',           // adding custom nav class
'theme_location' => 'top-bar-r',                // where it's located in the theme
'before' => '',                                 // before each link <a>
'after' => '',                                  // after each link </a>
'link_before' => '',                            // before each link text
'link_after' => '',                             // after each link text
'depth' => 5,                                   // limit the depth of the nav
'fallback_cb' => false,                         // fallback function (see below)
 'items_wrap'     => '<ul id="%1$s" class="%2$s" role="menubar" aria-label="Quicklinks Menu">%3$s</ul>',
'walker' => new Foundationpress_Top_Bar_Walker_Quicklinks()
));
}
}
/**
* Mobile off-canvas
*/
if ( ! function_exists( 'foundationpress_mobile_off_canvas' ) ) {
function foundationpress_mobile_off_canvas() {
wp_nav_menu(array(
'container' => false,                           // remove nav container
'container_class' => 'left',                    // class of container
'menu' => '',                                   // menu name
'menu_class' => 'off-canvas-list',              // adding custom nav class
'theme_location' => 'mobile-off-canvas',        // where it's located in the theme
'before' => '',                                 // before each link <a>
'after' => '',                                  // after each link </a>
'link_before' => '',                            // before each link text
'link_after' => '',                             // after each link text
'depth' => 5,                                   // limit the depth of the nav
'fallback_cb' => false,                         // fallback function (see below)
'items_wrap'     => '<ul id="%1$s" class="%2$s" role="menubar" aria-label="Mobile Menu">%3$s</ul>',
'walker' => new Foundationpress_Offcanvas_Walker()
));
}
}
/**
}
/**
* Add support for buttons in the top-bar menu:
* 1) In WordPress admin, go to Apperance -> Menus.
* 2) Click 'Screen Options' from the top panel and enable 'CSS CLasses' and 'Link Relationship (XFN)'
* 3) On your menu item, type 'has-form' in the CSS-classes field. Type 'button' in the XFN field
* 4) Save Menu. Your menu item will now appear as a button in your top-menu
*/
if ( ! function_exists( 'foundationpress_add_menuclass' ) ) {
function foundationpress_add_menuclass($ulclass) {
$find = array('/<a rel="button"/', '/<a title=".*?" rel="button"/');
    $replace = array('<a rel="button" class="button"', '<a rel="button" class="button"');
        return preg_replace( $find, $replace, $ulclass, 1 );
        }
        add_filter( 'wp_nav_menu','foundationpress_add_menuclass' );
        }
        ?>