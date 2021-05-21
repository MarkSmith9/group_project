<?php
session_start(); //used to start the session - has to be on the first line

//connecting to database
require '../database.php';

if (isset($_SESSION["loggedin"])) { //checks that the user is logged in
	$title = 'WUC - home'; //sets the title
	$content = 'test';//sets the content inside the page
}
else { //displays an access denied if the user is not logged in
  $title = 'Access denied';
  $content = 'Access denied';
}
require '../templates/layout.html.php'; //loads layout.php which contains the layout for the page
?>
