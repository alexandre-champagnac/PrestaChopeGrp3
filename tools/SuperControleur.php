<?php


class SuperControleur
{
    public static function callPage($page)
    {
        switch ($page)
        {
            case "connexion" :
                include_once("pages/connexion/ControleurConnexion.php");

            case"filtres":
                include_once("pages/filtres/ControleurFiltres.php");

            case"commande":
                include_once ("pages/commande/ControleurCommande.php");

            case"compte":
                include_once ("pages/infoCompte/ControleurInfoCompte.php");

            case"contact":
                include_once ("pages/formulaireContacte/ControleurFormulaireContacte.php");

            case"commantaire":
                include_once ("pages/commentaires/ControleurCommentaires.php");

            case"listeProduit":
                include_once ("pages/ListProduit/ControleurListeProduits.php");
        }
    }
}