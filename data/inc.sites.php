<?php 
$sites = array();
//热门网站列表
$sites_top = array(
	array('name'=>'百度','url'=>'http://www.baidu.com/'),
	array('name'=>'网易','url'=>'http://www.163.com/'),
	array('name'=>'新浪微博','url'=>'http://www.youku.com/'),
	array('name'=>'优酷视频','url'=>'http://www.youku.com/'),
	array('name'=>'豆瓣','url'=>'http://www.douban.com/'),
	array('name'=>'知乎','url'=>'http://www.zhihu.com/'),
);
//$sites[] = array('name'=>'热门网站', 'data'=>$sites_top);


//热门网站
$sites_hot = array(
	array('name'=>'蝴蝶BT','url'=>'https://www.kmgtp.org'),
	array('name'=>'华中大新闻网','url'=>'http://news.hustonline.net/'),
	array('name'=>'海投网|宣讲会','url'=>'http://xyzp.haitou.cc/'),
	array('name'=>'华中大地图','url'=>'http://map.hustonline.net/'),
	array('name'=>'华中大图书馆','url'=>'http://www.lib.hust.edu.cn/'),
	array('name'=>'本科生就业网','url'=>'http://job.hust.edu.cn/show/index.html')
);
$sites[] = array('name'=>'热门', 'data'=>$sites_hot);


//门户网站
$sites_portal = array(
	array('name'=>'华中科技大学','url'=>'http://www.hust.edu.cn/'),
	array('name'=>'华中大在线','url'=>'http://www.hustonline.net/'),
	array('name'=>'综合信息网','url'=>'http://e.hust.edu.cn/'),
	array('name'=>'华中大新闻网','url'=>'http://news.hustonline.net/'),
	array('name'=>'化成天下','url'=>'http://hctx.univs.cn/index.jsp'),
	array('name'=>'醉晚亭','url'=>'http://www.zuiwan.net/'),
	array('name'=>'喻园晨光','url'=>'http://sunshine.hust.edu.cn/'),
	array('name'=>'华中大网视','url'=>'http://tv.hustonline.net/'),
	array('name'=>'视野网','url'=>'http://focus.hustonline.net/'),
	array('name'=>'华中大校友会','url'=>'http://xyh.hust.edu.cn/'),
);
$sites[] = array('name'=>'门户', 'data'=>$sites_portal);

//论坛网站
$sites_bbs = array(
	array('name'=>'白云黄鹤','url'=>'http://bbs.whnet.edu.cn/'),
	array('name'=>'华中大贴吧','url'=>'http://tieba.baidu.com/f?kw=%BB%AA%D6%D0%BF%C6%BC%BC%B4%F3%D1%A7'),
	array('name'=>'喻家山麓','url'=>'http://www.hustwb.net/'),
	array('name'=>'华科人BBS','url'=>'http://hzkj.haotui.com/'),
	array('name'=>'华科考研论坛','url'=>'http://hust.hykaoyan.org/'),
	array('name'=>'化成天下','url'=>'http://hctx.univs.cn/index.jsp'),
	array('name'=>'华中大新闻网','url'=>'http://news.hustonline.net/'),
	array('name'=>'华中大网视','url'=>'http://tv.hustonline.net/'),
	array('name'=>'视野网','url'=>'http://focus.hustonline.net/')
);
$sites[] = array('name'=>'论坛', 'data'=>$sites_bbs);

//教学网站
$sites_edu = array(
	array('name'=>'HUB系统','url'=>'http://hub.hust.edu.cn/'),
	array('name'=>'华中大教务处','url'=>'http://jwc.hust.edu.cn/'),
	array('name'=>'教务系统','url'=>'http://mis.hust.edu.cn/'),
	array('name'=>'研究生就业信息网','url'=>'http://career.hust.edu.cn/'),
	array('name'=>'本科生就业网','url'=>'http://job.hust.edu.cn/'),
	array('name'=>'选课中心','url'=>'http://wsxk.hust.edu.cn/'),
	array('name'=>'注册中心','url'=>'http://registrar.hust.edu.cn/'),
	array('name'=>'心理咨询','url'=>'http://xlzx.hust.edu.cn/'),
	array('name'=>'研究生资助网','url'=>'http://gszz.hust.edu.cn/'),
	array('name'=>'本科招生网','url'=>'http://zsb.hust.edu.cn/'),
	array('name'=>'研究生招生网','url'=>'http://gszs.hust.edu.cn/'),
	array('name'=>'留学生招生网','url'=>'http://iso.hust.edu.cn/'),
	array('name'=>'人事招聘网','url'=>'http://employment.hust.edu.cn/'),
	array('name'=>'学工处','url'=>'http://student.hust.edu.cn/'),
	array('name'=>'课程中心','url'=>'http://curriculum.hust.edu.cn/'),
	array('name'=>'七校联合办学信息网','url'=>'http://ut7.ccnu.edu.cn/'),
);
$sites[] = array('name'=>'教学', 'data'=>$sites_edu);

//生活网站
$sites_life = array(
	array('name'=>'人文讲座','url'=>'http://uzone.univs.cn/schNewsList.action?univId=2566&fId=1733'),
	array('name'=>'蝴蝶BT','url'=>'http://www.kmgtp.org/'),
	array('name'=>'大软坊','url'=>'http://app.hustonline.net/'),
	array('name'=>'校园问答iKonw','url'=>'http://ik.hustonline.net/'),
	array('name'=>'华中大二手市场','url'=>'http://hust.2shoujie.com/'),
	array('name'=>'白云黄鹤二手版','url'=>'http://bbs.whnet.edu.cn/cgi-bin/bbsnewtdoc?board=SecondHand'),
	array('name'=>'云U盘','url'=>'http://upan.hust.cc/'),
	array('name'=>'多彩活动','url'=>'http://duocaiii.com/'),
	array('name'=>'微访谈','url'=>'http://talk.hustonline.net/'),
);
$sites[] = array('name'=>'生活', 'data'=>$sites_life);


//服务网站
$sites_service = array(
	array('name'=>'自习室查询','url'=>'http://classroom.hustonline.net/'),
	array('name'=>'教职工查询','url'=>'http://who.hust.edu.cn/'),
	array('name'=>'校园网络服务','url'=>'http://nc.hust.edu.cn/'),
	array('name'=>'校园地图','url'=>'http://map.hustonline.net/'),
	array('name'=>'Hust邮箱','url'=>'http://mail.hust.edu.cn/'),
	array('name'=>'办公电话查询','url'=>'http://www2.hust.edu.cn/phone/default.asp'),
	array('name'=>'电子校报','url'=>'http://weekly.hustnews.com/index/'),
	array('name'=>'课表查询','url'=>'http://jwc.hust.edu.cn/show/article/listMoreArticle?type=fwzq_kbcx_1'),
	array('name'=>'校园网充值','url'=>'http://myself.hust.edu.cn/'),
	array('name'=>'校园无线网分布','url'=>'http://nc.hust.edu.cn/map/dq.php'),
	array('name'=>'档案查询','url'=>'http://profile.hust.edu.cn/'),
);
$sites[] = array('name'=>'服务', 'data'=>$sites_service);


//生活网站
$sites_department = array(
	array('name'=>'','url'=>''),
	array('name'=>'','url'=>''),
	array('name'=>'','url'=>''),
	array('name'=>'','url'=>''),
	array('name'=>'','url'=>''),
	array('name'=>'','url'=>''),
	array('name'=>'','url'=>''),
);

?>