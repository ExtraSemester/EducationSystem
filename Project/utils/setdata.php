<?php
/**
 * Created by PhpStorm.
 * User: whx
 * Date: 2016/7/3
 * Time: 22:33
 */

    //防止显示到浏览器时乱码
    header('Content-Type:text/html; charset=utf-8;');

    require_once '../database.php';

    $db = new database();

    $xing = array('赵','钱','孙','李','周','吴','郑','王',
        '冯','陈','楚','卫','蒋','沈','韩','杨');
    $ming = array('二狗','爱国','建军','琪','娟儿','日天','霸天','二蛋','狗剩','美丽','鲜花');

    $sexes = array('男','女','中');

    $class_name = array('','','','','','','','','');

    $teacher = 'teacher';
    $student = 'student';
    $class = 'class';

    $employee = 10000000;
    $student_id = 13212000;
    $pass = '000000';
    $pass1 = '123456';


//    for($i = 1;$i<count($xing);$i++){
//
//        $emp = (string)($employee+$i);
//        $values = array('name'=>$xing[$i].'老师','password'=>$pass,'employee_id'=>$emp);
//        $db->insert_to_db($teacher,$values);
//        var_dump($values);
//    }

    for($i = 0;$i<30;$i++){
        $name = $xing[mt_rand(0,count($xing)-1)].$ming[mt_rand(0,count($ming)-1)];
        $s_id = (string)($student_id+$i);
        $sex = $sexes[mt_rand(0,2)];
        $grade = 2013;

        $values = array('name'=>$name,'student_id'=>$s_id,'sex'=>$sex,'grade'=>$grade);
        $db->insert_to_db($student,$values);
        //var_dump($values);
    }

    echo '插入成功';