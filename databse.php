<!-- connecting to MySQL database -->
<?php
$server = 'v.je';
$username = 'student';
$password = 'student';
$schema = 'WUC_RMS';

//establishing connection with MYSQL database using following code from lecture notes-topic 8, available on NILE 
$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, 
           [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
?>