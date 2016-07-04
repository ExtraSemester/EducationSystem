<?php
/**
 * Created by PhpStorm.
 * User: 王琦
 * Date: 2016/7/4
 * Time: 9:57
 */

    require_once './database.php';
    //防止显示到浏览器时乱码
    header('Content-Type:text/html; charset=utf-8;');

    //告诉接收数据的对象此页面输出的是json数据
    header('Content-Type:text/json');

    $db = new database();
    //$db->connect_to_db();

    $result = $db->database_get("SELECT id,name FROM class WHERE id in (SELECT class_id FROM class_student WHERE student_id=13212000)");
    $count = count($result);
    for ($i=0;$i<$count;$i++) {

        //echo json_encode($result);
        $course_data[$i] = array($result[$i]['id'], $result[$i]['name']);
        echo json_encode($course_data[$i]);
    }


    /*
    //课程-学生表
    $table1 = 'class_student';
    $field1 = 'class_id';
    $keys = array('student_id'=> 13212001);

    //得到学生选择课程的id
    $course_id = array();
    $result1 = $db->select_data($table1, $field1, $keys);
    $count1 = count($result1);
    for ($i=0;$i<$count1;$i++) {
        $course_id[$i] = $result1[$i]['class_id'];
    }

    echo $course_id;


    //在课程表中利用上次操作得到的course_id查询课程名称
    $result2 = array();
    $table2 = 'class';
    $field2 = 'name';
    */










    





    
    

    
