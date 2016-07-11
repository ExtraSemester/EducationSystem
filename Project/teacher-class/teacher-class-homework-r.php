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
    $end_time_day = $_GET['end_time_day'];
    $end_time_hour = $_GET['end_time_hour'];
    $end_time_all = $end_time_day. " " .$end_time_hour;
    $end_time = $_GET['end_time'];
    $start_time = "2016-7-5 16:11:20";
    $db = new database();
    $class_id = $_SESSION['class_id'];
    $teacher_id = $_SESSION['user_id'];
    $id = $_GET['id'];
    //echo $end_time;
    //判断是否为团队作业
    if ($kind == '团队作业') {
//        $result = $db->database_get("SELECT * FROM work WHERE class_id=$class_id AND id=$id");
//        $count = count($_result);
        if ($id!=null) {
            //$sql = "UPDATE work set kind=2,title=$title,content=$content,end_time=$end_time WHERE id=$id";
            $db->database_do("UPDATE work set kind=2,title='$title',content='$content',end_time='$end_time' WHERE id=$id");
            echo "<script type='text/javascript'>alert('作业修改成功！');location='teacher-class-givehomework.php';</script>";
        }
        else{

            //将获得的作业信息插入到数据库中
            $values = array('kind' => 2, 'title' => $title, 'content' => $content, 'class_id' => $class_id,
                'start_time' => $start_time, 'end_time' => $end_time_all);
            $db->insert_to_db('work', $values);
            //获得发布的作业id
            $value = $db->database_get("select id from work where kind=2 and title='$title' and content='$content' and class_id=$class_id and end_time='$end_time_all'");
            $work_id = $value[0]['id'];
            //发布作业后将work_student表更新，将state设为2
            $resuluts = $db->database_get("select student_id from class_student where class_id=$class_id");
            for ($i=0;$i<count($resuluts);$i++) {
                $stu_id[$i] = $resuluts[$i]['student_id'];
                $db->database_do("insert into work_student(work_id, student_id, state) values ('$work_id','$stu_id[$i]',2)");
            }
            //$db->database_do("update work_student set state=2 where work_id=$work_id and student_id in (select student_id from class_student where class_id=$class_id)");
            
            echo "<script type='text/javascript'>alert('作业发布成功！');location='teacher-class-givehomework.php';</script>";
        }
    }
    //判断是否为个人作业
    elseif ($kind == '个人作业') {
        if ($id!=null) {
            //$sql = "UPDATE work set kind=2,title=$title,content=$content,end_time=$end_time WHERE id=$id";
            $db->database_do("UPDATE work set kind=2,title='$title',content='$content',end_time='$end_time' WHERE id=$id");
            echo "<script type='text/javascript'>alert('作业修改成功！');location='teacher-class-givehomework.php';</script>";
        }
        else{

            //将获得的作业信息插入到数据库中
            $values = array('kind' => 1, 'title' => $title, 'content' => $content, 'class_id' => $class_id,
                'start_time' => $start_time, 'end_time' => $end_time_all);
            $db->insert_to_db('work', $values);
            //获得发布的作业id
            $value = $db->database_get("select id from work where kind=1 and title='$title' and content='$content' and class_id=$class_id and end_time='$end_time_all'");
            $work_id = $value[0]['id'];
            //发布作业后将work_student表更新，将state设为2
            $resuluts = $db->database_get("select student_id from class_student where class_id=$class_id");
            for ($i=0;$i<count($resuluts);$i++) {
                $stu_id[$i] = $resuluts[$i]['student_id'];
                $db->database_do("insert into work_student(work_id, student_id, state) values ('$work_id','$stu_id[$i]',2)");
            }
            //$db->database_do("update work_student set state=2 where work_id=$work_id and student_id in (select student_id from class_student where class_id=$class_id)");

            echo "<script type='text/javascript'>alert('作业发布成功！');location='teacher-class-givehomework.php';</script>";
        }
    }
}
else {
    echo "用户未登录!";
}
?>
</Html>