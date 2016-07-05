<html>
<meta http-equiv="refresh" content="1; url=teacher-class-file.php"> 
<?php 
	if ($_FILES["file"]["error"] > 0)
    {
		echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
	else
    {
		$route=$_POST['route2'];
		

		//if($class_name==null)
		{
			$class_name="生产实习";
		}
		$real_route="./data/".$class_name."/$route";

		move_uploaded_file($_FILES["file"]["tmp_name"],$real_route.$_FILES["file"]["name"]);

		if(file_exists($real_route.$_FILES["file"]["name"]))
		{
			echo "上传成功";
		}
		else
		{
			echo "上传失败";
		}
    }
?>
</html>