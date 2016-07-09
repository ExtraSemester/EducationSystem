<?php 
session_start();
$class_id=$_SESSION['class_id'];
$class_name=$_SESSION['class_name'];
$user_id=$_SESSION['user_id'];

require_once "../database.php";
$db=new database();
$res=$db->database_get("select name from teacher where id=".$user_id);
$user_name=$res[0]['name'];

$cont=$_GET['txt'];
if($cont!=null)
{
	$db->database_do('insert into talk values('.$class_id.',"'.$user_name.':'.$cont.'",NOW())');
}

 ?>

<!DOCTYPE HTML>
<html>
<head>
<title>课程讨论</title>
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
					<li>
						<a href="talk.php"><i class="fa fa-comments nav_icon"></i>课程讨论</a>
					</li>
                </ul>
            </div>
        </div>
            <!-----------侧边------------------>
        </nav>
        
        
		<div class="copyrights">Collect from <a href="#" ></a></div>
        	<div id="page-wrapper">
       			<div class="graphs">
					<div class="form-group">
					<form action="talk.php" method="get" id="talkf">
						<div class="col-sm-8">
							<input name="txt" id="txt" cols="50" rows="4" class="form-control1"></div>
							<input type="submit" class="btn-inverse btn" style="width:100px" value="发送">
						</div>
					</form>
					
<?php 
$talks=$db->database_get("select * from talk where class_id=".$class_id." order by time desc");
$les=count($talks);
for($i=0;$i<count($talks);$i++)
{
	$level=$les-$i;
	$tk=$talks[$i]['content'];
	$pos=strpos($tk,':');
	$na=substr($tk,0,$pos);
	$nb=substr($tk,$pos+1);
	
	echo '
		<div class="panel-footer">
			<table width="1000px">
				<td width="10%" style="TEXT-ALIGN: center"><img style="border-radius:50%" src="../images/people.png" /><br/><span>'.$na.'</span></td>							
				<td width="74%" style="word-break:break-all">'.$nb.'</td>
				<td width="16%" align="right"><span >'.$level.'#<br/>'.$talks[$i]['time'].'</span></td>
			</table>
		</div>
';
}
 ?>
							  
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
