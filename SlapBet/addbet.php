<?php
session_start();
require_once("connect.php");

$id = $_POST['next'];
$title = stripslashes($_POST['title']);
$description = stripslashes($_POST['description']);

$title_stripped = mysql_real_escape_string($title);
$title_dbready = strip_tags(substr($title_stripped,0,100));

$description_stripped = mysql_real_escape_string($description);
$description_dbready = strip_tags(substr($description_stripped,0,1000));

$query = "INSERT INTO tbl_bets(bet_id,bet_title,bet_description,user_id) VALUES (NULL,'".$title_dbready."','".$description_dbready."','".$id."')";
$result = mysql_query($query);

$_SESSION['betid'] = mysql_insert_id();

echo $id;
?>