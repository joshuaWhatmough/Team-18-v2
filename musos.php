<?php session_start();
include "dbconnect.php";
?>
<html>
<head>
        <link rel='stylesheet' type="text/css" href="mainsytle.css">
    <title>Musos</title>
    </head>
<body>
    <?php include "inc_nav.php"; ?>
    <h1>Musos</h1>
    <?php
    $sql = "SELECT * FROM Artists;";
    foreach($dbh->query($sql) as $row){
        echo "<div class='musos col m-1col m-2col'><h1>$row[artistName]</h1><br>";
        echo "<p>$row[artistText]</p>";
        //TO-DO Add the rest of the select statement.
    }
    if($_SESSION['isLoggedIn']){
        echo "<a href='create_artist.php'>Create an artist</a>";
    }
    ?>

    </body>
</html>
