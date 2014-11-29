<?php
require_once 'class.mysql.inc.php';

class ByhhDao extends Mysql {
	public function __construct() {
		parent::__construct();
	}
	public function findAll() {
		$sql = "select * from byhh_top10 order by by_id asc;";
		return $this->exec_query($sql);
	}
    public function insert($by_id, $by_title, $by_url) {
		$sql = "insert into byhh_top10(by_id, by_title, by_url) values ('$by_id', '$by_title', '$by_url') ON DUPLICATE KEY UPDATE by_title = '$by_title', by_url = '$by_url';";
		return $this->exec_update($sql);
    }
}

?>