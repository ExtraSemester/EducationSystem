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
		if(xmlHttp.readyState == 4&& xmlHttp.status == 200) {
			response = eval(xmlHttp.response);
			
			alert(response);
			
			sname.innerHTML = response[0]['name'];
			sid.innerHTML = response[0]['student_id'];
		}
	}
	xmlHttp.open("GET","s_information.php",true);
	xmlHttp.send();
	
}


