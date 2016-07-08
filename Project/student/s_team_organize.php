<?php
/**
 * Created by PhpStorm.
 * User: MSI
 * Date: 2016/7/8
 * Time: 15:37
 */
$html_A=<<<HTML
<!DOCTYPE HTML>
<html>
<head>
<title>团队组建</title>
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
						
						<li class="m_2"><a href="s_information.php"><i class="fa fa-lock"></i> 个人资料</a></li>	
                        <li class="m_2"><a href="#"><i class="fa fa-lock"></i> 设置</a></li>	
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
                            <a href="s_resource.html"><i class="fa fa-indent nav_icon"></i>课程资料</a>
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
                            <a href="#"><i class="fa fa-question nav_icon"></i>帮助</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
        
<!-----------------------------------可加入团队部分---------------------------------------->
        	<div id="page-wrapper">
       			<div class="graphs">
                	<div class="xs">
                            <form method="post" action="">
<input type="text"  name="team_name" placeholder="请输入团队名称">
<input type="text"  name="team_number" placeholder="请输入团队人数上限">
<button type="submit" class="btn-inverse btn">组建团队</button>
</form>
                       	</div>
                    </div>
				</div>
<!-------------边底栏信息-------------->
  <div class="copy_layout">
	  <p>BUAA<a href="">协同教学平台.&nbsp;</a> Copyright &copy; 2016.沉迷学习</p>
  </div>
   </div>
      </div>
   </div>
<!-------------边底栏信息-------------->             
       		</div>
      <!-- /#page-wrapper -->
      
    
      
   		</div>
    <!-- /#wrapper -->

<!-----------------------------------可加入团队部分---------------------------------------->








    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>

HTML;

//创建团队需要的团队信息
echo $html_A;

$team_name=$_GET["team_name"];
$team_number=$_GET["team_number"];
$search_team_name=$my_db->database_get("select id from team where name=$team_name");
if(count($search_team_name)==0) {
    $table= 'team';
    $values = array('name'=>$team_name,'admin_id'=>$user_id,'class_id'=>$class_id,'number'=>$team_number,'stat'=>2);
    $db->insert_to_db($table,$values);
    echo "<script type='text/javascript'>alert('团队创建成功,请等待审核！')</script>";
    echo "<script type='text/javascript'>location='student/course_team.php';</script>";
}
else{
    echo "<script type='text/javascript'>alert('该团队名字已有人使用，请重新输入！')</script>";
    echo "<script type='text/javascript'>location='student/s_team_organize.php';</script>";
}