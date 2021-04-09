<?php


class ControleurInfoCompte
{
    public function includeView()
    {
        include_once "pages/infoCompte/ModificationCompte.php";
    }
    public function authenticate($pseudo, $mdp)
    {
        include_once("DAO/ClientDAO.php");
        $verif = ClientDAO::connexion($pseudo, $mdp);

    }

    public function redirectUser()
    {
        header("Location: index.php?page=listeProduit");
    }
}