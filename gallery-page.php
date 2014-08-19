<?php        
global $post;
$image_query = new WP_Query(array('post_type' => 'attachment', 'post_status' => 'inherit', 'post_mime_type' => 'image', 'posts_per_page' => -1, 'post_parent' => $post->ID, 'order' => 'ASC'));
?>
<div id="gallery_container" class="row js-isotope" data-isotope-options='{ "columnWidth": 200, "itemSelector": ".item" }'>
    <div id="gallery_container_heading" class="row">
        <h1>Our Achivements</h1>
    </div><!-- programs_container_heading / col-md-12 -->
    <div id="gallery_internal_content_container" class="row">
        <?php foreach($image_query->posts as $each_post):?>

        <div class="item fancybox_image_wrapper">
            <a href="<?=$each_post->guid?>" title="<?=$each_post->post_title?>" class="fancybox">
                <img alt="<?=$each_post->post_title?>" title="<?=$each_post->post_title?>" src="<?=$each_post->guid?>" />
            </a>
        </div><!-- item / fancybox_image_wrapper -->

        <?php endforeach;?>
    </div><!-- gallery_internal_content_container / row -->
</div><!-- gallery_container / row -->