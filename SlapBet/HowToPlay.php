<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>FAQs</title>
<link href="styles/sbStyle.css" rel="stylesheet" type="text/css" media="all">
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<style>
body{
	background-image: url(images/HelpPage_tablet.png);
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
	echo "<a href=\"Help.php?id=".$_SESSION['id']."\"><img src=\"images/back.png\" /></a>";
	?>
</div>
<div id="background">
	<img src="images/TitleBackground_tablet.png" />
</div>
<div id="fadecontainer" style="width:95%; padding-left:5%; padding-top:5%; height:95%;">
<b>Step 1:</b> Choose what your character will look like.<br />
<b>Step 2:</b> Add friends.<br />
<b>Step 3:</b> Create a bet, add betters, choose a wager.<br />
<b>Step 4:</b> Practice your slapping!<br />
<b>Step 5:</b> When you've completed your bet, go to Bets Unsettled in the Slap Bet menu and press the done button to put that bet into Bets Completed.<br /><br />
If you want to review any of your bets, just go to Bets Unsettled or Bets Completed.

</div>
<div id="footer">
<div id="bottombar"> <?php echo "<a href=\"Home.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_HomeIcon.png\" /></a>"; ?></div>	
<div id="bottombar"> <?php echo "<a href=\"HowToPlay.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_HowToPlayIcon.png\" /></a>"; ?></div>
<div id="bottombar"> <?php echo "<a href=\"FAQs.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_FAQsIcon.png\" /></a>"; ?></div>
<div id="bottombar"> <?php echo "<a href=\"ContactUs.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_ContactIcon.png\" /></a>"; ?></div>
<div id="androidpadding"><img src="images/paddinbottom.png" /></div>
</div>
</body>
</html>
