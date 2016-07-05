<?php
/**
 * Created by PhpStorm.
 * User: whx
 * Date: 2016/7/5
 * Time: 9:34
 */
require_once '../database.php';
$op = $_GET['op'];
$id = $_GET['id'];

$conn = new database();

$sql = "UPDATE team SET stat = ".$op." WHERE id=".$id;

$conn->database_do($sql);
echo 1;
