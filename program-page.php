<?php
// This is to get the custom post type programs 
$args = array(
    'post_type' => 'programs',
    'post_status' => 'publish', 
    'posts_per_page' => -1,      
    'orderby' => 'post_date', 
    'order' => 'DESC'
);
$programs_query = new WP_Query($args);
wp_reset_postdata();
?>
	<div id="programs_container" class="col-md-12">
		<div id="programs_container_heading" class="row">
			<h1>Gee Programs</h1>
		</div><!-- programs_container_heading / col-md-12 -->
		<div id="programs_container_internal_wrapper" class="col-md-12">
		<?php foreach($programs_query->posts as $each_post):?>                        			
		<?php
			$presenter_name = get_post_meta( $each_post->ID, 'presenter_name', true );		
			$program_date_and_time = get_post_meta( $each_post->ID, 'program_date_and_time', true );	
		?>	
			<div class="each_program_container row">
				<div class="each_program_image_wrapper col-md-3">
					<?=get_the_post_thumbnail( $each_post->ID );?>
					<h2><?=$each_post->post_title?></h2>
				</div><!-- each_program_image_wrapper / col-md-3 -->	
				<div class="each_program_presenter_wrapper col-md-4">
					<h3>With <?=$presenter_name?></h3>
				</div><!-- each_program_presenter_wrapper / col-md-4 -->	
				<div class="each_program_date_wrapper col-md-5">
					<p><?=$program_date_and_time?></p>
				</div><!-- each_program_date_wrapper / col-md-5 -->					
			</div><!-- each_program_container / row -->
			<div class="program_container_seperartor row"><!-- --></div><!-- program_container_seperartor / row -->
		<?php endforeach;?>                        			
		</div><!-- programs_container_internal_wrapper / col-md-12 -->
	</div><!-- programs_container / col-md-12 -->
    