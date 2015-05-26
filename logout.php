<?php
    session_start();
    $_SESSION['username'] = null;
    $_SESSION['password'] = null;
    $_SESSION['isLoggedIn'] = false;
header("Location: index.php");
?>
