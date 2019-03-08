<?php header("Content-Type: text/html; charset=UTF-8"); define('INIT_PHPV', true); //定义 INIT_PHPV 为 true ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.299, maximum-scale=1.5">
<title>注册_小U闲置ヾ(✿ﾟ▽ﾟ)～和美好相遇</title>
<link href="images/ico.ico" rel="icon">
<link href="css/header.css" rel="stylesheet" type="text/css">
<link href="css/enroll.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
	
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.js"></script>
<script type="text/javascript" src="js/header.js"></script>
<script type="text/javascript" src="js/enroll.js"></script>
<script type="text/javascript" src="js/footer.js"></script>
<script type="text/javascript" src="js/check-login-statement.js"></script>
	
<style type="text/css">
	footer{top: 775px;}
</style>
</head>
	
<?php
	require_once("php/pdo_connect.php");
?>
	
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
                    	<form id="search" action="search.php" method="get">
                            <input maxlength="30" id="word-search" name="keyword" type="text" placeholder="南风知我意,吹梦下西洲!">
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
			<h1>注册</h1>
			<div class="left-and-right"></div>
		</div>
		<div class="content">
			<form id="enroll" action="enroll.php" name="enroll" method="post">
				<input type="text" name="username" maxlength="20" placeholder="用户名(数字字母下划线组成,且不能以数字开头)"/>
				<p>格式不合法</p>
				<input type="password" name="password1" maxlength="20" placeholder="密码"/>
				<p>格式不合法</p>
				<input type="password" name="password2" maxlength="20" placeholder="确认密码"/>
				<p>格式不合法</p>
				<input type="text" name="nickname" maxlength="20" placeholder="昵称（例如：小白）"/>
				<p>格式不合法</p>
				<input type="text" name="qq" maxlength="11" placeholder="QQ"/>
				<p>格式不合法</p>
				<input type="text" name="wechat" maxlength="20" placeholder="微信"/>
				<p>格式不合法</p>
				<input type="mail" name="mail" maxlength="50" placeholder="邮箱(仅用于找回密码)"/>
				<p>格式不合法</p>
				<div class="spanbox">
					<input id="agree" style="width: 13px; height: 13px; margin-left: 0;" name="agree" type="checkbox" value="1" checked="true"/>
						&nbsp;我已同意
					<a>《小U闲置用户服务协议》</a>
				</div>
				<button type="submit" name="enroll" value="注册">注册</button>
				<div class="spanbox go-login">
					<a href="login.php">已有账号,立即登录&gt;</a>
				</div>
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
	if(isset($_REQUEST["enroll"]))
	{	
		enroll(getInputArray());
	}

	// 获取用户输入的信息数组
	function getInputArray(){
		// 获取输入的用户名
		if(isset($_REQUEST["username"]) && $_REQUEST["username"] != null){
			$username = $_REQUEST["username"];
		}
		else{
			$username = "";
		}
		// 获取输入的用密码
		if(isset($_REQUEST["password1"]) && $_REQUEST["password1"] != null){
			$password = $_REQUEST["password1"];
		}
		else{
			$password = "";
		}
		// 获取输入的昵称
		if(isset($_REQUEST["nickname"]) && $_REQUEST["nickname"] != null){
			$nickname = $_REQUEST["nickname"];
		}
		else{
			$nickname = "";
		}
		// 获取输入的QQ
		if(isset($_REQUEST["qq"]) && $_REQUEST["qq"] != null){
			$qq = $_REQUEST["qq"];
		}
		else{
			$qq = "";
		}
		// 获取输入的用微信
		if(isset($_REQUEST["wechat"]) && $_REQUEST["wechat"] != null){
			$wechat = $_REQUEST["wechat"];
		}
		else{
			$wechat = "";
		}
		// 获取输入的用邮箱
		if(isset($_REQUEST["mail"]) && $_REQUEST["mail"] != null){
			$mail = $_REQUEST["mail"];
		}
		else{
			$mail = "";
		}
		return array($username, $password, $nickname, $qq, $wechat, $mail);
	}

	// 注册处理函数
	// 接收一个用户输入信息的数字索引数组
	function enroll($infoArray){
		if(checkInput($infoArray))
		{
			$pdo = getPdo();
			$sql_core = "INSERT INTO `user_core` (`username`, `password`) VALUES ('".$infoArray[0]."', '".$infoArray[1]."')";
			$sql_contact_way = "INSERT INTO `user_contact_way` (`username`, `qq`, `wechat`, `mail`) VALUES ('".$infoArray[0]."', '".$infoArray[3]."', '".$infoArray[4]."', '".$infoArray[5]."')";
			$sql_detail = "INSERT INTO `user_detail` (`username`, `nickname`, `enrolldate`) VALUES ('".$infoArray[0]."', '".$infoArray[2]."', CURRENT_DATE())";
			
			
			$sql = "SELECT count(*) FROM user_core WHERE username = '".$infoArray[0]."'";
			$rows = $pdo->query($sql)->fetch();
			$count = $rows[0];
			if($count == 1)
			{
				echo '<script>alert("该用户名已存在！");</script>';
			}
			else
			{
				$row1 = $pdo->exec($sql_core);
				$row2 = $pdo->exec($sql_contact_way);
				$row3 = $pdo->exec($sql_detail);	
				if(($row1 !== 1) || ($row2 !== 1) || ($row3 !== 1))  // 输入合法但注册失败 判断用户名是否已经存在
				{
					echo '<script>alert("预期之外的错误！");</script>';
				}
				else
				{
					echo '<script>alert("注册成功！---请登录 ！");</script>';
					echo "<script>window.location.href='login.php';</script>";
				}
			}
		}
		else
		{
			echo '<script>alert("注册失败，请核对注册信息！");</script>';
		}
	}

	// 输入合法性判断
	// 接收一个用户输入信息的数字索引数组
	function checkInput($infoArray){
		// 字母开头 5-20位 字母数字下划线和减号组成
		$regUsernameAndWechat = "/^[a-zA-Z]{1}[-\w]{5,19}$/";
		// 字母或数字开头 5-20位 字母数字下划线和减号组成
		$regPassword = "/^[a-zA-Z0-9]{1}[-\w]{5,19}$/";
		// 字母数字汉字
		$regNickname = "/^[\w\x{4e00}-\x{9fa5}]{1,20}$/u";
		$regQq = " /^[1-9]{1}[0-9]{4,10}$/";
		// 邮箱长度最大50
		$regMail = "/^[\w-]+@[\w-]+(\.[\w-]+)+$/";

		if(preg_match($regUsernameAndWechat, $infoArray[0]))
		{
			//echo "用户名-正确<br>";
			if(preg_match($regPassword, $infoArray[1]))
			{
				//echo "密码-正确<br>";
				if(preg_match($regNickname, $infoArray[2]))
				{
					//echo "昵称-正确<br>";
					if(preg_match($regQq, $infoArray[3]))
					{
						//echo "QQ-正确<br>";
						if(preg_match($regUsernameAndWechat, $infoArray[4]))
						{
							//echo "微信-正确<br>";
							if(preg_match($regMail, $infoArray[5]))
							{
								//echo "邮箱-正确<br>";
								return true;
							}
							else
							{
								//echo "邮箱-错误<br>";
								return false;
							}
						}
						else
						{
							//echo "微信-错误<br>";
							return false;
						}
					}
					else
					{
						//echo "QQ-错误<br>";
						return false;
					}
				}
				else
				{
					//echo "昵称-错误<br>";
					return false;
				}
			}
			else
			{
				//echo "密码-错误<br>";
				return false;
			}
			
		}
		else
		{
			//echo "用户名-错误<br>";
			return false;
		}
	}
?>