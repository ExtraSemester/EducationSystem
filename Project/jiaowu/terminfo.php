<?php
/**
 * Created by PhpStorm.
 * User: MSI
 * Date: 2016/7/9
 * Time: 14:28
 */
require_once '../database.php';

$html_A=<<<HTML
<!DOCTYPE HTML>
<html>
<head>
<title>学期课程信息</title>
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
<!-- Nav CSS -->
<link href="../css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>
<script src="../js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="../js/d3.v3.js"></script>
<script src="../js/rickshaw.js"></script>
<script src="../js/bootstrap.min.js"></script>
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
	        		
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="../images/1.png"><span class="badge"></span></a>
	        		<ul class="dropdown-menu">
						<li class="m_2"><a href="administrator.php"><i class="fa fa-home"></i> 首页<span class="label label-info"></span></a></li>
						
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
                        	<a href="#"><i class="fa fa-laptop nav_icon"></i>学期信息</a>
                     	</li>
                        <li>
                            <a href="setterms.php"><i class="fa fa-indent nav_icon"></i>学期信息管理</a>
                        </li>
                        <li>
                            <a href="import_term.html"><i class="fa fa-envelope nav_icon"></i>信息导入</a>
                        </li>
                    	<!--<li>-->
                            <!--<a href="mainten_info.html"><i class="fa fa-flask nav_icon"></i>信息维护</a>-->
                        <!--</li>-->
                    </ul>
                </div>
            </div>
        </nav>
  
        
<!-----------------------------------------------------侧边栏---------------------------------------------------------------->


<!-----------------------------------------------------学期管理--------------------------------------------------------------->
  <div id="page-wrapper">
     <div class="graphs">
	   <div class="xs">
  	 <h3>课程信息</h3>
   <div class="panel-body1">
   <table class="table">
     <thead>
        <tr>
          <th>课程编号</th>
          <th>课程名称</th>
          <th>教师工号</th>
          <th>代课教师<th>
        </tr>
      </thead>
      <tbody>
        
HTML;
$html_01=<<<HTML
        <tr>
          <th scope="row">
HTML;
$html_02=<<<HTML
</p></th>
          <td>
HTML;
$html_03=<<<HTML
</td>
          <td>
HTML;
$html_04=<<<HTML
</td>
          <td>
HTML;
$html_05=<<<HTML
<td>
        </tr>
HTML;


$html_B=<<<HTML
      </tbody>
    </table>

    </div>
    </div>
	</div>
    </div>


<!-----------------------------------------------------学期管理--------------------------------------------------------------->
</body>
</html>


HTML;
require_once '../database.php';
session_start();
$my_db=new database();
$term_id = $_GET['id'];

if($term_id == null){
    $term_id = $_SESSION['term_id'];
}else{
    $_SESSION['term_id']=$term_id;
}

$class_ids=$my_db->database_get("select id,name from class where term_id=$term_id");
echo $html_A;
$count=count($class_ids);
//echo $count;
for($i=0;$i<$count;$i++)
{
    $class_id = $class_ids[$i]['id'];
    $class_name=$class_ids[$i]['name'];

    $teacher_ids=$my_db->database_get("select teacher_id from class_teacher where class_id=$class_id");

    $teacher_id = $teacher_ids[0]['teacher_id'];
    $teacher_name=$my_db->database_get("select employee_id,name from teacher where id=$teacher_id");
    echo $html_01;
    echo $class_id;
    echo $html_02;
    echo $class_name;
    echo $html_03;
    echo $teacher_name[0]['employee_id'];
    echo $html_04;

    echo $teacher_name[0]['name'];

    echo $html_05;
}
echo $html_B;