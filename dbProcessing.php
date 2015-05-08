<?php include "dbConnect.php";?>
<?php 
if ($_REQUEST["submit"] == "Sign Up") {
    $sql = "INSERT INTO Members (username, password, firstname, lastname, email, isAdmin) VALUES ('$_REQUEST[userName]', '$_REQUEST[passWord]', '$_REQUEST[firstName]', '$_REQUEST[lastName]', '$_REQUEST[email]', 0);";
    $dbh->exec($sql);
    echo "<a href=\"admin.php\">Back</a>";
} 

if($_REQUEST["submit"] == "Update") {
    $sql = "UPDATE Members SET username = '$_REQUEST[username]', password = '$_REQUEST[password]', firstname = '$_REQUEST[firstname]', lastname = '$_REQUEST[lastname]', email = '$_REQUEST[email]' WHERE id = '$_REQUEST[id]';";
    $dbh->exec($sql);
    echo "<a href=\"admin.php\">Back</a>";

}

if($_REQUEST["submit"] == "Delete"){
    $sql = "DELETE FROM Members WHERE id = '$_REQUEST[id]';";
    dbh->query($sql);
    echo "<a href=\"admin.php\">Back</a>";

}

?>