<?php
session_start();
require_once("connect.php");

$member = $_SESSION['id'];
$friend = $_GET['friend_id'];

$friendquery = mysql_query("INSERT INTO tbl_friends(user_id,friend_userid) VALUES ('".$member."','".$friend."')");
header("Location: Friends.php");
?>