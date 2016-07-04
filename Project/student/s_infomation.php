<?php
/**
 * Created by PhpStorm.
 * User: 王琦
 * Date: 2016/7/4
 * Time: 15:21
 */

    //防止显示到浏览器时乱码
    header('Content-Type:text/html; charset=utf-8;');

    header('Content-Type:text/json');

    session_start();
    if(isset($_SESSION["userid"])) {
        require_once '../database.php';
        $db = new database();
        $username = "王支书";
        $user_id = $_SESSION["userid"];
        $student_info = $db->database_get("SELECT name, student_id FROM student WHERE student_id=$user_id");
        //echo $student_info[0]['name'], $student_info[0]['student_id'];
        $stu_data = array($student_info[0]['name'], $student_info[0]['student_id']);
        echo json_encode($stu_data);
        
    }
    else {
        echo "用户未登录!";
    }


