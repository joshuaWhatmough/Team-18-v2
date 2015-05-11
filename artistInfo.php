<?php include "dbconnect.php"?>
<?php 
$artistNo = $_GET[artist];
$sql = "SELECT * FROM Artists WHERE id = $artistNo";
foreach($dbh->query($sql) as $row){
    echo "<h1>$row[artistName]</h1>";
    echo "<img src='$row[artistImage]'/><br>";
    echo "<p>$row[artistInfo]</p>";
} 
?>