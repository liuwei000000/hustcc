<?php 
$sites = array();
//热门网站
$sites_hot = array(
	array('name'=>'蝴蝶HUDBT','url'=>'https://www.kmgtp.org'),
	array('name'=>'华中大新闻网','url'=>'http://news.hustonline.net/'),
	array('name'=>'海投网|宣讲会','url'=>'http://xyzp.haitou.cc/'),
	array('name'=>'白云黄鹤BBS','url'=>'http://bbs.whnet.edu.cn/'),
	array('name'=>'华中大地图','url'=>'http://map.hustonline.net/'),
	array('name'=>'华中大图书馆','url'=>'http://www.lib.hust.edu.cn/'),
	array('name'=>'本科生就业网','url'=>'http://job.hust.edu.cn/show/index.html'),
	array('name'=>'研究生就业信息网','url'=>'http://career.hust.edu.cn/'),
	array('name'=>'华中大院系设置','url'=>'http://www.hust.edu.cn/SchoolProfiles4.html'),
);
$sites[] = array('name'=>'热门', 'data'=>$sites_hot);


//门户论坛网站
$sites_portal = array(
	array('name'=>'华中科技大学','url'=>'http://www.hust.edu.cn/'),
	array('name'=>'华中大在线','url'=>'http://www.hustonline.net/'),
	array('name'=>'华中大新闻网','url'=>'http://news.hustonline.net/'),
	array('name'=>'白云黄鹤','url'=>'http://bbs.whnet.edu.cn/'),
	array('name'=>'综合信息网','url'=>'http://e.hust.edu.cn/'),
	array('name'=>'化成天下','url'=>'http://hctx.univs.cn/index.jsp'),
	array('name'=>'醉晚亭','url'=>'http://www.zuiwan.net/'),
	array('name'=>'喻园晨光','url'=>'http://sunshine.hust.edu.cn/'),
	array('name'=>'华中大网视','url'=>'http://tv.hustonline.net/'),
	array('name'=>'视野网','url'=>'http://focus.hustonline.net/'),
	array('name'=>'华中大校友会','url'=>'http://xyh.hust.edu.cn/'),
	array('name'=>'华中大贴吧','url'=>'http://tieba.baidu.com/f?kw=huster'),
	array('name'=>'喻家山麓','url'=>'http://www.hustwb.net/'),
	array('name'=>'华科人BBS','url'=>'http://hzkj.haotui.com/'),
	array('name'=>'华科考研论坛','url'=>'http://hust.hykaoyan.org/'),
	array('name'=>'化成天下','url'=>'http://hctx.univs.cn/index.jsp'),
	array('name'=>'华中大新闻网','url'=>'http://news.hustonline.net/'),
	array('name'=>'华中大网视','url'=>'http://tv.hustonline.net/'),
	array('name'=>'视野网','url'=>'http://focus.hustonline.net/'),
);
$sites[] = array('name'=>'门户论坛', 'data'=>$sites_portal);

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

