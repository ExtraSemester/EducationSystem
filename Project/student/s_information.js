// JavaScript Document
setSInfo();
function setSInfo(){
	var sname,sid;
	var xmlHttp;
	var response;
	sname=document.getElementById('s_name');
	sid=document.getElementById('s_id');
	
	xmlHttp=new XMLHttpRequest();
	xmlHttp.onreadystatechange=function(){
		response=eval(xmlHttp.response);
		
		sname.innerHTML=response.name;
		sid.innerHTML=response.student_id;
	}
	xmlHttp.open("GET","s_infomation.php",true);
	xmlHttp.send();
	
}

