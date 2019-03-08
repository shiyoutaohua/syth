<?php
	!defined('INIT_PHPV') && die('非法操作！请与管理员联系!');
	function isFromUserhome(){
		$host = $_SERVER['SERVER_NAME'];
		// 定义来源url
		$fromUrl = "http://".$host."/syth/userhome/userhome.php";
		if((!isset($_SERVER['HTTP_REFERER'])) || ($_SERVER['HTTP_REFERER'] !== $fromUrl))
		{
			header("Location: ".$fromUrl);
			return false;
		}
		else
		{
			return true;
		}
	}
?>