<?php
session_start();
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
<div id="fadecontainer">
<b>Sorry, awesome characters is only available in the full version. Here's a look at what you could unlock with the full version!</b><br /><br />
<img style="width:45%;margin-left:5%;" src="images/characters/awesome/Zombie.png" /><img style="width:45%;" src="images/characters/awesome/Puppy.png" /><br />
<img style="width:45%;margin-left:5%;" src="images/characters/awesome/Ninja.png" /><img style="width:45%;" src="images/characters/awesome/Pirate.png" />
</div>
<div id="footer">
<div id="bottombar"> <?php echo "<a href=\"Home.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_HomeIcon.png\" /></a>"; ?></div>	
<div id="bottombar"> <?php echo "<a href=\"MakeCharacter.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_MakeCharacters.png\" /></a>"; ?></div>
<div id="bottombar"> <?php echo "<a href=\"Friends.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_Friends.png\" /></a>"; ?></div>
<div id="bottombar"> <?php echo "<a href=\"AwesomeCharacters.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_Awesome.png\" /></a>"; ?></div>
</div>
</body>
</html>
