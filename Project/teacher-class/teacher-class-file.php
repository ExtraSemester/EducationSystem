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
<!----webfonts--->
<link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
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
                <a class="navbar-brand" href="">BUAA协同教学平台</a>
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
	        		</ul>
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="../images/1.png"></a>
	        		<ul class="dropdown-menu">
						<li class="m_2"><a href="#"><i class="fa fa-lock"></i> 个人资料</a></li>	
                        <li class="m_2"><a href="#"><i class="fa fa-lock"></i> 设置</a></li>	
                        <li class="m_2"><a href="#"><i class="fa fa-lock"></i> 退出</a></li>	
	        		</ul>
	      		</li>
			</ul>
<!------------顶边栏----------------->
            
<!------------侧边栏-----------------> 
			<div class="navbar-default sidebar" role="navigation">
            
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="teacher-class-message.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>课程信息</a>
                        </li>
                           <li>
                            <a href="teacher-class-team.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>团队申请</a>
                        </li>
                           <li>
                            <a href="teacher-class-givehomework.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>发布作业</a>
                        </li>
                        <li>
                            <a href="teacher-class-file.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>发布资源</a>
                        </li>
                        <li>
                            <a href="teacher-class-homework.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>已交作业</a>
                        </li>
                            </ul>
                </div>
            </div>
        </nav>
<!------------侧边栏----------------->   
<!------------上传文件部分------------>
<div id="page-wrapper">
<div class="tablegraphs">
   <div class="col-md-12 graphs">
	   <div class="xs">

<!--------判断文件名字，大小，类型-------->   <script type="text/javascript">
      function fileSelected() {
        var file = document.getElementById('fileToUpload').files[0];
        if (file) {
          var fileSize = 0;
          if (file.size > 1024 * 1024)
            fileSize = (Math.round(file.size * 100 / (1024 * 1024)) / 100).toString() + 'MB';
          else
            fileSize = (Math.round(file.size * 100 / 1024) / 100).toString() + 'KB';

          document.getElementById('fileName').innerHTML = 'Name: ' + file.name;
          document.getElementById('fileSize').innerHTML = 'Size: ' + fileSize;
          document.getElementById('fileType').innerHTML = 'Type: ' + file.type;
        }
      }

      function uploadFile() {
        var fd = new FormData();
        fd.append("fileToUpload", document.getElementById('fileToUpload').files[0]);
        var xhr = new XMLHttpRequest();
        xhr.upload.addEventListener("progress", uploadProgress, false);
        xhr.addEventListener("load", uploadComplete, false);
        xhr.addEventListener("error", uploadFailed, false);
        xhr.addEventListener("abort", uploadCanceled, false);
        xhr.open("POST", "teacher-class-file.php");
        xhr.send(fd);
      }

      function uploadProgress(evt) {
        if (evt.lengthComputable) {
          var percentComplete = Math.round(evt.loaded * 100 / evt.total);
          document.getElementById('progressNumber').innerHTML = percentComplete.toString() + '%';
        }
        else {
          document.getElementById('progressNumber').innerHTML = 'unable to compute';
        }
      }

      function uploadComplete(evt) {
        /* This event is raised when the server send back a response */
        alert(evt.target.responseText);
      }

      function uploadFailed(evt) {
        alert("There was an error attempting to upload the file.");
      }

      function uploadCanceled(evt) {
        alert("The upload has been canceled by the user or the browser dropped the connection.");
      }
    </script>
<!--------判断文件名字，大小，类型-------->    
    <form id="form1" enctype="multipart/form-data" method="post" action="upload.php">
<div class="row">
      <label for="fileToUpload">Select a File to Upload</label>
<input type="file" name="fileToUpload" id="fileToUpload" onchange="fileSelected();"/>
    </div>
<div id="fileName"></div>
<div id="fileSize"></div>
<div id="fileType"></div>
<div class="row">
<input type="button" onclick="uploadFile()" value="Upload" />
    </div>
<div id="progressNumber"></div>
</form>
    
    
</div>
</div>
</div>
</div>
<!------------上传文件部分------------>
  
  
<!-------------边底栏信息-------------->
  <div class="copy_layout">
      <p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
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
