// JavaScript Document
$(document).ready(function(){
	"use strict";
	$("#publishdate").click(function(){
		$(this).attr({"type":"date"});
	});
	
	$("#printdate").click(function(){
		$(this).attr({"type":"date"});
	});
	
	$("#edition").click(function(){
		$(this).attr({"type":"number"});
	});
		
	$("#price").click(function(){
		$(this).attr({"type":"number"});
	});
	
	
// 输入合法性验证
	function checkSubmit(){
		alert("hhhh");
		return true;
	}
});
