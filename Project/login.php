<html>
<meta charset="utf-8"/>
<?php
//登录
require_once './database.php';

$username = $_GET['username'];
$password = $_GET['password'];
$role = $_GET['role'];
echo $username;
$my_db=new database();

if($username == "") {
    echo"<script type='text/javascript'>alert('请填写用户名');location='login.html';</script>";
}
elseif($password == "") {
    echo"<script type='text/javascript'>alert('请填写密码');location='login.html';</script>";
}
elseif ($role == "") {
    echo"<script type='text/javascript'>alert('请选择用户种类');location='login.html';</script>";
}
else {
    $table = $role;
    $field = $password;
    $keys = array('name'=>$username);
    $result = $my_db->select_data($table,$field,$keys);

    if($role=="student") {
        $id = $my_db->select_data($table, 'student_id', $keys);
    }
    else {
        $id = $id = $my_db->select_data($table, 'employee_id', $keys);
    }

    if($result == $password) {
        $lifeTime = 120;
        session_set_cookie_params($lifeTime);
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["id"] = $id;
        switch ($role)
        {
            case 'student';
                echo "<script type='text/javascript'>location='student.html';</script>";
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