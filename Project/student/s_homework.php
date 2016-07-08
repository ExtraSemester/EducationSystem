<?php
//防止显示到浏览器时乱码
header('Content-Type:text/html; charset=utf-8;');
$html_a = <<< HTML
<!DOCTYPE HTML>
<html>
<head>
    <title>课程作业</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="../css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="../css/lines.css" rel='stylesheet' type='text/css' />
    <link href="../css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>
    <!----webfonts--->
    <link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Nav CSS -->
    <link href="../css/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/metisMenu.min.js"></script>
    <script src="../js/custom.js"></script>
    <!-- Graph JavaScript -->
    <script src="../js/d3.v3.js"></script>
    <script src="../js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
    <!-- Navigation -->
    <!-----顶边---------->
    <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="student.php" style="font-family:'华文行楷'">北航协同教学平台</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge"></span></a>
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

                    <li class="m_2"><a href="s_information.php"><i class="fa fa-male"></i> 个人资料</a></li>
                    <li class="m_2"><a href="#"><i class="fa fa-cog"></i> 设置</a></li>
                    <li class="m_2"><a href="#"><i class="fa fa-lock"></i> 退出</a></li>
                </ul>
            </li>
        </ul>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="s_resource.php"><i class="fa fa-indent nav_icon"></i>课程资料</a>
                    </li>
                    <li>
                        <a href="s_homework.php"><i class="fa fa-indent nav_icon"></i>课程作业</a>
                    </li>
                    <li>
                        <a href="s_homework_grade.php"><i class="fa fa-indent nav_icon"></i>作业成绩</a>
                    </li>
                    <li>
                        <a href="course_team.php"><i class="fa fa-comments nav_icon"></i>我的团队</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-comments nav_icon"></i>课程讨论</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-question nav_icon"></i>帮助</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    <div class="copyrights">Collect from <a href="#" ></a></div>
    <div id="page-wrapper">
        <div class="graphs">
            <div class="xs">
                <h3>课程作业</h3>
                <div class="bs-example4" data-example-id="contextual-table">
                    <h4>作业列表</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>标题</th>
                            <th>作业类型</th>
                            <th>截止时间</th>
                            <th>状态</th>

                        </tr>
                        </thead>
                        <tbody>
HTML;
$html_b =<<<HTML
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->


</div>
<!-- /#wrapper -->


<!-------------边底栏信息-------------->
<div class="copy_layout">
    <p>BUAA<a href="">协同教学平台.&nbsp;</a> Copyright &copy; 2016.沉迷学习</p>
</div>
</div>
</div>
<!-- /#page-wrapper -->
</div>
<!-------------边底栏信息-------------->




<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
HTML;
require_once '../database.php';
    session_start();
    $class_id = $_SESSION['class_id'];
    $db = new database();
    $work_data = $db->database_get("SELECT * FROM work WHERE work.class_id= $class_id");
    $count = count($work_data);
    //作业提交状态，默认为未提交
    $student_id = $_SESSION['user_id'];
    $work_state = '未提交';
    echo $html_a;
    if ($work_data) {
        for ($i=0;$i<$count;$i++) {
            $id = $work_data[$i]['id'];
            $title = $work_data[$i]['title'];
            $kind = $work_data[$i]['kind'];
            $end_time = $work_data[$i]['end_time'];
            $result = $db->database_get("SELECT id FROM work_file WHERE student_id=$student_id AND work_id=$id");
            if(count($result)!=0) {
                $work_state = '已提交';
            }
            else {
                $work_state = '未提交';
            }
            $state = $work_state ;

            $kind_ = '';
            if ($kind == 1) {
                $kind_ = '个人作业';
            }
            else{
                $kind_ = '团队作业';
            }
            echo "<tr class='active'>
                              <th scope='row'>" . ($i+1) . "</th>
                                  <td><a href='s_homework_sub.php?id=$id'>" . $title . "</a></td>
                              <td>" . $kind_ . "</td>
                              <td>" . $end_time . "</td>
                              <td>" . $state . "</td>
                            <tr>";

        }
    }




