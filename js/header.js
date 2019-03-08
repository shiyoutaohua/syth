// JavaScript Document
// 全站头部脚本

$(document).ready(function(){

// 获取nav中第13个li,并给其注册事件 ----- 显/隐捐助框
	"use strict";
	$("nav li:nth-child(13)").click(function(){
		$("header nav div.donate").slideToggle(600);
	});
	
	$("#login-ico").hover(
		function(){
			$("header .box1 .login-prompt").show();
		},
		function(){
			$("header .box1 .login-prompt").hide();
		}
	);
			
});