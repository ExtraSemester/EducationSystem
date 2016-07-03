<?php
class database{
	private $mysql_db,
			$mysql_host,
			$mysql_password,
			$mysql_port,
			$mysql_user,
			$connect;
	public function __construct(){
		$this->mysql_host = 'localhost';
		$this->mysql_db = 'jiaowudb';
		$this->mysql_user = 'jiaowu';
		$this->mysql_password = 'mima';
		$this->mysql_port = 3306;
		$this -> connect_to_db();
	}
	public function __destruct(){
		$this -> connect = NULL;
	}
	public function connect_to_db(){
		$dns = 'mysql:host='.$this->mysql_host.";port=".$this->mysql_port.";dbname=".$this->mysql_db;
		try{
			$this->connect = new PDO($dns, $this->mysql_user,$this->mysql_password);
		}
		catch (PDOException $e) {
    		print "Error!: " . $e->getMessage() . "<br/>";
    		die();
		}
	}
	public function database_do($command)
	{
		$this->connect->exec($command);
	}
	
	public function database_get($command)
	{
		$result = $this->connect->prepare($command);
		$result->execute();
		$value = $result->fetchAll(PDO::FETCH_ASSOC);
		return $value;
	}
}

?>
