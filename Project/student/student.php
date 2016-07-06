<?php 
$html_a = <<<HTML
			<!DOCTYPE HTML>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<title>BUAA协同教学平台</title>
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
<link href='' rel='stylesheet' type='text/css'>
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
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="font-family:'华文行楷'">北航协同教学平台</a>
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
						<!--<li class="avatar">
							<a href="#">
								<img src="../images/2.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="../images/3.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="../images/4.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="../images/5.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="../images/pic1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="dropdown-menu-footer text-center">
							<a href="#">View all messages</a>
						</li>	-->
	        		</ul>
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="../images/1.png"></a>
	        		<ul class="dropdown-menu">
						<!--<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
						<li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
						<li class="divider"></li>
						<li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>-->
						<li class="m_2"><a href="#"><i class="fa fa-lock"></i> 个人资料</a></li>	
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
                            <a href="s_information.php"><i class="fa fa-male fa-fw nav_icon"></i>个人信息</a>
                        </li>
                        <li>
                            <a href="#" onclick="show('course_list');"><i class="fa fa-indent nav_icon"></i>已选课程<span class="fa arrow"></span></a>
                            <!--<ul class="nav nav-second-level">
                                <li>
                                    <a href="grids.html">离散数学</a>
                                </li>
                            </ul>-->
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-comments nav_icon"></i>我的团队<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">沉迷学习小组</a>
                                </li>
                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!--<li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Mailbox<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a href="compose.html">Compose email</a>
                                </li>
                            </ul>
                           
                        </li>-->
                        <li>
                            <a href=""><i class="fa fa-question nav_icon"></i>帮助</a>
                        </li>
                         <!--<li>
                            <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Forms<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="forms.html">Basic Forms</a>
                                </li>
                                <li>
                                    <a href="validation.html">Validation</a>
                                </li>
                            </ul>
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Tables<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="basic_tables.html">Basic Tables</a>
                                </li>
                            </ul>
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Css<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="media.html">Media</a>
                                </li>
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                            </ul>
                           
                        </li>-->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		<div class="copyrights">Collect from <a href="#" ></a></div>
        <div id="page-wrapper">
        <div class="graphs">
        
     	<!--<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>45%</strong></h5>
                      <span>New Orders</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>1019</strong></h5>
                      <span>New Visitors</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-comment user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>1012</strong></h5>
                      <span>New Users</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$450</strong></h5>
                      <span>Profit Today</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
      </div>-->
<script>
	function class_jump(nam)
	{
		var nickname = document.getElementById("cname");
		nickname.value = nam;

		document.formc.submit();

	}
</script>
      	<div class="col_1">
        	<div></div>
			<div class="" id="course_list" style="float:left;display:block;width:auto;height:auto;border:1px solid #CCC">
            	<div style="width:auto;height:40px;background:#3C9">
                	<h3 style="margin-left:10px;color:#FFF">已选课程</h3>
                </div>
                <ul class="nav nav-second-level" style="width:300px">
                <form name="formc" method="get" action="class.php">
                        <input type="hidden" id="cname" name="class_name" value="value">
						<input type="hidden" id="cname" name="user_id" value="
HTML;
$html_ab=<<<HTML
						">
                </form>


HTML;

