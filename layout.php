<!DOCTYPE html>
<html lang="en-gb">
  <head>
   <title><?php echo $title; ?> </title> <!--inserts the  title from the source file-->
    <link rel="icon" href="image/favicon.svg" /> <!--links the favicon TODO-->
    <link rel="stylesheet" href="style.css" />  <!--links the style sheet-->
  </head>

  <body>
  <header>
   <div class="navbar"> <!--creates the top navigation bar-->
	<img src = "image/logo.svg" width="50" height="50" alt="WUC logo" class="navbutton" onclick="window.location.href='/index.php';">
	<div class = "push-right"><button onclick="window.location.href='/student_records.php';" class="navbutton">Students</button></div>
	<div><button onclick="window.location.href='/placeholder.php';" class="navbutton">Staff</button></div>
	<div><button onclick="window.location.href='/timetable.php';" class="navbutton">Timetables</button></div>
	<div><button onclick="window.location.href='/placeholder.php';" class="navbutton">Forms</button></div>
	<div><button onclick="window.location.href='/placeholder.php';" class="navbutton">Other records</button></div>
	<div class = "push-right"><img src = "image/bell.svg" width="50" height="50" alt="notifications" class="navbutton" onclick="window.location.href='/index.php';"></div>
	<div><img src = "image/setting.svg" width="50" height="50" alt="settings" class="navbutton" onclick="window.location.href='/index.php';"></div>
	<div><img src = "image/exit.svg" width="50" height="50" alt="log out" class="navbutton" onclick="window.location.href='/index.php';"></div>
	</header>

<div class="main">
	<div class="sidebar"> <!--creates the side bar-->
	<div><img src = "image/profile.svg" width="50" height="50" class="sidebutton" onclick="window.location.href='/index.php';"> <p>profile</p></div>
	<div><img src = "image/dash.svg" width="50" height="50" class="sidebutton" onclick="window.location.href='/index.php';"><p>dashboard</p></div>
	<div><img src = "image/star.svg" width="50" height="50" class="sidebutton" onclick="window.location.href='/index.php';"><p>favourites</p></div>
	<div><img src = "image/message.svg" width="50" height="50" class="sidebutton" onclick="window.location.href='/index.php';"><p>messages</p></div>
	<div class="vertical_space"> </div>
	<div><img src = "image/calendar.svg" width="50" height="50" class="sidebutton" onclick="window.location.href='/index.php';"><p>diary</p></div>
	<div><img src = "image/search.svg" width="50" height="50" class="sidebutton" onclick="window.location.href='/index.php';"><p>search</p></div>
	<div><button onclick="window.location.href='/placeholder.php';" class="sidebutton texticon">?</button><p>help</p></div>
	</div>
	<div class="content-box">
	<?php echo $content?> <!--inserts the content from the PHP file in the main website-->
	</div>
</div>
    <script src="js/scripts.js"></script> <!--runs the JavaScript at the bottom as JavaScript runs last TODO-->
  </body>
</html>
