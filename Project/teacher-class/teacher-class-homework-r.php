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
    $end_time = $end_time_day. " " .$end_time_hour;
    $start_time = "2016-7-5 16:11:20";
    $db = new database();
    $class_id = $_SESSION['class_id'];
    $teacher_id = $_SESSION['user_id'];
    $id = $_GET['id'];
    echo $end_time;
    echo $id;
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
            $values = array('kind' => 2, 'title' => $title, 'content' => $content, 'class_id' => $class_id,
                'start_time' => $start_time, 'end_time' => $end_time);
            $db->insert_to_db('work', $values);
            $route = "../teacher-class/work/".$id;
            if(!file_exists($route)){
                mkdir($route);
            }
            if ($_FILES["file"]["error"] > 0)
            {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
            }
            else {

                $result = $db->database_get("SELECT name FROM class WHERE id=$id");
                $class_name = $result[0]['name'];
                //echo "R".$route."S".$class_name;
                if($class_name==null)
                {
                    $class_name="生产实习";
                }
                $real_route="../teacher-class/work/".$id."/";

                $file_name = iconv('utf-8','gbk',$_FILES["file"]["name"]);
                $db->database_do("update work set attachment='$file_name' where id=$id");
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
            $db->database_do("UPDATE work set kind=1,title='$title',content='$content',end_time='$end_time' WHERE id=$id");
            echo "<script type='text/javascript'>alert('作业修改成功');location='teacher-class-givehomework.php';</script>";
        }
        else{
            $values = array('kind' => 1, 'title' => $title, 'content' => $content, 'class_id' => $class_id,
                'start_time' => $start_time, 'end_time' => $end_time);
            $db->insert_to_db('work', $values);
            $route = "../teacher-class/work/".$id;
            if(!file_exists($route)){
                mkdir($route);
            }
            if ($_FILES["file"]["error"] > 0)
            {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
            }
            else {

                $result = $db->database_get("SELECT name FROM class WHERE id=$id");
                $class_name = $result[0]['name'];
                //echo "R".$route."S".$class_name;
                if($class_name==null)
                {
                    $class_name="生产实习";
                }
                $real_route="../teacher-class/work/".$id."/";

                $file_name = iconv('utf-8','gbk',$_FILES["file"]["name"]);
                $db->database_do("update work set attachment='$file_name' where id=$id");
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