// JavaScript Document
// 全站页脚

$(document).ready(function(){

// 鼠标滑过APP下载 ----- 显/隐
	"use strict";
	$("footer .wrapgate-about .app-download").hover(
		function(){
			$("footer .wrapgate-about #app-download").fadeIn(600);
		},
		function(){
			$("footer .wrapgate-about #app-download").fadeOut(0);
		}
	);
		
// 鼠标滑过QQ ----- 显/隐
	$("footer .wrapgate-about .qq").hover(
		function(){
			$("footer .wrapgate-about #qq").fadeIn(600);
		},
		function(){
			$("footer .wrapgate-about #qq").fadeOut(0);
		}
	);
		
// 鼠标滑过微信 ----- 显/隐
	$("footer .wrapgate-about .wechat").hover(
		function(){
			$("footer .wrapgate-about #wechat").fadeIn(600);
		},
		function(){
			$("footer .wrapgate-about #wechat").fadeOut(0);
		}
	);
});