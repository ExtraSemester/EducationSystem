<?php
/**
 * Created by PhpStorm.
 * User: whx
 * Date: 2016/7/5
 * Time: 11:46
 */
$html_a = <<<HTML
<!DOCTYPE HTML>
<html>
<head>
<title>已发作业</title>
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

<script>
    function toWorkDetail(id) {
      window.location.href = "teacher-class-homework-s.php?id="+id;
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
                <p class="navbar-brand" href="" style="font-family:'华文行楷'">北航协同教学平台</p>
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
                            </ul>
                </div>
            </div>
        </nav>
<!------------侧边栏----------------->
        
        
<!------------作业列表----------------> 
        <div id="page-wrapper">
        	<div class="graphs">
	     		<div class="xs">
  	       			<h3>作业</h3>
  	         		<div class="bs-example4" data-example-id="contextual-table">
                    	<h4>已发作业列表</h4>
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>作业标题</th>
                              <th>操作</th>
                              <th>截止时间</th>
                            </tr>
                          </thead>
                          <tbody>
HTML;

$html_b = <<<HTML
</tbody>
                        </table>
<button class="btn-inverse btn" onClick="location='teacher-class-homework-r.html'">发布新作业</button>
                    </div>
               	</div>
           	</div>
<!------------作业列表----------------> 
            
            
            
            <div class="copy_layout" >
            	<p>BUAA<a href="">协同教学平台.&nbsp;</a> Copyright &copy; 2016.沉迷学习</p>
	    	</div>
      	</div>
        
</div>
    <!-- /#wrapper -->

<!-- Nav CSS -->
<link href="../css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>
HTML;

    require_once '../database.php';
    require_once 'class_info.php';

    $conn = new database();

    session_start();
    $class_id = $_SESSION['class_id'];
    //$class_name = '高等数学';
    //echo "<script type='text/javascript'>alert(\"$class_name\")</script>";

    $sql = "SELECT title,content,end_time FROM work 
WHERE class_id=$class_id;";

    $result = $conn->database_get($sql);

    echo $html_a;

    if($result) {
        for ($i = 0; $i < count($result); $i++) {

            $id = $class_id;
            $title = $result[$i]['title'];
            $content = substr($result[$i]['content'], 0, 20);
            $end_time = $result[$i]['end_time'];

            echo "<tr class='active'>
                              <th scope='row'>" . ($i+1) . "</th>
                              <td>" . $title . "</td>
                              <td><button class=\"btn-inverse btn\" onclick='toWorkDetail(".$id.")'>
                              查看作业详情</button></td>
                              <td>" . $end_time . "</td>
                            <tr>";
        }

        echo $html_b;
    }else{
        echo "<td>暂无作业信息</td>";
        echo $html_b;
    }


