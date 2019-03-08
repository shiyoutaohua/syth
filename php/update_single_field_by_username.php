<?php
!defined('INIT_PHPV') && die('非法操作！请与管理员联系!');
require_once("pdo_connect.php");
// 根据用户名更新用户信息
class UpdateSingleFieldByUsername{
	private $username;
	private $pdo;
	// @param $username用户名
	// 构造方法
	public function __construct($username){
		$this->username = $username;
		$this->pdo = getPdo();
	}
	// 更新密码
	function updatePassword($newPassword){
		$sql = "UPDATE user_core SET password=$newPassword WHERE username='".$this->username."'";
		$this->pdo->exec($sql);
	}	
	// 更新性别：1-女 2-男 其他-保密
	function updateSex($newSex){
		$sql = "UPDATE user_detail SET sex=$newSex WHERE username='".$this->username."'";
		$this->pdo->exec($sql);
	}
	// 更新昵称
	function updateNickname($newNickname){
		$sql = "UPDATE user_detail SET nickname=$newNickname WHERE username='".$this->username."'";
		$this->pdo->exec($sql);
	}
	// 更新QQ
	function updateQq($newQq){
		$sql = "UPDATE user_contact_way SET qq=$newQq WHERE username='".$this->username."'";
		$this->pdo->exec($sql);
	}
	// 更新微信
	function updateWechat($newWechat){
		$sql = "UPDATE user_contact_way SET wechat='".$newWechat."' WHERE username='".$this->username."'";
		$this->pdo->exec($sql);	
	}
	// 更新邮箱
	function updateMail($newMail){
		$sql = "UPDATE user_contact_way SET mail='".$newMail."' WHERE username='".$this->username."'";
		$this->pdo->exec($sql);		
	}
	// 更新最后登录时间
	function updateLatestLoginDate(){
		$date = date("Y-m-d");
		$sql = "UPDATE user_detail SET latestlogindate='".$date."' WHERE username='".$this->username."'";
		$this->pdo->exec($sql);
	}
	
}
?>