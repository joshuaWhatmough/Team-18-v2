<?php
session_start();?>
<html>
<head>
    <title>Home</title>
    <style type="text/css" src=""></style>
    </head>
<body>
    <?php 
    include "inc_nav.php";
    include "inc_loginArea.php";
    echo "$_SESSION[username]";
    ?>
    <button action="inc_logout.php">Logout</button>
    </body>
</html>
