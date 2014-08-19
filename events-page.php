<?php
// This is to get the custom post type adds 
$args = array(
    'post_type' => 'events',
    'post_status' => 'publish', 
    'posts_per_page' => -1,      
    'orderby' => 'post_date', 
    'order' => 'DESC'
);
$events_query = new WP_Query($args);
wp_reset_postdata();
?>
<div id="events_wrapper" class="col-md-12">
	<div id="events_container_heading" class="row">
		<h1>Upcomings</h1>
	</div><!-- programs_container_heading / col-md-12 -->
	<div id="events_internal_wrapper" class="row">
		<div id="slidorion" class="slidorion">
			<div class="slider">
				<?php foreach($events_query->posts as $each_post):?>
				<div class="slide"><?=get_the_post_thumbnail( $each_post->ID );?></div>
				<?php endforeach;?>
			</div><!-- slider -->
			<div class="accordion">
				<?php foreach($events_query->posts as $each_post):?>
				<div class="header"><?=$each_post->post_title?></div><!--<header> --></header>
				<div class="content"><?=$each_post->post_content?></div><!-- content -->				
				<?php endforeach;?>
			</div><!-- accordion -->
		</div><!-- slidorion -->	
	</div><!-- events_internal_wrapper / col-md-12 -->