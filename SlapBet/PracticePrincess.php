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
	background-image: url(images/PracticePage_tablet.png);
	background-repeat: no-repeat;
}
</style>
<script type="text/javascript">
document.onmousedown=coordinates;

function coordinates(e)
{
if (e == null) { e = window.event;}
var sender = (typeof( window.event ) != "undefined" ) ? e.srcElement : e.target;

if (sender.id=="drag")
  {
  mouseover=true;
  pleft=parseInt(movMeId.style.left);
  xcoor=e.clientX;
  document.onmousemove=moveImage;
  return false;
  }
else { return false; }
}

function moveImage(e)
{
if (e == null) { e = window.event;}
movMeId.style.left=pleft+e.clientX-xcoor+"px";
return false;
}
</script>
</head>

<body onLoad="startTiming()">
<div id="icon">
	<?php
	echo "<a onClick=\"killTimer()\" href=\"Help.php?id=".$_SESSION['id']."\"><img src=\"images/SBIcon.png\" /></a>";
	?>
</div>
<div id="back">
	<?php
	echo "<a onClick=\"killTimer()\" href=\"Home.php?id=".$_SESSION['id']."\"><img src=\"images/back.png\" /></a>";
	?>
</div>
<div id="background">
	<img src="images/TitleBackground_tablet.png" />
</div>
<pre id="debug"> </pre>
<div id="testing">
</div>
<div id="character1" class="princess">
<img id="zombie" src="images/characters/practice/PrincessBeforeSlap.png" />
</div>
<div id="character2" class="princess">
<img src="images/characters/practice/PrincessDuringSlap.png" />
</div>
<div id="character3" class="princess">
<img src="images/characters/practice/PrincessAfterSlap.png" />
</div>
<div id="slaphand">
<img id="drag" src="images/SlapHand.png" />
</div>
<div id="nextV">
<?php
echo "<a href=\"PracticeZombie.php?id=".$_SESSION['id']."\"><img src=\"images/nextVictim.png\" /></a>";
?>
</div>
<div id="slapem">
<img src="images/slapEm.png" />
</div>
<script type="text/javascript">
//The movable image
movMeId=document.getElementById("drag");
movMeId.style.left="10px";
</script>

</body>
</html>
