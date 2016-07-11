<?php
/**
 * Created by PhpStorm.
 * User: 王琦
 * Date: 2016/7/4
 * Time: 15:21
 */

$html_partA = <<<HTML
<!DOCTYPE HTML>
<html>
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
                <a class="navbar-brand" href="student.php" style="font-family:'华文行楷'">北航协同教学平台</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge"></span></a>
	        		
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="../images/1.png"></a>
	        		<ul class="dropdown-menu">
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
                            <a href="#"><i class="fa fa-male fa-fw nav_icon"></i>个人信息</a>
                        </li>
                        <li>
                            <a href="student.php"><i class="fa fa-indent nav_icon"></i>已选课程</a>
                            <!--<ul class="nav nav-second-level">
                                <li>
                                    <a href="grids.html">离散数学</a>
                                </li>
                            </ul>-->
                            <!-- /.nav-second-level -->
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
        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3>个人信息</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal">
HTML;

$html_partB = <<<HTML
                        </div>
			</div>
<div class="bs-example" data-example-id="form-validation-states-with-icons">
    <form>
      
      <!--<div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" id="exampleInputFile">
        <p class="help-block">Example block-level help text here.</p>
      </div>-->
      <div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button class="btn-inverse btn" style="width:100px">确定</button>
				
			</div>
		</div>
	 </div>
    </form>
  </div>
  </div>
  <div class="copy_layout" >
            <p>BUAA<a href="">协同教学平台.&nbsp;</a> Copyright &copy; 2016.沉迷学习</p>
	    </div>
  </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="../css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
 <script src="../js/bootstrap.min.js"></script>
<script src="../js/metisMenu.min.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>
HTML;

    session_start();
    if(isset($_SESSION["user_id"])) {
        require_once '../database.php';
        $db = new database();
        $username = "王支书";
        $user_id = $_SESSION["user_id"];

        $student_info = $db->database_get("SELECT name, student_id, sex FROM student WHERE id=$user_id");

        echo $html_partA;

        $username = $student_info[0]['name'];
        $student_id = $student_info[0]['student_id'];
        $sex = $student_info[0]['sex'];

        echo "<form class=\"form-horizontal\">
								<div class=\"form-group\">
									<label for=\"focusedinput\" class=\"col-sm-2 control-label\">姓名：</label>
									<label  class=\" control-label\" id=\"s_name\">".$username."</label>
								</div>
								
								<div class=\"form-group\">
									<label for=\"disabledinput\" class=\"col-sm-2 control-label\">学号：</label>
									<label  class=\" control-label\" id=\"s_id\">".$student_id."</label>
								</div>
								
                                <div class=\"form-group\">
									<label for=\"disabledinput\" class=\"col-sm-2 control-label\">院系：</label>
									<label  class=\" control-label\" id=\"s_college\">软件学院</label>
								</div>
								
                                <div class=\"form-group\">
									<label for=\"checkbox\" class=\"col-sm-2 control-label\">性别：</label>
                                    <label  class=\" control-label\" id=\"s_sex\">".$sex."</label>
								
								</div>
								<div class=\"form-group\">
									<label for=\"inputPassword\" class=\"col-sm-2 control-label\">电话：</label>
									<label  class=\" control-label\" id=\"s_pbone\">13xxxxxxxxx</label>	
								</div>
								<div class=\"form-group\">
									<label for=\"checkbox\" class=\"col-sm-2 control-label\">E-mail：</label>
									<label  class=\" control-label\" id=\"s_email\">1234567@xxx.com</label>
								</div>
								
								<div class=\"form-group\">
									<label for=\"txtarea1\" class=\"col-sm-2 control-label\">个人爱好：</label>
									<div class=\"col-sm-8\"><textarea name=\"txtarea1\" id=\"txtarea1\" cols=\"50\" rows=\"4\" class=\"form-control1\"></textarea></div>
								</div>
								
								<div class=\"form-group\">
									<label for=\"smallinput\" class=\"col-sm-2 control-label label-input-sm\">其他信息：</label>
									<div class=\"col-sm-8\">
										<input type=\"text\" class=\"form-control1 input-sm\" id=\"smallinput\" placeholder=\"\">
									</div>
								</div>
								
							</form>";

        echo $html_partB;
    }
    else {
        echo "用户未登录!";
    }


