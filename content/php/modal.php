<button id='bouton_rs' class="btn btn-primary" data-toggle="modal" data-target="#devis">Demande de
    renseignements</button>


<!-- Modal -->
<div class="modal fade" id="devis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Demande de renseignements</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body formulaire">
                <h4>Quelles prestations vous intérèsse ?</h4>
                <form action="contact.php" method="post">

                    <input type="checkbox" name="prestations[]" value="- Marketing digital"> Marketing Digital

                    <br>

                    <input type="checkbox" name="prestations[]" value="- Stratégie de communication"> Stratégie de communication

                    <br>

                    <input type="checkbox" name="prestations[]" value="- Création de contenus/articles"> Création de contenus/articles

                    <br>

                    <input type="checkbox" name="prestations[]" value="- Accompagnement au référencement"> Accompagnement au référencement

                    <br>

                    <input type="checkbox" name="prestations[]" value="- Charte éditoriale"> Charte éditoriale

                    <br>

                    <input type="checkbox" name="prestations[]" value="- Création des pages RS"> Création des pages RS

                    <br>

                    <input type="checkbox" name="prestations[]" value="Community Manager"> Community Manager

                    <br>

                    <input type="checkbox" name="prestations[]" value="- Sites vitrines"> Sites vitrines

                    <br>

                    <input type="checkbox" name="prestations[]" value="- Sites e-commerce"> Sites e-commerce

                    <br>

                    <input type="checkbox" name="prestations[]" value="- Refonte de sites"> Refonte de sites

                    <br>

                    <input type="checkbox" name="prestations[]" value="- Landing page"> Landing page

                    <br>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                    <input type="submit" class="btn" value="Valider mes choix">
                </form>
            </div>
        </div>
    </div>
</div>