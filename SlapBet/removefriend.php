<?php
session_start();
require_once("connect.php");

$member = $_SESSION['id'];
$friend = $_GET['friend_id'];

$deletequery = "DELETE FROM tbl_friends WHERE user_id=".$member." AND friend_userid=".$friend;
$remove = mysql_query($deletequery);
header("Location: Friends.php");
?>