<html>
<meta charset="utf-8"/>
<?php
//登录
require_once './database.php';

$username = $_GET['username'];
$password = $_GET['password'];
$role = $_GET['role'];
$my_db=new database();

if($username == "职工号") {
    echo"<script type='text/javascript'>alert('请填写用户名');location='login.html';</script>";
}
elseif($password == "password") {
    echo"<script type='text/javascript'>alert('请填写密码');location='login.html';</script>";
}
elseif ($role == "") {
    echo"<script type='text/javascript'>alert('请选择用户种类');location='login.html';</script>";
}
else {
    $result = $my_db->database_get("select id from $role where name='$username'and password='$password'");

    if(count($result)!=0) {
        $lifeTime = 120;
        session_set_cookie_params($lifeTime);
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["userid"] = $result[0]['id'];
        switch ($role)
        {
            case 'student';
                echo "<script type='text/javascript'>location='student/student.php';</script>";
                break;
            case 'teacher';
                echo "<script type='text/javascript'>location='teacher.html';</script>";
                break;
            case 'admin';
                echo "<script type='text/javascript'>location='admin.html';</script>";
                break;
        }
    }
    else {
        echo "<script type='text/javascript'>alert('用户名或密码错误');location='login.html';</script>";
    }
}
?>
</html>
