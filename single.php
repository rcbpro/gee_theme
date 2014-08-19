<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Gee Radio
 * @since Gee Radio 1.0
 */

get_header(); 

$post_content = get_the_original_post_name_and_return_the_post_content($_SERVER['REQUEST_URI']);
?>

<div id="single_page_container" class="col-md-12">
    <div id="single_blog_container_heading" class="row">
        <h1><?=the_title();?></h1>
    </div><!-- programs_container_heading / row -->
    <div id="single_blog_page_container" class="row">
    	
	<?=(!empty($post_content[0]->post_content) ? $post_content[0]->post_content : $post_content[0]->post_title);?>

    </div><!-- contact_page_container / row -->  
</div><!-- teams_container / col-md-12 -->    

<?php get_footer(); ?>