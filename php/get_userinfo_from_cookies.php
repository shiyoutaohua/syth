<?php
	!defined('INIT_PHPV') && die('非法操作！请与管理员联系!');
	function getUsernameFromCookies(){
		return $_COOKIE["username"];
	}

	function getNicknameFromCookies(){
		return $_COOKIE["nickname"];
	}

	function getPasswordFromCookies(){
		return $_COOKIE["password"];
	}
?>