<?php ob_start(); header("Content-Type: text/html; charset=UTF-8"); define('INIT_PHPV', true); //定义 INIT_PHPV 为 true ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.299, maximum-scale=1.5">
<title>登录_小U闲置ヾ(✿ﾟ▽ﾟ)～和美好相遇</title>
<link href="images/ico.ico" rel="icon">
<link href="css/header.css" rel="stylesheet" type="text/css">
<link href="css/login.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.js"></script>
<script type="text/javascript" src="js/header.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/footer.js"></script>

<style type="text/css">
	footer{top: 620px;}
</style>
</head>

<body>
	<header>
    	<div class="minitop">
        	<div class="box1">
            	<ul>
                	<a href="index.php"><li class="li_1" title="首页-U你真好">首页</li></a>
                    <a href="404.html" target="new" title="二手书"><li>书呀</li></a>
                    <a href="404.html" target="new" title="护肤品&衣服"><li>美美哒</li></a>
                    <a href="404.html" target="new" title="电子设备"><li>电子设备</li></a>
                    <a href="404.html" target="new" title="运动健身器材"><li>爱运动</li></a>
                    <a href="404.html" target="new" title="生活用品"><li>生活用品</li></a>
                </ul>
                <div class="login-feedback">
					<a><div class="suggest" title="我们乐意倾听你!">建言</div></a>
					<a><div class="upload">我有闲置</div></a>
					<a href="login.php" target="_top" title="登录">
						<div id="login-ico" class="login">
							<img width="35" height="35" src="images/user-ico/unlogin.png">
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
                    	<form id="form1" method="get" action="search.php">
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
			<h1>登录</h1>
			<div class="left-and-right"></div>
		</div>
		<div class="content">
			<div class="left">
			</div>
			<div class="right">
				<form action="login.php" method="post">
					<ul>
						<li>
							<input type="text" name="username" placeholder="你的用户名呀">
							<i>ico</i>
							<p>请输入你注册时填写的用户名呀!</p>
						</li>
						<li>
							<input type="password" name="password" placeholder="你的密码呀">
							<p>额, 你没输入密码的吗?</p>
							<i>ico</i>
						</li>
						<li>
							验证码区块
						</li>
						<li>
							<input type="checkbox" checked name="remember_password">记住30天
							<span>不是自己的电脑不要勾选噢</span>
							<a href="./404.html" target="_top">无法验证？</a>
							<a href="./404.html" target="_top">忘记密码？</a>
						</li>
						<li>
							<button type="submit" name="submit" value="登录">登录</button>
							<button type="button" onClick="window.location.href='enroll.php'">注册</button>
						</li>
						<li>
							<span class="qq-login"><a href="/syth/404.html">QQ账号登录</a></span>
							<span class="wechat-login"><a href="/syth/404.html">微信账号登录</a></span>
						</li>
					</ul>
				</form>
			</div>
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
                        	<img src="images/app-download.png" width="136" height="142" alt="APP下载">
                            <p>仅支持Android 6+</p>
                        </div>
                        
                        <div class="qq">
                        	<i></i>
                            小可企鹅
                        </div>
                        <div id="qq">
                        	<img src="images/qq.png" width="136" height="142" alt="QQ二维码">
                            <p>企鹅</p>
                        </div>
                        
                        <div class="wechat">
                        	<i></i>
                            小可微信
                        </div>
                        <div id="wechat">
                        	<img src="images/wechat.png" width="136" height="142" alt="微信二维码">
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
	require_once("php/pdo_connect.php");
	require_once("php/get_all_user_info_by_username.php");
	require_once("php/update_single_field_by_username.php");

	if(isset($_POST["submit"]))
	{
		login();
	}

	// 登录处理函数
	function login(){
		$count = 0;
		$username = $_POST["username"];
		$password = $_POST["password"];
		$sql = "SELECT count(*) FROM user_core WHERE username='".$username."' AND "."password='".$password."'";
		$pdo = getPdo();
		$rows = $pdo->query($sql)->fetch();
		$count = $rows[0];  // 用户名+密码联合查询到的行数1-登录成功0-登录失败
		if($count == 1){
			$singleUserInfo = new SingleUserInfo($username);
			setcookie("username",$username,time()+60*60*24*30,"/");
			setcookie("nickname",$singleUserInfo->getNickname(),time()+60*60*24*30,"/");
			setcookie("password",(md5($password)),time()+60*60*24*30,"/");
			$updateSingleFieldByUsername = new UpdateSingleFieldByUsername($username);
			$updateSingleFieldByUsername->updateLatestLoginDate();
			echo "<script>window.location.href='index.php'</script>";  // 重定向到主页

		}
		else
		{
			echo '<script>alert("登录失败，请重试！");window.location.href="/syth/login.php"</script>'; // 重定向到登录界面
		}
	}

	ob_end_flush();
?>