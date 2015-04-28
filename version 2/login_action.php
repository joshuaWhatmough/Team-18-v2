<?php include "dbconnect.php"; ?>
<?php
$userName = $_GET["userName"];
$password = $_GET["password"];
echo "$userName";
//TO-DO - check database to see if user exists...
$result = $dbh->query("SELECT * FROM Members WHERE username = $userName;");
foreach ($result as $user) {$firstname = $user["firstname"]; echo "$firstname";}
//session_start();
//$_SESSION["userName"] = $userName;
//$_SESSION["password"] = $password;


//TO-DO - check access level(user or admin)
?>