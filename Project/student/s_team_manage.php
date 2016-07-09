<?php
/**
 * Created by PhpStorm.
 * User: 王琦
 * Date: 2016/7/8
 * Time: 15:15
 */

$html_a = <<<HTML
<!DOCTYPE HTML>
<html>
<head>
<title>团队管理</title>
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

<script>
    function agree(id) {
        
        //alert(id);
        $.get("../utils/deal_student_request.php?op=1&id="+id,function(data,state) {
          if(data > 0)alert("已通过个人申请");
          location.reload();
        })
    }
    function reject(id) {
        //alert(id);
        $.get("../utils/deal_student_request.php?op=2&id="+id,function(data,state) {
          if(data > 0)alert("已拒绝个人申请");
          location.reload();
        })
    }
    
    function moveover(stu_id,team_id) {
        //alert(id);
        $.get("../utils/appoint.php?stu_id="+stu_id+"&team_id="+team_id,function(data,status) {
        
          if(data > 0){
          alert("移交成功")
          location.reload();
          }
        })
        //window.location.href();
    }
    
    function end_team(id) {
        $.get("../utils/end_team.php?id="+id,function(data,status) {
          if(data>0){
          alert("结束组队");
          window.location.href = "course_team.php";
          }
        })
      
    }
    
    function submit_team(id) {
        $.get("../utils/submit_team.php?id="+id,function(data,status) {
          if(data>0){
          alert("已提交申请");
          window.location.href = "course_team.php";
          }
        })
      
    }
</script>
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
                            <a href="s_homework_grade.php"><i class="fa fa-indent nav_icon"></i>作业成绩</a>
                        </li>
						<li>
                            <a href="course_team.php"><i class="fa fa-comments nav_icon"></i>我的团队</a>
                        </li>
                        <li>
                            <a href="talk.php"><i class="fa fa-comments nav_icon"></i>课程讨论</a>
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
  	       				<h3>团队管理</h3>
  	         			<div class="bs-example4" data-example-id="contextual-table">
                            <table width="100%"  >
                                <tr>
                                <td><h4>申请列表</h4></td>
                                <!--<td><button class="btn-inverse btn" style="width:100px">结束组队</button></td>
                                <td><button class="btn-inverse btn" style="width:100px">提交申请</button></td>-->
                                <td style="float:right;margin-right:100px">
HTML;

$html_d = <<<HTML
                                <td>
                                </tr>
                            </table>
                            <table class="table">
                          		<thead>
                            		<tr>
                                      	<th>#</th>
                                     	<th>学号</th>
                                        <th>姓名</th>
                                        <th>状态</th>
                                      	<th>操作</th>	
                            		</tr>
                          		</thead>
                          		<tbody>
HTML;

$html_b =<<<HTML
</tbody>
                        	</table>
                       	</div>
                        <div class="panel-footer">
                            <div style="margin-left:20px">   
                             	<input type=button class="btn-inverse btn" style="width:150px" onclick="show();" value="移交负责人职位">
                            </div>
                            <div class="bs-example4" data-example-id="contextual-table" id="list_manage" style="display:none;">   
                             	<table class="table">
                                	<thead>
                                    	<tr>
                                        	<th>#</th>
                                        	<th>队员</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
HTML;

$html_c=<<<HTML
                                    	
                                    </tbody>
                                    
                                </table>
                            </div>
                            <script>
								var flag=true;
								function show(){
                                    if(flag)
                                        document.getElementById("list_manage").style.display="";
                                    else
                                        document.getElementById("list_manage").style.display="none";
                                    flag=!flag;
                                    //alert(document.getElementById("div").style.display)
                                }
								/*function hide(){
									document.getElementById("list_manage").style.display="none";
									//alert(document.getElementById("div").style.display)
								}*/										
							</script>
                         </div>
                    </div>
				</div>
                
                
                
                <div class="copy_layout">
                  	<p>BUAA<a href="">协同教学平台.&nbsp;</a> Copyright &copy; 2016.沉迷学习</p>
               	</div>

   			</div>
     	</div>
      <!-- /#page-wrapper -->
   	</div>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>

HTML;

session_start();
$class_id = $_SESSION['class_id'];
$admin_id = $_SESSION['user_id'];

require_once '../database.php';
$db = new database();
$stu_info = $db->database_get("select * from student where id=(select student_id from team_student where state=0 and team_id=(select id from team where admin_id=$admin_id))");
$team_id = $db->database_get("select id from team where admin_id=$admin_id");
echo $html_a;

$team_id1 = $team_id[0]['id'];
echo "<button class=\"btn-inverse btn\" style=\"width:100px\" onclick='end_team(\"$team_id1\")'>结束组队</button>					          
                                  	<button class=\"btn-inverse btn\" style=\"width:100px\" onclick='submit_team(\"$team_id1\")'>提交申请</button>";
echo $html_d;

if($stu_info!=null) {


    for ($i=0;$i<count($stu_info);$i++) {
        $student_id = $stu_info[$i]['id'];
        $state = '';
        echo "<tr class=\"active\">
                              			<th scope=\"row\">". ($i+1) . "</th>
                                        <td>". $stu_info[$i]['student_id'] . "</td>
                                        <td>". $stu_info[$i]['name'] . "</td>
                                        <td>未审核</td>";
        echo "<td align='centre'><button id='agree' onclick='agree(\"$student_id\")'>通过</button>					          
        <button id='reject' onclick='reject(\"$student_id\")'>拒绝</button><td>
        </tr>";

    }
}
else {
    echo "<td>暂无个人申请</td>";
}

echo $html_b;
$student_info = $db->database_get("select * from student where id in (select student_id from team_student where state=1 and team_id=(select id from team where admin_id=$admin_id))");
$pre_admin_id = $admin_id;
for ($i=0;$i<count($student_info);$i++) {
    $stu_id = $student_info[$i]['id'];
    $team_id_real = $team_id[0]['id'];
    echo "<tr class=\"active\">
                <th>". ($i+1) ."</th>
                <td>". $student_info[$i]['name'] ."</td>
                <td><button class=\"btn-inverse btn\" onclick='moveover(\"$stu_id\",\"$team_id_real\")'>移交负责人</button></td>
                
                                                    
                                        </tr>";
}

echo $html_c;


