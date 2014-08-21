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
	background-image: url(images/HomePage_tablet.png);
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
<div id="background">
	<img src="images/TitleBackground_tablet.png" />
</div>
<div id="buttons">
<?php
	echo "<a href=\"SlapBet.php?id=".$_SESSION['id']."\"><img class=\"buttonspace\" src=\"images/Home_SlapBet.png\" /></a><br />
	<a href=\"Characters.php?id=".$_SESSION['id']."\"><img class=\"buttonspace extraspace\" src=\"images/Home_Characters.png\" /></a><br />
	<a href=\"PracticeZombie.php?id=".$_SESSION['id']."\"><img class=\"buttonspace extraspace\" src=\"images/Home_Practice.png\" /></a><br />";
?>
</div><!--ends buttons-->
</body>
</html>
