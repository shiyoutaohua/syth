<?php
!defined('INIT_PHPV') && die('非法操作！请与管理员联系!');
function getPdo(){
	$host = "127.0.0.1";
	$db_name = "syth";
	$user = "shiyoutaohua";
	$password = "12345687";
	$dsn = "mysql:host=$host;dbname=$db_name";   // 配置数据源
	
	try{
		$pdo = new PDO($dsn, $user, $password);
	}catch(Exception $e){
		$e->getMessage();
	}
	$pdo ->query("set names utf8");		
	return $pdo;
}
?>