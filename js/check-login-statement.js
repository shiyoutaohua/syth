// JavaScript Document
// 检查是否登录
$(document).ready(function(){
	"use strict";
	isLogined();
});

/*--------------页面初始化 加载用户头像 提示用户登录----------------*/
function isLogined(){
	"use strict";
	// 判断登录状态
	var username = getCookie("username");
	if(username === ""){
		return false;
	}
	else{
		var hostName = window.location.hostname;
		var userHomeUrl = "http://" + hostName + "/syth/userhome/userhome.php";
		var userIco = "//" + hostName + "/syth/images/user-ico/" + username + ".png";
		$("#login-ico").parent().attr({"href" : userHomeUrl, "title" : "个人中心"});
		// 加载远程用户头像，若用户未上传头像则加载默认头像
		$("#login-ico img").attr({"src" : userIco, "alt" : "头像", "onerror" : "javascript:this.src='//" + hostName + "/syth/images/user-ico/default.png'"});
		return true;
	}
}  

/*--------------------获取指定cookie内容---------------------------*/
function getCookie(cookieName) {
	"use strict";
    var strCookie = document.cookie;
    var arrCookie = strCookie.split("; ");
    for(var i = 0; i < arrCookie.length; i++){
        var arr = arrCookie[i].split("=");
        if(cookieName === arr[0]){
            return arr[1];
        }
    }
    return "";
}