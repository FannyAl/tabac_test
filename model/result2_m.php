<?php 

// Déclaration de la variable  //////////////////////////////////////////////////////////
$strHtml = "";
$strAlert = "";


if (isset($_POST["choix1"]) && ($_POST["choix1"] != NULL)) 
{
    $_SESSION["choix1"] = intval($_POST["choix1"]); 
    $score = $_SESSION["choix1"];
    header("Location:test2_ctr.php?result=$score");
}

else 
{
    $strAlert .="<div class='alert alert-info' role='alert'>
        <strong>Sélectionner une réponse</strong><a href='#' class='alert-link'></a>
    </div>";
}

?>