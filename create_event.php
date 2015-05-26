<?php session_start();
include "dbconnect.php";
?>
<html>
<head>    <link rel='stylesheet' type="text/css" href="mainsytle.css"><title>Create an Event</title></head>
<body>
    <?php include "inc_nav.php"; ?>
    <h1>Create an Event</h1>
    <form action='dbProcessing.php' method="post" id="createEvent">
        Event Name:<br>
        <input type="text" name="EventName"><br>
        Event Text:<br>
        <textarea name="BodyText" form="createBulletin">Enter Body Text Here...</textarea><br>
        Phone Number
        <input type="tel" name="PhoneNumber"><br>
        Image:<br>
        <input type="file" name="EventImage"><br>
        Event Location
        <input type="text" name="EventLocation"><br>
        Event Website:<br>
        <input type="text" name="EventWebsite">
        <?php
        echo "<input type='hidden' name='Creator' value='$_SESSION[username]'>";
        if ($_SESSION['isLoggedIn']){
            echo "<input type='submit' name='submit' value='Create Event'>";
        }else{
            echo "You are not logged in to create an Event.<br>";
            echo "<a href='members.php'>Log in here</a>";
        }
        ?>
    </form>
    </body>
</html>
