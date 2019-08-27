<!doctype html>
<html lang="fr">

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

    <h1 id="cache_accueil">ACCUEIL</h1>

    <video src="content/video/refonte_presentation.mp4"  loop="true" controls="true"></video>

    <div class="centrer_index">
        <p> Nous sommes <span href="" class="typewrite" data-period="2000"
                data-type='["des développeurs", "des webmarketeurs", "des gamers"]'><span
                    class="wrap"></span></span><br>
            Nous concevons et développons des outils web et mobile.<br />
            Nous les rendons visibles et rentables.<br />
            Nous aidons nos clients à gagner des clients sur Internet.<br />
        </p>
    </div>

    <div class="container" id="container_compteur_accueil" >
        <div class="row ">
            <div class="col d-flex justify-content-center">
                <div class="card compteur" id="client">
                    <img id="icone_client" src="content/images/icones/client.png" width="100" height="100" alt="icone_de_client">
                    
                    <div class="counter">
                        <i class="fa fa-code fa-2x"></i>
                        <h2 class="timer count-title count-number" data-to="5" data-speed="5000"></h2>
                        <p class="count-text">Clients</p>
                    </div>

                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card compteur" id="projet">
                    <img id="icone_projet" src="content/images/icones/projet.png" width="100" height="100" alt="icone_de_projet">
                    
                    <div class="counter">
                        <i class="fa fa-code fa-2x"></i>
                        <h2 class="timer count-title count-number" data-to="27" data-speed="5000"></h2>
                        <p class="count-text">Projets</p>
                    </div>

                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card compteur" id="café">
                    <img id="icone_cafe" src="content/images/icones/cafe.png" width="100" height="100" alt="icone_café">

                    <div class="counter">
                        <i class="fa fa-code fa-2x"></i>
                        <h2 class="timer count-title count-number" data-to="70" data-speed="5000"></h2>
                        <p class="count-text">Litres de café</p>
                    </div>

                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card compteur" id="visite">
                    <img id="icone_visiteur" src="content/images/icones/visiteur.png" width="100" height="100" alt="icone_visiteur">
                    <?php include_once("content/php/compteur_visite.php"); ?>

                </div>
            </div>
        </div>
    </div>

    
<div class="d-flex justify-content-center">
    <div id="cookie_bloc" class="cookie">
        <p id="text_cookie" >En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de traceurs (cookies) afin de réaliser des statistiques anonymes de visites, vous proposer des contenus et services adaptés à vos centres d'intérêts et vous permettre de partager des informations sur les réseaux sociaux. <button id="cookie_btn" class="cookie_btn">J'accepte</button></p>
    </div>
</div>




    <?php include_once("footer.php"); ?>

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
    <script src="content/javascript/compteur.js"></script>

    <!-- Cookie -->
<script>

var cookie = $("#cookie_btn");
var barreCookie = $("#cookie_bloc")

cookie.on("click", function(){
    barreCookie.hide();
});

</script>

</body>

</html>