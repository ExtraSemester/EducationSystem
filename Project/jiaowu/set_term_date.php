<?php
/**
 * Created by PhpStorm.
 * User: whx
 * Date: 2016/7/9
 * Time: 9:18
 */

//防止显示到浏览器时乱码
header('Content-Type:text/html; charset=utf-8;');

require_once '../database.php';

$conn = new database();

session_start();
$term_id = $_SESSION['term_id'];

$start_date = $_GET['start_date'];
$end_date = $_GET['end_date'];

$sql = "update terms set start_date = '$start_date',end_date = '$end_date' where id = $term_id";

$conn->database_do($sql);
//echo $sql;
echo "<script>alert('设置成功')
location='setterms.php'</script>";