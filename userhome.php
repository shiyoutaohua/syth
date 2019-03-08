<?php header("Content-Type: text/html; charset=UTF-8"); define('INIT_PHPV', true); //定义 INIT_PHPV 为 true ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.299, maximum-scale=1.5">
<title>个人中心_小U闲置ヾ(✿ﾟ▽ﾟ)～和美好相遇</title>
<link href="images/ico.ico" rel="icon">
<link href="css/header.css" rel="stylesheet" type="text/css">
<link href="css/userhome/userhome.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
	
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">  
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/header.js"></script>
<script type="text/javascript" src="js/userhome/userhome.js"></script>
<script type="text/javascript" src="js/footer.js"></script>
<script type="text/javascript" src="js/check-login-statement.js"></script>
	
<style type="text/css">
	body{background-color: #f2f2f3;}
	body a{font-size: 12px; color: rgba(34,34,34,1);}
	a:hover{color:rgb(0,161,214);}
	h3{width: 163px; height: 19px; margin: 20px 0 5px 17px; font-size: 14px; box-sizing: border-box; color: #666; font-weight: bold;}
	footer{top: 1100px; font-size: 12px;}
	.wrapgate-about table td:first-child{width: 400px;}
	.wrapgate-about table td:nth-child(2){width: 440px;}
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
					<a href="module_books/book-upload.php"><div class="upload">我有闲置</div></a>
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
		<div class="admin-menu">
			<h3>个人中心</h3>
			<ul>
				<li>
					<a class="selected">
						<i class="icon" style="background-image: url(images/userhome/icon-home.png)"></i>
						<span class="title">我的信息</span>
					</a>
				</li>
				<li>
					<a>
						<i class="icon" style="background-image: url(images/userhome/icon-message.png)"></i>
						<span class="title">我的消息</span>
					</a>
				</li>
				<li>
					<a>
						<i class="icon" style="background-image: url(images/userhome/icon-home.png)"></i>
						<span class="title">我的闲置</span>
					</a>
				</li>
				<li>
					<a>
						<i class="icon" style="background-image: url(images/userhome/icon-home.png)"></i>
						<span class="title">个人助理</span>
					</a>
				</li>
			</ul>
			<div class="tinybox">
				<p>你想勾搭我?</p>
				<button class="btn btn-info" style="width: 140px; height: 36px;">勾搭</button>		
			</div>
		</div>
		<!--  菜单项内容 -->
		<div class="content-menu"></div>
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