<?php
class DaoUtil{
	private static $instance = null;
	private $connect;
	private function __construct(){
		$URL = "localhost";
		$USER = "u112044242_admdb";
		$PASSWORD = "OswkoQ:Ehss5ttFkiO";
		$DATABASE = "u112044242_locdb";
		$this->connect = mysqli_connect($URL, $USER, $PASSWORD, $DATABASE) or print (mysql_error()); 
	}
	public static function getInstance(){
		if(self::$instance == null){
			self::$instance = new DaoUtil();
		}
		return self::$instance;
	}
	public function getResult($query){
		$return = null;
		$result = mysqli_query($this->connect, $query);
		while($linha = mysqli_fetch_array($result)) {
			$return[]=$linha;
		}
		mysqli_free_result($result);
		return $return;
	}
	public function insert($query){
		$return = null;
		mysqli_query($this->connect, $query);
		return mysqli_insert_id($this->connect);
	}
	public function remove($query){
		$return = null;
		return mysqli_query($this->connect, $query);
	}
} 
?>
