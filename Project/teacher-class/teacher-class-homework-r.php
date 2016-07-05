<Html>
<meta charset="UTF-8">
<?php
/**
 * Created by PhpStorm.
 * User: 王琦
 * Date: 2016/7/5
 * Time: 11:07
 */

//echo "fuck you!";
session_start();
if(isset($_SESSION['user_id'])) {
    require_once '../database.php';
    //$id = $_POST['id'];

    //$kind = $_POST['title'];
    //$content = $_POST['content'];
    //$db = new database();

    $kind = $_GET['kind'];
    $title = $_GET['title'];
    $content = $_GET['content'];
    $end_time = $_GET['end_time'];
    $start_time = "2016-7-5 16:11:20";

//    $dt = new datetime();
//    $start_time = $dt->format('Y-m-d H;m;s');
    $db = new database();
    $class_ids = $db->database_get("SELECT class_id FROM class_teacher WHERE teacher_id= 3");
    
    $class_id = $class_ids[0]['class_id'];

    /*
    $kind = '团队作业';
    $title = 'hahaha';
    $content = '12345567';
    $start_time = '2015-1-31 12:32:12';
    $end_time = '2015-2-1 12:23:10';
    $db = new database();
    */


    //判断是否为团队作业
    if ($kind == '团队作业') {
//       $result = $db->database_get("SELECT id FROM work WHERE kind=2");
//       if (count($result) == 0) {
//           echo "<script type='text/javascript'>alert('该作业已经发布过!');location='teacher-class-homework-r.html';</script>";
//
//        }
//       else {
            $values = array('kind' => 2, 'title' => $title, 'content' => $content, 'class_id' => $class_id,
                'start_time' => $start_time, 'end_time' => $end_time);
            $db->insert_to_db('work', $values);
            //$values= $db->database_get("select id from work");
            //echo count($values);
            echo "<script type='text/javascript'>alert('作业发布成功！');location='teacher-class-givehomework.html';</script>";
            //echo "作业发布成功!";
       }
    //}

    //判断是否为个人作业
    elseif ($kind == '个人作业') {
//        //$values = array('kind'=>$kind, 'title'=>$title);
//        $result = $db->database_get("SELECT id FROM work WHERE kind=1");
//        if (count($result) == 0) {
//            echo "<script type='text/javascript'>alert('该作业已经发布过!');location='teacher-class-homework-r.html';</script>";
//        } else {
            //$class_id = $db->database_get()
            $values = array('kind' => 1, 'title' => $title, 'content' => $content, 'class_id' => 1,
                'start_time' => $start_time, 'end_time' => $end_time);
            $db->insert_to_db('work', $values);
            echo "<script type='text/javascript'>alert('作业发布成功！');location='teacher-class-givehomework.html';</script>";
        }
    //}

}


else {
    echo "用户未登录!";
}


?>
</Html>
