<html>
<head>
    <title>Home</title>
    <style type="text/css" src=""></style>
    </head>
<body>
    <?php 
    include "inc_nav.php";
    include "inc_loginArea.php";
    if(isset($_SESSION[username]){
        echo "$_SESSION[username]";
    }
    ?>
    </body>
</html>
