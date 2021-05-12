<?php

class ControleurInfoCompte{
    public function includeView()
    {
        include_once "pages/infoCompte/EditCompte.php";
    }
    public function authenticate($pseudo, $mdp)
    {
        include_once("DAO/ClientDAO.php");
        include_once("DTO/ClientDTO.php");
        $client = new ClientDTO($_POST['pseudo']);
        ClientDAO::modifInfo($client);
    }

    public function redirectUser()
    {
        header("Location: index.php?page=listeProduit");
    }
}