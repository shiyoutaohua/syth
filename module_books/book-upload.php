<?php header("Content-Type: text/html; charset=UTF-8"); define('INIT_PHPV', true); //定义 INIT_PHPV 为 true ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.299, maximum-scale=1.5">
<title>书籍录入_小U闲置ヾ(✿ﾟ▽ﾟ)～和美好相遇</title>
<link href="../images/ico.ico" rel="icon">
<link href="../css/header.css" rel="stylesheet" type="text/css">
<link href="../css/book-uopoad.css" rel="stylesheet" type="text/css">
<link href="../css/footer.css" rel="stylesheet" type="text/css">
	
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.js"></script>
<script type="text/javascript" src="../js/header.js"></script>
<script type="text/javascript" src="../js/book-upload.js"></script>
<script type="text/javascript" src="../js/footer.js"></script>
<script type="text/javascript" src="../js/check-login-statement.js"></script>
	
<style type="text/css">
	body a{font-size: 12px; color: rgba(34,34,34,1);}
	a:hover{color:rgb(0,161,214);}
	footer{top: 1000px; font-size: 12px; background-color: #999;}
	.wrapgate-about table td:first-child{width: 400px;}
	.wrapgate-about table td:nth-child(2){width: 440px;}
</style>
</head>
	
<?php
	require_once("../php/pdo_connect.php");
	require_once("../php/get_userinfo_from_cookies.php");
?>
<body>
	<header>
    	<div class="minitop">
        	<div class="box1">
            	<ul>
                	<a href="../index.php"><li class="li_1" title="首页-U你真好">首页</li></a>
                    <a href="../404.html" target="new" title="二手书"><li>书呀</li></a>
                    <a href="../404.html" target="new" title="护肤品&衣服"><li>美美哒</li></a>
                    <a href="../404.html" target="new" title="电子设备"><li>电子设备</li></a>
                    <a href="../404.html" target="new" title="运动健身器材"><li>爱运动</li></a>
                    <a href="../404.html" target="new" title="生活用品"><li>生活用品</li></a>
                </ul>
                <div class="login-feedback">
					<a><div class="suggest" title="我们乐意倾听你!">建言</div></a>
					<a><div class="upload">我有闲置</div></a>
					<a href="../login.php" target="_top" title="登录">
						<div id="login-ico" class="login">
							<img width="35" height="35" src="../images/user-ico/unlogin.png">
						</div>
					</a>
                </div>
            </div>
        </div>
        <div class="topbox">
        	<div class="log_search">
        		<a href="" class="log">主页log位置</a>
            	<div class="search_newest">
            		<a href="404.html" target="new" class="newest" title="大家都在找什么?">
                		<span>热搜榜</span>
                	</a>
                	<div class="search">
                    	<form id="form1" method="get" action="../search.php">
                            <input id="word-search" name="keyword" type="search" placeholder="南风知我意,吹梦下西洲!">
                            <button name="search" type="submit" title="查找"></button>
                        </form>
                	</div>
            	</div>
            </div>
        </div>
    </header>
	<div class="mainbox">
		<div class="titile-bar">
			<div class="left-and-right"></div>
			<h1>书籍录入</h1>
			<div class="left-and-right"></div>
		</div>
		<div class="content">
			<form id="submit" action="book-upload.php" name="enroll" method="post">
				<input id="title" type="text" name="title" maxlength="40" placeholder="书名"/>
				<p>格式不合法</p>
				<input id="author" type="text" name="author" maxlength="20" placeholder="作者"/>
				<p>格式不合法</p>
				<input id="press" type="text" name="press" maxlength="30" placeholder="出版社"/>
				<p>格式不合法</p>
				<input id="edition" type="text" name="edition" maxlength="2" min="1" max="30" placeholder="版次(默认第一版)"/> 
				<p>格式不合法</p>
				<input id="publishdate" type="text" name="publishdate" maxlength="10" placeholder="出版日期"/>
				<p>格式不合法</p>
				<input id="printdate" type="text" name="printdate" maxlength="10" placeholder="印刷日期(不填则表示同出版日期)"/>
				<p>格式不合法</p>
				<input id="label" type="text" name="label" maxlength="50" placeholder="标签(合适的标签有助于你的书被其他人搜索到)"/>
				<p>格式不合法</p>
				<input id="price" type="text" name="price" maxlength="3" min="0" max="200" placeholder="你的期望价格"/>
				<p>格式不合法</p>
				<input id="comment" type="text" name="comment" maxlength="50" placeholder="你对此书的评价(懒人可以不填的噢)"/>
				<p>格式不合法</p>
				<button name="insertbook" type="submit">确认提交</button>
			</form>
		</div>
	</div>
    <footer>
    	<div class="wrapgate-about">
        	<table>
            	<tr>
                	<td>
						<span>小U闲置</span>
						<p><a>关于我们</a></p>
						<p><a>商业合作</a></p>
						<p><a>个人主页</a></p>
						<p><a>个人简历</a></p>
					</td>
                    <td>
						<span>传送门</span>
						<p><a href="https://www.imooc.com" title="慕课网" target="new">慕课网</a></p>
						<p><a href="http://www.runoob.com" title="菜鸟教程" target="new">菜鸟教程</a></p>
						<p><a href="http://www.w3school.com.cn" title="W3school" target="new">W3school</a></p>
						<p><a href="http://www.xapi.edu.cn" title="西安石油大学主页" target="new">石大主页</a></p>
						<p><a href="http://jwch.xsyu.edu.cn/index.html" title="西安石油大学教务处" target="new">石大教务处</a></p>
						<p><a href="http://lib.xsyu.edu.cn" title="西安石油大学图书馆" target="new">石大图书馆</a></p>
					</td>
                    <td>
                    	<div class="app-download">
                        	<i></i>
                            安卓APP
                        </div>
                        <div id="app-download">
                        	<img src="../images/app-download.png" width="136" height="142" alt="APP下载">
                            <p>仅支持Android 6+</p>
                        </div>
                        
                        <div class="qq">
                        	<i></i>
                            小可企鹅
                        </div>
                        <div id="qq">
                        	<img src="../images/qq.png" width="136" height="142" alt="QQ二维码">
                            <p>企鹅</p>
                        </div>
                        
                        <div class="wechat">
                        	<i></i>
                            小可微信
                        </div>
                        <div id="wechat">
                        	<img src="../images/wechat.png" width="136" height="142" alt="微信二维码">
                            <p>微信</p>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="copyright">
        	<p>Copyright © 2017-2020 小U闲置(和美好相遇) 版权所有 - 自从一见桃花后，直至如今更不疑！陕ICP备13145201号</p>
			<p>服务微信: qingyuehanxi | 服务邮箱： qingyuehanxi@icloud.com</p>
        </div>
	</footer>
</body> 
</html>

<?php
	if(isset($_REQUEST["insertbook"]))
	{	
		insertBook(getInputArray());	
	}

	// 获取用户输入的信息数组
	function getInputArray(){
		// 获取输入的书名
		if(isset($_REQUEST["title"]) && $_REQUEST["title"] != null){
			$title = $_REQUEST["title"];
		}
		else{
			$title = "";
		}
		// 获取输入的作者
		if(isset($_REQUEST["author"]) && $_REQUEST["author"] != null){
			$author = $_REQUEST["author"];
		}
		else{
			$author = "";
		}
		// 获取输入的出版社
		if(isset($_REQUEST["press"]) && $_REQUEST["press"] != null){
			$press = $_REQUEST["press"];
		}
		else{
			$press = "";
		}
		// 获取输入的版次
		if(isset($_REQUEST["edition"]) && $_REQUEST["edition"] != null){
			$edition = $_REQUEST["edition"];
		}
		else{
			$edition = "1";
		}
		// 获取输入的出版日期
		if(isset($_REQUEST["publishdate"]) && $_REQUEST["publishdate"] != null){
			$publishdate = $_REQUEST["publishdate"];
		}
		else{
			$publishdate = "2000-1-26";
		}
		// 获取输入的印刷日期
		if(isset($_REQUEST["printdate"]) && $_REQUEST["printdate"] != null){
			$printdate = $_REQUEST["printdate"];
		}
		else{
			$printdate = $publishdate;
		}
		// 获取输入的标签
		if(isset($_REQUEST["label"]) && $_REQUEST["label"] != null){
			$label = $_REQUEST["label"];
		}
		else{
			$label = "";
		}
		// 获取输入的价格
		if(isset($_REQUEST["price"]) && $_REQUEST["price"] != null){
			$price = $_REQUEST["price"];
		}
		else{
			$price = "0";
		}
		// 获取输入的评价
		if(isset($_REQUEST["comment"]) && $_REQUEST["comment"] != null){
			$comment = $_REQUEST["comment"];
		}
		else{
			$comment = "";
		}
		$username = getUsernameFromCookies();
		return array($title, $author, $press, $edition, $publishdate, $printdate, $label, $price, $comment, $username);
	}

	// 提交处理函数
	// 接收一个用户输入信息的数字索引数组
	function insertBook($infoArray){
		if(checkInput($infoArray))
		{
			$pdo = getPdo();
			$sql = "INSERT INTO `books` (`title`, `author`, `press`, `edition`, `publishdate`, `printdate`, `label`, `price`, `comment`, `username`, `enteringdate`) VALUES ('".$infoArray[0]."', '".$infoArray[1]."', '".$infoArray[2]."', '".$infoArray[3]."', '".$infoArray[4]."', '".$infoArray[5]."', '".$infoArray[6]."', '".$infoArray[7]."', '".$infoArray[8]."', '".$infoArray[9]."', CURRENT_DATE());";
			$row = $pdo->exec($sql);
			if($row !== 1)
			{
				echo '<script>alert("';
				echo "录入失败";
				echo '");</script>';
			}
			else
			{
				echo '<script>alert("';
				echo "录入成功";
				echo '");</script>';			
			}
		}
		else
		{
			echo '<script>alert("上传失败，请核对输入的信息！");</script>';
		}
	}

	// 输入合法性判断
	// 接收一个用户输入信息的数字索引数组
	function checkInput($infoArray){
		return true;
	}
?>