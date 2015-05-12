<?php
session_start();
$_SESSION[username] = "null";
$_SESSION[password] = "null";
?>
<html>
<head>
    <title>Home</title>
    <style type="text/css" src=""></style>
    </head>
<body>
    Hello world
    <?php 
    include "inc_nav.php";
    include "inc_loginArea.php";
    ?>
    <form action="logout.php" method="post">
        <input type="submit" name="submit" value="Logout">
    </form>
    </body>
</html>
