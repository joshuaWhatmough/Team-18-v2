<button action="logout()">Logout</button>
<?php
function logout(){
    echo "hello world";
    session_destroy();
}
?>
