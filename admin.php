<html>
<head>
    <title>Home</title>
    <style type="text/css" src=""></style>
    </head>
<body>
    <a href="Adminer.php">Adminer</a><br><br>
    <?php 
    include "dbconnect.php";
    ?>
    <?php
    echo "All the members:";?>
    <form method="get" action="dbProcessing.php">
    <?php 
    $sql = "SELECT * FROM Members";
    foreach($dbh->query($sql) as $row){
        echo "<input type='text' name='firstname' value='$row[firstname]' /><input type='text' name='lastname' value='$row[lastname]' /><input type='text' name='username' value='$row[username]' /><input type='text' name='password' value='$row[password]' /><input type='text' name='email' value='$row[email]' />";
        echo "<input type='hidden' name='id' value='$row[id]' />";
        echo "<input type='submit' name='submit' value='Update' /><input type='submit' name='submit' value='Delete' /><br>";
    } ?>
    </form>
    <form method="post" action="dbProcessing.php" id="createArtist" enctype="multipart/form-data">
    Artist Name: <input type="text" name="artistName"><br>
    Image: <input type="file" name="imagefile" id="imagefile" /><br>
    <textarea name="artistInfo" form="createArtist">Enter text here...</textarea><br>
    <input type="submit" name="submit" value="Create Artist">
    </form>
    <br>Artists:<br>
    <ul>
    <?php 
    $sql = "SELECT * FROM Artists;";
foreach($dbh->query($sql) as $row) {
    echo "<li><a href='artistInfo.php?artist=$row[id]'>$row[artistName]</a></li>";

}
    ?>
    </ul>
    
        <form method="get" action="dbProcessing.php">
    <?php 
    $sql = "SELECT * FROM Artists";
    foreach($dbh->query($sql) as $row){
        echo "<input type='text' name='artistName' value='$row[artistName]' /><input type='text' name='artistInfo' value='$row[artistInfo]' />";
//      echo "<input type='file' name='artistImage' value='$row[artistImage]' />";
        echo "<input type='hidden' name='id' value='$row[id]' />";
        echo "<input type='submit' name='submit' value='Update Artist' /><input type='submit' name='submit' value='Delete Artist' /><br>";
    } ?>
    </form>
    
    
    </body>
</html>
