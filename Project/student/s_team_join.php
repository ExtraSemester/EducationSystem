<?php
/**
 * Created by PhpStorm.
 * User: MSI
 * Date: 2016/7/8
 * Time: 9:32
 */
$html_A=<<<HTML

<!DOCTYPE HTML>
<html>
<head>
<title>团队申请</title>
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
                            <a href="talk.php"><i class="fa fa-comments nav_icon"></i>课程讨论</a>
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
  	       				<h3>团队申请</h3>
  	         			<div class="bs-example4" data-example-id="contextual-table">
                    		<h4>可加入团队</h4>
                            <table class="table">
                          		<thead>
                            		<tr>
                                      	<th>团队编号</th>
                                     	<th>团队名称</th>
                                      	<th>团队负责人</th>
                                        <th>团队状态</th>
                                        <th>操作</th>	
                            		</tr>
                          		</thead>
                          		<tbody>
                          		 <!-----------                           		
                          		 <tr>
                              			<th scope="row">2</th>
                                        <td>Column content</td>
                                       	<td>Column content</td>
                                		<td>Column content</td>
                                       	<td><form method="get" action=""><input type="hidden" value=""><button type="submit" class="btn-inverse btn">申请加入</button></form></td>	
                            		</tr>
                            		-----------!>
HTML;

$html_01=<<<HTML
<tr class="active">
                              			<th scope="row">
HTML;
$html_02=<<<HTML
</th>
                                       	<td>
HTML;

$html_03=<<<HTML
</td>
                                       	<td>
HTML;

$html_04=<<<HTML
</td>
                                       	<td>
HTML;

$html_05=<<<HTML
</td>
                                       	<td>
HTML;

$html_06=<<<HTML
<form method="get" action=""><input type="hidden" name="approve" value="1"><button type="submit" class="btn-inverse btn">申请加入</button></form></td>
                            		</tr>
HTML;

$html_10=<<<HTML
                          		</tbody>
                        	</table>
<form method="get" action="s_team_organize.php">
<input type="text"  name="team_name" placeholder="请输入团队名称">
<input type="text"  name="team_number" placeholder="请输入团队人数上限">

HTML;
$html_11 = <<<HTML
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
require_once '../database.php';
session_start();
$my_db=new database();
$user_id = $_SESSION['user_id'];
$class_id=$_SESSION['class_id'];
echo $html_A;
$all_team_data=$my_db->database_get("select * from team where class_id=$class_id and status!=2");
//计算可申请团队

for($i=0;$i<count($all_team_data);$i++)
{
    //显示申请团队信息
    $team_id=$all_team_data[$i]['id'];
    $sql = "select student_id from team_student where team_id=$team_id and state=1";
    $team_number_for_now=count($my_db->database_get($sql));//该团队当前人数

    if($team_number_for_now < $all_team_data[$i]['number'])
    {
        $admin_id = $all_team_data[$i]['admin_id'];
        $admin = $my_db->database_get("select name from student where id=$admin_id");

        //$count_available_team++;
        echo $html_01;
        echo $all_team_data[$i]['id'];
        echo $html_02;
        echo $all_team_data[$i]['name'];
        echo $html_03;
        echo $admin[0]['name'];
        echo $html_04;
        $state = "";
        switch ($all_team_data[$i]['stat']){
            case 0:
                $state="新建";break;
            case 1:
                $state="已通过";break;
            case 2:
                $state="审核中";break;
            case 3:
                $state="已拒绝";break;
        }
        echo $state;
        echo $html_05;
        echo "<form method=\"get\" action=\"join_team.php\"><input type='hidden' name='team_id' value='$team_id'>
<button type=\"submit\" class=\"btn-inverse btn\">申请加入</button></form></td>
                            		</tr>";
        
    }
    else
    {
        echo "无可申请团队";
    }
}
echo $html_10;
echo "<input type=\"hidden\"  name=\"admin_id\" value='$user_id'>
      <input type=\"hidden\"  name=\"class_id\" value='$class_id'>";
echo $html_11;
