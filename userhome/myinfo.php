<?php header("Content-Type: text/html; charset=UTF-8"); define('INIT_PHPV', true); //定义 INIT_PHPV 为 true ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>我的资料</title>
	
<link href="../css/userhome/myinfo.css" rel="stylesheet" type="text/css">
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.js"></script>
<script type="text/javascript" src="../js/userhome/myinfo.js"></script>
</head>

<?php
	require_once("php_tools/is_from_userhome.php");
	require_once("../php/get_userinfo_from_cookies.php");
	//判断访问是否合法
	isFromUserhome();
?>
<body>
	<div class="mainbox-content">
		<div class="user-info">
			<div class="user-ico">
				<img width="120" height="120" src="//<?php echo $_SERVER['SERVER_NAME'];?>/syth/images/user-ico/<?php echo getUsernameFromCookies();?>.png" onerror="javascript:this.src='//<?php echo $_SERVER['SERVER_NAME'];?>/syth/images/user-ico/default.png'">
			</div>
			<div class="detail">
				<div class="first-row">
					<span class="nickname"><?php echo getNicknameFromCookies();?></span>
					<span class="username">(<?php echo getUsernameFromCookies();?>)</span>
					<a class="alter-nickname">修改昵称</a>
				</div>
				<div class="second-row">
					<span class="user-age">18</span>
					<span class="user-address">B612小行星</span>
					<span class="user-motto">本宝宝暂时还没想到个性的签名!</span>
					<a class="edit-info">编辑资料</a>
				</div>
				<div class="third-row">
					3
				</div>
				<div class="fourth-row">
					4
				</div>
			</div>
			<div class="accoun-manage">
				<div class="header">
					<h4>账号管理</h4>
					<em>(<?php echo getUsernameFromCookies();?>)</em>
				</div>
				<div class="body">
					<a class="itembox">
						<i class="i-left" style="background-image: url(../images/userhome/alter-password.png);"></i>
						<div class="msm">
							<p class="msm1">修改密码</p>
							<p class="msm2">建议经常修改密码,以保障账户安全</p>
						</div>
						<i class="i-right"></i>		
					</a>
					<a id="phone" class="itembox">
						<i class="i-left" style="background-image: url(../images/userhome/no-phone.png);"></i>
						<div class="msm">
							<p class="msm1">绑定手机</p>
							<p class="msm2">绑定密保手机,以保障您的账户安全</p>
						</div>
						<i class="i-right"></i>
					</a>
					<a class="itembox">
						<i class="i-left" style="background-image: url(../images/userhome/no-phone.png);"></i>
						<div class="msm">
							<p class="msm1">绑定邮箱</p>
							<p class="msm2">绑定密保邮箱,以便于找回密码</p>
						</div>
						<i class="i-right"></i>		
					</a>
					<a class="itembox" href="../module_books/book-upload.php" target="new">
						<i class="i-left" style="background-image: url(../images/userhome/no-phone.png);"></i>
						<div class="msm">
							<p class="msm1">上传书籍</p>
							<p class="msm2">听说不再需要的书能用来换糖果呢！</p>
						</div>
						<i class="i-right"></i>	
					</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

