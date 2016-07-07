<?php
/**
 * Created by PhpStorm.
 * User: MSI
 * Date: 2016/7/6
 * Time: 9:22
 */

$html_A=<<<HTML

<!DOCTYPE HTML>
<html>
<head>
<title>作业成绩</title>
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
                        <li class="m_2"><a href="#" onclick="logout();"><i class="fa fa-lock"></i> 退出</a></li>	
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
                            <a href="#"><i class="fa fa-indent nav_icon"></i>作业成绩</a>
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
  	       				<h3>个人成绩</h3>
  	         			<div class="bs-example4" data-example-id="contextual-table">
                    		<h4>作业列表</h4>
                            <table class="table">
                          		<thead>
                            		<tr>
                                      	<th>作业编号</th>
                                     	<th>标题</th>
                                      	<th>成绩</th>
                                      	<th>教师评论</th>
										
                            		</tr>
                          		</thead>
                          		<tbody>

HTML;


$html_1=<<<HTML
                            		<tr class="active">
                              		<th scope="row">
HTML;
$html_2=<<<HTML
                                    </th>
                                    <td>

HTML;
$html_3=<<<HTML
                                    </a></td>
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

$html_B=<<<HTML
                          		</tbody>
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


session_start();
require_once '../database.php';
echo $html_A;
$my_db=new database();
$user_id = $_SESSION['user_id'];

$student_work_data=$my_db->database_get("select * from work where id in (select work_id from student_work wherer student_id=$user_id)");
$team_work_data=$my_db->database_get("select * from work where id in (select work_id from team_work where team id in (select team_id from team_student where student_id=$user_id))");
$count_student_work=count($student_work_data);
$count_team_work=count($team_work_data);
if($count_student_work+$count_team_work==0)
{
    echo "<td>暂无作业信息</td>";
}
else
{
    for($i=0;$i<$count_student_work;$i++)
    {
        echo $html_1;
        echo $student_work_data[$i]['id'];
        echo $html_2;
        echo $student_work_data[$i]['title'];
        echo $html_3;
        echo $student_work_data[$i]['grade'];
        echo $html_4;
        echo $student_work_data[$i]['comment'];
        echo $html_5;
    }
    for($i=0;$i<$count_team_work;$i++)
    {
        echo $html_1;
        echo $team_work_data[$i]['id'];
        echo $html_2;
        echo $team_work_data[$i]['title'];
        echo $html_3;
        echo $team_work_data[$i]['grade'];
        echo $html_4;
        echo $team_work_data[$i]['comment'];
        echo $html_5;
    }
}
echo $html_B;