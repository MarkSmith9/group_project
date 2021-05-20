<?php
session_start(); //used to start the session - has to be on the first line

//connecting to database
require '../database.php';

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
 <input required type="text" name="username" />
 <label>Password: </label>
 <input required type="password" name="password" />
 <input required type="submit" name="submit" value="Log In" />
</form>
';
  if (isset($_POST['username']) && isset($_POST['password'])) {
  $stmt = $pdo->prepare('SELECT * FROM user WHERE username = :username');
    //user input is inserted on the way to prevent SQL injection
    $values = [
      'username' => $_POST['username'],
    ];
    $stmt->execute($values); //execute the query
    $user = $stmt->fetch(); //fetch the user array
    if (password_verify($_POST['password'], $user[1])) { //verifies that the password is correct
      $content = $content . 'log in successful'; //notifies the user that they are logged in
      $_SESSION["loggedin"] = "yes"; //sets the session variable loggedin to true in order to tell other sites that the user is logged in
      $_SESSION["username"] = $_POST['username']; //also stores the username in session in case it is needed
      if (isset($user['admin'])) {
        $_SESSION["admin"] ="admin";
      }
    }
    elseif (isset($_POST["submit"])) {
      $content = $content . 'The username or password was incorrect'; //if there is no such account they are also notified
    }
  }
}

require '../templates/layout.html.php'; //gets content.php which provides the layout. It is outside of the public folder as users should not directly access it
?>
