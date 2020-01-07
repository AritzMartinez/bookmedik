<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="bba281c5d73d88";$this->pass="ae3c643f";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_3deb6b65844a8a8";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
