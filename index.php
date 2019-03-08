<?php header("Content-Type: text/html; charset=UTF-8"); define('INIT_PHPV', true); //定义 INIT_PHPV 为 true ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.299, maximum-scale=1.5">
<title>小U闲置ヾ(✿ﾟ▽ﾟ)～和美好相遇</title>

<link href="images/ico.ico" rel="icon">
<link href="css/header.css" rel="stylesheet" type="text/css">
<link href="css/index.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/header.js"></script>
<script type="text/javascript" src="js/footer.js"></script>
<script type="text/javascript" src="js/check-login-statement.js"></script>
<?php
	include_once("php/get_all_book_info_by_id.php");
	include_once("php/search_tools.php");
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
				
				<!--提示登录弹出框 ↓↓↓-->
				<div class="login-prompt">
					ddd
				</div>
				<!--提示登录弹出框 ↑↑↑-->
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
        <nav>
			<?php
				// 计算机类
				$searchBooksByKeyword_computer = new SearchBooksByKeyword("计算机");
				// 经济类
				$searchBooksByKeyword_economy = new SearchBooksByKeyword("经济");
				// 管理类
				$searchBooksByKeyword_management = new SearchBooksByKeyword("管理");
				// 语言类
				$searchBooksByKeyword_language = new SearchBooksByKeyword("语 英语 俄语 日语");
				// 数理化
				$searchBooksByKeyword_mpc  = new SearchBooksByKeyword("数学 物理 化学");
				// 课外读物类
				$searchBooksByKeyword_outclass = new SearchBooksByKeyword("课外 文学 读物");
				// 考研类
				$searchBooksByKeyword_kaoyan = new SearchBooksByKeyword("考研");
				// 公务员
				$searchBooksByKeyword_gwy = new SearchBooksByKeyword("公务员");
				// 其他
				$searchBooksByKeyword_orther = new SearchBooksByKeyword("其他");
				// 全部
				$searchBooksByKeyword_all = new SearchBooksByKeyword("");
			?>
        	<ul>
            	<li>
                	<a href="index.php">
                		<i></i>
                    	<div class="nav-name">首页</div>
                    </a>
                </li>
                <li>
                	<a href="search.php?keyword=计算机" target="new">
                    	<span>
							<?php if(($searchBooksByKeyword_computer->getLargeCount()) > 999){echo "999+";}else{echo $searchBooksByKeyword_computer->getLargeCount();}?>
						</span>
                        <div class="nav-name">计算机</div>
                    </a>
                </li>
                <li>
                	<a href="search.php?keyword=经济" target="new">
                    	<span>
							<?php if(($searchBooksByKeyword_economy->getLargeCount()) > 999){echo "999+";}else{echo $searchBooksByKeyword_economy->getLargeCount();}?>
						</span>
                        <div class="nav-name">经济类</div>
                    </a>
                </li>
                <li>
                	<a href="search.php?keyword=管理" target="new">
                    	<span>
							<?php if(($searchBooksByKeyword_management->getLargeCount()) > 999){echo "999+";}else{echo $searchBooksByKeyword_management->getLargeCount();}?>
						</span>
                        <div class="nav-name">管理类</div>
                    </a>
                </li>
                <li>
                	<a href="search.php?keyword=语+英语+俄语+日语" target="new">
                    	<span>
							<?php if(($searchBooksByKeyword_language->getLargeCount()) > 999){echo "999+";}else{echo $searchBooksByKeyword_language->getLargeCount();}?>
						</span>
                        <div class="nav-name">语言类</div>
                    </a>
                </li>
                <li>
                	<a href="search.php?keyword=数学+物理+化学" target="new">
                    	<span>
							<?php if(($searchBooksByKeyword_mpc->getLargeCount()) > 999){echo "999+";}else{echo $searchBooksByKeyword_mpc->getLargeCount();}?>
						</span>
                        <div class="nav-name">数理化</div>
                    </a>
                </li>
                <li>
                	<a href="search.php?keyword=课外+文学+读物" target="new">
                    	<span>
							<?php if(($searchBooksByKeyword_outclass->getLargeCount()) > 999){echo "999+";}else{echo $searchBooksByKeyword_outclass->getLargeCount();}?>
						</span>
                        <div class="nav-name">读物类</div>
                    </a>
                </li>
                <li>
                	<a href="search.php?keyword=考研" target="new">
                    	<span>
							<?php if(($searchBooksByKeyword_kaoyan->getLargeCount()) > 999){echo "999+";}else{echo $searchBooksByKeyword_kaoyan->getLargeCount();}?>
						</span>
                        <div class="nav-name">考研资料</div>
                    </a>
                </li>
                <li>
                	<a href="search.php?keyword=公务员" target="new">
                    	<span>
							<?php if(($searchBooksByKeyword_gwy->getLargeCount()) > 999){echo "999+";}else{echo $searchBooksByKeyword_gwy->getLargeCount();}?>
						</span>
                        <div class="nav-name">公务员</div>
                    </a>
                </li>
                <li>
                	<a href="search.php?keyword=其他" target="new">
                    	<span>
							<?php if(($searchBooksByKeyword_orther->getLargeCount()) > 999){echo "999+";}else{echo $searchBooksByKeyword_orther->getLargeCount();}?>
						</span>
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
    	<!--主容器中最上方的盒子 ↓↓↓-->
    	<div class="box1">
        	<!--幻灯片 ↓↓↓-->
        	<div id="slide_box">
                <!-- 幻灯片图片 -->
                <ul class="slide_img">
                    <li title="阳光正好"><a href="#1"><img src="images/slide/2.png" width="480" height="280" alt="阳光正好"></a></li>
                    <li title="微风不燥"><a href="#2"><img src="images/slide/4.png" width="480" height="280" alt="微风不燥"></a></li>
                    <li title="唇红齿白"><a href="#3"><img src="images/slide/2.png" width="480" height="280" alt="唇红齿白"></a></li>
                    <li title="岁月正好"><a href="#4"><img src="images/slide/1.png" width="480" height="280" alt="岁月正好"></a></li>
                    <li title="笑语春衫"><a href="#5"><img src="images/slide/2.png" width="480" height="280" alt="笑语春衫"></a></li>
                    <li title="阳光正好"><a href="#6"><img src="images/slide/3.png" width="480" height="280" alt="岁月正好"></a></li>
                    </ul>
                <!-- 幻灯片序列号 -->
                <div id="slide_order"></div>
                <p id="slide_title"></p>
            </div>
            <!--幻灯片 ↑↑↑-->
            
            <!--幻灯片右侧盒子 ↓↓↓-->
            <div class="box1_1">
				<?php $singleBookInfo = new SingleBookInfo(1);  //构造函数接收一个id_book参数?>
            	<a <?php echo 'href="module_books/book-detail.php?id_book=',$singleBookInfo->getId(),'" title="',$singleBookInfo->getTitle(),'"';?> target="new">
                    <div id="tinybox1" class="tinybox">
                        <img src="images/books/0.png">
						<p>书名: <?php echo $singleBookInfo->getTitle();?></p>
						<p>作者: <?php echo $singleBookInfo->getAuthor();?></p>
						<p>价格: <?php echo $singleBookInfo->getPrice();?>￥</p>
                        <p>出版社: <?php echo $singleBookInfo->getPress();?></p>
                    </div>
                </a>
				<?php $singleBookInfo = new SingleBookInfo(2);  //构造函数接收一个id_book参数?>
                <a <?php echo 'href="module_books/book-detail.php?id_book=',$singleBookInfo->getId(),'" title="',$singleBookInfo->getTitle(),'"';?> target="new">
                    <div id="tinybox2" class="tinybox">
                        <img src="images/books/0.png">
                        <p>书名: <?php echo $singleBookInfo->getTitle();?></p>
						<p>作者: <?php echo $singleBookInfo->getAuthor();?></p>
						<p>价格: <?php echo $singleBookInfo->getPrice();?>￥</p>
                        <p>出版社: <?php echo $singleBookInfo->getPress();?></p>
                    </div>
                </a>
				<?php $singleBookInfo = new SingleBookInfo(3);  //构造函数接收一个id_book参数?>
                <a <?php echo 'href="module_books/book-detail.php?id_book=',$singleBookInfo->getId(),'" title="',$singleBookInfo->getTitle(),'"';?> target="new">
                    <div id="tinybox3" class="tinybox">
                        <img src="images/books/0.png">
                        <p>书名: <?php echo $singleBookInfo->getTitle();?></p>
						<p>作者: <?php echo $singleBookInfo->getAuthor();?></p>
						<p>价格: <?php echo $singleBookInfo->getPrice();?>￥</p>
                        <p>出版社: <?php echo $singleBookInfo->getPress();?></p>
                    </div>
                </a>
				<?php $singleBookInfo = new SingleBookInfo(4);  //构造函数接收一个id_book参数?>
                <a <?php echo 'href="module_books/book-detail.php?id_book=',$singleBookInfo->getId(),'" title="',$singleBookInfo->getTitle(),'"';?> target="new">
                    <div id="tinybox4" class="tinybox">
                        <img src="images/books/0.png">
                        <p>书名: <?php echo $singleBookInfo->getTitle();?></p>
						<p>作者: <?php echo $singleBookInfo->getAuthor();?></p>
						<p>价格: <?php echo $singleBookInfo->getPrice();?>￥</p>
                        <p>出版社: <?php echo $singleBookInfo->getPress();?></p>
                    </div>
                </a>
				<?php $singleBookInfo = new SingleBookInfo(5);  //构造函数接收一个id_book参数?>
                <a <?php echo 'href="module_books/book-detail.php?id_book=',$singleBookInfo->getId(),'" title="',$singleBookInfo->getTitle(),'"';?> target="new">
                    <div id="tinybox5" class="tinybox">
                        <img src="images/books/0.png">
                        <p>书名: <?php echo $singleBookInfo->getTitle();?></p>
						<p>作者: <?php echo $singleBookInfo->getAuthor();?></p>
						<p>价格: <?php echo $singleBookInfo->getPrice();?>￥</p>
                        <p>出版社: <?php echo $singleBookInfo->getPress();?></p>
                    </div>
                </a>
				<?php $singleBookInfo = new SingleBookInfo(6);  //构造函数接收一个id_book参数?>
                <a <?php echo 'href="module_books/book-detail.php?id_book=',$singleBookInfo->getId(),'" title="',$singleBookInfo->getTitle(),'"';?> target="new">
                    <div id="tinybox6" class="tinybox">
                        <img src="images/books/0.png">
                        <p>书名: <?php echo $singleBookInfo->getTitle();?></p>
						<p>作者: <?php echo $singleBookInfo->getAuthor();?></p>
						<p>价格: <?php echo $singleBookInfo->getPrice();?>￥</p>
                        <p>出版社: <?php echo $singleBookInfo->getPress();?></p>
                    </div>
                </a>
            </div>
            <!--幻灯片右侧盒子 ↑↑↑-->
            
        </div>
        <!--主容器中最上方的盒子 ↑↑↑-->
        
        <!--主容器中 热门书籍 ↓↓↓-->
        <div class="box2">
        	<div class="title-box">
            	<i></i>
            	<span>最新录入</span>
                <i></i>
                <div class="more">
                	数目总计: 
					<?php echo $searchBooksByKeyword_all->getLargeCount();?>
                    <em>|</em>
                	<a href="search.php" target="new">
                    	查看更多&#62&#62
                    </a>
                </div>
            </div>
            <div class="content-box">
            	<div class="left-box">
                	<ul>
						<li>计算机</li>
						<?php
							// 获取以计算机为关键字的查询结果前六行的book_id数组
							$result = $searchBooksByKeyword_computer->getLargeIdSet_latestBooks(5);
							$booksIdArray = $result->fetchAll(PDO::FETCH_ASSOC);
							$singleBookInfo0 = new SingleBookInfo($booksIdArray[0]["id"]);
							$singleBookInfo1 = new SingleBookInfo($booksIdArray[1]["id"]);
							$singleBookInfo2 = new SingleBookInfo($booksIdArray[2]["id"]);
							$singleBookInfo3 = new SingleBookInfo($booksIdArray[3]["id"]);
							$singleBookInfo4 = new SingleBookInfo($booksIdArray[4]["id"]);
							echo '<li><a href = "module_books/book-detail.php?id_book=',$singleBookInfo0->getId(),'" target = "new">',$singleBookInfo0->getTitle(),'</a></li>';
							echo '<li><a href = "module_books/book-detail.php?id_book=',$singleBookInfo1->getId(),'" target = "new">',$singleBookInfo1->getTitle(),'</a></li>';
							echo '<li><a href = "module_books/book-detail.php?id_book=',$singleBookInfo2->getId(),'" target = "new">',$singleBookInfo2->getTitle(),'</a></li>';
							echo '<li><a href = "module_books/book-detail.php?id_book=',$singleBookInfo3->getId(),'" target = "new">',$singleBookInfo3->getTitle(),'</a></li>';
							echo '<li><a href = "module_books/book-detail.php?id_book=',$singleBookInfo4->getId(),'" target = "new">',$singleBookInfo4->getTitle(),'</a></li>';
						?>
						<li><a href="search.php?keyword=计算机" target="new">查看更多</a></li>
                    </ul>
                	<ul>
                    	<li>经济学</li>
                        <li>IT项目管理</li>
                        <li>管理学概论</li>
                        <li>信息资源管理</li>
                        <li>系统论</li>
                        <li>管理的艺术</li>
                        <li>查看更多...</li>
                    </ul>
                	<ul>
                    	<li>管理学</li>
                        <li>IT项目管理</li>
                        <li>管理学概论</li>
                        <li>信息资源管理</li>
                        <li>系统论</li>
                        <li>管理的艺术</li>
                        <li>查看更多...</li>
                    </ul>
                	<ul>
                    	<li>语言类</li>
                        <li>大学英语Ⅱ</li>
                        <li>大学俄语</li>
                        <li>大学日语</li>
                        <li>大学语文</li>
                        <li>文学鉴赏</li>
                        <li>查看更多...</li>
                    </ul>
                	<ul>
                    	<li>数理化</li>
                        <li>高等数学Ⅰ</li>
                        <li>大学物理Ⅱ</li>
                        <li>分子物理</li>
                        <li>流体动力学</li>
                        <li>有机高分子</li>
                        <li>查看更多...</li>
                    </ul>
                	<ul>
                    	<li>课外读物</li>
                        <li>世有桃花</li>
                        <li>美人何处</li>
                        <li>人间至味是清欢</li>
                        <li>长安乱</li>
                        <li>小王子</li>
                        <li>查看更多...</li>
                    </ul>
                	<ul>
                    	<li>考研资料</li>
                        <li>考研英语</li>
                        <li>考研数学</li>
                        <li>考研心里辅导</li>
                        <li>数据结构与算法</li>
                        <li>计算机原理</li>
                        <li>查看更多...</li>
                    </ul>
                </div>
                <div class="right-box">
                	<h6>站内公告</h6>
                    <p>Hey ! 终于等到你!</p>
                    <p>感谢亲的来访！本站是一个公益性的石大闲置信息公示平台，旨在为同学们提供便捷信息展示与获取渠道。本站不做交易双方的中间人，同时在约见交易人时请注意自身安全！</p>
                    <p>限于小可水平，本站尚有诸多不足，请多指教！</p>
                </div>
            </div>
        </div>
        <!--主容器中 热门书籍 ↑↑↑-->
        
        <!--主容器中 电子设备 ↓↓↓-->
        <div class="box3">
        	<div class="title-box">
            	<i></i>
            	<span>电子设备</span>
                <a href="404.html" target="new">更多 &#62</a>
                <a>数量统计: 9999+</a>
            </div>
            <div class="content-box">
            	<div class="tinybox">
                	<img src="images/3c/1.png" width="171" height="150">
                    <p class="title">iphone4s</p>
                    <p class="price">￥<span>500</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/3c/1.png" width="171" height="150">
                    <p class="title">iphone4s</p>
                    <p class="price">￥<span>500</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/3c/1.png" width="171" height="150">
                    <p class="title">iphone4s</p>
                    <p class="price">￥<span>500</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/3c/1.png" width="171" height="150">
                    <p class="title">iphone4s</p>
                    <p class="price">￥<span>500</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/3c/1.png" width="171" height="150">
                    <p class="title">iphone4s</p>
                    <p class="price">￥<span>500</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/3c/1.png" width="171" height="150">
                    <p class="title">iphone4s</p>
                    <p class="price">￥<span>500</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/3c/1.png" width="171" height="150">
                    <p class="title">iphone4s</p>
                    <p class="price">￥<span>500</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/3c/1.png" width="171" height="150">
                    <p class="title">iphone4s</p>
                    <p class="price">￥<span>500</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/3c/1.png" width="171" height="150">
                    <p class="title">iphone4s8</p>
                    <p class="price">￥<span>500</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/3c/1.png" width="171" height="150">
                    <p class="title">iphone4s</p>
                    <p class="price">￥<span>500</span></p>
                </div>
            </div>
            <div class="right">
				<div class="tabs">
					<ul>
						<li>校园公告</li>
						<li id="mainbox_box3_right_tabs_li1" class="current-tab"><a>为你推荐</a></li>
						<li id="mainbox_box3_right_tabs_li2"><a>社团活动</a></li>
						<li id="mainbox_box3_right_tabs_li3"><a>失物招领</a></li>
					</ul>
				</div>
				<div class="content">
					<ul>
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
				</div>
            </div>
        </div>
        <!--主容器中 电子设备 ↑↑↑-->
        
        <!--主容器中 护肤美妆 ↓↓↓-->
        <div class="box4">
        	<div class="title-box">
            	<i></i>
            	<span>护肤美妆</span>
                <a href="404.html" target="new">更多 ></a>
                <a>数量统计: 9999+</a>
            </div>
            <div class="content-box">
            	<div class="tinybox">
                	<img src="images/maquillage/1.png" width="171" height="150">
                    <p class="title">纪梵希香水小样</p>
                    <p class="price">￥<span>99</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/maquillage/1.png" width="171" height="150">
                    <p class="title">纪梵希香水小样</p>
                    <p class="price">￥<span>99</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/maquillage/1.png" width="171" height="150">
                    <p class="title">纪梵希香水小样</p>
                    <p class="price">￥<span>99</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/maquillage/1.png" width="171" height="150">
                    <p class="title">纪梵希香水小样</p>
                    <p class="price">￥<span>99</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/maquillage/1.png" width="171" height="150">
                    <p class="title">纪梵希香水小样</p>
                    <p class="price">￥<span>99</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/maquillage/1.png" width="171" height="150">
                    <p class="title">纪梵希香水小样</p>
                    <p class="price">￥<span>99</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/maquillage/1.png" width="171" height="150">
                    <p class="title">纪梵希香水小样</p>
                    <p class="price">￥<span>99</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/maquillage/1.png" width="171" height="150">
                    <p class="title">纪梵希香水小样</p>
                    <p class="price">￥<span>99</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/maquillage/1.png" width="171" height="150">
                    <p class="title">纪梵希香水小样</p>
                    <p class="price">￥<span>99</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/maquillage/1.png" width="171" height="150">
                    <p class="title">纪梵希香水小样</p>
                    <p class="price">￥<span>99</span></p>
                </div>
            </div>
            <div class="right">

            </div>
        </div>
        <!--主容器中 护肤美妆 ↑↑↑-->
        
        <!--主容器中 体育器材 ↓↓↓-->
        <div class="box5">
        	<div class="title-box">
            	<i></i>
            	<span>爱运动</span>
                <a href="404.html" target="new">更多 ></a>
                <a>数量统计: 9999+</a>
            </div>
            <div class="content-box">
            	<div class="tinybox">
                	<img src="images/sports/1.png" width="171" height="150">
                    <p class="title">网球拍</p>
                    <p class="price">￥<span>40</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/sports/1.png" width="171" height="150">
                    <p class="title">网球拍</p>
                    <p class="price">￥<span>40</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/sports/1.png" width="171" height="150">
                    <p class="title">网球拍</p>
                    <p class="price">￥<span>40</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/sports/1.png" width="171" height="150">
                    <p class="title">网球拍</p>
                    <p class="price">￥<span>40</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/sports/1.png" width="171" height="150">
                    <p class="title">网球拍</p>
                    <p class="price">￥<span>40</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/sports/1.png" width="171" height="150">
                    <p class="title">网球拍</p>
                    <p class="price">￥<span>40</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/sports/1.png" width="171" height="150">
                    <p class="title">网球拍</p>
                    <p class="price">￥<span>40</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/sports/1.png" width="171" height="150">
                    <p class="title">网球拍</p>
                    <p class="price">￥<span>40</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/sports/1.png" width="171" height="150">
                    <p class="title">网球拍</p>
                    <p class="price">￥<span>40</span></p>
                </div>
            	<div class="tinybox">
                	<img src="images/sports/1.png" width="171" height="150">
                    <p class="title">网球拍</p>
                    <p class="price">￥<span>40</span></p>
                </div>
            </div>
            <div class="right">
            </div>
        </div>
        <!--主容器中 体育器材 ↑↑↑-->
        <aside>
        </aside>
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
                        	<img src="images/app-download.png" width="136" height="142">
                            <p>仅支持Android 6+</p>
                        </div>
                        
                        <div class="qq">
                        	<i></i>
                            小可企鹅
                        </div>
                        <div id="qq">
                        	<img src="images/qq.png" width="136" height="142">
                            <p>企鹅</p>
                        </div>
                        
                        <div class="wechat">
                        	<i></i>
                            小可微信
                        </div>
                        <div id="wechat">
                        	<img src="images/wechat.png" width="136" height="142">
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
