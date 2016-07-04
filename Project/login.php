<html>
<meta charset="utf-8"/>
<?php
include('login.html');
//登录
require_once './database.php';
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$my_db=new database();

if($username == "")
{
    echo"<script type='text/javascript'>alert('请填写用户名');location='login.html';</script>";
}
elseif($password == "")
{
    echo"<script type='text/javascript'>alert('请填写密码');location='login.html';</script>";
}
elseif ($role == "")
{
    echo"<script type='text/javascript'>alert('请选择用户种类');location='login.html';</script>";
}
else
{
    $table = $role;
    $field = $password;
    $keys = array('name'=>$username);
    $result = $my_db->select_data($table,$field,$keys);
    if($result == $password)
    {
        $lifeTime = 120;
        session_set_cookie_params($lifeTime);
        session_start();
        $_SESSION["username"] = $username;
        switch ($role)
        {
            case 'student';
                echo "<script type='text/javascript'>location='student.html';</script>";
                break;
            case 'teacher';
                echo "<script type='text/javascript'>location='login.html';</script>";
                break;
            case 'admin';
                echo "<script type='text/javascript'>location='login.html';</script>";
                break;
        }
    }
    else
    {
        echo "<script type='text/javascript'>alert('用户名或密码错误');location='login.html';</script>";
    }
}
?>
</html>
