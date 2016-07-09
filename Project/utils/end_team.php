<?php
/**
 * Created by PhpStorm.
 * User: 王琦
 * Date: 2016/7/8
 * Time: 19:10
 */

require_once '../database.php';
$db = new database();

$team_id = $_GET['id'];
$sql = "update team set status=2 where id=$team_id";

$db->database_do($sql);

echo 1;