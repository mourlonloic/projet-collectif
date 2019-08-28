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

                    <input type="checkbox" name="prestations[]" value="- Marketing digital" id="presta">
                    <label for="presta">Marketing Digital</label> 
                    <br>

                    <input type="checkbox" name="prestations[]" value="- Stratégie de communication" id="strat"> 
                    <label for="strat">Stratégie de communication</label> 
                    <br>

                    <input type="checkbox" name="prestations[]" value="- Création de contenus/articles" id="crea"> 
                    <label for="crea">Création de contenus/articles</label> 
                    <br>

                    <input type="checkbox" name="prestations[]" value="- Accompagnement au référencement" id="accompa"> 
                    <label for="accompa">Accompagnement au référencement</label> 
                    <br>

                    <input type="checkbox" name="prestations[]" value="- Charte éditoriale" id="charte"> 
                    <label for="charte">Charte éditoriale</label> 
                    <br>

                    <input type="checkbox" name="prestations[]" value="- Création des pages RS" id="rs"> 
                    <label for="rs">Création des pages RS</label> 
                    <br>

                    <input type="checkbox" name="prestations[]" value="Community Manager" id="cm"> 
                    <label for="cm">Community Manager</label> 
                    <br>

                    <input type="checkbox" name="prestations[]" value="- Sites vitrines" id="vitrine"> 
                    <label for="vitrine">Sites vitrines</label> 
                    <br>

                    <input type="checkbox" name="prestations[]" value="- Sites e-commerce" id="site_e"> 
                    <label for="site_e">Sites e-commerce</label> 
                    <br>

                    <input type="checkbox" name="prestations[]" value="- Refonte de sites" id="refonte"> 
                    <label for="refonte">Refonte de sites</label> 
                    <br>

                    <input type="checkbox" name="prestations[]" value="- Landing page" id="landing"> 
                    <label for="landing">Landing page</label> 
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