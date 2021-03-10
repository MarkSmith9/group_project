<?php
session_start(); //used to start the session - has to be on the first line
if (isset($_SESSION["admin"])) { //checks that the user is logged in
	$title = ''; //sets the title
	$content = '';//sets the content inside the page
	require '../layout.php'; //gets content.php which provides the layout. It is outside of the public folder as users should not directly access it
}
else { //displays an access denied if the user is not logged in
  $title = 'Access denied';
  $content = 'Acess denied';
  require '../layout.php';
}
?>


