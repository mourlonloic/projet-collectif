<?php

$dbb = include_once("content/php/pdo.php");

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

    <title>Accueil Five Forward</title>
</head>

<body>
    <?php include_once("header.php"); ?>

    <h1>ACCUEIL</h1>

    <div class="resume-home">
        <div class="container">
            <div class="text-banner">

                <p> Nous sommes  <span href="" class="typewrite" data-period="2000" data-type='["des développeurs", "des webmarketeurs", "des gamers"]'><span class="wrap"></span></span><br>
                    Nous concevons et développons des outils web et mobile.<br />
                    Nous les rendons visibles et rentables.<br />
                    Nous aidons nos clients à gagner des clients sur l’Internet.<br />

                </p>
            </div>

        </div>
    </div>

    <?php include_once("content/php/compteur_visite.php"); ?>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="content/javascript/text_modif.js"></script>
</body>

</html>