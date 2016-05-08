<?php
/*
Plugin Name: Facebook Like Button 123
Plugin URI: 
Description: plugin for setup Facebook Like Button to every post on your wordpress blog.
Version: 1.0
Author: Aleksandr Poss
Author URI: 
*/


function facebook_like_button_123($content) {
	
	$current_url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];       
     
        
     if (!is_home()) {
	  	        
                    $content .= '   
                     <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, \'script\', \'facebook-jssdk\'));
                </script>

            <div class="fb-like" data-href="' . $current_url . '" data-width="160" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

                    '; 


     }
        
        return $content;  
}
add_action('the_content','facebook_like_button_123');
