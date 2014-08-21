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
	background-image: url(images/SlapBetMenuPage_tablet.png);
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
	echo "<a href=\"Home.php?id=".$_SESSION['id']."\"><img src=\"images/back.png\" /></a>";
	?>
</div>
<div id="background">
	<img src="images/TitleBackground_tablet.png" />
</div>
<div id="buttons">
<?php
	echo "<a href=\"TheBet.php?id=".$_SESSION['id']."\"><img class=\"buttonspace\" src=\"images/SlapBet_TheBet.png\" /></a><br />
	<a href=\"BetsUnsettled.php?id=".$_SESSION['id']."\"><img class=\"buttonspace extraspace\" src=\"images/SlapBet_BetsUnsettled.png\" /></a><br />
	<a href=\"BetsCompleted.php?id=".$_SESSION['id']."\"><img class=\"buttonspace extraspace\" src=\"images/SlapBet_BetsCompleted.png\" /></a><br />";
?>
</div> <!--ends buttons-->
<div id="footer">
<div id="bottombar"> <?php echo "<a href=\"Home.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_HomeIcon.png\" /></a>"; ?></div>
<div id="bottombar"> <?php echo "<a href=\"TheBet.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_TheBet.png\" /></a>"; ?></div>
<div id="bottombar"> <?php echo "<a href=\"BetsUnsettled.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_BetsUnsettled.png\" /></a>"; ?></div>
<div id="bottombar"> <?php echo "<a href=\"BetsCompleted.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_BetsCompleted.png\" /></a>"; ?></div>
</div>
</body>
</html>
