<?php
/**
 * The index sub template for Gee Radio 
 * Displays the default content sub page template
 *
 * @package WordPress
 * @subpackage Gee Theme
 * @since Gee Theme 1.0
 */

get_header(); 

$current_uri = get_the_url_and_return_last_segment($_SERVER['REQUEST_URI']);

?>

<?php if ($current_uri == "events"):?>

	<?php get_template_part('events', 'page');?>

<?php else:?>

	<?php get_template_part('content', 'none');?>

<?php endif;?>

<?php get_footer(); ?>