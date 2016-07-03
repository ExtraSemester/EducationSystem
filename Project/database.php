<?php
class database{
	private $mysql_db,
			$mysql_host,
			$mysql_password,
			$mysql_user,
			$mysql_port,
			$connect;
	public function __construct(){
		$this->mysql_host = 'localhost';
		$this->mysql_db = 'edu_sys';
		$this->mysql_user = 'root';
		$this->mysql_password = '';//你的MySQL密码
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

	/**
	 * 插入数据的方法
	 * @param $table_name 表名
	 * @param $values 字段名和值的数组
	 */
	public function insert_to_db($table_name,$values){

		extract($values);

		switch ($table_name){
			case 'admin':
				break;
			case 'teacher':
				break;
			case 'student':
				$this->insert_data_to_student($name,$password,$student_id,$sex,$grade);
				break;
			case 'class':
				$this->insert_data_to_class($name,$start_week,$end_week,$time,$place,$state);
				break;
			case 'class_student':
				$this->insert_data_class_student($class_id,$student_id);
				break;
			case 'class_teacher':
				$this->insert_data_class_teacher($class_id,$teacher_id);
				break;
			case 'team':
				$this->insert_data_to_team($name,$admin_id,$class_id,$stat);
				break;
			case 'data':
				$this->insert_data_to_data($class_id,$position);
				break;
			case 'team_student':
				$this->insert_data_team_student($team_id,$student_id);
				break;
			case 'work':
				$this->insert_data_to_work($content,$class_id,$kind,$start_time,$end_time);
				break;
			case 'student_work':
				$this->insert_data_student_work($work_id,$student_id,$comment,$grade);
				break;
			case 'team_work':
				$this->insert_data_team_work($work_id,$team_id,$comment,$grade);
				break;
			case 'talk':
				$this->insert_data_to_talk($class_id,$comment,$time);
				break;
		}

	}

	/**
	 * 数据库查询方法
	 * @param $table 表名
	 * @param $field 要查询的字段
	 * @param $keys  查询条件的数组
	 * @return mixed 返回查询结果
	 */
	public function select_data($table,$field,$keys)
	{
		$keys_index = array_keys($keys);
		$str = 'WHERE ';
		foreach ($keys_index as $key){
			$str = $str."$key like '$keys[$key]' AND ";
		}
		
		$str = substr($str,0,-4);
		
		$result = $this->connect->prepare("SELECT $field FROM $table ".$str);
		$result->execute();
		$value = $result->fetchAll(PDO::FETCH_ASSOC);
		return $value;
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
	
	private function insert_data_to_student($name,$password,$student_id,$sex,$grade){
		$this->connect->exec("INSERT INTO student(name,password,student_id,sex,grade) VALUES".
			"('$name','$password','$student_id','$sex','$grade')");
	}
	private function insert_data_to_class($name,$start_week,$end_week,$time,$place,$state){
		$this->connect->exec("INSERT INTO class(name,start_week,end_week,time,place,state) VALUES".
			"('$name','$start_week','$end_week','$time','$place','$state')");
	}
	private function insert_data_class_student($class_id,$student_id){
		$this->connect->exec("INSERT INTO class_student(class_id,student_id) VALUES"
			."('$class_id','$student_id')");
	}
	private function insert_data_class_teacher($class_id,$teacher_id){
		$this->connect->exec("INSERT INTO class_teacher(class_id,student_id) VALUES"
			. "('$class_id','$teacher_id')");
	}
	private function insert_data_to_team($name,$admin_id,$class_id,$stat){
		$this->connect->exec("INSERT INTO team(name,admin_id,class_id,stat) VALUES"
			. "('$name','$admin_id','$class_id','$stat')");
	}
	private function insert_data_to_data($class_id,$position){
		$this->connect->exec("INSERT INTO team(class_id,postiton) VALUES"
			. "('$class_id','$position')");
	}
	private function insert_data_team_student($team_id,$student_id){
		$this->connect->exec("INSERT INTO team_student(team_id,student_id) VALUES"
			."('$team_id','$student_id')");
	}
	private function insert_data_to_work($content,$class_id,$kind,$start_time,$end_time){
		$this->connect->exec("INSERT INTO work(content,class_id,kind,start_time,end_time) VALUES"
			."('$content','$class_id','$kind','$start_time','$end_time')");
	}
	private function insert_data_student_work($work_id,$student_id,$comment,$grade){
		$this->connect->exec("INSERT INTO student_work(work_id,student_id,comment,grade) VALUES"
			."('$work_id','$student_id','$comment','$grade')");
	}
	private function insert_data_team_work($work_id,$team_id,$comment,$grade){
		$this->connect->exec("INSERT INTO team_work(work_id,team_id,comment,grade) VALUES"
			."('$work_id','$team_id','$comment','$grade')");
	}
	private function insert_data_to_talk($class_id,$comment,$time){
		$this->connect->exec("INSERT INTO talk(class_id,comment,time) VALUES"
			."('$class_id','$comment','$time')");
	}

}

?>
