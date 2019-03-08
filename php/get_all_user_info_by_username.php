<?php 
!defined('INIT_PHPV') && die('非法操作！请与管理员联系!');
require_once("pdo_connect.php");
/**
* 此类构造方法接收一个参数：用户名
* 提供方法获取用户表的每个字段
*/
class SingleUserInfo{
	private $pdo;               // PDO对象
	public $username, $resultArray_core, $resultArray_contact_way, $resultArray_detail, $sql_core, $sql_contact_way, $sql_detail;  // 查询结果key-value数组&查询字符串
	
	// 构造方法
	public function __construct($username){
		$this->username = $username;
		$this->pdo = getPdo();
		$this->sql_core = "SELECT * FROM user_core WHERE username='".$username."'";
		$this->sql_contact_way = "SELECT * FROM user_contact_way WHERE username='".$username."'";
		$this->sql_detail = "SELECT * FROM user_detail WHERE username='".$username."'";
		try{
			// 查询用户核心表
			$result_core = $this->pdo->query($this->sql_core);
			$this->resultArray_core = $result_core->fetch(PDO::FETCH_ASSOC);
			// 查询联系方式表
			$result_contact = $this->pdo->query($this->sql_contact_way);
			$this->resultArray_contact_way = $result_contact->fetch(PDO::FETCH_ASSOC);
			// 查询用户详细信息表
			$result_detail = $this->pdo->query($this->sql_detail);
			$this->resultArray_detail = $result_detail->fetch(PDO::FETCH_ASSOC);
		}catch(Exception $e){
			$e->getMessage();
		}
	}
	// 获取用户名
	function getUsername(){
		return $this->username;
	}
	// 获取密码
	function getPassword(){
		return $this->resultArray_core["password"];
	}
	// 获取性别
	function getSex(){
		switch($this->resultArray_detail["sex"]){
			case 1: return "小姐姐";		
			case 2: return "小哥哥";
			default: return "保密的噢";
		}
	}
	// 获取昵称
	function getNickName(){
		return $this->resultArray_detail["nickname"];
	}
	// 获取QQ
	function getQQ(){
		return $this->resultArray_contact_way["qq"];
	}
	// 获取微信
	function getWeChat(){
		return $this->resultArray_contact_way["wechat"];
	}
	// 获取注册日期
	function getEnrollDate(){
		return $this->resultArray_contact_way["enrolldate"];
	}	
}

?>