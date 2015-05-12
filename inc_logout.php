<button action="logout()">Logout</button>
<?php
function logout(){
    session_destroy();
}
?>
