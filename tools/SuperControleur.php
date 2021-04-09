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
                $instance1 = new ControleurInfoCompte();

                if(!empty($_POST['pseudo']) || !empty($_POST['mdp']) || !empty($_POST['nom']) || !empty($_POST['Prenom'] )|| !empty($_POST['adresse']) || !empty($_POST['mail']))
                {
                    if ($instance1->authenticate($_POST['pseudo'], $_POST['mdp'],$_POST['nom'],$_POST['Prenom'],$_POST['adresse'],$_POST['mail']))
                    {
                        $instance1->redirectUser();
                    }
                }
                $instance1->includeView();
                break;


            case"contact":
                include_once ("pages/formulaireContacte/ControleurFormulaireContacte.php");

            case"commantaire":
                include_once ("pages/commentaires/ControleurCommentaires.php");

            case"listeProduit":
                include_once ("pages/ListProduit/ControleurListeProduits.php");
        }
    }
}