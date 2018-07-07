<?php 

// Déclaration de la variable  //////////////////////////////////////////////////////////
$strHtml = "";
$strAlert = "";


if (isset($_POST["choix6"]) && ($_POST["choix6"] != NULL)) 
{
    $_SESSION["choix6"] = intval($_POST["choix6"]); 
    $score2 = $_SESSION["choix6"];

    $_SESSION["oldResult"] = intval($_POST["oldResult"]); 
    $score1 = $_SESSION["oldResult"];

    $score = $score1 + $score2;

    if ($score <= 2) 
    {
    	header("Location:result1_ctr.php?result=$score");
    }
    elseif ($score <= 4) 
    {
    	header("Location:result2_ctr.php?result=$score");
    }
    elseif ($score <= 6) 
    {
    	header("Location:result3_ctr.php?result=$score");
    }
    else
    {
    	header("Location:result4_ctr.php?result=$score");
    }

}

else 
{
    $strAlert .="<div class='alert alert-info' role='alert'>
        <strong>Sélectionner une réponse</strong><a href='#' class='alert-link'></a>
    </div>";
}

?>