<html>
<meta charset="utf-8"/>
<?php
//登录
require_once './database.php';

$id = $_GET['username'];
$password = $_GET['password'];
$role = $_GET['role'];
$my_db=new database();

if($id == "职工号") {
    echo"<script type='text/javascript'>alert('请填写用户ID');location='login.html';</script>";
}
elseif($password == "password") {
    echo"<script type='text/javascript'>alert('请填写密码');location='login.html';</script>";
}
elseif ($role == "") {
    echo"<script type='text/javascript'>alert('请选择用户种类');location='login.html';</script>";
}

if($role == 'student')
{
    $result = $my_db->database_get("select id from student where student_id='$id'and password='$password'");
    if(count($result)!=0) {
        $lifeTime = 120;
        session_set_cookie_params($lifeTime);
        session_start();
        //$_SESSION["role"] = $role;
        $_SESSION["user_id"] = $result[0]['id'];
		
		echo '<form name="cookie" method="get" action="student/student.php">
                        <input type="hidden" id="cname" name="user_id" value="'.$result[0]['id'].'">
                </form>';
				
        echo "<script type='text/javascript'>document.cookie.submit();</script>";
    }
    else {
        echo "<script type='text/javascript'>alert('用户名或密码错误');location='login.html';</script>";
    }
}
elseif($role == 'teacheer')
{
    $result = $my_db->database_get("select id from teacher where employee_id='$id'and password='$password'");
    if(count($result)!=0) {
        $lifeTime = 120;
        session_set_cookie_params($lifeTime);
        session_start();
        //$_SESSION["role"] = $username;
        $_SESSION["user_id"] = $result[0]['id'];
        echo "<script type='text/javascript'>location='teacher/teacher.php';</script>";
    }
    else {
        echo "<script type='text/javascript'>alert('用户名或密码错误');location='login.html';</script>";
    }
}
elseif($role == 'Admin')
{
    $result = $my_db->database_get("select id from admin where employee_id='$id'and password='$password'");
    if(count($result)!=0) {
        $lifeTime = 120;
        session_set_cookie_params($lifeTime);
        session_start();
        //$_SESSION["role"] = $role;
        $_SESSION["user_id"] = $result[0]['id'];
        echo "<script type='text/javascript'>location='student/student.php';</script>";
    }
    else {
        echo "<script type='text/javascript'>alert('用户名或密码错误');location='login.html';</script>";
    }
}
?>
</html>
