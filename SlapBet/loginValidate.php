<?php
session_start();
require_once("connect.php");

$username = stripslashes($_POST['user']);
$password = stripslashes($_POST['password']);
$errors = array();
$errmessage = "";

if($username == NULL || $username == " "){
	$errors[] = "Please provide a username";
}else{
	$username_stripped = mysql_real_escape_string($username);
	$username_dbready = strip_tags(substr($username_stripped,0,50));
}

if($password == NULL || $password == " "){
	$errors[] = "Please provide a password";
}else{
	$password_stripped = mysql_real_escape_string($password);
	$password_dbready = strip_tags(substr($password_stripped,0,50));
}

$errorcount = count($errors);
if($errorcount > 0){
	$errmessage = "The following errors occurred:";
	for ($i=0; $i<$errorcount; $i++){
		$errmessage .= "<br />".$errors[$i]."<br />";
	}
	echo $errmessage;
}else{
	$qstring = "SELECT * FROM tbl_users WHERE user_name='".$username."' AND user_password='".$password."'";
	$result = mysql_query($qstring);
	$row = mysql_fetch_array($result);
	$numrows = mysql_num_rows($result);
	if($numrows == 0){
		echo "your username and/or password was not recognized. Please try again.";
	}else{
		$_SESSION['id'] = $row['user_id'];
		echo $_SESSION['id'];
//		header("Location: home.html?id=".$_SESSION['id']);
//		echo "Welcome!<a href=\"profile.php?id=".$_SESSION['id']."\">Enter</a>";
	}
}









?>