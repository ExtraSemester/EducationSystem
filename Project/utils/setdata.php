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

    $class_name = array('大学C++','离散数学','高等数学','软件工程','军事理论','思修','算法导论',
        '数据库','Java','系统分析','软工过程','大学物理','概率论','线性代数','数学建模','体育');
    $class_time = array('8:00 - 10:00','10:00 - 12:00','14:00 - 16:00','16:00 - 18:00');
    $class_place = array('教3-403','教4-404','教5-502','主北-303','主北-110','主M-400',
        'F-117','B-233','主南-443','主-200');

    $teacher = 'teacher';
    $student = 'student';
    $class = 'class';

    $employee = 10000000;
    $student_id = 13212000;
    $pass = '000000';
    $pass1 = '123456';

    //插入教师数据
//    for($i = 1;$i<count($xing);$i++){
//
//        $emp = (string)($employee+$i);
//        $values = array('name'=>$xing[$i].'老师','password'=>$pass,'employee_id'=>$emp);
//        $db->insert_to_db($teacher,$values);
//        var_dump($values);
//    }

    //插入学生数据
//    for($i = 0;$i<30;$i++){
//        $name = $xing[mt_rand(0,count($xing)-1)].$ming[mt_rand(0,count($ming)-1)];
//        $s_id = (string)($student_id+$i);
//        $sex = $sexes[mt_rand(0,2)];
//        $grade = 2013;
//
//        $values = array('name'=>$name,'student_id'=>$s_id,'sex'=>$sex,'grade'=>$grade);
//        $db->insert_to_db($student,$values);
//        //var_dump($values);
//    }

    //插入课程数据
    for($i = 0;$i<count($class_name);$i++){
        $name = $class_name[$i];
        $start_week = 1;
        $end_week = 16;
        $time = $class_time[mt_rand(0,3)];
        $place = $class_place[mt_rand(0,9)];
        $state = 1;

        $values = array('name'=>$name,'start_week'=>$start_week,'end_week'=>$end_week,
            'time'=>$time,'place'=>$place,'state'=>$state);
        $db->insert_to_db($class,$values);
        //var_dump($values);
    }
    echo '插入成功';