<?php
/**
 * Created by PhpStorm.
 * User: whx
 * Date: 2016/7/4
 * Time: 21:16
 */

$html_part_a = <<<HTML
<!DOCTYPE HTML>
<html>
<head>
<title>团队审核</title>
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
<script>

    function agree(id) {
      alert(id);
      $.get("../utils/deal_team_request.php?op=1&id="+id,function(data,status) {
          if(data > 0)alert("已通过团队申请");
          location.reload();
        })
    }
    function reject(id) {
       $.get("../utils/deal_team_request.php?op=3&id="+id,function(data,status) {
          if(data > 0)alert("已拒绝团队申请");
          location.reload();
        })
    }
    
</script>
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
                <a class="navbar-brand" href="index.html">BUAA协同教学平台</a>
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
                            <a href="teacher-class-message.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>课程信息</a>
                        </li>
                           <li>
                            <a href="teacher-class-team.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>团队申请</a>
                        </li>
                           <li>
                            <a href="teacher-class-givehomework"><i class="fa fa-dashboard fa-fw nav_icon"></i>发布作业</a>
                        </li>
                        <li>
                            <a href="teacher-class-file.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>发布资源</a>
                        </li>
                        <li>
                            <a href="teacher-class-homework.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>已交作业</a>
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
  	 <h3>团队申请</h3>
   <div class="panel-body1">
   <table class="table">
     <thead>
        <tr>
          <th>团队编号</th>
          <th>团队名称</th>
          <th>团队状态</th>
          <th>操作<th>
          <th>团队负责人</th>
        </tr>
      </thead>
      <tbody>
HTML;

$html_part_b = <<<HTML
</tbody>
    </table>
    </div>
    </div><!-- /.table-responsive -->
  </div>
  </div>
<!------------课程信息表格------------->
  
  
<!-------------边底栏信息-------------->
  <div class="copy_layout">
      <p>&copy; 2015.Company name All rights reserved.More CopyrightTemplates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
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

    $class_name = $_GET['class_name'];

    $class_name = "系统分析";
    require_once '../database.php';
    $conn = new database();

    $team_info = $conn->database_get("SELECT id,name,stat,admin_id FROM team ".
        "WHERE team.class_id = (SELECT id FROM class WHERE name='$class_name');");

    echo $html_part_a;

    if($team_info != null) {
        for ($i = 0; $i < count($team_info); $i++) {

            $state = '';

            echo "<tr>
          <th scope=\"row\">" . $team_info[$i]['id'] . "</th>
          <td>" . $team_info[$i]['name'] . "</td>";

            switch ($team_info[$i]['stat']) {
                case 1:
                    $state = '已通过';
                    echo "<td><font color = 'green'>" . $state . "</font></td>";
                    break;
                case 2:
                    $state = '待审核';
                    echo "<td><font color = '#6495ed'>" . $state . "</font></td>";
                    break;
                case 3:
                    $state = '已拒绝';
                    echo "<td><font color = 'red'>" . $state . "</font></td>";
                    break;
            }

            $admin_names = $conn->database_get("SELECT name FROM student WHERE id = ".
                $team_info[$i]['admin_id']);
            $admin_name = $admin_names[0]['name'];

            if($team_info[$i]['stat'] == 2){

                echo "<td align='centre'><button id='agree' onclick='agree(". $team_info[$i]['id'] .")'>通过</button>					          <button id='reject' onclick='reject(".$team_info[$i]['id']."'>拒绝</button><td>
          <td>".$admin_name."</td>
        </tr>";
            }else {
                echo "<td align='centre'><button disabled='disabled'>通过</button>					          <button disabled='disabled'>拒绝</button><td>
          <td>".$admin_name."</td>
        </tr>";
            }

        }


    }else {

        echo "<td>暂无团队申请</td>";
    }

    echo $html_part_b;

