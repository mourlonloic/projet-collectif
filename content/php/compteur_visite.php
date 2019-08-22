<?php 

function compteur($afficher = 0)
{
    $chemin = "./content/compteur.txt";

    $contenu = file_get_contents($chemin);
    if($contenu == '')
    {
        if($afficher == 0)
        {
            file_put_contents($chemin, date("d-m-Y"). ":1\n");
        }
        else
        {
            return "1";
        }
    }
    else 
    {
        $lignes = explode("\n", $contenu);
        $nbrDeLignes = count($lignes);
        $derniereLigne = $lignes[$nbrDeLignes -2];
        $exLigne = explode(":", $lignes[$nbrDeLignes -2]);

        if($exLigne[0] == date("d-m-Y"))
        {
            if($afficher == 0)
            {

                $ligneAModifier = date("d-m-Y") . ":" .$exLigne[1];
                $remplacerPar = date("d-m-Y"). ":" .((int)$exLigne[1] +1);
                $nouveauContenu = str_replace($ligneAModifier, $remplacerPar, $contenu);
                file_put_contents($chemin, $nouveauContenu, LOCK_EX);
            }
            elseif ($afficher == 1)
            {
                return $exLigne[1];
            }
            elseif ($afficher == 2)
            {
                $statTotal = 0;
                foreach($lignes as $ligne)
                {
                    if($ligne != "")
                    {
                        (int)$ligneStat = explode(":", $ligne);
                        $statTotal += (int)$ligneStat[1];
                    }
                }
                return (int)$statTotal;
            }
        }
        else
        {
            if($afficher == 0)
            {
                file_put_contents($chemin, date("d-m-Y"). ":1\n", FILE_APPEND | LOCK_EX);
            }
            elseif ($afficher == 1)
            {
                return "1";
            }
            elseif ($afficher == 2)
            {
                $statTotal = 0;
                foreach($lignes as $ligne)
                {
                    if($ligne != "")
                    {
                        $ligneStat = explode(":", $ligne);
                        $statTotal += $ligneStat[1];
                    }
                }
                return $statTotal;
            }
        }
    }
}

compteur();//on compte la visite
echo "Le site comptabilise ".compteur(1)." visite(s) aujourd'hui et ".compteur(2)." au total!";
