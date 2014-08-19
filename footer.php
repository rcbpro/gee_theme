<?php
/**
 * The Footer template for Gee Radio 
 * Displays all of the footer content for all pages
 *
 * @package WordPress
 * @subpackage Gee Theme
 * @since Gee Theme 1.0
 */
$modified_url_segments = explode_given_url_to_custom_parts($_SERVER['REQUEST_URI']);
if (!empty($modified_url_segments)) $current_url = end($modified_url_segments);
?>
  <footer class="col-md-12">
    <div id="gee_radio_vision_container" class="col-md-6">
      <img src="<?=get_bloginfo('template_directory')?>/images/text03.png" /><br />
      <span>&copy;2014 Studio Artbeat All Right Reserved.</span>
    </div><!-- gee_radio_vision_container / col-md-6 -->
    <div id="highresmedia_container" class="col-md-6 highresmedia_logo_orginal_pos">
      <p>Design and Web Solution by</p>
      <a id="highresmedia_link" href="http://www.highresmedia.net" target="_new">Highresmedia.net</a>
    </div><!-- highresmedia_container / col-md-6 -->
  </footer><!-- footer / col-md-12 -->
</div><!-- main_wrapper / row -->

<!-- This code will be in the outside for the top header background and will be fixed in position --> 
<div class="back-to-top hidden-phone hidden-tablet" style="display: block;">
  <i class="icon-chevron-up"></i>
  <span>Back to top</span>
</div><!-- back-to-top / hidden-phone / hidden-tablet --> 
<!-- End of the fixed position code -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52562761-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://localhost/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 2]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="http://localhost/piwik/piwik.php?idsite=2" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- Bootstrap js Integration -->
<script src="<?=get_bloginfo('template_directory')?>/js/bootstrap.min.js" type="text/javascript" language="javascript"></script>
<?php if (is_front_page()):?>
<!-- Home Page main slider js integration -->  
<script src="<?=get_bloginfo('template_directory')?>/js/jquery.mobile.customized.min.js" type="text/javascript" language="javascript"></script>
<script src="<?=get_bloginfo('template_directory')?>/js/jquery.easing.1.3.js" type="text/javascript" language="javascript"></script> 
<script src="<?=get_bloginfo('template_directory')?>/js/camera.min.js" type="text/javascript" language="javascript"></script> 
<script src="<?=get_bloginfo('template_directory')?>/js/camera.min.js" type="text/javascript" language="javascript"></script> 
<!-- Home Page right corner adds slider js integration -->  
<script src="<?=get_bloginfo('template_directory')?>/js/rhinoslider-1.05.min.js" type="text/javascript" language="javascript"></script> 
<!-- Home Page dragging slider js integration -->  
<script src="<?=get_bloginfo('template_directory')?>/js/jssor.core.js" type="text/javascript" language="javascript"></script> 
<script src="<?=get_bloginfo('template_directory')?>/js/jssor.utils.js" type="text/javascript" language="javascript"></script> 
<script src="<?=get_bloginfo('template_directory')?>/js/jssor.slider.js" type="text/javascript" language="javascript"></script> 
<!-- Home Page programs ticker js integration -->  
<script src="<?=get_bloginfo('template_directory')?>/js/jquery.vticker-min.js" type="text/javascript" language="javascript"></script> 
<!-- Custom js Integration -->
<script src="<?=get_bloginfo('template_directory')?>/js/front_page_custom.js" type="text/javascript" language="javascript"></script>
<?php else:?>
<!-- Vaccordion js Integration only for the team page -->  
<?php if ($current_url == "team"):?>  
<script src="<?=get_bloginfo('template_directory')?>/js/jquery.easing.1.3.js" type="text/javascript" language="javascript"></script>   
<script src="<?=get_bloginfo('template_directory')?>/js/jquery.mousewheel.js" type="text/javascript" language="javascript"></script>     
<script src="<?=get_bloginfo('template_directory')?>/js/jquery.vaccordion.js" type="text/javascript" language="javascript"></script>  
<script src="<?=get_bloginfo('template_directory')?>/js/jquery.easing.1.3.js" type="text/javascript" language="javascript"></script> 
<script type="text/javascript" language="javascript">
$('#va-accordion').vaccordion({
    expandedHeight  : 350,
    animSpeed       : 400,
    animOpacity     : 0.7,
    visibleSlices   : 3,
    animSpeed       : 250,
    animEasing      : 'jswing',    
    contentAnimSpeed: 900,
    savePositions   : true    
});
</script>
<?php endif;?>
<!-- Isotope js Integration only for the gallery page -->  
<?php if ($current_url == "gallery"):?>  
<script src="<?=get_bloginfo('template_directory')?>/js/isotope.pkgd.min.js" type="text/javascript" language="javascript"></script>  
<!-- Fancybox js Integration only for the gallery page -->  
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="<?=get_bloginfo('template_directory')?>/js/jquery.fancybox.js" language="javascript"></script>
<!-- Add Button helper (this is optional) -->
<script type="text/javascript" src="<?=get_bloginfo('template_directory')?>/js/jquery.fancybox-buttons.js" language="javascript"></script>
<!-- Add Thumbnail helper (this is optional) -->
<script type="text/javascript" src="<?=get_bloginfo('template_directory')?>/js/jquery.fancybox-thumbs.js" language="javascript"></script>
<!-- jQuery twitter widget js plug in -->
<script src="<?=get_bloginfo('template_directory')?>/js/widgets.js" type="text/javascript" language="javascript"></script>
<script src="<?=get_bloginfo('template_directory')?>/js/jquery.easing.1.3.js" type="text/javascript" language="javascript"></script> 
<script type="text/javascript" Language="javascript">        
var $container = $('#gallery_internal_content_container');
$container.isotope({    
    itemSelector: '.item',
    layoutMode: 'fitRows'
});
$(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        beforeShow: function () {
            if (this.title) {
                // New line
                this.title += '<br />';
                
                // Add tweet button
                this.title += '<a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-url="' + this.href + '">Tweet</a> ';
                
                // Add FaceBook like button
                this.title += '<iframe src="//www.facebook.com/plugins/like.php?href=' + this.href + '&amp;layout=button_count&amp;show_faces=true&amp;width=500&amp;action=like&amp;font&amp;colorscheme=light&amp;height=23" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:23px;" allowTransparency="true"></iframe>';
            }
        },
        afterShow: function() {
            // Render tweet button
            twttr.widgets.load();
        },
        helpers : {
            title : {
                type: 'outside'
            }
        }  
});
//$('#gallery_container a:first-child').trigger('click');    
</script>            
<?php endif;?>
<?php if ($current_url == "events"):?>  
<script src="<?=get_bloginfo('template_directory')?>/js/jquery.slidorion.min.js" type="text/javascript" language="javascript"></script>  
<script src="<?=get_bloginfo('template_directory')?>/js/jquery.easing.1.3.js" type="text/javascript" language="javascript"></script> 
<script type="text/javascript" Language="javascript">        
$(function() {
    $('#slidorion').slidorion({
        interval: 5000,
        effect  : 'slideRandom',
        autoPlay:0
    });
});
</script>            
<?php endif;?>
<?php if ($current_url == "contact"):?>  
<script src="<?=get_bloginfo('template_directory')?>/js/jquery.easing.1.3.js" type="text/javascript" language="javascript"></script> 
<?php endif;?>
<script src="<?=get_bloginfo('template_directory')?>/js/custom.js" type="text/javascript" language="javascript"></script>  
<?php endif;?>
<?php wp_footer(); ?>
</body>
</html>