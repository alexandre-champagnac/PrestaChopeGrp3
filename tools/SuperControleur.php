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
                if (!isset($_SESSION['idClient'])){
                    $instance->includeView();
                }
                if(!empty($_POST['pseudo']) && !empty($_POST['mdp']))
                {
                    if ($instance->authenticate($_POST['pseudo'], $_POST['mdp']))
                    {
                        $instance->redirectUser();
                    }
                }
                break;
            case"filtres":
                include_once("pages/filtres/ControleurFiltres.php");
                break;

            case"commande":
                include_once ("pages/commande/ControleurCommande.php");
                break;

            case"compte":
                include_once ("pages/infoCompte/ControleurInfoCompte.php");
                $instance1 = new ControleurInfoCompte();
                if (!empty($_SESSION['idClient'])){
                    $instance1->includeView();
                }
                else{
                    header("Location: index.php");
                }
                break;


            case"contact":
                include_once ("pages/formulaireContacte/ControleurFormulaireContacte.php");
                break;

            case"commantaire":
                include_once ("pages/commentaires/ControleurCommentaires.php");
                break;

            case"listeProduit":
                include_once ("pages/ListProduit/ControleurListeProduits.php");
                break;
            case"accueil" :
                include_once ("pages/accueil/ControllerAccueil.php");
                $instance2 = new ControllerAccueil();
                $instance2->includeview();
                break;
            case "deconnexion" :
                include_once "DAO/DeconnexionDAO.php";
                DeconnexionDAO::deconnexion();
                header("Location: index.php?page=accueil");
                break;
            case "inscription" :
                include_once "pages/inscription/ControlleurInscription.php";
                $instance3 = new ControlleurInscription();
                $instance3->includeView();

        }
    }
}