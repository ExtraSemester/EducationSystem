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
    $attachment = $_FILES["file"]["name"];
    $start_time = "2016-7-5 16:11:20";
    $db = new database();
    $class_id = $_SESSION['class_id'];
    $teacher_id = $_SESSION['user_id'];
    $id = $_GET['id'];
    echo $end_time;
    //判断是否为团队作业
    if ($kind == '团队作业') {
//        $result = $db->database_get("SELECT * FROM work WHERE class_id=$class_id AND id=$id");
//        $count = count($_result);
        if ($id!=null) {
            //$sql = "UPDATE work set kind=2,title=$title,content=$content,end_time=$end_time WHERE id=$id";
            $db->database_do("UPDATE work set kind=2,title='$title',content='$content',end_time='$end_time',attachment='$attachment'WHERE id=$id");
            echo "<script type='text/javascript'>alert('作业修改成功！');location='teacher-class-givehomework.php';</script>";
        }
        else{
            $values = array('kind' => 2, 'title' => $title, 'content' => $content, 'class_id' => $class_id,
                'start_time' => $start_time, 'end_time' => $end_time_all, 'attachment' => $attachment);
            $db->insert_to_db('work', $values);
            $value = $db->database_get("select id from work where kind=2 and title='$title' and content='$content' and class_id=$class_id and end_time='$end_time_all'");
            $work_id = $value[0]['id'];
            $route = "../teacher-class/work/".$work_id;
            //echo $work_id;
            if(!file_exists($route)){
                mkdir($route);
            }
            if ($_FILES["file"]["error"] > 0)
            {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
            }
            else {
                $result = $db->database_get("SELECT name FROM class WHERE id=$class_id");
//                $class_name = $result[0]['name'];
//                //echo "R".$route."S".$class_name;
//                if($class_name==null)
//                {
//                    $class_name="生产实习";
//                }
                $real_route="../teacher-class/work/".$work_id."/";
                //echo $real_route;
                $file_name = iconv('utf-8','gbk',$_FILES["file"]["name"]);
                //echo $file_name;
                $db->database_do("update work set attachment='$file_name' where id=$work_id");
                $title = $real_route.$file_name;
                move_uploaded_file($_FILES["file"]["tmp_name"],iconv('utf-8','gbk',$title));
            }
            echo "<script type='text/javascript'>alert('作业发布成功！');location='teacher-class-givehomework.php';</script>";
        }
    }
    //判断是否为个人作业
    elseif ($kind == '个人作业') {
//        $result1 = $db->database_get("SELECT * FROM work WHERE class_id=$class_id AND id=$id");
//        $count = count($_result1);
        if ($id!=null) {
            $db->database_do("UPDATE work set kind=1,title='$title',content='$content',end_time='$end_time',attachment='$attachment'WHERE id=$id");
            echo "<script type='text/javascript'>alert('作业修改成功');location='teacher-class-givehomework.php';</script>";
        }
        else{
            $values = array('kind' => 1, 'title' => $title, 'content' => $content, 'class_id' => $class_id,
                'start_time' => $start_time, 'end_time' => $end_time_all, 'attachment' => $attachment);
            $db->insert_to_db('work', $values);
            $value_ = $db->database_get("select id from work where kind=1 and title=$title and content=$content and class_id=$class_id and end_time='$end_time_all'");
            $work_id_ = $value_[0]['id'];
            //echo $work_id_;
            $route = "../teacher-class/work/".$work_id_;
            if(!file_exists($route)){
                mkdir($route);
            }
            if ($_FILES["file"]["error"] > 0)
            {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
            }
            else {
                $result = $db->database_get("SELECT name FROM class WHERE id=$class_id");
                $class_name = $result[0]['name'];
                //echo "R".$route."S".$class_name;
//                if($class_name==null)
//                {
//                    $class_name="生产实习";
//                }
//                $real_route="../teacher-class/work/".$work_id_."/";
                //echo $work_id_;
                $file_name = iconv('utf-8','gbk',$_FILES["file"]["name"]);
                $db->database_do("update work set attachment='$file_name' where id=$work_id_");
                $title = $real_route.$file_name;
                move_uploaded_file($_FILES["file"]["tmp_name"],iconv('utf-8','gbk',$title));
            }
            echo "<script type='text/javascript'>alert('作业发布成功！');location='teacher-class-givehomework.php';</script>";
        }
    }
}
else {
    echo "用户未登录!";
}
?>
</Html>