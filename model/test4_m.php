<?php 

// Déclaration de la variable  //////////////////////////////////////////////////////////
$strHtml = "";
$strAlert = "";


if (isset($_POST["choix4"]) && ($_POST["choix4"] != NULL)) 
{
    $_SESSION["choix4"] = intval($_POST["choix4"]); 
    $nbcigar = $_SESSION["choix4"];

    if ($nbcigar <= 9)
    {
    	$score2 = 0;
    }
    elseif ($nbcigar <= 20) 
    {
    	$score2 = 1;
    }
    elseif ($nbcigar <= 30) 
    {
    	$score2 = 2;
    }
    else
    {
    	$score2 = 3;
    }

    $_SESSION["oldResult"] = intval($_POST["oldResult"]); 
    $score1 = $_SESSION["oldResult"];

    $score = $score1 + $score2;
    header("Location:test5_ctr.php?result=$score");
}

else 
{
    $strAlert .="<div class='alert alert-info' role='alert'>
        <strong>Sélectionner une réponse</strong><a href='#' class='alert-link'></a>
    </div>";
}

?>