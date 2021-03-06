<?php
/**
 * Created by PhpStorm.
 * User: whx
 * Date: 2016/7/11
 * Time: 16:00
 */

$html_partA = <<<HTML
<!DOCTYPE HTML>
<html>
<head>
<title>学期管理</title>
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
                        	<a href="terminfo.php"><i class="fa fa-laptop nav_icon"></i>学期信息</a>
                     	</li>
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>学期信息管理</a>
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
  
        





<!-----------------------------------------------------学期管理--------------------------------------------------------------->
        <div id="page-wrapper">
        <div class="graphs">
   <div class="grid_3 grid_5">
     <h2><strong>设置学期信息和周次</strong></h2>
HTML;

$html_partB = <<<HTML
</div>     
     </div>
    
   <div class="graphs">
   <div class="grid_3 grid_5">
     <h3><strong>设置学期信息</strong></h3>
      <div class="bs-example2">
		<div class="modal-dialog">
			<div class="modal-content">
            <form method="get" action="set_term_date.php">
				<div class="modal-header">
					<p class="modal-title">开始时间</p>
                    <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" id="start-time" name="start_date">
				</div>
				<div class="modal-body">
					<p>结束时间</p>
                    <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" id="close-time" name="end_date">
				</div>
				<div class="modal-footer">
					<button type="sumbit"  class="btn btn-primary">保存修改</button>
				</div>
               </form> 
			</div>
		</div>
	   </div>
      </div>
   </div>  
   
   
<script src="../js/bootstrap.min.js"></script>
<!-----------------------------------------------------学期管理--------------------------------------------------------------->
</body>
</html>
HTML;

require_once '../database.php';

session_start();
$term_id = $_SESSION['term_id'];

$conn = new database();

echo $html_partA;

$sql = "select start_date,end_date from terms where id=$term_id";

$result = $conn->database_get($sql);

if($result) {
    echo "<div class=\"but_list\">
       <div class=\"alert alert-success\" role=\"alert\">
     开始时间：" . $result[0]['start_date'] . "  结束时间：" . $result[0]['end_date'] . "</div>
     </div>";
}else{
    echo "<div class=\"but_list\">
       <div class=\"alert alert-danger\" role=\"alert\">
     请在开学前设置本学期的具体信息及周次</div>
     </div>";
}

echo $html_partB;
