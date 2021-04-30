<?php


class ControleurInfoCompte
include_once ('DTO/ClientDTO.php')
{
    public function includeView()
    {
        include_once "pages/infoCompte/ModificationCompte.php";
    }
    public function authenticate($pseudo, $mdp)
    {
        include_once("DAO/ClientDAO.php");
        $f=ClientDAO::modifPassword($_SESSION['pseudo']);


    }

    public function redirectUser()
    {
        header("Location: index.php?page=listeProduit");
    }
}