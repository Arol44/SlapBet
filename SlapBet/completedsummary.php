<?php
session_start();
require_once("connect.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Summary</title>
<script src="ajax.js"></script>
<link href="styles/sbStyle.css" rel="stylesheet" type="text/css" media="all">
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<style>
body{
	background-image: url(images/SlapBetMenuPage_tablet.png);
	background-repeat: no-repeat;
}
</style>
</head>

<body onLoad="whatToDo()">
<div id="icon">
	<?php
	echo "<a href=\"Help.php?id=".$_SESSION['id']."\"><img src=\"images/SBIcon.png\" /></a>";
	?>
</div>
<div id="back">
	<?php
	echo "<a href=\"BetsCompleted.php?id=".$_SESSION['id']."\"><img src=\"images/back.png\" /></a>";
	?>
</div>
<div id="background">
	<img src="images/TitleBackground_tablet.png" />
</div>
<div id="fadecontainer">
<?php
$bet = $_GET['bet_id'];

$summary = mysql_query("SELECT * FROM tbl_bets WHERE bet_id=".$bet);
$team1 = mysql_query("SELECT * FROM tbl_team,tbl_bets,tbl_users WHERE team_number=1 AND tbl_team.bet_id=".$bet." AND tbl_users.user_id = tbl_team.user_id AND tbl_bets.bet_id=".$bet);
$team2 = mysql_query("SELECT * FROM tbl_team,tbl_bets,tbl_users WHERE team_number=2 AND tbl_team.bet_id=".$bet." AND tbl_users.user_id = tbl_team.user_id AND tbl_bets.bet_id=".$bet);
$wager = mysql_query("SELECT * FROM tbl_wager,tbl_bets WHERE tbl_bets.wager_id = tbl_wager.wager_id AND bet_id=".$bet);

while($row = mysql_fetch_array($summary)){
	echo "<div class=\"title\">".$row['bet_title']."</div><br /><div class=\"description\">".$row['bet_description']."</div><br /><br />";
}

while ($row = mysql_fetch_array($team1)){
	echo "<div class=\"team1\">".$row['user_fullname']."</div><br />";
}

echo "<img class=\"summaryvs\" src=\"images/VS.png\" />";

while ($row = mysql_fetch_array($team2)){
	echo "<div class=\"team2\">".$row['user_fullname']."</div><br /><br />";
}

while ($row = mysql_fetch_array($wager)){
	echo "<b class=\"summarywager\">wager</b><br /><br /><div class=\"swager\">".$row['wager_wager']."</div><br />";
}

?>
</div>
<div id="footer">
<div id="bottombar"> <?php echo "<a href=\"Home.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_HomeIcon.png\" /></a>"; ?></div>	
<div id="bottombar"> <?php echo "<a href=\"TheBet.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_TheBet.png\" /></a>"; ?></div>
<div id="bottombar"> <?php echo "<a href=\"BetsUnsettled.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_BetsUnsettled.png\" /></a>"; ?></div>
<div id="bottombar"> <?php echo "<a href=\"BetsCompleted.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_BetsCompleted.png\" /></a>"; ?></div>
</div>
</body>
</html>