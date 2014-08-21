// JavaScript Document

var xmlHttp;
var userId;

function loginForm(thisform) { 
	xmlHttp=GetXmlHttpObject(); 
	if (xmlHttp==null) { 
 alert ("Browser does not support HTTP Request");
 return; 
 }
 var formdata = ""; 
 formdata = "user=" + thisform.elements['user'].value + "&password=" + thisform.elements['password'].value
	xmlHttp.onreadystatechange=formSubmitted; 
	xmlHttp.open("POST", "loginValidate.php",true); 
	xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
	xmlHttp.setRequestHeader("Content-length", formdata.length); 
	xmlHttp.setRequestHeader("Connection", "close"); 
	xmlHttp.send(formdata); 
	return false;
}

function formSubmitted() { 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") {
	if (xmlHttp.responseText.indexOf('your username and/or password was not recognized. Please try again.') != -1) {
		document.getElementById("errors").innerHTML = xmlHttp.responseText;
    }else {
	 	document.location.href = "Home.php?id=" + xmlHttp.responseText;
		userId = xmlHttp.responseText;
 	}
}
}

function signupForm(thisform) { 
	xmlHttp=GetXmlHttpObject(); 
	if (xmlHttp==null) { 
 alert ("Browser does not support HTTP Request");
 return; 
 }
 var formdata = "";
 //"fullname" + thisform.elements['firstname'].value + thisform.elements['lastname'].value +  // before "user" (add an & before user) 
 formdata = "firstname=" + thisform.elements['firstname'].value + "&lastname=" + thisform.elements['lastname'].value + "&user=" + thisform.elements['username'].value + "&password=" + thisform.elements['password'].value
	xmlHttp.onreadystatechange=signupformSubmitted; 
	xmlHttp.open("POST", "signup.php",true); 
	xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
	xmlHttp.setRequestHeader("Content-length", formdata.length); 
	xmlHttp.setRequestHeader("Connection", "close"); 
	xmlHttp.send(formdata); 
	return false;
}

function signupformSubmitted() { 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") {
	 	document.location.href = "Home.php?id=" + xmlHttp.responseText;
 	}
}

function betForm(thisform) { 
	xmlHttp=GetXmlHttpObject(); 
	if (xmlHttp==null) { 
 alert ("Browser does not support HTTP Request");
 return; 
 }
 var formdata = ""; 
 formdata = "title=" + thisform.elements['title'].value + "&description=" + thisform.elements['description'].value + "&next=" + thisform.elements['next'].value;
	xmlHttp.onreadystatechange=betSubmitted;
	xmlHttp.open("POST", "addbet.php",true); 
	xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
	xmlHttp.setRequestHeader("Content-length", formdata.length); 
	xmlHttp.setRequestHeader("Connection", "close"); 
	xmlHttp.send(formdata); 
	return false;
}

function betSubmitted() { 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") {
	 	document.location.href = "thebetters.php?id=" + xmlHttp.responseText;
 	}
}

function liveSearch(str) { 
xmlHttp=GetXmlHttpObject(); 
if (xmlHttp==null) { 
 alert ("Browser does not support HTTP Request");
 return;
 }
var url="searchfriends.php?searchfriends="+str; 
xmlHttp.onreadystatechange=searchChanged; 
xmlHttp.open("GET",url,true); 
xmlHttp.send(null);
}

function searchChanged() { 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") { 
document.getElementById("friendtable").innerHTML = xmlHttp.responseText;
 } 
}

function startTiming(){
	var timer = setInterval(changeImg,10);
}

function changeImg(){
	var position = parseInt(document.getElementById("drag").style.left);
	if (position > -50){
		document.getElementById("character1").style.visibility = "visible";
		document.getElementById("character2").style.visibility = "hidden";
		document.getElementById("character3").style.visibility = "hidden";
	}else if (position > -220 && position < -50 ){
		document.getElementById("character1").style.visibility = "hidden";
		document.getElementById("character2").style.visibility = "visible";
		document.getElementById("character3").style.visibility = "hidden";
	}else if (position < -220){
		document.getElementById("character1").style.visibility = "hidden";
		document.getElementById("character2").style.visibility = "hidden";
		document.getElementById("character3").style.visibility = "visible";
	}
}

function killTimer(){
	clearInterval(timer);
}

function GetXmlHttpObject() { 
xmlHttp=null;
try
 {
 xmlHttp=new XMLHttpRequest(); 
 }
catch (e) 
 {
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); 
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}
