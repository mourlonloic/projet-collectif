<?php

include_once("content/php/config.php");

$erreurs = [];

if ($_SERVER['REQUEST_METHOD'] === "POST")
{   
    
    $mail = isset($_POST['mail']) ? htmlentities(trim($_POST['mail'])) : null;
    $objet = isset($_POST['objet']) ? htmlentities(trim($_POST['objet'])) : null;
    $contenu = isset($_POST['contenu']) ? htmlentities(trim($_POST['contenu'])) : null;
    
    if($mail == null || !preg_match( "/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/", $mail))
    {
        array_push($erreurs, "Le mail n'est pas valide");
    }

    if($objet == null || strlen($objet) < 0)
    {
        array_push($erreurs, "L'objet du mail est invalide");
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
} 
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="content/css/style.css">

    <title>Contact Five Forward</title>
</head>

<body>
    <?php include_once("header.php"); ?>


    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                <form method="post" >
                    <div class="form-group">
                        <label for="exampleInputEmail1">Adresse mail</label>
                        <input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="contact@fiveforward.fr">
                    </div>
                    <div class="form-group">
                        <label for="objet">Objet</label>
                        <input name="objet" type="text" class="form-control" id="objet" placeholder="ex :demande de devis">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Contenu</label>
                        <textarea name="contenu" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>

            <br>
            <?php 
            if(!empty($erreurs))
            {
            ?>
            <div class="alert alert-danger" role="alert">
                <?php
                    foreach($erreurs as $erreur)
                    {
                        echo $erreur, "<br>";
                    }
                ?>
            </div>

            <?php 
            }
            ?>

            </div>
            <div class="col"></div>
        </div>
        <br>
        <div class="row">
            <div class="col"></div>
            <div class="col-8 d-flex justify-content-center">


                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.6828890407373!2d3.0190791435502544!3d50.63300747096184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d55c764ab439%3A0x2e9bfd5c48d283b!2sEuraTechnologies!5e0!3m2!1sfr!2sfr!4v1565010418198!5m2!1sfr!2sfr"width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
            <div class="col"></div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>