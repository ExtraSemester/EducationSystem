<Html>
<meta charset="UTF-8">
<?php
/**
 * Created by PhpStorm.
 * User: 王琦
 * Date: 2016/7/5
 * Time: 11:07
 */
session_start();
if(isset($_SESSION['user_id'])) {
    require_once '../database.php';
    $kind = $_GET['kind'];
    $title = $_GET['title'];
    $content = $_GET['content'];
    $end_time = $_GET['end_time'];
    $start_time = "2016-7-5 16:11:20";
    $db = new database();

    $class_id = $_SESSION['class_id'];
    //$teacher_id = $_SESSION['user_id'];
    $id = $_GET['id'];
    //判断是否为团队作业
    if ($kind == '团队作业') {
//        $result = $db->database_get("SELECT * FROM work WHERE class_id=$class_id AND id=$id");
//        $count = count($_result);
        if ($id!=null) {
            $result = $db->database_get("UPDATE work set kind=2,title=$title,content=$content,class_id=$class_id,
                                            start_time=$start_time,end_time=$end_time");
            echo "<script type='text/javascript'>alert('作业修改成功!');location='teacher-class-givehomework.php';</script>";

        }
        else{
            $values = array('kind' => 2, 'title' => $title, 'content' => $content, 'class_id' => $class_id,
                'start_time' => $start_time, 'end_time' => $end_time);
            $db->insert_to_db('work', $values);
            echo "<script type='text/javascript'>alert('作业发布成功！');location='teacher-class-givehomework.php';</script>";
        }


        }

    //判断是否为个人作业
    elseif ($kind == '个人作业') {
//        $result1 = $db->database_get("SELECT * FROM work WHERE class_id=$class_id AND id=$id");
//        $count = count($_result1);
        if ($id!=null) {
            $result = $db->database_get("UPDATE work set kind=1,title=$title,content=$content,class_id=$class_id,
                                            start_time=$start_time,end_time=$end_time");
            echo "<script type='text/javascript'>alert('作业修改成功!');location='teacher-class-givehomework.php';</script>";

        }
        else{
            $values = array('kind' => 1, 'title' => $title, 'content' => $content, 'class_id' => $class_id,
                'start_time' => $start_time, 'end_time' => $end_time);
            $db->insert_to_db('work', $values);
            echo "<script type='text/javascript'>alert('作业发布成功！');location='teacher-class-givehomework.php';</script>";
        }



    }
    
    

}
else {
    echo "用户未登录!";
}
?>
</Html>