<!DOCTYPE HTML>
<html>
<head>
    <title>教师信息</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="../css/style.css" rel='stylesheet' type='text/css' />
    <link href="../css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>
    <!----webfonts--->
    <link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
</head>




<body>


<!------------ 顶边栏 ------------->
<div id="wrapper">
    <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">BUAA协同教学平台</a>
        </div>
        <!-- /.navbar-header -->
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                        <strong>Messages</strong>

                    </li>
                    <li class="avatar">
                        <a href="#">
                            <img src="../images/1.png" alt=""/>
                            <div>New message</div>
                            <small>1 minute ago</small>
                            <span class="label label-info">NEW</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="../images/1.png"></a>
                <ul class="dropdown-menu">
                    <li class="m_2"><a href="#"><i class="fa fa-lock"></i> 个人资料</a></li>
                    <li class="m_2"><a href="#"><i class="fa fa-lock"></i> 设置</a></li>
                    <li class="m_2"><a href="#"><i class="fa fa-lock"></i> 退出</a></li>
                </ul>
            </li>
        </ul>
        <!------------顶边栏----------------->

        <!------------侧边栏----------------->
        <div class="navbar-default sidebar" role="navigation">

            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="teacher.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>教师信息</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-dashboard fa-fw nav_icon"></i>帮助</a>
                </ul>
            </div>
        </div>
    </nav>
    <!------------侧边栏----------------->
    <div class="page">
        <div id="page-wrapper">
            <div class="col-md-12 graphs">
                <div class="xs">
                    <!------------所属课程--------------->
                    <?php
                    require_once '../database.php';
                    session_start();
                    $user_id = $_SESSION["user_id"];                    
                    $my_db = new database();
                    $class_data=$my_db->database_get("select * from class where id=select class_id from class_teacher where teacher_id=$user_id");
                    $teacher_data=$my_db->database_get("select * from teacher where id=$user_id");
                    $count=count($class_data);
                    $i=0;

                    echo '
                    <table class="table">
                        <thead>
                        <tr>
                            <th>课程编号</th>
                            <th>课程名称</th>
                            <th>上课时间</th>

                        </tr>
                        </thead>
                        <tbody>'

                        $html_01=<<<html
<tr>
html;
                        $html_02=<<<html
<th scope="row">
html;
                        $html_03=<<<html
</th>
html;
                        $html_04=<<<html
<td>
html;
                        $html_05=<<<html
<form action="teacher-class-message.php" method="get" name="class_name"><input type="hidden" id="number1"><button type="submit" class="btn-inverse btn" ><p id="classnumber1">
html;
                        $html_06=<<<html
                        </p></button></form></td>
                            <script type="text/javascript">
                                document.getElementById('number1').value=document.getElementById('classnumber1').value;
                            </script>
html;
                        $html_07=<<<html
<td>
html;
                        $html_08=<<<html
</td>
html;
                        $html_09=<<<html
</tr>
html;
//开始执行
                        for($i=0;$i<$count;$i++)
                        {
                            echo $html_01;
                            echo $html_02;
                            echo"aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
                            echo $class_data[$i]['id'];
                            echo $html_03;
                            echo $html_04;
                            echo $html_05;
                            echo $class_data[$i]['name'];
                            echo $html_06;
                            echo $html_07;
                            echo $class_data[$i]['time'];
                            echo $html_08;
                            echo $html_09;
                        }
                        ?>
                        <!-----
                        <tr>
                            <th scope="row"><?php echo $class_data[$i]['id']; ?></th>
                            <td><form action="teacher-class-message.php" method="get" name="class_name"><input type="hidden" id="number1"><button type="submit" class="btn-inverse btn" ><p id="classnumber1"><?php echo $class_data[$i]['name']; ?></p></button></form></td>
                            <script type="text/javascript">
                                document.getElementById('number1').value=document.getElementById('classnumber1').value;
                            </script>

                            <td><?php echo $class_data[$i]['time'];$i++;?></td>
                        </tr>

z
                        </tbody>
                    </table>
                    ---->
                    <!------------所属课程--------------->
                    <!------------教师信息--------------->
                    <table class="table">
                        <thead>
                        <tr>
                            <th>工号</th>
                            <th>姓名</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="active">
                            <th scope="row"><?php echo $teacher_data[0]['employee_id'];?></th>
                            <td><?php echo $teacher_data[0]['name'];?></td>
                        </tr>
                        <!------------教师信息--------------->
                        <!------------日历部分--------------->
                        <!------------日历部分--------------->
                </div>
            </div>
        </div>
    </div>

    <!-------------边底栏信息-------------->

    <!-------------边底栏信息-------------->





    <!-- Nav CSS -->
    <link href="../css/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/metisMenu.min.js"></script>
    <script src="../js/custom.js"></script>
</body>
</html>
