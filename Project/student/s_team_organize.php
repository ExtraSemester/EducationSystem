<?php
/**
 * Created by PhpStorm.
 * User: MSI
 * Date: 2016/7/8
 * Time: 15:37
 */
header('Content-Type:text/html; charset=utf-8;');
require_once '../database.php';

$db = new database();

//创建团队需要的团队信息
$team_name=$_GET["team_name"];
$team_number=$_GET["team_number"];
$admin_id = $_GET['admin_id'];
$class_id = $_GET['class_id'];

$search_team_name=$db->database_get("select id from team where name='$team_name'");
if(count($search_team_name)==0) {

    $sql = "insert into team(name,number,admin_id,class_id,stat,status) values('$team_name',$team_number,$admin_id,$class_id,0,1)";
    //将新team插入
    $db->database_do($sql);
    $team = $db->database_get("select id from team where admin_id=$admin_id");

    $team_id = $team[0]['id'];
    //将团队负责人插入到team_student表
    $db->database_do("insert into team_student VALUES($team_id,$admin_id,1)");

    //将创建者身份改为团队负责人
    $db->database_do("update student set status=2 where id=$admin_id");

    echo "<script type='text/javascript'>alert('团队创建成功,请等待审核！')</script>";
    echo "<script type='text/javascript'>location='course_team.php';</script>";
}
else{
    echo "<script type='text/javascript'>alert('该团队名字已有人使用，请重新输入！')
    location='s_team_join.php'</script>";
}
