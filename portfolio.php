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

    <title>PortFolio Five Forward</title>
</head>

<body>
    <?php include_once("header.php"); ?>

    <div class="titre">
        <h1>Portfolio</h1>
    </div>

    <div class="groupe_barette">
        <div class="barette barette_1"></div>
        <div class="barette barette_2"></div>
    </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="content/images/screen/screen.png" class="d-block w-100" alt="Page d'accueil du projet de wiki Zelda">
                </div>
                <div class="carousel-item">
                    <img src="content/images/screen/screen_2.png" class="d-block w-100" alt="Page de selection wiki Zelda">
                </div>
                <div class="carousel-item">
                    <img src="content/images/screen/screen_3.png" class="d-block w-100" alt="page de jeu du wiki Zelda">
                </div>
                <div class="carousel-item">
                    <img src="content/images/screen/site_ro_1.png" class="d-block w-100" alt="page d'accueil du wiki Crash Bandicoot'">
                </div>
                <div class="carousel-item">
                    <img src="content/images/screen/site_ro_2.png" class="d-block w-100" alt="page de contact du wiki Crash Bandicoot">
                </div>
                <div class="carousel-item">
                    <img src="content/images/screen/site_ro_3.png" class="d-block w-100" alt="page de selection du jeu du wiki Crash Bandicoot">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
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
</body>

</html>