$(document).ready(function(){
	  var document_url = "http://geeradio.lk/";	
    // When the page gets loaded these players will be hidden
    $('.music_video_overlay').hide();
    $('.commercial_video_overlay').hide();    
    // For the scroller button 
    $('.back-to-top').hide();     
    // Blur the other heading links when one links has been focused
    $('#top_menu_listing_ul li').each(function(i){    
        if (!$(this).find('.top_most_menu_link_child').hasClass('top_most_menu_link_child_visited')){
            $(this).find('.top_most_menu_link_child').addClass('notHighlighted');
        }
    });
	  // When clicking on the logo redirects to the home page
	  $('#logo_link_pretender').click(function(){
		    document.location.href = document_url;
	  });
	  // Adding the search query text to the search text box as a placeholder
	  $('#s').attr('value', 'Search Here');
	  $('#s').focus(function(){
		    $('#s').attr('value', '');
	  }).blur(function(){
		    $('#s').attr('value', 'Search Here');
	  });
	  // For the scroll event functions 
    $(window).scroll(function(){    
       if (($(window).scrollTop() == 1) || ($(window).scrollTop() == 0)){        
          $('.back-to-top').fadeOut();
       }else{
          $('.back-to-top').fadeIn();     
       }
    });
    // For the back to top button click event 
    $('.back-to-top').click(function(){
      	 $('html,body').animate({ scrollTop: 0 }, 1000, 'easeInQuint');
      	 return false; 
    });   
    //  When hovering on top of the highresmedia.net logo
    $('#highresmedia_link').hover(function(){		
	       $('#highresmedia_container').removeClass('highresmedia_logo_orginal_pos').addClass('highresmedia_logo_turnover_pos');		
    }, function(){		
		     $('#highresmedia_container').removeClass('highresmedia_logo_turnover_pos').addClass('highresmedia_logo_orginal_pos');		
    });
    // For the youtube and vimeo channel links
    $('#music_video_channel_container').hover(function(){
        $(this).find('.music_video_overlay').fadeIn(500);
    }, function(){
        $(this).find('.music_video_overlay').fadeOut(500);
    });
    $('#commercial_video_channel_container').hover(function(){
        $(this).find('.commercial_video_overlay').fadeIn(500);
    }, function(){
        $(this).find('.commercial_video_overlay').fadeOut(500);
    }); 
    // When someone hovers in the each program logo then It needs to display it's title
    $('.each_program_image_wrapper').find('img').hover(function(){
        var title_should_in_img = $(this).parents().eq(0).find('h2').html();        
        $(this).attr('alt', title_should_in_img);
        $(this).attr('title', title_should_in_img);
    }, function(){
        $(this).attr('alt', '');
        $(this).attr('title', '');
    });
});