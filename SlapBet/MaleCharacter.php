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
<table class="charactertable">
	<tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/LongHair_BrightBlonde.png\"><img class=\"makecharacter\" src=\"images/characters/male/LongHair_BrightBlonde.png\" /></a>"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/LongHair_Blonde.png\"><img class=\"makecharacter\" src=\"images/characters/male/LongHair_Blonde.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/LongHair_DirtyBlonde.png\"><img class=\"makecharacter\" src=\"images/characters/male/LongHair_DirtyBlonde.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/MediumHair_BrightBlonde.png\"><img class=\"makecharacter\" src=\"images/characters/male/MediumHair_BrightBlonde.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/MediumHair_Blonde.png\"><img class=\"makecharacter\" src=\"images/characters/male/MediumHair_Blonde.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/MediumHair_DirtyBlonde.png\"><img class=\"makecharacter\" src=\"images/characters/male/MediumHair_DirtyBlonde.png\" />"; ?>
        </td>
     </tr>
     <tr>
    	<tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/ShortHair_BrightBlonde.png\"><img class=\"makecharacter\" src=\"images/characters/male/ShortHair_BrightBlonde.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/ShortHair_Blonde.png\"><img class=\"makecharacter\" src=\"images/characters/male/ShortHair_Blonde.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/ShortHair_DirtyBlonde.png\"><img class=\"makecharacter\" src=\"images/characters/male/ShortHair_DirtyBlonde.png\" />"; ?>
        </td>
     </tr>
    </tr>
     <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/LongHair_LightBrown.png\"><img class=\"makecharacter\" src=\"images/characters/male/LongHair_LightBrown.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/LongHair_Brown.png\"><img class=\"makecharacter\" src=\"images/characters/male/LongHair_Brown.png\" />"; ?>
        </td>
        <td>
         <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/LongHair_DarkBrown.png\"><img class=\"makecharacter\" src=\"images/characters/male/LongHair_DarkBrown.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/MediumHair_LightBrown.png\"><img class=\"makecharacter\" src=\"images/characters/male/MediumHair_LightBrown.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/MediumHair_Brown.png\"><img class=\"makecharacter\" src=\"images/characters/male/MediumHair_Brown.png\" />"; ?>
        </td>
        <td>
         <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/MediumHair_DarkBrown.png\"><img class=\"makecharacter\" src=\"images/characters/male/MediumHair_DarkBrown.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/ShortHair_LightBrown.png\"><img class=\"makecharacter\" src=\"images/characters/male/ShortHair_LightBrown.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/ShortHair_Brown.png\"><img class=\"makecharacter\" src=\"images/characters/male/ShortHair_Brown.png\" />"; ?>
        </td>
        <td>
         <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/ShortHair_DarkBrown.png\"><img class=\"makecharacter\" src=\"images/characters/male/ShortHair_DarkBrown.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/LongHair_BrightRed.png\"><img class=\"makecharacter\" src=\"images/characters/male/LongHair_BrightRed.png\" />"; ?>
        </td>
        <td>
         <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/LongHair_Red.png\"><img class=\"makecharacter\" src=\"images/characters/male/LongHair_Red.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/LongHair_DarkRed.png\"><img class=\"makecharacter\" src=\"images/characters/male/LongHair_DarkRed.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/MediumHair_BrightRed.png\"><img class=\"makecharacter\" src=\"images/characters/male/MediumHair_BrightRed.png\" />"; ?>
        </td>
        <td>
         <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/MediumHair_Red.png\"><img class=\"makecharacter\" src=\"images/characters/male/MediumHair_Red.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/MediumHair_DarkRed.png\"><img class=\"makecharacter\" src=\"images/characters/male/MediumHair_DarkRed.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/ShortHair_BrightRed.png\"><img class=\"makecharacter\" src=\"images/characters/male/ShortHair_BrightRed.png\" />"; ?>
        </td>
        <td>
         <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/ShortHair_Red.png\"><img class=\"makecharacter\" src=\"images/characters/male/ShortHair_Red.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/ShortHair_DarkRed.png\"><img class=\"makecharacter\" src=\"images/characters/male/ShortHair_DarkRed.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/LongHair_Black.png\"><img class=\"makecharacter\" src=\"images/characters/male/LongHair_Black.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/LongHair_Grey.png\"><img class=\"makecharacter\" src=\"images/characters/male/LongHair_Grey.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/LongHair_White.png\"><img class=\"makecharacter\" src=\"images/characters/male/LongHair_White.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/MediumHair_Black.png\"><img class=\"makecharacter\" src=\"images/characters/male/MediumHair_Black.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/MediumHair_Grey.png\"><img class=\"makecharacter\" src=\"images/characters/male/MediumHair_Grey.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/MediumHair_White.png\"><img class=\"makecharacter\" src=\"images/characters/male/MediumHair_White.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/ShortHair_Black.png\"><img class=\"makecharacter\" src=\"images/characters/male/ShortHair_Black.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/ShortHair_Grey.png\"><img class=\"makecharacter\" src=\"images/characters/male/ShortHair_Grey.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=male/ShortHair_White.png\"><img class=\"makecharacter\" src=\"images/characters/male/ShortHair_White.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td><br /><br /></td>
    </tr>
</table>
</div>
<div id="footer">
<div id="bottombar"> <?php echo "<a href=\"Home.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_HomeIcon.png\" /></a>"; ?></div>	
<div id="bottombar"> <?php echo "<a href=\"MakeCharacter.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_MakeCharacters.png\" /></a>"; ?></div>
<div id="bottombar"> <?php echo "<a href=\"Friends.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_Friends.png\" /></a>"; ?></div>
<div id="bottombar"> <?php echo "<a href=\"AwesomeCharacters.php?id=".$_SESSION['id']."\"><img src=\"images/BottomBar_Awesome.png\" /></a>"; ?></div>
</div>
</body>
</html>
