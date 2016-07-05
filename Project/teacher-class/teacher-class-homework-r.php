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
        $id = $_POST['id'];

        //$kind = $_POST['title'];
        //$content = $_POST['content'];
        //$db = new database();

        $kind = $_POST['kind'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $start_time = $_POST['start_time'];
        $end_time = $_POST['end_time'];
        $db = new database();

        //判断是否为团队作业
        if ($kind == '团队作业') {
            //$values = array('kind'=>$kind, 'title'=>$title);
            $result = $db->database_get("SELECT id FROM work WHERE kind='$kind' AND title='$title'");
            if (count($result) != 0) {
                echo "<script type='text/javascript'>alert('该作业已经发布过!');location='teacher-class-homework-r.html';</script>";
            } else {
                //$class_id = $db->database_get()
                $values = array('kind' => $kind, 'title' => $title, 'content' => $content, 'class_id' => 1,
                    'start_time' => $start_time, 'end_time' => $end_time);
                $db->insert_to_db('work', $values);
                echo "<script type='text/javascript'>alert('作业发布成功！');location='teacher-class-givehomework.html';</script>";
            }
        }

        //判断是否为个人作业
        elseif ($kind == '个人作业') {
            //$values = array('kind'=>$kind, 'title'=>$title);
            $result = $db->database_get("SELECT id FROM work WHERE kind='$kind' AND title='$title'");
            if (count($result) != 0) {
                echo "<script type='text/javascript'>alert('该作业已经发布过!');location='teacher-class-homework-r.html';</script>";
            } else {
                //$class_id = $db->database_get()
                $values = array('kind' => $kind, 'title' => $title, 'content' => $content, 'class_id' => 1,
                    'start_time' => $start_time, 'end_time' => $end_time);
                $db->insert_to_db('work', $values);
                echo "<script type='text/javascript'>alert('作业发布成功！');location='teacher-class-givehomework.html';</script>";
            }
        }
    }


    else {
        echo "用户未登录!";
    }


?>
</Html>