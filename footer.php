<footer>
    <div class="container">
        <div class="row ">
            <div class="col-sm-3 " id="entreprise">
                <!-- Présentation de l'entreprise -->
                <h4>Five Forward</h4>
                <hr>
                <p>165 Avenue de Bretagne, 59000 Lille</p>
                <p>contact@fiveforward.fr</p>
                <p>03 20 58 74 85</p>
            </div>

            <div class="col-sm-5  ">
                <!-- Barre des réseaux sociaux et newsletter -->
                <p id="footer_RS">
                    Suivez nous ici :
                    <a href="#"><img src="content/images/icones/facebook.png" height="30em"
                            alt="Logo du réseau social Facebook"></a>
                    <a href="#"><img src="content/images/icones/twitter.png" height="30em"
                            alt="Logo du réseau social Twitter"></a>
                    <a href="#"><img src="content/images/icones/linkedin.png" height="30em"
                            alt="Logo du réseau social Linkedin"></a>
                    <a href="#"><img src="content/images/icones/yt.png" height="30em"
                            alt="Logo du réseau social Youtube"></a>
                </p>

                <button id="newsletter_btn" type="button" class="btn btn-outline-info" data-toggle="modal"
                    data-target="#newsletter">Inscrivez-vous à notre newsletter</button>
            </div>

            <div class="col-sm-3 ">
                <!-- Menu du footer -->
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link menu_footer" href="equipe.php">Notre équipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu_footer" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu_footer" href="rgpd.php">Mentions légales</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Formulaire d'inscription a la newsletter -->
<div class="modal fade" id="newsletter" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newsletterTitle">inscription à la newsletter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulaire d'inscription a la newsletter -->
                <form action="" method="post">
                    <p>Choisissez à quelles newsletter s'inscrire : </p>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Entrez votre adresse mail</label>
                        <input type="email" name="newsletter" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="contact@fiveforward.fr">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Valider mes choix</button>
            </div>
        </div>
    </div>
</div>