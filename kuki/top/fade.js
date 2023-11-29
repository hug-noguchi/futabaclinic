// JavaScript Document

//=========================================================
//
//	jQuery FADE.JS
//
//=========================================================
$(function(){
	var fadeTime = 2000;
	var switchTime = 4600;

	$(window).load(function(){
	
		$('#image01').stop().animate({opacity:'0'},fadeTime);
		$('#image01').stop().animate({opacity:'1'},fadeTime);
		
		setTimeout(function(){imgChange01();},switchTime);
	});
	function imgChange01() {
		$('#image01').stop().animate({opacity:'0'},fadeTime);
		$('#image02').stop().animate({opacity:'1'},fadeTime);
		setTimeout(function(){imgChange02();},switchTime);
	};
	function imgChange02() {
		$('#image02').stop().animate({opacity:'0'},fadeTime);
		$('#image03').stop().animate({opacity:'1'},fadeTime);
		setTimeout(function(){imgChange03();},switchTime);
	};
	
	function imgChange03() {
		$('#image03').stop().animate({opacity:'0'},fadeTime);
		$('#image01').stop().animate({opacity:'1'},fadeTime);

		setTimeout(function(){imgChange01();},switchTime);
	};
	

});

$(function(){
	var fadeTime = 2800;
	var switchTime = 4000;

	$(window).load(function(){
	
		$('#sp_image01').stop().animate({opacity:'0'},fadeTime);
		$('#sp_image01').stop().animate({opacity:'1'},fadeTime);
		
		setTimeout(function(){imgChange01();},switchTime);
	});
	function imgChange01() {
		$('#sp_image01').stop().animate({opacity:'0'},fadeTime);
		$('#sp_image02').stop().animate({opacity:'1'},fadeTime);
		setTimeout(function(){imgChange02();},switchTime);
	};
	function imgChange02() {
		$('#sp_image02').stop().animate({opacity:'0'},fadeTime);
		$('#sp_image03').stop().animate({opacity:'1'},fadeTime);
		setTimeout(function(){imgChange03();},switchTime);
	};
	
	function imgChange03() {
		$('#sp_image03').stop().animate({opacity:'0'},fadeTime);
		$('#sp_image01').stop().animate({opacity:'1'},fadeTime);

		setTimeout(function(){imgChange01();},switchTime);
	};
	

});




