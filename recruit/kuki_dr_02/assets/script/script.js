﻿var myfunc = function () {
    document.getElementById('drawerCheckbox').checked = false;
  }


jQuery(function($){
    $('.slider').each(function(){
		$(this).slick({
			autoplay:true,
			autoplaySpeed:5000,
			dots:true,
		});
	});	
});	
