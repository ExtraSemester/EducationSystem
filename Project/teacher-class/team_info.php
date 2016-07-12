<?php
/**
 * Created by PhpStorm.
 * User: whx
 * Date: 2016/7/12
 * Time: 9:17
 */

$html_partA = <<<HTML
<!DOCTYPE HTML>
<html>
<head>
<title>团队成员</title>
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
<link href='' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</head>



<body>
<div class="total">
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
                <p class="navbar-brand" href="" style="font-family:'华文行楷'">北航协同教学平台</p>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge"></span></a>
	        		<ul class="dropdown-menu">
						
	        		</ul>
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="../images/1.png"></a>
	        		<ul class="dropdown-menu">
						<li class="m_2"><a href="#"><i class="fa fa-lock"></i> 个人资料</a></li>	
                        <li class="m_2"><a href="#"><i class="fa fa-lock"></i> 设置</a></li>	
                        <li class="m_2"><a href="#" onclick="logout()"><i class="fa fa-lock"></i> 退出</a></li>
	        		</ul>
                    <script>
						function logout(){
							if (confirm("确认退出？")){
							   top.location = "../utils/logout.php";
						   }
						  return false;
						}
					</script>
	      		</li>
			</ul>
<!------------顶边栏----------------->
            
<!------------侧边栏-----------------> 
			<div class="navbar-default sidebar" role="navigation">
            
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="teacher-class-message.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>课程信息</a>
                        </li>
                           <li>
                            <a href="teacher-class-team.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>团队申请</a>
                        </li>
                           <li>
                            <a href="teacher-class-givehomework.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>发布作业</a>
                        </li>
                        <li>
                            <a href="teacher-class-file.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>发布资源</a>
                        </li>
                        <li>
                            <a href="teacher-class-homework.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>已交作业</a>
                        </li>
                        <li>
						<a href="talk.php"><i class="fa fa-comments nav_icon"></i>课程讨论</a>
					</li>
                            </ul>
                </div>
            </div>
        </nav>
<!------------侧边栏----------------->

<!---------课程信息表格----------->
<div id="page-wrapper">
<div class="tablegraphs">
   <div class="col-md-12 graphs">
	   <div class="xs">
  	 <h3>团队成员</h3>
   <div class="panel-body1">
   <table class="table">
     <thead>
        <tr>
          <th>学号</th>
          <th>姓名</th>
          <th>性别</th>
          <th>年级<th>
        </tr>
      </thead>
      <tbody>
HTML;

$html_partB = <<<HTML
</tbody>
    </table>
    </div>
    </div><!-- /.table-responsive -->
  </div>
  </div>
<!------------课程信息表格------------->
  
  
<!-------------边底栏信息-------------->
  <div class="copy_layout">
      <p>BUAA<a href="">协同教学平台.&nbsp;</a> Copyright &copy; 2016.沉迷学习</p>
  </div>
<!-------------边底栏信息-------------->






<!-- Nav CSS -->
<link href="../css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>
HTML;

require_once '../database.php';

$conn = new database();

$team_id = $_GET['id'];

$students = $conn->database_get("select student_id from team_student where team_id=$team_id and state=1");

echo $html_partA;

for($i=0;$i<count($students);$i++){

    $student_id = $students[$i]['student_id'];
    $info = $conn->database_get("select student_id,name,sex,grade from student where id=$student_id");

    $id = $info[0]['student_id'];
    $name = $info[0]['name'];
    $sex = $info[0]['sex'];
    $grade = $info[0]['grade'];

    echo "<tr>
          <th scope=\"row\">$id</th>
          <td>$name</td>
          <td>$sex</td>
          <td>$grade</td>
        </tr>";
}

echo $html_partB;
