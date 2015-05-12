<?php session_start()?>
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
    </body>
</html>
