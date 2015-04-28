<html>
<head>
    <title>Admin</title>
    <style type="text/css" src=""></style>
    </head>
<body>
    <?php 
    include "inc_nav.php";
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
    <form method="get" action="dbProcessing.php">
    Username: <input type="text" name="userName"><br>
    Password: <input type="text" name="passWord"><br>
    First Name: <input type="text" name="firstName"><br>
    Last Name: <input type="text" name="lastName"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" name="submit" value="Sign Up">
    
    </form>
    
    
    </body>
</html>