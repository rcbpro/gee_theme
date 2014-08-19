<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Gee Radio
 * @since Gee Radio 1.0
 */

get_header(); 

$desired_sub_layout = checkForTheRestOfThePagesAndLoadDifferentSubLayouts($_SERVER['REQUEST_URI']);
?>

	<div id="other_pages_middle_content" class="row">    	
		<?php get_template_part( $desired_sub_layout, 'page' ); ?>        
    </div><!-- other_pages_middle_content / row -->        

<?php get_footer(); ?>