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

$sql = "update student set status=2 where student_id=$id";
$db->database_do($sql);