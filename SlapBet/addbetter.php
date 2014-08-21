<?php
session_start();
require_once("connect.php");

$team = $_GET['team'];
$friend = $_GET['better_id'];

$_SESSION['better'] = $friend;

$friendquery = mysql_query("INSERT INTO tbl_team(team_id,bet_id,team_number,user_id) VALUES(NULL,'".$_SESSION['betid']."','".$team."','".$friend."')");

header("Location: thebetters.php");
?>