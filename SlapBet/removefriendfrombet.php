<?php
session_start();
require_once("connect.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Betters</title>
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
<script>
function whatToDo(){
	alert ("Click on a better to remove");
}
</script>
</head>

<body onLoad="whatToDo()">
<div id="icon">
	<?php
	echo "<a href=\"Help.php?id=".$_SESSION['id']."\"><img src=\"images/SBIcon.png\" /></a>";
	?>
</div>
<div id="back">
	<?php
	echo "<a href=\"thebetters.php?id=".$_SESSION['id']."\"><img src=\"images/back.png\" /></a>";
	?>
</div>
<div id="background">
	<img src="images/TitleBackground_tablet.png" />
</div>
<div id="fadecontainer">
<div id="bettercontainer1">
<div class="vs"><img src="images/VS.png" /></div>
<?php

$removebetter = mysql_query("SELECT * FROM tbl_team,tbl_users,tbl_bets,tbl_friends WHERE tbl_team.bet_id = tbl_bets.bet_id AND tbl_bets.bet_id=".$_SESSION['betid']." AND tbl_team.team_number=1 AND tbl_team.user_id = tbl_users.user_id AND tbl_friends.friend_userid = tbl_users.user_id AND tbl_friends.user_id=".$_SESSION['id']);
		
	if(mysql_num_rows($removebetter)){
		mysql_data_seek($removebetter,0);
		while($row = mysql_fetch_array($removebetter)){
			echo "<table><tr><th>".$row['user_fullname']."</th> "."<th><a href=\"removebetter.php?better_id=".$row['friend_userid']." &amp;team=1\"><img class=\"friendlist\" src=\"images/characters/".$row['user_character']."\" /></a></th><br /></tr></table>";
				} 
			}
?>
</div>
<div id="bettercontainer2">
<?php

$removebetter = mysql_query("SELECT * FROM tbl_team,tbl_users,tbl_bets,tbl_friends WHERE tbl_team.bet_id = tbl_bets.bet_id AND tbl_bets.bet_id=".$_SESSION['betid']." AND tbl_team.team_number=2 AND tbl_team.user_id = tbl_users.user_id AND tbl_friends.friend_userid = tbl_users.user_id AND tbl_friends.user_id=".$_SESSION['id']);
		
	if(mysql_num_rows($removebetter)){
		mysql_data_seek($removebetter,0);
		while($row = mysql_fetch_array($removebetter)){
			echo "<table><tr><th>".$row['user_fullname']."</th> "."<th><a href=\"removebetter.php?better_id=".$row['friend_userid']." &amp;team=2\"><img class=\"friendlist\" src=\"images/characters/".$row['user_character']."\" /></a></th><br /></tr></table>";
				} 
			}
?>
</div>
<div id="bettercontainer3">
<div class="commissioner"><img src="images/Commissioner.png" /></div>
<?php

$removebetter = mysql_query("SELECT * FROM tbl_team,tbl_users,tbl_bets,tbl_friends WHERE tbl_team.bet_id = tbl_bets.bet_id AND tbl_bets.bet_id=".$_SESSION['betid']." AND tbl_team.team_number=3 AND tbl_team.user_id = tbl_users.user_id AND tbl_friends.friend_userid = tbl_users.user_id AND tbl_friends.user_id=".$_SESSION['id']);
		
	if(mysql_num_rows($removebetter)){
		mysql_data_seek($removebetter,0);
		while($row = mysql_fetch_array($removebetter)){
			echo "<table class=\"sbcomm\"><tr><th>".$row['user_fullname']."</th> "."<th><a href=\"removebetter.php?better_id=".$row['friend_userid']." &amp;team=3\"><img class=\"friendlist\" src=\"images/characters/".$row['user_character']."\" /></a></th><br /></tr></table>";
				} 
			}
?>
</div>

</div> <!--end fadecontainer-->
<div id="footer">
<div id="bottombar"> <?php echo "<a href=\"Home.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_HomeIcon.png\" /></a>"; ?></div>	
<div id="bottombar"> <?php echo "<a href=\"TheBet.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_TheBet.png\" /></a>"; ?></div>
<div id="bottombar"> <?php echo "<a href=\"BetsUnsettled.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_BetsUnsettled.png\" /></a>"; ?></div>
<div id="bottombar"> <?php echo "<a href=\"BetsCompleted.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_BetsCompleted.png\" /></a>"; ?></div>
<div id="androidpadding"><img src="images/paddinbottom.png" /></div>
</div>
</body>
</html>