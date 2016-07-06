
<!DOCTYPE HTML>
<html>
<head>
<title>教学资源</title>
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
                            <a href="#"><i class="fa fa-indent nav_icon"></i>课程资料</a>
                        </li>
                        <li>
                            <a href="s_homework.php"><i class="fa fa-indent nav_icon"></i>课程作业</a>
                        </li>
						<li>
                            <a href="s_homework_grade.php"><i class="fa fa-indent nav_icon"></i>作业成绩</a>
                        </li>
						<li>
                            <a href="course_team.html"><i class="fa fa-comments nav_icon"></i>我的团队</a>
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
  	       				<h3>课程资源</h3>
  	         			<div class="bs-example4" data-example-id="contextual-table">
                    		
							<table class="table">
                          <thead>
				<tr>
                              <th>类型</th>
                              <th>文件名</th>
                              <th>更新日期</th>
							  <th>下载</th>
                            </tr>
                          </thead>
						  
						  
<?php 

$class_name=$_GET['class_name'];
$route=$_GET['route'];
$command=$_GET['command'];
$com_add=$_GET['com_add'];
$com_add2=$_GET['com_add2'];

session_start();

if($class_name==null)
{
	$class_name=$_SESSION['class_name'];
	
	if($class_name==null)
	{
		$class_name="生产实习";
	}
}
$real_route="../teacher-class/data/".$class_name."/$route";
if(file_exists($real_route)==false)
{
	mkdir($real_route,0777);
}

if($command=='in')
{
	$route=$route.$com_add."/";
	$real_route="../teacher-class/data/".$class_name."/$route";
}
else if($command=='return')
{
	$bef=substr($route,0,-1);
	$pos=strrpos($bef,'/');
	if($pos>0)
	{
		$route=substr($bef,0,$pos+1);
	}
	else
	{
		$route=null;
	}
	
	$real_route="../teacher-class/data/".$class_name."/$route";
}
?>

<script>
	function class_jump(choose,nam)
	{
		var nickname = document.getElementById(choose);
		nickname.value = nam;
		document.datas.submit();
	}
</script>
<button class="btn-inverse btn" onClick="class_jump('command','return');">返回上一层</button>

<form name="datas" method="get" action="s_resource.php">
	<input type="hidden" id="class_name" name="class_name" >
	<input type="hidden" id="route" name="route"
<?php 
echo "value=\"$route\"";
 ?>
 >
	<input type="hidden" id="command" name="command">
	<input type="hidden" id="com_add" name="com_add" >
	<input type="hidden" id="com_add2" name="com_add2" >
</form>

<?php 
$files=scandir($real_route);

for($i=2;$i<count($files);$i++)
{
	if(is_dir($real_route.$files[$i]))
	{
		echo "<tr><td><img src='../images/folder.png'/></td>
          <td><a href=\"javascript:in_folder('".$files[$i]."');\">".$files[$i]."</a></td>
          <td>26 minutes ago</td>
		  </tr>";
	}
}
for($i=2;$i<count($files);$i++)
{
	if(is_dir($real_route.$files[$i])==false)
	{
		echo "<tr><td><img src='../images/file.jpg'/></td>
          <td><a href='".$real_route.$files[$i]."'>".$files[$i]."</a></td>
          <td>26 minutes ago</td>
		  <td><button type=\"button\" class=\"btn-inverse btn\" onclick=\"javascript:window.location.href='".$real_route.$files[$i]."'\">下载</button></td>
		  </tr>";
	}
}
?>

							</table>
<?php 
echo "当前位置:./".$route;
 ?>
                       	</div>
                    </div>
				</div>
                
                <!-------------边底栏信息-------------->
                <div class="copy_layout">
					<p>BUAA<a href="">协同教学平台.&nbsp;</a> Copyright &copy; 2016.沉迷学习</p>
               	</div>
                <!-------------边底栏信息-------------->
       		</div>
      <!-- /#page-wrapper -->
  
   		</div>
    <!-- /#wrapper -->

   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
