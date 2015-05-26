<?php session_start(); ?>
<html>
<head>
        <link rel='stylesheet' type="text/css" href="mainsytle.css">
    <title>Become a Member</title>
    </head>
<body>
    <?php include "inc_nav.php";?>
    <h1>Become a Member</h1>
    <?php
    if ($_SESSION['isLoggedIn']){
        echo "You are already Logged in.";
    }else {
        echo "Already have an account?";
        include "inc_loginArea.php";
        echo "Sign Up Here: ";
        ?>
    <br>
    <form method="get" action="dbProcessing.php">
        Username: <input type="text" name="username"><br>
        Password: <input type="text" name="password"><br>
        First Name: <input type"text" name="firstname"><br>
        Last Name: <input type="text" name="lastname"><br>
        Email: <input type="text" name="email"><br><br>
        <input type="submit" name="submit" value="Sign Up">
    </form>
    <?php }?>
    </body>
</html>
