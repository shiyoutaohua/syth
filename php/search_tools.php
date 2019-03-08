<?php
!defined('INIT_PHPV') && die('非法操作！请与管理员联系!');
require_once("pdo_connect.php");
/**
* 此类的构造方法接收一个参数：用户输入的搜索关键词
* 提供两个方法返回查询到的书的数目及书的编号
*/

class SearchBooksByKeyword{
	private $pdo,$keyword,$result;
	private $keyArray;
	// 构造方法
	public function __construct($keyWord){
		$this->pdo = getPdo();
		$this->keyword = $keyWord;
		$this->keyArray = explode(" ", $keyWord);
	}
	
	// 书的数目---关键词取交集
	function getSmallCount(){
		$sql = "";
		for($i = 0; $i < count($this->keyArray); $i ++){
			$key = $this->keyArray[$i];
			if($i === 0){
				$sql = "SELECT id FROM `books` WHERE (`label` LIKE '%".$key."%' OR `title` LIKE '%".$key."%')";
			}else{
				$sql = $sql." AND (`label` LIKE '%".$key."%' OR `title` LIKE '%".$key."%')";
			}
		}
		try{
			$this->result = $this->pdo->query($sql);
		}
		catch(Exception $e){
			$e->getMessage();
		}
		return count($this->result->fetchAll());
	}
	
	// 书的数目---关键词取并集
	function getLargeCount(){
		$sql = "";
		for($i = 0; $i < count($this->keyArray); $i ++){
			$key = $this->keyArray[$i];
			if($i === 0){
				$sql = "SELECT id FROM `books` WHERE (`label` LIKE '%".$key."%' OR `title` LIKE '%".$key."%')";
			}else{
				$sql = $sql." OR (`label` LIKE '%".$key."%' OR `title` LIKE '%".$key."%')";
			}
		}
		try{
			$this->result = $this->pdo->query($sql);
		}
		catch(Exception $e){
			$e->getMessage();
		}
		echo "<script>alert('",$sql,"');</script>";
		return count($this->result->fetchAll());
	}
	

	
	// 返回书的ID结果集 九行数据为一页 接收一个页码参数 ----关键词取并集
	function getLargeIdSet($pageCode){
		$offset = 9*($pageCode-1);
		$sql = "";
		for($i = 0; $i < count($this->keyArray); $i ++){
			$key = $this->keyArray[$i];
			if($i === 0){
				$sql = "SELECT id FROM `books` WHERE (`label` LIKE '%".$key."%' OR `title` LIKE '%".$key."%') LIMIT ".$offset.",9";
			}else{
				$sql = str_ireplace(substr($sql, -10), "", $sql);
				$sql = $sql." OR (`label` LIKE '%".$key."%' OR `title` LIKE '%".$key."%') LIMIT ".$offset.",9";
			}
		}
		$res = $this->pdo->query($sql);
		return $res;
	}
	
	//  返回书的ID结果集 九行数据为一页 接收一个页码参数----关键词取交集
	function getSmallIdSet($pageCode){
		$offset = 9*($pageCode-1);
		$sql = "";
		for($i = 0; $i < count($this->keyArray); $i ++){
			$key = $this->keyArray[$i];
			if($i === 0){
				$sql = "SELECT id FROM `books` WHERE (`label` LIKE '%".$key."%' OR `title` LIKE '%".$key."%') LIMIT ".$offset.",9";
			}else{
				$sql = str_ireplace(substr($sql, -10), "", $sql);
				$sql = $sql." AND (`label` LIKE '%".$key."%' OR `title` LIKE '%".$key."%') LIMIT ".$offset.",9";
			}
		}
		$res = $this->pdo->query($sql);
		return $res;
	}
	
	
	// 返回最新录入的n本书  关键词取并集
	function getLargeIdSet_latestBooks($n){
		$sql = "";
		for($i = 0; $i < count($this->keyArray); $i ++){
			$key = $this->keyArray[$i];
			if($i === 0){
				$sql = "SELECT id FROM `books` WHERE (`label` LIKE '%".$key."%' OR `title` LIKE '%".$key."%') ORDER BY `enteringdate` DESC LIMIT 0,".$n;
			}else{
				$sql = str_ireplace(substr($sql, -39), "", $sql);
				$sql = $sql." OR (`label` LIKE '%".$key."%' OR `title` LIKE '%".$key."%') ORDER BY `enteringdate` DESC LIMIT 0,".$n;
			}
		}
		$res = $this->pdo->query($sql);
		return $res;	
	}
	
	// 返回最新录入的n本书  关键词取交集
	function getSmallIdSet_latestBooks($n){
		$sql = "";
		for($i = 0; $i < count($this->keyArray); $i ++){
			$key = $this->keyArray[$i];
			if($i === 0){
				$sql = "SELECT id FROM `books` WHERE (`label` LIKE '%".$key."%' OR `title` LIKE '%".$key."%') ORDER BY `enteringdate` DESC LIMIT 0,".$n;
			}else{
				$sql = str_ireplace(substr($sql, -39), "", $sql);
				$sql = $sql." AND (`label` LIKE '%".$key."%' OR `title` LIKE '%".$key."%') ORDER BY `enteringdate` DESC LIMIT 0,".$n;
			}
		}
		$res = $this->pdo->query($sql);
		return $res;	
	}
}

?>