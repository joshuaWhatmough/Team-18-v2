<?php
session_start();
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
echo $_SESSION['username'];
    ?>
    <form action="logout.php" method="post">
        <input type="submit" name="submit" value="Logout">
    </form>
    </body>
</html>
