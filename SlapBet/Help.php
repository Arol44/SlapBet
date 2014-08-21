<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Help</title>
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
	<img src="images/SBIcon.png" />
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
	 echo "<a href=\"HowToPlay.php?id=".$_SESSION['id']."\"><img class=\"buttonspace\" src=\"images/Help_HowToPlay.png\" /></a>
    <a href=\"FAQs.php?id=".$_SESSION['id']."\"><img class=\"buttonspace extraspace\" src=\"images/Help_FAQs.png\" /></a>
    <a href=\"ContactUs.php?id=".$_SESSION['id']."\"><img class=\"buttonspace extraspace\" src=\"images/Help_ContactUs.png\" /></a><br /><br />
    <b><a href=\"index.html\"><img style=\"width: 45%; margin-left: 30%;\" src=\"images/logoutButton.png\" /></a></b>";
?>
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
