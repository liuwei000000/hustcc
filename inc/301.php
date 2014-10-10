<?php
//=====301===========
$the_host = $_SERVER ['HTTP_HOST']; // 取得进入所输入的域名
$request_uri = isset ( $_SERVER ['REQUEST_URI'] ) ? $_SERVER ['REQUEST_URI'] : ''; // 判断地址后面部分
// if ($the_host !== '50vip.com' && $the_host !== 'googol.duapp.com') {
if ($the_host !== 'www.hust.cc') {
	if (strstr($request_uri, 'index.php')) {
		$request_uri = str_replace('index.php', '', $request_uri);//将首页index.php跳转到默认
	}
	header ( 'HTTP/1.1 301 Moved Permanently' ); // 发出301头部
	header ( 'Location: http://www.hust.cc' . $request_uri ); // 跳转到我的新域名地址
}
else {
	if (strstr($request_uri, 'index.php')) {
		$request_uri = str_replace('index.php', '', $request_uri);//将首页index.php跳转到默认
		header ( 'HTTP/1.1 301 Moved Permanently' ); // 发出301头部
		header ( 'Location: http://www.hust.cc' . $request_uri ); // 跳转到我的新域名地址
	}
}
//========301=====
?>
