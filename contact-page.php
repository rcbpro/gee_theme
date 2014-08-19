<div id="contact_container" class="col-md-12">
    <div id="contact_container_heading" class="row">
        <h1>How to Reach Us</h1>
    </div><!-- programs_container_heading / row -->
    <div id="contact_page_container" class="row">
    	<div id="other_pages_left_content_wrapper" class="col-md-4">
    		<div class="contact-details">
                <p class="bold">Give us a call</p>
                <p><a href="skype:+94775713214?call">+94 775 713 214</a></p>
                <p><a href="skype:+94718668629?call">+94 71 8668629</a></p><br />
                <p class="bold">Drop us an email</p>
                <p><a href="mailto:geeradiolk@gmail.com">geeradiolk@gmail.com</a></p>
                <p><a href="mailto:sartbeat@gmail.com">sartbeat@gmail.com</a></p><br />
                <p class="bold">Shake hands</p>
                <p>Geeradio, Studio Artbeat, 190/1A,</p>
                <p>Kalapaluwawa Road, Koswaththa,</p>
                <p>Baththaramulla, Sri Lanka.</p>
                <p>Postal Cord - 10120</p>
                <div id="contact_iframe_wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3960.782958258806!2d79.9207754!3d6.9165325!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae257587969738b%3A0x269dfd762544301f!2sKoswatta+Rd!5e0!3m2!1sen!2slk!4v1406184982263" width="300" height="300" frameborder="0" style="border:0"></iframe>                
                </div><!-- contact_iframe_wrapper -->
            </div><!-- contact-details -->		
    	</div><!-- other_pages_left_content_wrapper / col-md-6 -->
    	<div id="other_pages_right_content_wrapper" class="col-md-8">
    		<?php while ( have_posts() ) : the_post(); ?>
    			<?php get_template_part( 'content', 'page' ); ?>
    		<?php endwhile; ?>			    
    	</div><!-- other_pages_right_content_wrapper / col-md-6 -->
    </div><!-- contact_page_container / row -->  
</div><!-- teams_container / col-md-12 -->    