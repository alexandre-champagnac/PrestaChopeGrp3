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
                if (!empty($_SESSION['idClient'])){
                    include_once ("pages/infoCompte/ControleurInfoCompte.php");
                    $instance1 = new ControleurInfoCompte();
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
                if (!empty($_SESSION['idClient'])) {
                    include_once("pages/contactpage/ControlleurContact.php");
                    $instance4 = new ControlleurContact();
                    $instance4->includeview();
                }
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
                if(!empty($_SESSION['idClient'])) {
                    include_once "pages/ajoutproduit/ControllerAddProduit.php";
                    $instance = new ControllerAddProduit();
                    if (!empty($_POST['id']) && !empty($_POST['quantite'])){

                            $instance->addproduit($_POST['id'],$_POST['quantite']);
                        }
                }
                header("Location: index.php?page=panier");
            case "modifcompte" :
                include_once "pages/modifcompte/ControllerModifCompte.php";
                $instance = new ControllerModifCompte();
                if (!empty($_SESSION['idClient']) && !empty($_POST['prenom'])) {
                    $instance->modifCompte($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['adresse'],$_POST['pseudo'],$_SESSION['idClient']);
                }
                if(!empty($_POST['password'] && !empty($_POST['newpassword']))){
                    if($_POST['password'] == $_POST['newpassword']){
                        $instance->modifPassword($_POST['password'],$_SESSION['idClient']);
                    }
                }
                header("Location: index.php?page=accueil");
                break;

        }
    }
}