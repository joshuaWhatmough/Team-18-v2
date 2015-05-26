<?php session_start();
include "dbconnect.php";?>
<html>
<head>
    <link rel='stylesheet' type="text/css" href="mainsytle.css">
    <title>Events</title>
    </head>
<body>
    <?php include "inc_nav.php"; ?>
    <h1>Events</h1>
    <?php
    $sql = "SELECT * FROM Events;";
foreach($dbh->query($sql) as $row){
    echo "<div class='events'><h1>$row[EventName]</h1>";
    echo "<img src='events/$row[EventPicture]'></img>";
    echo "<p>$row[EventText]<br>$row[EventWebsite]<br>$row[PhoneNumber]<br>$row[EventLocation]</p>";
    echo "<input type='hidden' name='creator' value='$row[Creator]' />";
    if ($row[Creator] == $_SESSION[username]){
        echo "<input type='submit' name='submit' value='Delete Event'";
    }
}

if(isset($_SESSION['username'])){
    echo "<a href='create_event.php'>Create An Event</a>";
}

?>

    </body>
</html>
