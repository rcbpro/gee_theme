<?php
/**
 * The 404 sub template for Gee Radio 
 * Displays 404 error content
 *
 * @package WordPress
 * @subpackage Gee Theme
 * @since Gee Theme 1.0
 */
get_header(); ?>

<div id="other_pages_middle_content" class="row">    	
	<div id="four_zero_four_content_container" class="col-md-12">		

		<img src="<?=get_template_directory_uri()?>/images/404.jpg" />

	</div><!-- 404_content_container / col-md-12 -->
</div><!-- other_pages_middle_content / row -->	
	
<?php get_footer(); ?>