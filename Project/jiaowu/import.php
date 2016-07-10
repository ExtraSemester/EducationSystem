<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php

require_once '../Classes/PHPExcel/IOFactory.php';
require_once '../database.php';

	if ($_FILES["file"]["error"] > 0)
    {
		echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
	else
    {
		$succeed=true;
		$choose=$_POST['choose'];
		if($_FILES["file"]["name"][strlen($_FILES["file"]["name"])-1]=='s')
		{
			$reader = new PHPExcel_Reader_Excel5(); 
		}
		else
		{
			echo "无法识别的文件，仅支持xls";
		}
		$PHPExcel = $reader->load($_FILES["file"]["tmp_name"]); // 载入excel文件
		$sheet = $PHPExcel->getSheet(0); // 读取第一個工作表
		$highestRow = $sheet->getHighestRow(); // 取得总行数
		$highestColumm = $sheet->getHighestColumn(); // 取得总列数
		
		$mdb=new database();
		
		if($choose=='student')
		{
			for ($row = 2; $row <= $highestRow; $row++)
			{
				$mdb->database_do('insert into student(name,password,student_id,sex,grade)values("'.$sheet->getCell('A'.$row)->getValue().'","'.$sheet->getCell('B'.$row)->getValue().'","'.$sheet->getCell('C'.$row)->getValue().'","'.$sheet->getCell('D'.$row)->getValue().'",'.$sheet->getCell('E'.$row)->getValue().')');
			}
		}
		else if($choose=="teacher")
		{
			for ($row = 2; $row <= $highestRow; $row++)
			{
				$mdb->database_do('insert into teacher(name,password,employee_id)values("'.$sheet->getCell('A'.$row)->getValue().'","'.$sheet->getCell('B'.$row)->getValue().'","'.$sheet->getCell('C'.$row)->getValue().'")');
			}
		}
		else if($choose=="class")
		{
			for ($row = 2; $row <= $highestRow; $row++)
			{
				$mdb->database_do('insert into class(name,start_week,end_week,time,place)values("'.$sheet->getCell('A'.$row)->getValue().'",'.$sheet->getCell('B'.$row)->getValue().','.$sheet->getCell('C'.$row)->getValue().',"'.$sheet->getCell('D'.$row)->getValue().'","'.$sheet->getCell('E'.$row)->getValue().'")');
			}
		}
		else if($choose=="class_teacher")
		{
			for ($row = 2; $row <= $highestRow; $row++)
			{
				$class_name=$sheet->getCell('B'.$row)->getValue();
				$teacher_id=$sheet->getCell('A'.$row)->getValue();
				$res=$mdb->database_get('select id from class where name="'.$class_name.'"');
				$class_id=$res[0]['id'];
				if($class_id==null)
				{
					echo "不存在名为\"".$class_name."\"的课程";
					$succeed=false;
				}
				$res=$mdb->database_get('select id from teacher where employee_id="'.$teacher_id.'"');
				$s_id=$res[0]['id'];
				if($s_id==null)
				{
					echo "不存在职工号为\"".$teacher_id."\"的教师";
					$succeed=false;
				}
				$mdb->database_do('insert into class_teacher values('.$class_id.','.$s_id.')');
			}
		}
		else if($choose=="class_student")
		{
			for ($row = 2; $row <= $highestRow; $row++)
			{
				$class_name=$sheet->getCell('A'.$row)->getValue();
				$student_id=$sheet->getCell('B'.$row)->getValue();
				$res=$mdb->database_get('select id from class where name="'.$class_name.'"');
				$class_id=$res[0]['id'];
				if($class_id==null)
				{
					echo "不存在名为\"".$class_name."\"的课程";
					$succeed=false;
				}
				$res=$mdb->database_get('select id from student where student_id="'.$student_id.'"');
				$s_id=$res[0]['id'];
				if($s_id==null)
				{
					echo "不存在学号为\"".$student_id."\"的学生";
					$succeed=false;
				}
				$mdb->database_do('insert into class_student values('.$class_id.','.$s_id.')');
			}
		}
		if($succeed)
		{
			$num=$highestRow-1;
			echo "信息导入成功，共:".$num."条";
		}
		else
		{
			echo "信息导入失败！";
		}
    }	
?>

</html>