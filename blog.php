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
    <title>Blog Five Forward</title>
</head>

<body>
    <?php include_once("header.php"); ?>

    <div class="titre">
        <h1>Blog</h1>
    </div>

    <div class="groupe_barette">
        <div class="barette barette_1"></div>
        <div class="barette barette_2"></div>
    </div>

    <div class="container">

        <div class="row article">
            <div class="col ">
                <!-- Carte de gauche -->
                <div class="card" style="width: 18rem;">
                    <img src="content/images/Cahier_des_charges.jpg" class="card-img-top" alt="Illustration du cahier des charges">
                    <div class="card-body">
                        <h5 class="card-title">Création d'un cahier des charges</h5>
                        <p class="card-text">Le cahier des charges décrit précisément les besoins auxquels le
                            prestataire doit répondre, et organise la relation entre les différents acteurs tout au long
                            d'un projet.</p>
                        <a href="content/articles/cahier_des_charges.php" class="btn btn-outline-info">Voir l'article complet</a>
                        <p class="card-text"><small class="text-muted">Auteur : Jean No' Brabant / 3 Juillet
                                2019</small></p>
                    </div>
                </div>

            </div>
            <div class="col ">
                <!-- Carte centrale -->

                <div class="card" style="width: 18rem;">
                    <img src="content/images/Wordpress-vs-HTML.png" class="card-img-top" alt="Illustration du cms vs code pur">
                    <div class="card-body">
                        <h5 class="card-title">CMS vs développement pur</h5>
                        <p class="card-text">Les CMS (comme WordPress) sont des programmes informatiques utilisant une
                            base de données et permettant de gérer de A et Z l’apparence et le contenu d’un site web, de
                            façon plus ou moins accessible pour le grand public. Alors pourquoi débourser plus pour
                            concevoir son site web et faire appel à des développeurs ?.</p>
                        <a href="content/articles/cms_vs_code.php" class="btn btn-outline-info">Voir l'article complet</a>
                        <p class="card-text"><small class="text-muted">Auteur : Romain Devillez / 10 Juillet
                                2019</small></p>
                    </div>
                </div>

            </div>
            <div class="col ">
                <!-- Carte de droite -->

                <div class="card" style="width: 18rem;">
                    <img src="content/images/transformation-digitale.jpg" class="card-img-top" alt="Illustration de la transformation digitale">
                    <div class="card-body">
                        <h5 class="card-title">Pourquoi faire passer son entreprise en 2.0</h5>
                        <p class="card-text">À l’image de la révolution industrielle, la transition numérique est une
                            étape nécessaire pour accéder à un nouveau marché et de nouvelles opportunités. Cette
                            transformation est une nécessité de nos jours pour toute entreprise. Elle permettre, par
                            exemple, la dématérialisation de sa liste de clients et de ses fournisseurs. Aujourd’hui une
                            entreprise qui n’a pas effectué ce passage en «2.0» rate de potentiel nouveau clients.</p>
                        <a href="content/articles/transformation_digitale.php" class="btn btn-outline-info">Voir l'article complet</a>
                        <p class="card-text"><small class="text-muted">Auteur : Loïc Mourlon / 17 Juillet 2019</small>
                        </p>
                    </div>
                </div>
            </div>
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
</body>

</html>