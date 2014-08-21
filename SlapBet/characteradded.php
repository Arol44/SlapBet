<?php
session_start();
require_once("connect.php");
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
	echo "<a href=\"MakeCharacter.php?id=".$_SESSION['id']."\"><img src=\"images/back.png\" /></a>";
	?>
</div>
<div id="background">
	<img src="images/TitleBackground_tablet.png" />
</div>
<div id="choosecharacter">
<?php
$query = mysql_query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['id']);

while($row = mysql_fetch_array($query)){
	echo "Character Added <br /><img src=\"images/characters/".$row['user_character']."\" />";
}
?>
</div>
<div id="footer">
<div id="bottombar"> <?php echo "<a href=\"Home.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_HomeIcon.png\" /></a>"; ?></div>	
<div id="bottombar"> <?php echo "<a href=\"MakeCharacter.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_MakeCharacters.png\" /></a>"; ?></div>
<div id="bottombar"> <?php echo "<a href=\"Friends.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_Friends.png\" /></a>"; ?></div>
<div id="bottombar"> <?php echo "<a href=\"AwesomeCharacters.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_Awesome.png\" /></a>"; ?></div>
<div id="androidpadding"><img src="images/paddinbottom.png" /></div>
</div>
</body>
</html>
