<?php 
	if ($_FILES["fileToUpload"]["error"] > 0)
    {
		echo "Return Code: " . $_FILES["fileToUpload"]["error"] . "<br />";
    }
	else
    {
		echo "Upload: " . $_FILES["fileToUpload"]["name"] . "<br />";
		echo "Type: " . $_FILES["fileToUpload"]["type"] . "<br />";
		echo "Size: " . ($_FILES["fileToUpload"]["size"] / 1024) . " Kb<br />";
		echo "Temp file: " . $_FILES["fileToUpload"]["tmp_name"] . "<br />";

		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"data/".$_FILES["fileToUpload"]["name"]);
    }
?>
