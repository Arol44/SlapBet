<?php
session_start();
require_once("connect.php");

$bet = $_GET['betid'];

$friendquery = mysql_query("UPDATE tbl_bets SET bet_status = 'settled' WHERE bet_id =".$bet);

header("Location: BetsCompleted.php?id".$bet);
?>