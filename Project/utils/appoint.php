<?php
/**
 * Created by PhpStorm.
 * User: 王琦
 * Date: 2016/7/8
 * Time: 16:41
 */
require_once '../database.php';
$db=new database();
$stu_id = $_GET['stu_id'];
$team_id = $_GET['team_id'];

//$stu_id = 2;
//$team_id = 5;

$result = $db->database_get("select admin_id from team where id=$team_id;");
$pre_admin_id = $result[0]['admin_id'];
//var_dump($result);
//echo $pre_admin_id;

//$sql1 = "update student set status=2 where id=$stu_id;";
////更新student表
//$db->database_do($sql1);

//echo $sql1;
//更新team表
$db->database_do("update team set admin_id=$stu_id where admin_id=$pre_admin_id;");
//echo "update team set admin_id=$stu_id where admin_id=$pre_admin_id;";


//$sql2 = "update student set status=1 where id=$pre_admin_id";
////echo $sql2;
//$db->database_do($sql2);

echo 1;