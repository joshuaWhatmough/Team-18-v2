UserName: <input type="text" id="userName"/><br>
Password: <input type="text" id="password"/><br>
<input type="button" id="login">Login</input>
<?php 
$userName = $dom->getElementById("userName");
$password = $dom->getElementById("password");

//TO-DO - check database to see if user exists...
session_start();
$_SESSION['userName'] = $userName;
$_SESSION['password'] = $password;
//TO-DO - check access level(user or admin)

?>