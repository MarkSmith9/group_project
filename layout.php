<!DOCTYPE html>
<html lang="en-gb">
  <head>
   <title><?php echo $title; ?> </title> <!--inserts the  title from the source file-->
    <link rel="icon" href="images/favicon.png" /> <!--links the favicon TODO-->
    <link rel="stylesheet" href="style.css" />  <!--links the style sheet-->
  </head>

  <body>
  <header>
   <div class="navbar"> <!--creates the top navigation bar-->
	<div><button onclick="window.location.href='/splash.php';" class="navbutton">Home icon placeholder</button></div>
	<div><button onclick="window.location.href='/student_records.php';" class="navbutton">Students</button></div>
	<div><button onclick="window.location.href='/placeholder.php';" class="navbutton">Staff</button></div>
	<div><button onclick="window.location.href='/timetable.php';" class="navbutton">Timetables</button></div>
	<div><button onclick="window.location.href='/placeholder.php';" class="navbutton">Forms</button></div>
	<div><button onclick="window.location.href='/placeholder.php';" class="navbutton">Other records</button></div>
	<div><button onclick="window.location.href='/placeholder.php';" class="navbutton">placeholder-bell</button></div>
	<div><button onclick="window.location.href='/placeholder.php';" class="navbutton">placeholder-settings</button></div>
	<img src = "image/exit.svg" width="50" height="50" alt="exit" class="navbutton" onclick="window.location.href='/index.php';">
   </div>
	</header>

<div class="main">
	<div class="sidebar"> <!--creates the side bar-->
		<div><button onclick="window.location.href='/placeholder.php';" class="sidebutton">Home icon placeholder</button></div>
		<div><button onclick="window.location.href='/placeholder.php';" class="sidebutton">profile pic</button></div>
		<div><button onclick="window.location.href='/placeholder.php';" class="sidebutton">dashboard</button></div>
		<div><button onclick="window.location.href='/placeholder.php';" class="sidebutton">favourites</button></div>
		<div><button onclick="window.location.href='/placeholder.php';" class="sidebutton">messages</button></div>
		<div><button onclick="window.location.href='/placeholder.php';" class="sidebutton">diary</button></div>
		<div><button onclick="window.location.href='/placeholder.php';" class="sidebutton">search</button></div>
		<div><button onclick="window.location.href='/placeholder.php';" class="sidebutton">help</button></div>
	</div>
	<div class="content-box">
	<?php echo $content ?> <!--inserts the content from the php file in the main website-->
	</div>
</div>
    <script src="js/scripts.js"></script> <!--runs the JavaScript at the bottom as JavaScript runs last TODO-->
  </body>
</html>
