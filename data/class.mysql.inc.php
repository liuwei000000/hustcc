<?php

define('DB_NAME', 'hust_cc');
define('DB_USER', 'root');
define('DB_PASSWORD', 'secret');
define('DB_HOST', 'secret');
define('DB_CHARSET', 'UTF8');

/**
 * ���ݿ����ӣ��ر���
 * @author Xewee.Zhiwei.Wang
 */
class Mysql {
	public static $CONN = null;
	/**
	 * ��ʼ�����캯�����������ݿ�
	 * 2012-5-2 ����10:13:52
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
		//sqlΪ�գ�����false
		if (empty($sql)) {
			return false;
		}
          	//��������������ݿ��ѯ
		//����Ϊ�գ�����false
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
	 * ��ѯ
	 * 2012-5-2 ����10:21:10
	 * Xewee.Zhiwei.Wang
	 * @return false ���߶�ά����
	 */
	public function exec_query($sql = "") {
		//sqlΪ�գ�����false
		if (empty($sql)) {
			return false;
		}
		if (empty(Mysql::$CONN)) {
			return false;
		}
		//��ѯ���ݿ⣬�����쳣
		try {
			$result = mysql_query($sql, Mysql::$CONN);
                        
		} catch (Exception $e) {
		}
		//��ѯ���Ϊ��
		if ((! $result) or (empty($result))) {
			@mysql_free_result($result);
			return false;
		}
		$data = array();
		//����ѯ���ݷŵ�������
		while ($row = @mysql_fetch_array($result, MYSQL_ASSOC)) {
			$data[] = $row;
		}
		@mysql_free_result($result);
		return $data;
	}
	
	/**
	 * ��������
	 * 2012-5-2 ����10:20:18
	 * Xewee.Zhiwei.Wang
	 */
	public function beginTrans() {
		mysql_query("set autocommit=0");
		mysql_query("begin");
	}
	/**
	 * �ع�
	 * 2012-5-2 ����10:20:28
	 * Xewee.Zhiwei.Wang
	 */
	public function rollBack() {
		mysql_query("rollback");
	}
	/**
	 * �ύ
	 * 2012-5-2 ����10:20:31
	 * Xewee.Zhiwei.Wang
	 */
	public function commit() {
		mysql_query("commit");
	}
	
	/**
	 * �ر�����
	 */
	public static function close() {
		if (! empty(Mysql::$CONN)) {
			mysql_close(Mysql::$CONN);
			Mysql::$CONN = null;
		}
	}
}
?>