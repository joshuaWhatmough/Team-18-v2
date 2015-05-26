<?php session_start();
include "dbconnect.php";
?>
<html>
<head>
        <link rel='stylesheet' type="text/css" href="mainsytle.css"><title>Create an Event</title></head>
<body>
    <?php include "inc_nav.php"; ?>
    <h1>Create an Event</h1>
    <form method="post" action="dbProcessing.php" id="createArtist" enctype="multipart/form-data">
    Artist Name:<br> <input type="text" name="artistName"><br>
    Artist Description:<br><textarea name="artistInfo" form="createArtist">Enter text here...</textarea><br>
    Image:<br> <input type="file" name="imagefile" id="imagefile" /><br>
    <input type="submit" name="submit" value="Create Artist">
    </form>
        <?php
        echo "<input type='hidden' name='Creator' value='$_SESSION[username]'>";
        if ($_SESSION['isLoggedIn']){
            echo "<input type='submit' name='submit' value='Create Artist'>";
        }else{
            echo "You are not logged in to create an Artist.<br>";
            echo "<a href='members.php'>Log in here</a>";
        }
        ?>
    </form>
    </body>
</html>
