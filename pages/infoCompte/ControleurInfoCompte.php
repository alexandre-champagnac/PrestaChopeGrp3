<?php

class ControleurInfoCompte{
    public function includeView()
    {
        include_once "pages/infoCompte/ModificationCompte.php";
    }
    public function authenticate($pseudo, $mdp)
    {
        include_once("DAO/ClientDAO.php");
        include_once("DTO/ClientDTO.php");


        $f=ClientDAO::modifInfo($_SESSION['pseudo']);


        ClientDTO::setNom($_POST['nom']);
        ClientDTO::getPseudo();
        ClientDTO::getPrenom();
        ClientDTO::getPassword();
        ClientDTO::getAdresse();
        ClientDTO::getMail();



    }

    public function redirectUser()
    {
        header("Location: index.php?page=listeProduit");
    }
}