<?php

include_once("config.php");

if ($_SERVER['REQUEST_METHOD'] === "POST")
{   
    $erreurs = [];
    
    $mail = isset($_POST['mail']) ? htmlentities(trim($_POST['mail'])) : null;
    $objet = isset($_POST['objet']) ? htmlentities(trim($_POST['objet'])) : null;
    $contenu = isset($_POST['contenu']) ? htmlentities(trim($_POST['contenu'])) : null;
    
    if($mail == null || !preg_match( "/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/", $mail))
    {
        array_push($erreurs, "Le mail n'est pas valide");
    }

    if($objet == null || strlen($objet) < 0)
    {
        array_push($erreurs, "L'Objet du mail est invalide");
    }

    if($contenu == null || strlen($contenu) < 0)
    {
        array_push($erreurs, "Le contenu du mail est invalide");
    }

    if(empty($erreurs))
    {
        $q = $db->prepare("INSERT INTO formulaire (`email`, `objet`, `contenu`, `dateAjout`) VALUE(:email, :objet, :contenu, NOW())");

        $q->bindValue(":email", $mail);
        $q->bindValue(":objet", $objet);
        $q->bindValue(":contenu", $contenu);

        $q->execute();

    }
    else
    {
        echo "<pre>";
        print_r($erreurs);
        echo "</pre>";
    }
    // header("location: ../../contact.php");
} 


