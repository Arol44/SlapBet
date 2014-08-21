<?php
session_start();
require_once("connect.php");

$friend = $_GET['better_id'];
$bet = $_SESSION['betid'];
$team = $_GET['team'];

$deletequery = "DELETE FROM tbl_team WHERE user_id=".$friend." AND team_number=".$team." AND bet_id=".$bet;
$remove = mysql_query($deletequery);
header("Location: thebetters.php");
?>