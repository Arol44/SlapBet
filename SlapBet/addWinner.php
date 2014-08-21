<?php
session_start();
require_once("connect.php");

$team = $_GET['teamid'];
$bet = $_GET['bet'];

$query = mysql_query("SELECT * FROM tbl_wager,tbl_team,tbl_bets WHERE team_number =".$team." AND tbl_team.user_id = tbl_users.user_id AND tbl_team.user_id= AND tbl_bets.wager_id = tbl_wager.wager_id AND tbl_bets.bet_id = tbl_team.bet_id AND tbl_team.bet_id=".$bet);

$row = mysql_fetch_array($query);

$pointstoadd = $row['wager_points'];
$teamplayers = $_SESSION['better'];

$update = mysql_query("UPDATE tbl_users SET user_points =".$pointstoadd." WHERE user_id =".$teamplayers);
?>