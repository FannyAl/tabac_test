<?php 

if (isset($_POST["choix1"]) && ($_POST["choix1"] != NULL)) 
{
    $_SESSION["choix1"] = intval($_POST["choix1"]); 
    $score = $_SESSION["choix1"];
    header("Location:test2_ctr.php?result=$score");
}

?>