<?php
/**
 * Created by PhpStorm.
 * User: whx
 * Date: 2016/7/8
 * Time: 17:10
 */
header('Content-Type:text/html; charset=utf-8;');
require_once '../database.php';

$conn = new database();

session_start();
$team_id = $_GET['team_id'];
$student_id = $_SESSION['user_id'];

$sql = "insert into team_student values($team_id,$student_id,0);";
$t_s = $conn->database_get("select team_id from team_student where student_id=$student_id;");

if(count($t_s) == 0){
    $conn->database_do($sql);
    echo "<script type='text/javascript'> alert(\"已申请，请等待审核\")
    location='s_team_join.php'</script>";
}else {
    echo "<script type='text/javascript'> alert('本门课你已申请过团队')
    location='s_team_join.php'</script>";
}


