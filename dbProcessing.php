<?php include "dbconnect.php";?>
<?php 

if ($_REQUEST["submit"] == "Sign Up") {
    $sql = "INSERT INTO Members (username, password, firstname, lastname, email, isAdmin) VALUES ('$_REQUEST[userName]', '$_REQUEST[passWord]', '$_REQUEST[firstName]', '$_REQUEST[lastName]', '$_REQUEST[email]', 0);";
    $dbh->exec($sql);
    echo "<a href=\"index.php\">Back</a>";
} 

if($_REQUEST["submit"] == "Update") {
    $sql = "UPDATE Members SET username = '$_REQUEST[username]', password = '$_REQUEST[password]', firstname = '$_REQUEST[firstname]', lastname = '$_REQUEST[lastname]', email = '$_REQUEST[email]' WHERE id = '$_REQUEST[id]';";
    $dbh->exec($sql);
    echo "<a href=\"index.php\">Back</a>";

}

if($_REQUEST["submit"] == "Delete"){
    $sql = "DELETE FROM Members WHERE id = '$_REQUEST[id]';";
    $dbh->exec($sql);
    echo "<a href=\"index.php\">Back</a>";

}



if($_REQUEST["submit"] == "Create Artist") {
    
    // TO-DO insert upload images code.
    
    
    
     $sql = "INSERT INTO Artists (artistName, artistInfo, artistImage) VALUES ('$_REQUEST[artistName]', '$_REQUEST[artistInfo]', '$_REQUEST[artistImage]');";
    



    if($dbh->exec($sql)){
    echo "<a href='index.php'>Back</a>";
    }else {
        echo "Sorry, the new entry was not submitted.";
    }
}


if($_REQUEST["submit"] == "Update Artist") {
    $sql = "UPDATE Artists SET id = '$_REQUEST[id]', artistName = '$_REQUEST[artistName]', artistInfo = '$_REQUEST[artistInfo]' WHERE id = '$_REQUEST[id]';";
    if ($dbh->exec($sql)){echo "update passed ";}else {
        echo "Sorry, the update was not submitted.";}
    echo "<a href=\"index.php\">Back</a>";

}
if ($_REQUEST["submit"] == "Delete Artist"){
    $sql = "DELETE FROM Artists WHERE id = $_REQUEST[id]";
    if($dbh->exec($sql)){
        echo "<a href='index.php'>Back</a>";
    }else{
        echo "Sorry, the delete request was not submitted.";
    }
}

if($_REQUEST["submit"] == "Login") {
    $isLoginOk = false;
    $sql = "SELECT * FROM Members WHERE username = '$_REQUEST[username]';";
    $results = $dbh->query($sql);
    print_r($results);
    if(isset($results)){
    foreach($results as $row){
        if ($_REQUEST[password] == $row[password]){
            $isLoginOk = true;
        }
        if ($isLoginOk == true){
            session_start();
            $_SESSION[username] = $_REQUEST[username];
            $_SESSION[password] = $_REQUEST[password];
            echo "Login Succeeded<br><a href='index.php'>Back</a>";
        }
    }
    }
    if ($isLoginOk == false){
        echo "No user found.";
    }
}

?>
