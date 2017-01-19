

    /*$.noConflict();*/
    $(document).ready(function () {

    	var videos = ["player1", "player2", "player3", "player4"];
    	var video_sources = [
    		"https://player.vimeo.com/video/196781078", 
    		"https://player.vimeo.com/video/196781208", 
    		"https://player.vimeo.com/video/196781243", 
    		"https://player.vimeo.com/video/196781278"
    		];

	    //this global function needs to be accessible to the loaded section in the tab
	    window.showTab = function (tab) {
	    	$("#v-nav ul li[tab=" + tab + "]").click();
	    }

	    // Bind the event hashchange, using jquery-hashchange-plugin
	    $(window).hashchange(function () {
			showTab(location.hash.replace("#", ""));
	    })

	    // Trigger the event hashchange on page load, using jquery-hashchange-plugin
	    $(window).hashchange();

	    $("html, body").animate({
        	scrollTop: 0
    	}, 400);  

    	$('#v-nav>ul>li').click(function(){
	    	var element = $( this ).attr( "title" );
	    	
	    	if( (element !== undefined) ){
	    		for(var index = 0; index < videos.length; index++){
	    			if(element === videos[index]){
	    				var $frame = $('iframe#' + videos[index]);
	    				$frame.attr('src', video_sources[index]);	    				
	    			}

	    			else{
	    				var $frame = $('iframe#' + videos[index]);
	    				$frame.attr('src', '');		    				
	    			}

			    }
	    	}

	    	else
	    	{
	    		for(var index = 0; index < videos.length; index++){
	    			var $frame = $('iframe#' + videos[index]);
	    			$frame.attr('src','');
			    }

	    	}
	    	
	    });

	});//end document.ready
