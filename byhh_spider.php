<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
require_once('data/class.mysql.inc.php');
require_once('data/class.byhh.inc.php');
$byhhDao = new ByhhDao();

$xml = file_get_contents('http://bbs.whnet.edu.cn/xml/posttop10.xml');
$xml = simplexml_load_string($xml);
$json = json_encode($xml);
$array = json_decode($json, TRUE);
for ($i = 0; $i < count($array['post']); $i ++) {
	$url = "http://bbs.whnet.edu.cn/cgi-bin/bbsnewtcon?board=".$array['post'][$i]['board']."&file=".$array['post'][$i]['file'];
	$byhhDao->insert($i, $array['post'][$i]['title'], $url);
}

$n = isset($_GET['n'])? $_GET['n'] : 0;

if ($n == 0) {
	echo "<script>location.href='http://www.hust.cc/';</script>";
}
else {
	//for sina weibo 华中大导航网
	$n = 4;
	$str = '';
	$byhh_top10 = $byhhDao->findAll();
	$byhh_len = count($byhh_top10);
	if ($byhh_top10 != null && $byhh_len > 0) {
		for ($i = 0; $i < $byhh_len; $i ++) {
			if ($i >= $n) {
				break;
			}
			$str = $str . ($byhh_top10[$i]['by_id'] + 1) .'.' . $byhh_top10[$i]['by_title'] . $byhh_top10[$i]['by_url'] . '[推荐]';
		}
	}
	echo '#白云黄鹤十大# ' . $str . ' @华中大导航网 十大详见 http://www.hust.cc/';
}
Mysql::close();

?>