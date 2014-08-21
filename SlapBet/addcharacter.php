<?php
session_start();
require_once("connect.php");

$image = $_GET['type'];

$characterquery = mysql_query("UPDATE tbl_users SET user_character ='".$image."' WHERE user_id=".$_SESSION['id']."");
$friendquery = mysql_query("INSERT INTO tbl_friends(user_id,friend_userid) VALUES ('".$_SESSION['id']."','".$_SESSION['id']."')");

header("Location: characteradded.php?id=".$_SESSION['id']);
?>

<?php
//session_start();
//require_once("connect.php");
//
//$bet = $_SESSION['betid'];
//$wager = $_GET['wager_id'];
//
//$friendquery = mysql_query("UPDATE tbl_bets SET wager_id =".$wager." WHERE bet_id =".$bet);
//
//header("Location: betsummary.php?id=".$_SESSION['id']);
//?>