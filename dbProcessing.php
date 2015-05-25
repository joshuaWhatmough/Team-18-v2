<?php 
error_reporting(E_ALL);
include "dbconnect.php";?>
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
    
//image source code.
require("wideimage/WideImage.php");

echo "<pre>";
print_r($_FILES);
echo "</pre>\n";

//if ((($_FILES["imagefile"]["type"] == "image/gif")
//|| ($_FILES["imagefile"]["type"] == "image/jpeg")
//|| ($_FILES["imagefile"]["type"] == "image/pjpeg"))
//&& ($_FILES["imagefile"]["size"] < 2000000))
//{
//    // check for any error code in the data
//	if ($_FILES["imagefile"]["error"] > 0)
//	{
//		echo "Error Code: " . $_FILES["imagefile"]["error"] . "<br />";
//	}
//	else
//	{
//        // print some information again (in case you're interested in how even though the print_r() shows it above)
//		echo "<p>Upload: " . $_FILES["imagefile"]["name"] . "<br />\n";
//		echo "MIME Type: " . $_FILES["imagefile"]["type"] . "<br />\n";
//		echo "Size: " . round($_FILES["imagefile"]["size"] / 1024, 1) . " KB<br />\n";
//		// uploaded files are stored in a temporary location on the server until we move them (if we want to)
//		echo "Temp file: " . $_FILES["imagefile"]["tmp_name"] . "</p>\n";
//
//		// check to see if a file with that name already exists in our destination directory
//		// you could rename the files so that this is not a concern (e.g. with a unique identify based on time or database details)
//		// so this is just for demonstration purposes
//		if (file_exists("images/" . $_FILES["imagefile"]["name"]))
//		{
//			echo $_FILES["imagefile"]["name"] . " already exists. \n";
//		}
//		else
//		{
//			// create a new unique filename using current time and existing filename
//			$newName = $_FILES["imagefile"]["name"];
//            $newFullName = "images/{$newName}";
//			// move the temporary file to the destination directory (images) and give it its new name
//			move_uploaded_file($_FILES["imagefile"]["tmp_name"], $newFullName);
//			// set the permission on the file
//			chmod($newFullName, 0644);
//			echo "Stored original as: $newFullName<br />\n";
//			// at this point, we could save the filename to a database if we wanted to...
//            $size = getimagesize($newFullName);
//            echo "<img src=\"$newFullName\" " . $size[3] . " /><br />\n";
//
//			// NOW, create a separate thumbnail from original image, if selected in form
//            if (isset($_REQUEST['thumbnailChoice']))
//            {
//                // demo of the {} syntax as well...
//                $image = WideImage::load($newFullName);
//                // resize maintains aspect ratio, so the new image will fit within the rectangle defined by the parameters
//                // you might like to use a constant for this size
//                $thumbnailImage = $image->resize(300, 300);
//                $thumbFullName = "images/thumb{$newName}";
//                $thumbnailImage->saveToFile($thumbFullName);
//                echo "Stored thumnail as: $thumbFullName<br />\n";
//                $size = getimagesize($thumbFullName);
//                echo "<img src=\"$thumbFullName\" " . $size[3] . " /><br />\n";
//            }
//		}
//	}
//}
//else
//{
//	// generic error if initial test failed
//	// you would turn this into more appropriate and user-friendly error messages
//	echo "Invalid file";
//}
    
    
     $sql = "INSERT INTO Artists (artistName, artistInfo, artistImage) VALUES ('$_REQUEST[artistName]', '$_REQUEST[artistInfo]', '$_REQUEST[imagefile]');";
    



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
        if ($_REQUEST['password'] == $row['password']){
            $isLoginOk = true;
        }
        if ($isLoginOk){
            $_SESSION['username'] = $_REQUEST['username'];
            $_SESSION['password'] = $_REQUEST['password'];
            echo "Login Succeeded<br><a href='index.php'>Back</a>";
        }
    }
    }
    if ($isLoginOk == false){
        echo "No user found.";
    }
}
print_r($_REQUEST);
?>
