<?php
    header('Content-Type:text/html; charset=utf-8;');

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
		$real_route="../teacher-class/homework/".$work_id."/";

        $file_name = $_FILES["file"]["name"];
        $title = $real_route.$file_name;

        //如果作业已提交则覆盖原文件
        $work_files = $conn->database_get("select id from work_file where student_id=$student_id and work_id=$work_id");
        if($work_files){
            $work_file_id = $work_files[0]['id'];
            //echo $work_file_id;
            $conn->database_do("update work_file set title='$file_name' where id=$work_file_id");
        }else{
            $sql = "INSERT INTO work_file(title,student_id,work_id,class_id) VALUES ('$file_name',$student_id,$work_id,$class_id)";
            $conn->database_do($sql);

            //更新提交状态
            $work = $conn->database_get("select kind from work where id=$work_id");
            //更新每个团队成员的提交状态
            //echo $work[0]['kind'];
            if($work[0]['kind']==2){
                $stus = $conn->database_get("select student_id from team_student where 
team_id=(select id from team where admin_id=$student_id and class_id=$class_id)");
                //echo count($stus);
                for($i=0;$i<count($stus);$i++){
                    $stu_id = $stus[$i]['student_id'];
//echo $stu_id;
                    $conn->database_do("update work_student set state=1 where work_id=$work_id and student_id=$stu_id");
                }

            }else{
                $conn->database_do("update work_student set state=1 where work_id=$work_id and student_id=$student_id");
            }
        }

		move_uploaded_file($_FILES["file"]["tmp_name"],iconv('utf-8','gbk',$title));
//echo $file_name;
        echo "<script type='text/javascript'>alert('提交成功')
location=\"s_homework.php\"</script>";
    }
?>