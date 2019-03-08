// JavaScript Document

window.onload = function (){
	"use strict";
};


//获取url中的参数
function getUrlParam(key) {
	"use strict";
	var reg = new RegExp("(^|&)" + key + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
	var r = window.location.search.substr(1).match(reg); //匹配目标参数
	if (r !== null) 
	{
		return decodeURI(r[2]);
	}
	else
	{
		return "";
	}
}
/*--------------------显示页码--------------------------*/
function showPageCode(){

}

// 上一页按钮点击事件
function previousPage(){
	"use strict";
	var currentPage = getUrlParam("page")==="" ? 1 : getUrlParam("page");
	var newPage = parseInt(currentPage) - 1;
	if(newPage < 1)
	{
		newPage = 1;
	}
	var currentUrl = window.location.href;
	var newUrl = currentUrl.replace(("page=" + currentPage), ("page=" + newPage));
	window.location.href = newUrl;
} 

// 下一页按钮点击事件
function nextPage(){
	"use strict";
	var currentPage = getUrlParam("page")==="" ? 1 : getUrlParam("page");
	// 获取查询到的书的总数
	var bookCount = document.getElementById("bookcount").innerHTML;
	var newPage = parseInt(currentPage) + 1;
	if(newPage > Math.ceil(parseInt(bookCount)/9))
	{
		newPage = Math.ceil(parseInt(bookCount)/9);
	}
	else
	{
		newPage = parseInt(currentPage) + 1;
	}
	// 获取当前页面URL中 ？及之后的内容
	var currentUrl = window.location.href;
	var currentSearch = window.location.search;
	var newSearch = "?keyword=" + getUrlParam("keyword") + "&page=" + newPage;
	var newUrl = currentUrl.replace(currentSearch, "").concat(newSearch);
	window.location.href = newUrl;
	
} 












