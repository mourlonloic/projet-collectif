<?php

include("config.php");


if ($_SERVER['REQUEST_METHOD'] === "POST")
{
    $erreurs = [];

    $mail = isset($_POST['mail']) ? htmlentities(trim($_POST['mail'])) : null;
    $objet = isset($_POST['objet']) ? htmlentities(trim($_POST['objet'])) : null;
    $contenu = isset($_POST['contenu']) ? htmlentities(trim($_POST['contenu'])) : null;

    if($mail == null || !preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $mail)
    {
        $erreurs["mail"] = "L'adresse mail n'est pas valide";
    }

} 


