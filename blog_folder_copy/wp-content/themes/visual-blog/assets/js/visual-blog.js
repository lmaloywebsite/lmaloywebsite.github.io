(function ($) {
	"use strict";
    
    //document ready function
    jQuery(document).ready(function($){
    
	if ($(window).width() > 992) {
	     $('.dropdown > a').click(function(){
	        location.href = this.href;
	    });
	}
	
	$("span.dropdown-toggle.dropdown-toggle-split").on("click", function(){
		  $(this).parents("li.dropdown").toggleClass("show-dropdown");
		  $(this).parents("li.dropdown").removeClass("focus");
		});
		$('li.dropdown a').focus(function() {
			$('li.dropdown ul').addClass("focus-added");
		})
		$('body, span.dropdown-toggle.dropdown-toggle-split').on("click", function(){
			$('li.dropdown ul').removeClass("focus-added");
		})

		$("#visual-main").visualBlogAccessibleDropDown();
		
	});

 		$.fn.visualBlogAccessibleDropDown = function () {
			    var vs = $(this);
	     $("a", vs).focus(function() {
			        $(this).parents("li").addClass("focus");
			    }).blur(function() {
			        $(this).parents("li").removeClass("focus");
			    });
		
		
			    
		}

}(jQuery));	