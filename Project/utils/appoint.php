<?php
/**
 * Created by PhpStorm.
 * User: 王琦
 * Date: 2016/7/8
 * Time: 16:41
 */

require_once '../database.php';
$db=new database();
$id = $_GET['id'];
//$pre_id = 3;

$result = $db->database_get("select admin_id from team where id=(select team_id from team_student where student_id=$id)");
$pre_admin_id = $result[0]['admin_id'];
$sql1 = "update student set status=2 where id=$id";
$db->database_do($sql);

$sql2 = "update student set status=1 where id=$pre_admin_id";
$db->database_do($sql);