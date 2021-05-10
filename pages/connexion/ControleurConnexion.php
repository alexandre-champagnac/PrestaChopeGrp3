<?php
class ControleurConnexion
{
    public function includeView()
    {
        include_once "pages/connexion/connexion.php";
    }

    public function authenticate($pseudo, $mdp)
    {
        include_once("DAO/ClientDAO.php");
        $verif = ClientDAO::connexion($pseudo, $mdp);
                if ($verif != null) {
                $_SESSION['idClient'] = $verif->getIdClient();
                $_SESSION['isAdmin'] = $verif->getIsAdmin();
                $_SESSION['panier'] = array();
                return true;
            }
            else {
                return false;
            }
        }

    public function redirectUser()
    {
        header("Location:index.php?page=accueil");
    }

}