<?php
/**
 * Created by PhpStorm.
 * User: whx
 * Date: 2016/7/5
 * Time: 16:10
 */

$html_partA = <<<HTML
<!DOCTYPE HTML>
<html>
<head>
<title>作业详情</title>
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
	        		
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="../images/1.png"></a>
	        		<ul class="dropdown-menu">
						<li class="m_2"><a href="../teacher/teacher.php"><i class="fa fa-lock"></i> 个人资料</a></li>	
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
						<li>
						<a href="talk.php"><i class="fa fa-comments nav_icon"></i>课程讨论</a>
					</li>
                            </ul>
                </div>
            </div>
        </nav>
<!------------侧边栏-----------------> 

        <div id="page-wrapper" style="min-height:1000px">
        <div class="graphs">
	    <div class="xs">
  	    <h3>作业详情</h3>
  	    <div class="tab-content">
        <div class="tab-pane active" id="horizontal-form">
		<form class="form-horizontal" action="teacher-class-homework-r.php" method="get">
        <div class="form-group">
        <label for="smallinput" class="col-sm-2 control-label label-input-sm">作业类型</label>
        <div class="col-sm-8">
HTML;

$html_partB = <<< HTML
</div>
        </div>
        <div class="form-group">
      <p for="smallinput" class="col-sm-2 control-label label-input-sm">作业标题</p>
        <div class="col-sm-8">
HTML;

$html_partC = <<<HTML
</div>
       </div>  
       <div class="form-group">
      <p for="smallinput" class="col-sm-2 control-label label-input-sm">作业要求</p>
      <div class="col-sm-8">
HTML;

$html_partD = <<<HTML
</div>
                               	</div>
                                <div class="form-group">
                                    <label for="smallinput" class="col-sm-2 control-label label-input-sm" >截止时间</label>
                        			<div class="col-sm-8">
HTML;

$html_partE = <<<HTML
                             
                            
                </div>
				</div>
  				</div>
                <div class="bs-example" data-example-id=           "form-validation-states-with-icons">
               <div class="panel-footer">
               <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
              <button type="button" class="btn-inverse btn" onClick="change()">修改</button>
              
HTML;

$html_partF = <<<HTML
<button id='submit' type="submit" class="btn-inverse btn">确定</button>                     
              </div>
              </div>
              </div>
         </form>
         </div>	
  	     </div>
            
     	</div>
        
 <script type="text/javascript">
function change()
{
	document.getElementById("tasktitle").removeAttribute("readonly");
	document.getElementById("taskask").removeAttribute("readonly");
	document.getElementById("taskdeadline").removeAttribute("readonly");
	document.getElementById("homewortype").removeAttribute("disabled");
    document.getElementById("choose_file").removeAttribute("hidden");
}
</script>  
        
        
        
<!-------------边底栏信息-------------->
  <div class="copy_layout">
      <p>BUAA<a href="">协同教学平台.&nbsp;</a> Copyright &copy; 2016.沉迷学习</p>
  </div>
   </div>
      </div>
      <!-- /#page-wrapper -->
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


$id = $_GET['id'];

require_once '../database.php';

$conn = new database();

$sql = "SELECT kind,title,content,end_time FROM work WHERE id=$id";

$result = $conn->database_get($sql);

$kind = $result[0]['kind'];
$title = $result[0]['title'];
$content = $result[0]['content'];
$end_time = $result[0]['end_time'];
//$attachment = $result[0]['attachment'];

echo $html_partA;

if($kind == 1){
    echo "<select class=\" input-sm\" id=\"homewortype\" name=\"kind\" disabled>
        <option>团队作业</option>
        <option selected='selected'>个人作业</option>
        </select>";
}else{
    echo "<select class=\" input-sm\" id=\"homewortype\" name=\"kind\" disabled>
        <option>团队作业</option>
        <option>个人作业</option>
        </select>";
}
echo $html_partB;
echo "<input type=\"text\" class=\"form-control1 input-sm\" id=\"tasktitle\" 
name=\"title\" value='$title' readonly>";

echo $html_partC;
echo "<textarea class=\"form-control1 input-sm\" id=\"taskask\" 
style=\"height:auto;min-height:100px\" name=\"content\" readonly>$content</textarea>";

echo $html_partD;
echo "<input type=\"text\" class=\"form-control1 input-sm\" id=\"taskdeadline\" name=\"end_time\" placeholder=\"\" value='$end_time' readonly></div>
                               	</div>";

echo $html_partE;
echo "<input type=\"hidden\" name=\"id\" value=\"$id\"/>";
echo $html_partF;
