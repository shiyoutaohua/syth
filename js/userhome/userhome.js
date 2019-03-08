// JavaScript Document
// 个人中心界面脚本
$(document).ready(function(){
	"use strict";	
	init_userhome();
	
	// 菜单项鼠标单击事件 以改变选中样式
	$(".admin-menu ul li a").click(function(){
		$(this).addClass("selected");
		$(this).parent().siblings().children("a").removeClass("selected");
	});
	
	// 为菜单item注册单击事件 以加载content内容
	$("#myinfo").click(function(){
		$(".content-menu").load('../userhome/myinfo.php');
	});
	
	$("#message").click(function(){
		$(".content-menu").load('../userhome/message.php');
	});
	
	$("#second-hand").click(function(){
		$(".content-menu").load('../userhome/second-hand.php');
	});
	
	$("#assistant").click(function(){
		$(".content-menu").load('../userhome/assistant.php');
	});
	
});

function init_userhome(){
	"use strict";
	$(".content-menu").load('../userhome/myinfo.php');
}