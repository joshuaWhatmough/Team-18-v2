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

print_r($_REQUEST);

if($_REQUEST["submit"] == "Create Artist") {
    
    
//    $targetDir = "images/";
//    echo "test1";
//    $targetFile = $targetDir . basename($_FILES["artistImage"]["name"]);
//    echo "test2 : $targetFile";
//    $uploadOk = 1;
//    $imageFileType = pathinfo($targetFile,PATHINFO_EXTENSION);
//    echo "test3";
//    // Check if the image file is an actual image or a fake.
//    if(isset($_POST["submit"])) {
//        $check = getimagesize($_FILES["artistImage"]["tmp_name"]);
//        echo "test4";
//        if($check !== false){
//        echo "File is an image - " . $check["mime"] . ".";
//        $uploadOk = 1;
//    } else {
//        echo "File is not an image.";
//        $uploadOk = 0;    
//    }
//        echo "test5";
//    }
//    // Check if file already exists.
//    if (file_exists($targetFile)){
//        echo "Sorry, your file already exists";
//        $uploadOk = 0;
//    }
//    // Check file size.
//    if ($_FILES["artistImage"]["size"] > 500000){
//        echo "Sorry, your file is too large";
//        $uploadOk = 0;
//    }
//    // Allow certain file formats
//    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
//        echo "Sorry, only JPG, JPEG, PNG and GIF files are allowed";
//    }
//    // Check if $uploadOk is set to 0 by an error.
//    if ($uploadOk == 0){
//        echo "Sorry, your file was not uploaded";
//    }else {
//        if(move_uploaded_file($_FILES["artistImage"]["tmp_name"],$targetFile)){
//            echo "The file " . basename($_FILES["artistImage"]["name"]) . " has been uploaded.";
//        }else {
//            echo "Sorry, there was error uploading your file";
//        }
//    }
    
    
    
     $sql = "INSERT INTO Artists (artistName, artistInfo, artistImage) VALUES ('$_REQUEST[artistName]', '$_REQUEST[artistInfo]', '$_REQUEST[artistImage]');";
    



    if($dbh->exec($sql)){
    echo "<a href='index.php'>Back</a>";
    }else {
        echo "Sorry, the new entry was not submitted.";
    }
}
else
    echo "not artist";


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

?>