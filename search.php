<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Gee Radio
 * @since Gee Radio 1.0
 */
global $wp_query;

get_header(); 

$total_results = $wp_query->found_posts;

$posts = query_posts($query_string . '&posts_per_page=-1'); 
?>
<div id="other_pages_middle_content" class="row">    	
	<div id="search_content_container" class="col-md-12">		
	    <div id="search_container_heading" class="row">
	        <h1>Did you find it ?</h1>
	    </div><!-- programs_container_heading / row -->
		<div id="search_content_internal_container" class="row">    		

			<?php if ( have_posts() ) : ?>			
				
				<h1 class="pagetitle">Search Result for <?php 

					$allsearch = &new WP_Query("s=$s&showposts=-1"); 
					$key = wp_specialchars($s, 1); 
					$count = $allsearch->post_count; 
					_e(''); 
					_e('<span class="search-terms">'); 
					echo $key; 
					_e('</span>'); 
					_e(' &mdash; '); 
					echo $count . ' '; 
					_e('articles'); 
					wp_reset_query(); ?>

				</h1>			

				<?php //get_template_part( 'content', 'page' ); ?>

				<?php foreach($wp_query->posts as $each_post):
				?>			

					<div class="row each_search_result_block">	

						<h2><?=$each_post->post_title?></h2>

						<p><?=$each_post->post_content?></p>			
					
						<a href="<?=home_url() . '/' . $each_post->post_type . '/' . $each_post->post_name?>">Post link...</a>

					</div><!-- row / each_search_result_block -->

				<?php endforeach;?>			

			<?php else: ?>			
				
				<?php _e( 'Nothing Found', 'twentytwelve' ); ?>			
			
				<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>											

			<?php endif; ?>

		</div><!-- search_content_internal_container / row -->
	</div><!-- search_content_container /  col-md-12 -->	
</div><!-- other_pages_middle_content / row -->	

<?php get_footer(); ?>