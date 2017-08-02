<?php
require_once('library/cleanup.php');
require_once('library/enqueue-scripts.php');
// Required for Foundation to work properly
require_once('library/foundation.php');
// Register all navigation menus
require_once('library/navigation.php');
// Add menu walkers
require_once('library/menu-walker.php');
// Add off canvas mobile menu
require_once('library/offcanvas-walker.php');
// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');
// Return entry meta information for posts
require_once('library/entry-meta.php');
// Add theme support
require_once('library/theme-support.php');
// Custom Post Types
require_once('library/custom-post-types.php');
// Theme Options
require_once('library/theme-options.php');
// Derigister Scripts
require_once('library/deregister-scripts.php');
?>
