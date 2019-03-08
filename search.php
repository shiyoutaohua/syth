<?php header("Content-Type: text/html; charset=UTF-8"); define('INIT_PHPV', true); //定义 INIT_PHPV 为 true ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.299, maximum-scale=1.5">
<title>查找结果</title>
<link href="images/ico.ico" rel="icon">
<link href="css/header.css" rel="stylesheet" type="text/css">
<link href="css/search.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">  
	
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/header.js"></script>
<script  src="js/search.js"></script>
<script type="text/javascript" src="js/footer.js"></script>
<script type="text/javascript" src="js/check-login-statement.js"></script>
	
<style type="text/css">
	body a{font-size: 12px; color: rgba(34,34,34,1);}
	a:hover{color:rgb(0,161,214);}
	header nav span{height: 16px;}
	footer{top: 780px; font-size: 12px;}
	.wrapgate-about table td:first-child{width: 400px;}
	.wrapgate-about table td:nth-child(2){width: 440px;}
</style>
<?php
	include_once("php/search_tools.php");
	include_once("php/get_all_book_info_by_id.php");
?>
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
                            <input id="word-search" name="keyword" type="text" placeholder="请输入检索关键词">
                            <button name="search" type="submit" title="查找"></button>
                        </form>
                	</div>
            	</div>
            </div>
        </div>
        <nav>
        	<ul>
            	<li>
                	<a href="index.php">
                		<i></i>
                    	<div class="nav-name">首页</div>
                    </a>
                </li>
                <li>
                	<a href="404.html" target="new">
                    	<span>520</span>
                        <div class="nav-name">计算机</div>
                    </a>
                </li>
                <li>
                	<a href="404.html" target="new">
                    	<span>999+</span>
                        <div class="nav-name">经济类</div>
                    </a>
                </li>
                <li>
                	<a href="404.html" target="new">
                    	<span>999+</span>
                        <div class="nav-name">管理类</div>
                    </a>
                </li>
                <li>
                	<a href="404.html" target="new">
                    	<span>999+</span>
                        <div class="nav-name">语言类</div>
                    </a>
                </li>
                <li>
                	<a href="404.html" target="new">
                    	<span>999+</span>
                        <div class="nav-name">数理化</div>
                    </a>
                </li>
                <li>
                	<a href="404.html" target="new">
                    	<span>999+</span>
                        <div class="nav-name">读物类</div>
                    </a>
                </li>
                <li>
                	<a href="404.html" target="new">
                    	<span>999+</span>
                        <div class="nav-name">考研资料</div>
                    </a>
                </li>
                <li>
                	<a href="404.html" target="new">
                    	<span>999+</span>
                        <div class="nav-name">公务员</div>
                    </a>
                </li>
                <li>
                	<a href="404.html" target="new">
                    	<span>999+</span>
                        <div class="nav-name">其他书籍</div>
                    </a>
                </li>
       
            	<li>
                	<a href="404.html" target="new" title="加入我们">
                		<i></i>
                    	<div class="nav-name">合作</div>
                    </a>
                </li>
            	<li>
                	<a href="404.html" target="new" title="站内导航">
                		<i></i>
                    	<div class="nav-name">导航</div>
                    </a>
                </li>
            	<li>
                	<a title="请支持我们">
                		<i></i>
                    	<div class="nav-name">支持</div>
                    </a>
                </li>
            	<li>
                	<a href="404.html" target="new" title="此汉可撩（￣︶￣）↗">
                		<i></i>
                    	<div class="nav-name">勾搭</div>
                    </a>
                </li>
            </ul>
            
			<!--捐赠窗口 ↓↓↓-->
            <div class="donate">
                <p>您的支持将帮助小U变得更好 | 再次点击以隐藏</p>
                <img src="images/alipay.png" width="136" height="142">
                <img src="images/wechatpay.png" width="136" height="142">
                <p>斯人若彩虹,遇上方知有.</p>
            </div>
            <!--捐赠窗口 ↑↑↑-->
            
        </nav>
    </header>
	
	<div class="mainbox">
		<?php
			if(isset($_REQUEST["keyword"]) && $_REQUEST["keyword"] != null){
				$keyword = $_REQUEST["keyword"];
			}
			else{
				$keyword = "";
			}
			if(isset($_REQUEST["page"]) && $_REQUEST["page"] != null){
				if($_REQUEST["page"] < 1)
				{
					$page = 1;
				}
				else
				{
					$page = $_REQUEST["page"];
				}
			}
			else{
				$page = 1;
			}
			if(isset($_REQUEST["search"])){
				$isFromSearchbox = true;
			}
			else{
				$isFromSearchbox = false;
			}
			$searchBooksByKeyword = new SearchBooksByKeyword($keyword);
			$bookCount = $isFromSearchbox ? ($searchBooksByKeyword->getSmallCount()) : ($searchBooksByKeyword->getLargeCount());
		?>
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">选定选项卡以查看搜索结果</h3>
			</div>
			<div class="panel-body" style="height: 490px; padding: 0;">
				<ul id="myTab" class="nav nav-tabs">
					<li class="active">
						<a href="#content1" data-toggle="tab">
							书籍
							<span id="bookcount" class="badge pull-right" style="padding: 1px; margin-left: 5px; border-radius: 2px; background-color: #ffafc9;">
								<?php 
									if($bookCount > 99){echo "99+";}else{echo $bookCount;}
								?>
							</span>
						</a>
					</li>
					<li>
						<a href="#content2" data-toggle="tab">
							电子产品
							<span class="badge pull-right" style="padding: 1px; margin-left: 5px; border-radius: 2px; background-color: #ffafc9;">
								99+
							</span>
						</a>
					</li>
					<li>
						<a href="#content3" data-toggle="tab">
							体育器材
							<span class="badge pull-right" style="padding: 1px; margin-left: 5px; border-radius: 2px; background-color: #ffafc9;">
								99+
							</span>
						</a>
					</li>
					<li>
						<a href="#content4" data-toggle="tab">
							化妆品
							<span class="badge pull-right" style="padding: 1px; margin-left: 5px; border-radius: 2px; background-color: #ffafc9;">
								99+
							</span>
						</a>
					</li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane fade in active" id="content1">
						<ul class="list-group">
							<?php 
								if($isFromSearchbox)
								{
									$result = $searchBooksByKeyword->getSmallIdSet($page);
								}
								else
								{
									$result = $searchBooksByKeyword->getLargeIdSet($page);
								}
								$array = $result->fetchAll(PDO::FETCH_ASSOC);
								for($i = 0; $i < count($array); $i++){
									$bookId = $array[$i]["id"];
									$singleBookInfo = new SingleBookInfo($bookId);
									echo '<a href="module_books/book-detail.php?id_book='.$bookId.'" class="list-group-item" target="new">';
									echo $singleBookInfo->getTitle();
									echo '</a>';
								}
							?>
						</ul>
						<div class="page-code">
							<ul class="pagination">
								<?php
									// 如果页数大于10 只显示前10页的按钮
									if($bookCount == 0)
									{
									}
									else
									{
										echo '<li><a onClick="previousPage()">&laquo;</a></li>';
										for($i = 1; $i <= ceil($bookCount/9); $i++)
										{
											echo '<li><a href="search.php?keyword=',$keyword,'&page=',$i,'">',$i,'</a></li>';
										}	
										echo '<li><a onClick="nextPage()">&raquo;</a></li>';
									}
								?>
							</ul>
						</div>
					</div>
					<div class="tab-pane fade" id="content2">
						<p>该功能努力开发中，尽请期待！</p>
					</div>
					<div class="tab-pane fade" id="content3">
						<p>该功能努力开发中，尽请期待！</p>
					</div>
					<div class="tab-pane fade" id="content4">
						<p>该功能努力开发中，尽请期待！</p>
					</div>
				</div>		
			</div>
		</div>
	</div>
	
    <footer>
		<button onClick="showPageCode()">测试</button>
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
