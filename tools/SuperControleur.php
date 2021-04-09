<?php


class SuperControleur
{
    public static function callPage($page)
    {
        switch ($page)
        {
            case "connexion" :
                include_once("pages/connexion/ControleurConnexion.php");
                $instance = new ControleurConnexion();

                if(!empty($_POST['pseudo']) && !empty($_POST['mdp']))
                {
                    if ($instance->authenticate($_POST['pseudo'], $_POST['mdp']))
                    {
                        $instance->redirectUser();
                    }
                }
                $instance->includeView();
                break;

            case"filtres":
                include_once("pages/filtres/ControleurFiltres.php");

            case"commande":
                include_once ("pages/commande/ControleurCommande.php");

            case"compte":
                include_once ("pages/infoCompte/ControleurInfoCompte.php");
                $instance = new ControleurInfoCompte();


            case"contact":
                include_once ("pages/formulaireContacte/ControleurFormulaireContacte.php");

            case"commantaire":
                include_once ("pages/commentaires/ControleurCommentaires.php");

            case"listeProduit":
                include_once ("pages/ListProduit/ControleurListeProduits.php");
        }
    }
}