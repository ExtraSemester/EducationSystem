<?php
/**
 * Created by PhpStorm.
 * User: 王琦
 * Date: 2016/7/8
 * Time: 16:37
 */

require_once '../database.php';
$db = new database();
$op = $_GET['op'];
$id = $_GET['id'];
$sql = "UPDATE team_student SET state = ".$op." WHERE student_id=".$id;

$db->database_do($sql);
echo 1;