<?php
session_start();
require_once("connect.php");

$bet = $_SESSION['betid'];

$friendquery = mysql_query("UPDATE tbl_bets SET bet_status = 'unsettled' WHERE bet_id =".$bet);

header("Location: BetsUnsettled.php");
?>