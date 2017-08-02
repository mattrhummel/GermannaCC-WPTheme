<?php //Registers and adds section boxes for widgets under widget wp admin area.  Created by Matt Hummel.  Create arrays individually for better customization of each widget.
if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
function foundationpress_sidebar_widgets() {
	register_sidebar(array(//default sidebar widget for page.php(default template)
	'id' => 'sidebar-widgets', //used to call widget on page template.
	'name' => __( 'Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),//shows description of widget in widget box.
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'about-widgets',
	'name' => __( 'About Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
		'id' => 'advising-widgets',
		'name' => __( 'Advising Sidebar widgets', 'foundationpress' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
		'before_widget' => '<article id="%1$s" class="row widget %2$s">',
		'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
		));
register_sidebar(array(
	'id' => 'admissions-widgets',
	'name' => __( 'Admissions Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'academic-widgets',
	'name' => __( 'Academic Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'acc-widgets',
	'name' => __( 'ACC Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'academic-departments-widgets',
	'name' => __( 'Academic Departments Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'arts-widgets',
	'name' => __( 'Arts Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'academic-calendar-widgets',
	'name' => __( 'Academic Calendar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'arts-sciences-widgets',
	'name' => __( 'Arts and Sciences Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'administration-widgets',
	'name' => __( 'Administration Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'germanna-ready-widgets',
	'name' => __( 'Are You Germanna Ready Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'automotive-widgets',
	'name' => __( 'Automotive Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'awards-widgets',
	'name' => __( 'Awards and Recognition Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'business-office-widgets',
	'name' => __( 'Business Office Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
	register_sidebar(array(
	'id' => 'class-schedule-widgets',
	'name' => __( 'Class Schedule Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'counseling-widgets',
	'name' => __( 'Counseling Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'career-camps-widgets',
	'name' => __( 'Career Camps Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'career-center-widgets',
	'name' => __( 'Career Center Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'career-transfer-widgets',
	'name' => __( 'Career Transfer Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));       register_sidebar(array(
	'id' => 'catalog-widgets',
	'name' => __( 'Catalog Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'college-board-widgets',
	'name' => __( 'College Board Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'dental-hygiene-widgets',
	'name' => __( 'Dental Hygiene Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'dental-widgets',
	'name' => __( 'Dental Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'dental-assisting-widgets',
	'name' => __( 'Dental Assisting Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'developmental-studies-widgets',
	'name' => __( 'Developmental Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'distance-learning-widgets',
	'name' => __( 'Distance Learning Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'disability-services-widgets',
	'name' => __( 'Disability Services Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'diversity-widgets',
	'name' => __( 'Diversity Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'dual-enrollment-widgets',
	'name' => __( 'Dual Enrollment Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'international-studies-widgets',
	'name' => __( 'International Studies Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'great-expectations-widgets',
	'name' => __( 'Great Expectation Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'early-college-widgets',
	'name' => __( 'Early College Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
	register_sidebar(array(
	'id' => 'early-childhood-widgets',
	'name' => __( 'Early Childhood Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'engineering-technologies-widgets',
	'name' => __( 'Engineering Technology Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'el-widgets',
	'name' => __( 'Experiential Learning Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'faculty-widgets',
	'name' => __( 'Faculty & Staff Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'facilities-widgets',
	'name' => __( 'Facilities Sidebar widgets', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'financial-aid-widgets',
	'name' => __( 'Financial Aid Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'f1visa-widgets',
	'name' => __( 'F1-Visa Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'gainful-employment-widgets',
	'name' => __( 'Gainful Employment Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'ged-testing-widgets',
	'name' => __( 'GED Testing Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'grit-widgets',
	'name' => __( 'G.R.I.T. Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
	register_sidebar(array(
'id' => 'grants-widgets',
'name' => __( 'Grants Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
'before_widget' => '<article id="%1$s" class="row widget %2$s">',
'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
));
register_sidebar(array(
	'id' => 'gssa-widgets',
	'name' => __( 'GSSA Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'gladys-todd-widgets',
	'name' => __( 'Gladys Todd Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'graduation-widgets',
	'name' => __( 'Graduation Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'helpdesk-widgets',
	'name' => __( 'Helpdesk Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'hightech-testing-widgets',
	'name' => __( 'High Tech Testing Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'human-resources-widgets',
	'name' => __( 'Human Resources Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'ie-widgets',
	'name' => __( 'Institutional Effectiveness Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'instruction-widgets',
	'name' => __( 'Instruction Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'math-widgets',
	'name' => __( 'Math Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'motorcycle-widgets',
	'name' => __( 'Motorcycle Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'mygcc-widgets',
	'name' => __( 'myGCC Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'nursing-health-widgets',
	'name' => __( 'Nursing Health Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'nursing-widgets',
	'name' => __( 'Nursing Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'college-police-widgets',
	'name' => __( 'College Police Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'orientation-widgets',
	'name' => __( 'Orientation Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'payingforcollege-widgets',
	'name' => __( 'Paying For College Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'policies-widgets',
	'name' => __( 'Policies Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'presidents-office-widgets',
	'name' => __( 'Presidents Office Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'physical-therapist-widgets',
	'name' => __( 'Physical Therapist Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'printing-widgets',
	'name' => __( 'Printing Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'programs-widgets',
	'name' => __( 'Programs of Study Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'professional-technical-widgets',
	'name' => __( 'Professional Technical Studies Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'sails-widgets',
		'name' => __( 'Sails Sidebar widgets', 'foundationpress' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
		'before_widget' => '<article id="%1$s" class="row widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		));
register_sidebar(array(
	'id' => 'scholars-widgets',
	'name' => __( 'Scholars Program Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'student-activities-widgets',
	'name' => __( 'Student Activities Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'testing-services-widgets',
	'name' => __( 'Testing Services Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'technical-services-widgets',
	'name' => __( 'Technical Services Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'tutoring-services-widgets',
	'name' => __( 'Tutoring Services Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'veterans-widgets',
	'name' => __( 'Veterans Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'veterans-mentor-widgets',
	'name' => __( 'Veterans Mentor Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'workforce-widgets',
	'name' => __( 'Workforce Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'vp-academics-widgets',
	'name' => __( 'VP Academics Sidebar widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
'id' => 'envisioning-widgets',
'name' => __( 'Envisioning Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
register_sidebar(array(
'id' => 'contactgcc-widgets',
'name' => __( 'Contact Germanna Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
register_sidebar(array(
'id' => 'edfoundation-widgets',
'name' => __( 'Educational Foundation Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
register_sidebar(array(
'id' => 'giving-widgets',
'name' => __( 'Giving Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
register_sidebar(array(
'id' => 'internships-widgets',
'name' => __( 'Internships Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
register_sidebar(array(
'id' => 'library-widgets',
'name' => __( 'Library Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
register_sidebar(array(
'id' => 'lyceum-widgets',
'name' => __( 'Lyceum Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
register_sidebar(array(
'id' => 'ontime-widgets',
'name' => __( 'Ontime Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
register_sidebar(array(
'id' => 'publications-widgets',
'name' => __( 'Publications Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
register_sidebar(array(
'id' => 'resources-widgets',
'name' => __( 'Resources Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
register_sidebar(array(
'id' => 'sacs-widgets',
'name' => __( 'SACS Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
register_sidebar(array(
'id' => 'social-sciences-widgets',
'name' => __( 'Social Sciences Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
register_sidebar(array(
'id' => 'transfer-services-widgets',
'name' => __( 'Transfer Center Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
register_sidebar(array(
'id' => 'welcome-day-widgets',
'name' => __( 'Welcome Day Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
register_sidebar(array(
'id' => 'psychology-widgets',
'name' => __( 'Welcome Day Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
register_sidebar(array(
'id' => 'bookstore-widgets',
'name' => __( 'Bookstore Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
		'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
register_sidebar(array(
'id' => 'marketing-widgets',
'name' => __( 'Marketing Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
		'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
register_sidebar(array(
	'id' => 'footer-widgets',
	'name' => __( 'Footer widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'el-widgets',
	'name' => __( 'EL widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
		'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
'id' => 'request-info-widgets',
'name' => __( 'Request Information Sidebar widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
));
register_sidebar(array(
	'id' => 'students-widgets',
	'name' => __( 'Students widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
	register_sidebar(array(
'id' => 'student-success-widgets',
'name' => __( 'Student Success widgets', 'foundationpress' ),
'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
'before_widget' => '<article id="%1$s" class="row widget %2$s">',
'after_widget' => '</article>',
'before_title' => '<h4>',
'after_title' => '</h4>',
));
register_sidebar(array(
	'id' => 'highlights-widgets',
	'name' => __( 'Highlights widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
	'id' => 'footer-col1-widgets',
	'name' => __( 'Footer Col1 widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
	));
register_sidebar(array(
	'id' => 'footer-col2-widgets',
	'name' => __( 'Footer Col2 widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
	));
register_sidebar(array(
	'id' => 'footer-col3-widgets',
	'name' => __( 'Footer Col3 widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
	));
register_sidebar(array(
	'id' => 'footer-callto-widgets',
	'name' => __( 'Footer Callto widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
	));
register_sidebar(array(
	'id' => 'important-links-widgets',
	'name' => __( 'Important Links widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	'before_widget' => '<div class="small-12 medium-6 columns no-margin home-feature-intro">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
	));
register_sidebar(array(
	'id' => 'intro-widget',
	'name' => __( 'Home Intro', 'foundationpress' ),
	'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h1 class="home-widget-title">',
	'after_title' => '</h1>',
	));
register_sidebar(array(
	'id' => 'workforce-intro-widget',
	'name' => __( 'Workforce Intro', 'foundationpress' ),
	'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	'before_widget' => ' ',
	'after_widget' => '',
	'before_title' => '<h1 class="home-widget-title">',
	'after_title' => '</h1>',
	));
register_sidebar(array(
	'id' => 'upcoming-events-widgets',
	'name' => __( 'Upcoming Events widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h2 class="home-widget-title">',
	'after_title' => '</h2>',
	));
register_sidebar(array(
	'id' => 'upcoming-workforceevents-widgets',
	'name' => __( 'Upcoming Workforce Events widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h2 class="home-widget-title">',
	'after_title' => '</h2>',
	));
register_sidebar(array(
	'id' => 'upcoming-classes-widgets',
	'name' => __( 'Upcoming Classes widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	'before_widget' => '<aside id="sidebar">',
	'after_widget' => '</aside>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
	));
register_sidebar(array(
	'id' => 'quicklinks-widgets',
	'name' => __( 'Quicklinks widgets', 'foundationpress' ),
	'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => '',
	));
register_sidebar(array(
	'id' => 'home-callto-widget',
	'name' => __( 'Home CallTo', 'foundationpress' ),
	'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h2 class="home-callto-title text-center">',
	'after_title' => '</h2>',
	));
register_sidebar(array(
	'id' => 'global-widgets',
	'name' => __( 'Global Widget', 'foundationpress' ),
	'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
	'before_widget' => '<article id="%1$s" class="row widget %2$s">',
	'after_widget' => '</article>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
}
add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
?>