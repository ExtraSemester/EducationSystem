<?php
/**
 * Created by PhpStorm.
 * User: whx
 * Date: 2016/7/6
 * Time: 20:21
 */
$html_partA = <<<HTML
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
  	       				<h3>作业详情</h3>
  	         			<div class="tab-content">
						  <div class="tab-pane active" id="horizontal-form">
                           <form class="form-horizontal">
                    		<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">标题：</label>
HTML;

$html_partB = <<<HTML
</div>
                            <div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">作业要求：</label>
HTML;

$html_partC = <<<HTML
</div>
                            <div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">截止时间：</label>
HTML;

$html_partD = <<<HTML
</div>
						   	<div class="form-group">
								<label for="focusedinput" class="col-sm-2 control-label">附件：</label>
								<label id="s_w_deadline">文件名</label>
                                <button type="submit" class="btn-inverse btn">下载附件</button>  
                                <!-----或者点击文件名链接直接下载----->
                                <!-----<a href="#" onClick="">文件名</a> ----->  
							</div>
                           </form>
                       	  </div>
                        </div>
                        <div class="bs-example4" data-example-id="contextual-table">
                        	<h4>提交作业</h4>
                            <div class="form-group panel-footer" style="height:auto;min-height:70px;">
                                                            	
HTML;

$html_partE = <<<HTML
<div class="row" style="margin-left:10px;">
                                    	<label class=" ">从计算机中选择文件：</label>
                                        <input  type="file" name="file" id="file"/>
                                    </div>
                                    <div id="fileName"></div>
                                    <div id="fileSize"></div>
                                    <div id="fileType"></div>
                                    <div class="row" style="margin-left:10px;margin-top:10px;margin-bottom:10px">
<input type="submit" onclick="uploadFile()" value="提交作业" />
                                        <input type="button" onclick="" value="取消" />
                                   	</div>
                                    <!--<div class="panel-footer">
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <button class="btn-inverse btn" style="width:100px">确定</button>
                                                
                                            </div>
                                        </div>
                                     </div>-->
                                    
HTML;

$html_partF = <<<HTML
<div id="progressNumber"></div>
                               	</form>
                           	</div>
                        </div>
                        
                    </div>
                    
				</div>
                <div class="copy_layout">
               		<p>BUAA<a href="">协同教学平台.&nbsp;</a> Copyright &copy; 2016.沉迷学习</p>
                </div>
       		</div>
      <!-- /#page-wrapper -->
      
      
   		</div>
    <!-- /#wrapper -->
    
      
<!-------------边底栏信息-------------->
  
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

$conn = new database();

session_start();
$user_id = $_SESSION['user_id'];
$work_id = $_GET['id'];
//$work_id = 4;

$sql = "SELECT title,content,end_time,kind FROM work WHERE id=$work_id";

$result = $conn->database_get($sql);

$title = $result[0]['title'];
$content = $result[0]['content'];
$end_time = $result[0]['end_time'];
$kind = $result[0]['kind'];

$sql1 = "SELECT status FROM student WHERE id=$user_id";
$stu = $conn->database_get($sql1);

$status = $stu[0]['status'];

$route = "../teacher-class/homework/".$work_id;
if(!file_exists($route)){
	mkdir($route);
}

echo $html_partA;
echo "<label  class=\" control-label\" id=\"s_w_title\">$title</label>";

echo $html_partB;
echo "<label  class=\" control-label\" id=\"s_w_content\">$content</label>";

echo $html_partC;
echo "<label  class=\" control-label\" id=\"s_w_deadline\">$end_time</label>";

echo $html_partD;
if($kind==2 && $status==1){
	echo "只有团队负责人才可以提交作业~";
}else {
	echo "<form id=\"\" enctype=\"multipart/form-data\" method=\"post\" action=\"upload_work.php?work_id=$work_id\" >";
	echo $html_partE;
}

echo $html_partF;
