<?php session_start();
include "dbconnect.php";
?>
<html>
<head>
        <link rel='stylesheet' type="text/css" href="mainsytle.css">
    <title>Bulletin Board</title>
    </head>
<body>
    <?php include "inc_nav.php";?>
    <h1>Bulletin Board</h1>
    <?php
    $sql = "SELECT * FROM BulletinBoard;";
    foreach($dbh->query($sql) as $row){
        echo "<div class='bulletin'>";
        echo "<form action='post'>";
        echo "<h1>$row[Header]</h1";
        echo "<p>$row[BodyText]";
        echo "<img src='bulletinImages/$row[Image] />";
        echo "<input type='hidden' name='Creator' value='$row[Creator]' />";
        echo "<input type='hidden' name='id' value='$row[id]' />";
        if ($_SESSION['username'] = $row[Creator]) {
            echo "<input type='submit' value='Delete Bulletin' />";
            echo "<input type='submit' value='Change Bulletin' />";
        }
        echo "</div>";
    }
    if ($_SESSION['isLoggedIn']){
        echo "<a href='create_bulletin.php'>Create A Bulletin</a>";
    }
    ?>
    </body>
</html>
