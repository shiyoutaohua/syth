<?php
!defined('INIT_PHPV') && die('非法操作！请与管理员联系!');
require_once("pdo_connect.php");
/**
* 此类构造方法接收一个参数：书的编号
* 提供方法获取书的各个属性
*/
class SingleBookInfo{
	private $pdo;               // PDO对象
	private $id_book,$resultArray, $sql;  // 查询结果key-value数组&查询字符串
	
	// 构造方法
	public function __construct($id_book){
		$this->id_book = $id_book;
		@$this->pdo = getPdo();
		$this->sql = "SELECT * FROM books WHERE id=$id_book";
		try{
			$result = $this->pdo->query($this->sql);
			$this->resultArray = $result->fetch(PDO::FETCH_ASSOC);
		}
		catch(Exception $e){
			$e->getMessage();
		}
	}
	// 获取书的编号
	function getId(){
		return $this->id_book;
	}
	// 获取书名
	function getTitle(){
		return $this->resultArray["title"];
	}
	// 获取作者
	function getAuthor(){
		return $this->resultArray["author"];
	}
	// 获取出版社
	function getPress(){
		return $this->resultArray["press"];
	}
	// 获取版次
	function getEdition(){
		return $this->resultArray["edition"];
	}
	// 获取标签
	function getLabel(){
		return $this->resultArray["label"];
	}
	// 获取出版日期
	function getPublishDate(){
		return $this->resultArray["publishdate"];
	}
	// 获取印刷日期
	function getPrintDate(){
		return $this->resultArray["printdate"];
	}
	// 获取书籍录入系统的日期
	function getEnteringDate(){
		return $this->resultArray["enteringdate"];
	}
	// 获取书的主人的用户名
	function getUsername(){
		return $this->resultArray["username"];
	}
	// 获取价格
	function getPrice(){
		return $this->resultArray["price"];
	}
	// 获取用户对书的简介
	function getComment(){
		if(is_null($this->resultArray["comment"]) || ("" === ($this->resultArray["comment"])))
		{
			return "主人对这本书无言以对~";
		}
		else
		{
			return $this->resultArray["comment"];	
		}
	}
	
}

?>