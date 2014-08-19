$(document).ready(function(){	
	var document_url = "http://geeradio.lk/";	
	// When the page gets loaded these players will be hidden
	$('.music_video_overlay').hide();
	$('.commercial_video_overlay').hide();
    // When the page gets loaded all comment short forms going to be hide
    $('.comment_short_form').hide();	
	// For the scroller button 
    $('.back-to-top').hide();	    
	// Blur the other heading links when one links has been focused
    $('#top_menu_listing_ul li').each(function(i){		
		if (!$(this).find('.top_most_menu_link_child').hasClass('top_most_menu_link_child_visited')){
			$(this).find('.top_most_menu_link_child').addClass('notHighlighted');
		}
    });
    // When hovering on the post area the commenting link should be appeared
    $('.each_post_internal_wrapper').hover(function(){
    	$(this).find('.comment_add_link').removeClass('hide').addClass('display');
    	$(this).find('.comment_add_link').click(function(){    		
    		$('.required_fields_message').removeClass('required_fields_error_message').html('All fields are required!');
    		current_id = $(this).attr('id').replace('comment_add_link_', '');    	
    		immidiate_next_element_id = $(this).parents().next().attr('id').replace('commenting_form_wrapper_', '');
			$('.comment_short_form').each(function(i){	
				if ($(this).attr('id') != 'commenting_form_wrapper_' + immidiate_next_element_id){
					$(this).slideUp('slow');
				}
			});
    		$('#commenting_form_wrapper_' + current_id).slideDown('slow');    		    		    				    				    				
    	});
    }, function(){
		$(this).find('.comment_add_link').removeClass('display').addClass('hide');
    });
    // When cliking the cancel button in the short commenting form
    $('.comment_cancel_btn').click(function(){		    			    	
		$(this).parents().eq(1).find('input[type="text"]').each(function(i){	    	
			$(this).val('');
		});
		$(this).parents().eq(1).find('textarea').val('');
    	$(this).parents().eq(1).slideUp('slow');
    	$('.required_fields_message').removeClass('required_fields_error_message').html('All fields are required!');
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
	// Camera slideshow
	$('#slider_container').camera({		
		height: '303px',
		width: '762px',
		loader: 'none',
		pagination: false,
		thumbnails: false,
		fx: 'scrollLeft',
		autoAdvance: true
	});	
	// For the adds fading slider
	$('#adds_slider').rhinoslider({
		effect: 'fade',
		randomOrder: true,
		controlsMousewheel: false,
		controlsKeyboard: false,
		controlsPrevNext: false,
		controlsPlayPause: false,
		autoPlay: true,
		showBullets: 'never',
		showControls: 'never',
		effectTime: 4000
	});
	// Dragging js integration only for the home page
	var options = {
        $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
        $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
        $AutoPlayInterval: 0,                            	//[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
        $PauseOnHover: 1,                               	//[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1
        $ArrowKeyNavigation: false,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
        $SlideEasing: $JssorEasing$.$EaseLinear,          	//[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
        $SlideDuration: 3000,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
        $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
        $SlideWidth: 220,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
        //$SlideHeight: 100,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
        $SlideSpacing: 12, 					                //[Optional] Space between each slide in pixels, default value is 0
        $DisplayPieces: 5,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
        $ParkingPosition: 0,                              	//[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
        $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
        $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
        $DragOrientation: 1                                	//[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
    };
    var jssor_slider1 = new $JssorSlider$("logo_slider_container", options);    
    // Program scroller js integration
    $('#programs_container_internal_wrapper').vTicker({ 
		speed: 1500,
		pause: 5000,
		animation: 'fade',
		mousePause: true,
		showItems: 7,
		height: 453,
		isPaused: true
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
    // For the commenting program
    $('.comment_submit_btn').click(function(){
    	var current_submit_btn_parent_wrapper = $(this).parents().eq(1),
    		name_input = current_submit_btn_parent_wrapper.find('.name'),
    		email_input = current_submit_btn_parent_wrapper.find('.email'),
    		your_message_input = current_submit_btn_parent_wrapper.find('.your_message'),
    		parent_post_id_input = current_submit_btn_parent_wrapper.find('.parent_post_id'),
    		emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/,
    		required_fields_message = current_submit_btn_parent_wrapper.find('.required_fields_message'),
    		comment_cancel_btn = current_submit_btn_parent_wrapper.find('.comment_cancel_btn');    	
    	// If all fields are empty	
    	if ((name_input.val() == "") || (email_input.val() == "") || (your_message_input.val() == "")){
    		$('.required_fields_message').addClass('required_fields_error_message').html('Form incomplete!');
    	}else{
    		// If one of them is not empty	
			if (!emailReg.test( email_input.val() )){
				required_fields_message.addClass('required_fields_error_message').html('Invalid email!');				
			}else{
				required_fields_message.removeClass('required_fields_error_message').html('Form seems OK!');				
				$.ajax({
        			url: document_url + "server.php",
        			type: "post",
        			dataType: "json", 
        			data: "name=" + name_input.val() + "&email=" + email_input.val() + "&your_message=" + your_message_input.val() + "&parent_post_id=" + parent_post_id_input.val().replace('blog_post_', ''),
					success: function(data) {					    
						if (data.error_status == 0){
					    	required_fields_message.removeClass('required_fields_error_message').html(data.final_msg);						            		            
					    }else{
							required_fields_message.addClass('required_fields_error_message').html(data.final_msg);						            		            					    					    					    	
					    }	
					    setTimeout(function() {
      						comment_cancel_btn.trigger('click');
						}, 1500);						
					},
					error: function(e) {					  
						required_fields_message.addClass('required_fields_error_message').html('Something went wrong!');						            		            					    					    
					    setTimeout(function() {
      						comment_cancel_btn.trigger('click');
						}, 1500);						
					}  					
		        });		        
			}
    	}
    });
    // When someone hovers in the each program logo then It needs to display it's title
    $('.home_page_only_each_program_image_wrapper').find('img').hover(function(){
        var title_should_in_img = $(this).parents().eq(0).find('h2').html();                
        $(this).attr('alt', title_should_in_img);
        $(this).attr('title', title_should_in_img);
    }, function(){
        $(this).attr('alt', '');
        $(this).attr('title', '');
    });
});