<?php
session_start();
$q=$_GET['searchfriends'];
if($q !="") { 
require_once("connect.php");


$sql="SELECT * FROM tbl_users WHERE user_fullname LIKE '".$q."%'"; 
$result = mysql_query($sql);
$numrows = mysql_num_rows($result);

if($numrows > 0) { 
	while($row = mysql_fetch_array($result)) {
		 echo "<table><tr><th>".$row['user_fullname']."</th> "."<th><img class=\"friendlist\" src=\"images/characters/".$row['user_character']."\" /></th><th><a href=\"#\" onClick=\"addFriend()\"><img class=\"friendlist\" src=\"images/addToBet.png\" /></a></th><br /></tr></table>";
	}
}else{
	echo "No results matched your search";
}
}
?>