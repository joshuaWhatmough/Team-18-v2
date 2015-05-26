<?php
session_start();
?>
<html>
<head>
        <link rel='stylesheet' type="text/css" href="mainsytle.css">
    <title>Home</title>
    <style type="text/css" src=""></style>
    </head>
<body>
    <?php 
    include "inc_nav.php";
    if ($_SESSION['isLoggedIn'] == true){
        echo "Logged in.";
    }else{
        include "inc_loginArea.php";
    }
    ?>
    <form action="logout.php" method="post">
        <input type="submit" name="submit" value="Logout">
    </form>
    </body>
</html>
