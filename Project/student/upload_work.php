/**
 * Created by PhpStorm.
 * User: whx
 * Date: 2016/7/6
 * Time: 23:51
 */
<html>
<meta http-equiv="refresh" content="0; url=s_homework.php
<?php

    require_once '../database.php';

    $conn = new database();

	if ($_FILES["file"]["error"] > 0)
    {
		echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
	else
    {
		//$route=$_POST['route'];
		//echo '?route='.$route.'">' ;
        session_start();
        $student_id = $_SESSION['user_id'];
		$class_id = $_SESSION['class_id'];
        $work_id = $_GET['work_id'];

        $result = $conn->database_get("SELECT name FROM class WHERE id=$class_id");
        $class_name = $result[0]['name'];
        //echo "R".$route."S".$class_name;
		if($class_name==null)
		{
			$class_name="生产实习";
		}
		$real_route="../teacher-class/data/".$class_name."/work/";

        $title = $real_route.$_FILES["file"]["name"];

		move_uploaded_file($_FILES["file"]["tmp_name"],$title);

        $sql = "INSERT INTO work_file(title,student_id,work_id) VALUES ('$title',$student_id,$work_id)";
        $conn->database_do($sql);
        
    }
?>
</html>