$html_b = <<<HTML
			</ul>
            </div>
            <div class="col-md-4 span_7" style="float:right">	
		    	<div class="cal1 cal_2">
                	<div class="clndr" >
                    	<div class="clndr-controls">
                        	<div class="clndr-control-button">
                            	<p class="clndr-previous-button">previous</p>
                           	</div>
                            <div class="month">July 2016</div>
                            <div class="clndr-control-button rightalign">
                            	<p class="clndr-next-button">next</p>
                           	</div>
                       	</div>
                        <table class="clndr-table" border="0" cellspacing="0" cellpadding="0">
                        	<thead>
                        	<tr class="header-days">
                            	<td class="header-day">S</td>
                                <td class="header-day">M</td><td class="header-day">T</td>
                                <td class="header-day">W</td><td class="header-day">T</td>
                                <td class="header-day">F</td><td class="header-day">S</td>
                          	</tr>
                            </thead>
                          	<tbody>
                            <tr>
                            	<td class="day adjacent-month last-month calendar-day-2015-06-28"><div class="day-contents">28</div></td>
                                <td class="day adjacent-month last-month calendar-day-2015-06-29"><div class="day-contents">29</div></td>
                                <td class="day adjacent-month last-month calendar-day-2015-06-30"><div class="day-contents">30</div></td>
                                <td class="day calendar-day-2015-07-01"><div class="day-contents">1</div></td>
                                <td class="day calendar-day-2015-07-02"><div class="day-contents">2</div></td>
                                <td class="day calendar-day-2015-07-03"><div class="day-contents">3</div></td>
                                <td class="day calendar-day-2015-07-04"><div class="day-contents">4</div></td>
                             </tr>
                             <tr><td class="day calendar-day-2015-07-05"><div class="day-contents">5</div></td><td class="day calendar-day-2015-07-06"><div class="day-contents">6</div></td><td class="day calendar-day-2015-07-07"><div class="day-contents">7</div></td><td class="day calendar-day-2015-07-08"><div class="day-contents">8</div></td><td class="day calendar-day-2015-07-09"><div class="day-contents">9</div></td><td class="day calendar-day-2015-07-10"><div class="day-contents">10</div></td><td class="day calendar-day-2015-07-11"><div class="day-contents">11</div></td></tr><tr><td class="day calendar-day-2015-07-12"><div class="day-contents">12</div></td><td class="day calendar-day-2015-07-13"><div class="day-contents">13</div></td><td class="day calendar-day-2015-07-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-07-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-07-16"><div class="day-contents">16</div></td><td class="day calendar-day-2015-07-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-07-18"><div class="day-contents">18</div></td></tr><tr><td class="day calendar-day-2015-07-19"><div class="day-contents">19</div></td><td class="day calendar-day-2015-07-20"><div class="day-contents">20</div></td><td class="day calendar-day-2015-07-21"><div class="day-contents">21</div></td><td class="day calendar-day-2015-07-22"><div class="day-contents">22</div></td><td class="day calendar-day-2015-07-23"><div class="day-contents">23</div></td><td class="day calendar-day-2015-07-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-07-25"><div class="day-contents">25</div></td></tr><tr><td class="day calendar-day-2015-07-26"><div class="day-contents">26</div></td><td class="day calendar-day-2015-07-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-07-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-07-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-07-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-31"><div class="day-contents">31</div></td><td class="day adjacent-month next-month calendar-day-2015-08-01"><div class="day-contents">1</div></td></tr></tbody></table>
           		</div>
         		</div>
    		</div>
        
         <div class="clearfix"> </div>
	  </div>
	  <div class="span_11">
		
		  <!----Calender -------->
			<link rel="stylesheet" href="../css/clndr.css" type="text/css" />
			<script src="../js/underscore-min.js" type="text/javascript"></script>
			<script src= "../js/moment-2.2.1.js" type="text/javascript"></script>
			<script src="../js/clndr.js" type="text/javascript"></script>
			<script src="../js/site.js" type="text/javascript"></script>
			<!----End Calender -------->
		</div>
		
		<div class="copy" >
            <p>BUAA<a href="">协同教学平台.&nbsp;</a> Copyright &copy; 2016.沉迷学习</p>
	    </div>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
HTML;

		session_start();

		if (isset($_SESSION["user_id"]))
		{
			require_once '../database.php';
		
			$db = new database();
			$user_id=$_GET["user_id"];
			$class_data=$db->database_get("select class.name from class_student,class where class_student.class_id=class.id and class_student.student_id=$user_id");
			echo $html_a;
			echo $user_id;
			echo $html_ab;
			
			for($i=0;$i<count($class_data);$i++)
			{
				echo "<li><a href=\"javascript:class_jump('".$class_data[$i]['name']."');\">".$class_data[$i]['name']."</a></li>";
			}
			echo $html_b;
		}
		else
		{
			echo "未登陆";
		}
?>
