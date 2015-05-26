<?php session_start();
include "dbconnect.php";
?>
<html>
<head>    <link rel='stylesheet' type="text/css" href="mainsytle.css"><title>Create a Bulletin</title></head>
<body>
    <?php include "inc_nav.php"; ?>
    <h1>Create a Bulletin</h1>
    <form action='dbProcessing.php' method="post" id="createBulletin">
        Heading:<br>
        <input type="text" name="Heading"><br>
        Body Text:<br>
        <textarea name="BodyText" form="createBulletin">Enter Body Text Here...</textarea><br>
        Image:<br>
        <input type="file" name="BulletinImage"><br>
        <?php
        echo "<input type='hidden' name='Creator' value='$_SESSION[username]'>";
        if ($_SESSION['isLoggedIn']){
            echo "<input type='submit' name='submit' value='Create Bulletin'>";
        }else{
            echo "You are not logged in to create a bulletin.<br>";
            echo "<a href='members.php'>Log in here</a>";
        }
        ?>
    </form>
    </body>
</html>
