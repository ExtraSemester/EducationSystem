<?php

$html_A=<<<HTML
<!DOCTYPE HTML>
<html>
<head>
<title>课程信息</title>
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
                            <a href="#"><i class="fa fa-dashboard fa-fw nav_icon"></i>课程信息</a>
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
  	 <h3>课程信息</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
    <table class="table">
      <thead>
        <tr>
          <th>课程代号</th>
          <th>课程名称</th>
          <th>任课教师</th>
          <th>课程状态</th>
        </tr>
      </thead>
      <tbody>
        <tr class="active">
          <th scope="row">
HTML;
$html_01=<<<HTML
</th>
          <td>
HTML;
$html_02=<<<HTML
</td>
          <td>
HTML;
$html_03=<<<HTML
</td>
          <td>
HTML;

$html_B=<<<HTML
</td>
        </tr>
      </tbody>
    </table>
   </div>
   
   <div class="panel-body1">
   <table class="table">
     <thead>
        <tr>
          <th>团队编号</th>
          <th>团队名称</th>
          <th>团队人数</th>
          <th>团队负责人</th>
        </tr>
      </thead>
      <tbody>
HTML;

$html_1=<<<HTML
<tr>
          <th>
HTML;

$html_2=<<<HTML
</th>
          <td>
HTML;

$html_3=<<<HTML
</td>
          <td>
HTML;

$html_4=<<<HTML
</td>
          <td>
HTML;

$html_5=<<<HTML
</td>
         </tr>
HTML;

$html_C=<<<HTML
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
   </div>
      </div>
      <!-- /#page-wrapper -->
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

echo $html_A;
session_start();
$my_db=new database();
$class_id=$_GET['class_id'];
if($class_id == null){
    $class_id = $_SESSION['class_id'];
}else{
    $_SESSION['class_id'] = $class_id;
}

$class_data=$my_db->database_get("select * from class where id='$class_id' ");
$class_teacher_data=$my_db->database_get("select * from teacher where id in (select teacher_id from class_teacher where class_id=$class_id)");

//课程信息
echo $class_data[0]['id'];
echo $html_01;
echo $class_data[0]['name'];
echo $html_02;
echo $class_teacher_data[0]['name'];
echo $html_03;
$class_state=$class_data[0]['state'];
if($class_state==1)
{
    echo"可用";
}
else
{
    echo"不可用";
}
echo $html_B;

//团队信息
$team_data=$my_db->database_get("select * from team where class_id=$class_id and stat=1");

$count=count($team_data);
for($i=0;$i<$count;$i++)
{
    $team_admin_id=$team_data[$i]['admin_id'];
    $team_lead_name=$my_db->database_get("select name from student where id=$team_admin_id");
    echo $html_1;
    echo $team_data[$i]['id'];
    echo $html_2;
    echo "<a href='team_info.php?id=".$team_data[$i]['id']."'>" . $team_data[$i]['name'] . "</a>";
    echo $html_3;
    echo $team_data[$i]['number'];
    echo $html_4;
    echo $team_lead_name[0]['name'];
    echo $html_5;
}
echo $html_C;