//生活服务网站
$sites_life = array(
	array('name'=>'自习室查询','url'=>'http://classroom.hustonline.net/'),
	array('name'=>'蝴蝶HUDBT','url'=>'http://www.kmgtp.org/'),
	array('name'=>'人文讲座','url'=>'http://uzone.univs.cn/schNewsList.action?univId=2566&fId=1733'),
	array('name'=>'Hust邮箱','url'=>'http://mail.hust.edu.cn/'),
	array('name'=>'大软坊','url'=>'http://app.hustonline.net/'),
	array('name'=>'校园问答iKonw','url'=>'http://ik.hustonline.net/'),
	array('name'=>'华中大二手市场','url'=>'http://hust.2shoujie.com/'),
	array('name'=>'白云黄鹤二手版','url'=>'http://bbs.whnet.edu.cn/cgi-bin/bbsnewtdoc?board=SecondHand'),
	array('name'=>'云U盘','url'=>'http://upan.hust.cc/'),
	array('name'=>'多彩活动','url'=>'http://duocaiii.com/'),
	array('name'=>'微访谈','url'=>'http://talk.hustonline.net/'),
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
$sites[] = array('name'=>'生活服务', 'data'=>$sites_life);

//团队Team
$sites_team = array(
	array('url'=>'http://www.auhust.net/', 'name'=>'社团网'),
	array('url'=>'http://www.bingyan.net/', 'name'=>'冰岩作坊'),
	array('url'=>'http://www.dian.org.cn/', 'name'=>'点团队'),
	array('url'=>'http://www.hustunique.com/', 'name'=>'联创团队'),
	array('url'=>'http://nadc.org.cn/', 'name'=>'网络研发中心'),
	array('url'=>'http://page.renren.com/601262757', 'name'=>'我为人人电脑服务队'),
	array('url'=>'http://page.renren.com/600005916', 'name'=>'校学生会'),
	array('url'=>'http://page.renren.com/600996187', 'name'=>'研究生会'),
	array('url'=>'http://page.renren.com/601062016', 'name'=>'大学生新闻中心'),
	array('url'=>'http://page.renren.com/600399260', 'name'=>'记者团'),
	array('url'=>'http://page.renren.com/600467166', 'name'=>'英语协会'),
	array('url'=>'http://page.renren.com/600007913', 'name'=>'远征协会'),
	array('url'=>'http://page.renren.com/601029092', 'name'=>'摄影协会'),
	array('url'=>'http://page.renren.com/670000096', 'name'=>'吉他协会'),
	array('url'=>'http://page.renren.com/600980319', 'name'=>'篮球协会'),
	array('url'=>'http://page.renren.com/600267571', 'name'=>'蓝天剧社'),
	array('url'=>'http://page.renren.com/601333274', 'name'=>'大学生辩论社'),
	array('url'=>'http://page.renren.com/601077055', 'name'=>'碧水环保协会'),
	array('url'=>'http://page.renren.com/601036155', 'name'=>'口语沙龙协会'),
	array('url'=>'http://page.renren.com/601071727', 'name'=>'书法协会'),
	array('url'=>'http://page.renren.com/600699473', 'name'=>'笛箫协会'),
	array('url'=>'http://page.renren.com/601317922', 'name'=>'华中篆刻社'),
	array('url'=>'http://page.renren.com/601051438', 'name'=>'键盘队'),
	array('url'=>'http://page.renren.com/600008534', 'name'=>'模特队'),
	array('url'=>'http://page.renren.com/601406000', 'name'=>'大学生科学技术协会'),
);
$sites[] = array('name'=>'社团', 'data'=>$sites_team);

//考研
$sites_kaoyan = array(
	array('url'=>'http://yz.chsi.com.cn/', 'name'=>'招生信息网'),
	array('url'=>'http://yz.chsi.com.cn/user/loginPub.jsp', 'name'=>'考研报名'),
	array('url'=>'http://edu.qq.com/y/', 'name'=>'腾讯考研'),
	array('url'=>'http://edu.sina.com.cn/kaoyan/index.shtml', 'name'=>'新浪考研'),
	array('url'=>'http://learning.sohu.com/kaoyan.shtml', 'name'=>'搜狐考研'),
	array('url'=>'http://edu.163.com/kaoyan/', 'name'=>'网易考研'),
	array('url'=>'http://kaoyan.eol.cn/', 'name'=>'中国教育在线考研'),
	array('url'=>'http://www.kaoyan.com/', 'name'=>'考研加油站'),
	array('url'=>'http://www.51test.net/kaoyan/', 'name'=>'无忧考研'),
	array('url'=>'http://www.exam8.com/xueli/kaoyan/', 'name'=>'考试吧考研'),
	array('url'=>'http://kaoyan.hjenglish.com/', 'name'=>'沪江考研'),
	array('url'=>'http://www.cnky.net/', 'name'=>'中国考研网'),
	array('url'=>'http://www.freekaoyan.com/', 'name'=>'免费考研网'),
	array('url'=>'http://www.kaoyantj.com/', 'name'=>'考研共济网'),
	array('url'=>'http://www.koolearn.com/kaoyan/', 'name'=>'新东方考研'),
	array('url'=>'http://bbs.kaoyan.com/', 'name'=>'考研论坛'),
	array('url'=>'http://bbs.freekaoyan.com/forum.php', 'name'=>'免费考研论坛'),
	array('url'=>'http://bbs.pinggu.org/', 'name'=>'人大经济论坛'),
	array('url'=>'http://www.1zhao.org/forum.php', 'name'=>'知识宝库论坛'),
	array('url'=>'http://bbs.whnet.edu.cn/cgi-bin/bbsnewtdoc?board=KAOYAN', 'name'=>'白云黄鹤考研版'),
);
$sites[] = array('name'=>'考研', 'data'=>$sites_kaoyan);


//公开课
$sites_course = array(
	array('url'=>'http://open.163.com/', 'name'=>'网易公开课'),
	array('url'=>'http://open.sina.com.cn/', 'name'=>'新浪公开课'),
	array('url'=>'http://tv.sohu.com/open/', 'name'=>'搜狐公开课'),
	array('url'=>'http://v.qq.com/zt2011/open/index.htm', 'name'=>'腾讯公开课'),
	array('url'=>'http://www.iqiyi.com/jilupian/gkk.html', 'name'=>'爱奇艺公开课'),
	array('url'=>'http://edu.youku.com/open', 'name'=>'优酷公开课'),
	array('url'=>'http://zone.tudou.com/opencourses-new/', 'name'=>'土豆公开课'),
	array('url'=>'http://www.icourses.edu.cn/', 'name'=>'中国大学视频公开课'),
	array('url'=>'http://www.hjenglish.com/new/zt/gongkaike/', 'name'=>'沪江公开课'),
	array('url'=>'http://oyc.yale.edu/', 'name'=>'耶鲁大学公开课'),
	array('url'=>'http://www.core.org.cn/OcwWeb/Global/all-courses.htm', 'name'=>'麻省理工学院公开课'),
	array('url'=>'http://oli.cmu.edu/', 'name'=>'卡耐基梅隆大学公开课'),
	array('url'=>'http://ci.columbia.edu/ci/', 'name'=>'哥伦比亚大学公开课'),
	array('url'=>'http://www.alllearn.org/', 'name'=>'AllLearn公开课'),
	array('url'=>'http://www.cs.washington.edu/education/courses/', 'name'=>'华盛顿大学公开课'),
	array('url'=>'http://ocw.tufts.edu/', 'name'=>'塔夫茨大学公开课'),
	array('url'=>'http://www.open.edu/openlearn/tags', 'name'=>'英国大学公开课'),
	array('url'=>'http://ocw.nd.edu/', 'name'=>'圣母大学公开课'),
	array('url'=>'http://ocw.nctu.edu.tw/', 'name'=>'国立交通大学公开课'),
);
$sites[] = array('name'=>'公开课', 'data'=>$sites_course);


//找工作
$sites_work = array(
	array('url'=>'http://www.51job.com/', 'name'=>'前程无忧'),
	array('url'=>'http://www.zhaopin.com/', 'name'=>'智联招聘网'),
	array('url'=>'http://www.chinahr.com/', 'name'=>'中华英才网'),
	array('url'=>'http://www.dajie.com/', 'name'=>'大街网'),
	array('url'=>'http://xiaozhao.renren.com/', 'name'=>'人人校招'),
	array('url'=>'http://www.yjbys.com/', 'name'=>'应届毕业生'),
	array('url'=>'http://www.yingjiesheng.com/', 'name'=>'应届生求职网'),
	array('url'=>'http://www.guolairen.com/', 'name'=>'过来人求职网'),
	array('url'=>'http://www.job9151.com/', 'name'=>'高校就业联盟'),
	array('url'=>'http://www.hiall.com.cn/', 'name'=>'hiall校园招聘'),
	array('url'=>'http://www.jingchurc.com/', 'name'=>'荆楚人才网'),
	array('url'=>'http://www.111job.cn/', 'name'=>'华中人才网'),
	array('url'=>'http://www.job98.com/', 'name'=>'武汉人才网'),
	array('url'=>'http://opendata.baidu.com/zhaopin/', 'name'=>'百度招聘搜索'),
	array('url'=>'http://xyzp.haitou.cc/', 'name'=>'海投宣讲会'),
	array('url'=>'http://xn--jmrs87b01bgw1a.xn--fiqs8s/', 'name'=>'简历模板'), 
);
$sites[] = array('name'=>'找工作', 'data'=>$sites_work);



?>