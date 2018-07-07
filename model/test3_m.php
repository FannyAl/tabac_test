<?php 

// Déclaration de la variable  //////////////////////////////////////////////////////////
$strHtml = "";
$strAlert = "";


if (isset($_POST["choix3"]) && ($_POST["choix3"] != NULL)) 
{
    $_SESSION["choix3"] = intval($_POST["choix3"]); 
    $score2 = $_SESSION["choix3"];

    $_SESSION["oldResult"] = intval($_POST["oldResult"]); 
    $score1 = $_SESSION["oldResult"];

    $score = $score1 + $score2;
    header("Location:test4_ctr.php?result=$score");
}

else 
{
    $strAlert .="<div class='alert alert-info' role='alert'>
        <strong>Sélectionner une réponse</strong><a href='#' class='alert-link'></a>
    </div>";
}

?>
