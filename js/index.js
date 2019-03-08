// JavaScript Document
// 主页脚本

window.onload = function (){
	"use strict";
	firstSlidePlay();
};

$(document).ready(function(){
	"use strict";
	
	$("#mainbox_box3_right_tabs_li1").mouseenter(function (){
		$("#mainbox_box3_right_tabs_li2").removeClass("current-tab");
		$("#mainbox_box3_right_tabs_li3").removeClass("current-tab");
		$(this).addClass("current-tab");
	});
	$("#mainbox_box3_right_tabs_li2").mouseenter(function (){
		$("#mainbox_box3_right_tabs_li1").removeClass("current-tab");
		$("#mainbox_box3_right_tabs_li3").removeClass("current-tab");
		$(this).addClass("current-tab");
	});
	$("#mainbox_box3_right_tabs_li3").mouseenter(function (){
		$("#mainbox_box3_right_tabs_li1").removeClass("current-tab");
		$("#mainbox_box3_right_tabs_li2").removeClass("current-tab");
		$(this).addClass("current-tab");
	});
});


/*---------------------------------↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓幻灯片1播放函数↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓---------------
 * 在Chrome测试时一直无法支持jQuery的 $(function(){}) 和 $(document).ready(),所以改用原生window.onload;
 */
function firstSlidePlay(){
	/**
	 * box 		幻灯片外框(div)
	 * uls 		幻灯片图片外框(ul)
	 * order 	图片序列号外框(div)
	 * lis 		图片外框(li)
	 * wdiths 	图片集的总宽度
	 * runtime 	图片滑动速度(毫秒)
	 * latency 	图片切换间隔(毫秒)
	 * control 	控制器，控制定时器的执行
	 * num 		当前li标签在兄弟集合中的位置
	 * title    当前幻灯片的左下角标题
	 */
	"use strict";
	var box = $('#slide_box'),uls = $('#slide_box ul.slide_img'),order = $('#slide_order',box),lis = $('li',uls),widths = 0,runtime = 500,latency = 2000,control,num = 0,title=$('#slide_title');
	// 计算li标签宽度总和与插入img序号
	for (var i = 0; i < lis.length; i++) {
		widths += lis.eq(i).width();
		order.append('<a>'+(i+1)+'</a>');
	}
	// 设置ul的宽度等于所有li标签宽度的总和；
	uls.width(widths);
	// 给第一个序号'1'添加class
	order.find('a').removeClass('current').eq(num).addClass('current');
	// 给图片1添加左下角标题
	title.text('图片1标题');
	// 规定时间后执行函数
	control = setTimeout( slide, latency );
	// 幻灯片自动运行函数
	function slide () {
		// 初始化width
		var width = 0;
		num = num < lis.length - 1 ? (num + 1) : 0;
		// 计算第一张图到当前图片的宽度总和
		for (var j = 0; j < num; j++) {
			width += lis.eq(j).width();
		}
		// 设置当前的序号添加class
		order.find('a').removeClass('current').eq(num).addClass('current');
		// 给图片1添加左下角标题
		switch(num){
			case 0: title.text("图片1的标题");break;
			case 1: title.text("图片2的标题");break;
			case 2: title.text("图片3的标题");break;
			case 3: title.text("图片4的标题");break;
			case 4: title.text("图片5的标题");break;
			case 5: title.text("图片6的标题");break;
		}
		// 改变ul的left值
		uls.animate({left: 0 - width}, runtime, function () {
			control = setTimeout( slide, latency );
		});
	}
	// 点击图片序号函数
	$('#slide_order a').click(function(){
		// 立即停止uls当前正在执行的动作
		uls.stop();
		//清除定时器
		clearTimeout(control);
		num = $(this).index() - 1;
		// 给图片1添加左下角标题
		switch(num){
			case -1: title.text("图片1的标题");break;
			case 0: title.text("图片2的标题");break;
			case 1: title.text("图片3的标题");break;
			case 2: title.text("图片4的标题");break;
			case 3: title.text("图片5的标题");break;
			case 4: title.text("图片6的标题");break;
		}
		slide();
	});	
}