<?php
session_start();
require_once("connect.php");

$bet = $_SESSION['betid'];
$wager = $_GET['wager_id'];

$friendquery = mysql_query("UPDATE tbl_bets SET wager_id =".$wager." WHERE bet_id =".$bet);

header("Location: betsummary.php?id=".$_SESSION['id']);
?>