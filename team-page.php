<?php
// This is to get the custom post type programs 
$args = array(
    'post_type' => 'members',
    'post_status' => 'publish', 
    'posts_per_page' => -1,      
    'orderby' => 'post_date', 
    'order' => 'ASC'
);
$members_query = new WP_Query($args);
wp_reset_postdata();
?>
<div id="teams_container" class="col-md-12">
	<div id="teams_container_heading" class="row">
		<h1>Behind the Scene</h1>
	</div><!-- programs_container_heading / col-md-12 -->
	<div id="va-accordion" class="va-container">
		<div class="va-nav">
			<span class="va-nav-prev">Previous</span>
			<span class="va-nav-next">Next</span>
		</div>
		<div class="va-wrapper">
			<?php 
				$i = 1;
				foreach($members_query->posts as $each_post):			

					$team_member_title = get_post_meta( $each_post->ID, 'title_of_the_team_member', true );						
					$profile_image = wp_get_attachment_image_src(get_post_thumbnail_id($each_post->ID), 'large');   
					$profile = get_post_meta( $each_post->ID, 'profile', true );				
					$portfolio_link = get_post_meta( $each_post->ID, 'external_portfolio_link', true );		
			?>
			<div class="va-slice va-slice-<?=$i?>" style="background:#170804 url(<?=$profile_image[0]?>) no-repeat center center;">
				<h3 class="va-title"><?=strtoupper($each_post->post_title)?></h3>
				<div class="va-content">
					<p><?=$team_member_title?></p>
					<!--
					<ul>
						<li><a class="portfolio_link" href="javascript:void(0);"><?=$portfolio_link?></a></li>
					</ul>
					-->
					<div class="small_intro_on_our_people"><?=$profile?></div><!-- small_intro_on_our_people -->
				</div><!-- va-content -->
			</div><!-- va-slice -->			
			<?php 
				$i++;
				endforeach;
			?>
		</div><!-- va-wrapper -->
	</div><!-- va-accordion / va-container -->
</div><!-- teams_container / row -->	