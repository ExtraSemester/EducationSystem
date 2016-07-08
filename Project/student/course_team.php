<?php
/**
 * Created by PhpStorm.
 * User: MSI
 * Date: 2016/7/6
 * Time: 19:02
 */
$html_A=<<<HTML
<!DOCTYPE HTML>
<html>
<head>
<title>我的团队</title>
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
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            
            
            <!---------顶边-------------------->
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
             <!---------顶边-------------------->
             
             
			<!-----------侧边------------------>
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
                            <a href="#"><i class="fa fa-comments nav_icon"></i>我的团队</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-comments nav_icon"></i>课程讨论</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-question nav_icon"></i>帮助</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-----------侧边------------------>
            
            
            
        </nav>
        
        
        
		<div class="copyrights">Collect from <a href="#" ></a></div>
        	<div id="page-wrapper">
       			<div class="graphs">
                	<div class="xs">
  	       				<h3>团队信息</h3>
  	         			<div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
								<form class="form-horizontal">
                                	<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">团队名称：</label>
										<label  class=" control-label" id="s_name">
HTML;
/*
 * 										<label for="focusedinput" class="col-sm-2 control-label">团队名称：</label>
										<label  class=" control-label" id="s_name">沉迷学习</label>
									</div>
                                    <div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">团队编号：</label>
										<label  class=" control-label" id="s_name">03</label>
									</div>
                                    <div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">队长：</label>
										<label  class=" control-label" id="s_name">王支书</label>
									</div>
                                    <div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">团队状态：</label>
										<label  class=" control-label" id="s_name">组队中
 */

$html_01=<<<HTML
</label>
									</div>
                                    <div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">团队编号：</label>
										<label  class=" control-label" id="s_name">
HTML;
$html_02=<<<HTML
</label>
									</div>
                                    <div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">队长：</label>
										<label  class=" control-label" id="s_name">
HTML;
$html_03=<<<HTML
</label>
									</div>
                                    <div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">团队状态：</label>
										<label  class=" control-label" id="s_name">
HTML;

$html_B=<<<HTML
</label>
									</div>
                                </form>
                           	</div>
						</div>
                        <div class="bs-example" data-example-id="form-validation-states-with-icons">
                        	<form method="get"  action="course_team.php">                              
                              <!--<div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
                              </div>-->
                             <div class="panel-footer">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2" style="margin-left:60px">
                                        <input type=button class="btn-inverse btn" style="width:150px" onclick="location='s_team_join.html'" value="加入或组建团队">
                                    </div>
                                </div>
                             </div>
                             <div class="panel-footer">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2" style="margin-left:60px">
                                    </div>
                                    <div class="col-sm-8 col-sm-offset-2" id="team_setup" style="margin-left:60px;margin-top:40px;display:none">
                                    </div>
                                    <script>
										function show(){
										document.getElementById("team_setup").style.display="";
										//alert(document.getElementById("div").style.display)
										}
										
									</script>
                                </div>
                             </div>
                             
                            </form>
                          </div>

                            
                            
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
$class_id=$_SESSION['class_id'];

$user_team_data=$my_db->database_get("select * from team where id in(select team_id from team_student where student_id=$user_id) and class_id=$class_id ");
$lead_data=$my_db->database_get("select * from student where id=$user_team_data[0]['admin_id']");
$count=count($user_team_data);

echo $user_team_data[0]['name'];
echo $html_01;
echo $user_team_data[0]['id'];
echo $html_02;
echo $lead_data[0]['name'];
echo $html_03;

if ($user_team_data[0]['stat']==1)
{
    echo '通过审核';
}
elseif ($user_team_data[0]['stat']==2)
{
    echo '审核中';
}
elseif ($user_team_data[0]['stat']==3)
{
    echo '未通过审核';
}
echo $html_B;

