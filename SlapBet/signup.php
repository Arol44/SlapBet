<?php
session_start();
require_once("connect.php");

$fullname = $_POST['firstname']." ".$_POST['lastname'];
$username = $_POST['user'];
$password = $_POST['password'];

//WITH FULLNAME: $query = "INSERT INTO tbl_users(user_id,user_name,user_password,user_fullname) VALUES (NULL,'".$username."','".$password."','".$fullname."')";
$query = "INSERT INTO tbl_users(user_id,user_name,user_password,user_fullname) VALUES (NULL,'".$username."','".$password."','".$fullname."')";
$result = mysql_query($query);

$_SESSION['id'] = mysql_insert_id();

echo $_SESSION['id'];

//header("Location: profile.php?id=".$_SESSION['id']);

?>