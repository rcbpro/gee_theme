<?php
// This is to get the custom post type adds 
$args = array(
    'post_type' => 'adds',
    'post_status' => 'publish', 
    'posts_per_page' => 5,      
    'orderby' => 'post_date', 
    'order' => 'DESC'
);
$adds_query = new WP_Query($args);
wp_reset_postdata();
// This is to get the custom post type logos 
$args = array(
    'post_type' => 'logos',
    'post_status' => 'publish', 
    'posts_per_page' => 8,      
    'orderby' => 'post_date', 
    'order' => 'ASC'
);
$logos_query = new WP_Query($args);
wp_reset_postdata();
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
// This is to get the custom post type for sliders
$args = array(
    'post_type' => 'sliders',
    'post_status' => 'publish', 
    'posts_per_page' => -1,      
    'orderby' => 'post_date', 
    'order' => 'DESC'
);
$sliders_query = new WP_Query($args);
wp_reset_postdata();
?>
<div id="home_page_only_middle_container" class="row">
    <div id="home_page_only_data_slider_adds_container" class="col-md-12">
    	<div id="slider_container" class="col-md-8 camera_wrap camera_azure_skin">
        <?php foreach($sliders_query->posts as $each_post):
              $image = wp_get_attachment_image_src(get_post_thumbnail_id($each_post->ID), 'large');            
        ?>
            <div data-src="<?=$image[0]?>">
                <h2 class="main_slider_title"><?=$each_post->post_title?></h2>
                <p class="main_slider_meta_description"><?=$each_post->post_excerpt?></p>
            </div>    
        <?php endforeach;?>    
    	</div><!-- slider_container / col-md-8 -->
    	<div id="adds_container" class="col-md-4">                
            <ul id="adds_slider">
                <?php foreach($adds_query->posts as $each_post):?>                        
                <li>
                    <?=get_the_post_thumbnail( $each_post->ID );?>
                    <h2 class="adds_slider_invisbile_header"><?=$each_post->post_title;?></h2>
                </li>
                <?php endforeach;?>
            </ul>
    	</div><!-- adds_container / col-md-4 -->    
    </div><!-- home_page_only_data_slider_adds_container / col-md-12 -->	      
    <div id="home_page_only_data_logo_slider_container" class="col-md-12">
        <div id="logo_slider_container">
            <!-- Slides Container -->
            <div u="slides" id="logo_slider_actual_container">
                <?php foreach($logos_query->posts as $each_post):?>                        
                <div class="logo_slider_each_internal_wrapper col-md-2">
                    <?=get_the_post_thumbnail( $each_post->ID );?>
                    <h2 class="adds_slider_invisbile_header"><?=$each_post->post_title;?></h2>
                </div>
                <?php endforeach;?>                        
                <?php foreach($logos_query->posts as $each_post):?>                        
                <div class="logo_slider_each_internal_wrapper col-md-2">
                    <?=get_the_post_thumbnail( $each_post->ID );?>
                    <h2 class="adds_slider_invisbile_header"><?=$each_post->post_title;?></h2>
                </div>
                <?php endforeach;?>                                        
            </div>        
        </div><!-- logo_slider_container -->
        <!-- Jssor Slider End -->
    </div><!-- home_page_only_data_logo_slider_container / col-md-12 -->        		
    <div id="home_page_only_data_chat_programs_container" class="col-md-12">
        <div id="home_page_only_chat_container">
            <div id="home_page_only_chat_internal_container" class="row">                
                <div id="each_post_internal_whole_wrapper" class="col-md-12">
                <?php 
                    global $wpdb;
                    $myposts = get_posts('numberposts=-1&amp;offset=$debut');
                    foreach($myposts as $post):                        
                ?>
                    <div class="each_post_internal_wrapper row">
                        <div class="post_owner_image col-md-2">
                            <img src="<?=get_bloginfo('template_directory')?>/images/logo_small.png" />
                        </div><!-- post_owner_image / col-md-2 -->
                        <div class="post_owner_post col-md-10">
                            <h5 class="owner_post_title"><?php the_title(); ?></h5>                            
                            <a id="comment_add_link_<?=$post->ID?>" href="javascript:void(0);" class="comment_add_link hide">Add comment</a>
                        </div><!-- post_owner_post / col-md-10 -->                        
                    </div><!-- each_post_internal_wrapper / row -->
                    <div id="commenting_form_wrapper_<?=$post->ID?>" class="comment_short_form row">
                        <form name="commenting_form" method="post" action="">
                            <input class="name" type="text" placeholder="Name" name="commenting_form[name]" />
                            <input class="email" type="text" placeholder="Email" name="commenting_form[email]" />
                            <textarea class="your_message" name="commenting_form[comment]" placeholder="Your message" maxlength="125"></textarea>
                            <input class="parent_post_id" type="hidden" name="commenting_form[parent_post_id]" value="blog_post_<?=$post->ID?>" />
                            <input type="button" class="comment_submit_btn" name="commenting_form[submit]" value="Comment" />
                            <input type="button" class="comment_cancel_btn" name="commenting_form[cancel]" value="Cancel" />                            
                            <span class="required_fields_message">All fields are required!</span>
                        </form>   
                    </div><!-- comment_short_form/ row -->
                    <?php            
                      $sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID, comment_post_ID, comment_author, comment_date_gmt, comment_approved, comment_type,comment_author_url, SUBSTRING(comment_content,1,30) AS com_excerpt FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = $wpdb->posts.ID) WHERE comment_approved = '1' AND comment_type = '' AND post_password = '' AND comment_post_ID = ".$post->ID." ORDER BY comment_date_gmt DESC LIMIT 10";                     
                      $comments = $wpdb->get_results($sql);  
                        if ($comments):
                            foreach($comments as $each_comment):
                    ?>
                        <div class="each_comment_wrapper row">
                            <div class="comment_owner_image col-md-2">
                                <?php
                                $gravatar_link = 'http://www.gravatar.com/avatar/' . md5($comment_author_email) . '?s=32';
                                echo '<img class="gravator_icon" src="' . $gravatar_link . '" />';                                
                                ?>
                            </div><!-- post_owner_image / col-md-2 -->  
                            <div class="post_owner_post col-md-10">                                                      
                                <h5 class="owner_post_title"><?=$each_comment->comment_author?></h5>
                                <p class="comment_post_content"><?=$each_comment->com_excerpt?></p>
                            </div><!-- post_owner_post / col-md- 8 -->    
                        </div><!-- each_comment_wrapper / row -->
                    <?php 
                            endforeach;
                        endif; 
                    ?>
                <?php endforeach; ?>    
                </div><!-- each_post_internal_whole_wrapper / col-md-12 -->    
            </div><!-- home_page_only_chat_internal_container / row -->            
        </div><!-- home_page_onl_chat_container / col-md-6 -->
        <div id="home_page_only_program_alignment_container">            
            <div id="programs_container" class="col-md-12">
                <div id="programs_container_heading" class="row">
                    <h1>Gee Programs</h1>
                </div><!-- programs_container_heading / col-md-12 -->
                <div id="programs_container_internal_wrapper" class="col-md-12">
                    <ul>
                    <?php foreach($programs_query->posts as $each_post):?>                                  
                    <?php
                        $presenter_name = get_post_meta( $each_post->ID, 'presenter_name', true );      
                        $program_date_and_time = get_post_meta( $each_post->ID, 'program_date_and_time', true );    
                    ?>  
                        <li>
                            <div class="each_program_container row">
                                <div class="each_program_image_wrapper home_page_only_each_program_image_wrapper col-md-3">
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
                            <div class="program_container_seperartor row"><!-- --></div><!-- program_container_seperartor / row -->                            
                        </li>
                    <?php endforeach;?>                                 
                    </ul>
                </div><!-- programs_container_internal_wrapper / col-md-12 -->
            </div><!-- programs_container / col-md-12 -->
        </div><!-- home_page_only_program_alignment_container / col-md-12 -->
    </div><!-- home_page_only_data_chat_programs_container / col-md-12 -->
</div><!-- home_page_only_middle_container / row -->    