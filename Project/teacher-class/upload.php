<html>
<meta http-equiv="refresh" content="0; url=teacher-class-file.php"> 
<?php 
	if ($_FILES["file"]["error"] > 0)
    {
		echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
	else
    {
		$route=$_POST['route2'];
		$class_name=$_POST['class_name2'];
echo "R".$route."S".$class_name;
		if($class_name==null)
		{
			$class_name="生产实习";
		}
		$real_route="./data/".$class_name."/$route";

		move_uploaded_file($_FILES["file"]["tmp_name"],$real_route.$_FILES["file"]["name"]);
    }
?>
</html>