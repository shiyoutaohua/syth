<?php
// 此脚本用于服务器端用户登录状态判断


!defined('INIT_PHPV') && die('非法操作！请与管理员联系!');
require_once("pdo_connect.php");

function isLogined(){
	return true;
}

?>