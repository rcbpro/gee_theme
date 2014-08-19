<?php
/**
 * The Header template for Gee Radio 
 * Displays all of the header content for all pages
 *
 * @package WordPress
 * @subpackage Gee Theme
 * @since Gee Theme 1.0
 */
$top_menu = generate_custom_menus(wp_get_nav_menu_items('Header menu'));
$modified_url_segments = explode_given_url_to_custom_parts($_SERVER['REQUEST_URI']);
if (!empty($modified_url_segments)) $current_url = end($modified_url_segments);
if ($current_url == "geeradio.lk") $current_url = "";
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>    
<link href="<?=get_template_directory_uri()?>/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<!-- Include the bootstrap / fonts css file -->
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/css/bootstrap.min.css">
<!-- Stylesheet Integration for the Image transistion -->
<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/css/transitions.css" media="all" />
<?php if (is_front_page()):?>
<!-- Home Page main slider css integration -->  	
<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/css/camera.css" media="all" />
<!-- Home Page right corner adds slider css integration -->  	
<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/css/rhinoslider-1.05.css" media="all" />
<?php endif;?>
<?php if ($current_url == "gallery"):?>  
<link rel="stylesheet" type="text/css" href="<?=get_bloginfo('template_directory')?>/css/jquery.fancybox.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?=get_bloginfo('template_directory')?>/css/jquery.fancybox-buttons.css" />
<link rel="stylesheet" type="text/css" href="<?=get_bloginfo('template_directory')?>/css/jquery.fancybox-thumbs.css" />
<?php endif;?>
<!-- Include our custom css file -->
<link href="<?=get_template_directory_uri()?>/css/custom.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="main_wrapper" class="container">
	<header>		
		<div id="top_heading" class="col-md-12">
			<h1><span class="lowercase"><span class="uppercase">T</span>he</span> AMAZING EXPERIENCE <span class="lowercase">and</span> UNLIMITED MUSIC</h1>
		</div><!-- top_heading /col-md-12 -->
		<div id="second_top_header_content_wrapper" class="col-md-12">
			<div id="logo_player_and_banner_content_wrapper" class="col-md-7">
				<div id="logo_link_pretender">
					<h1>GeeRadio.lk</h1>
				</div><!-- logo_link_pretender -->
				<div id="player_wrapper">
					<!--VosCast.com Flash Player-->
					<script type="text/javascript" src="http://cdn.voscast.com/player/?key=79c1efdf20755244d8c37f89d3a4b117"></script>
<!--VosCast.com SHOUTcast Server Stats-->
<script type="text/javascript" src="http://cdn.voscast.com/stats/display.js?key=79c1efdf20755244d8c37f89d3a4b117&stats=currentlisteners,songtitle"></script>
<!--End SHOUTcast Server Stats-->
					<!--End Player-->
				</div><!-- player_wrapper -->
				<div id="online_listen_banner_wrapper"><!-- --></div><!-- online_listen_banner_wrapper -->
			</div><!-- logo_player_and_banner_content_wrapper / col-md-7 -->
			<div id="video_channel_content_wrapper" class="col-md-5">
				<div id="music_video_channel_container">
					<h2>Music Video</h2>
					<img src="<?=get_bloginfo('template_directory')?>/images/index_slice_03.jpg" />
					<div class="music_video_overlay"><span>COMING SOON</span></div><!-- music_video_overlay -->
				</div><!-- music_video_channel_container -->
				<div id="commercial_video_channel_container">
					<h2>Commercials</h2>
					<img src="<?=get_bloginfo('template_directory')?>/images/index_slice_03-02.jpg" />
					<div class="commercial_video_overlay"><span>COMING SOON</span></div><!-- music_video_overlay -->
				</div><!-- commercial_video_channel_container -->				
			</div><!-- video_channel_content_wrapper / col-md-5 -->
		</div><!-- second_top_header_content_wrapper / col-md-12 -->
		<div id="tagline_wrapper" class="col-md-12">
			<div id="hot_line_wrapper">
				<span class="transperent_text">Hot Line <span class="colorful_text">0775713214</span></span>
			</div><!-- hot_line_wrapper -->
			<div id="alternative_text_tagline_wrapper">
				<h3>An Alternative Internet Radio</h3>
			</div><!-- alternative_text_tagline_wrapper -->
			<div id="vimeo_link_container">
				<span class="transperent_text">Watch now on <span class="invisible_text">vimeo</span></span>
			</div><!-- vimeo_link_container -->			
		</div><!-- tagline_wrapper / col-md-12 -->		
		<div id="nav_search_content_wrapper" class="col-md-12">
			<nav id="top_menu_listing">
		        <ul id="top_menu_listing_ul">	            
		            <?php foreach($top_menu as $eachMenu):?>
		            <li class="<?=((isset($eachMenu['submenu'])) ? 'have_sub' : '')?>">
		                <a class="top_most_menu_link_child <?=((($eachMenu['attr_title'] == "Home") && (is_front_page())) || ($current_url != "") && (strstr($eachMenu['url'], $current_url))) ? 'top_most_menu_link_child_visited' : ''?>" href="<?=$eachMenu['url']?>"><?=strtoupper($eachMenu['title'])?></a>                                
		                <?php if (isset($eachMenu['submenu'])):?>
		                <ul>
		                    <?php foreach($eachMenu['submenu'] as $each_submenu_item):?>
		                        <li>
		                            <a class="top_most_menu_link_child <?=((($eachMenu['attr_title'] == "Home") && (is_front_page())) || ($current_url != "") && (strstr($eachMenu['url'], $current_url))) ? 'top_most_menu_link_child_visited' : ''?>" href="<?=$eachMenu['url']?>"><?=strtoupper($eachMenu['title'])?></a>                                
		                        </li>                                                
		                    <?php endforeach;?>
		                </ul>
		                <?php endif;?>                                    
		            </li>
		            <?php endforeach;?>           	
		        </ul>			
			</nav><!-- top_menu_listing / col-md-8 -->
			<div id="search_form_container">
				<?php get_search_form(); ?>
			</div><!-- search_form_container / col-md-4 -->
		</div><!-- nav_search_content_wrapper / col-md-12 -->	
	</header><!-- header -->
