<!DOCTYPE HTML>
<?php 
require_once('data/inc.sites.php');
$max_len = 5;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script type="text/javascript">
		if (location.href.indexOf('www')<0) location.href = 'http://www.hust.cc/'
	</script>
	<title>
		华中大网址导航 - 华中大学子上网首页 - 华中大学子网
	</title>
	<meta name="keywords" content="HUST,HUST.CC,华中大,华中科技大学,huster,华中大学子,华中大学子网,华中大网址导航,华中科技大学网址导航,华中大学子网址导航,华中大学子上网首页" />
	<meta name="description" content="HUST.CC，一个简单而全面的华中大学子网址导航，Huster们从这里发现有趣的网站吧。" />
	<script type="text/javascript" src="./res/js/jquery.1.9.0.min.js"></script>
	<script type="text/javascript" src="./res/js/jquery.sliphover.min.js"></script>
	<script type="text/javascript" src="./res/js/cascade.js"></script>
	<link href="./res/css/reset.css" rel="stylesheet" type="text/css">
	<link href="./res/style.css" rel="stylesheet" type="text/css">
	<link href="./res/css/slide.css" rel="stylesheet" type="text/css">
	<link href="./res/css/right.css" rel="stylesheet" type="text/css">
	<link href="./res/css/cascade.css" rel="stylesheet" type="text/css">
	<link href="./res/css/jquery.qtip.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	<!--<div class="bartop"></div>-->
	<div class="top-nav">
		<div class="curcity"><script type="text/javascript" src="http://ext.weather.com.cn/87362.js"></script></div>
		<!--<div class="login"><span class="login-text">请登录</span><span class="login-icon"> </span></div>
		<!--<div class="mtime-logo"><a title="" href="."></a></div>-->
		<ul>
			<li class="current"><a href=".">首页</a></li>
			<li><a target="_blank" rel="nofollow" href="http://www.hust.edu.cn/">华中大官网</a></li>
			<li><a target="_blank" rel="nofollow" href="http://www.hustonline.net/">华中大在线</a></li>
			<li><a target="_blank" rel="nofollow" href="http://bbs.whnet.edu.cn/">白云黄鹤BBS</a></li>
			<li><a target="_blank" rel="nofollow" href="http://hub.hust.edu.cn/">HUB系统</a></li>
			<li><a target="_blank" rel="nofollow" href="http://jwc.hust.edu.cn/">华中大教务处</a></li>
			<li><a target="_blank" rel="nofollow" href="http://weibo.com/husterscn/">关注微博</a></li>
		</ul>
	</div>
	<div class="mtime-box">
		<div class="bd">
			<ul>
				<li d="1" c="#fff" style="background: url(res/images/data/img1.jpg) 50% 50% no-repeat;">
					<div class="m-width">
						<a href="."><img src="res/images/data/img1_1.jpg"></a>
					</div>
				</li>
				<li d="2" c="#fff" style="background: url(res/images/data/img2.jpg) 50% 50% no-repeat;">
					<div class="m-width">
						<a href="."><img src="res/images/data/img2_2.jpg"></a>
					</div>
				</li>
			</ul>
		</div>
		<div class="mtime-btn">
			<a class="prev" href="javascript:;"> </a>
			<a class="next" href="javascript:;"> </a>
			<div class="hd">
				<ul>
					<li class="on">1</li>
					<li class="">2</li>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
			function prevShow() {
				var curr = $(".bd ul li:visible");
				if (curr.attr('d') == '1') {
					prev = $(".bd ul li:last");
				}
				else {
					prev = curr.prev();
				}
				curr.hide(300);
				prev.show(500);
				$('.hd ul li').attr('class', '');
				$(".hd ul li:eq("+ (parseInt(prev.attr('d')) - 1) +")").attr('class', 'on');
				$('.top-nav ul li a').css('color', prev.attr('c'));
			}
			function nextShow() {
				var curr = $(".bd ul li:visible");
				if (curr.attr('d') == max) {
					prev = $(".bd ul li:first");
				}
				else {
					prev = curr.next();
				}
				curr.hide(300);
				prev.show(500);
				$('.hd ul li').attr('class', '');
				$(".hd ul li:eq("+ (parseInt(prev.attr('d')) - 1) +")").attr('class', 'on');
				$('.top-nav ul li a').css('color', prev.attr('c'));
			}
			
			var max = $(".bd ul li:last").attr('d');
			$(".prev").click(function(){
				prevShow();
			});
			$(".next").click(function(){
				nextShow();
			});
			//启动切换的定时器
			interval = setInterval(nextShow, "5000");
		</script>
	</div>
	<div id="content">
		<div class="i_content">
			<div class="c_left">
				<div class="slide" id="container">
					<ul>
						<li>
							<a target="_blank" rel="nofollow" href="http://img.hust.cc/"><img src="res/images/data/img.png" title="<h3 style='color:yellow'>图片优化压缩</h3><hr/>" /></a>
						</li>
						<li>
							<a target="_blank" rel="nofollow" href="http://lib.hust.cc/"><img src="res/images/data/lib.png" title="<h3 style='color:yellow'>移动图书管</h3><hr/>" /></a>
						</li>
						<li>
							<a target="_blank" rel="nofollow" href="http://alarm.hust.cc/"><img src="res/images/data/alarm.png" title="<h3 style='color:yellow'>在线定时器</h3><hr/>" /></a>
						</li>
						<li>
							<a target="_blank" rel="nofollow" href="http://www.atool.org/"><img src="res/images/data/atool.png" title="<h3 style='color:yellow'>在线工具</h3><hr/>" /></a>
						</li>
					</ul>
				</div>
				<div id="wrapper">
					 <div class="h-list">
					 	<div class="h-bd cle" id="h-waterfall">
							<?php
							$sites_type_len = count($sites);
							$site_len = 0;
							$site_type = null;
							$site = null;
							for ($i = 0; $i < $sites_type_len; $i++) {
								$site_type = $sites[$i];
								echo '<div class="item">';
								echo '<h3>'.$site_type['name'].'</h3>';
								$site_len = count($site_type['data']);
								for ($j = 0; $j < $site_len; $j ++) {
									$site = $site_type['data'][$j];
									echo '<p class="'. ($j >= $max_len ? 'hidden': 'show') .'"><a href="'.$site['url'].'" rel="nofollow" title="'.$site['name'].'" target="_blank">'.$site['name'].'</a></p>';
								}
								if ($j >= $max_len) {
									echo '<p class="more"><a>More&gt;&gt;</a><p>';
								}
								echo '</div>';
							}
							?>
					 	</div>
					 </div>
				</div>
				<script> 
					$('#h-waterfall').cascade();
				</script>
			</div>
			<script type="text/javascript">
				$(function(){
					$('#container').sliphover();
				});
			</script>
			<div class="c_right">
				<div class="links">
					<div class="u-tt"><h2>推荐站点</h2><i class="i2"> </i></div>
					<div class=m-pd>
						<div class="itm">
							<h3 class="i4">推荐</h3> 
							<ul>
								<li><a href="http://mail.hust.edu.cn/" rel="nofollow" target="_blank">华中大官方邮箱</a></li>
								<li><a href="http://weibo.com/" rel="nofollow" target="_blank">新浪微博</a></li>
								<li><a href="http://mail.163.com/" rel="nofollow" target="_blank">163邮箱</a></li>
							</ul> 
						</div>
						<div class="itm itm-even">
							<h3 class="i1">社区</h3>
							<ul>
								<li><a href="http://www.douban.com/" rel="nofollow" target="_blank">豆瓣</a></li>
								<li><a href="http://www.renren.com/" rel="nofollow" target="_blank">人人</a></li>
							</ul>
						</div>
						<div class="itm">
							<h3 class="i2">其他</h3> 
							<ul> 
								<li><a href="http://50vip.com/" rel="nofollow" target="_blank">红色石头</a></li>
							</ul> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<span>© 2014  <a href="http://weibo.com/husterscn" target="_blank" title="华中大学子网" rel="nofollow">Hust.cc</a> 版权所有&nbsp;&nbsp;&nbsp;&nbsp;Update at 2014-10-07</span>
		</div>
		<!--返回顶部-->
		<div class="returnTop">
			<div class="box" style="overflow: hidden;">
				<a href="javascript:void(0)"></a>
				<span>返回顶部</span>
			</div>
		</div>
		<!--结束 返回顶部-->
	</div>
	<span style="display:none;"><script src="http://s17.cnzz.com/stat.php?id=5763499&web_id=5763499" language="JavaScript"></script></span>
	<script type="text/javascript" src="./res/js/jquery.qtip.min.js"></script>
	<script type="text/javascript" src="./res/js/script.js"></script>
</body>
</html>
