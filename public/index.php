<?php
session_start(); //used to start the session - has to be on the first line
if (isset($_POST['submit'])) {
	
if ($_POST["username"] === "admin" && $_POST["password"] === "admin") {
	$_SESSION["loggedin"] = true;
}
}
if (isset($_SESSION["loggedin"])) { //checks that the user is logged in
	$title = 'WUC - home'; //sets the title
	$content = '<h2>Welcome Back, Admin</h2>';
}
else { //displays an access denied if the user is not logged in
  $title = 'WUC - Log in';
  $content = '
<h2>Log in</h2>
 <form action="index.php" method="POST">
 <label>Username: </label>
 <input type="text" name="username" />
 <label>Password: </label>
 <input type="password" name="password" />
 <input type="submit" name="submit" value="Log In" />
</form>
';
}
require '../layout.php'; //gets content.php which provides the layout. It is outside of the public folder as users should not directly access it
?>
