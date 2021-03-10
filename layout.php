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
	<div><button onclick="window.location.href='/placeholder.html';" class="navbutton">Home icon placeholder</button></div>
	<div><button onclick="window.location.href='/placeholder.html';" class="navbutton">Students</button></div>
	<div><button onclick="window.location.href='/placeholder.html';" class="navbutton">Staff</button></div>
	<div><button onclick="window.location.href='/placeholder.html';" class="navbutton">Timetables</button></div>
	<div><button onclick="window.location.href='/placeholder.html';" class="navbutton">Forms</button></div>
	<div><button onclick="window.location.href='/placeholder.html';" class="navbutton">Other records</button></div>
	<div><button onclick="window.location.href='/placeholder.html';" class="navbutton">placeholder-bell</button></div>
	<div><button onclick="window.location.href='/placeholder.html';" class="navbutton">placeholder-settings</button></div>
	<div><button onclick="window.location.href='/placeholder.html';" class="navbutton">placeholder-exit</button></div>
   </div>
	</header>

<div class="main">
	<div class="sidebar"> <!--creates the side bar-->
		<div><button onclick="window.location.href='/placeholder.html';" class="sidebutton">Home icon placeholder</button></div>
		<div><button onclick="window.location.href='/placeholder.html';" class="sidebutton">profile pic</button></div>
		<div><button onclick="window.location.href='/placeholder.html';" class="sidebutton">dashboard</button></div>
		<div><button onclick="window.location.href='/placeholder.html';" class="sidebutton">favourites</button></div>
		<div><button onclick="window.location.href='/placeholder.html';" class="sidebutton">messages</button></div>
		<div><button onclick="window.location.href='/placeholder.html';" class="sidebutton">diary</button></div>
		<div><button onclick="window.location.href='/placeholder.html';" class="sidebutton">search</button></div>
		<div><button onclick="window.location.href='/placeholder.html';" class="sidebutton">help</button></div>
	</div>
	<div class="content-box">
	<?php echo $content ?> <!--inserts the content from the php file in the main website-->
	</div>
</div>
    <script src="js/scripts.js"></script> <!--runs the JavaScript at the bottom as JavaScript runs last TODO-->
  </body>
</html>
