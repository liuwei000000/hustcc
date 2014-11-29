<?php

define('DB_NAME', 'hust_cc');
define('DB_USER', 'root');
define('DB_PASSWORD', 'secret');
define('DB_HOST', 'secret');
define('DB_CHARSET', 'UTF8');

/**
 * 数据库连接，关闭类
 * @author Xewee.Zhiwei.Wang
 */
class Mysql {
	public static $CONN = null;
	/**
	 * 初始化构造函数，连接数据库
	 * 2012-5-2 上午10:13:52
	 * Xewee.Zhiwei.Wang
	 */
	public function __construct() {
		try {
			if (empty(Mysql::$CONN)) {
				Mysql::$CONN = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD );
				mysql_select_db (DB_NAME, Mysql::$CONN);
				mysql_query ('set names ' . DB_CHARSET);
			}
		} catch ( Exception $e ) {
			$msg = $e;
			include (ERROR_PAGE);
		}
	}
	
	public function exec_update($sql = "") {
		//sql为空，返回false
		if (empty($sql)) {
			return false;
		}
          	//其他情况采用数据库查询
		//连接为空，返回false
		if (empty(Mysql::$CONN)) {
			return false;
		}
		try {
			$result = mysql_query($sql, Mysql::$CONN);
		} catch (Exception $e) {
			//todo
		}
		return $result;
	}
	
	/**
	 * 查询
	 * 2012-5-2 上午10:21:10
	 * Xewee.Zhiwei.Wang
	 * @return false 或者二维数组
	 */
	public function exec_query($sql = "") {
		//sql为空，返回false
		if (empty($sql)) {
			return false;
		}
		if (empty(Mysql::$CONN)) {
			return false;
		}
		//查询数据库，捕获异常
		try {
			$result = mysql_query($sql, Mysql::$CONN);
                        
		} catch (Exception $e) {
		}
		//查询结果为空
		if ((! $result) or (empty($result))) {
			@mysql_free_result($result);
			return false;
		}
		$data = array();
		//将查询数据放到数组中
		while ($row = @mysql_fetch_array($result, MYSQL_ASSOC)) {
			$data[] = $row;
		}
		@mysql_free_result($result);
		return $data;
	}
	
	/**
	 * 定义事务
	 * 2012-5-2 上午10:20:18
	 * Xewee.Zhiwei.Wang
	 */
	public function beginTrans() {
		mysql_query("set autocommit=0");
		mysql_query("begin");
	}
	/**
	 * 回滚
	 * 2012-5-2 上午10:20:28
	 * Xewee.Zhiwei.Wang
	 */
	public function rollBack() {
		mysql_query("rollback");
	}
	/**
	 * 提交
	 * 2012-5-2 上午10:20:31
	 * Xewee.Zhiwei.Wang
	 */
	public function commit() {
		mysql_query("commit");
	}
	
	/**
	 * 关闭连接
	 */
	public static function close() {
		if (! empty(Mysql::$CONN)) {
			mysql_close(Mysql::$CONN);
			Mysql::$CONN = null;
		}
	}
}
?>