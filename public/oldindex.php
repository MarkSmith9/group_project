<?php
session_start(); //used to start the session - has to be on the first line
if (isset($_POST['submit'])) {
  //check whether correct login details is provided
  if ($_POST['username'] === 'assimiliation' && $_POST['password'] === 'group1') {
  $_SESSION['loggedin'] = true;
}
  }

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {// check if user is logged in
?>

<h2>Welcome Back, Admin</h2>
<div class="splash_boxes">
    <div><h1>group project</h1></div>
    <div><h1>group project</h1></div>

<?php
}
else{
$title = 'Home';
$content = '<h2>Log in</h2>
<!-- login forms required in index.php -->
<form action="index.php" method="POST">
<label>Username: </label>
<input type="text" name="username" />
<label>Password: </label>
<input type="password" name="password" />
<input type="submit" name="submit" value="Log In" />
</form>';
}
require '../layout.php'; //gets content.php which provides the layout. It is outside of the public folder as users should not directly access it
?>



