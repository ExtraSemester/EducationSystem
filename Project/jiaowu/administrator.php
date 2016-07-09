<?php
/**
 * Created by PhpStorm.
 * User: whx
 * Date: 2016/7/8
 * Time: 14:45
 */

$html_partA = <<<HTML
<!DOCTYPE HTML>
<html>
<head>
<title>教务管理</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />-->
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

<script type="text/javascript">
    function operate(id,state) {
    //alert(id+"  "+state)
      $.get("switch_term.php?id="+id+"&state="+state,function(data,status) {
        if(data>0){
            alert("开启成功");
        }else{
            alert("关闭成功");
        }
      })
    }
</script>
</head>
<body>



<!-----------------------------------------------------顶边栏----------------------------------------------------------->
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="administrator.html" style="font-family:'华文行楷'">北航协同教学平台</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge"></span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header">
						  <strong>消息</strong>
							<div class="progress thin">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							    <span class="sr-only">40% Complete (success)</span>
							  </div>
							</div>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="../images/1.png" alt=""/>
								<div>新消息</div>
								<small>一分钟前</small>
								<span class="label label-info">新</span>
							</a>
						</li>
						
						<li class="dropdown-menu-footer text-center">
							<a href="#">查看所有消息</a>
						</li>	
	        		</ul>
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="../images/1.png"><span class="badge"></span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
						  <strong>账户</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> 更新 <span class="label label-info"></span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> 消息 <span class="label label-success"></span></a></li>
						<li class="dropdown-menu-header text-center">
						  <strong>设置</strong>
						</li>
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
        
        
<!-----------------------------------------------------顶边栏---------------------------------------------------------------->




<!-----------------------------------------------------侧边栏---------------------------------------------------------------->
          <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                  <ul class="nav" id="side-menu">
                    <li>
                        <a href="#"><i class="fa fa-laptop nav_icon"></i>教务管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                            <a href="administrator.html">学期管理</a></li>
                            <li></li>
                        </ul>
                      </li>
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>学期信息管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                  <a href="setterms.html">设置学期信息和周次</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>信息导入</a>
                        </li>
                    <li>
                            <a href="mainten_info.html"><i class="fa fa-flask nav_icon"></i>信息维护</a>
                        </li>
                    
                      <li>
                          <a href="#"><i class="fa fa-table nav_icon"></i>校历<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="calendar.html">查看校历</a>
                              </li>
                          </ul>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>
  
        
<!-----------------------------------------------------侧边栏---------------------------------------------------------------->


<!-----------------------------------------------------学期管理--------------------------------------------------------------->
  <div id="page-wrapper">
     <div class="graphs">
     <div class="alert alert-success">

<strong class="strong">欢迎使用北航协同教学平台</strong> </div>
    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
    <div class="panel-heading">
	<h2><strong>学期管理</strong></h2>
	<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
	</div>
    <div class="panel-body no-padding" style="display: block;">
					<table class="table table-striped">
						<thead>
							<tr class="warning">
								<th>编号</th>
								<th>学期</th>
								<th>开启学期</th>
								<th>关闭学期</th>
							</tr>
						</thead>
						<tbody>
HTML;

$html_partB = <<<HTML
</tbody>
					</table>
				</div>
    </div>

<script src="../js/bootstrap.min.js"></script>
<!-----------------------------------------------------学期管理--------------------------------------------------------------->
</body>
</html>
HTML;

require_once '../database.php';

$conn = new database();

$sql = "select * from terms;";

$terms = $conn->database_get($sql);

echo $html_partA;

for($i = 0;$i < count($terms); $i++){
    echo "<tr>
								<td>".($i+1)."</td>
								<td>".$terms[$i]['name']."</td>
								<td><button type=\"submit\" class=\"btn btn-primary btn-lg\" onclick='operate(".$terms[$i]['id'].",1)'>开启学期</button></form></td>
								<td><button type=\"submit\" class=\"btn btn-primary btn-lg\" onclick='operate(".$terms[$i]['id'].",2)'>关闭学期</button></form></td>
							</tr>";
}

echo $html_partB;

function diffBetweenTwoDays ($day1, $day2)
{
    $second1 = strtotime($day1);
    $second2 = strtotime($day2);

    if ($second1 < $second2) {
        $tmp = $second2;
        $second2 = $second1;
        $second1 = $tmp;
    }
    return ($second1 - $second2) / 86400;
}
