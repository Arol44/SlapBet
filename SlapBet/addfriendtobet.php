<?php
session_start();
require_once("connect.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Add Friend</title>
<script src="ajax.js"></script>
<link href="styles/sbStyle.css" rel="stylesheet" type="text/css" media="all">
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<style>
body{
	background-image: url(images/CharactersMenuPage_tablet.png);
	background-repeat: no-repeat;
}
</style>
<?php
	$team = $_GET['team'];
	$friendslist = mysql_query("SELECT * FROM tbl_users ORDER BY user_fullname ASC");
?>
</head>

<body>
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
<div id="livesearch">
	<form>
    	<b>Search:</b> <input type="text" onKeyup="liveSearch(this.value)" name="searchbox" id="searchbox" class="loginform" />
    </form><br />
</div>
<div id="friendtable">
<?php
			$addfriend = mysql_query("SELECT * FROM tbl_users,tbl_friends WHERE tbl_friends.friend_userid = tbl_users.user_id AND tbl_friends.user_id=".$_SESSION['id']);
		
			if(mysql_num_rows($addfriend)){
				mysql_data_seek($addfriend,0);
				while($row = mysql_fetch_array($addfriend)){
					echo "<table><tr><th>".$row['user_fullname']."</th> "."<th><img class=\"friendlist\" src=\"images/characters/".$row['user_character']."\" /></th><th><a href=\"addbetter.php?better_id=".$row['friend_userid']."&amp;team=".$team."\" \"><img class=\"friendlist\" src=\"images/addToBet.png\" /></a></th><br /></tr></table>";
				} 
			}
?>
</div>
</body>
</html>