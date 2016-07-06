<?php 
session_start();
 ?>

<!DOCTYPE HTML>
<html>
<head>
<title>已交作业</title>
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
						<li class="m_2"><a href="#"><i class="fa fa-lock"></i> 个人资料</a></li>	
                        <li class="m_2"><a href="#"><i class="fa fa-lock"></i> 设置</a></li>	
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
        
<script>
function select_change(value)
{
	confirm(value);
}
</script>
<!------------作业列表----------------> 
        <div id="page-wrapper">
        	<div class="graphs">
	     		<div class="xs">
  	       			<h3>作业</h3>
					
					<label>作业题目选择：</label> <select id="doc-grade-select" class="select-homework" name="doctor_level" onchange="select_change(this.options[this.options.selectedIndex].value);">
<?php 

require_once "../database.php";

$db= new database();

$class_id=$_SESSION['class_id'];
if($class_id==null)
{
	$class_id==$_GET['class_id'];
	if($class_id==null)
{
	$class_id==3;
}
}

$works=$db->database_get("select id,title from work where class_id=".$class_id);

for($i=0;$i<count($works);$i++)
{
	echo '<option value ="'.$works[$i]['title'].'">'.$works[$i]['title'].'</option>';
}

 ?>
							</select>	
  	         		<div class="bs-example4" data-example-id="contextual-table">
                    	<h4>作业列表</h4>
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>作业标题</th>
                              <th>提交者</th>
                              <th>状态</th>
<th align="center">操作</th>
                            </tr>
                          </thead>
                          <tbody>
						  
<?php 

$work_id=$_GET['work_id'];
if($work_id==null)
{
	$work_id=1;
}

$wfiles=$db->database_get("select * from work_file where work_id=".$work_id);

for($i=0;$i<count($wfiles);$i++)
{
	$ki=$i+1;
	$name=$db->database_get("select name from student where id=".$wfiles[$i]['student_id']);
	$kind=$db->database_get("select kind from work where id=".$work_id);
	if($kind==1)
	{
		$grade=$db->database_get("select grade from student_work where work_id=".$work_id);
	}
	else
	{
		$grade=$db->database_get("select grade from team_work where work_id=".$work_id);
	}
	
	echo '
						  <tr class="success">
                              <th scope="row">'.$ki.'</th>
                              <td>'.$wfiles[$i]['title'].'</td>
                              <td>'.$name[0]['name'].'</td>
                              <td>';
							  if($grade==null)
							  {
								  echo "未评分";
							  }
							  else
							  {
								  echo $grade;
							  }
							  echo '</td>
							  <td>
								<button type="button" class="btn-inverse btn" onclick="javascript:window.location.href=\'.//homework/'.$work_id.'/'.$wfiles[$i]['title'].'\'">下载</button>
								<button type="button" name="grade1" onclick="grade()" class="btn-inverse btn" >评分</button>
								<button type="button" name="review1" onclick="review()" class="btn-inverse btn">评价</button>
							  </td>
						   </tr>
	
	';
}

 ?>
						   
						   
                          </tbody>
                        </table>
<button class="btn-inverse btn" onClick="location='teacher-class-homework-r.php'">发布新作业</button>
                    </div>
               	</div>
           	</div>
            
            
<script type="text/javascript">
function grade()
{
    var s=prompt("请输入分数： ");
    this.value=s;
}
function review()
{
    var a=prompt("请输入分数： ");
    this.value=a;
}

</script>
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
