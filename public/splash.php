<?php
session_start(); //used to start the session - has to be on the first line
if (isset($_SESSION["admin"])) { //checks that the user is logged in
	$title = ''; //sets the title
	$content = '';//sets the content inside the page
}
else { //displays an access denied if the user is not logged in
  $title = 'Access denied';
  $content = 'Acess denied';
}
require '../templates/layout.html.php'; //loads layout.php which contains the layout for the page
?>
