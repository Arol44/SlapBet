<?php
session_start();
require_once ("connect.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Slap Bet</title>
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
</head>

<body>
<div id="icon">
	<?php
	echo "<a href=\"Help.php?id=".$_SESSION['id']."\"><img src=\"images/SBIcon.png\" /></a>";
	?>
</div>
<div id="back">
	<?php
	echo "<a href=\"Characters.php?id=".$_SESSION['id']."\"><img src=\"images/back.png\" /></a>";
	?>
</div>
<div id="background">
	<img src="images/TitleBackground_tablet.png" />
</div>
<div id="livesearch">
<?php
echo "<a href=\"allusers.php?id=".$_SESSION['id']."\"><img style=\"width: 50%;\" src=\"images/addAFriend.png\" /></a>";
?>
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
					echo "<table><tr><th>".$row['user_fullname']."</th> "."<th><img class=\"friendlist\" src=\"images/characters/".$row['user_character']."\" /></th><th><a href=\"removefriend.php?friend_id=".$row['friend_userid']."\" onclick=\"return confirm('are you sure?')\"><img class=\"friendlist\" src=\"images/betters_minus.png\" /></a></th><br /></tr></table>";
				} 
			}
?>
</div>
<div id="footer">
<div id="bottombar"> <?php echo "<a href=\"Home.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_HomeIcon.png\" /></a>"; ?></div>	
<div id="bottombar"> <?php echo "<a href=\"MakeCharacter.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_MakeCharacters.png\" /></a>"; ?></div>
<div id="bottombar"> <?php echo "<a href=\"Friends.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_Friends.png\" /></a>"; ?></div>
<div id="bottombar"> <?php echo "<a href=\"AwesomeCharacters.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_Awesome.png\" /></a>"; ?></div>
</div>
</body>
</html>
