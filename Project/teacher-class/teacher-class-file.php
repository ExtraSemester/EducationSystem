<!DOCTYPE HTML>
<html>
<head>
<title>发布资源</title>
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
                        <script>
						function logout(){
							if (confirm("确认退出？")){
							   top.location = "../utils/logout.php";
						   }
						  return false;
						}
					</script>
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
<!------------上传文件部分------------>
<div id="page-wrapper">
<div class="graphs">
	     		<div class="xs">
	<h3>资源管理</h3>
	<div class="bs-example4" data-example-id="contextual-table">
	<?php 
$html_a=<<<HTML
<table class="table">
				<tr>
				<th>类型</th>
				<th>文件名</th>
				<th>更新日期</th>
				<th>删除</th>
				<th>重命名
				
	<form>			
	<input type="text" id="com_add2" name="com_add2" placeholder="文件(夹)新名称">
</form>
				
				</th>
				</tr>
HTML;
$html_b=<<<HTML
</table>
HTML;


$class_name=$_GET['class_name'];
$route=$_GET['route'];
$command=$_GET['command'];
$com_add=$_GET['com_add'];
$com_add2=$_GET['com_add2'];

if($class_name==null)
{
	$class_name="生产实习";
}
$real_route="./data/".$class_name."/$route";
if(file_exists($real_route)==false)
{
	mkdir($real_route,0777);
}

if($command=='add')
{
	if(file_exists($real_route."新建文件夹"))
	{
		for($i=1;$i<10;$i++)
		{
			if(!file_exists($real_route."新建文件夹".$i))
			{
				mkdir($real_route."新建文件夹".$i,0777);
				break;
			}
		}
	}
	else
	{
		mkdir($real_route."新建文件夹",0777);
	}
}
else if($command=='upload')
{
		if ($_FILES["fileToUpload"]["error"] > 0)
    {
		echo "Return Code: " . $_FILES["fileToUpload"]["error"] . "<br />";
    }
	else
    {
		$class_name=$_POST['class_name'];
		$route=$POST['route'];

		if($class_name==null)
		{
			$class_name="生产实习";
		}
		$real_route="./data/".$class_name."/$route";

		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$real_route.$_FILES["fileToUpload"]["name"]);
    }
}
else if($command=='in')
{
	$route=$route.$com_add."/";
	$real_route="./data/".$class_name."/$route";
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
	
	$real_route="./data/".$class_name."/$route";
}
else if($command=='rename')
{
	rename($real_route.$com_add,$real_route.$com_add2);
}
else if($command=='delete')
{
	if(is_dir($real_route.$com_add))
	{
		rmdir($real_route.$com_add);
	}
	else
	{
		unlink($real_route.$com_add);
	}
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

<script>
	function in_folder(choose)
	{
		var nickname = document.getElementById('command');
		nickname.value = 'in';
		var nickname2 = document.getElementById('com_add');
		nickname2.value = choose;
		document.datas.submit();
	}
</script>

<script>
	function my_rename(choose)
	{
		var nickname = document.getElementById('command');
		nickname.value = 'rename';
		var nickname2 = document.getElementById('com_add');
		nickname2.value = choose;
		if(document.getElementById('com_add2').value.length==0)
		{
			confirm("请输入新的文件(夹)名称");
		}
		else
		{
			document.datas.submit();
		}
	}
</script>

<script>	
	function my_delete(choose)
	{
		var nickname = document.getElementById('command');
		nickname.value = 'delete';
		var nickname2 = document.getElementById('com_add');
		nickname2.value = choose;
		document.datas.submit();
	}
</script>

<a href="javascript:class_jump('command','add');">新建文件夹</a>
<a href="javascript:class_jump('command','return');">返回</a>

<form name="datas" method="get" action="teacher-class-file.php">
	<input type="hidden" id="class_name" name="class_name" >
	<input type="hidden" id="route" name="route"
<?php 
echo "value=\"$route\"";
 ?>
 >
	<input type="hidden" id="command" name="command">
	<input type="hidden" id="com_add" name="com_add" >

<?php 
echo $html_a;
$files=scandir($real_route);

for($i=2;$i<count($files);$i++)
{
	if(is_dir($real_route.$files[$i]))
	{
		echo "<tr><td><img src='../images/folder.png'/></td>
          <td><a href=\"javascript:in_folder('".$files[$i]."');\">".$files[$i]."</a></td>
          <td>26 minutes ago</td>
		  
		  <td><a href=\"javascript:my_delete('".$files[$i]."');\">删除</a></td>
		  <td><a href=\"javascript:my_rename('".$files[$i]."');\">重命名</a></td>
		  
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
		  
		  <td><a href=\"javascript:my_delete('".$files[$i]."');\">删除</a></td>
		  <td><a href=\"javascript:my_rename('".$files[$i]."');\">重命名</a></td>
		  </tr>";
	}
}
echo $html_b;
echo "当前位置:".$real_route;

 ?>

<form action="upload.php" method="post"
enctype="multipart/form-data">
<label for="file">上传到当前文件夹</label>
<input type="hidden" id="route2" name="route2"
<?php 
echo "value=\"$route\"".'"';
 ?>
 />
<input type="file" name="file" id="file" /> 
<br />
<input type="submit" name="submit" value="Submit" />
</form>
    
</div>
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

<!-- Nav CSS -->
<link href="../css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>
