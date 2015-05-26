<nav>
<ul>
    <?php 
    function createNavigationItem($fileName, $pageName) {
        $urlString = $_SERVER["SCRIPT_FILENAME"];
        $urlArray = explode("/", $urlString);
        foreach ($urlArray as $str){
        $lastString = $str;
        }
        if ($lastString != $fileName){
        echo "<li><a href=\"$fileName\">$pageName</a></li>";
        } else {
        echo "<li>$pageName</li>";
        }
    }
    createNavigationItem("index.php", "Home");
    createNavigationItem("musos.php", "Musos");
    createNavigationItem("events.php", "Events");
    createNavigationItem("bulletin_board.php", "Bulletin Board");
    createNavigationItem("members.php", "Become a Member");
//    createNavigationItem("admin.php", "Admin")
?>
    </ul>
</nav>
