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
$shortred = "female/LongLength_Red.png";
?>
<table class="charactertable">
	<tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/LongLength_BrightBlonde.png\"><img class=\"makecharacter\" src=\"images/characters/female/LongLength_BrightBlonde.png\" /></a>"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/LongLength_Blonde.png\"><img class=\"makecharacter\" src=\"images/characters/female/LongLength_Blonde.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/LongLength_DirtyBlonde.png\"><img class=\"makecharacter\" src=\"images/characters/female/LongLength_DirtyBlonde.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/MediumLength_BrightBlonde.png\"><img class=\"makecharacter\" src=\"images/characters/female/MediumLength_BrightBlonde.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/MediumLength_Blonde.png\"><img class=\"makecharacter\" src=\"images/characters/female/MediumLength_Blonde.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/MediumLength_DirtyBlonde.png\"><img class=\"makecharacter\" src=\"images/characters/female/MediumLength_DirtyBlonde.png\" />"; ?>
        </td>
     </tr>
     <tr>
    	<tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/ShortLength_BrightBlonde.png\"><img class=\"makecharacter\" src=\"images/characters/female/ShortLength_BrightBlonde.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/ShortLength_Blonde.png\"><img class=\"makecharacter\" src=\"images/characters/female/ShortLength_Blonde.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/ShortLength_DirtyBlonde.png\"><img class=\"makecharacter\" src=\"images/characters/female/ShortLength_DirtyBlonde.png\" />"; ?>
        </td>
     </tr>
    </tr>
     <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/LongLength_LightBrown.png\"><img class=\"makecharacter\" src=\"images/characters/female/LongLength_LightBrown.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/LongLength_Brown.png\"><img class=\"makecharacter\" src=\"images/characters/female/LongLength_Brown.png\" />"; ?>
        </td>
        <td>
         <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/LongLength_DarkBrown.png\"><img class=\"makecharacter\" src=\"images/characters/female/LongLength_DarkBrown.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/MediumLength_LightBrown.png\"><img class=\"makecharacter\" src=\"images/characters/female/MediumLength_LightBrown.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/MediumLength_Brown.png\"><img class=\"makecharacter\" src=\"images/characters/female/MediumLength_Brown.png\" />"; ?>
        </td>
        <td>
         <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/MediumLength_DarkBrown.png\"><img class=\"makecharacter\" src=\"images/characters/female/MediumLength_DarkBrown.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/ShortLength_LightBrown.png\"><img class=\"makecharacter\" src=\"images/characters/female/ShortLength_LightBrown.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/ShortLength_Brown.png\"><img class=\"makecharacter\" src=\"images/characters/female/ShortLength_Brown.png\" />"; ?>
        </td>
        <td>
         <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/ShortLength_DarkBrown.png\"><img class=\"makecharacter\" src=\"images/characters/female/ShortLength_DarkBrown.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/LongLength_BrightRed.png\"><img class=\"makecharacter\" src=\"images/characters/female/LongLength_BrightRed.png\" />"; ?>
        </td>
        <td>
         <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/LongLength_Red.png\"><img class=\"makecharacter\" src=\"images/characters/female/LongLength_Red.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/LongLength_DarkRed.png\"><img class=\"makecharacter\" src=\"images/characters/female/LongLength_DarkRed.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/MediumLength_BrightRed.png\"><img class=\"makecharacter\" src=\"images/characters/female/MediumLength_BrightRed.png\" />"; ?>
        </td>
        <td>
         <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/MediumLength_Red.png\"><img class=\"makecharacter\" src=\"images/characters/female/MediumLength_Red.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/MediumLength_DarkRed.png\"><img class=\"makecharacter\" src=\"images/characters/female/MediumLength_DarkRed.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/ShortLength_BrightRed.png\"><img class=\"makecharacter\" src=\"images/characters/female/ShortLength_BrightRed.png\" />"; ?>
        </td>
        <td>
         <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/ShortLength_Red.png\"><img class=\"makecharacter\" src=\"images/characters/female/ShortLength_Red.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/ShortLength_DarkRed.png\"><img class=\"makecharacter\" src=\"images/characters/female/ShortLength_DarkRed.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/LongLength_Black.png\"><img class=\"makecharacter\" src=\"images/characters/female/LongLength_Black.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/LongLength_Grey.png\"><img class=\"makecharacter\" src=\"images/characters/female/LongLength_Grey.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/LongLength_White.png\"><img class=\"makecharacter\" src=\"images/characters/female/LongLength_White.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/MediumLength_Black.png\"><img class=\"makecharacter\" src=\"images/characters/female/MediumLength_Black.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/MediumLength_Grey.png\"><img class=\"makecharacter\" src=\"images/characters/female/MediumLength_Grey.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/MediumLength_White.png\"><img class=\"makecharacter\" src=\"images/characters/female/MediumLength_White.png\" />"; ?>
        </td>
    </tr>
    <tr>
    	<td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/ShortLength_Black.png\"><img class=\"makecharacter\" src=\"images/characters/female/ShortLength_Black.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/ShortLength_Grey.png\"><img class=\"makecharacter\" src=\"images/characters/female/ShortLength_Grey.png\" />"; ?>
        </td>
        <td>
        <?php echo "<a href=\"addcharacter.php?id=".$_SESSION['id']."&amp;type=female/ShortLength_White.png\"><img class=\"makecharacter\" src=\"images/characters/female/ShortLength_White.png\" />"; ?>
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
