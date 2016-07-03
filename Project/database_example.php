<?php

	//防止显示到浏览器时乱码
	header('Content-Type:text/html; charset=utf-8;');

	require_once 'database.php';

	$db = new database();

	$table = 'student';
	$field = 'grade, sex';
	$keys = array('name'=>'Marry');

	$result = $db->select_data($table,$field,$keys);

	if($result != null){
		var_dump($result);
	}else {

		$values = array('name'=>'Marry','password'=>'123456',
			'student_id'=>'1321','sex'=>'女','grade'=>2013);

		$db->insert_to_db($table,$values);
		echo '插入成功';
	}

?>