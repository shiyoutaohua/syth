// JavaScript Document
$(document).ready(function(){
	"use strict";
	$(".user-info .accoun-manage .body a").hover(
		function(){
			$(this).children("i.i-right").css({"background-image":"url(/syth/images/userhome/go-hover-ico.png)"});
		},
		function(){
			$(this).children("i.i-right").css({"background-image":"url(/syth/images/userhome/go-ico.png)"});
		}
	);
});
