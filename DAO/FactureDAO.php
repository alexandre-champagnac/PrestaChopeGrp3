<?php

require_once ('tools/DataBaseLinker.php');
class FactureDAO
{
    static function TotalTresorerie()
    {
        $bdd = DataBaseLinker::getConnexion();
        $reponse = $bdd->prepare('Select SUM(montant) from facture');
        $reponse->execute();
        $montant = $reponse->fetch();
        $money = $montant[0];
        if ($money == null) {
            $money = 0;
        }
        return $money;
    }
}