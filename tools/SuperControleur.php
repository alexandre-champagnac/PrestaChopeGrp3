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
                if(!empty($_POST['pseudo']) && !empty($_POST['password']))
                {
                    $instance3->register($_POST['prenom'],$_POST['nom'],$_POST['pseudo'],$_POST['password'], $_POST['mail'], $_POST['adresse']);
                }
                break;

            case "contact" :
                include_once ("pages/contactpage/ControlleurContact.php");
                $instance4 = new ControlleurContact();
                $instance4->includeview();
                break;

            case "panier" :
                include_once ("pages/panier/ControlleurPanier.php");
                $instance5 = new ControlleurPanier();
                $instance5->includeView();
                break;

            case "voirProduit" :
                include_once ("pages/voirProduit/ControllerVoirProduit.php");
                $instance = new ControllerVoirProduit();
                $instance->includeview();
                break;

            case "ajoutproduit" :
                include_once "pages/ajoutproduit/ControllerAddProduit.php";
                $instance = new ControllerAddProduit();
                if (!empty($_GET['id'])){
                    if(!empty($_SESSION['idClient'])) {
                        $instance->addproduit($_GET['id']);
                    }
                }
                header("Location: index.php?page=accueil");

        }
    }
}