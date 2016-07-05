<?php
/**
 * Created by PhpStorm.
 * User: whx
 * Date: 2016/7/5
 * Time: 19:58
 */
$html_partA = <<<HTML
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

<script>
    
    function toClass(name) {
    
      window.location.href = "../teacher-class/teacher-class-message.php?class_name="+name;
      $.get("../teacher-class/class_info.php?class_name="+name)
      
    }
</script>
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
                            <a href="../teacher-class/teacher-class-message.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>教师信息</a>
                        </li>
                           <li>
                            <a href="../teacher-class/teacher-class-team.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>帮助</a>
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
<table class="table">
                          <thead>
                            <tr>
                              <th>课程编号</th>
                              <th>课程名称</th>
                              <th>上课时间</th>
                            </tr>
                          </thead>
                          <tbody>
HTML;

$html_partB = <<< HTML
</tbody>
                        </table>
<!------------所属课程--------------->
<!------------教师信息--------------->
<table class="table">
                          <thead>
                            <tr>
                              <th>工号</th>
                              <th>姓名</th>
                              <th>代课数</th>
                            </tr>
                          </thead>
                          <tbody>
HTML;

$html_partC = <<<HTML
 </tbody>
 </table>
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
</div>
</body>
</html>
HTML;

require_once '../database.php';

$user_id = $_SESSION['user_id'];
$user_id = 1;

$conn = new database();

$sql = "SELECT name ,time FROM class,class_teacher WHERE class_id = id and teacher_id = $user_id";

$classes = $conn->database_get($sql);

echo $html_partA;
$i = 0;
if($classes) {
    for ($i = 0; $i < count($classes); $i++) {

        $class_name = $classes[$i]['name'];
        $class_time = $classes[$i]['time'];

        echo "<tr class=\"active\">
                              <th scope=\"row\">" . ($i + 1) . "</th>
                              <td><button class=\"btn-inverse btn\" onclick='toClass(\"$class_name\")'>$class_name</button></td>

                              <td>$class_time</td>
                            </tr>";
    }
}else {
    echo "<td>暂无授课信息</td>";
}

echo $html_partB;

$sql1 = "SELECT employee_id,name FROM teacher WHERE id=$user_id";
$teacher_info = $conn->database_get($sql1);

echo "<tr class=\"active\">
                              <th scope=\"row\">".$teacher_info[0]['employee_id']."</th>
                              <td>".$teacher_info[0]['name']."</td>
                              <td>$i</td>
                            </tr>";

echo $html_partC;
