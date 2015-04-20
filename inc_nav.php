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
    createNavigationItem("about_us.php", "About Us");
    createNavigationItem("events.php", "Events");
    createNavigationItem("bulletin_board.php", "Bulletin Board");
    createNavigationItem("musos.php", "Musos");
    createNavigationItem("members.php", "Members");
    createNavigationItem("sponsors.php", "Sponsors");
?>
    </ul>